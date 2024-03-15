<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apply extends CI_Controller{

function __construct(){
parent:: __construct();
    $this->load->model('frontend/applied');
}
  
    public function index(){
        if($this->session->userdata('validated')){
            $id=$_SESSION['id'];
            $hid=$_POST['hiddenid'];
            $data=array(
            'user_id'=>$id,
            'job_id'=>$hid
            );
            $this->applied->apply($data);
            redirect('careers');
        }
        
        else{

         redirect('careers');
        }
      }
    
}
?>