<?php
Class Pengalaman_model extends CI_Model{
    
    function view($user)
    {
        $sql = ("SELECT a.id as id_pengalaman,a.nama_perusahaan as nama_perusahaan,a.posisi as posisi,a.tanggung_jawab as tanggung_jawab,a.tahun as tahun, b.id as id FROM pengalaman a,pelamar b where a.id_pelamar = b.id and b.email = ?  ");
        $query = $this -> db -> query($sql, array($user['email']));
        return $query->result();
    }
 
    function tambah_pengalaman($ID)
    {
        $nama_perusahaan = $this->input->post('nama_perusahaan');
        $posisi = $this->input->post('posisi');
        $tanggung_jawab = $this->input->post('tanggung_jawab');
        $tahun_awal = $this->input->post('tahun_awal');
        $tahun_akhir = $this->input->post('tahun_akhir');
        $tahun = $tahun_awal.' - '.$tahun_akhir;
        
        $sql = "INSERT INTO pengalaman (id_pelamar,nama_perusahaan,posisi,tanggung_jawab,tahun)"
                . "VALUES('".$ID."','".$nama_perusahaan."','".$posisi."','".$tanggung_jawab."','".$tahun."')";
        
        $query = $this->db->query($sql);
        return $query;
         
    }

    function get_pengalamanUser($user,$ID)
    {
    	$sql = ("SELECT a.id as id_pengalaman,a.nama_perusahaan as nama_perusahaan,a.posisi as posisi,a.tanggung_jawab as tanggung_jawab,a.tahun as tahun, b.id as id FROM pengalaman a,pelamar b where a.id_pelamar = b.id and b.email = ? and a.id = ? and b.id = (SELECT id FROM pelamar WHERE email = ?)  ");
        $query = $this -> db -> query($sql, array($user['email'],$ID,$user['email']));
        return $query->result();
    }

    function edit_pengalaman($ID)
    {
    	 $nama_perusahaan = $this->input->post('nama_perusahaan');
        $posisi = $this->input->post('posisi');
        $tanggung_jawab = $this->input->post('tanggung_jawab');
        $tahun_awal = $this->input->post('tahun_awal');
        $tahun_akhir = $this->input->post('tahun_akhir');
        $tahun = $tahun_awal.' - '.$tahun_akhir;
        
        $sql = "UPDATE pengalaman SET nama_perusahaan = '".$nama_perusahaan."',posisi = '".$posisi."',tanggung_jawab = '".$tanggung_jawab."',tahun = '".$tahun."'
     WHERE id = '".$ID."' ";
        $query = $this->db->query($sql);
    }

    function hapus_pengalaman($ID)
    {
       $sql = "DELETE FROM pengalaman WHERE id = '".$ID."'";
        
        $query = $this->db->query($sql);
        return $query;
         
    } 

     function view_pengalaman($id_pelamar)
    {
        $sql = ("SELECT a.id as id_pengalaman,a.nama_perusahaan as nama_perusahaan,a.posisi as posisi,a.tanggung_jawab as tanggung_jawab,a.tahun as tahun, b.id as id FROM pengalaman a,pelamar b where a.id_pelamar = b.id and b.id = ?  ");
        $query = $this -> db -> query($sql, $id_pelamar);
        return $query->result();
    }
  
}
?>