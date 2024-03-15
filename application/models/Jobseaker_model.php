<?php
class Jobseaker_model extends CI_Model {
     public function __construct()
    {
        $this->load->database();
    }
   public function set_jobseaker($cv,$document){
        $data = array();
       if($this->input->post('first_name')){
           $data['first_name'] = $this->input->post('first_name');
       }
       if($this->input->post('middle_name')){
           $data['middle_name'] = $this->input->post('middle_name');
       }
       if($this->input->post('last_name')){
           $data['last_name'] = $this->input->post('last_name');
       }
       if($this->input->post('address')){
           $data['address'] = $this->input->post('address');
       }
       if($this->input->post('state')){
           $data['state'] = $this->input->post('state');
       }
       if($this->input->post('city')){
           $data['city'] = $this->input->post('city');
       }
       if($this->input->post('ssn')){
           $data['ssn'] = $this->input->post('ssn');
       }
       if($this->input->post('email')){
           $data['email'] = $this->input->post('email');
       }if($this->input->post('home_phone')){
           $data['home_phone'] = $this->input->post('home_phone');
       }
       if($this->input->post('password')){
           $data['password'] = md5($this->input->post('password'));
       }
		if($this->input->post('home_phone')){
           $data['home_phone'] = $this->input->post('home_phone');
       }if($this->input->post('cell_phone')){
           $data['cell_phone'] = $this->input->post('cell_phone');
       }if($this->input->post('work_phone')){
           $data['work_phone'] = $this->input->post('work_phone');
       }if($this->input->post('emergency_contact')){
           $data['emergency_contact'] = $this->input->post('emergency_contact');
       }if($this->input->post('age_question')){
           $data['age_question'] = $this->input->post('age_question');
       }if($this->input->post('dob')){
           $data['dob'] = date("Y-m-d",strtotime($this->input->post('dob')));
       }
       if($this->input->post('languages')){
           $data['languages'] = $this->input->post('languages');
       }
       if($this->input->post('currently_employed')){
           $data['currently_employed'] = $this->input->post('currently_employed');
       }
       if($this->input->post('contact_employer')){
           $data['contact_employer'] = $this->input->post('contact_employer');
       }
       if($this->input->post('how_find_company')){
           $data['how_find_company'] = $this->input->post('how_find_company');
       }
       if($this->input->post('work_city')){
           $data['work_city'] = $this->input->post('work_city');
       }
       if($this->input->post('essential_functions')){
           $data['essential_functions'] = $this->input->post('essential_functions');
       }
       if($this->input->post('previously_worked')){
           $data['previously_worked'] = $this->input->post('previously_worked');
       }
       if($this->input->post('high_school')){
           $data['high_school'] = $this->input->post('high_school');
       }
       if($this->input->post('graduate')){
           $data['graduate'] = $this->input->post('graduate');
       }
       if($this->input->post('college')){
           $data['college'] = $this->input->post('college');
       }
       if($this->input->post('trade')){
           $data['trade'] = $this->input->post('trade');
       }
       if($this->input->post('relevant_experience')){
           $data['relevant_experience'] = $this->input->post('relevant_experience');
       }
       
       if($this->input->post('employer_name_address1')){
           $data['employer_name_address1'] = $this->input->post('employer_name_address1');
       }
       if($this->input->post('supervisor_name1')){
           $data['supervisor_name1'] = $this->input->post('supervisor_name1');
       }
       if($this->input->post('start_date1')){
           $data['start_date1'] = date("Y-m-d",strtotime($this->input->post('start_date1')));
       }
       if($this->input->post('end_date1')){
           $data['end_date1'] = date("Y-m-d",strtotime($this->input->post('end_date1')));
       }
       if($this->input->post('job_title1')){
           $data['job_title1'] = $this->input->post('job_title1');
       }
       if($this->input->post('leaving_reason1')){
           $data['leaving_reason1'] = $this->input->post('leaving_reason1');
       }
       if($this->input->post('work_description1')){
           $data['work_description1'] = $this->input->post('work_description1');
       }
       
       if($this->input->post('employer_name_address2')){
           $data['employer_name_address2'] = $this->input->post('employer_name_address2');
       }
       if($this->input->post('supervisor_name2')){
           $data['supervisor_name2'] = $this->input->post('supervisor_name2');
       }
       if($this->input->post('start_date2')){
           $data['start_date2'] = date("Y-m-d",strtotime($this->input->post('start_date2')));
       }
       if($this->input->post('end_date2')){
           $data['end_date2'] = date("Y-m-d",strtotime($this->input->post('end_date2')));
       }
       if($this->input->post('job_title2')){
           $data['job_title2'] = $this->input->post('job_title2');
       }
       if($this->input->post('leaving_reason2')){
           $data['leaving_reason2'] = $this->input->post('leaving_reason2');
       }
       if($this->input->post('work_description2')){
           $data['work_description2'] = $this->input->post('work_description2');
       }
       if($this->input->post('employer_name_address3')){
           $data['employer_name_address3'] = $this->input->post('employer_name_address3');
       }
       if($this->input->post('supervisor_name3')){
           $data['supervisor_name3'] = $this->input->post('supervisor_name3');
       }
       if($this->input->post('start_date3')){
           $data['start_date3'] = date("Y-m-d",strtotime($this->input->post('start_date3')));
       }
       if($this->input->post('end_date3')){
           $data['end_date3'] = date("Y-m-d",strtotime($this->input->post('end_date3')));
       }
       if($this->input->post('job_title3')){
           $data['job_title3'] = $this->input->post('job_title3');
       }
       if($this->input->post('leaving_reason3')){
           $data['leaving_reason3'] = $this->input->post('leaving_reason3');
       }
       if($this->input->post('work_description3')){
           $data['work_description3'] = $this->input->post('work_description3');
       }
       if($this->input->post('related_person_name_detail')){
           $data['related_person_name_detail'] = $this->input->post('related_person_name_detail');
       }
       if($this->input->post('business_occupation')){
           $data['business_occupation'] = $this->input->post('business_occupation');
       }
       if($this->input->post('years_acquainted')){
           $data['years_acquainted'] = $this->input->post('years_acquainted');
       }
       if($this->input->post('certificates')){
           $data['certificates'] = implode(', ', $this->input->post('certificates'));
       }
       if($this->input->post('applied_licences')){
           $data['applied_licences'] = $this->input->post('applied_licences');
       }
       if($this->input->post('notices')){
           $data['notices'] = $this->input->post('notices');
       }
       if($this->input->post('any_crime')){
           $data['any_crime'] = $this->input->post('any_crime');
       }
       if($this->input->post('criminal_trial')){
           $data['criminal_trial'] = $this->input->post('criminal_trial');
       }
       if($this->input->post('violence')){
           $data['violence'] = $this->input->post('violence');
       }
       if($this->input->post('agrred_terms')){
           $data['agrred_terms'] = $this->input->post('agrred_terms');
       }
       echo "<pre>";
       var_dump($data);
       exit;
    
		return $this->db->insert('job_seakers', $data);
   }
    public function get_states( $id = FALSE)
    {
        if($id === FALSE){  
            $query = $this->db->get('states');
            return $query->result_array(); 
        }
        else{
        $query = $this->db->where('id', $id)->get('states');
            return $query->result_array();
        }
    }
    
