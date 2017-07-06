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
		$i=0;
		foreach ($data2["listCH"] as $key => $value) {
			$string = 'SELECT * FROM real_medias WHERE id_real = "'.$data2["listCH"][$i]["id"].'"';
			$query2 = $this->db->query($string);
			$data2["listCH"][$i]['nbtof'] = $query2->num_rows();
			if ($data2["listCH"][$i]['nbtof'] != 0) { 
				$j =0;
				$array = array();
				foreach ($query2->result_array() as $key => $value) {
					$array = $value['source'];
					$data2["listCH"][$i]['photos'][$j] = $array;$j++;
				}
			}
			else{
				$data2["listCH"][$i]['photos'][0] = 'noPics.png';
			}

			$i++;
		}
		//imeuble et centre comlmerciaux
		$query = $this->db->query('SELECT * FROM immeuble_et_cc');
		$data2['countIC'] = $query->num_rows();
		$data2['listIC'] = $query->result_array();
		$i=0;
		foreach ($data2["listIC"] as $key => $value) {
			$string = 'SELECT * FROM real_medias2 WHERE id_real = "'.$data2["listIC"][$i]["id"].'"';
			$query2 = $this->db->query($string);
			$data2["listIC"][$i]['nbtof'] = $query2->num_rows();
			if ($data2["listIC"][$i]['nbtof'] != 0) {
				$j =0;
				$array2 = array();
				foreach ($query2->result_array() as $key => $value) {
					$array2 = $value['source'];
					$data2["listIC"][$i]['photos'][$j] = $array2;
					$j++;
				}
			}
			else{
				$data2["listIC"][$i]['photos'][0] = 'noPics.png';
			}

			$i++;
		}
		//centre culturels
		$query = $this->db->query('SELECT * FROM centre_culturels');
		$data2['countCC'] = $query->num_rows();
		$data2['listCC'] = $query->result_array();
		$i=0;
		foreach ($data2["listCC"] as $key => $value) {
			$string = 'SELECT * FROM real_medias3 WHERE id_real = "'.$data2["listCC"][$i]["id"].'"';
			$query2 = $this->db->query($string);
			$data2["listCC"][$i]['nbtof'] = $query2->num_rows();
			if ($data2["listCC"][$i]['nbtof'] != 0) {
				$j =0;
				$array3 = array();
				foreach ($query2->result_array() as $key => $value) {
					$array3 = $value['source'];
					$data2["listCC"][$i]['photos'][$j] = $array3;
					$j++;
				}
			}
			else{
				$data2["listCC"][$i]['photos'][0] = 'noPics.png';
			}

			$i++;
		}
		//chargement vues
		$this->load->view('common/head');
		$this->load->view('common/header',$this->data);
	    $this->load->view('references/references',$data2);
	    $this->load->view('common/footer');
	}
}
