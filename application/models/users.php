<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: EBENEZER
 * Date: 2/19/2018
 * Time: 3:49 PM
 */
class users extends CI_Model{

    //initialize
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function save($data){
        $this->db->insert('users',$data);
        return true;
    }
}