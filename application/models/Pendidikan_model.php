<?php
Class Pendidikan_model extends CI_Model{
    
    function view($user)
    {
         $sql = ("SELECT a.id as id_pendidikan, a.gelar as gelar,a.sekolah as sekolah, a.nilai_akhir as nilai_akhir, a.tahun_lulus as tahun_lulus, b.id as id, c.id as id_jurusan, c.nama as jurusan FROM pendidikan a,pelamar b,jurusan c where a.id_pelamar = b.id and a.jurusan_id = c.id and b.email  = ?  ");
        $query = $this -> db -> query($sql, array($user['email']));
        return $query->result();
    }

    function getJurusan()
    {
    	$sql = "(SELECT * FROM jurusan ORDER BY id)";
    	$query = $this -> db -> query($sql);
        return $query->result();
    }
 	
 	function tambah_pendidikan($ID)
    {
        $gelar = $this->input->post('gelar');
        $sekolah = $this->input->post('sekolah');
        $nilai_akhir = $this->input->post('nilai_akhir');
        $tahun_lulus = $this->input->post('tahun_lulus');
        $jurusan_id = $this->input->post('jurusan_id');
        
        $sql = "INSERT INTO pendidikan (id_pelamar,gelar,jurusan_id,sekolah,tahun_lulus,nilai_akhir)"
                . "VALUES('".$ID."','".$gelar."','".$jurusan_id."','".$sekolah."','".$tahun_lulus."','".$nilai_akhir."')";
        
        $query = $this->db->query($sql);
        return $query;
         
    }

     function get_pendidikanUser($user,$ID)
    {
    	$sql = ("SELECT a.id as id_pendidikan,a.gelar as gelar,a.sekolah as sekolah,a.nilai_akhir as nilai_akhir,a.tahun_lulus as tahun_lulus,
    	 b.id as id ,c.id as id_jurusan,c.nama as nama
    	 FROM pendidikan a,pelamar b, jurusan c where a.id_pelamar = b.id and a.jurusan_id = c.id and b.email = ? and a.id = ? and b.id = (SELECT id FROM pelamar WHERE email = ?)  ");
        $query = $this -> db -> query($sql, array($user['email'],$ID,$user['email']));
        return $query->result();
    }

    function edit_pendidikan($ID)
    {
    	 $gelar = $this->input->post('gelar');
        $sekolah = $this->input->post('sekolah');
        $nilai_akhir = $this->input->post('nilai_akhir');
        $tahun_lulus = $this->input->post('tahun_lulus');
        $jurusan_id = $this->input->post('jurusan_id');
        
        $sql = "UPDATE pendidikan SET gelar = '".$gelar."',jurusan_id = '".$jurusan_id."',sekolah = '".$sekolah."',tahun_lulus = '".$tahun_lulus."',nilai_akhir = '".$nilai_akhir."'
     WHERE id = '".$ID."' ";
        $query = $this->db->query($sql);
    }


     function hapus_pendidikan($ID)
    {
       $sql = "DELETE FROM pendidikan WHERE id = '".$ID."'";
        
        $query = $this->db->query($sql);
        return $query;
         
    } 
    
      function view_pendidikan($id_pelamar)
    {
         $sql = ("SELECT a.id as id_pendidikan, a.gelar as gelar,a.sekolah as sekolah, a.nilai_akhir as nilai_akhir, a.tahun_lulus as tahun_lulus, b.id as id, c.id as id_jurusan, c.nama as jurusan FROM pendidikan a,pelamar b,jurusan c where a.id_pelamar = b.id and a.jurusan_id = c.id and b.id  = ?  ");
        $query = $this -> db -> query($sql, $id_pelamar);
        return $query->result();
    }
  
}
?>