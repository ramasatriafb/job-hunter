<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lamaran extends CI_Controller {

function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('date');
		$this->load->helper('form');
		$this->load->library('pagination');
		$this->load->library('form_validation');
		$this->load->model('Lowongan_model','',TRUE);
		$this->load->model('Pelamar_model','',TRUE);
		
		
		
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
		$data['lamaran']= $this->Lowongan_model->get_daftar_lamaran($user);
		$data['bookmark']= $this->Lowongan_model->get_daftar_bookmark($user);

		$this->load->view('pelamar/lamaran',$data);
	}
	public function cari()
	{
		$lowongan =  $this->input->post('lowongan');
		$data['lowongan']= $this->Lowongan_model->cari($lowongan);
		$this->load->view('pelamar/dashboard',$data);
	}
	public function lamar($id_pelamar,$ID)
	{
		$this->Lowongan_model->lamar($id_pelamar,$ID);
        redirect('pelamar/dashboard/index');
	}
	public function bookmark($id_pelamar,$ID)
	{
		$this->Lowongan_model->bookmark($id_pelamar,$ID);
        redirect('pelamar/dashboard/index');
	}

	public function profil()
	{
		$this->load->view('pelamar/profil');
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
        }else if($this->session->userdata('role')!='Pelamar'){
		redirect('error');
		}
	}

	

}
