<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class References extends CI_Controller {

	public function __construct()
  	{
    	parent::__construct();
    	$explode = explode('/', $this->uri->ruri_string());
		$this->data['pagecours'] = $explode[0];
	}

	public function index()
	{
		$data2 = array();
		$this->load->model('references_model');
		//centre hsopitaliers
		$data2['CH'] = $this->references_model->getLists('centre_hospitalier','real_medias','CH');
		//imeuble et centre commerciaux
		$data2['IC'] = $this->references_model->getLists('immeuble_et_cc','real_medias2','IC');
		//centre culturels
		$data2['CC'] = $this->references_model->getLists('centre_culturels','real_medias3','CC');
		
		//chargement vues
		$this->load->view('common/head');
		$this->load->view('common/header',$this->data);
	    $this->load->view('references/references',$data2);
	    $this->load->view('common/footer');
	}
}
