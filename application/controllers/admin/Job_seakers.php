<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_seakers extends CI_Controller {
   
	protected $title = 'Surewellness';

	public function __construct()
        {
                parent::__construct();
                
				$this->load->library('session');
				$this->load->model('jobseaker_model');
				$this->load->model('careers_model');
				
		  }
	
	public function index( $msg = NULL)
	{
        $data=array();
        $data['page'] = 'jobseakers';
        if(! $this->session->userdata('validated')){
			redirect('auth');
		}
        else{
		$data['jobseakers'] = $this->jobseaker_model->get_jobseakers();
		if(! $this->session->userdata('validated')){
			redirect('auth');
		}
        else{
            $this->load->view('admin/templates/header', $data);
				$this->load->view('admin/templates/sidebar', $data);
				$this->load->view('admin/jobseakers/index', $data);
				$this->load->view('admin/templates/footer', $data);
        }
				
		}
    }
    public function detail($jobseaker_id=NULL){
        $data=array();
        $data['page'] = 'jobseakerdetail';
        $data['jobseaker']=$this->jobseaker_model->get_jobseakers($jobseaker_id);
        $data['applications']=$this->careers_model->get_applications_byjobseakerid($jobseaker_id);
       
        $this->load->view('admin/templates/header', $data);
				$this->load->view('admin/templates/sidebar', $data);
				$this->load->view('admin/jobseakers/detail', $data);
				$this->load->view('admin/templates/footer', $data);
    }
    
}
?>