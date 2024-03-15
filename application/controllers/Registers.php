<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registers extends CI_Controller{

function __construct(){
parent:: __construct();


}
  
    public function index(){
        $this->load->helper('form');
		$this->load->library('form_validation');
        $this->load->model('frontend/states');
        $result['result']=$this->states->all();
        $this->load->view('frontend/template/index1header');
        $this->load->view('frontend/register',$result);
        $this->load->view('frontend/template/footer');   
      }
    
    public function city($id)
    {
    $this->load->model('frontend/states');
    $where=array("state_id"=>$id);
    //print_r ($where); break;
      $city=$this->states->sel_where('cities',$where);
      echo "<option disabled>-Select City-</option>";
      foreach($city as $ct)
      {

          
      echo"<option value='".$ct['id']."'>".$ct['name']."</option>";
          
      }

}
    
    
public function add(){
    $this->load->helper('form');
	$this->load->library('form_validation');
    $this->form_validation->set_rules('first_name', 'First Name', 'required');
    $this->form_validation->set_rules('middle_name', 'Last Name', 'required');
    $this->form_validation->set_rules('last_name', 'Middle Name', 'required');
    $this->form_validation->set_rules('address', 'address', 'required');
    $this->form_validation->set_rules('state', 'state', 'required');
    $this->form_validation->set_rules('city', 'city', 'required');
//    $this->form_validation->set_rules('', '', 'required');
//    $this->form_validation->set_rules('', '', 'required');
//    $this->form_validation->set_rules('', '', 'required');
//    $this->form_validation->set_rules('', '', 'required');
//    $this->form_validation->set_rules('', '', 'required');
//    $this->form_validation->set_rules('', '', 'required');
//    $this->form_validation->set_rules('', '', 'required');
//    $this->form_validation->set_rules('', '', 'required');
//    $this->form_validation->set_rules('', '', 'required');
//    $this->form_validation->set_rules('', '', 'required');
//    $this->form_validation->set_rules('', '', 'required');
//    $this->form_validation->set_rules('', '', 'required');
//    $this->form_validation->set_rules('', '', 'required');
//    $this->form_validation->set_rules('', '', 'required');
//    $this->form_validation->set_rules('', '', 'required');
//    $this->form_validation->set_rules('', '', 'required');

    
    if($this->form_validation->run()==TRUE){
        
$checkbox1=$_POST['certificates'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
        
        $data=array(
        'fname' => $this->input->post('first_name'),
        'mname' => $this->input->post('middle_name'),
        'lname' => $this->input->post('last_name'),
        'address' => $this->input->post('address'),
        'state' => $this->input->post('state'),
        'city' => $this->input->post('city'),
        'social_sec_num' => $this->input->post('ssn'),
        'email' => $this->input->post('email'),
        'password' => $this->input->post('password'),
        'home_phone' => $this->input->post('home_phone'),
        'cell_phone' => $this->input->post('cell_phone'),
        'work_phone' => $this->input->post('work_phone'),
        'emergency_contact' => $this->input->post('emergency_contact'),
        'age' => $this->input->post('age_question'),
        'date_of_birth' => $this->input->post('dob'),
        'language' => $this->input->post('languages'),
        'currently_employee' => $this->input->post('currently_employed'),
        'contact_employee' => $this->input->post('contact_employer'),
        'how_find_company' => $this->input->post('how_find_company'),
        'work_city' => $this->input->post('work_city'),
        'essential_function' => $this->input->post('essential_functions'),
        'previously_worked' => $this->input->post('previously_worked'),
        'certificates' => $chk,
        'applied_for_license' => $this->input->post('previously_worked'),
        'agrred_terms'=>$this->input->post('agrred_terms')
        );
        $this->load->model('frontend/register');
        $this->register->insertdata($data);
        redirect('registers');
        
    }
    else{
        $this->load->view('frontend/template/index1header');
        $this->load->view('frontend/register');
        $this->load->view('frontend/template/footer');   
//        echo'not';
//        exit();
        redirect('registers');
    } 
    
    
}
    
    
    
    
    
    
    
    
    
}
?>