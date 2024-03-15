<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class register extends CI_Model{
  
    
public function insertdata($data){
    $this->db->insert('register_as_job_seeker',$data);
    if($this->db->affected_rows() > 0){

        return true;
    }
    else
    {

        return false;
    }    
        
}
    
    
}
?>