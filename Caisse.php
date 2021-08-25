<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Caisse extends CI_Model{
	
	public function getAllCaisse(){

		$sql = 'SELECT * FROM Caisse';
		$query = $this->db->query($sql);
		$caisse = array();
		foreach ($query->result_array() as $key) {
			$caisse[] = $key;
		}
		return $caisse;
	}

}
?>