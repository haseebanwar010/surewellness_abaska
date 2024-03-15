<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appservices extends CI_Controller{

function __construct(){
parent:: __construct();
}
  
    public function index(){
    $this->load->view('frontend/surewellnes');
    }


public function login(){
    $data=json_decode(file_get_contents("php://input"));

        $this->load->model('admin/Showalljob');
        $result=$this->Showalljob->login($data);
        echo json_encode($result);

}


public function imagesetting(){
        $dataget=json_decode(file_get_contents("php://input"));
        $this->load->model('admin/Showalljob');
        $result=$this->Showalljob->imagesettings($dataget);
        echo json_encode($result);

}


    public function get_banners(){
        $this->load->model('admin/showbanners');
        $result=$this->showbanners->allbanners();
        echo json_encode($result);
    }

    public function get_Jobs(){
    	$this->load->model('admin/showalljob');
    	$result=$this->showalljob->alljobs();
    	echo json_encode($result);
    }

    public function editdetails($uid=null){
        $dataget=json_decode(file_get_contents("php://input"));
        $this->load->model('admin/Showalljob');
        $result=$this->Showalljob->editdetials($dataget->uid);
        echo json_encode($result);
    }

//         public function details($id=null){
//         $dataget=json_decode(file_get_contents("php://input"));
//         $this->load->model('admin/showalljob');
//         $result=$this->showalljob->detials($dataget->id);
//         echo json_encode($result);
// }

        public function details($id=null){
        $dataget=json_decode(file_get_contents("php://input"));
        $this->load->model('admin/showalljob');
        $result=$this->showalljob->detials($dataget->id);
        echo json_encode($result);
        }

public function register(){

        $dataget=json_decode(file_get_contents("php://input"));
         // echo json_encode($dataget);
        // exit();

// $response=array();

// echo json_encode($data);
// exit();
                // $data = array(
                //     'name' => $dataget->name,
                //     'email' => $dataget->email,
                //     'password' => $dataget->password,
                //     'address' => $dataget->address,
                //     'mobile' => $dataget->mobile
                //     );

$data=array();
$data['name']=$dataget->name;
$data['email']=$dataget->email;
$data['password']=$dataget->password;
$data['address']=$dataget->address;
$data['mobile']=$dataget->mobile;  

        $this->load->model('admin/Showalljob');
        $record=$this->Showalljob->mblregister($data);
        // if($this->showalljob->mblregister($data)){
        // 	$response['response']="success";
        // }
        // else{
        // 	$response['response']="failed";
        // }

         echo json_encode($record);
                


}
    
    
}
?>