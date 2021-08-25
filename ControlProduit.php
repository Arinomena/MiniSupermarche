<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControlProduit extends CI_Controller {

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

	public function index(){
		$this->load->helper('assets');
		$this->load->model('produit');
		$data['liste_produit'] = $this->produit->getAllProduit();
		
		// $data['templateClient'] = 'acceuilClient.php';
		$this->load->view('produit',$data);
	
	}
	public function insertAchat(){
		$this->load->model('produit');
		$this->load->model('achat');
		$nom=$this->input->get('nomP');		
		$idCaisse = $this->session->userdata('caisse');
		$quantite = $this->input->post('quantite');
		$idP = $this->produit->getIdProduit($nom);
		$this->achat->insertAchat($idCaisse,$idP,$quantite);
		$data['liste_produit'] = $this->produit->getAllProduit();	
		$this->load->view('produit',$data);
	
	}
	
}