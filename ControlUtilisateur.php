<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControlUtilisateur extends CI_Controller {

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
		$this->load->view('acceuilAdmin',$data);	
		
	}
	public function liCatego(){
		$this->load->helper('assets');
		$this->load->model('produit');
		$this->load->model('categorie');
		$data['liste_categorie'] = $this->categorie->getAllCategorie();
		$this->load->view('categorieAdmin',$data);	
		
	}
	public function deleteP(){
		$this->load->helper('assets');
		$this->load->model('produit');
		$nomP= $this->input->get('nomProduit');
		// $idP = $this->produit->getIdProduit($nomP);
		$this->produit->deleteProduit($nomP);
	
		$data['liste_produit'] = $this->produit->getAllProduit();
		$this->load->view('acceuilAdmin',$data);	
		
	}
	public function quitter(){
		$this->load->helper('assets');
		$this->load->model('caisse');
		$data['liste_caisse'] = $this->caisse->getAllCaisse();
		$this->load->view('quit',$data);	
		
	}
	public function statistique(){
		$this->load->helper('assets');
		$this->load->model('statistique');
		$data['liste_produit'] = $this->statistique->getStatProduit();
		$data['liste_categorie'] = $this->statistique->getStatCategorie();
		$data['liste_caisse'] = $this->statistique->getStatCaisse();
		$this->load->view('statistique',$data);	
		
	}
	
}