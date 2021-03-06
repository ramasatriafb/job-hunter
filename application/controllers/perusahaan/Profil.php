<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('date');
		$this->load->helper('form');
		$this->load->library('pagination');
		$this->load->library('form_validation');
		$this->load->model('Perusahaan_model','',TRUE);
		
		
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
		$data['profil'] = $this->Perusahaan_model->view($user);
		// $data['pengalaman'] = $this->Pengalaman_model->view($user);
		// $data['pendidikan'] = $this->Pendidikan_model->view($user);

		$this->load->view('perusahaan/profil',$data);
	}
	
	public function getEdit(){
		$this->load->helper('url');
		$user = $this->set_var();
		$data['profil'] = $this->Perusahaan_model->view($user);
		$this->load->view('perusahaan/ajax_get_edit_form_profile',$data);
	}

	public function edit($ID)
	{
		$user = $this->set_var();
		$config['upload_path'] = 'uploads/perusahaan/foto/'.$ID;
	    $config['allowed_types'] = 'gif|jpg|png|jpeg';
	    $config['max_size'] = '2048';
	    $config['file_name'] = $ID;

	    $this->load->library('upload',$config);
			if (!is_dir('uploads/perusahaan/foto/'))
	    {
	        mkdir('./uploads/perusahaan/foto/', 0777, true);
	    }
	    $dir_exist = true; // flag for checking the directory exist or not
	    if (!is_dir('uploads/perusahaan/foto/' . $ID))
	    {
	        mkdir('./uploads/perusahaan/foto/' . $ID, 0777, true);
	        $dir_exist = false; // dir not exist
	    }
	    else{

	    }

		  	if(!$this->upload->do_upload('foto')){
				$error = "File yang Anda Upload lebih dari 2MB atau Format file tidak sesuai";
				$data['error']=$error;
				if(!$dir_exist)
          rmdir('./uploads/perusahaan/foto/' . $ID);

				$data['profil'] = $this->Perusahaan_model->view($user);
				$this->load->view('perusahaan/profil',$data);
				}
				else {
				$fotoo=$this->upload->data();
				$data['upload_data']=$fotoo;
				if($fotoo['file_name']){
				$foto="/uploads/perusahaan/foto/".$ID."/".
				$fotoo['file_name'];
			}

			  $this->Perusahaan_model->update_perusahaan($ID,$foto);
        redirect('perusahaan/profil/index');
			  }
			
        
        //add to the DB
        
	
}

	// public function get_tambah_pengalaman(){
	// 	$this->load->helper('url');
	// 	$user = $this->set_var();
	// 	$data['id'] = $this->Pelamar_model->getID($user);
	// 	$data['pengalaman'] = $this->Pengalaman_model->view($user);
	// 	$this->load->view('pelamar/ajax_tambah_form_pengalaman',$data);
	// }

	// public function tambah_pengalaman($ID)
	// {
	// 	$user = $this->set_var();
 //        $this->Pengalaman_model->tambah_pengalaman($ID);
 //        redirect('pelamar/profil/index');
	// }

	// public function get_edit_pengalaman($ID){
	// 	$this->load->helper('url');
	// 	$user = $this->set_var();
	// 	$data['pengalaman'] = $this->Pengalaman_model->get_pengalamanUser($user,$ID);
	// 	$this->load->view('pelamar/ajax_edit_form_pengalaman',$data);
	// }

	// public function edit_pengalaman($ID)
	// {
	// 	$user = $this->set_var();
 //        $this->Pengalaman_model->edit_pengalaman($ID);
 //        redirect('pelamar/profil/index');
	// }


	// public function hapus_pengalaman($ID)
	// {
	// 	$user = $this->set_var();
 //        $this->Pengalaman_model->hapus_pengalaman($ID);
 //        redirect('pelamar/profil/index');
	// }

	// public function get_tambah_pendidikan(){
	// 	$this->load->helper('url');
	// 	$user = $this->set_var();
	// 	$data['id'] = $this->Pelamar_model->getID($user);
	// 	$data['jurusan'] = $this->Pendidikan_model->getJurusan();
	// 	$data['pendidikan'] = $this->Pendidikan_model->view($user);
	// 	$this->load->view('pelamar/ajax_tambah_form_pendidikan',$data);
	// }

	// public function tambah_pendidikan($ID)
	// {
	// 	$user = $this->set_var();
 //        $this->Pendidikan_model->tambah_pendidikan($ID);
 //        redirect('pelamar/profil/index');
	// }

	// public function get_edit_pendidikan($ID){
	// 	$this->load->helper('url');
	// 	$user = $this->set_var();
	// 	$data['jurusan'] = $this->Pendidikan_model->getJurusan();
	// 	$data['pendidikan'] = $this->Pendidikan_model->get_pendidikanUser($user,$ID);
	// 	$this->load->view('pelamar/ajax_edit_form_pendidikan',$data);
	// }

	// public function edit_pendidikan($ID)
	// {
	// 	$user = $this->set_var();
 //        $this->Pendidikan_model->edit_pendidikan($ID);
 //        redirect('pelamar/profil/index');
	// }


	// public function hapus_pendidikan($ID)
	// {
	// 	$user = $this->set_var();
 //        $this->Pendidikan_model->hapus_pendidikan($ID);
 //        redirect('pelamar/profil/index');
	// }

	// public function create()
	// {

	// }

	// public function edit($ID)
	// {

	// }

	// public function delete()
	// {

	// }
	
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
