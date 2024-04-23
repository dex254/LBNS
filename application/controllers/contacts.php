<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends CI_Controller {

	function __construct()
    {
   	 parent::__construct();
   	 $this->load->helper("url");   //call the form helper
   	 $this->load->helper('form');
  	 $this->load->library('session');
    $this->load->model('lbns_model','',TRUE);
    $this->session_data = $this->session->userdata('logged_in');
    if(empty($this->session_data))
    {
       redirect('login');
    }
    }
	public function index()
	{
		$ndata['login']=$this->session_data;
		$data['contacts'] = $this->lbns_model->get_all_data("contacts");

    $this->load->view('common/header',$ndata);
    $this->load->view('common/navigation');
    $this->load->view('contacts/index',$data);
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
	    $this->load->view('contacts/create',$data);
	    $this->load->view('common/footer');
		}

	  public function store()
		{
	    $this->load->library('form_validation');
			$this->load->helper(array('form'));

			$this->form_validation->set_rules('name', 'Business Name', 'required');
			$this->form_validation->set_rules('owner', 'Owner', 'required');
			$this->form_validation->set_rules('dess', 'Description', 'required');
	    $this->form_validation->set_rules('phone', 'phone', 'required|min_length[10]|max_length[13]');
	    if ($this->form_validation->run() === FALSE)
			{
				$this->create();
			}
	    else
			{
	  	  	$datacontacts = array(
						'name' => $this->input->post('name'),
						'owner' => $this->input->post('owner'),
						'dess' => $this->input->post('dess'),
	          'phone' => $this->input->post('phone'),
          	'regBy' => $this->session_data['loggedId']
						);
	        $userRegId=$this->lbns_model->insert_data('contacts', $datacontacts);
					redirect($_SERVER['HTTP_REFERER'],'refresh');
			}
		}
}
