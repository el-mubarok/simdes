<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_blog extends CI_Model {

	// this models just for blog process!

	// get all data from table 'blogpost'
	public function getAllPost($username){
		$query = $this->db->query('
			SELECT blogpost.*, admin.username 
			FROM blogpost
			INNER JOIN admin
			ON blogpost.author=admin.nama
			ORDER BY admin.username="'.$username.'" DESC'
		);
		$result = $query->result_array();
		// print_r($result);
		return $result;
	}

	public function getPost($id){
		// $query = $this->db->query("SELECT * FROM blogpost WHERE id=".$id);
		$query = $this->db->query('
			SELECT admin.tentang AS about, admin.img AS photo, blogpost.* 
			FROM admin
			INNER JOIN blogpost
			ON admin.nama = blogpost.author
			WHERE blogpost.id=
		'.$id);
		$result = $query->row();
		return $result;
	}

	public function countPost(){
		return $this->db->count_all('blogpost');
	}

	public function countKategori(){
		$query = $this->db->query('SELECT kategori, COUNT(kategori) AS jumlah FROM blogpost GROUP BY kategori');
		$result = $query->result_array();
		return $result;
	}

	public function getAllKategori(){
		$query = $this->db->query('SELECT * FROM kategori');
		$result = $query->result_array();
		return $result;
	}

	public function getLatestPost($limit){
		$query = $this->db->query('SELECT * FROM blogpost ORDER BY id DESC LIMIT '.$limit);
		$result = $query->result_array();
		return $result;
	}

	public function getPopularPost($limit){
		$query = $this->db->query('SELECT id, judul, tanggal, cover FROM blogpost ORDER BY viewer DESC LIMIT '.$limit);
		$result = $query->result_array();
		return $result;
	}

	// global function for inserting data to db
	public function dbInsert($db, $data){
		$this->db->insert($db, $data);
	}

	public function visitors($id){
		$valQuery =  $this->db->query('SELECT viewer FROM blogpost WHERE id='.$id);
		$currentVal = $valQuery->row();
		$lastVal;
		
		if (isset($currentVal))
			$lastVal = $currentVal->viewer;
			$lastVal++;

		$this->db->query('UPDATE blogpost SET viewer='.$lastVal.' WHERE id='.$id);
	}

	public function editBlog($id, $data){
		$this->db->where('id', $id);
		$this->db->update('blogpost', $data);
	}

}