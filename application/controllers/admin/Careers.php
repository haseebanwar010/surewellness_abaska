<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Careers extends CI_Controller{

function __construct(){
parent:: __construct();
    $this->load->model('admin/career');
}
    
public function index(){
    $this->load->helper('form');
	$this->load->library('form_validation');
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/career');
    $this->load->view('admin/template/footer');
    
}
    
public function add(){
    $this->load->helper('form');
	$this->load->library('form_validation');   
    $this->form_validation->set_rules('description', 'Description', 'required');
    
          if($this->form_validation->run()==TRUE)
          {

                $new_name = time().$_FILES['document']['name'];
                $config['upload_path'] = './uploads';
                $config['allowed_types'] = 'pdf';
                $config['file_name'] = $new_name;
				
				$this->load->library('upload',$config);
                $this->upload->initialize($config);
				
				if($this->upload->do_upload('document')){
                    $uploadData = $this->upload->data();
                    $doc = $uploadData['file_name'];
                    
                    $userData = array(
                    'title' => $this->input->post('title'),
                    'pay' => $this->input->post('pay'),
                    'location' => $this->input->post('location'),
                    'document' => $doc,
                    'description' => $this->input->post('description'),
                    'functional_area' => $this->input->post('functional_area'),
                    'job_shift' => $this->input->post('job_shift'),
                    'job_type' => $this->input->post('job_type'),
                    'positions' => $this->input->post('position')                    
                    );
          

                    $this->career->add($userData);
                    redirect('admin/showalljobs');

                }else{
                 echo $this->upload->display_errors();
                    exit;
                }
          }
    else{
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/career');
    $this->load->view('admin/template/footer');
    }
    
}
    
    
    
    
}
?>