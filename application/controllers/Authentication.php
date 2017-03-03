<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('User','',TRUE);
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->library('form_validation');
		// if($this->session->userdata('bagian'))
		// 	$this->check_user();
		
	}
 
 
  public function index()
  {
    // load the session library
		
		
		$username = $this->input->post("email");
        $password = $this->input->post("password");
		
		$this->form_validation->set_rules("email", "Email", "trim|required");
        $this->form_validation->set_rules("password", "Password", "trim|required|callback_check_database");
		
 
        // if form was submitted and given captcha word matches one in session
        if ( $this->form_validation->run() == TRUE ){
			$result = $this->User->login($username, $password);
			$hak = $this->User->hak_akses($username);
			$sess_array = array();
			foreach($result as $row)
			{
				$sess_array = array(
				 'id' => $row->id,
				 'email' => $row->email,
				 
				 'role' => $hak
				);
				$this->session->set_userdata($sess_array);
				
			}
			$this->check_user();
        }
		else
		{
			
            
            $this->load->view('sign_in.php');
        }
		
	}

	function check_database($password)
	{
		//Field validation succeeded.  Validate against database
		$username = $this->input->post("email");
		 
		//query the database
		$result = $this->User->login($username, $password);
		 
		if($result)
		{
			
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('check_database', 'Invalid Email or Password');
			return false;
		}
	}
	function check_user()
	{	
		
		if($this->session->userdata('role')=="Admin")
			redirect('admin/c_admin');
		else if($this->session->userdata('role')=="Perusahaan")
			redirect('perusahaan/dashboard');
		else if($this->session->userdata('role')=="Pelamar")
			redirect('pelamar/dashboard');
		else if($this->session->userdata('role')=='')
			redirect('welcome/index');
		
	}

	function logout()
	{
		$user = $this->set_var();
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role');
		session_destroy();
		redirect('welcome');
	}
	function set_var(){
		$user['email'] = $this->session->userdata('id');
	 	$user['id'] = $this->session->userdata('email');
	 	$user['role'] = $this->session->userdata('role');
	 	return $user;
	 }
}