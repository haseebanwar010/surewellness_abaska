<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Careers extends CI_Controller {
   
	protected $title = 'Surewellness';

	public function __construct()
        {
                parent::__construct();
                
				$this->load->library('session');
				$this->load->model('careers_model');
				
		  }
	
	public function index( $msg = NULL)
	{
        $data=array();
        $data['page'] = 'careers';
        
        
        $data['careers'] = $this->careers_model->get_careers();
		if(isset($_SESSION['section_id'])){
            $data['sectionid']=$_SESSION['section_id'];
        }
        $this->load->view('frontend/templates/header_links', $data);
        if(isset($_SESSION['section_id']) && $_SESSION['section_id']==2){
            $this->load->view('frontend/templates/header2', $data);
        }
        else{
            $this->load->view('frontend/templates/header1', $data);
        }
		
		$this->load->view('frontend/careers', $data);
        $this->load->view('frontend/templates/footer', $data);
		$this->load->view('frontend/templates/footer_links', $data);
    }
    public function detail($careerid=NULL){
        $data=array();
        $data['career'] = $this->careers_model->get_careers($careerid);
        if(isset($_SESSION['section_id'])){
            $data['sectionid']=$_SESSION['section_id'];
        }
        $this->load->view('frontend/templates/header_links', $data);
        if(isset($_SESSION['section_id']) && $_SESSION['section_id']==2){
            $this->load->view('frontend/templates/header2', $data);
        }
        else{
            $this->load->view('frontend/templates/header1', $data);
        }
		
		$this->load->view('frontend/career_detail', $data);
        $this->load->view('frontend/templates/footer', $data);
		$this->load->view('frontend/templates/footer_links', $data);
    }
    public function apply($careerid){
        
        if(isset($_SESSION['jobseaker']) && $_SESSION['jobseaker']['id']>0){
            if($this->careers_model->add_application($careerid,$_SESSION['jobseaker']['id'])){
                $this->session->set_flashdata('msg', 'Your application has been submitted successfully!');
                redirect('careers');
            }
        }
        else{
            redirect('careers');
        }
    }
}
?>