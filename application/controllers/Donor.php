<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: EBENEZER
 * Date: 2/19/2018
 * Time: 3:49 PM
 */
class Donor extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    //save record to DB
    public function store()
    {
        //load model
        $this->load->model('donors');

        //get data from form
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $location = $this->input->post('location');
        $bloodgroup = $this->input->post('bloodgroup');
        $contact = $this->input->post('contact');

        //  die($location);
        //create array and save
        $data = array('Id' => $id, 'Name' => $name, 'Location' => $location, 'Bloodgroup' => $bloodgroup, 'Contact' => $contact);
        $this->donors->save($data);

        redirect("register/homepage");
    }

    public function view()
    {
        //load model
        $this->load->model('donors');
        $donors = $this->donors->display();
        $data['donors'] = $donors;
        $this->load->view('register/alldonors', $data);
    }

public  function delete()
{
    $this->load->model('donors');
$id =$this->input->get('id');
$result = $this->donors->delete($id);

    redirect("donor/view");

}
public  function edit()
{
    $this->load->model('donors');
$id =$this->input->get('id');
$result = $this->donors->show($id);
    $data['name'] = $this->input->post('name');
    $data['location'] = $this->input->post('location');
    $data['bloodgroup'] = $this->input->post('bloodgroup');
    $data['contact'] = $this->input->post('contact');
    print_r($result);

}
}
