<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Showalljob extends CI_Model{
 
    function alljobs(){
        $query=$this->db->get('job_detail');
        return $query->result();
        
    }


public function login($userdata){
    $this->db->where('email',$userdata->email);
    $this->db->where('password',$userdata->password);
    $this->db->get('registration');
    
    if($query->num_rows()>0){

        return true;
    }
    else
    {

        return false;
    }

}




function imagesettings($dataget){
    $data=array();
    $data['title']=$dataget->title;
    $data['image']=$dataget->$_FILES['image'];
    $this->db->insert('imagetest',$data);
    if($this->db->affected_rows() > 0){

        return true;
    }
    else
    {

        return false;
    }

}



    function mblregister($dataget){

                // $data = array(
                //     'name' => $dataget->name,
                //     'email' => $dataget->email,
                //     'password' => $dataget->password,
                //     'address' => $dataget->address,
                //     'mobile' => $dataget->mobile
                //     );


   
    $this->db->insert('registration',$dataget);
    if($this->db->affected_rows() > 0){

        return true;
    }
    else
    {

        return false;
    }


    }
    
    function delete($id){
    $this->db->where('id',$id);
    $this->db->delete('job_detail');
    if($this->db->affected_rows()>0){
        return true;
    }
    else{
        return false;
    }
    }
    
function detials($id){
        $this->db->where('id',$id);
        $query=$this->db->get('job_detail');
        if($query->num_rows()>0){
            return $query->row();
        }
        else{
            return false;
        }
    }
function editdetials($id){
        $this->db->where('id',$id);
        $query=$this->db->get('job_detail');
        if($query->num_rows()>0){
            return $query->row();
        }
        else{
            return false;
        }
}
    
function users($id){
$this->db->select('register_as_job_seeker.*');
$this->db->from('register_as_job_seeker');
$this->db->join('applied', 'register_as_job_seeker.id = applied.user_id');
$this->db->where(array('applied.job_id'=>$id));
$query = $this->db->get();
      if($query->num_rows()>0){

         return $query->result();
       }
        else{
            return false;
        }

    }
    
function seekerjobdetail($id){
$this->db->select('job_detail.*');
$this->db->from('job_detail');
$this->db->join('applied', 'job_detail.id = applied.job_id');
$this->db->where(array('applied.user_id'=>$id));
$query = $this->db->get();
      if($query->num_rows()>0){

         return $query->result();
       }
        else{
            return false;
        }
    
}
    
function seeker($id){
//    $this->db->where('id',$id);
//    $query=$this->db->get('register_as_job_seeker');
//    if($query->num_rows()>0){
//            return $query->row();
//    }
//    else{
//            return false;
//        }
    

$this->db->select(' register_as_job_seeker.*,states.sname, cities.cname');
$this->db->from('register_as_job_seeker');
$this->db->join('states', 'states.id = register_as_job_seeker.state','left');
$this->db->join('cities', 'cities.id = register_as_job_seeker.city','left');
$this->db->where(array('register_as_job_seeker.id' => $id));
 
$query = $this->db->get();
    if($query->num_rows()>0){
            return $query->row();
    }
    else{
            return false;
        }

//    echo'<pre>';
//    print_r($query->row());
//    exit;
    
    
}
//function jobsandseeker($id){
//$this->db->select('*');
//$this->db->from('job_detail');
//$this->db->join('applied', 'register_as_job_seeker.id = applied.user_id');
//$query = $this->db->get();
//      if($query->num_rows()>0){
//         return $query->result();
//       }
//        else{
//            return false;
//        }
//    
//}
    
    function getjob($id){
        $this->db->where('id',$id);
        $query=$this->db->get('job_detail');
        if($query->num_rows()>0){
            return $query->row();
        }
        else{
            return false;
        }
    }
    
    
    function update($userData)
    {
    $id=$this->input->post('hiddenid');
    $this->db->where('id',$id);
    $this->db->update('job_detail',$userData);
    if($this->db->affected_rows() > 0){

        return true;
    }
    else
    {

        return false;
    }
    
    }//updatebanner
    
    function update1($userData)
    {
    $id=$this->input->post('hiddenid');
    $this->db->where('id',$id);
    $this->db->update('job_detail',$userData);
    if($this->db->affected_rows() > 0){

        return true;
    }
    else
    {

        return false;
    }
    
    }//updatebanner
    
    function update2($userData)
    {
    $id=$this->input->post('hiddenid');
    $this->db->where('id',$id);
    $this->db->update('job_detail',$userData);
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