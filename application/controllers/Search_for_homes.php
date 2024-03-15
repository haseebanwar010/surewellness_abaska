<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_for_homes extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('home_model');
		$this->load->model('sections_model');
		$this->load->model('slidersection_model');
	}



	public function index()
	{
        $_SESSION['section_id']=1;
		$data=array();
        $data['page']="search_for_homes";
		$data['banners']=$this->home_model->get_banners(1);
		$data['sections']=$this->sections_model->get_sections_bysectionid(1);
		$data['slidersection']=$this->slidersection_model->get_slidersections(1);
        
        //$data['allneedypersons']=$this->home_model->get_all_needypersons();
        
		$this->load->view('frontend/templates/header_links', $data);
		$this->load->view('frontend/templates/header1', $data);
		$this->load->view('frontend/search_for_homes', $data);
		$this->load->view('frontend/templates/footer', $data);
		$this->load->view('frontend/templates/footer_links', $data);
	}
   
}
