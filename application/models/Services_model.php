<?php
class Services_model extends CI_Model {
     public function __construct()
    {
        $this->load->database();
    }
    public function set_service($icon = false,$image = false)
    {
        $data = array();
		$data['icon'] = $icon;
		$data['image'] = $image;
		$data['title'] = $this->input->post('title');
		$data['description'] = $this->input->post('description');
		return $this->db->insert('services', $data);
    }
    public function get_services( $id = FALSE)
    {
        if($id === FALSE){  
            $query = $this->db->get('services');
            return $query->result_array(); 
        }
        else{
        $query = $this->db->where('id', $id)->get('services');
            return $query->row_array();
        }
    }
    public function get_home_services(){
        $this->db->limit(3);
        $query = $this->db->get('services');
            return $query->result_array(); 
    }
    public function update_service($icon,$image)
    {
        $data = array();
		if($image!='')
		{
			$data['image'] = $image;
		}
        if($icon!='')
		{
			$data['icon'] = $icon;
		}
        $data['title'] = $this->input->post('title');
        $data['description'] = $this->input->post('description');
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('services', $data); 
    }
    public function getbannername($id = NULL){
		$banner=$this->db->where('id', $id)->get('services');
        return $banner->result_array();
    }
    public function delete_service($id = NULL)
    {
        $this->load->helper('url');
		$this->db->where('id', $id);
		return $this->db->delete('services'); 
    }
}
?>