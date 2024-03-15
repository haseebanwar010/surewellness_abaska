<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bannersectionsenior extends CI_Controller{

function __construct(){
parent:: __construct();
    $this->load->model('admin/sectionsenior');
}
    
public function index(){
    redirect('admin/bannersectionsenior/show');
//    $this->load->view('admin/template/header');
//    $this->load->view('admin/template/sidebar');
//    $this->load->view('admin/bannersectionsenior');
//    $this->load->view('admin/template/footer');
    
}
    
    public function addseniorsection(){
        
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
        redirect('admin/bannersectionsenior/show');
        }
    

        
    }
    
    public function show(){
        $id='0';
    $result['result']=$this->sectionsenior->select($id);      
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/bannersectionsenior',$result);
    $this->load->view('admin/template/footer'); 
    }
    
    
}
    
?>