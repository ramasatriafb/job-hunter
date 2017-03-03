<?php
Class Register_model extends CI_Model{
    function create(){
      $password = $this->input-> post('password');
      $simpan_data=array(
    'email'             => $this->input->post('email'),
    'username'          => $this->input->post('username'),
    'password'          => MD5($password),
      
    );
    $this->db->set('waktu_create','NOW()',FALSE);
    $simpan = $this->db->insert('user', $simpan_data);
    
    $role = $this->input->post('role');
    if ($role == 'Pelamar'){
      $simpan_data1=array(
      'email'             => $this->input->post('email'),
    'username'          => $this->input->post('username'), 
    'nama_lengkap'          => $this->input->post('nama'),
    'kelamin'       => $this->input->post('jenis_kelamin'),
    );

    $this->db->set('waktu_create','NOW()',FALSE);   
    $simpan = $this->db->insert('pelamar', $simpan_data1);
    
    $simpan_role=array(
     'email'             => $this->input->post('email'),
    'role'          => $this->input->post('role'),
      
    );

    $this->db->set('waktu_create','NOW()',FALSE);   
    $simpan = $this->db->insert('role', $simpan_role);
    return $simpan;

    }else {
    $simpan_data1=array(
     'email'             => $this->input->post('email'),
    'username'          => $this->input->post('username'),
     'nama'          => $this->input->post('nama'),
   
    );

    $this->db->set('waktu_create','NOW()',FALSE);   
    $simpan = $this->db->insert('perusahaan', $simpan_data1);

    $simpan_role=array(
     'email'             => $this->input->post('email'),
    'role'          => $this->input->post('role'),
      
    );

    $this->db->set('waktu_create','NOW()',FALSE);   
    $simpan = $this->db->insert('role', $simpan_role);
    return $simpan;
    }
 
    
  }
}
?>