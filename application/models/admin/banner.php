<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class banner extends CI_Model{



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
    
}
    
    
}


?>