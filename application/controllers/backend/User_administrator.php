<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_administrator extends CI_Controller {

function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('date');
		$this->load->helper('form');
		$this->load->library('pagination');
		$this->load->library('form_validation');
		$this->load->model('User_admin','',TRUE);
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
		$data['user_admin']= $this->User_admin->view_user_admin();
		
		$this->load->view('backend/user_administrator',$data);
	}

	public function tambah_user()
	{
		$this->load->view('backend/tambah_user_administrator');
		
	}
	public function submit_tambahuser()
	{
		$this->User_admin->tambah_user_admin();
		redirect('backend/User_administrator');
	}

	public function update_status($ID,$status)
	{
		$user = $this->set_var();
		$this->User->edit_role($ID,$status);
		$data['user']= $this->User->view_user();
		
		
		redirect('backend/User_administrator');
	}
	public function delete($ID,$ID_admin)
	{
		$this->User->delete($ID);
		$tis->User_admin->delete($ID_admin);

		
		redirect('backend/User_administrator');
	}

	public function ganti_pass()
	{
		$this->load->view('backend/ganti_pass');
	}

	public function submit_ganti_pass()
	{
		$user = $this->set_var();
		$pass_lama = $this->input->post('pass_lama');
		$pass_baru = $this->input->post('pass_baru');
		$konfirmasi = $this->input->post('konfirmasi');
		$this->form_validation->set_rules("pass_lama", "Password Lama", "trim|required");
        $this->form_validation->set_rules("pass_baru", "Password Baru", "trim|required");
        $this->form_validation->set_rules("konfirmasi", "konfirmasi", "trim|required");
		
		$sql=("SELECT password FROM user WHERE id= '".$user['id'] ."' and password = '".MD5($pass_lama)."'");
		 $query = $this->db->query($sql);
		 if($query -> num_rows() == 0){
		 	?><script>alert('Password Lama Salah!');</script><?php
		 		redirect('backend/User_administratorganti_pass');
		 	}else if($pass_baru!=$konfirmasi){
		 	?><script>alert('Password Tidak Cocok!');</script><?php
		 	redirect('backend/User_administratorganti_pass');
		 	}else{
		 	$this->User_admin->update_pass($user,$pass_baru);
		 	redirect('backend/User_administrator');
		 }
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
