<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Statistique extends CI_Model{
		
	public function getStatProduit()
	{
		$sql = 'SELECT * FROM statProduit';
		$query = $this->db->query($sql);
		$produit = array();
		foreach ($query->result_array() as $key) {
			$produit[] = $key;
		}
		return $produit;
	}

	public function getStatCategorie()
	{
		$sql = 'SELECT * FROM statCategorie';
		$query = $this->db->query($sql);
		$produit = array();
		foreach ($query->result_array() as $key) {
			$produit[] = $key;
		}
		return $produit;
	}

	public function getStatCaisse()
	{
		$sql = 'SELECT * FROM statCaisse';
		$query = $this->db->query($sql);
		$produit = array();
		foreach ($query->result_array() as $key) {
			$produit[] = $key;
		}
		return $produit;
	}


	
}