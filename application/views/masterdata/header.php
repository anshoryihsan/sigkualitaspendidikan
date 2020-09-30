<?php
  $user_level = $this->session->userdata('level');
  $namauser = $this->session->userdata('nama');
  $status = $this->session->userdata('login_status');
  if($user_level!="Bag. Program" && $status!==false){
    redirect(base_url());
  }
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="utf-8">
	<title>SISTEM INFORMASI PROFIL PENDIDIKAN</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- common stylesheets-->
	<!--bootstrap css-->
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap-responsive.min.css')?>">
	<!-- iconSweet2 icon pack (16x16) -->
	<link rel="stylesheet" href="<?php echo base_url('assets/img/icsw2_16/icsw2_16.css')?>">
	<!-- splashy icon pack -->
	<link rel="stylesheet" href="<?php echo base_url('assets/img/splashy/splashy.css')?>">
	<!-- flag icons -->
	<link rel="stylesheet" href="<?php echo base_url('assets/img/flags/flags.css')?>">
	<!-- power tooltips -->
	<link rel="stylesheet" href="<?php echo base_url('assets/js/lib/powertip/jquery.powertip.css')?>">
	<!-- google web fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Abel">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300">
	<!-- sticky notifications -->
	<link rel="stylesheet" href="<?php echo base_url('assets/js/lib/sticky/sticky.css')?>">
	<!-- tree plugin -->
	<link rel="stylesheet" href="<?php echo base_url('assets/js/lib/dynatree/skin/ui.dynatree.css')?>">
	<!-- aditional stylesheets -->
	<!-- 2 col multiselect -->
	<link rel="stylesheet" href="<?php echo base_url('assets/js/lib/multi-select/css/multi-select.css')?>">
	<!-- enchanced select box, tag handler -->
	<link rel="stylesheet" href="<?php echo base_url('assets/js/lib/select2/select2.css')?>">
	<!-- datatables -->
	<link rel="stylesheet" href="<?php echo base_url('assets/datatables/jquery.dataTables_themeroller.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/datatables/datatables.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/datatables/fixedheader/css/fixedHeader.bootstrap.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/datatables/fixedheader/css/fixedHeader.bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/datatables/fixedcolumns/css/fixedColumns.bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/datatables/responsive/css/responsive.dataTables.min.css')?>">
	<!-- main stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/beoro.css')?>">
	<!--leaflet-->
	<link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/0.4.0/MarkerCluster.css" />
    <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/0.4.0/MarkerCluster.Default.css" />

	<link rel="stylesheet" href="<?php echo base_url('assets/css/st.css')?>">

	<link rel="stylesheet" type="text/css" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />
    
	<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css')?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
	
    <script type='text/javascript' src='http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js'></script>
	<script src="<?php echo base_url('assets/leaflet-ajax/dist/leaflet.ajax.js')?>"></script>
	<script src="<?php echo base_url('assets/leaflet-ajax/dist/leaflet.ajax.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/jquery-3.1.1.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/jquery-3.1.11.js')?>"></script>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/Control.FullScreen.css')?>" />
	<script src="<?php echo base_url('assets/js/Control.FullScreen.js')?>"></script>
	<script src="<?php echo base_url('assets/js/leaflet.markercluster-src.js')?>"></script>
	<script type='text/javascript' src='http://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/0.4.0/leaflet.markercluster.js'></script>


<body class="bg_d">
	<!-- main wrapper (without footer) -->
	<div class="main-wrapper">
		<!-- top bar -->
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<div id="fade-menu">
						<ul class="clearfix" id="mobile-nav">
							<li>
								<a href="<?php echo site_url(); ?>/masterdata/home">Home</a>
							</li>
							<li>
								<a href="javascript:void(0)">Data Profil Sekolah</a>
								<ul>
									<li><a href="<?php echo site_url(); ?>/masterdata/Identitas_sekolah" class="ptip_s" title="Data Sekolah Dasar">Sekolah
											Dasar</a></li>
									<li><a href="<?php echo site_url(); ?>/masterdata/Identitas_sekolah/datasmp" class="ptip_s" title="Data Sekolah Menengah Petama">Sekolah
											Menengah Pertama</a></li>
								</ul>
							</li>
							<li>
								<a href="<?php echo site_url(); ?>/masterdata/Gambaran_umum" class="ptip_s" title="Gambaran Umum Pendidikan">Gambaran
									Umum Pendidikan</a>
							</li>
							<li>
								<a href="<?php echo site_url(); ?>/masterdata/Kualitas_pendidikan" class="ptip_s" title="Kulitas Pendidikn">Kulitas Pendidikan</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- header -->
		<header>
			<div class="container">
				<div class="row">
					<div class="span3">
						<div class="main-logo"><a><img src="<?php echo base_url('assets/a.png') ?>" alt="Unit Pelayanan Teknis Daerah (UPTD)"></a></div>
					</div>

					<div class="span8">
						<div class="user-box">
							<div class="user-box-inner">

								<div class="user-info">
									Welcome, <strong>
										<?php echo "$namauser"; ?></strong>
									<ul class="unstyled">

										<li>&middot;</li>
										<li><a href="<?php echo site_url();?>/C_login/keluar">Logout</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
