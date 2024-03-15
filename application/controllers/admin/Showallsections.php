<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Showallsections extends CI_Controller{

function __construct(){
parent:: __construct();
    $this->load->model('admin/showallsection');
}
  
public function index(){
$result['result']=$this->showallsection->allsections();
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/showallsection',$result);
    $this->load->view('admin/template/footer');  
}
    
    public function delete($id){
    $result=$this->showallsection->delete($id);
    if($result==1)
    {    
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    redirect('admin/showallsections');
    $this->load->view('admin/template/footer');  
    }
    else{
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    redirect('admin/showallsections');
    $this->load->view('admin/template/footer');            
        }
    }
    
    public function edit($id){
    $result['result']=$this->showallsection->getsection($id);
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/editsection',$result);
    $this->load->view('admin/template/footer');
    }
    
    
    public function update(){

        if(!empty($_FILES['image']['name']) && !empty($_POST['description'])){
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
                    'section_id' => $this->input->post('cetagory'),
                    'title' => $this->input->post('title'),
                    'image' => $picture,
                    'description' => $this->input->post('description')
                    );
                    $this->showallsection->update($userData);
                    redirect('admin/showallsections');

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
                    'section_id' => $this->input->post('cetagory'),
                    'title' => $this->input->post('title'),
                    'image' => $picture
                    );
          
                    $this->showallsection->update1($userData);
                    redirect('admin/showallsections');

                }else{
                 echo $this->upload->display_errors();
                    exit;
                }
        }
        elseif(!empty($_POST['description'])){
                    $userData = array(
                    'section_id' => $this->input->post('cetagory'),
                    'title' => $this->input->post('title'),
                    'description' => $this->input->post('description')
                    );
                    $this->showallsection->update2($userData);
                    redirect('admin/showallsections');
            
        }

        else{
            redirect('admin/showallsections');
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
    
    
}
?>