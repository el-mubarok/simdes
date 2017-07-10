<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_auth extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('m_auth');
	}

	function index(){
		$this->getLogin();
	}

	public function getLogin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$passcrypt = md5($password);

		$loginResult = $this->m_auth->getLogins($username, $passcrypt);

		if (isset($loginResult)) {
			
			$dataUser = array(
				'id' => $loginResult->id,
				'nama' => $loginResult->nama,
				'username' => $loginResult->username,
				'photo' => $loginResult->img,
				'email' => $loginResult->email,
				'about' => $loginResult->tentang,
				'pekerjaan' => $loginResult->pekerjaan
			);

			$this->session->set_userdata($dataUser);
			redirect('c_backend/page_home');
		}else{
			redirect('c_backend/login');
		}
	}

	public function getDaftar(){
		$nama = $this->input->post('full_name');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = array(
			'nama' => $nama,
			'username' => $username,
			'password' => md5($password)
		);

		$this->m_auth->daftar($data);
		redirect('c_backend/login');
	}

	public function logOut(){
		session_destroy();
		redirect('c_backend/login');
	}
}
