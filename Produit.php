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
	public function insertProduit($idProduit,$idCategorie,$nomProduit,$prixUnitaire){
		$sql = "INSERT INTO Produit VALUES (%s,%s,%s,%s)";
		$sql = sprintf($sql,$this->db->escape($idProduit),$this->db->escape($idCategorie),$this->db->escape($nomProduit),$this->db->escape($prixUnitaire));
		$this->db->query($sql);
	}
	public function updateProduit($idProduit,$idCategorie,$nomProduit,$prixUnitaire){
		$sql = "UPDATE Produit set idCategorie='%s',nomProduit='%s',prixUnitaire='%s' where idProduit='%s'";
		$sql = sprintf($sql,$this->db->escape($idCategorie),$this->db->escape($nomProduit),$this->db->escape($prixUnitaire),$this->db->escape($idProduit));
		$this->db->query($sql);
	}
	public function deleteProduit($idProduit){
		$sql = "DELETE FROM Produit where idProduit='%s'";
		$sql = sprintf($sql,$this->db->escape($idProduit));
		$this->db->query($sql);
	}
}
?>