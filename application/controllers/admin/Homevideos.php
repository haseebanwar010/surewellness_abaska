<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homevideos extends CI_Controller {
   
	protected $title = 'Surewellness';

	public function __construct()
        {
                parent::__construct();
				$this->load->library('session');
				$this->load->model('homevideos_model');
		  }
	
	public function index( $msg = NULL)
	{
        $data=array();
        $data['page'] = 'homevideos';
		$data['videos'] = $this->homevideos_model->get_all_videos();
		if(! $this->session->userdata('validated')){
			redirect('auth');
		}
        else{
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/homevideos/index', $data);
            $this->load->view('admin/templates/footer', $data);
        }
				
    }
    
    public function add($url = NULL){
        if(! $this->session->userdata('validated')){
			redirect('auth');
		}
			$data['page'] = 'addhomevideo';
			$data['homes'] = $this->homevideos_model->get_all_homes();
			//$data['config'] = $this->config_model->get_config(1);
			$this->load->helper('form');
			$this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Video Title', 'required');
            $this->form_validation->set_rules('home_id', 'Home', 'required');
			$VideoData= array();
			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar', $data);
				$this->load->view('admin/homevideos/add', $data);
				$this->load->view('admin/templates/footer');
			}
        else{
			if (empty($_FILES))
			{
				if($url == NULL){
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar', $data);
				$this->load->view('admin/homevideos/add', $data);
				$this->load->view('admin/templates/footer');
				}else{
						echo validation_errors();
				}
					
			}
			else
			{
                
				$new_name = time().$_FILES["video"]['name'];
				$config['file_name'] = $new_name;
				$config['upload_path']   =   "./uploads/";
 				$config['allowed_types'] =   "*"; 
		 		//$config['max_size']      =   "5000";
		 		//$config['max_width']     =   "2000";
		 		//$config['max_height']    =   "1280";
		 		$this->load->library('upload',$config);
                
		 		if(!$this->upload->do_upload('video'))
		 		{
                    $this->session->set_flashdata('error_msg',$this->upload->display_errors());
                    redirect('admin/homevideos');
		 		}
		 		else
		 		{
		 			$finfo=$this->upload->data();
//		 			$this->createThumbnail($finfo['file_name']);
					$this->homevideos_model->set_homevideo($finfo['file_name']);
                    $this->session->set_flashdata('msg', 'Home video Added Successfully!');
                    redirect('admin/homevideos');
		 		}
				
				
			}
        }
			
		}
    public function edit($id = NULL){
			$user = $this->session->get_userdata();
			$data['page'] = 'edithomevideo';
        
        $data['video'] = $this->homevideos_model->get_all_videos($id);
        $data['homes'] = $this->homevideos_model->get_all_homes();
			$image ='';
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('title', 'Video Title', 'required');
            $this->form_validation->set_rules('home_id', 'Home', 'required');
        if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar', $data);
				$this->load->view('admin/homevideos/edit', $data);
				$this->load->view('admin/templates/footer');
			}
        else{
			if (empty($_FILES))
			{
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar', $data);
				$this->load->view('admin/homevideos/edit', $data);
				$this->load->view('admin/templates/footer');
			}
			else
			{
				if($_FILES['video']['tmp_name']!='')
				{
					$new_name = time().$_FILES["video"]['video'];
					$config['file_name'] = $new_name;
					$config['upload_path']   =   "./uploads/";
					$config['allowed_types'] =   "*"; 
//					$config['max_size']      =   "5000";
//					$config['max_width']     =   "1907";
//					$config['max_height']    =   "1280";
					$this->load->library('upload',$config);
					if(!$this->upload->do_upload('video'))
					{
						$this->session->set_flashdata('error_msg',$this->upload->display_errors());
						redirect('admin/homevideos');
					}
					else
					{
						$finfo=$this->upload->data();
						$image = $finfo['file_name'];
					}
				}
                if($image != ""){
                    $this->homevideos_model->update_video($image);
				$this->session->set_flashdata('msg', 'Video Information is updated Successfully!');
                }
				else{
					$this->homevideos_model->update_video($image);
					$this->session->set_flashdata('msg', 'Video Information is updated Successfully!');
				}
				
				redirect('admin/homevideos');
			}
			
        }
			
			
		}
    //@unlink("./assets/uploads/news/images/$file_name");
    public function delete($id = NULL){
			$user = $this->session->get_userdata();
        $banner=$this->homevideos_model->getbannername($id);
        $bannername=$banner[0]['video'];
        
			if($this->homevideos_model->delete_video($id)){
                @unlink("./uploads/$bannername");
				$this->session->set_flashdata('msg', 'Video is deleted Successfully!');
				redirect('admin/homevideos');
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