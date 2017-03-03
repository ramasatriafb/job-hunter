<?php
Class Front extends CI_Model{
    function role(){
      $this -> db -> select('user.email as email,user.id as id , password');
      $this -> db -> from('user , pelamar ,perusahaan, admin ');
      $this -> db -> where('user.email', $username);
      $this -> db -> where('user.password', MD5($password));
      $this -> db ->group_start();
      $this -> db -> where('user.email = pelamar.email');
      $this -> db ->or_where('user.email = perusahaan.email');
      $this -> db ->or_where('user.email = admin.email');
      $this -> db ->group_end();
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
}
?>