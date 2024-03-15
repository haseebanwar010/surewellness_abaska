<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_seaker extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Jobseaker_model');
	}



	public function index()
	{
        
		$data=array();
		$data['testimonials']=$this->testimonials_model->get_testimonials();
		if(isset($_SESSION['section_id'])){
            $data['sectionid']=$_SESSION['section_id'];
        }
		$this->load->view('frontend/templates/header_links', $data);
        if(isset($_SESSION['section_id']) && $_SESSION['section_id']==1){
            $this->load->view('frontend/templates/header1', $data);
        }
		else{
            $this->load->view('frontend/templates/header2', $data);
        }
		$this->load->view('frontend/testimonials', $data);
        $this->load->view('frontend/templates/footer', $data);
		$this->load->view('frontend/templates/footer_links', $data);
	}
    public function register(){
        $data=array();
        $data['states']=$this->Jobseaker_model->get_states();
        
        if(isset($_SESSION['section_id'])){
            $data['sectionid']=$_SESSION['section_id'];
        }
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('first_name', 'First Name', 'required|min_length[3]');
        $this->form_validation->set_rules('middle_name', 'Middle Name', 'required|min_length[3]');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required|min_length[3]');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('state', 'State', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('ssn', 'Social Security Number', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('home_phone', 'Home Phone', 'required');
        $this->form_validation->set_rules('cell_phone', 'Cell Phone', 'required');
        $this->form_validation->set_rules('work_phone', 'Work Phone', 'required');
        $this->form_validation->set_rules('emergency_contact', 'Emergency Contact', 'required');
        $this->form_validation->set_rules('age_question', 'Are You 18 Years Of Age', 'required');
        $this->form_validation->set_rules('currently_employed', 'Are you currently employed', 'required');
        $this->form_validation->set_rules('contact_employer', 'May we contact your employer', 'required');
        $this->form_validation->set_rules('graduate', 'Graduate', 'required');
        $this->form_validation->set_rules('applied_licences', 'Applied Licenses', 'required');
        $this->form_validation->set_rules('notices', 'Notices', 'required');
        $this->form_validation->set_rules('any_crime', 'Any Crime', 'required');
        $this->form_validation->set_rules('criminal_trial', 'Criminal Trial', 'required');
        $this->form_validation->set_rules('violence', 'Violence', 'required');
        $this->form_validation->set_rules('agrred_terms', 'Agreed Terms of Services', 'required');
        
        
        
//        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
//        $this->form_validation->set_rules('gender', 'Gender', 'required');
//        $this->form_validation->set_rules('dob', 'Date Of Birth', 'required');
//        $this->form_validation->set_rules('cnic', 'CNIC', 'required');
//        $this->form_validation->set_rules('degree_level', 'Degree Level', 'required');
//        $this->form_validation->set_rules('institute', 'Institute', 'required');
//        $this->form_validation->set_rules('functional_area', 'Functional Area', 'required');
//        $this->form_validation->set_rules('career_level', 'Career Level', 'required');
//        $this->form_validation->set_rules('job_title', 'Job title', 'required');
//        $this->form_validation->set_rules('company', 'Company', 'required');
        
        if ($this->form_validation->run() === FALSE){
            $this->load->view('frontend/templates/header_links', $data);
        if(isset($_SESSION['section_id']) && $_SESSION['section_id']==1){
            $this->load->view('frontend/templates/header1', $data);
        }
		else{
            $this->load->view('frontend/templates/header2', $data);
        }
		$this->load->view('frontend/jobseaker_registration', $data);
        $this->load->view('frontend/templates/footer', $data);
		$this->load->view('frontend/templates/footer_links', $data);
        }
        else{
            $cv="";
            $document="";
            if(isset($_FILES['cv']) && $_FILES['cv']['name']!=""){
                    $new_name = time().$_FILES["cv"]['name'];
				$config['file_name'] = $new_name;
				$config['upload_path']   =   "./uploads/";
 				$config['allowed_types'] =   "*"; 
		 		$this->load->library('upload',$config);
                
		 		if(!$this->upload->do_upload('cv'))
		 		{
                    $this->session->set_flashdata('error_msg',$this->upload->display_errors());
                    redirect('job_seaker/register');
		 		}
		 		else
		 		{
		 			$finfo=$this->upload->data();
		 			$cv=$finfo['file_name'];
		 		}
                }
            if(isset($_FILES['document']) && $_FILES['document']['name']!=""){
                    $new_name = time().$_FILES["document"]['name'];
				$config['file_name'] = $new_name;
				$config['upload_path']   =   "./uploads/";
 				$config['allowed_types'] =   "gif|jpg|jpeg|png"; 
		 		$this->load->library('upload',$config);
                
		 		if(!$this->upload->do_upload('document'))
		 		{
                    $this->session->set_flashdata('error_msg',$this->upload->display_errors());
                    redirect('job_seaker/register');
		 		}
		 		else
		 		{
		 			$finfo=$this->upload->data();
                    $document=$finfo['file_name'];
		 		}
                }
            $this->Jobseaker_model->set_jobseaker($cv,$document);
				$this->session->set_flashdata('msg', 'Job Seeker Added Successfully!');
				redirect('job_seaker/register');	
        }
        
    }
    public function login(){
        $data=array();
        $authenticate_jobseaker=$this->Jobseaker_model->authenticate_jobseaker();
        
        if(empty($authenticate_jobseaker)){
            $this->session->set_flashdata('login_error_msg',"Invalid username or password!");
            if($this->input->post('redirect')){
                redirect($this->input->post('redirect'));
            }
            else{
                redirect('careers');
            }
            
        }
        else{
            $_SESSION['jobseaker']=$authenticate_jobseaker;
            
            if($this->input->post('redirect')){
                redirect($this->input->post('redirect'));
            }
            else{
                redirect('careers');
            }
        }
    }
    public function forgot_password(){
        $data=array();
        $authenticate_jobseaker=$this->Jobseaker_model->authenticate_jobseaker_email();
        
        if(empty($authenticate_jobseaker)){
            $this->session->set_flashdata('forgot_error_msg',"Email doesn't exists!");
            if($this->input->post('redirect')){
                redirect($this->input->post('redirect'));
            }
            else{
                redirect('careers');
            }
        }
        else{
            
            $chars = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N",
                       "O","P","Q","R","S","T","U","V","W","X","Y","Z","1","2","3",
                       "4","5","6","7","8","9","0");
            $length=6;
            $max_chars = count($chars) - 1;
            srand((double)microtime()*1000000);
            $randChars='';
            for ($i = 0; $i < $length; $i++) {
                $randChars .= ($i == 0) ? $chars[rand(0, $max_chars)] :$chars[rand(0, $max_chars)];
            }
            if($this->Jobseaker_model->update_jobseaker_password($randChars,$authenticate_jobseaker['id'])){
                $sitesettings=getsitedata();
                $adminemail=$sitesettings->email;
                $baseurl = $this->config->item('base_url');
                $subject="Password Reset";
                $message="<table cellpadding='0' width='100%' cellspacing='0' border='0' id='backgroundTable' class='bgBody'>
		<tr>
			<td>
				<table cellpadding='0' cellspacing='0' border='0' align='center' width='100%' style='border-collapse:collapse;'>
					<tr>
						<td class='movableContentContainer'>
							
							<div class='movableContent'>
								<table cellpadding='0' cellspacing='0' border='0' align='center' width='600'>
									<tr height='40'>
										<td width='200'>&nbsp;</td>
										<td width='200'>&nbsp;</td>
										<td width='200'>&nbsp;</td>
									</tr>
									<tr>
										<td width='200' valign='top'>&nbsp;</td>
										<td width='200' valign='top' align='center'>
											<div class='contentEditableContainer contentTextEditable'>
												<div class='contentEditable' >";
													$message.="<img src='";
                                                        $message.=$baseurl."assets/frontend/images/logo.png";
                                                        $message.="' width='250' alt='Logo'  data-default='placeholder' />";
												$message.="</div>
											</div>
										</td>
										<td width='200' valign='top'>&nbsp;</td>
									</tr>
									<tr height='25'>
										<td width='200'>&nbsp;</td>
										<td width='200'>&nbsp;</td>
										<td width='200'>&nbsp;</td>
									</tr>
								</table>
							</div>

							<div class='movableContent'>
								<table cellpadding='0' cellspacing='0' border='0' align='center' width='600'>
									<tr>
										<td width='100%' colspan='3' align='center' style='padding-bottom:10px;padding-top:25px;'>
											<div class='contentEditableContainer contentTextEditable'>
												<div class='contentEditable' >
													<h2 style='font-family: verdana;'>Password Reset</h2>
												</div>
											</div>
										</td>
									</tr>
                                    <tr>
										<td width='100'>&nbsp;</td>
										<td width='400' align='center' style='padding-bottom:5px;'>
											<div class='contentEditableContainer contentTextEditable'>
												<div class='contentEditable' >
                                                <span style='font-family: verdana;'>Dear, User</span>
                                                    <h4 style='border-top: 1px solid #eee; font-family: verdana; text-align: left; padding-top: 20px;'>Login details</h4>
                                                    <p style='text-align: left; font-family: verdana;'>Email : ".$authenticate_jobseaker['email']."</p>
                                                    <p style='text-align: left; font-family: verdana;'>Password : ".$randChars."</p>
                                                    
												</div>
											</div>
										</td>
										<td width='100'>&nbsp;</td>
									</tr>
								</table>
							</div>
							<div class='movableContent'>
								<table cellpadding='0' cellspacing='0' border='0' align='center' width='600'>
									<tr>
										<td width='100%' colspan='2' style='padding-top:65px;'>
											<hr style='height:1px;border:none;color:#333;background-color:#ddd;' />
										</td>
									</tr>
									</table></div></td></tr></table></td></tr></table>";
                
            send_email_custom($authenticate_jobseaker['email'], $adminemail, $subject, $message);
            $this->session->set_flashdata('msg', 'New password is send on your email address!');
                if($this->input->post('redirect')){
                    redirect($this->input->post('redirect'));
                }
                else{
                    redirect('careers');
                }
            }
            
        }
    }
    public function logout(){
        $_SESSION['jobseaker']=array();
        redirect('careers');
    }
    public function get_cities(){
        $state_id=$this->input->post('state_id');
        $cities=$this->Jobseaker_model->get_ajax_cities($state_id);
        echo json_encode($cities);
    }
}
