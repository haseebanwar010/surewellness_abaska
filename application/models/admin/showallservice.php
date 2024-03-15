<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class showallservice extends CI_Model{
 
    function allservices(){
        $query=$this->db->get('service');
        return $query->result();
        
    }
    
    function delete($id){
    $this->db->where('id',$id);
    $this->db->delete('service');
    if($this->db->affected_rows()>0){
        return true;
    }
    else{
        return false;
    }
    }
    
    function getservice($id){
        $this->db->where('id',$id);
        $query=$this->db->get('service');
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
    $this->db->update('service',$userData);
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
    $this->db->update('service',$userData);
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
    $this->db->update('service',$userData);
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