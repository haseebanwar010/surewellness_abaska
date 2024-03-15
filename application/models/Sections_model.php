<?php
class Sections_model extends CI_Model {
     public function __construct()
    {
        $this->load->database();
    }
    public function set_section($image = false)
    {
        $data = array();
		$data['image'] = $image;
		$data['section_id'] = $this->input->post('section_id');
		$data['title'] = $this->input->post('title');
		$data['description'] = $this->input->post('description');
        
		return $this->db->insert('sections', $data);
    }
    public function get_sections( $id = FALSE)
    {
        if($id === FALSE){  
            $query = $this->db->get('sections');
            return $query->result_array(); 
        }
        else{
        $query = $this->db->where('id', $id)->get('sections');
            return $query->row_array();
        }
    }
    public function get_sections_bysectionid($sectionid){
        $this->db->limit(4);
        $query = $this->db->where('section_id', $sectionid)->get('sections');
        return $query->result_array();
    }
    public function update_section($image = false)
    {
        $data = array();
		if($image!='')
		{
			$data['image'] = $image;
		}
        $data['title'] = $this->input->post('title');
		$data['description'] = $this->input->post('description');
        $data['section_id'] = $this->input->post('section_id');
        
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('sections', $data); 
    }
    public function getbannername($id = NULL){
		$banner=$this->db->where('id', $id)->get('sections');
        return $banner->result_array();
    }
    public function delete_section($id = NULL)
    {
        $this->load->helper('url');
		$this->db->where('id', $id);
		return $this->db->delete('sections'); 
    }
}
?>