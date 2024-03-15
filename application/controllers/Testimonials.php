<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonials extends CI_Controller {

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
		$this->load->model('testimonials_model');
	}



	public function index()
	{
        
		$data=array();
		$data['testimonials']=$this->testimonials_model->get_testimonials();
		if(isset($_SESSION['section_id'])){
            $data['sectionid']=$_SESSION['section_id'];
        }
		$this->load->view('frontend/templates/header_links', $data);
        if(isset($_SESSION['section_id']) && $_SESSION['section_id']==1){
            $this->load->view('frontend/templates/header1', $data);
        }
		else{
            $this->load->view('frontend/templates/header2', $data);
        }
		$this->load->view('frontend/testimonials', $data);
        $this->load->view('frontend/templates/footer', $data);
		$this->load->view('frontend/templates/footer_links', $data);
	}
    
}
