<?php
Class Perusahaan_model extends CI_Model{
    function perusahaan()
    {
         $sql = ("SELECT a.id as id,a.email as email,a.nama as nama,a.kota as kota,a.alamat as alamat,a.telpon as telpon, a.foto as foto FROM perusahaan a order by a.nama");
        $query = $this -> db -> query($sql);
        return $query->result();
    }
    function getID($user)
    {
        $sql=("SELECT id FROM perusahaan WHERE email = ?");
        $query = $this -> db -> query($sql, array($user['email']));
        return $query->result();
    }
    function view($user)
    {
        $sql = ("SELECT a.id as id,a.email as email,a.nama as nama,a.kota as kota,a.alamat as alamat,a.telpon as telpon, a.foto as foto FROM perusahaan a where a.email = ? ");
        $query = $this -> db -> query($sql, array($user['email']));
        return $query->result();
    }

    
    function update_perusahaan($ID,$foto)
    {
        $nama = $this->input->post('nama');
        $kota = $this->input->post('kota');
        $alamat = $this->input->post('alamat');
        $telpon = $this->input->post('telpon');
         
        $sql = "UPDATE perusahaan SET nama = '".$nama."',kota = '".$kota."',alamat = '".$alamat."',telpon = '".$telpon."',foto = '".$foto."'
     WHERE id = '".$ID."' ";
        $query = $this->db->query($sql);
         
    } 
    
    function view_profil($ID)
    {
        $sql = ("SELECT a.id as id,a.email as email,a.nama as nama,a.kota as kota,a.alamat as alamat,a.telpon as telpon, a.foto as foto FROM perusahaan a where a.id = ? ");
        $query = $this -> db -> query($sql,$ID);
        return $query->result();
    }
    function all_perusahaan()
    {
        $sql = ("SELECT * FROM perusahaan order by nama asc ");
        $query = $this -> db -> query($sql);
        return $query->result();
    }
    
    function delete($ID)
    {
           $sql = "DELETE FROM perusahaan WHERE id = '".$ID."'";
        
        $query = $this->db->query($sql);
        return $query;
    }
  
}
?>