   public function get_ajax_cities($stateid){
        $this->db->where('state_id',$stateid);
        $query = $this->db->get('cities');
        return $query->result_array();
    }
    public function authenticate_jobseaker(){
        $this->db->where('email',$this->input->post('email'));
        $this->db->where('password',md5($this->input->post('password')));
        $query = $this->db->get('job_seakers');
        return $query->row_array();
    }
    public function authenticate_jobseaker_email(){
        $this->db->where('email',$this->input->post('email'));
        $query = $this->db->get('job_seakers');
        return $query->row_array();
    }
    public function update_jobseaker_password($password,$id){
        $data=array();
        $data['password']=md5($password);
        $this->db->where('id', $id);
        return $this->db->update('job_seakers', $data); 
    }
    public function get_jobseakers( $id = FALSE){
        if($id === FALSE){  
            $query = $this->db->get('job_seakers');
            return $query->result_array();
        }
        else{
            $this->db->select('job_seakers.* , states.name as state_name, cities.name as city_name');
        $this->db->join('states', 'job_seakers.state = states.id', 'LEFT');
        $this->db->join('cities', 'job_seakers.city = cities.id', 'LEFT');
            $query = $this->db->where('job_seakers.id', $id)->get('job_seakers');
            return $query->row_array();
        }
    }
    public function get_cites_bystateid($stateid){
        $this->db->where('state_id',$stateid);
        $query = $this->db->get('cities');
        return $query->result_array();
    }
}
?>