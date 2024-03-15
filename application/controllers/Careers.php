<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Careers extends CI_Controller{

function __construct(){
parent:: __construct();
    $this->load->model('frontend/careerlist');
}
  
    public function index(){
        $result['result']=$this->careerlist->all();
        $this->load->view('frontend/template/index1header');
        $this->load->view('frontend/career',$result);
        $this->load->view('frontend/template/footer');
      }

}
?>