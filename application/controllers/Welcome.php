<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("Portifolio");
	}
	public function index()
	{
		$data = array("portifolios"=>$this->Portifolio->get_portifolios(), "categories"=>$this->Portifolio->get_portifolios_category());
		$this->load->view('home', $data);
	}


	public function single( $id )
	{
		$data = array("portifolio"=>$this->Portifolio->get_portifolio($id), "portifolios"=>$this->Portifolio->get_portifolios());		
		$this->load->view('single', $data);
	}
	public function tryPage( $id )
	{
		$data = array("portifolio"=>$this->Portifolio->get_portifolio($id), "portifolios"=>$this->Portifolio->get_portifolios());
		$this->load->view('try', $data);
	}

	public function send_email(){
		$phone = $this->input->post("phone");
		$department = $this->input->post("department");
		$subject = $this->input->post("subject");
		$message = $this->input->post("message");
		$name = $this->input->post("name");
		$this->load->library('email');

		$this->email->from('info@guardiansofnature.com', 'Guardians Of Nature');
		$this->email->to('info@guardiansofnature.com');
		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');

		$this->email->send();

	}
	public function admin_login(){
		$email = $this->input->post("email");
		$password = $this->input->post("password");
		die(var_dump($email, $password));
	}
}
