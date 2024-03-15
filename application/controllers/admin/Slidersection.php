<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slidersection extends CI_Controller {
   
	protected $title = 'Surewellness';

	public function __construct()
        {
                parent::__construct();
				$this->load->library('session');
				$this->load->model('slidersection_model');
		  }
	
	public function index( $msg = NULL)
	{
        
				
    }
    
    public function edit($id = NULL){
			$user = $this->session->get_userdata();
        if($id==1){
            $data['page'] = 'searchslidersection';
        }
        else{
            $data['page'] = 'providerslidersection';
        }
			
        
        $data['slidersection'] = $this->slidersection_model->get_slidersections($id);
			
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('video', 'Section Type', 'required');
			$this->form_validation->set_rules('title', 'Section Type', 'required');
			$this->form_validation->set_rules('sub_title', 'Section Type', 'required');
			$this->form_validation->set_rules('description', 'Section Type', 'required');
        if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar', $data);
				$this->load->view('admin/slidersection/edit', $data);
				$this->load->view('admin/templates/footer');
			}
        else{
            $this->slidersection_model->update_slidersection();
            $this->session->set_flashdata('msg', 'Information is updated Successfully!');
            redirect('admin/slidersection/edit/'.$id);
        }
			
			
		}
    //@unlink("./assets/uploads/news/images/$file_name");
    public function delete($id = NULL){
			$user = $this->session->get_userdata();
        $banner=$this->banners_model->getbannername($id);
        $bannername=$banner[0]['image'];
        
			if($this->banners_model->delete_banner($id)){
                @unlink("./uploads/$bannername");
                @unlink("./uploads/thumb/$bannername");
				$this->session->set_flashdata('msg', 'Banner is deleted Successfully!');
				redirect('admin/banners');
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