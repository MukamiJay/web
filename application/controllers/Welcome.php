<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function sample(){
        $this->load->view('sample');

    }
    public function sample2(){
	    $this->load->model('Patient');
	    $this->load->helper('url');

       $name=$this->input->post('name');
       $contact=$this->input->post('contact');
       $location=$this->input->post('location');
       $bloodgroup=$this->input->post('bloodgroup');

       $data=array('Name'=>$name,'Contact'=>$contact,'Location'=>$location,'Bloodgroup'=>$bloodgroup);
       $this->Patient->save($data);

       redirect('/welcome/sample');
    }

    public function newdoctor(){
        $this->load->view('doctor');
    }

    public function doctors(){
	    $this->load->model('Doctor');
	    $this->load->helper('url');

       $name=$this->input->post('name');
       $contact=$this->input->post('contact');
       $location=$this->input->post('location');
       $bloodgroup=$this->input->post('bloodgroup');

       $data=array('Name'=>$name,'Contact'=>$contact,'Location'=>$location,'Bloodgroup'=>$bloodgroup);
       $this->Doctor->save($data);

       redirect('/welcome/sample');
    }
}
