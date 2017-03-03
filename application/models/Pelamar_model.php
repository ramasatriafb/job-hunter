<?php
Class Pelamar_model extends CI_Model{
    
    function getID($user)
    {
        $sql=("SELECT id FROM pelamar WHERE email = ?");
        $query = $this -> db -> query($sql, array($user['email']));
        return $query->result();
    }

    function view($user)
    {
        $sql = ("SELECT a.id as id,a.email as email,a.nama_lengkap as nama_lengkap,a.asal as asal,a.tahun_lahir as tahun_lahir,a.kewarganegaraan as kewarganegaraan,a.telpon as telpon,a.kelamin as kelamin_id,b.id as id_kelamin,b.nama as nama , a.foto as foto, a.cv as cv FROM pelamar a,jenis_kelamin b where a.kelamin = b.id and a.email = ? ");
        $query = $this -> db -> query($sql, array($user['email']));
        return $query->result();
    }
    function view_cv($user)
    {
        $sql = ("SELECT a.cv as cv FROM pelamar a where a.email = ? ");
        $query = $this -> db -> query($sql, array($user['email']));
        return $query->result();
    }

    function get_jenis_kelamin()
    {
        $sql=("SELECT * FROM jenis_kelamin");
        $query = $this -> db -> query($sql);
        return $query->result();
    }

    function update_pelamar($ID,$foto)
    {
        $nama = $this->input->post('nama_lengkap');
        $asal = $this->input->post('kota');
        $tahun_lahir = $this->input->post('tahun_lahir');
        $kewarganegaraan = $this->input->post('kewarganegaraan');
        $telpon = $this->input->post('telpon');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        
        $sql = "UPDATE pelamar SET nama_lengkap = '".$nama."',asal = '".$asal."',tahun_lahir = '".$tahun_lahir."',kewarganegaraan = '".$kewarganegaraan."',telpon = '".$telpon."',kelamin = '".$jenis_kelamin."',foto = '".$foto."'
     WHERE id = '".$ID."' ";
        $query = $this->db->query($sql);
         
    } 
    
     function update_pelamar_cv($ID,$cv)
    {
        
        $sql = "UPDATE pelamar SET cv = '".$cv."'
     WHERE id = '".$ID."' ";
        $query = $this->db->query($sql);
         
    } 


    function view_pelamar($id_pelamar)
    {
        $sql = ("SELECT a.id as id,a.email as email,a.nama_lengkap as nama_lengkap,a.asal as asal,a.tahun_lahir as tahun_lahir,a.kewarganegaraan as kewarganegaraan,a.telpon as telpon,a.kelamin as kelamin_id,b.id as id_kelamin,b.nama as nama , a.foto as foto, a.cv as cv FROM pelamar a,jenis_kelamin b where a.kelamin = b.id and a.id = ? ");
        $query = $this -> db -> query($sql, $id_pelamar);
        return $query->result();
    }

    function all_pelamar()
    {
        $sql = ("SELECT * FROM pelamar order by id desc ");
        $query = $this -> db -> query($sql);
        return $query->result();
    }
    
    function delete($ID)
    {
           $sql = "DELETE FROM pelamar WHERE id = '".$ID."'";
        
        $query = $this->db->query($sql);
        return $query;
    }

    function view_kandidat()
    {
        $sql = ("SELECT a.id as id_pelamar,a.nama_lengkap as nama, a.asal as asal,c.nama as kompeten,b.gelar as gelar,a.foto as foto FROM pelamar a, pendidikan b, jurusan c WHERE a.id = b.id_pelamar and b.jurusan_id = c.id ORDER BY a.id desc");
        $query = $this -> db -> query($sql);
        return $query->result();
    }

    function cari($kompeten)
    {
         $sql = ("SELECT a.id as id_pelamar,a.nama_lengkap as nama, a.asal as asal,c.nama as kompeten,b.gelar as gelar,a.foto as foto FROM pelamar a, pendidikan b, jurusan c WHERE a.id = b.id_pelamar and b.jurusan_id = c.id and c.nama like'".$kompeten."%' ORDER BY a.id desc");
        $query = $this -> db -> query($sql);
        return $query->result();
    }
}
?>