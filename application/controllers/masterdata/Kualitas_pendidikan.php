<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 */
class Kualitas_pendidikan extends CI_Controller {

  function __construct()  {
    parent::__construct();
    //Panggil Model
    $this->load->model('masterdata/MKualitas_pendidikan');
  }
  function index()  {
    $this->load->helper('url');
    $segmen3 = $this->uri->segment(3);
    $data["tajar"] = $this->MKualitas_pendidikan->getresults();

    $data["kualitas"] = $this->MKualitas_pendidikan->Kualitassd();

    $thn = $this->input->post('thajar');
    $bntkdidik = $this->input->post('bdidikan');
    
    #caridata
    $data["isi"] = $this->MKualitas_pendidikan->cari($thn,$bntkdidik);

    $data["tahunajaran"] = $thn;
    $data["bentukpendidikan"] = $bntkdidik;

    $this->load->view('masterdata/header');
    $this->load->view('masterdata/v_kualitas_pendidikan',$data);
    $this->load->view('masterdata/footer');
    //print_r($data1);
    //var_dump($data);
  }
  function cariKualitas()
  {
    $data["tajar"] = $this->MKualitas_pendidikan->getresults();
    $thn = $this->input->post('thajar');
    $bntkdidik = $this->input->post('bdidikan');
    
    #caridata
    $data["isi"] = $this->MKualitas_pendidikan->cari($thn,$bntkdidik);

    #carikualitas
    if ($bntkdidik=="SD") {
      $data["kualitas"] = $this->MKualitas_pendidikan->Kualitassd();
    } else {
      $data["kualitas"] = $this->MKualitas_pendidikan->Kualitassmp();
    }

    $data["tahunajaran"] = $thn;
    $data["bentukpendidikan"] = $bntkdidik;

    $this->load->view('masterdata/header');
    $this->load->view('masterdata/v_kualitas_pendidikan',$data);
    $this->load->view('masterdata/footer');
  }
}
?>