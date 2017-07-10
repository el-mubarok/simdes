<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_auth extends CI_Model {

	public function getLogins($user, $pass){
		$query = $this->db->query(
			"SELECT * FROM admin 
			WHERE username='".$user."' AND password='".$pass."'"
		);
		$result = $query->row();
		return $result;
	}

	public function daftar($data){
		$this->db->insert('admin', $data);
	}

}