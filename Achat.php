<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Achat extends CI_Model{
	
	public function getAllAchat(){
		$query = $this->db->query('SELECT * FROM Achat');
		$achat = array();
		foreach ($query->result_array() as $key) {
			$achat[] = $key;
		}
		return $achat;
	}


	public function insertAchat($idCaisse,$idProduit,$quantite){
		$sql = "INSERT INTO Achat VALUES (%s,%s,%s)";
		$sql = sprintf($sql,$this->db->escape($idCaisse),$this->db->escape($idProduit),$this->db->escape($quantite));
		$this->db->query($sql);
	}


	public function getSpecAchat($idCaisse){
		$sql = "select Produit.designation as nomProduit,Produit.prixUnitaire as prixUnitaire,Achat.quantite as quantite,(Produit.prixUnitaire*Achat.quantite) as montant from Achat Join Produit on Achat.idProduit = Produit.idProduit where Achat.idCaisse = '%s'";
		$sql = sprintf($sql,$this->db->escape($idCaisse));
		$query = $this->db->query($sql);
		$achat = array();
		foreach ($query->result_array() as $key) {
			$achat[] = $key;
		}
		return $achat;
	}
}
?>