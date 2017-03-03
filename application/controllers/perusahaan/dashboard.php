<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('date');
		$this->load->helper('form');
		$this->load->library('pagination');
		$this->load->library('form_validation');
		$this->load->model('Pelamar_model','',TRUE);
		$this->load->model('Perusahaan_model','',TRUE);
		
		$this->load->model('Pendidikan_model','',TRUE);
		$this->load->model('Pengalaman_model','',TRUE);
		
		
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
		$data['kandidat']= $this->Pelamar_model->view_kandidat();
		$this->load->view('perusahaan/dashboard',$data);
	}

	public function cari_pelamar()
	{
		$kompeten =  $this->input->post('kompeten');
		$data['kandidat']= $this->Pelamar_model->cari($kompeten);
		$this->load->view('perusahaan/dashboard',$data);
	}

	public function get_profil($id_pelamar)
	{

		$data['profil'] = $this->Pelamar_model->view_pelamar($id_pelamar);
		$data['pengalaman'] = $this->Pengalaman_model->view_pengalaman($id_pelamar);
		$data['pendidikan'] = $this->Pendidikan_model->view_pendidikan($id_pelamar);

		$this->load->view('perusahaan/profil_pelamar',$data);
	}

	
	public function pasang_lowongan()
	{
		$this->load->view('perusahaan/pasang_lowongan');
	}

	public function profil()
	{
		$this->load->view('perusahaan/profil');
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
        }else if($this->session->userdata('role')!='Perusahaan'){
		redirect('error');
		}
	}

}
