<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_about extends CI_Model {

	function getId(){
		$query = $this->db->query('SELECT id FROM about');
		$result = $query->row();
		if (isset($result)) {
			return $result->id;
		}
	}

	function upData($table, $data){
		$this->db->set($data);
		$this->db->where('id', $this->getId());
		$this->db->update($table);
	}

	function getData($table){
		$query = $this->db->query('SELECT * FROM '.$table);
		return $query->row();
	}

}