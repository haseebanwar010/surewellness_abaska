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
        if(! $this->session->userdata('validated')){
			redirect('auth');
		}
        else{
		$data['careers'] = $this->careers_model->get_careers();
		if(! $this->session->userdata('validated')){
			redirect('auth');
		}
        else{
            $this->load->view('admin/templates/header', $data);
				$this->load->view('admin/templates/sidebar', $data);
				$this->load->view('admin/careers/index', $data);
				$this->load->view('admin/templates/footer', $data);
        }
				
		}
    }
    
    public function add($url = NULL){
        if(! $this->session->userdata('validated')){
			 redirect('auth');
        }
			$data['page'] = 'addcareer';
			$this->load->helper('form');
			$this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Title', 'required|min_length[3]');
            $this->form_validation->set_rules('price', 'Price', 'required');
            $this->form_validation->set_rules('location', 'Location', 'required');
            $this->form_validation->set_rules('date', 'Date', 'required');
            $this->form_validation->set_rules('functional_area', 'Functional Area', 'required');
			$this->form_validation->set_rules('job_shift', 'Job Shift', 'required');
			$this->form_validation->set_rules('job_type', 'Job Type', 'required');
			$this->form_validation->set_rules('positions', 'Positions', 'required');
			$this->form_validation->set_rules('description', 'Description', 'required');
			
			if ($this->form_validation->run() === FALSE)
			{
               
                
				if($url == NULL){
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar', $data);
				$this->load->view('admin/careers/add', $data);
				$this->load->view('admin/templates/footer');
				}else{
						echo validation_errors();
				}
					
			}
			else
			{
                
                if(isset($_FILES["document"]) && !empty($_FILES["document"])){
                    $new_name = time().$_FILES["document"]['name'];
				$config['file_name'] = $new_name;
				$config['upload_path']   =   "./uploads/";
 				$config['allowed_types'] =   "*"; 
		 		//$config['max_size']      =   "5000";
		 		//$config['max_width']     =   "2000";
		 		//$config['max_height']    =   "1280";
		 		$this->load->library('upload',$config);
                
		 		if(!$this->upload->do_upload('document'))
		 		{
                    $this->session->set_flashdata('error_msg',$this->upload->display_errors());
                    redirect('admin/careers');
		 		}
		 		else
		 		{
		 			$finfo=$this->upload->data();
		 			
					$this->careers_model->set_career($finfo['file_name']);
                    $this->session->set_flashdata('msg', 'Career Added Successfully!');
                    redirect('admin/careers');
		 		}
                }
                
                $this->careers_model->set_career();
				$this->session->set_flashdata('msg', 'Career Added Successfully!');
				redirect('admin/careers');	
			}
			
			
		}
    public function edit($id = NULL){
        if(! $this->session->userdata('validated')){
			 redirect('auth');
        }
			$user = $this->session->get_userdata();
			$data['page'] = 'editcareer';
        
            $data['career'] = $this->careers_model->get_careers($id);
			
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('title', 'Title', 'required|min_length[3]');
            $this->form_validation->set_rules('price', 'Price', 'required');
            $this->form_validation->set_rules('location', 'Location', 'required');
            $this->form_validation->set_rules('date', 'Date', 'required');
            $this->form_validation->set_rules('functional_area', 'Functional Area', 'required');
			$this->form_validation->set_rules('job_shift', 'Job Shift', 'required');
			$this->form_validation->set_rules('job_type', 'Job Type', 'required');
			$this->form_validation->set_rules('positions', 'Positions', 'required');
			$this->form_validation->set_rules('description', 'Description', 'required');
			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar', $data);
				$this->load->view('admin/careers/edit', $data);
				$this->load->view('admin/templates/footer');
			}
			else
			{
                
                if(isset($_FILES["document"]) && $_FILES["document"]['name']!=""){
                    $new_name = time().$_FILES["document"]['name'];
				$config['file_name'] = $new_name;
				$config['upload_path']   =   "./uploads/";
 				$config['allowed_types'] =   "*"; 
		 		//$config['max_size']      =   "5000";
		 		//$config['max_width']     =   "2000";
		 		//$config['max_height']    =   "1280";
		 		$this->load->library('upload',$config);
                
		 		if(!$this->upload->do_upload('document'))
		 		{
                    $this->session->set_flashdata('error_msg',$this->upload->display_errors());
                    redirect('admin/careers');
		 		}
		 		else
		 		{
		 			$finfo=$this->upload->data();
		 			
					$this->careers_model->update_career($finfo['file_name']);
                    $this->session->set_flashdata('msg', 'Career Information is updated Successfully!');
                    redirect('admin/careers');
		 		}
                }
                else{
                    $this->careers_model->update_career();
				$this->session->set_flashdata('msg', 'Career Information is updated Successfully!');
				redirect('admin/careers');
                }
                
                
                
                
                
				
			}
			
			
			
			
		}
    public function detail($careerid=NULL){
        $data=array();
        $data['page'] = 'careers';
        $data['career']=$this->careers_model->get_careers($careerid);
        $data['applications']=$this->careers_model->get_applications($careerid);
       
        $this->load->view('admin/templates/header', $data);
				$this->load->view('admin/templates/sidebar', $data);
				$this->load->view('admin/careers/detail', $data);
				$this->load->view('admin/templates/footer', $data);
    }
 public function delete($id = NULL){
			$user = $this->session->get_userdata();
        $banner=$this->careers_model->getbannername($id);
        $bannername=$banner[0]['document'];
        
			if($this->careers_model->delete_career($id)){
                @unlink("./uploads/$bannername");
				$this->session->set_flashdata('msg', 'Career is deleted Successfully!');
				redirect('admin/careers');
			}
			
		}
    
}
?>