<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank extends CI_Controller {

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
		$data['banks'] = $this->ace_model->get_all_data('bank');
    $this->load->view('common/header',$ndata);
    $this->load->view('common/navigation');
    $this->load->view('bank/index',$data);
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
	    $this->load->view('bank/create',$data);
	    $this->load->view('common/footer');
		}

	  public function store()
		{
	    $this->load->library('form_validation');
			$this->load->helper(array('form'));

			$this->form_validation->set_rules('name', 'Sarvice Name', 'required');
			$this->form_validation->set_rules('amount', 'Sarvice Value', 'trim|required|numeric');
			$this->form_validation->set_rules('date', 'Date', 'required');
	    if ($this->form_validation->run() === FALSE)
			{
				$this->create();
			}
	    else
			{
	  	  	$databank = array(
						'name' => $this->input->post('name'),
						'amount' => $this->input->post('amount'),
						'date' => $this->input->post('date'),
          	'regBy' => $this->session_data['loggedId']
						);
	        $userRegId=$this->ace_model->insert_data('bank', $databank);
					redirect($_SERVER['HTTP_REFERER'],'refresh');
			}
		}
}
