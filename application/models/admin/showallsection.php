<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class showallsection extends CI_Model{
 
    function allsections(){
        $query=$this->db->get('section');
        return $query->result();
        
    }
    
    function delete($id){
    $this->db->where('id',$id);
    $this->db->delete('section');
    if($this->db->affected_rows()>0){
        return true;
    }
    else{
        return false;
    }
    }
    
    function getsection($id){
        $this->db->where('id',$id);
        $query=$this->db->get('section');
        if($query->num_rows()>0){
            return $query->row();
        }
        else{
            return false;
        }
    }
    
    
    function update($userData)
    {
    $id=$this->input->post('hiddenid');
    $this->db->where('id',$id);
    $this->db->update('section',$userData);
    if($this->db->affected_rows() > 0){

        return true;
    }
    else
    {

        return false;
    }
    
    }//updatebanner
    
    function update1($userData)
    {
    $id=$this->input->post('hiddenid');
    $this->db->where('id',$id);
    $this->db->update('section',$userData);
    if($this->db->affected_rows() > 0){

        return true;
    }
    else
    {

        return false;
    }
    
    }//updatebanner
    
    function update2($userData)
    {
    $id=$this->input->post('hiddenid');
    $this->db->where('id',$id);
    $this->db->update('section',$userData);
    if($this->db->affected_rows() > 0){

        return true;
    }
    else
    {

        return false;
    }
    
    }//updatebanner

    
}
?>