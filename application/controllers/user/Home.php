<?php defined('BASEPATH') OR exit ('No direct access allowed');

class Home extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session', 'form_validation'));
        $this->load->helper(array('form', 'url'));
        $this->load->model(array('User_Model'));
        
    }

    public function index(){
        if(! $this->session->user['isLoggedIn']){
            redirect(base_url('login'));
        }
        
        $data['title'] = 'Partnership | Dashboard';
        $id = $this->session->user['id'];
        $data['current_user'] = $this->User_Model->getOne($id);
        // var_dump($this->session->user['isLoggedIn']); die;
        $this->load->view('user_view/home/index', $data);
    }

    public function users(){
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
}