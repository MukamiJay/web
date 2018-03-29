<?php
/**
 * Created by PhpStorm.
 * User: EBENEZER
 * Date: 2/21/2018
 * Time: 9:59 AM
 */

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }

    //load users
    public function index()
    {
        $this->load->view('register/new');
    }

    //loads home includes login and signup
    public function homepage()
    {
        $this->load->view('register/home');
    }
    //loads home2
    public function homepage2()
    {
        $this->load->view('register/home2');
    }

    //loads doctors page
    public function doctors()
    {
        $this->load->view('register/doctors');
    }

    //stores uploaded register details
    public function store()
    {
        $this->load->model('registers');

        //get data from form
        $id = $this->input->post('id');
        $Name = $this->input->post('name');
        $Email = $this->input->post('email');
        $Contact = $this->input->post('contact');
        $Password = $this->input->post('password');

        //create array and save
        $data = array('Id' => $id, 'Name' => $Name, 'Email' => $Email, 'Contact' => $Contact, 'Password' => $Password);
        $this->registers->store($data);
        redirect('home/homepage2');

    }

    public function login(){
        $this->load->model('registers');


        $Name = $this->input->post('name');
        $Password = $this->input->post('password');

       // die($Password);
       $user =$this->register->login($Name);

       if($Password==$user[0]->Password){
           redirect('home/homepage2');

       }
       else{
          $this->session->set_flashdata('error','Login Failed.Retry');
           redirect('home/homepage');
       }

    }
}

