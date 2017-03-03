<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lowongan extends CI_Controller {

function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('date');
		$this->load->helper('form');
		$this->load->library('pagination');
		$this->load->library('form_validation');
		$this->load->model('Lowongan_model','',TRUE);
		$this->load->model('Perusahaan_model','',TRUE);
		$this->load->model('Pelamar_model','',TRUE);
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
		$user = $this->set_var();
		

		//tamplikan data
		 $data['lowongan'] = $this->Lowongan_model->view($user);

		$this->load->view('perusahaan/pasang_lowongan',$data);
	}
	
	public function get_tambah_lowongan(){
		$this->load->helper('url');
		$user = $this->set_var();
		$data['id'] = $this->Perusahaan_model->getID($user);
		$this->load->view('perusahaan/ajax_get_tambah_form_lowongan',$data);
	}

	public function tambah_lowongan($ID)
	{
		$user = $this->set_var();
        $this->Lowongan_model->tambah_lowongan($ID);
        redirect('perusahaan/lowongan/index');
	}

	public function get_edit_lowongan($ID){
		$this->load->helper('url');
		$user = $this->set_var();
		$data['lowongan'] = $this->Lowongan_model->get_LowonganUser($user,$ID);
		$this->load->view('perusahaan/ajax_get_edit_form_lowongan',$data);
	}

	public function edit_lowongan($ID)
	{
		$user = $this->set_var();
        $this->Lowongan_model->edit_lowongan($ID);
        redirect('perusahaan/lowongan/index');
	}
	public function get_detail_lowongan($ID){
		$this->load->helper('url');
		$user = $this->set_var();
		$data['lowongan'] = $this->Lowongan_model->get_LowonganUser($user,$ID);
		$this->load->view('perusahaan/pasang_lowongan',$data);
	}

	public function hapus_lowongan($ID)
	{
		$user = $this->set_var();
        $this->Lowongan_model->hapus_lowongan($ID);
        redirect('perusahaan/lowongan/index');
	}

	public function get_pelamar($id_lowongan)
	{
		$data['pelamar']= $this->Lowongan_model->get_pelamar($id_lowongan);
        $this->load->view('perusahaan/daftar_pelamar',$data);
	}
	public function get_profil($id_pelamar)
	{

		$data['profil'] = $this->Pelamar_model->view_pelamar($id_pelamar);
		$data['pengalaman'] = $this->Pengalaman_model->view_pengalaman($id_pelamar);
		$data['pendidikan'] = $this->Pendidikan_model->view_pendidikan($id_pelamar);

		$this->load->view('perusahaan/profil_pelamar',$data);
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
