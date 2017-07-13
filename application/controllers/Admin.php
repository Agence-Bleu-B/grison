<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	private $isco;
	private $data = array();//data head et footer sous certaines conditions
	private $data2 = array();//data corp

	public function __construct()
    {
        parent::__construct();
        //chargement models
		$this->load->model('admin_model');
		//si demande decco
		if (isset($_GET['deco'])) {
			$this->admin_model->deco();
		}
		//si post verif si ok et mise en session si ok
		if (isset($_POST['val'])) {
			$mdp = $_POST['password'];
			$log = $_POST['login'];
			$this->admin_model->connection($log,$mdp);
		}
		//verif si connecté
	    $this->isco = $this->admin_model->isconnect();
	    //recuperation de la page en cours
	    $explode = explode('/', $this->uri->ruri_string());
		$this->data['pagecours'] = $explode[1];
    }
	
	public function index()
	{
		//affichage page selon connection
		if ($this->isco) {
			$this->load->view('admin/header',$this->data);
			$this->load->view('admin/home',$this->data2);
		}
		else{
			$this->load->view('admin/header-reg',$this->data);
			$this->load->view('admin/register',$this->data2);
		}
       $this->load->view('admin/footer');
	}
	public function pages()
	{
		//verif si connecté
	    if (!$this->isco) {
	    	redirect('/admin', 'refresh');
	    }


		$this->load->view('admin/header',$this->data);
		$this->load->view('admin/pages',$this->data2);
       	$this->load->view('admin/footer');
	}
	public function realisations()
	{
		//verif si connecté
	    if (!$this->isco) {
	    	redirect('/admin', 'refresh');
	    }
	    $this->load->model('references_model');
	    //si creation
	    if (isset($_POST['newCH'])) {
	    	$this->references_model->newReal($_POST,'centre_hospitalier');
	    }
	    if (isset($_POST['newIC'])) {
	    	$this->references_model->newReal($_POST,'immeuble_et_cc');
	    }
	    if (isset($_POST['newCC'])) {
	    	$this->references_model->newReal($_POST,'centre_culturels');
	    }
    	//si suppression
	    if (isset($_POST['supressionCH'])) {
	    	$this->references_model->supReal('centre_hospitalier','real_medias',$_POST['id']);
	    }
	    if (isset($_POST['supressionIC'])) {
	    	$this->references_model->supReal('immeuble_et_cc','real_medias2',$_POST['id']);
	    }
	    if (isset($_POST['supressionCC'])) {
	    	$this->references_model->supReal('centre_culturels','real_medias3',$_POST['id']);
	    }
	    //si modifi textes
		if (isset($_POST['modifCH'])) {
	    	$this->references_model->modifReal('centre_hospitalier',$_POST);
	    }
	    if (isset($_POST['modifIC'])) {
	    	$this->references_model->modifReal('immeuble_et_cc',$_POST);
	    }
	    if (isset($_POST['modifCC'])) {
	    	$this->references_model->modifReal('centre_culturels',$_POST);
	    }
	    //si modif images
	    if (isset($_POST['supphCH'])) {
	    	if (isset($_POST['tosup'])) {
	    		$this->references_model->supPhoto('real_medias',$_POST);
	    	}
	    }
	    if (isset($_POST['supphIC'])) {
	    	if (isset($_POST['tosup'])) {
	    		$this->references_model->supPhoto('real_medias2',$_POST);
	    	}
	    }
	    if (isset($_POST['supphCC'])) {
	    	if (isset($_POST['tosup'])) {
	    		$this->references_model->supPhoto('real_medias3',$_POST);
	    	}
	    }
	    //si upload images
	    if (isset($_POST['addphCH'])) {
	    	$this->references_model->addPhoto('real_medias',$_POST);
	    	
	    }
	    if (isset($_POST['addphIC'])) {
	    	$this->references_model->addPhoto('real_medias2',$_POST);
	    }
	    if (isset($_POST['addphCC'])) {
	    	$this->references_model->addPhoto('real_medias3',$_POST);
	    }
	    //chargement données
		//centre hsopitaliers
		$this->data2['CH'] = $this->references_model->getLists('centre_hospitalier','real_medias','CH');
		//imeuble et centre commerciaux
		$this->data2['IC'] = $this->references_model->getLists('immeuble_et_cc','real_medias2','IC');
		//centre culturels
		$this->data2['CC'] = $this->references_model->getLists('centre_culturels','real_medias3','CC');

		//affichage page 
		$this->load->view('admin/header',$this->data);
		$this->load->view('admin/realisations',$this->data2);
       	$this->load->view('admin/footer');
	}
}
