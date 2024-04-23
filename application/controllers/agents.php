<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agents extends CI_Controller {

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
		$data['agents'] = $this->ace_model->get_all_data('agents');
    $this->load->view('common/header',$ndata);
    $this->load->view('common/navigation');
    $this->load->view('agents/index',$data);
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
	    $this->load->view('agents/create',$data);
	    $this->load->view('common/footer');
		}

	  public function store()
		{
	    $this->load->library('form_validation');
			$this->load->helper(array('form'));

			$this->form_validation->set_rules('name', 'Product Name', 'required');
			$this->form_validation->set_rules('buy', 'Buying price', 'trim|required|numeric');
			$this->form_validation->set_rules('sell', 'Selling price', 'trim|required|numeric');
			$this->form_validation->set_rules('amount', 'Profits', 'trim|required|numeric');
			$this->form_validation->set_rules('date', 'Date', 'trim|required|Date');

	    if ($this->form_validation->run() === FALSE)
			{
				$this->create();
			}
	    else
			{
	  	  	$dataagents = array(
						'name' => $this->input->post('name'),
						'buy' => $this->input->post('buy'),
						'sell' => $this->input->post('sell'),
						'amount' => $this->input->post('amount'),
						'date' => $this->input->post('date'),
          	'regBy' => $this->session_data['loggedId']
						);
	        $userRegId=$this->ace_model->insert_data('agents', $dataagents);
					redirect($_SERVER['HTTP_REFERER'],'refresh');
			}
		}
}
