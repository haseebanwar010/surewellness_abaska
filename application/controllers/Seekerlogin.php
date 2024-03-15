<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seekerlogin extends CI_Controller{

function __construct(){
parent:: __construct();
$this->load->model('frontend/seekerslogin');
}
  
    public function index(){}
    
    public function check(){

        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required');
        
        if($this->form_validation->run()==TRUE)
        {
            $email=$this->input->post('email');
            $password=$this->input->post('password');
            
            $record=$this->seekerslogin->dologin($email,$password);
            if(!empty($record)){
                
                $session_data=array(
                'email'=>$record['email'],
                'id'=>$record['id'],
                'validated' => true
                );
                
                $this->session->set_userdata($session_data);
                
//                if($this->session->userdata('validated')){
//                    
//                    echo $session_data['email'];
//                echo $session_data['id'];
//                    exit();}
                redirect('homesurewellness');
                  
                
                    
            }
            else{
                $this->session->set_flashdata('error','Name & Password is Incorrect');
//                redirect('auth/index');
            }
            
            
            
        }
        else{
            
        }
    }

    
    
}
?>