<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_landing extends CI_Model {

	// this models just for blog process!

	// get all data from table 'blogpost'
	public function getAll(){
		$query = $this->db->query('SELECT * FROM landingpage');
		$result = $query->result_array();
		return $result;
	}

	public function getBannerLanding(){
		$query = $this->db->query('SELECT * FROM banner_landing');
		$result = $query->result_array();
		return $result;
	}

	// global function for inserting data to db
	public function dbInsert($db, $data){
		$this->db->insert($db, $data);
	}
	public function dbInsertBatch($db, $data){
		$this->db->insert_batch($db, $data);
	}
	public function dbUpdateBatch($db, $data, $id){
		$this->db->update_batch($db, $data, $id);
	}

}