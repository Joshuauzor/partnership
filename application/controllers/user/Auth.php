<?php defined('BASEPATH') OR exit ('No direct access allowed');

class Auth extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session', 'form_validation'));
        $this->load->helper(array('form', 'url', 'email_helper'));
        $this->load->model(array('User_Model', 'Category_Model'));
        
    }

    public function index(){
        $data['title'] = 'Partnership | Login';
        if($this->input->post()){
            // validate form
            $this->form_validation->set_rules('email', 'Email','required|trim',
                [
                        'required'      => 'You have not provided %s.',
                ]
            );
            $this->form_validation->set_rules('password', 'Password', 'required');

            if($this->form_validation->run()){
                $user = $this->User_Model->check_email($this->input->post('email'));
                // var_dump($user); die;
                if($user){
                    $confirmPass = password_verify($this->input->post('password'), $user->password);
                    if($confirmPass){
                        if($user->status == "active"){
                            // set user session
                            $data = [
                                'id' => $user->id,
                                'uniid' => $user->uniid,
                                'name' => $user->name,
                                'email' => $user->email,
                                'code' => $user->code,
                                'role' => $user->role,
                                'isLoggedIn' => true,
                            ];
                            $this->session->set_userdata('user', $data);
                
                            // Home
                            redirect(base_url('home'));
                        }
                        else{
                            $this->session->set_flashdata('error', 'Please check your mail to activate your account or contact Admin');
                            redirect(current_url());
                        }
                    }
                    else{
                        // print debug message
                        $this->session->set_flashdata('error', 'Incorrect Code, Email and/or Password');
                        redirect(current_url());
                    }
                }
                else{
                     // print debug message
                     $this->session->set_flashdata('error', 'Incorrect Code, Email and/or Password');
                     redirect(current_url());
                }
            }

        }
        $this->load->view('user_view/auth/login', $data);
    }

    //--------------------------------------------------------------------

    public function register(){
        $data['title'] = 'Partnership | Register';
        $data['all_categories'] = $this->Category_Model->get_All();
        
        if($this->input->post()){
            // validate form
            $this->form_validation->set_rules('name', 'Name', 'required', [
                'required'      => 'Full name is required',
            ]);
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('dob', 'Date Of Birth', 'required');
            $this->form_validation->set_rules('category', 'Category', 'required');
            $this->form_validation->set_rules('email', 'Email','required|valid_email|is_unique[users.email]',
                [
                        'required'      => 'You have not provided %s.',
                        'is_unique'     => 'Email already exists.'
                ]
            );
        
            if($this->form_validation->run()){
                // formalize req in the good format
                $uniid = md5(str_shuffle('bjdshge3737gdnabhvabau3283ypspjdnaqerxnm'));
                $hashed_pass = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
                $code = 'GNP-' ."" .$this->generatePIN(1);
                $check_code = $this->User_Model->check_code($code);

                // date of birth
                $stringarr = explode('-',$this->input->post('dob'));
                $DYear = $stringarr[0]; 
                $DMonth = $stringarr[1]; 
                $DDay = $stringarr[2];
    
                
                do{
                    // check if code exist
                    if(!$check_code){
                        // insert into db...
                         $data = [
                            'name' => $this->input->post('name', FILTER_SANITIZE_STRING),
                            'email' => $this->input->post('email', FILTER_SANITIZE_EMAIL),
                            'uniid' => $uniid,
                            'code' => $code,
                            'birth_day' => $DDay,
                            'birth_month' => $DMonth,
                            'birth_year' => $DYear,
                            'password' => $hashed_pass
                        ];
                        // check if code is in db
                        if($this->User_Model->insert($data)){
                            // send mail with activation link and code
                            $receiver_name = $this->input->post('name', FILTER_SANITIZE_STRING);
                            $receiver_email = $this->input->post('email', FILTER_SANITIZE_EMAIL);
                            $receiver_code = $code;

                            #load helper
                            $send_mail = register_message($receiver_email, $uniid ,$receiver_code, $receiver_name);
                            // Check the sendMail method and add defined parameters
                            if($send_mail){
                                $this->session->set_flashdata('success', 'A verification link has been sent to you. Please verify your account within 2 hours!');
                                redirect(base_url('register'));
                            }
                            else{
                                $this->session->set_flashdata('error', 'An Error Occured! Try Again!');
                                redirect(base_url('register'));
                            }
                        }
                        else{
                            // print debug message
                            $this->session->set_flashdata('error', 'Opps! an error occured!');
                            redirect(base_url('user/auth/register'));
                        }
                    }
                    else{
                        $code = NULL;
                    }
                }
                while($code = NULL);

            }
            else{
                $this->session->set_flashdata('error', validation_errors());
            }
        }

        $this->load->view('user_view/auth/register', $data);
    }

    //--------------------------------------------------------------------

    public function activate($uniid = null){
        $data['title'] = 'Partnership | Register';

        if(!empty($uniid)){
            $user = $this->User_Model->getUniid($uniid);
            if($user){
                if($this->registerExpiryTime($user->created_at)){
                    if($user->status == 'inactive'){
                        $data = [
                            'status' => 'active'
                        ];
                        if($this->User_Model->updateByUniid($uniid, $data)){
                            $this->session->set_flashdata('success', 'Account activated!. You can now Login');
                            redirect(base_url('user/auth'));
                        }
                        else{
                            $data['error'] = 'Opps! Operation cannot be performed at the moment. Contact Admin!';
                        }
                    }
                    else{
                        $this->session->set_flashdata('error', 'Account already activated. Please Login');
                        redirect(current_url());
                    }
                }
                else{
                    $data['error'] = 'Activation link expired. Contact Admin!';
                }
            }
            else{
                $data['error'] = 'Opps! Account does not exist!';
            }
        }
        else{
            $data['error'] = 'Opps! Unable to handle your request at the moment';
        }

        $this->load->view('user_view/auth/activate', $data);
    }

    //--------------------------------------------------------------------

    public function forgotPass(){
        $data['title'] = 'Partnership | Forgot Password';
        // var_dump($this->input->post()); die;

        if($this->input->post()){
            $this->form_validation->set_rules('email', 'Email','required|valid_email|trim',
                [
                        'required'      => 'You have not provided %s.',
                ]
            );
            

            if($this->form_validation->run()){
                $user = $this->User_Model->check_email($this->input->post('email'));
                if($user){
                    $data = [
                        'updated_at' => date('Y-m-d h:i:s')
                    ];

                    // send mail
                    $uniid = $user->uniid;
                    $code = $user->code;
                    // update user
                    if($this->User_Model->updateByUniid($uniid, $data)){

                        // Check the sendMail method and add defined parameters
                            $receiver_name = $this->input->post('name', FILTER_SANITIZE_STRING);
                            $receiver_email = $this->input->post('email', FILTER_SANITIZE_EMAIL);
                            $receiver_code = $code;

                            #load helper
                            $send_mail = register_message($receiver_email, $uniid ,$receiver_code, $receiver_name);
                        if($send_mail){
                            $this->session->set_flashdata('success', 'A password reset link has been sent to your email. Please verify within 15mins');
                            redirect(current_url());
                        }
                        else{
                            $this->session->set_flashdata('error', 'Opps! Unable to send reset link at the moment. please try again!');
                            redirect(current_url());
                        }
                    }
                    else{
                        $this->session->set_flashdata('error', 'Unable to reset. Try again!');
                        redirect(current_url());
                    }
                }
                else{
                    $this->session->set_flashdata('error', 'Opps! User not available!');
                    redirect(current_url());
                }
            }
            else{
                $this->session->set_flashdata('error', validation_errors());
            }
        }

        $this->load->view('user_view/auth/forgot_pass', $data);
    }

    //--------------------------------------------------------------------

    public function resetPass($uniid = null){
        $data['title'] = 'Reset Password | Partnership';

        if(!empty($uniid)){
            $user = $this->User_Model->getUniid($uniid);

            if($user){
                // check expiry time
                if($this->checkResetExpTime($user->updated_at)){
                    if($this->input->post()){
                        // validate
                        $this->form_validation->set_rules('password', 'Password', 'required');
                        $this->form_validation->set_rules('confirmPass', 'Comfirm Password', 'required|matches[password]');

                        if($this->form_validation->run()){
                            $hashed_pass = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
                            $data = [
                                'password' => $hashed_pass
                            ];

                            if($this->User_Model->updateByUniid($uniid, $data)){
                                $this->session->set_flashdata('success', 'Password successfully updated!. You can now login');
                                redirect(base_url('user/auth'));
                            }
                            else{
                                $this->session->set_flashdata('error', 'Unable to update password');
                                redirect(current_url());
                            }
                        }
                        else{
                            $this->session->set_flashdata('error', validation_errors());
                            redirect(current_url());
                        }
                    }
                }
                else{
                    $data['error'] = 'Reset link is expired!!'; //use data to avoid page reload but maintain logic in the view
                }

            }
            else{
                $data['error'] = 'Opps! Unable to find your account!!';
            }
        }
        else{
            $data['error'] = 'Opps! Unauthorised access!';
        }

        $this->load->view('user_view/auth/reset_pass', $data);

    }

    //--------------------------------------------------------------------

    private function registerExpiryTime($regTime){
        $date = date('Y-m-d H:i:s'); 
        $currTime = strtotime($date);
        $regTime = strtotime($regTime);
        $diffTime = $currTime - $regTime;
        // var_dump($diffTime); die;

        if(3600 > $diffTime){
            return true;
        }
        else{
            return false;
        }
    }

    //--------------------------------------------------------------------


    private function checkResetExpTime($updatedTime){
        $date = date('Y-m-d H:i:s'); 
        $currTime = strtotime($date);

        $resetTime = strtotime($updatedTime);
        $diffTime = ($currTime - $resetTime)/360;

        if(737 > $diffTime){
			return true;
		}
		else{
			return false;
		}
    }

    //--------------------------------------------------------------------

    private function generatePIN($digits = 4){
        $i = 0; 
        $pin = ""; 
        while($i < $digits){
            $pin .= random_int(1000, 99999);
            $i++;
        }
        return $pin;
    }

    //--------------------------------------------------------------------

    public function logout(){
        if(! $this->session->user){
            redirect(base_url('user/auth'));
        }
        else{
            $this->session->unset_userdata('user');
            redirect(base_url('user/auth'));
        }
    }
}