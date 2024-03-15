<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Showalljobs extends CI_Controller{

function __construct(){
parent:: __construct();
    $this->load->model('admin/showalljob');
}
    
public function index(){
    $result['result']=$this->showalljob->alljobs();
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/showalljob',$result);
    $this->load->view('admin/template/footer');
    
}    
 
    
    public function delete($id){
    $result=$this->showalljob->delete($id);
    if($result==1)
    {    
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    redirect('admin/showalljobs');
    $this->load->view('admin/template/footer');  
    }
    else{
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    redirect('admin/showalljobs');
    $this->load->view('admin/template/footer');            
        }
    }
    
    public function details($id){
    $result['result']=$this->showalljob->detials($id);
    $result['users']=$this->showalljob->users($id);
        
//        echo'<pre>';
//        print_r($result['users']);
//        exit();
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/showjobdetails',$result);
    $this->load->view('admin/template/footer');
    }
    
    public function seekerdetail($id)//bandy ki id hy ye job seeker
    {
    $result['result']=$this->showalljob->seeker($id);   
    $result['job']=$this->showalljob->seekerjobdetail($id); 
        
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/showseekerdetails',$result);
    $this->load->view('admin/template/footer');
        
    }
    
    
    
    
    public function edit($id){
    $result['result']=$this->showalljob->getjob($id);
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/editjob',$result);
    $this->load->view('admin/template/footer');
    }
    
    
    public function update(){

        if(!empty($_FILES['document']['name']) && !empty($_POST['description'])){
                $new_name = time().$_FILES['document']['name'];
                $config['upload_path'] = './uploads';
                $config['allowed_types'] = 'pdf';
                $config['file_name'] = $new_name;
				
				$this->load->library('upload',$config);
                $this->upload->initialize($config);
				
				if($this->upload->do_upload('document')){
                    $uploadData = $this->upload->data();
                    $doc = $uploadData['file_name'];
                    $userData = array(
                    'title' => $this->input->post('title'),
                    'pay' => $this->input->post('pay'),
                    'location' => $this->input->post('location'),
                    'document' => $doc,
                    'description' => $this->input->post('description'),
                    'functional_area' => $this->input->post('functional_area'),
                    'job_shift' => $this->input->post('job_shift'),
                    'job_type' => $this->input->post('job_type'),
                    'positions' => $this->input->post('position')
                    );
                    $this->showalljob->update($userData);
                    redirect('admin/showalljobs');

                }else{
                 echo $this->upload->display_errors();
                    exit;
                }           
        }
        elseif(!empty($_FILES['document']['name'])){
            
                $new_name = time().$_FILES['document']['name'];
                $config['upload_path'] = './uploads';
                $config['allowed_types'] = 'pdf';
                $config['file_name'] = $new_name;
				
				$this->load->library('upload',$config);
                $this->upload->initialize($config);
				
				if($this->upload->do_upload('document')){
                    $uploadData = $this->upload->data();
                    $doc = $uploadData['file_name'];
                    $this->createThumbnail($doc);
                    $userData = array(
                    'title' => $this->input->post('title'),
                    'pay' => $this->input->post('pay'),
                    'location' => $this->input->post('location'),
                    'document' => $doc,
                    'functional_area' => $this->input->post('functional_area'),
                    'job_shift' => $this->input->post('job_shift'),
                    'job_type' => $this->input->post('job_type'),
                    'positions' => $this->input->post('position')
                    );
          
                    $this->showalljob->update1($userData);
                    redirect('admin/showalljobs');

                }else{
                 echo $this->upload->display_errors();
                    exit;
                }
        }
        elseif(!empty($_POST['description'])){
                    $userData = array(
                    'title' => $this->input->post('title'),
                    'pay' => $this->input->post('pay'),
                    'location' => $this->input->post('location'),
                    'description' => $this->input->post('description'),
                    'functional_area' => $this->input->post('functional_area'),
                    'job_shift' => $this->input->post('job_shift'),
                    'job_type' => $this->input->post('job_type'),
                    'positions' => $this->input->post('position')
                    );
                    $this->showalljob->update2($userData);
                    redirect('admin/showalljobs');
            
        }

        else{
            redirect('admin/showalljobs');
        }

    }//update
    

    

    
    
    
    
    
}
?>