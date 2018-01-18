<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {
    public $table = 'user';
    public $user_id = 'id';

    public function __construct()
    {
        $this->load->database();
    }
    
    public function insert_data($data){
        $this->db->insert($this->table, $data);
    }

    public function fetch_data(){
        $query = $this->db->get($this->table);
        return $query;
    }

    public function delete_data($id){
        $this->db->where($this->user_id, $id);
        $this->db->delete($this->table);
    }

    public function fetch_single_data($id){
        $this->db->where($this->user_id, $id);
        $query = $this->db->get($this->table);
        return $query;
    }

    public function update_data($data, $id){
        $this->db->where($this->user_id, $id);
        $this->db->update($this->table, $data);
    }
}
?>