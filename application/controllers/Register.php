<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Register_model','',TRUE);
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->library('form_validation');
		// if($this->session->userdata('bagian'))
		// 	$this->check_user();
		
	}
 
 
  public function index()
  {
  	$this->load->view('sign_up');

  }

	public function create ()
	{
		$this->Register_model->Create();
		redirect ('authentication/index');


	}

	}