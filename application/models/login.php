<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Model{



public function dologin($username,$password){

    $this->db->where('username',$username);
    $this->db->where('password',$password);
    $query=$this->db->get('admin');
    
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