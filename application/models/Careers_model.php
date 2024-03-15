<?php
class Careers_model extends CI_Model {
     public function __construct()
    {
        $this->load->database();
    }
    public function set_career($document = false){
        $this->load->helper('url');
        $data = array();

        if($document == false){

        }
        else{
            $data['document']=$document;
        }
        if($this->input->post('title')){
            $data['title'] = $this->input->post('title');
        }
        if($this->input->post('price')){
            $data['price'] = $this->input->post('price');
        }
        if($this->input->post('location')){
            $data['location'] = $this->input->post('location');
        }
        if($this->input->post('date')){
            $data['date'] = date("Y-m-d",strtotime($this->input->post('date')));
        }
        if($this->input->post('functional_area')){
            $data['functional_area'] = $this->input->post('functional_area');
        }
        if($this->input->post('job_shift')){
            $data['job_shift'] = $this->input->post('job_shift');
        }
        if($this->input->post('job_type')){
            $data['job_type'] = $this->input->post('job_type');
        }
        if($this->input->post('positions')){
            $data['positions'] = $this->input->post('positions');
        }
        if($this->input->post('description')){
            $data['description'] = $this->input->post('description');
        }
      
		
		return $this->db->insert('careers', $data);
    }
    public function get_careers( $id = FALSE){
       
        if($id === FALSE){  
            $query = $this->db->get('careers');
        return $query->result_array();
            
		  }
        else{
        $query = $this->db->where('id', $id)->get('careers');
            return $query->row_array();
    }
        }
    
    public function update_career($document = false){
          $this->load->helper('url');
        $data = array();
        
        if($document == false){
        }
        else{
            $data['document']=$document;
        }
        if($this->input->post('title')){
            $data['title'] = $this->input->post('title');
        }
        if($this->input->post('price')){
            $data['price'] = $this->input->post('price');
        }
        if($this->input->post('location')){
            $data['location'] = $this->input->post('location');
        }
        if($this->input->post('date')){
            $data['date'] = date("Y-m-d",strtotime($this->input->post('date')));
        }
        if($this->input->post('functional_area')){
            $data['functional_area'] = $this->input->post('functional_area');
        }
        if($this->input->post('job_shift')){
            $data['job_shift'] = $this->input->post('job_shift');
        }
        if($this->input->post('job_type')){
            $data['job_type'] = $this->input->post('job_type');
        }
        if($this->input->post('positions')){
            $data['positions'] = $this->input->post('positions');
        }
        if($this->input->post('description')){
            $data['description'] = $this->input->post('description');
        }
      


        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('careers', $data); 
    }
    public function getbannername($id = NULL){
        //echo $id;
        //exit;
        $this->load->helper('url');
		$banner=$this->db->where('id', $id)->get('careers');
        
        return $banner->result_array();
    }
   public function delete_career($id = NULL)
    {
        $this->load->helper('url');
		$this->db->where('id', $id);
		return $this->db->delete('careers'); 
    }
    public function add_application($careerid,$jobseakerid){
        $data=array();
        $data['career_id']=$careerid;
        $data['jobseaker_id']=$jobseakerid;
        return $this->db->insert('careers_applications', $data);
    }
    public function get_applications($careerid){
        $this->db->select('careers.* ,job_seakers.* , careers_applications.created_date as application_createddate, careers_applications.*');
        $this->db->join('careers', 'careers_applications.career_id = careers.id', 'LEFT');
        $this->db->join('job_seakers', 'careers_applications.jobseaker_id = job_seakers.id', 'LEFT');
        $this->db->where('careers_applications.career_id', $careerid);
        $query = $this->db->get('careers_applications');
        $result=$query->result_array();
        return $result;
    }
    public function get_applications_byjobseakerid($jobseakerid){
        $this->db->select('careers.* ,job_seakers.* , careers_applications.created_date as application_createddate, careers_applications.*');
        $this->db->join('careers', 'careers_applications.career_id = careers.id', 'LEFT');
        $this->db->join('job_seakers', 'careers_applications.jobseaker_id = job_seakers.id', 'LEFT');
        $this->db->where('careers_applications.jobseaker_id', $jobseakerid);
        $query = $this->db->get('careers_applications');
        $result=$query->result_array();
        return $result;
    }
}
?>