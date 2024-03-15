<?php
class Homevideos_model extends CI_Model {
     public function __construct()
    {
        $this->load->database();
    }
    public function set_homevideo($video = false)
    {
       
        $this->load->helper('url');
        $data = array();

        if($video!=false){
            $data['video'] = $video;
        }
        if($this->input->post('title')){
            $data['title'] = $this->input->post('title');
        }
        if($this->input->post('home_id')){
            $data['home_id'] = $this->input->post('home_id');
        }
        
        
		return $this->db->insert('homevideos', $data);
    }
   
   public function delete_video($id){
        $this->db->where('id', $id);
		return $this->db->delete('homevideos'); 
    }
    public function delete_home_image($homeid,$imageid){
        $home=$this->get_all_homes($homeid);
        if(!empty($home)){
            $hostelimages=unserialize($home[0]['images']);
            
            $flag=0;
            foreach($hostelimages as $hostelimage){
                if($hostelimage['id']==$imageid){
                    $imagename=$hostelimage['name'];
                    @unlink("./uploads/thumb/$imagename");
                    @unlink("./uploads/$imagename");
                    
                    unset($hostelimages[$flag]);
                }
                $flag++;
            }
            $data['images']=serialize($hostelimages);
            $this->db->where('id', $homeid);
            return $this->db->update('homes', $data); 
            
        }
    }
	
	
	public function get_all_videos($id=false){
        //$this->db->where('category', $catid);
        if($id==false){
            $this->db->select('homevideos.* , homes.title as home_title');
        $this->db->join('homes', 'homevideos.home_id = homes.id', 'LEFT');
        
        $query = $this->db->get('homevideos');
        return $query->result_array();
        }
        else{
            $this->db->where('id', $id);
            $query = $this->db->get('homevideos');
            return $query->row_array(); 
        }
        
    }
    public function get_all_homes(){
        $query = $this->db->get('homes');
            return $query->result_array(); 
    }
    public function update_video($video = false){
        $data = array();

        
        if($video != false){
            $data['video']=$video;
        }
        
        
        if($this->input->post('title')){
            $data['title'] = $this->input->post('title');
        }
        if($this->input->post('home_id')){
            $data['home_id'] = $this->input->post('home_id');
        }
        
        
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('homevideos', $data); 
    }
   public function getbannername($id = NULL){
		$banner=$this->db->where('id', $id)->get('homevideos');
        return $banner->result_array();
    }
    
}
?>