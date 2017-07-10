<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_landing extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('m_landing');
		$this->load->model('m_general');
	}

	public function addEvent(){
		// receive post data and pass to variable
		$namaEvent = $this->input->post('eventName');
		$desc = $this->input->post('eventDesc');
		$gambar = $this->input->post('eventGbr');

		// prepare array data before passing to model/database
		$data = array(
			'desc_acara' => $desc,
			'nama_acara' => $namaEvent,
			'gambar' => $gambar
		);

		$this->m_landing->dbInsert('landingpage', $data);

		$this->session->set_flashdata('pesan', 'Event has been created!');
		redirect('c_backend/page_landing02');
	}

	public function setBanner(){

		$data = array(
			array(
				'desc_1' => $this->input->post('bannerDesc11'),
				'desc_2' => $this->input->post('bannerDesc21'),
				'gambar' => $this->input->post('bannerGbr1')
			),
			array(
				'desc_1' => $this->input->post('bannerDesc12'),
				'desc_2' => $this->input->post('bannerDesc22'),
				'gambar' => $this->input->post('bannerGbr2')
			),
			array(
				'desc_1' => $this->input->post('bannerDesc13'),
				'desc_2' => $this->input->post('bannerDesc23'),
				'gambar' => $this->input->post('bannerGbr3')
			)
		);

		$this->m_landing->dbInsertBatch('banner_landing', $data);

		$this->session->set_flashdata('pesan', 'Event has been created!');
		redirect('c_backend/page_landing01');
	}

	public function updateBanner(){
		
		$data = array(
			array(
				'id' => $this->input->post('id1'),
				'desc_1' => $this->input->post('bannerDesc11'),
				'desc_2' => $this->input->post('bannerDesc21'),
				'gambar' => $this->input->post('bannerGbr1')
			),
			array(
				'id' => $this->input->post('id2'),
				'desc_1' => $this->input->post('bannerDesc12'),
				'desc_2' => $this->input->post('bannerDesc22'),
				'gambar' => $this->input->post('bannerGbr2')
			),
			array(
				'id' => $this->input->post('id3'),
				'desc_1' => $this->input->post('bannerDesc13'),
				'desc_2' => $this->input->post('bannerDesc23'),
				'gambar' => $this->input->post('bannerGbr3')
			)
		);

		$this->m_landing->dbUpdateBatch('banner_landing', $data, 'id');

		$this->session->set_flashdata('pesan', 'Event has been created!');
		redirect('c_backend/page_landing01');
	}

	public function delete($id){
		$this->m_general->removeItem($id, 'landingpage');
		redirect('c_backend/page_landing02');
	}
}
