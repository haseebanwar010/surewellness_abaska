<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sections extends CI_Controller {
   
	protected $title = 'Surewellness';

	public function __construct()
        {
                parent::__construct();
				$this->load->library('session');
				$this->load->model('sections_model');
		  }
	
	public function index( $msg = NULL)
	{
        
        $data=array();
        $data['page'] = 'banners';
		if(! $this->session->userdata('validated')){
			redirect('auth');
		}
        else{
            $this->load->view('admin/templates/header', $data);
				$this->load->view('admin/templates/sidebar', $data);
				$this->load->view('admin/banners/index', $data);
				$this->load->view('admin/templates/footer', $data);
        }
				
    }
    public function allsections($sectionid){
        if(! $this->session->userdata('validated')){
			redirect('auth');
		}
        $data=array();
        if($sectionid==1){
            $data['page']="search_section";
        }else{
            $data['page']="provider_section";
        }
        $data['sectionid']=$sectionid;
        $data['sections']=$this->sections_model->get_sections_bysectionid($sectionid);
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/sections/index', $data);
        $this->load->view('admin/templates/footer', $data);
    }
    public function add($sectionid=NULL){
        if(! $this->session->userdata('validated')){
			redirect('auth');
		}
			if($sectionid==1){
            $data['page']="search_section";
        }else{
            $data['page']="provider_section";
        }
        $data['sectionid']=$sectionid;
			$this->load->helper('form');
			$this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Section Title', 'required|min_length[3]');
//            $this->form_validation->set_rules('description', 'Section Description', 'required');
			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar', $data);
				$this->load->view('admin/sections/add', $data);
				$this->load->view('admin/templates/footer');
			}
            else{
			if (empty($_FILES))
			{
				if($url == NULL){
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar', $data);
				$this->load->view('admin/sections/add', $data);
				$this->load->view('admin/templates/footer');
				}else{
						echo validation_errors();
				}
					
			}
			else
			{
                
				$new_name = time().$_FILES["image"]['name'];
				$config['file_name'] = $new_name;
				$config['upload_path']   =   "./uploads/";
 				$config['allowed_types'] =   "gif|jpg|jpeg|png"; 
		 		//$config['max_size']      =   "5000";
		 		//$config['max_width']     =   "2000";
		 		//$config['max_height']    =   "1280";
		 		$this->load->library('upload',$config);
                
		 		if(!$this->upload->do_upload('image'))
		 		{
                    $this->session->set_flashdata('error_msg',$this->upload->display_errors());
                    redirect('admin/sections/allsections/'.$sectionid);
		 		}
		 		else
		 		{
		 			$finfo=$this->upload->data();
		 			$this->createThumbnail($finfo['file_name']);
					$this->sections_model->set_section($finfo['file_name']);
                    $this->session->set_flashdata('msg', 'Section Added Successfully!');
                    redirect('admin/sections/allsections/'.$sectionid);
		 		}
				
				
			}
        }
			
		}
    public function edit($id = NULL,$sectionid = NULL){
			$user = $this->session->get_userdata();
			if($sectionid==1){
            $data['page']="search_section";
        }else{
            $data['page']="provider_section";
        }
        $data['sectionid']=$sectionid;
        $data['section'] = $this->sections_model->get_sections($id);
			$image ='';
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('title', 'Section Title', 'required|min_length[3]');
//            $this->form_validation->set_rules('description', 'Section Description', 'required');
			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar', $data);
				$this->load->view('admin/sections/edit', $data);
				$this->load->view('admin/templates/footer');
			}
            else{
			
				if(isset($_FILES['image']) && $_FILES['image']['tmp_name']!='')
				{
					$new_name = time().$_FILES["image"]['name'];
					$config['file_name'] = $new_name;
					$config['upload_path']   =   "./uploads/";
					$config['allowed_types'] =   "gif|jpg|jpeg|png"; 
//					$config['max_size']      =   "5000";
//					$config['max_width']     =   "1907";
//					$config['max_height']    =   "1280";
					$this->load->library('upload',$config);
					if(!$this->upload->do_upload('image'))
					{
						$this->session->set_flashdata('error_msg',$this->upload->display_errors());
						redirect('admin/sections/allsections/'.$sectionid);
					}
					else
					{
						$finfo=$this->upload->data();
						$this->createThumbnail($finfo['file_name']);
						$image = $finfo['file_name'];
					}
				}
                if($image != ""){
                    $this->sections_model->update_section($image);
				$this->session->set_flashdata('msg', 'Section Information is updated Successfully!');
                }
				else{
					$this->sections_model->update_section($image);
					$this->session->set_flashdata('msg', 'Section Information is updated Successfully!');
				}
				
				redirect('admin/sections/allsections/'.$sectionid);
			}
			
            
			
			
		}
    //@unlink("./assets/uploads/news/images/$file_name");
    public function delete($id = NULL,$sectionid=NULL){
			$user = $this->session->get_userdata();
        $banner=$this->sections_model->getbannername($id);
        $bannername=$banner[0]['image'];
        
			if($this->sections_model->delete_section($id)){
                @unlink("./uploads/$bannername");
                @unlink("./uploads/thumb/$bannername");
				$this->session->set_flashdata('msg', 'Section is deleted Successfully!');
				redirect('admin/sections/allsections/'.$sectionid);
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