<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tax extends CI_Controller {

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
		$data['tax'] = $this->lbns_model->get_all_data('tax');
    $this->load->view('common/header',$ndata);
    $this->load->view('common/navigation');
    $this->load->view('tax/index',$data);
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
	    $this->load->view('tax/create',$data);
	    $this->load->view('common/footer');
		}
	  public function store()
		{
	    $this->load->library('form_validation');
			$this->load->helper(array('form'));

			$this->form_validation->set_rules('name', 'Tax Name', 'required');
			$this->form_validation->set_rules('product', 'Product', 'required');
			$this->form_validation->set_rules('amount', 'Amount', 'trim|required|numeric');
	    $this->form_validation->set_rules('date', 'Date', 'trim|required|Date');
      $this->form_validation->set_rules('link', 'Link', 'required');

	    if ($this->form_validation->run() === FALSE)
			{
				$this->create();
			}
	    else
			{
	  	  	$datatax = array(
						'name' => $this->input->post('name'),
						'product' => $this->input->post('product'),
						'amount' => $this->input->post('amount'),
	          'date' => $this->input->post('date'),
            'link' => $this->input->post('link'),
          	'regBy' => $this->session_data['loggedId']
						);
	        $userRegId=$this->lbns_model->insert_data('tax', $datatax);
					redirect($_SERVER['HTTP_REFERER'],'refresh');
			}
		}
}
