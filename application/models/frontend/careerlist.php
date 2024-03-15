<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class careerlist extends CI_Model{
  
    
    public function all(){
        $query=$this->db->get('job_detail');
        return $query->result();    
        
    }
    
    
}
?>