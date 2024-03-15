<?php
class Homes_model extends CI_Model {
     public function __construct()
    {
        $this->load->database();
    }
    public function set_home($image = false)
    {
       
        $this->load->helper('url');
        $data = array();

        if($image!=false){
            $data['images'] = $image;
        }
        if($this->input->post('title')){
            $data['title'] = $this->input->post('title');
        }
        if($this->input->post('location')){
            $data['location'] = $this->input->post('location');
        }
        if($this->input->post('state')){
            $data['state'] = $this->input->post('state');
        }
        if($this->input->post('city')){
            $data['city'] = $this->input->post('city');
        }
        if($this->input->post('house_key')){
            $data['house_key'] = $this->input->post('house_key');
        }
        if($this->input->post('people_spaces')){
            $data['people_spaces'] = $this->input->post('people_spaces');
        }
        if($this->input->post('description')){
            $data['description'] = $this->input->post('description');
        }
        
        
		return $this->db->insert('homes', $data);
    }
   
   public function delete_home($id){
        $this->db->where('id', $id);
		return $this->db->delete('homes'); 
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
	
	public function get_all_home_videos($homeid){
        $this->db->where('home_id', $homeid);
            $query = $this->db->get('homevideos');
            return $query->result_array(); 
    }
	public function getAllHomes($start=false,$end=false){
        //$this->db->where('category', $catid);
          $this->db->select('homes.* , states.name as state_name, cities.name as city_name');
        $this->db->join('states', 'homes.state = states.id', 'LEFT');
        $this->db->join('cities', 'homes.city = cities.id', 'LEFT');
        
        if($this->input->post('state') && $this->input->post('state')!=""){
            $this->db->where('homes.state', $this->input->post('state'));
        }
        if($this->input->post('city') && $this->input->post('city')!=""){
            $this->db->where('homes.city', $this->input->post('city'));
        }
        if($this->input->post('house_key') && $this->input->post('house_key')!=""){
            
            $this->db->like('homes.house_key', $this->input->post('house_key'));
        }
        $query = $this->db->get('homes',$start,$end);
        return $query->result_array();
    }
    public function get_all_homes( $id = FALSE)
    {
        if($id === FALSE){
            $this->db->order_by("id", "desc");
            if($this->input->post('state')){
                $this->db->where('state', $this->input->post('state'));
            }
            if($this->input->post('city') && $this->input->post('city')!=""){
                $this->db->where('city', $this->input->post('city'));
            }
            if($this->input->post('house_key') && $this->input->post('house_key')!=""){
                $this->db->where('house_key', $this->input->post('house_key'));
            }
            $query = $this->db->get('homes');
            return $query->result_array();
        }
        else{
            
            $this->db->select('homes.* , states.name as state_name, cities.name as city_name');
        $this->db->join('states', 'homes.state = states.id', 'LEFT');
        $this->db->join('cities', 'homes.city = cities.id', 'LEFT');
            $query = $this->db->where('homes.id', $id)->get('homes');
            return $query->result_array();
        }
    }
    public function update_home($image = false){
        $data = array();

        
        if($image != false){
            
            $hostel=$this->get_all_homes($this->input->post('id'));
            
            if(!empty($hostel[0]['images'])){
            $hostel[0]['images']=unserialize($hostel[0]['images']);
            }
            
            if(empty($hostel[0]['images'])){
                $data['images'] = serialize($image);
            }else{
                
                $arraysize=sizeof($hostel[0]['images']);
                $lastid=$hostel[0]['images'][$arraysize-1]['id'];
                $previousimages=$hostel[0]['images'];
                
                for($i=0;$i<sizeof($image);$i++){
                    $image[$i]['id']=$image[$i]['id']+$lastid;
                    $previousimages[]=$image[$i];
                }
                $data['images'] = serialize($previousimages);
                
            }
        }
        
        
        if($this->input->post('title')){
            $data['title'] = $this->input->post('title');
        }
        if($this->input->post('location')){
            $data['location'] = $this->input->post('location');
        }
        if($this->input->post('state')){
            $data['state'] = $this->input->post('state');
        }
        if($this->input->post('city')){
            $data['city'] = $this->input->post('city');
        }
        if($this->input->post('house_key')){
            $data['house_key'] = $this->input->post('house_key');
        }
        if($this->input->post('people_spaces')){
            $data['people_spaces'] = $this->input->post('people_spaces');
        }
        if($this->input->post('description')){
            $data['description'] = $this->input->post('description');
        }
        
        
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('homes', $data); 
    }
   
    
}
?>