<?php defined('BASEPATH') OR exit ('No direct access allowed');

class Category_Model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    private $table_name = 'category';

    public function insert($data){
        return $this->db->insert($this->table_name, $data);
    }

    // ------------------------------------------------

    public function get_All(){
        return $this->db->get($this->table_name)->result();
    }

    // ------------------------------------------------

    public function update($id, $data){
        $this->db->where('id', $id);
        $this->db->set($data);
        return $this->db->update($this->table_name,$data);
    }   
}