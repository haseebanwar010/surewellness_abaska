<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class seekerslogin extends CI_Model{



public function dologin($email,$password){

    $this->db->where('email',$email);
    $this->db->where('password',$password);
    $query=$this->db->get('register_as_job_seeker');
    
    if($query->num_rows()>0){

        return $query->row_array();
    }
    else
    {

        return false;
    }
}
    
    
}
?>