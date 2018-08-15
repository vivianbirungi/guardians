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
}
