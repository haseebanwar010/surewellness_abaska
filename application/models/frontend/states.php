<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class states extends CI_Model{
  
    
    public function all(){
        $query=$this->db->get('states');
        if($query->num_rows()>0){
            return $query->result();
        }
        else{
            return false;
        }
            
        
    }
    
public function sel_where($tbl,$where)
 {
  $r=$this->db->get_where($tbl,$where);
  
  $rr= $r->result_array();
  //print_r($rr);break;
  return $rr;
 }

    
    
}
?>