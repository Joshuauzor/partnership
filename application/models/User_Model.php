<?php defined('BASEPATH') OR exit ('No direct access allowed');

class User_Model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    private $table_name = 'users';

    public function insert($data){
        return $this->db->insert($this->table_name, $data);
    }

    //------------------------------------------------

    public function check_email($data){
        $this->db->where('email', $data); 
        $this->db->or_where('code', $data);
        return $this->db->get($this->table_name)->row();
    }

    // ------------------------------------------------

    public function get_users(){
        return $this->db->get($this->table_name)->result();
    }

    // ------------------------------------------------

    public function update($email, $data){
        $this->db->where('email', $email);
        $this->db->set($data);
        return $this->db->update($this->table_name,$data);
    }

   // ------------------------------------------------

   public function check_code($code){
        $this->db->where('code', $code);
        return $this->db->get($this->table_name)->row();
   }

    // ------------------------------------------------

    public function getUniid($uniid){
        $this->db->where('uniid', $uniid);
        return $this->db->get($this->table_name)->row();
    }
    // ------------------------------------------------

    public function updateByUniid($uniid, $data){
        $this->db->where('uniid', $uniid);
        $this->db->set($data);
        return $this->db->update($this->table_name,$data);
    }

    //---------------------------------------------------

    public function getOne($id){
        $this->db->where('id', $id);
        return $this->db->get($this->table_name)->row();
    }

    // -------------------------------------------------

    public function getAllUsers(){
        $this->db->where('role', 'user');
        $this->db->where('status', 'active');
        return $this->db->get($this->table_name)->result();
    }

    // ----------------------------------------------------

    public function getAllAdmin(){

    }

}