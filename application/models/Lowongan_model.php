<?php
Class Lowongan_model extends CI_Model{
    
    function lowongan()
    {
        $sql = ("SELECT a.id as id_lowongan, a.judul as judul, a.tanggung_jawab as tanggung_jawab, a.syarat as syarat, a.tanggal_buka as tanggal_buka, a.tanggal_tutup as tanggal_tutup, a.id_perusahaan as id_perusahaan, a.waktu_create as waktu_create, b.id as id, b.nama as nama, b.email as email FROM lowongan a, perusahaan b WHERE a.id_perusahaan = b.id  ORDER BY a.id desc");
        $query = $this -> db -> query($sql);
        return $query->result();   
    }
    function cari($lowongan)
    {
        $sql = ("SELECT a.id as id_lowongan, a.judul as judul, a.tanggung_jawab as tanggung_jawab, a.syarat as syarat, a.tanggal_buka as tanggal_buka, a.tanggal_tutup as tanggal_tutup, a.id_perusahaan as id_perusahaan, a.waktu_create as waktu_create, b.id as id, b.nama as nama, b.email as email FROM lowongan a, perusahaan b WHERE a.id_perusahaan = b.id and a.judul like'".$lowongan."%' ORDER BY a.id desc");
        $query = $this -> db -> query($sql);
        return $query->result();

    }
    
    function view($user)
    {
        $sql = ("SELECT a.id as id_lowongan, a.judul as judul, a.tanggung_jawab as tanggung_jawab, a.syarat as syarat, a.tanggal_buka as tanggal_buka, a.tanggal_tutup as tanggal_tutup, a.id_perusahaan as id_perusahaan, a.waktu_create as waktu_create, b.id as id, b.nama as nama, b.email as email FROM lowongan a, perusahaan b WHERE a.id_perusahaan = b.id and b.email = ? ORDER BY a.id desc");
        $query = $this -> db -> query($sql, array($user['email']));
        return $query->result();
    }
    function get_LowonganUser($user,$ID)
    {
        $sql = ("SELECT a.id as id, a.judul as judul, a.tanggung_jawab as tanggung_jawab, a.syarat as syarat, a.tanggal_buka as tanggal_buka, a.tanggal_tutup as tanggal_tutup, a.id_perusahaan as id_perusahaan, a.waktu_create as waktu_create, b.id as id, b.nama as nama, b.email as email FROM lowongan a, perusahaan b WHERE a.id_perusahaan = b.id and b.email = ? and a.id = ?   ");
        $query = $this -> db -> query($sql, array($user['email'],$ID));
        return $query->result();
    }
    function tambah_lowongan($ID)
    {
        $simpan_data=array(
        'judul'             => $this->input->post('judul'),
        'tanggung_jawab'          => $this->input->post('tanggung_jawab'),
        'syarat'          => $this->input->post('syarat'),
        'tanggal_buka'          => $this->input->post('tanggal_buka'),
        'tanggal_tutup'          => $this->input->post('tanggal_tutup'),
        'id_perusahaan'     => $ID,
          
        );
        $this->db->set('waktu_create','NOW()',FALSE);
        $simpan = $this->db->insert('lowongan', $simpan_data);
        return $simpan;
    }
    function edit_lowongan($ID)
    {
         $judul = $this->input->post('judul');
        $tanggung_jawab = $this->input->post('tanggung_jawab');
        $syarat = $this->input->post('syarat');
        $tanggal_buka = $this->input->post('tanggal_buka');
        $tanggal_tutup = $this->input->post('tanggal_tutup');
      
        $sql = "UPDATE lowongan SET judul = '".$judul."',tanggung_jawab = '".$tanggung_jawab."',syarat = '".$syarat."',tahun = '".$tanggal_buka."',tanggal_tutup = '".$tanggal_tutup."'
     WHERE id = '".$ID."' ";
        $query = $this->db->query($sql);
    }

    function hapus_lowongan($ID)
    {
       $sql = "DELETE FROM lowongan WHERE id = '".$ID."'";
        
        $query = $this->db->query($sql);
        return $query;
         
    } 

    function bookmark($id_pelamar,$ID)
    {
        $simpan_data=array(
        'id_pelamar'             => $id_pelamar,
        'id_lowongan'          => $ID,
          
        );
        $this->db->set('waktu_create','NOW()',FALSE);
        $simpan = $this->db->insert('daftar_bookmark', $simpan_data);
        return $simpan;
    }

     function lamar($id_pelamar,$ID)
    {
        $simpan_data=array(
        'id_pelamar'             => $id_pelamar,
        'id_lowongan'          => $ID,
          
        );
        $this->db->set('waktu_lamar','NOW()',FALSE);
        $simpan = $this->db->insert('daftar_lamaran', $simpan_data);
        return $simpan;
    }

    function get_daftar_lamaran($user)
    {
        $sql = ("SELECT c.id as id_lowongan, c.judul as judul, c.tanggung_jawab as tanggung_jawab, c.syarat as syarat, c.tanggal_buka as tanggal_buka, c.tanggal_tutup as tanggal_tutup , d.id as id_perusahaan,d.nama as nama from daftar_lamaran a, pelamar b , lowongan c, perusahaan d where a.id_pelamar = b.id and a.id_lowongan = c.id and c.id_perusahaan = d.id and b.email =  ? ");
     $query = $this -> db -> query($sql, array($user['email']));
        return $query->result();
    }

    function get_daftar_bookmark($user)
    {
        $sql = ("SELECT c.id as id_lowongan, c.judul as judul, c.tanggung_jawab as tanggung_jawab, c.syarat as syarat, c.tanggal_buka as tanggal_buka, c.tanggal_tutup as tanggal_tutup , d.id as id_perusahaan, d.nama as nama from daftar_bookmark a, pelamar b , lowongan c, perusahaan d where a.id_pelamar = b.id and a.id_lowongan = c.id and c.id_perusahaan = d.id and b.email =  ? ");
     $query = $this -> db -> query($sql, array($user['email']));
        return $query->result();
    }

    function get_count_lamaran($user)
    {
        $sql =("SELECT count(*) from daftar_lamaran a, pelamar b , lowongan c, perusahaan d where a.id_pelamar = b.id and a.id_lowongan = c.id and c.id_perusahaan = d.id and a.id_lowongan = ? and d.email = ?");
          $query = $this -> db -> query($sql, array($user['email']));
        return $query->result();
    }
     function get_pelamar($id_lowongan)
    {
        $sql =("SELECT b.nama_lengkap as nama ,b.email as email,e.gelar as gelar,b.asal as asal , c.id as id_lowongan ,b.id as id_pelamar from daftar_lamaran a, pelamar b ,lowongan c, perusahaan d,pendidikan e where a.id_pelamar = b.id and a.id_lowongan = c.id and c.id_perusahaan = d.id and e.id_pelamar = b.id and a.id_lowongan =  ? ");
          $query = $this -> db -> query($sql, $id_lowongan);
        return $query->result();
    }

      function get_daftar_lamaran_all()
    {
        $sql = ("SELECT a.id as id,c.judul as judul,d.nama as nama_perusahaan,b.nama_lengkap as nama_pelamar, c.tanggal_buka as tanggal_buka, c.tanggal_tutup as tanggal_tutup ,d.id as id_perusahaan from daftar_lamaran a, pelamar b , lowongan c, perusahaan d where a.id_pelamar = b.id and a.id_lowongan = c.id and c.id_perusahaan = d.id ORDER BY id DESC");
     $query = $this -> db -> query($sql);
        return $query->result();
    }

    function get_daftar_bookmark_all()
    {
        $sql = ("SELECT a.id as id,c.judul as judul,d.nama as nama_perusahaan,b.nama_lengkap as nama_pelamar, c.tanggal_buka as tanggal_buka, c.tanggal_tutup as tanggal_tutup ,d.id as id_perusahaan from daftar_bookmark a, pelamar b , lowongan c, perusahaan d where a.id_pelamar = b.id and a.id_lowongan = c.id and c.id_perusahaan = d.id ORDER BY id DESC ");
     $query = $this -> db -> query($sql);
        return $query->result();
    }
}
?>