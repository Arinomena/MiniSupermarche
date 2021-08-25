<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Utilisateur extends CI_Model{
	
	public function getAllUtilisateur(){

		$sql = 'SELECT * FROM Utilisateur';
		$query = $this->db->query($sql);
		$utilisateur = array();
		foreach ($query->result_array() as $key) {
			$utilisateur[] = $key;
		}
		return $utilisateur;
	}

	public function getSpecUtilisateur($nom,$mdp){

		$sql = "SELECT * FROM Utilisateur where nomUtilisateur='%s' and mdp='%s'" ;
		$query = $this->db->query($sql,$this->db->escape($nom),$this->db->escape($mdp));
		$utilisateur = array();
		foreach ($query->result_array() as $key) {
			$utilisateur[] = $key;
		}
		return $utilisateur;
	}
	
	public function getIdUtilisateur($nom){

		$sql = "SELECT idUtilisateur FROM Utilisateur where nomUtilisateur='%s'";
		$query = $this->db->query($sql,$this->db->escape($nom));		
		return $query;
	}
	public function loginUtilisateur($nom,$mdp){

		$sql = "SELECT * FROM Utilisateur where nomUtilisateur='%s'and mdp='%s'";
		$check=false;
		$query = $this->db->query($sql,$this->db->escape($nom),$this->db->escape($mdp));
		$row=$query->result_array();
		for($i=0;$i<count($row);$i++)
		{
			if($row[$i]['nomUtilisateur']==$nom && $row[$i]['mdp']==$mdp)
			{
				$check=true;
			}
		}
		return $check;
	}
}
?>