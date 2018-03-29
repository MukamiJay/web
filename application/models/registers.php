<?php
/**
 * Created by PhpStorm.
 * User: EBENEZER
 * Date: 2/20/2018
 * Time: 12:44 PM
 */

class registers extends CI_Model{

    //initialize
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function store($data){
        $this->db->insert('register',$data);
        return true;
    }

    public function login($data){
        $this->db->select('*');
        $this->db->from('register');
        $this->db->where('name',$data);
        $query = $this->db->get();
        $result =$query->result();
        return $result;
    }

}
