<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: EBENEZER
 * Date: 2/19/2018
 * Time: 3:49 PM
 */
class User extends CI_Controller{

    public function __construct()
{
    parent::__construct();
    $this->load->helper('url');
}

//load users
public function index(){
    $this->load->view('user/index');
}

//show add user form
public function addUser(){
    $this->load->view('user/add_new');
}

//save record to DB
public function store(){
    //load model
    $this->load->model('users');

    //get data from form
    $name = $this->input->post('name');
    $email = $this->input->post('email');
    $phone = $this->input->post('phone');

    //create array and save
    $data = array('name'=>$name,'email'=>$email,'phone'=>$phone);
    $this->users->save($data);

    redirect("user/index");
}
}