<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

function __construct(){
parent:: __construct();
}
  
    public function index(){

        $this->load->view('frontend/template/index1header');
        $this->load->view('frontend/homeprovider');
        $this->load->view('frontend/template/footer');
      }

}
?>