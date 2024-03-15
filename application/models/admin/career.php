<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class career extends CI_Model{
    
    function add($userData){
    $this->db->insert('job_detail',$userData);
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