<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class section extends CI_Model{
    
    function add($userData){
    $this->db->insert('section',$userData);
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