
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_about extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_general');
		$this->load->model('m_about');
	}

	function personal(){
		$data = array(
			'posisi' => $this->input->post('posisi'),
			'nama' => $this->input->post('nama'),
			'ttl' => $this->input->post('ttl'),
			'periode' => $this->input->post('periode'),
			'tanggal_lantik' => $this->input->post('tgl_lantik'),
			'pendidikan_terakhir' => $this->input->post('pend_terakhir'),
			'alamat' => $this->input->post('alamat'),
			'telp' => $this->input->post('telp'),
			'email' => $this->input->post('email'),
			'tentang' => $this->input->post('tentang'),
			'foto' => $this->input->post('foto')
		);
		return $data;
	}

	function upPersonal($id){
		$data = $this->personal();
		$this->m_general->upDb('pemerintahan', $id, $data);

		$this->session->set_flashdata('pesan', 'Data has been saved!');
		redirect('c_backend/page_about');
	}

	private function inpAbout(){
		$data = array(
			'tentang' => $this->input->post('tentang_desa')
		);
		return $data;
	}
	private function inpProfil(){
		$data = array(
			'foto' => $this->input->post('photo'),
			'nama' => $this->input->post('nama'),
			'posisi' => $this->input->post('posisi'),
			'ttl' => $this->input->post('ttl'),
			'tanggal_lantik' => $this->input->post('tgl_lantik'),
			'alamat' => $this->input->post('alamat'),
			'email' => $this->input->post('email'),
			'tentang' => $this->input->post('tentang'),
			'pendidikan_terkhir' => $this->input->post('pend_terakhir'),
			'telp' => $this->input->post('telp'),
			'periode' => $this->input->post('periode')
		);
		return $data;
	}
	private function inpDesa(){
		$data = array(
			'alamat' => $this->input->post('alamat'),
			'telp' => $this->input->post('telp'),
			'email' => $this->input->post('email'),
			'fax' => $this->input->post('fax'),
			'cover' => $this->input->post('imgCover')
		);
		return $data;
	}
	private function inpLokasi(){
		$data = array(
			'latitude' => $this->input->post('latitude'),
			'longitude' => $this->input->post('longitude')
		);
		return $data;
	}

	private function execute($table, $data){
		$this->m_about->upData($table, $data);
	}

	function upData($type){

		$types = array('inpAbout', 'inpProfil', 'inpLokasi', 'inpDesa');
		$data = null;
		$table = 'about';
		
		for ($i=0; $i<count($types); $i++) { 
			if ($type == $types[$i]) {
				$data = $this->$types[$i]();
				if ($type == 'inpProfil') {$table = 'pemerintahan';}
			}
		}

		$this->execute($table, $data);

		$this->session->set_flashdata('pesan', 'Data has been saved!');
		redirect('c_backend/page_about');
	}
}
