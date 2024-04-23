<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class upload extends CI_Controller {

	function __construct()
    {
   	 parent::__construct();
   	 $this->load->helper("url");   //call the form helper
   	 $this->load->helper('form');
  	 $this->load->library('session');
    $this->load->model('ace_model','',TRUE);
    $this->session_data = $this->session->userdata('logged_in');
    if(empty($this->session_data))
    {
       redirect('login');
    }
    }
	public function index()
	{
		$ndata['login']=$this->session_data;
		$data['upload'] = $this->ace_model->get_all_data('upload');
    $this->load->view('common/header',$ndata);
    $this->load->view('common/navigation');
    $this->load->view('upload/index',$data);
		$this->load->view('common/footer');
	}


	public function create()
		{
	    $data = array('id' => '');
	    $data['attributes'] = array('class' => 'form');
	    $data['prop'] = array('class' => 'form-control');

	    $ndata['login']=$this->session_data;

	    $this->load->view('common/header',$ndata);
	    $this->load->view('common/navigation');
	    $this->load->view('upload/create',$data);
	    $this->load->view('common/footer');
		}

	  public function store()
		{
	    $this->load->library('form_validation');
			$this->load->helper(array('form'));

			$this->form_validation->set_rules('name', 'image name', 'required');
			$this->form_validation->set_rules('image', 'image upload', 'trim|required|png');


	    if ($this->form_validation->run() === FALSE)
			{
				$this->create();
			}
	    else
			{
	  	  	$dataupload = array(
						'name' => $this->input->post('name'),
						'image' => $this->input->post('image'),

          	'regBy' => $this->session_data['loggedId']
						);
	        $userRegId=$this->ace_model->insert_data('upload', $dataupload);
					redirect($_SERVER['HTTP_REFERER'],'refresh');
			}
		}
}
