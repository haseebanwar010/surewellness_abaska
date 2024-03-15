<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobdetails extends CI_Controller{

function __construct(){
parent:: __construct();
    $this->load->model('frontend/jobdetail');
}
  
    public function index(){

      }
    public function show($id){
        $result['result']=$this->jobdetail->all($id);
        $this->load->view('frontend/template/index1header');
        $this->load->view('frontend/jobdetail',$result);
        $this->load->view('frontend/template/footer');    
    }

}
?>