<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class jobdetail extends CI_Model{
  
    
    public function all($id){
        $this->db->where('id',$id);
        $query=$this->db->get('job_detail');
        if($query->num_rows()>0){
            return $query->row();
        }
        else{
            return false;
        }
            
        
    }

    
    
}
?>