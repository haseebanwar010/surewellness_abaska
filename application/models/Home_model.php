<?php
class Home_model extends CI_Model {
     public function __construct()
    {
        $this->load->database();
    }

    public function get_banners( $sectionid = FALSE)
    {
       
        if($sectionid === FALSE){
            $query = $this->db->get('banners');
            return $query->result_array();
            
        }
        else{
            $query = $this->db->where('section_id', $sectionid)->get('banners');
            return $query->result_array();
        }
    }

}
?>
