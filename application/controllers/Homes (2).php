<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homes extends CI_Controller {

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
		$this->load->model('homes_model');
		$this->load->model('jobseaker_model');
	}



	public function index()
	{
        
		
	}
    public function all_homes($page=0){
        $data=array();
          $this->load->library('pagination');
        $data['states']=$this->jobseaker_model->get_states();
        if($this->input->post('state') && $this->input->post('state')!=""){
            $data['cities']=$this->jobseaker_model->get_cites_bystateid($this->input->post('state'));
        }
        $config['base_url'] = base_url().'homes/all_homes';
        $config['uri_segment'] = 3;
        $config['prev_tag_open'] = '<li><span aria-hidden="true">';
        $config['prev_tag_close'] = '</span></li>';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li><span aria-hidden="true">';
        $config['num_tag_close'] = '</span></li>';
        $config['next_tag_open'] = '<li><span aria-hidden="true">';
        $config['next_tag_close'] = '</span></li>';
        $config['last_link'] = False;
        $config['first_link'] = False;
        $config['total_rows'] = count($this->homes_model->get_all_homes());
        $config['per_page'] = 8;
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['homes'] = $this->homes_model->getAllHomes($config['per_page'],$page);
		
        $this->load->view('frontend/templates/header_links', $data);
        if(isset($_SESSION['section_id']) && $_SESSION['section_id']==1){
            $this->load->view('frontend/templates/header1', $data);
        }
		else{
            $this->load->view('frontend/templates/header2', $data);
        }
		$this->load->view('frontend/homes', $data);
        $this->load->view('frontend/templates/footer', $data);
		$this->load->view('frontend/templates/footer_links', $data);
    }
    public function home_detail($homeid,$page=0){
        $data=array();
        $data['states']=$this->jobseaker_model->get_states();
          $this->load->library('pagination');

        $config['base_url'] = base_url().'homes/home_detail/'.$homeid;
        $config['uri_segment'] = 4;
        $config['prev_tag_open'] = '<li><span aria-hidden="true">';
        $config['prev_tag_close'] = '</span></li>';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li><span aria-hidden="true">';
        $config['num_tag_close'] = '</span></li>';
        $config['next_tag_open'] = '<li><span aria-hidden="true">';
        $config['next_tag_close'] = '</span></li>';
        $config['last_link'] = False;
        $config['first_link'] = False;
        $config['total_rows'] = count($this->homes_model->get_all_homes());
        $config['per_page'] = 8;
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['homes'] = $this->homes_model->getAllHomes($config['per_page'],$page);
        $data['home_detail'] = $this->homes_model->get_all_homes($homeid);
		$data['home_videos']=$this->homes_model->get_all_home_videos($homeid);
        
        $this->load->view('frontend/templates/header_links', $data);
        if(isset($_SESSION['section_id']) && $_SESSION['section_id']==1){
            $this->load->view('frontend/templates/header1', $data);
        }
		else{
            $this->load->view('frontend/templates/header2', $data);
        }
		$this->load->view('frontend/home_detail', $data);
        $this->load->view('frontend/templates/footer', $data);
		$this->load->view('frontend/templates/footer_links', $data);
    }
    
}
