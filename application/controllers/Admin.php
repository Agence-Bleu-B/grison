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
	public function actu()
	{
		//chargement models
		$this->load->model('news_model');
		//verif si connecté
	    if (!$this->isco) {
	    	redirect('/admin', 'refresh');
	    }
	    // si demande d'effacement de news
	    if (isset($_GET['delete'])) {
	    	$idtodel = $_GET['delete'];
	    	$message = $this->news_model->delete_news($idtodel);
	    	$this->data2['message'] = $message;
	    }
	    //pagination
        $this->load->library('pagination');
        //config pagination
        $config['base_url'] = site_url('admin/actu');
        $config['total_rows'] = $this->news_model->count_news(0);
        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['reuse_query_string'] = TRUE;

        $this->pagination->initialize($config);
        $this->data2['pagination'] = $this->pagination->create_links();

        //requete news
        if (isset($_GET['per_page'])) {
        	$limit = $_GET['per_page'];
        }
        else{
        	$limit = 0;
        }
        
        $newslist = $this->news_model->get_list(0,$limit);
        $this->data2['newslist'] = $newslist; 
		//affichage page selon connection
		$this->load->view('admin/header',$this->data);
		$this->load->view('admin/gestion-actu',$this->data2);
		$this->load->view('admin/footer');
	}
	public function creation(){
		//chargement models
		$this->load->model('news_model');
		$this->load->helper('directory');
		//si abandon
		if (isset($_POST['abandon'])) {
	    	redirect('/admin/actu', 'refresh');
	    }
		//verif si connecté
	    if (!$this->isco) {
	    	redirect('/admin', 'refresh');
	    }

	    if (isset($_POST['create'])) {
        	//enregistrement
        	$enregistrement = $this->news_model->new_news($_POST);
    		//si ok retour actu
        	if ($enregistrement) {
        		redirect('/admin/actu', 'refresh');
        	}
    		//si non retour creation
        	else{
        		//recuperation données
		    	foreach ($_POST as $key => $value){
	            	$this->data2[$key] = $value;
	        	}
        		$this->data2['message'] = "une erreur s'est produite durant l'enregistrement";
        	}
	    }
	    //recuperation medias
	    $this->data['medias'] = $map = directory_map('./assets/images/medias');
	    //affichage page selon connection
		$this->load->view('admin/header',$this->data);
		$this->load->view('admin/new',$this->data2);
		$this->load->view('admin/footer',$this->data);
	}
	public function modifactu(){
		//chargement models
		$this->load->model('news_model');
		$this->load->helper('directory');
		//si abandon
		if (isset($_POST['abandon'])) {
	    	redirect('/admin/actu', 'refresh');
	    }
		//verif si connecté
	    if (!$this->isco) {
	    	redirect('/admin', 'refresh');
	    }

	    if (isset($_POST['modif'])) {
        	//enregistrement
        	$enregistrement = $this->news_model->modif_news($_POST,$_GET['id']);
    		//si ok retour actu
        	if ($enregistrement) {
        		redirect('/admin/actu', 'refresh');
        	}
    		//si non retour creation
        	else{
        		//recuperation données
		    	foreach ($_POST as $key => $value){
	            	$this->data2[$key] = $value;
	        	}
        		$this->data2['message'] = "une erreur s'est produite durant l'enregistrement";
        	}
	    }
	    else{
	    	// $news = array();
	    	$news = $this->news_model->load_news($_GET['id']);
	    	foreach ($news as $key => $value){
            	$this->data2[$key] = $value;
        	}
	    }
	    //recuperation medias
	    $this->data['medias'] = $map = directory_map('./assets/images/medias');
	    //affichage page selon connection
		$this->load->view('admin/header',$this->data);
		$this->load->view('admin/modif-actu',$this->data2);
		$this->load->view('admin/footer',$this->data);
	}
	public function gestionpersonnel(){
		//chargement models
		$this->load->model('personnel_model');
		//verif si connecté
	    if (!$this->isco) {
	    	redirect('/admin', 'refresh');
	    }
	    // si demande d'effacement de personnel
	    if (isset($_GET['delete'])) {
	    	$idtodel = $_GET['delete'];
	    	$message = $this->personnel_model->delete_pers($idtodel);
	    	$this->data2['message'] = $message;
	    }
	    // si demande d'ajout de personnel
	    if (isset($_POST['create'])) {
	    	$message = $this->personnel_model->new_personnel($_POST);
	    	$this->data2['message'] = $message;
	    }
	    //pagination
        $this->load->library('pagination');
        //config pagination
        $config['base_url'] = site_url('admin/gestionpersonnel');
        $config['total_rows'] = $this->personnel_model->count_perso();
        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['reuse_query_string'] = TRUE;

        $this->pagination->initialize($config);
        $this->data2['pagination'] = $this->pagination->create_links();

        //requete news
        if (isset($_GET['per_page'])) {
        	$limit = $_GET['per_page'];
        }
        else{
        	$limit = 0;
        }
        
        $listpersonnel = $this->personnel_model->get_list($limit);
        $this->data2['listpersonnel'] = $listpersonnel;
	    //affichage page selon connection
		$this->load->view('admin/header',$this->data);
		$this->load->view('admin/gestion-personnel',$this->data2);
		$this->load->view('admin/footer',$this->data);
	}
	public function modifperso(){
		//chargement models
		$this->load->model('personnel_model');
		//verif si connecté
	    if (!$this->isco) {
	    	redirect('/admin', 'refresh');
	    }
	    if (isset($_POST['modif'])) {
	    	//enregistrement modif
	    	$message = $this->personnel_model->modif_perso($_POST,$_GET['id']);
	    	$this->data2['message'] = $message;
	    }
	    //chargement du profil
	    $profil = $this->personnel_model->load_perso($_GET['id']);
	    foreach ($profil as $key => $value) {
	    	$this->data2[$key] = $value;
	    }
	    //affichage page selon connection
		$this->load->view('admin/header',$this->data);
		$this->load->view('admin/modifperso',$this->data2);
		$this->load->view('admin/footer',$this->data);
	}
	public function documents(){
		//verif si connecté
	    if (!$this->isco) {
	    	redirect('/admin', 'refresh');
	    }
	    //affichage page selon connection
		$this->load->view('admin/header',$this->data);
		$this->load->view('admin/documents',$this->data2);
		$this->load->view('admin/footer',$this->data);
	}
	public function gestionimg(){
		//load models
		$this->load->helper('directory');
		//verif si connecté
	    if (!$this->isco) {
	    	redirect('/admin', 'refresh');
	    }
	    //si upload
	    if (isset($_POST['upload'])) { 
	    	//load library
	    	$this->load->library('upload');
	    	// config upload
	    	$config['upload_path'] = './assets/images/medias';
	    	$config['allowed_types'] = 'gif|jpg|png';
        	$config['max_size']    = '0';
        	$this->upload->initialize($config);
        	if (!$this->upload->do_upload('photo')) {
        		$this->data2['message'] = "echec";$this->data2['message2'] = array('error' => $this->upload->display_errors());
        	}
        	else{
        		$this->data2['message'] = "fichier correctement envoyé";
        	}
        	$this->upload->display_errors('<p>', '</p>');

	    }
	    //si demande de delete
	    if (isset($_GET['delete'])) {
	    	$path = "./assets/images/medias/".$_GET['delete'];
	    	unlink($path);
	    }
	    //recup medias
	    $this->data2['medias'] = $map = directory_map('./assets/images/medias');
	    //affichage page selon connection
		$this->load->view('admin/header',$this->data);
		$this->load->view('admin/gestionimg',$this->data2);
		$this->load->view('admin/footer',$this->data);
	}
	public function gestionpdf(){
		//load models
		$this->load->helper('directory');
		//verif si connecté
	    if (!$this->isco) {
	    	redirect('/admin', 'refresh');
	    }
	    //si upload
	    if (isset($_POST['upload'])) { 
	    	//load library
	    	$this->load->library('upload');
	    	// config upload
	    	$config['upload_path'] = './assets/pdf/';
	    	$config['allowed_types'] = 'pdf';
        	$config['max_size']    = '0';
        	$this->upload->initialize($config);
        	if (!$this->upload->do_upload('file')) {
        		$this->data2['message'] = "echec";$this->data2['message2'] = array('error' => $this->upload->display_errors());
        	}
        	else{
        		$this->data2['message'] = "fichier correctement envoyé";
        	}
        	$this->upload->display_errors('<p>', '</p>');

	    }
	    //si demande de delete
	    if (isset($_GET['delete'])) {
	    	$path = "./assets/pdf/".$_GET['delete'];
	    	unlink($path);
	    }
	    //recup pdf
	    $this->data2['pdf'] = $map = directory_map('./assets/pdf');
	    //affichage page selon connection
		$this->load->view('admin/header',$this->data);
		$this->load->view('admin/gestionpdf',$this->data2);
		$this->load->view('admin/footer',$this->data);
	}
}
