<?php defined('BASEPATH') OR exit ('No direct access allowed');

class Users extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session', 'form_validation'));
        $this->load->helper(array('form', 'url'));
        $this->load->model(array('User_Model', 'Category_Model'));
        
    }


    public function index(){
        if(! $this->session->user['isLoggedIn']){
            redirect(base_url('login'));
        }
        $data['title'] = 'Partnership | Users';
        $id = $this->session->user['id'];
        $data['current_user'] = $this->User_Model->getOne($id);

        // begin
        $data['allUsers'] = $this->User_Model->getAllUsers();
        $data['all_categories'] = $this->Category_Model->get_All();
        $this->load->view('user_view/home/users', $data);
    }

    // --------------------------------------------------------------------

    // public function register(){
    //     if(! $this->session->user['isLoggedIn']){
    //         redirect(base_url('login'));
    //     }
    //     $data['title'] = 'Partnership | Users';
    //     $id = $this->session->user['id'];
    //     $data['current_user'] = $this->User_Model->getOne($id);

    //     // begin
    //     $data['allUsers'] = $this->User_Model->getAllUsers();
    //     $data['all_categories'] = $this->Category_Model->get_All();

    //     $this->load->view('user_view/home/register', $data);
    // }

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

       private function generatePIN($digits = 4){
        $i = 0; 
        $pin = ""; 
        while($i < $digits){
            $pin .= random_int(1000, 99999);
            $i++;
        }
        return $pin;
    }

}