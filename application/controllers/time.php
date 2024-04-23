<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class time extends CI_Controller {

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
		$data['time'] = $this->ace_model->get_all_data('time');
    $this->load->view('common/header',$ndata);
    $this->load->view('common/navigation');
    $this->load->view('time/index',$data);
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
	    $this->load->view('time/create',$data);
	    $this->load->view('common/footer');
		}

	  public function store()
		{
	    $this->load->library('form_validation');
			$this->load->helper(array('form'));

			$this->form_validation->set_rules('name', 'Customer name', 'required');
			$this->form_validation->set_rules('noun', 'Period', 'required');
      $this->form_validation->set_rules('outft', 'Finish time', 'required');
      $this->form_validation->set_rules('date', 'Date', 'trim|required|Date');
			$this->form_validation->set_rules('amount', 'Amount', 'trim|required|numeric');
	    if ($this->form_validation->run() === FALSE)
			{
				$this->create();
			}
	    else
			{
	  	  	$datatime = array(
						'name' => $this->input->post('name'),
						'noun' => $this->input->post('noun'),
						'outft' => $this->input->post('outft'),
            'date' => $this->input->post('date'),
            'amount' => $this->input->post('amount'),
          	'regBy' => $this->session_data['loggedId']
						);
	        $userRegId=$this->ace_model->insert_data('time', $datatime);
					redirect($_SERVER['HTTP_REFERER'],'refresh');
			}
		}
}
