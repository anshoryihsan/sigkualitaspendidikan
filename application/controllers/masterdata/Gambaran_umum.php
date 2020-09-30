<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 */
class Gambaran_umum extends CI_Controller {

  function __construct()  {
    parent::__construct();
    //Panggil Model
    $this->load->model('masterdata/Mgambaran_umum');
  }
  function index()  {
    $this->load->helper('url');
    $segmen3 = $this->uri->segment(3);
    $data["tajar"] = $this->Mgambaran_umum->getresults();

    
    $thn = $this->input->post('thajar');
    $bntkdidik = $this->input->post('bdidikan');
    
    #caridata
    $data["isi"] = $this->Mgambaran_umum->cari($thn,$bntkdidik);
    #satuanpendidikan
    $data["totsatuanpendidikan"] = $this->Mgambaran_umum->totsatuanpendidikan();
    $data["satuanpendidikan"] = $this->Mgambaran_umum->satuanpendidikan();
    //$this->db->trans_start();
    #PesertadidikJKkelompokagama
    $data["totpdidikagama"] = $this->Mgambaran_umum->totpdidikagama();
    $data["pdidikagama"] = $this->Mgambaran_umum->pdidikagama();

    $data["totstpegawai"] = $this->Mgambaran_umum->totstpegawai();
    $data["stpegawai"] = $this->Mgambaran_umum->stpegawai();

    $data["totjnsptk"] = $this->Mgambaran_umum->totjnsptk();
    $data["jnsptk"] = $this->Mgambaran_umum->jnsptk();
    $this->load->view('masterdata/header');
    //$this->load->view('masterdata/vhome');
    $this->load->view('masterdata/vGambaran_umum',$data);
    $this->load->view('masterdata/footer');
    //print_r($data1);
  }
}
?>
