<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

	public function __construct()
  	{
    	parent::__construct();
	}

	public function index()
	{
		$this->load->view('common/head');
		$this->load->view('common/header');
	    $this->load->view('accueil/home');
	    $this->load->view('common/footer');
	}
	public function references()
	{
		$this->load->view('common/head');
		$this->load->view('common/header');
	    $this->load->view('references/references');
	    $this->load->view('common/footer');
	}
	public function contact()
	{
		$this->load->view('common/head');
		$this->load->view('common/header');
	    $this->load->view('contacts/contacts');
	    $this->load->view('common/footer');
	}
}
