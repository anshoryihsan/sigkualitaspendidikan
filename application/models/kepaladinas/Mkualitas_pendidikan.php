<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mkualitas_pendidikan extends CI_Model {
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
  #kualitas sd
  function Kualitassd()
  {
    $this->db->select("*");
    $this->db->from('v_kualitas_pendidikan_sd');
    $query = $this->db->get();
    return $query->result();
  }
  #kualitas smp
  function Kualitassmp()
  {
    $this->db->select("*");
    $this->db->from('v_kualitas_pendidikan_smp');
    $query = $this->db->get();
    return $query->result();
  } 
}
?>
