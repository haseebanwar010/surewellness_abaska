<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class applied extends CI_Model{
  
    
public function apply($data){
    $this->db->insert('applied',$data);
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