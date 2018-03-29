<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: EBENEZER
 * Date: 2/19/2018
 * Time: 3:49 PM
 */
class Patient extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');

    }

    //save record to DB
    public function store(){
        //load model
        $this->load->model('patients');

        //get data from form
        $id = $this->input->post('id');
        $Name = $this->input->post('name');
        $Location = $this->input->post('location');
        $Bloodgroup = $this->input->post('bloodgroup');
        $Contact = $this->input->post('contact');

        //  die($location);
        //create array and save
        $data = array('Id'=>$id,'Name'=>$Name,'Location'=>$Location,'bloodgroup'=>$Bloodgroup,'Contact'=>$Contact);
        $this->patients->save($data);

        $this->session->set_flashdata('success','Registration Success');

        redirect("patient/view");
    }

    public function view()
    {
        //load model
        $this->load->model('patients');
        $patients= $this->patients->display();;
        $data['patients'] = $patients;

        $this->load->view('register/allpatients', $data);
    }

    public function apiview()
    {
        //load model
        $this->load->model('patients');
        $patients= $this->patients->display();;
        $data['patients'] = $patients;
        echo json_encode($data);
        die();
    }
    public  function delete()
    {
        $this->load->model('patients');
        $id =$this->input->get('id');
        $result = $this->patients->delete($id);

        redirect("patient/view");

    }
}