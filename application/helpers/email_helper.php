<?php defined('BASEPATH') OR exit ('No direct access allowed');

function email_configuration(){
        $CI =& get_instance();

        # mail sending protocol
        $config = array();
        $config['useragent'] = "CodeIgniter";
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "ssl://smtp.gmail.com";
        $config['smtp_port'] = "465";
        $config['mailtype'] = 'html';
        $config['smtp_user'] = 'Zealtechnologies10@gmail.com';
        $config['smtp_pass'] = 'Zealtechnologies21';
        $config['charset']  = 'utf-8';
        $config['newline']  = "\r\n";
        $config['wordwrap'] = TRUE;

        $CI->load->library('email');

        $CI->email->initialize($config);

        $CI->email->from('Zealtechnologies10@gmail.com', 'Info');        
    }

    // -----------------------------------------------------

    if(!function_exists('register_message')){
        function register_message($receiver_email, $receiver_uniid ,$receiver_code, $receiver_name){
            $CI	=&	get_instance();
            email_configuration();

            $to = $receiver_email;
            $uniid = $receiver_uniid;
            $name = $receiver_name;
            $code = $receiver_code;
            $subject = 'Account Activation';
            $message = '<div style="line-height: 1.5;">
                Dear '.$name.',<br>Your partnership registration was successful.<br> Kindly click the button or copy and paste the link below in a browser to verify your email address.<br>
                <a href="'.base_url().'activate/'.$uniid.'" target="_blank">Click here to Activate Account</a> <a href="'.base_url().'user/auth/activate/'.$uniid.'" target="_blank"><button class="mt-1 btn btn-primary btn-lg" style="background-color: rgb(105, 105, 233); color: aliceblue; border-radius: 1em; border-width: 0;">Activate Now</button>
                </a>
                <div>Your Partnership ID is: '.$code.'</div>
                <div>Please keep it safe!</div>
                <div>Partnership program has consistently and relentlessly put the immediate needs of humanity at the fore front of it’s existence ensuring the enrichment, empowerment of lives and eradication of humanities greatest deprivation</div>
                <br>Best regard,<br>
                from us at GPU.<br>
                </div>';

            $CI->email->to($to);
            $CI->email->subject($subject);
            $CI->email->message($message);

            if($CI->email->send()){
                return true;
            }
            else{
                return false;
            }
        }
    }

    #--------------------------------------------------------------------------

    if(!function_exists('forgot_password_message')){
        function forgot_password_message($receiver_email, $receiver_uniid ,$receiver_code, $receiver_name){
            $CI	=&	get_instance();
            email_configuration();

            $to = $receiver_email;
            $uniid = $receiver_uniid;
            $name = $receiver_name;
            $code = $receiver_code;
            $subject = 'Account Activation';
            $message = '<div style="line-height: 1.5;">
            Dear '.$name.',<br>A password request link has been sent to you, if this activity was not done by you please contact the admin to secure your account.<br>
                <a href="'.base_url().'user/auth/resetPass/'.$uniid.'" target="_blank">Click here to Reset Your Password</a> <a href="'.base_url().'user/auth/resetPass/'.$uniid.'" target="_blank"><button class="mt-1 btn btn-primary btn-lg" style="background-color: rgb(105, 105, 233); color: aliceblue; border-radius: 1em; border-width: 0;">Reset Password</button>
                </a>
                <div>Your Partnership ID is: '.$code.'</div>
                <div>Please keep it safe!</div>
                <br>Best regard,<br>
                from us at GPU.<br>
            </div>';
            $message = '<div style="line-height: 1.5;">
                Dear '.$name.',<br>Your partnership registration was successful.<br> Kindly click the button or copy and paste the link below in a browser to verify your email address.<br>
                <a href="'.base_url().'reset_password/'.$uniid.'" target="_blank">Click here to Activate Account</a> <a href="'.base_url().'reset_password/'.$uniid.'" target="_blank"><button class="mt-1 btn btn-primary btn-lg" style="background-color: rgb(105, 105, 233); color: aliceblue; border-radius: 1em; border-width: 0;">Activate Now</button>
                </a>
                <div>Your Partnership ID is: '.$code.'</div>
                <div>Please keep it safe!</div>
                <div>Partnership program has consistently and relentlessly put the immediate needs of humanity at the fore front of it’s existence ensuring the enrichment, empowerment of lives and eradication of humanities greatest deprivation</div>
                <br>Best regard,<br>
                from us at GPU.<br>
                </div>';

            $CI->email->to($to);
            $CI->email->subject($subject);
            $CI->email->message($message);

            if($CI->email->send()){
                return true;
            }
            else{
                return false;
            }
        }
    }