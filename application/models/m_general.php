<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_general extends CI_Model {

	public function count($page){
		return $this->db->count_all($page);
	}

	// just for banner
	public function insertBanner($db, $data){
		$this->db->insert($db, $data);
	}

	public function getBanner($page){
		$query = $this->db->query("SELECT * FROM banner WHERE page='".$page."'");
		$result = $query->row();
		return $result;
	}

	public function updateDb($db, $data){
		$this->db->replace($db, $data);
	}

	public function removeItem($id, $table){
		$this->db->where('id', $id);
		$this->db->delete($table);
	}

	// pagination function
	public function pagin($db, $from, $to){
		$this->db->order_by('tanggal', 'DESC');
		$query = $this->db->get($db, $to, $from);
		return $query->result_array();
	}
	public function cntPagin($db){
		$query = $this->db->get($db);
		return $query->num_rows();
	}

	public function insertDb($table, $data){
		$this->db->insert($table, $data);
	}

	public function upDb($table, $id, $data){
		$this->db->where('id', $id);
		$this->db->update($table, $data);
	}

	public function getTable($table){
		$query = $this->db->query('SELECT * FROM '.$table);
		return $query->result_array();
	}

}