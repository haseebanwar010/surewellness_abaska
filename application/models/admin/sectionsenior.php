<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class sectionsenior extends CI_Model{
    
    function add($data){
    $this->db->where('id',1);
    $query=$this->db->update('banners_section',$data);
    if($this->db->affected_rows() > 0){

        return true;
    }
    else{
        return false;
    }

    }
    
    function select($id){
        $this->db->where('section_id',$id);
        $query=$this->db->get('banners_section');
        if($query->num_rows()>0){
            return $query->row();
        }
        else{
            return false;
        }
    }
    
}

?>