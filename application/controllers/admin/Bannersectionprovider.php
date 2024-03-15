<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bannersectionprovider extends CI_Controller{

function __construct(){
parent:: __construct();
$this->load->model('admin/sectionprovider');
}
    

    public function index(){
    redirect('admin/bannersectionprovider/show');
//    $this->load->view('admin/template/header');
//    $this->load->view('admin/template/sidebar');
//    $this->load->view('admin/bannersectionprovider');
//    $this->load->view('admin/template/footer');
    
}
    
    
    
    public function addprovidersection(){
        
        if($_POST['bannersubmit'])
        {
            $data=array(
            'section_id' => $this->input->post('hiddensection'),
            'title' => $this->input->post('title'),
            'sub_title' => $this->input->post('sub_title'),
            'video' => $this->input->post('video'),
            'description' => $this->input->post('description')
            );
            
        $this->sectionsenior->add($data);
        redirect('admin/bannersectionprovider/show');
        }
    

        
    }
    
    public function show(){
        $id='1';
    $result['result']=$this->sectionprovider->select($id);      
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/bannersectionprovider',$result);
    $this->load->view('admin/template/footer'); 
    }
    
    
}
    

?>