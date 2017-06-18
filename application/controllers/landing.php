<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class landing extends CI_Controller {

	public function index(){$this->load->view('frontend/index');}
	public function blog_single(){$this->load->view('frontend/blog-single');}
	public function blog_grid(){$this->load->view('frontend/blog-grid');}
	public function gallery(){$this->load->view('frontend/gallery');}
	public function profile(){$this->load->view('frontend/profile');}
	public function about(){$this->load->view('frontend/about');}

	public function admin(){$this->load->view('backend/index');}

}
