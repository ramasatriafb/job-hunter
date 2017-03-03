<?php
Class User_admin extends CI_Model{
    function login($username, $password){
      $this -> db -> select('user.email as email,user.id as id , password');
      $this -> db -> from('user , admin ');
      $this -> db -> where('user.email', $username);
      $this -> db -> where('user.password', MD5($password));
      $this -> db -> where('user.email = admin.email');
      $this -> db -> limit(1);
 
      $query = $this -> db -> get();
      
      if($query -> num_rows() == 1){
        return $query->result();
      }
      else{
        return false;
      }
    }
 
    function hak_akses($username){
      $this -> db -> select('role');
      $this -> db -> from('role');
      $this -> db -> where('email', $username);
      $this -> db -> limit(1);
 
      $query = $this -> db -> get();
 
    if($query -> num_rows() == 1){
      $result = $query->result();
	    foreach ($result as $row){
		    $hak_akses = $row->role;
	    }
	    return $hak_akses;
    }
   
    else{
      return 0;
    }
  }

      function view_user_admin()
  {
     $sql = ("SELECT a.id as id_admin,a.nama as nama, a.email as email,b.role as role, b.id as id_role,c.waktu_create as waktu_create from admin a,role b,user c where a.email=b.email and a.email=c.email and b.role <> 'Disactivated' order by a.id desc");
      $query = $this -> db -> query($sql)->result();
    return $query;
  }

  function tambah_user_admin()
  {
      $pass = $this->input->post('password');
     $simpan_data1=array(
       'email'          => $this->input->post('email'),
        'nama'             => $this->input->post('nama'),
        
        );
        $simpan = $this->db->insert('admin', $simpan_data1);

         $simpan_data2=array(
        'email'          => $this->input->post('email'),
        'role'          => $this->input->post('role'),
        
          
        );
        $this->db->set('waktu_create','NOW()',FALSE);   
    
        $simpan = $this->db->insert('role', $simpan_data2);

         $simpan_data3=array(
        'email'          => $this->input->post('email'),
        'password'          => MD5($pass),
       
          
        );
       $this->db->set('waktu_create','NOW()',FALSE);   
    
        $simpan = $this->db->insert('user', $simpan_data3);
        
        return $simpan;
  }

  function cek_pass($user,$pass_lama)
  {
    $sql=("SELECT password FROM user WHERE '".$user['id']."' and password = '".MD5($pass_lama)."'");;
     $query = $this->db->query($sql);
    if($query -> num_rows() == 0){
        return $query->result();
      }
      else{
        return false;
      }
  }
  function update_pass($user,$pass_baru)
  {
    $sql = "UPDATE user SET password = '".MD5($pass_baru)."'
     WHERE id = '".$user['id']."' ";
        $query = $this->db->query($sql);
  }
  function delete($ID_admin)
  {
     $sql = "DELETE FROM admin WHERE id = '".$ID_admin."'";
        
        $query = $this->db->query($sql);
        return $query;
  }
}
?>