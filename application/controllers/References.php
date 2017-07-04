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
		//requetes sql
		//centre hsopitaliers
		$query = $this->db->query('SELECT * FROM centre_hospitalier');
		$data2['countCH'] = $query->num_rows();
		$data2['listCH'] = $query->result_array();
		//imeuble et centre comlmerciaux
		$query = $this->db->query('SELECT * FROM immeuble_et_cc');
		$data2['countIC'] = $query->num_rows();
		$data2['listIC'] = $query->result_array();
		//centre culturels
		$query = $this->db->query('SELECT * FROM centre_culturels');
		$data2['countCC'] = $query->num_rows();
		$data2['listCC'] = $query->result_array();
		//chargement vues
		$this->load->view('common/head');
		$this->load->view('common/header',$this->data);
	    $this->load->view('references/references',$data2);
	    $this->load->view('common/footer');
	}
}
