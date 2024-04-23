<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class chart extends CI_Controller {

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
		$data['chart'] = $this->ace_model->get_all_data('chart');
    $this->load->view('common/header',$ndata);
    $this->load->view('common/navigation');
    $this->load->view('chart/index',$data);
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
	    $this->load->view('chart/create',$data);
	    $this->load->view('common/footer');
		}

	  public function store()
		{
	    $this->load->library('form_validation');
			$this->load->helper(array('form'));
      $this->form_validation->set_rules('name', 'Castomer Name', 'required');
			$this->form_validation->set_rules('phone', 'Phone', 'trim|required|numeric');
			  $this->form_validation->set_rules('size', 'Product or service', 'required');
       $this->form_validation->set_rules('date', 'Date', 'required');
      $this->form_validation->set_rules('time', 'Time', 'required');




	    if ($this->form_validation->run() === FALSE)
			{
				$this->create();
			}
	    else
			{
	  	  	$datachart = array(
            'name' => $this->input->post('name'),
            'phone' => $this->input->post('phone'),

            'size' => $this->input->post('size'),

						'date' => $this->input->post('date'),
						'time' => $this->input->post('time'),

          	'regBy' => $this->session_data['loggedId']
						);
	        $userRegId=$this->ace_model->insert_data('chart', $datachart);
					redirect($_SERVER['HTTP_REFERER'],'refresh');
			}
		}
}
