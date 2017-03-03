<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Front','',TRUE);
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Lowongan_model','',TRUE);
		$this->load->model('Perusahaan_model','',TRUE);

		$this->load->model('Pelamar_model','',TRUE);
		// if($this->session->userdata('bagian'))
		// 	$this->check_user();
		
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
		$this->load->view('index');
	}
	
	public function cari_lowongan()
	{
		$data['lowongan']= $this->Lowongan_model->lowongan();
		$this->load->view('cari_lowongan',$data);
	}
	public function cari()
	{
		$lowongan =  $this->input->post('lowongan');
		$data['lowongan']= $this->Lowongan_model->cari($lowongan);
		$this->load->view('cari_lowongan',$data);
	}

	public function cari_perusahaan()
	{
		$data['perusahaan']= $this->Perusahaan_model->perusahaan();
		$this->load->view('cari_perusahaan',$data);
	}

	public function sign_in()
	{
		$this->load->view('sign_in');
	}

	public function sign_up()
	{
		$data['kelamin'] = $this->Pelamar_model->get_jenis_kelamin();
		
		$this->load->view('sign_up',$data);
	}

	public function latar_belakang()
	{
		$this->load->view('latar_belakang');
	}

}
