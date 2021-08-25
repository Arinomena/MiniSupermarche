<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Produit extends CI_Model{
	
	public function getAllProduit(){

		$sql = 'SELECT * FROM Produit';
		$query = $this->db->query($sql);
		$produit = array();
		foreach ($query->result_array() as $key) {
			$produit[] = $key;
		}
		return $produit;
	}

	public function getProduitParCategorie($idCategorie){
		$sql = 'SELECT * FROM Produit where idCategorie=%s';
		$query = $this->db->query($sql,$this->db->escape($idCategorie));
		$produit = array();
		foreach ($query->result_array() as $key) {
			$produit[] = $key;
		}
		return $produit;
	}

	public function rechercher($search){
		$sql = 'SELECT * FROM produitDetail where nomProduit or nomCategorie LIKE %s';
		$query = $this->db->query($sql,$this->db->escape($search));
		$produit = array();
		foreach ($query->result_array() as $key) {
			$produit[] = $key;
		}
		return $produit;
	}
}
?>