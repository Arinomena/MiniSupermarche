<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Base_Controller.php');
class Load extends Base_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/Load
	 *	- or -
	 * 		http://example.com/index.php/Load/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/Load/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();

	}

	public function Test_Login(){
		$this->load->helper('assets');
		$this->load->model('Utilisateur');
		$nom = $this->input->post('nomUtilisateur');
		$mdp = $this->input->post('mdp');
		// $idUtilisateur=$this->utilisateur->getIdUtilisateur($nom);
		$checking=$this->Utilisateur->loginUtilisateur($nom,$mdp);
		if($checking==true)
		{
			// $this->session->set_userdata('idUtilisateur',$idUtilisateur);
			// $idU=$this->session->userdata('idUtilisateur');
			$data['template']='accueil.php';
			$this->load->view('template_accueil',$data);
		}else{
			$data['template']='login.php';
			$this->load->view('template_accueil',$data);
		}		
	}
	public function template($page,$data){
		
		$data['template'] = $page.'.php';
		$this->load->view('template',$data);
	}
	public function templateC($page,$data){
		
		$data['templateClient'] = $page.'.php';
		$this->load->view('templateClient',$data);
	}
	public function Saisie(){

		$this->load->model('produit');
		$this->load->model('achat');
		$caisse = $this->session->userdata('caisse');
		$data['caisse'] = $caisse;
		$data['liste_produit'] = $this->produit->getAllProduit();
		$data['liste_achat'] = $this->achat->getAchat($caisse);
		$this->template('saisie',$data);
	}
	public function Caisse_Essaie(){

		$this->load->model('caisse');
		$data['liste_caisse'] = $this->caisse->getAllCaisse();
		$data['template'] = 'account.php';
		$this->load->view('template',$data);
	}
	public function Valider_Commande(){

		$this->load->model('achat');
		$this->load->model('produit');

		$idProduit = $this->input->post('produit');
		$quantite = $this->input->post('quantite');
		$caisse = $this->session->userdata('caisse');

		$this->achat->insert_Achat($caisse,$idProduit,$quantite);

		$data['caisse'] = $caisse;
		$data['liste_produit'] = $this->produit->getAllProduit();
		$data['liste_achat'] = $this->achat->getAchat($caisse);
		$this->template('saisie',$data);
	}
	public function Changer_Caisse(){
		$this->session->sess_destroy();
		redirect(site_url());
	}
	public function Produit(){
		$this->load->model('produit');
		$data['liste_produit'] = $this->produit->getAllProduit();
		$this->load->view('produit',$data);
	}
}