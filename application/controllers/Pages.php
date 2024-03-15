<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

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
		$this->load->model('home_model');
		$this->load->model('pages_model');
	}



	public function index()
	{
        
		$data=array();
		$data['banners']=$this->home_model->get_banners();
		
        //$data['allneedypersons']=$this->home_model->get_all_needypersons();
        
		$this->load->view('frontend/templates/header_links', $data);
		$this->load->view('frontend/templates/header1', $data);
		$this->load->view('frontend/home', $data);
		$this->load->view('frontend/templates/footer_links', $data);
	}
    public function aboutus(){
       $data=array();
        $data['who_we_are']=$this->pages_model->get_pages(1);
        $data['what_we_do']=$this->pages_model->get_pages(2);
        $data['getting_started']=$this->pages_model->get_pages(3);
        $data['privacy_policy']=$this->pages_model->get_pages(4);
        
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
		$this->load->view('frontend/aboutus', $data);
        $this->load->view('frontend/templates/footer', $data);
		$this->load->view('frontend/templates/footer_links', $data);
    }
    public function management(){
        $data=array();
        $data['management']=$this->pages_model->get_pages(6);
        $data['page']="page_management";
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
		$this->load->view('frontend/management', $data);
        $this->load->view('frontend/templates/footer', $data);
		$this->load->view('frontend/templates/footer_links', $data);
    }
    public function consulting(){
        $data=array();
        $data['consulting']=$this->pages_model->get_pages(7);
        $data['page']="page_consulting";
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
		$this->load->view('frontend/consulting', $data);
        $this->load->view('frontend/templates/footer', $data);
		$this->load->view('frontend/templates/footer_links', $data);
    }
    public function staffing(){
        $data=array();
        $data['staffing']=$this->pages_model->get_pages(8);
        $data['page']="page_staffing";
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
		$this->load->view('frontend/staffing', $data);
        $this->load->view('frontend/templates/footer', $data);
		$this->load->view('frontend/templates/footer_links', $data);
    }
    public function contactus(){
        $data=array();
        $baseurl = $this->config->item('base_url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required|min_length[3]');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');
        $sitesettings=getsitedata();
        $adminemail=$sitesettings->email;
        $subject=$this->input->post('subject');
        if ($this->form_validation->run() === FALSE){
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
		$this->load->view('frontend/contactus', $data);
        $this->load->view('frontend/templates/footer', $data);
		$this->load->view('frontend/templates/footer_links', $data);
        }
        else{
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
													<h2 style='font-family: verdana;'>Contact us</h2>
												</div>
											</div>
										</td>
									</tr>
                                    <tr>
										<td width='100'>&nbsp;</td>
										<td width='400' align='center' style='padding-bottom:5px;'>
											<div class='contentEditableContainer contentTextEditable'>
												<div class='contentEditable' >
                                                <span style='font-family: verdana;'>Dear, Admin</span>
													<p style='font-family: verdana;'>We have recieved a contact us email from user.</p>
                                                    <h4 style='border-top: 1px solid #eee; font-family: verdana; text-align: left; padding-top: 20px;'>Customer detail</h4>
                                                    <p style='text-align: left; font-family: verdana;'>Name : ".$this->input->post('name')."</p>
                                                    <p style='text-align: left; font-family: verdana;'>Email : ".$this->input->post('email')."</p>
                                                    <p style='text-align: left; font-family: verdana;'>Phone : ".$this->input->post('phone')."</p>
                                                    <p style='text-align: left; font-family: verdana;'>Description : ".$this->input->post('message')."</p>
                                                    
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
            send_email_custom($adminemail, $this->input->post('email'), $subject, $message);
            $this->session->set_flashdata('msg', 'Your email has been sent to the admin successfully!');
            redirect('pages/contactus');
        }
    }
}
