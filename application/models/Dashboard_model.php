<?php
Class Dashboard_model extends CI_Model{
      function query_tahun(){
      $sql = ("SELECT * from tahun order by id desc");
      $query = $this -> db -> query($sql)->result();
    return $query;
    }
     function query_count_pelamar($tahun){
    $sql=("SELECT count(*) from pelamar where EXTRACT( YEAR FROM waktu_create) = ? ");
    $query = $this -> db -> query($sql,$tahun)->row_array();
    return $query;
  }
   function query_count_perusahaan($tahun){
    $sql=("SELECT count(*)  from perusahaan where EXTRACT( YEAR FROM waktu_create) = ? ");
    $query = $this -> db -> query($sql,$tahun)->row_array();
    return $query;
  }
}
?>