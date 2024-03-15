<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_providers extends CI_Controller {

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
		$this->load->model('pages_model');
		$this->load->model('sections_model');
		$this->load->model('services_model');
		$this->load->model('slidersection_model');
	}



	public function index()
	{
        $_SESSION['section_id']=2;
        
		$data=array();
        $data['page']="home_providers";
		$data['sectionid']=$_SESSION['section_id'];
        $data['banners']=$this->home_model->get_banners(2);
		$data['sections']=$this->sections_model->get_sections_bysectionid(2);
		$data['welcome_content']=$this->pages_model->get_pages(5);
		$data['home_services']=$this->services_model->get_home_services();
        $data['slidersection']=$this->slidersection_model->get_slidersections(2);
        //$data['allneedypersons']=$this->home_model->get_all_needypersons();
        
		$this->load->view('frontend/templates/header_links', $data);
		$this->load->view('frontend/templates/header2', $data);
		$this->load->view('frontend/home_providers', $data);
		$this->load->view('frontend/templates/footer', $data);
		$this->load->view('frontend/templates/footer_links', $data);
	}
   public function services($serviceid){
       $data=array();
       $data['page']="service";
       $data['sectionid']=$_SESSION['section_id'];
       $data['service']=$this->services_model->get_services($serviceid);
       $this->load->view('frontend/templates/header_links', $data);
		$this->load->view('frontend/templates/header2', $data);
		$this->load->view('frontend/service_detail', $data);
		$this->load->view('frontend/templates/footer', $data);
		$this->load->view('frontend/templates/footer_links', $data);
   }
}
