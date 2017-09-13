<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

	public function __construct()
  	{
    	parent::__construct();
    	$explode = explode('/', $this->uri->ruri_string());
		$this->data['pagecours'] = $explode[0];
		$this->datahead['pagetitre'] = "GRISON | protection passive contre l'incendie | desenfumage";
		$this->datahead['description'] = "systèmes de protection passive contre l'incendie, désenfumage passif";
	}

	public function index()
	{
		$this->load->view('common/head',$this->datahead);
		$this->load->view('common/header',$this->data);
	    $this->load->view('accueil/home');
	    $this->load->view('common/footer');
	}
}
