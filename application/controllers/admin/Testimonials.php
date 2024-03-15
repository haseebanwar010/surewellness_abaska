<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonials extends CI_Controller {
   
	protected $title = 'Surewellness';

	public function __construct()
        {
                parent::__construct();
				$this->load->library('session');
				$this->load->model('testimonials_model');
		  }
	
	public function index( $msg = NULL)
	{
        $data=array();
        $data['page'] = 'testimonials';
		$data['testimonials'] = $this->testimonials_model->get_testimonials();
		if(! $this->session->userdata('validated')){
			redirect('auth');
		}
        else{
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/testimonials/index', $data);
            $this->load->view('admin/templates/footer', $data);
        }
				
    }
    
    public function add($url = NULL){
        if(! $this->session->userdata('validated')){
			redirect('auth');
		}
        $image="";
			$data['page'] = 'addtestimonial';
			//$data['config'] = $this->config_model->get_config(1);
			$this->load->helper('form');
			$this->load->library('form_validation');
            $this->form_validation->set_rules('name', 'Name', 'required|min_length[3]');
            $this->form_validation->set_rules('description', 'Description', 'required');
			$VideoData= array();
			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar', $data);
				$this->load->view('admin/testimonials/add', $data);
				$this->load->view('admin/templates/footer');
			}
        else{
			
                if(isset($_FILES) && $_FILES['image']['name']!=""){
                    $new_name = time().$_FILES["image"]['name'];
				$config['file_name'] = $new_name;
				$config['upload_path']   =   "./uploads/";
 				$config['allowed_types'] =   "gif|jpg|jpeg|png"; 
		 		$this->load->library('upload',$config);
                
		 		if(!$this->upload->do_upload('image'))
		 		{
                    $this->session->set_flashdata('error_msg',$this->upload->display_errors());
                    redirect('admin/services');
		 		}
		 		else
		 		{
		 			$finfo=$this->upload->data();
		 			$this->createThumbnail($finfo['file_name']);
					$image=$finfo['file_name'];
		 		}
                }
				$this->testimonials_model->set_testimonial($image);
                    $this->session->set_flashdata('msg', 'Testimonial Added Successfully!');
                    redirect('admin/testimonials');
				
        }
			
		}
    public function edit($id = NULL){
        if(! $this->session->userdata('validated')){
			redirect('auth');
		}
			$user = $this->session->get_userdata();
			$data['page'] = 'edittestimonial';
        $image="";
        $data['testimonial'] = $this->testimonials_model->get_testimonials($id);
			$image ='';
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');
        if ($this->form_validation->run() === FALSE){
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar', $data);
				$this->load->view('admin/testimonials/edit', $data);
				$this->load->view('admin/templates/footer');
        }
        else{
			if (empty($_FILES))
			{
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar', $data);
				$this->load->view('admin/testimonials/edit', $data);
				$this->load->view('admin/templates/footer');
			}
			else
			{
				if(isset($_FILES) && $_FILES['image']['name']!=""){
                    $new_name = time().$_FILES["image"]['name'];
				    $config['file_name'] = $new_name;
				    $config['upload_path']   =   "./uploads/";
 				    $config['allowed_types'] =   "gif|jpg|jpeg|png"; 
		 		    $this->load->library('upload',$config);
                
		 		if(!$this->upload->do_upload('image'))
		 		{
                    $this->session->set_flashdata('error_msg',$this->upload->display_errors());
                    redirect('admin/services');
		 		}
		 		else
		 		{
		 			$finfo=$this->upload->data();
		 			$this->createThumbnail($finfo['file_name']);
					$image=$finfo['file_name'];
		 		}
                }
               
                    $this->testimonials_model->update_testimonial($image);
				$this->session->set_flashdata('msg', 'Testimonial Information is updated Successfully!');
                
				
				redirect('admin/testimonials');
			}
			
        }
			
			
		}
    //@unlink("./assets/uploads/news/images/$file_name");
    public function delete($id = NULL){
			$user = $this->session->get_userdata();
        $service=$this->testimonials_model->getbannername($id);
        $bannername=$service[0]['image'];
        $iconname=$service[0]['icon'];
        
			if($this->testimonials_model->delete_testimonial($id)){
                @unlink("./uploads/$bannername");
                @unlink("./uploads/$iconname");
                @unlink("./uploads/thumb/$bannername");
				$this->session->set_flashdata('msg', 'Service is deleted Successfully!');
				redirect('admin/testimonials');
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