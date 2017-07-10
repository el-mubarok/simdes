<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_backend extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('m_blog');
		$this->load->model('m_general');
		$this->load->model('m_gallery');
		$this->load->model('m_landing');
	}

	function index(){
		if (isset($_SESSION['username'])) {
			$this->page_home();	
		}else{
			$this->login();
		}
	}
	
	public function page_home(){
		if (isset($_SESSION['username'])) {
			$data['blogCount'] = $this->m_general->count('blogpost');
			$data['galleryCount'] = $this->m_general->count('gallery');
			$data['eventCount'] = $this->m_general->count('landingpage');

			$this->load->view('backend/page-home', $data);
		}else{
			$this->login();
		}
	}
	
	public function page_landing01(){
		if (isset($_SESSION['username'])) {
			$data['blogCount'] = $this->m_general->count('blogpost');
			$data['galleryCount'] = $this->m_general->count('gallery');
			$data['eventCount'] = $this->m_general->count('landingpage');

			$data['data'] = $this->m_landing->getBannerLanding();

			$this->load->view('backend/page-landing01', $data);
		}else{
			$this->login();
		}
	}
	
	public function page_landing02(){
		if (isset($_SESSION['username'])) {
			$data['blogCount'] = $this->m_general->count('blogpost');
			$data['galleryCount'] = $this->m_general->count('gallery');
			$data['eventCount'] = $this->m_general->count('landingpage');

			$data['data'] = $this->m_landing->getAll();

			$this->load->view('backend/page-landing02', $data);
		}else{
			$this->login();
		}
	}
	
	public function page_gallery(){
		if (isset($_SESSION['username'])) {
			$data['blogCount'] = $this->m_general->count('blogpost');
			$data['galleryCount'] = $this->m_general->count('gallery');
			$data['eventCount'] = $this->m_general->count('landingpage');

			$data['banner'] = $this->m_general->getBanner('gallery');
			$data['data'] = $this->m_gallery->getAll('gallery');

			$this->load->view('backend/page-gallery', $data);
		}else{
			$this->login();
		}
	}
	
	public function page_profile(){
		if (isset($_SESSION['username'])) {
			$data['blogCount'] = $this->m_general->count('blogpost');
			$data['galleryCount'] = $this->m_general->count('gallery');
			$data['eventCount'] = $this->m_general->count('landingpage');

			$this->load->view('backend/page-profile', $data);
		}else{
			$this->login();
		}
	}
	
	public function page_blog(){
		if (isset($_SESSION['username'])) {
			$data['blogCount'] = $this->m_general->count('blogpost');
			$data['galleryCount'] = $this->m_general->count('gallery');
			$data['eventCount'] = $this->m_general->count('landingpage');

			$data['data'] = $this->m_blog->getAllPost($_SESSION['username']);
			$data['kategori'] = $this->m_blog->getAllKategori();

			$this->load->view('backend/page-blog', $data);
		}else{
			$this->login();
		}
	}

	public function page_blog_edit($id){
		if (isset($_SESSION['username'])) {

			$data['data'] = $this->m_blog->getPost($id);
			$data['kategori'] = $this->m_blog->getAllKategori();
			$this->load->view('backend/page-blog-edit', $data);
		}else{
			$this->login();
		}
	}

	public function page_about(){
		if (isset($_SESSION['username'])) {
			$data['blogCount'] = $this->m_general->count('blogpost');
			$data['galleryCount'] = $this->m_general->count('gallery');
			$data['eventCount'] = $this->m_general->count('landingpage');

			$this->load->view('backend/page-about', $data);
		}else{
			$this->login();
		}
	}

	public function login(){
		$this->load->view('backend/page-login');
	}

	public function daftar(){
		$this->load->view('backend/page-daftar');
	}

}
