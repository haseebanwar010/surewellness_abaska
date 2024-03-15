<?php
class Slidersection_model extends CI_Model {
     public function __construct()
    {
        $this->load->database();
    }
    
    public function get_slidersections( $id = FALSE)
    {
        if($id === FALSE){  
            $query = $this->db->get('slider_section');
            return $query->result_array(); 
        }
        else{
        $query = $this->db->where('id', $id)->get('slider_section');
            return $query->row_array();
        }
    }
    public function update_slidersection()
    {
        $data = array();
		
        $data['title'] = $this->input->post('title');
        $data['sub_title'] = $this->input->post('sub_title');
        $data['description'] = $this->input->post('description');
        $data['video'] = $this->input->post('video');
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('slider_section', $data); 
    }
   
}
?>