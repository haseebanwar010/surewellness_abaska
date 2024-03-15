<?php
class Testimonials_model extends CI_Model {
     public function __construct()
    {
        $this->load->database();
    }
    public function set_testimonial($image = false)
    {
        $data = array();
		$data['image'] = $image;
		$data['name'] = $this->input->post('name');
		$data['description'] = $this->input->post('description');
		return $this->db->insert('testimonials', $data);
    }
    public function get_testimonials( $id = FALSE)
    {
        if($id === FALSE){  
            $query = $this->db->get('testimonials');
            return $query->result_array(); 
        }
        else{
        $query = $this->db->where('id', $id)->get('testimonials');
            return $query->row_array();
        }
    }
    public function update_testimonial($image)
    {
        $data = array();
		if($image!='')
		{
			$data['image'] = $image;
		}
        $data['name'] = $this->input->post('name');
        $data['description'] = $this->input->post('description');
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('testimonials', $data); 
    }
    public function getbannername($id = NULL){
		$banner=$this->db->where('id', $id)->get('testimonials');
        return $banner->result_array();
    }
    public function delete_testimonial($id = NULL)
    {
        $this->load->helper('url');
		$this->db->where('id', $id);
		return $this->db->delete('testimonials'); 
    }
}
?>