<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller{

function __construct(){
parent:: __construct();
}
  
    public function index(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->view('login');
      }
    
    public function login(){

        
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username','User Name','required');
        $this->form_validation->set_rules('password','Password','required');
        
        if($this->form_validation->run()==TRUE)
        {

            $username=$this->input->post('username');
            $password=md5($this->input->post('password'));
            
            
            $this->load->model('login');
            $record=$this->login->dologin($username,$password);
//            echo '<pre>';
//            var_dump($record);
//            exit();
//            echo '</pre>';
            if(!empty($record)){
                
                $session_data=array(
                'username'=>$record['username'],
                'validated' => true
                );
                
                $this->session->set_userdata($session_data);
                
//                if(!$this->session->userdata('validated')){}
                    
//                    echo $session_data['username'];
//                    exit();
//                    
                    redirect('admin/Dashboard/index');
                
                
                

            }
            else{
                $this->session->set_flashdata('error','Name & Password is Incorrect');
                redirect('auth/index');
            }
            
            
            
        }
        else{
            $this->load->view('login');
        }
        
        

        
    }
    
    
}

?>