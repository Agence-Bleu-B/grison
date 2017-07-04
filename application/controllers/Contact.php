<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct()
  	{
    	parent::__construct();
    	$explode = explode('/', $this->uri->ruri_string());
		$this->data['pagecours'] = $explode[0];
	}

	public function index()
	{
		$this->load->view('common/head');
		$this->load->view('common/header',$this->data);
	    $this->load->view('contacts/contacts');
	    $this->load->view('common/footer');
	}
}
