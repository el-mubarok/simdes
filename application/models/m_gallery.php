<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_gallery extends CI_Model {

	// this models just for blog process!

	// get all data from table 'blogpost'
	public function getAll(){
		$query = $this->db->query('SELECT * FROM gallery');
		$result = $query->result_array();
		return $result;
	}

	// global function for inserting data to db
	public function dbInsert($db, $data){
		$this->db->insert($db, $data);
	}

}