<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Categorie extends CI_Model{
	
	public function getAllCategorie(){

		$sql = 'SELECT * FROM Categorie';
		$query = $this->db->query($sql);
		$categorie = array();
		foreach ($query->result_array() as $key) {
			$categoriet[] = $key;
		}
		return $categorie;
	}

	public function getSpecCategorie($nomCategorie){

		$sql = "SELECT * FROM Categorie where nomCategorie='%s'";
		$query = $this->db->query($sql,$this->db->escape($nomCategorie));
		$categorie = array();
		foreach ($query->result_array() as $key) {
			$categorie[] = $key;
		}
		return $categorie;
	}
}
?>