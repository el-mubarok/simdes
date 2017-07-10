<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_profile extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('m_general');
	}

	public function updateDb(){
		$nama = $this->input->post('nama');
		$mail = $this->input->post('email');
		$pekerjaan = $this->input->post('pekerjaan');
		$about = $this->input->post('about');
		$photo = $this->input->post('photo');
		$id = $_SESSION['id'];

		$data = array(
			'nama' => $nama,
			'pekerjaan' => $pekerjaan,
			'email' => $mail,
			'tentang' => $about,
			'img' => $photo			
		);
		
		$dataUser = array(
			'nama' => $nama,
			'photo' => $photo,
			'email' => $mail,
			'about' => $about,
			'pekerjaan' => $pekerjaan
		);

		$this->m_general->upDb('admin', $id, $data);
		$this->session->set_userdata($dataUser);
		redirect('c_backend/page_profile');
	}
}
