<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_manajemen extends CI_Controller {

function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('date');
		$this->load->helper('form');
		$this->load->library('pagination');
		$this->load->library('form_validation');
		$this->load->model('User','',TRUE);
		$this->load->model('Pelamar_model','',TRUE);
		$this->load->model('Perusahaan_model','',TRUE);
		$this->load->model('Dashboard_model','',TRUE);
		
		
		
		//$this->load->library('tcpdf');
		$this->check_login();
	} 
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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$user = $this->set_var();
		$data['user']= $this->User->view_user();
		
		$this->load->view('backend/user',$data);
	}

	public function update_status($ID,$status)
	{
		$user = $this->set_var();
		$this->User->edit_role($ID,$status);
		$data['user']= $this->User->view_user();
		
		
		redirect('backend/User_manajemen');
	}
	public function delete($ID)
	{
		$this->User->delete($ID,$status);
		
		redirect('backend/User_manajemen');
	}


	
	function set_var(){
		$user['email'] = $this->session->userdata('email');
	 	$user['id'] = $this->session->userdata('id');
	 	$user['role'] = $this->session->userdata('role');
	 	return $user;
	 }
	function check_login()
	{
		if($this->session->userdata('email')==false) {
            redirect('welcome/index');
        }else if($this->session->userdata('role')!='Admin'){
		
			redirect('error');
		}
	}

	

}
