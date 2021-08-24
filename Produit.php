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
}
?>