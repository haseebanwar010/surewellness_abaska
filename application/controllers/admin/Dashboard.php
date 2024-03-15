<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{
  
    public function index(){
        if($this->session->userdata('validated')){
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/template/footer');
        }
        else{
            redirect('auth');
        }
        

    }
    
    
    public function logout(){
        $this->session->sess_destroy();
            redirect('auth');
        
//        if(1=1){
//        
//            }
//        else{
//            echo 'not working';
//            exit();
//        }
        

        }


    }
    

?>