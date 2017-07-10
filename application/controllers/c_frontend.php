<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_frontend extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_blog');
		$this->load->model('m_general');
		$this->load->model('m_gallery');
		$this->load->model('m_landing');

		$this->load->library('pagination');
	}

	public function index(){
		$data['banner'] = $this->m_landing->getBannerLanding();
		$data['event'] = $this->m_landing->getAll();
		$data['latestBlog'] = $this->m_blog->getLatestPost(3);

		$data['jmlKtg'] = $this->m_blog->countKategori();
		$data['popularFooter'] = $this->m_blog->getPopularPost(2);

		$this->load->view('frontend/index', $data);
	}

	public function blog_single($id){
		
		$data['data'] = $this->m_blog->getPost($id);
		$data['popular'] = $this->m_blog->getPopularPost(4);

		$data['jmlKtg'] = $this->m_blog->countKategori();
		$data['popularFooter'] = $this->m_blog->getPopularPost(2);

		$this->m_blog->visitors($id);

		$this->load->view('frontend/blog-single', $data);
	}

	public function blog_grid(){

		$jml = $this->m_general->cntPagin('blogpost');
		$conf = array();
		$config['base_url'] = base_url().'c_frontend/blog_grid/';
		$config['total_rows'] = $jml;
		$config['per_page'] = 5;
		$config['num_links'] = $jml;
		
		$config['cur_tag_open'] = "<a class='active'>";
		$config['cur_tag_close'] = "</a>";
		$config['next_link'] = '<i class="fa fa-angle-right"></i>';
		$config['prev_link'] = '<i class="fa fa-angle-left"></i>';

		$this->pagination->initialize($config);
		$from = $this->uri->segment(3);

		$data['data'] = $this->m_general->pagin('blogpost', $from, $config['per_page']);

		// $data['data'] = $this->m_blog->getAllPost(5);

		$strLinks = $this->pagination->create_links();
		$data['links'] = explode('&nbsp;', $strLinks);

		$data['popular'] = $this->m_blog->getPopularPost(4);
		$data['jmlKtg'] = $this->m_blog->countKategori();
		$data['popularFooter'] = $this->m_blog->getPopularPost(2);
		$data['banner'] = $this->m_general->getBanner('blog');

		$this->load->view('frontend/blog-grid', $data);
	}

	public function gallery(){
		$data['data'] = $this->m_gallery->getAll();

		$data['jmlKtg'] = $this->m_blog->countKategori();
		$data['popularFooter'] = $this->m_blog->getPopularPost(2);
		$data['banner'] = $this->m_general->getBanner('gallery');

		$this->load->view('frontend/gallery', $data);
	}

	public function profile(){

		$data['jmlKtg'] = $this->m_blog->countKategori();
		$data['popularFooter'] = $this->m_blog->getPopularPost(2);

		$this->load->view('frontend/profile', $data);
	}

	public function about(){

		$data['jmlKtg'] = $this->m_blog->countKategori();
		$data['popularFooter'] = $this->m_blog->getPopularPost(2);

		$this->load->view('frontend/about', $data);
	}
}
