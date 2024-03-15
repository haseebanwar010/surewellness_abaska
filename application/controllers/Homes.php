<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homes extends CI_Controller{

function __construct(){
parent:: __construct();
}
  
    public function index(){
        $this->load->view('frontend/template/indexheader');
        $this->load->view('frontend/searchinghomes');
        $this->load->view('frontend/template/footer');
      }

}
?>