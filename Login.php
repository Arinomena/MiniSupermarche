<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require('Base_controller.php');
class Login extends CI_Controller {

	public function index()
	{
        $this->load->helper('url');
        $this->load->helper('assets_helper');

        $this->load->model('utilisateur');
        $data=array();
        $dota=array();
        $dota["error"]=1;
        $data["nomUtilisateur"]=$this->input->post("nomUtilisateur");
        $data["mdp"]=$this->input->post("mdp");
        $data["idUtilisateur"]=$this->utilisateur->getIdUtilisateur($data);
        //var_dump($data["id_administrateur"]);
        if($data["idUtilisateur"] == null)
        {
            $this->load->view('login',$dota);
        }
        else{
            $this->load->view('acceuilClient',$data);

        }
		
	}
	
}