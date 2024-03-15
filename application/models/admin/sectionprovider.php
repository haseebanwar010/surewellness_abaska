<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class sectionprovider extends CI_Model{
        function add($data){
    $this->db->where('id',2);
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