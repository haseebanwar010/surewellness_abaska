<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller{

function __construct(){
parent:: __construct();
    $this->load->model('admin/service');
}
    
public function index(){
    $this->load->helper('form');
	$this->load->library('form_validation');
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/service');
    $this->load->view('admin/template/footer');
    
}
    
    public function add(){
            $this->load->helper('form');
			$this->load->library('form_validation');
            $this->form_validation->set_rules('description', 'Description', 'required');
        
          if($this->form_validation->run()==TRUE)
          {

                $new_name = time().$_FILES['image']['name'];
                $config['upload_path'] = './uploads';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $new_name;
				
				$this->load->library('upload',$config);
                $this->upload->initialize($config);
				
				if($this->upload->do_upload('image')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                    $this->createThumbnail($picture);
                    $userData = array(
                    'title' => $this->input->post('title'),
                    'image' => $picture,
                    'description' => $this->input->post('description')
                    
                    );
          

                    $this->service->add($userData);
                    redirect('admin/showallservices');

                }else{
                 echo $this->upload->display_errors();
                    exit;
                }
          }
    else{
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/service');
    $this->load->view('admin/template/footer');
    }
        
    }
    
   public function createThumbnail($filename){
       
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