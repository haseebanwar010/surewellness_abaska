<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Showallbanners extends CI_Controller{

function __construct(){
parent:: __construct();
    $this->load->model('admin/showbanners');
}
    
public function index(){

$result['result']=$this->showbanners->allbanners();
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/showallbanners',$result);
    $this->load->view('admin/template/footer');
        
}
    
    public function edit($id){
    $result['result']=$this->showbanners->getbanner($id);
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/editbanner',$result);
    $this->load->view('admin/template/footer');
    }
    
    
    public function update(){

        if(!empty($_FILES['image']['name']) && !empty($_POST['cetagory'])){
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
                    'section_Id' => $this->input->post('cetagory'),
                    'image' => $picture
                    );
                    $this->showbanners->updatebanner($userData);
                    redirect('admin/showallbanners');

                }else{
                 echo $this->upload->display_errors();
                    exit;
                }           
        }
        elseif(!empty($_FILES['image']['name'])){
            
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
                    'image' => $picture
                    );
          
                    $this->showbanners->updatebanner1($userData);
                    redirect('admin/showallbanners');

                }else{
                 echo $this->upload->display_errors();
                    exit;
                }
        }
        elseif(!empty($_POST['cetagory'])){
                    $userData = array(
                    'section_Id' => $this->input->post('cetagory')
                    );
                    $this->showbanners->updatebanner2($userData);
                    redirect('admin/showallbanners');
            
        }

        else{
            redirect('admin/showallbanners');
        }

    }//update
    
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
    
    
    public function delete($id){
    
    $result=$this->showbanners->delete($id);
    if($result==1)
    {    
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    redirect('admin/showallbanners');
    $this->load->view('admin/template/footer');  
    }
    else{
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    redirect('admin/showallbanners');
    $this->load->view('admin/template/footer');            
        }
      
    }
    
}
?>