<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class showbanners extends CI_Model{


function allbanners(){
    $query=$this->db->get('banners');
    return $query->result();
    
}
    
function delete($id){
    $this->db->where('id',$id);
    $this->db->delete('banners');
    if($this->db->affected_rows()>0){
        return true;
    }
    else{
        return false;
    }
}
    
    function getbanner($id){
        $this->db->where('id',$id);
        $query=$this->db->get('banners');
        if($query->num_rows()>0){
            return $query->row();
        }
        else{
            return false;
        }
    }
    
    function addbanner($userData)
    {
    $this->db->insert('banners',$userData);
    if($this->db->affected_rows() > 0){

        return true;
    }
    else
    {

        return false;
    }
    
    }//addbanner
    
    function updatebanner($userData)
    {
    $id=$this->input->post('hiddenid');
    $this->db->where('id',$id);
    $this->db->update('banners',$userData);
    if($this->db->affected_rows() > 0){

        return true;
    }
    else
    {

        return false;
    }
    
    }//updatebanner
    
    function updatebanner1($userData)
    {
    $id=$this->input->post('hiddenid');
    $this->db->where('id',$id);
    $this->db->update('banners',$userData);
    if($this->db->affected_rows() > 0){

        return true;
    }
    else
    {

        return false;
    }
    
    }//updatebanner
    
    function updatebanner2($userData)
    {
    $id=$this->input->post('hiddenid');
    $this->db->where('id',$id);
    $this->db->update('banners',$userData);
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