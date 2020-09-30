<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 */
class home extends CI_Controller {

  function __construct()  {
    parent::__construct();
    //Panggil Model
    $this->load->model('masterdata/mhome');
  }
  function index()  {
    $this->load->helper('url');
    $segmen3 = $this->uri->segment(3);
    $data["tajar"] = $this->mhome->getresults();

    
    $thn = $this->input->post('thajar');
    $bntkdidik = $this->input->post('bdidikan');
    
    #caridata
    $data["isi"] = $this->mhome->cari($thn,$bntkdidik);

    $this->load->view('masterdata/header');
    
    $this->load->view('masterdata/Maphome',$data);
    $this->load->view('masterdata/footer');
    //print_r($bntkdidik);
  }
  function cariMap(){
    $this->load->helper('url');
    $segmen3 = $this->uri->segment(3);
    $data["tajar"] = $this->mhome->getresults();

    $thn = $this->input->post('thajar');
    $bntkdidik = $this->input->post('bdidikan');

    #caridata
   
    
    if ($bntkdidik=="SD") {
      $this->mhome->cari($thn,$bntkdidik);
      $this->load->view('masterdata/header');
      $this->load->view('masterdata/mapSD',$data);
      $this->load->view('masterdata/footer');
    }elseif($bntkdidik="SMP"){
      $this->mhome->cari($thn,$bntkdidik);
      $this->load->view('masterdata/header');
      $this->load->view('masterdata/mapSMP',$data);
      $this->load->view('masterdata/footer');
    }
    
    //   $data["isi"] = $this->mhome->cari($thn,$bntkdidik);
    // $this->load->view('masterdata/header');
    // $this->load->view('masterdata/mapSD',$data);
    // $this->load->view('masterdata/footer');
    
    
  }
}


?>
