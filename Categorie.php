<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Categorie extends CI_Model{
	
	public function getAllCategorie(){

		$sql = 'SELECT * FROM Categorie';
		$query = $this->db->query($sql);
		$produit = array();
		foreach ($query->result_array() as $key) {
			$produit[] = $key;
		}
		return $produit;
	}

	public function getSpecCategorie($nomCategorie){

		$sql = 'SELECT * FROM Categorie where nomCategorie=%s';
		$query = $this->db->query($sql,$this->db->escape($nomCategorie));
		$produit = array();
		foreach ($query->result_array() as $key) {
			$produit[] = $key;
		}
		return $produit;
	}
}
}
?>