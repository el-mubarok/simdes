<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_gallery extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('m_gallery');
		$this->load->model('m_general');
	}

	public function addGallery(){
		// receive post data and pass to variable
		$gambar = $this->input->post('galleryGbr');
		$desc = $this->input->post('imgDesc');

		// prepare array data before passing to model/database
		$data = array(
			'deskripsi'=> $desc,
			'gambar'=> $gambar
		);

		$this->m_gallery->dbInsert('gallery', $data);

		// $this->session->set_flashdata('pesan', 'Your article has published!');
		redirect('c_backend/page_gallery');
	}

	public function setBanner(){
		$page = $this->input->post('page');
		$desc1 = $this->input->post('bannerDesc1');
		$desc2 = $this->input->post('bannerDesc2');
		$gambar = $this->input->post('bannerGbr');

		$data = array(
			'page' => $page,
			'desc_1' => $desc1,
			'desc_2' => $desc2,
			'gambar' => $gambar
		);

		$this->m_general->insertBanner('banner', $data);
		redirect('c_backend/page_gallery');
	}

	public function updateBanner(){
		
		$page = $this->input->post('page');
		$desc1 = $this->input->post('bannerDesc1');
		$desc2 = $this->input->post('bannerDesc2');
		$gambar = $this->input->post('bannerGbr');

		$data = array(
			'page' => $page,
			'desc_1' => $desc1,
			'desc_2' => $desc2,
			'gambar' => $gambar
		);

		$this->m_general->updateDb('banner', $data);
		redirect('c_backend/page_gallery');
	}

	public function delete($id){
		$this->m_general->removeItem($id, 'gallery');
		redirect('c_backend/page_gallery');
	}
}
