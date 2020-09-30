<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mgambaran_umum extends CI_Model {
  function getresults() {
    $this->db->select('th_ajaran');
    $this->db->from('tb_identitas_sekolah');
    $this->db->group_by('th_ajaran');
    $query = $this->db->get();
    return $query->result();
  }

  function cari($thn,$bntkdidik){
    $query = $this->db->query("select * from ___aaatest('$bntkdidik','$thn')");
    return $query->result();
  }  
  #satuan pendidikan#
  function totsatuanpendidikan()
  {
    $this->db->select("*");
    $this->db->from('v_satuan_pendidikan_kbb');
    $query = $this->db->get();
    return $query->result();
  }
  function satuanpendidikan()
  {
    $this->db->select("*");
    $this->db->from('v_satuan_pendidikan_kec');
    $query = $this->db->get();
    return $query->result();
  }
  #jk_kelompok_agama#
  function totpdidikagama()
  {
    $this->db->select("*");
    $this->db->from('v_jk_kelompokagama_kbb');
    $query = $this->db->get();
    return $query->result();
  }
  function pdidikagama()
  {
    $this->db->select("*");
    $this->db->from('v_jk_kelompokagama_kec');
    $query = $this->db->get();
    return $query->result();
  }
  #setatus ptk#
  function totstpegawai()
  {
    $this->db->select("*");
    $this->db->from('v_setatus_ptk_kbb');
    $query = $this->db->get();
    return $query->result();
  }
  function stpegawai()
  {
    $this->db->select("*");
    $this->db->from('v_setatus_ptk_kec');
    $query = $this->db->get();
    return $query->result();
  }
  #jenis ptk#
  function totjnsptk()
  {
    $this->db->select("*");
    $this->db->from('v_jenis_ptk_kbb');
    $query = $this->db->get();
    return $query->result();
  }
  function jnsptk()
  {
    $this->db->select("*");
    $this->db->from('v_jenis_ptk_kec');
    $query = $this->db->get();
    return $query->result();
  }
}
?>
