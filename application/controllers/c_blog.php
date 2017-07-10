<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_blog extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('m_blog');
		$this->load->model('m_general');
	}

	private function postData(){
		// receive post data and pass to variable
		$judul = $this->input->post('judul');
		$article = $this->input->post('article');
		$kategori = $this->input->post('kategori');
		$author = $this->input->post('author');
		$cover = $this->input->post('imgCover');
		$tgl_edit = $this->input->post('tanggal_edit');

		// prepare array data before passing to model/database
		$data = array(
			'author'=> $author,
			'judul'=> $judul,
			'article'=> $article,
			'cover' => $cover,
			'kategori'=> $kategori,
			'tanggal_edit' => $tgl_edit
		);
		return $data;
	}

	public function addPost(){

		$data = $this->postData();
		$this->m_blog->dbInsert('blogpost', $data);

		$this->session->set_flashdata('pesan', 'Your article has published!');
		redirect('c_backend/page_blog');
	}

	public function addKategori(){
		$kategori = $this->input->post('kategori');

		$data = array(
			'kategori' => $kategori
		);
		if ($kategori != null) {
			$this->m_blog->dbInsert('kategori', $data);
		}
		redirect('c_backend/page_blog');
	}

	public function delete($id){
		$this->m_general->removeItem($id, 'blogpost');
		redirect('c_backend/page_blog');
	}

	public function edit($id){
		$data = $this->postData();
		$this->m_blog->editBlog($id, $data);
		redirect('c_backend/page_blog');
	}
}
