<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homes extends CI_Controller {
   
	protected $title = 'Hostel'; 

	public function __construct()
        {
                parent::__construct();
                
				$this->load->library('session');
				$this->load->model('homes_model');
				$this->load->model('Jobseaker_model');
				
		  }
	
	public function index( $msg = NULL)
	{
        $data=array();
        $data['page'] = 'homes';
		$data['homes'] = $this->homes_model->get_all_homes();
		if(! $this->session->userdata('validated')){
			redirect('auth');
		}
        else{
            $this->load->view('admin/templates/header', $data);
			$this->load->view('admin/templates/sidebar', $data);
			$this->load->view('admin/homes/index', $data);
			$this->load->view('admin/templates/footer', $data);
        }
				
	}
	
	
	public function add($id = NULL){
        /*if(isset($_POST) && !empty($_POST)){
            echo "<pre>";
            var_dump($_POST);
            exit;
        }*/
        $data=array();
        $user = $this->session->get_userdata();
			$data['page'] = 'addhome';
        if(! $this->session->userdata('validated')){
			redirect('auth');
		}
        $data['states']=$this->Jobseaker_model->get_states();
        $data['key']=date('dmhis');
       
			$this->load->helper('form');
			$this->load->library('form_validation');
            
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('location', 'Location', 'required');
            $this->form_validation->set_rules('state', 'State', 'required');
            $this->form_validation->set_rules('city', 'City', 'required');
            $this->form_validation->set_rules('house_key', 'House Key', 'required');
            $this->form_validation->set_rules('people_spaces', 'Spaces', 'required');
            
			if ($this->form_validation->run() === FALSE)
			{
                $response=validation_errors();
                if(!empty($response)){
                    
                    echo $response;
                exit;
                }else{
                    $this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar', $data);
				$this->load->view('admin/homes/add', $data);
                $this->load->view('admin/templates/footer');
                }
                
				
			}
			else
			{
                $images=array();
                if(isset($_FILES) && !empty($_FILES)){
                    
                    
                    
                    for($i=0;$i<sizeof($_FILES);$i++){
                        
                        $new_name = time().$_FILES['file'.$i]['name'];
				        $config['file_name'] = $new_name;
				        $config['upload_path']   =   "./uploads/";
 				       $config['allowed_types'] =   "*"; 
		 		       /*$config['max_size']      =   "5000";
		 		       $config['max_width']     =   "2000";
		 		       $config['max_height']    =   "1280";*/
		 		       $this->load->library('upload',$config);
                        if(!$this->upload->do_upload('file'.$i))
		 		{
                    $response=$this->upload->display_errors();
                    echo json_encode($response);
                    exit;
		 		}
		 		else
		 		{
		 			$finfo=$this->upload->data();
		 			$this->createThumbnail($finfo['file_name']);
                    
                    $images[]=array('id' => $i+1 , "name" => $finfo['file_name']);
		 		}
                    }
                
                
		 		
                }
                
                
                $image=serialize($images);
                $this->homes_model->set_home($image);
                $this->session->set_flashdata('msg', 'Home is added Successfully!');
				echo "success";
			}
    }
    
    
        public function edit($id = NULL){
			
			$data['page'] = 'edithome';
    
            
            
			$data['states']=$this->Jobseaker_model->get_states();
            if($id!=NULL){
            $data['home'] = $this->homes_model->get_all_homes($id);
			$data['cities']=$this->Jobseaker_model->get_cites_bystateid($data['home'][0]['state']);
            }
			if(! $this->session->userdata('validated')){
			redirect('auth');
		  }
			
			$this->load->helper('form');
			$this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('location', 'Location', 'required');
            $this->form_validation->set_rules('state', 'State', 'required');
            $this->form_validation->set_rules('city', 'City', 'required');
            $this->form_validation->set_rules('house_key', 'House Key', 'required');
            $this->form_validation->set_rules('people_spaces', 'Spaces', 'required');
			if ($this->form_validation->run() === FALSE)
			{
             
                $response=validation_errors();
                if(!empty($response)){
                    echo $response;
                exit;
                }else{
                    $this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar', $data);
				$this->load->view('admin/homes/edit', $data);
				$this->load->view('admin/templates/footer');
                }
                
			}
			else
			{
				
                $images=array();
                if(isset($_FILES) && !empty($_FILES)){
                    
                    
                    
                    for($i=0;$i<sizeof($_FILES);$i++){
                        
                        $new_name = time().$_FILES['file'.$i]['name'];
				        $config['file_name'] = $new_name;
				        $config['upload_path']   =   "./uploads/";
 				       $config['allowed_types'] =   "gif|jpg|jpeg|png"; 
		 		       /*$config['max_size']      =   "5000";
		 		       $config['max_width']     =   "2000";
		 		       $config['max_height']    =   "1280";*/
		 		       $this->load->library('upload',$config);
                        if(!$this->upload->do_upload('file'.$i))
		 		{
                    $response=$this->upload->display_errors();
                    echo json_encode($response);
                    exit;
		 		}
		 		else
		 		{
		 			$finfo=$this->upload->data();
		 			$this->createThumbnail($finfo['file_name']);
                    
                    $images[]=array('id' => $i+1 , "name" => $finfo['file_name']);
		 		}
                    }
               
                
		 		
                }
                
                
                    $this->homes_model->update_home($images);
				    $this->session->set_flashdata('msg', 'Home Information is updated Successfully!');
				    echo "success";
			}
			
		}
   public function detail($id=NULL){
       $data=array();
       $data['page'] = 'homes';
       $data['home_detail'] = $this->homes_model->get_all_homes($id);
      
       $this->load->view('admin/templates/header', $data);
       $this->load->view('admin/templates/sidebar', $data);
       $this->load->view('admin/homes/detail', $data);
       $this->load->view('admin/templates/footer', $data);
   }
    
     public function delete($id = NULL){
            if($this->homes_model->delete_home($id)){
				$this->session->set_flashdata('msg', 'Home is deleted Successfully!');
				redirect('admin/homes');
			}
     }
    public function delete_home_image($homeid,$imageid){
        if($this->homes_model->delete_home_image($homeid,$imageid)){
            $this->session->set_flashdata('msg', 'Home image is deleted Successfully!');
            redirect('admin/homes/edit/'.$homeid);
        }
    }
     public function createThumbnail($filename)
 		{
 
        	$config['image_library']    = "gd2";      
 			$config['source_image']     = "./uploads/" .$filename;
			$config['new_image']     = "./uploads/thumb/";      
 			$config['create_thumb']     = TRUE;      
 			$config['maintain_ratio']   = TRUE;      
 			$config['width'] = "140";      
 			$config['height'] = "100";
 			$this->load->library('image_lib',$config);
 			if(!$this->image_lib->resize())
 			{
 				echo $this->image_lib->display_errors();
 			}      
 		}
    
    
}
?>