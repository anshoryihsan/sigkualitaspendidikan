
<!-- breadcrumbs -->
<div class="container">
  <ul id="breadcrumbs">
    <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
    <!--<li><a href="#">Data Sekolah</i></a></li>
    <li><a href="#">Profil Sekolah</i></a></li>
    <li><span>Data peserta didik...</span></li>-->
  </ul>
</div>
<!-- main content -->
<div class="container">
  <div class="row-fluid">
    <div class="span12">
      <div class="w-box w-box-blue">
        <div class="w-box-header">
          <h4>Kualitas Pendidikan <?php echo $bentukpendidikan;?>, Tahun Ajaran <?php echo $tahunajaran; ?></h4>
          <form class="pull-right" action="<?php echo base_url('index.php/masterdata/Kualitas_pendidikan/cariKualitas'); ?>" method="post">
            <select class="text-muted" size="1" name="thajar" id="s2_single" placeholder="Tahun Ajaran" >
              <option value="">Tahun Ajaran</option>
              <?php if(isset($tajar ) && is_array($tajar )){
                foreach($tajar as $key => $row) {
                  echo '<option  value="'.$row->th_ajaran.'">'.$row->th_ajaran.'</option>';
                }
              }?>
            </select>
            <select class="text-muted" size="1" name="bdidikan" id="s2_single" placeholder="Bentuk Pendidikan">
              <option value="">Bentuk Pendidikan</option>
              <option value="SD">SD</option>
              <option value="SMP">SMP</option>
            </select>
            <button type="submit" class="btn btn-sm">Cari</button>
          </form>
        </div>        
        <div class="w-box-content">
<!--start kualitas pendidikan -->
          <div class="row-fluid"> <!--rowfluid start-->
            <table class="table table-striped" data-provides="rowlink">
            <thead>
                <tr>
                  <th>No</th>
                  <th>Wilayah</th>
                  <th>APK</th>
                  <th>APM</th>
                  <th>%GBM</th><!--PERSENTASE GURU LAYAK-->
                  <th>R-S/G</th><!--RASIO SISWA/GURU-->
                </tr>
            </thead>
            <tbody> 
              <?php 
                $no=0; 
                foreach ($kualitas as $row) : $no=$no+1; ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row->kecamatan; ?></t>
                  <td><?php echo $row->apk; ?></td>
                  <td><?php echo $row->apm; ?></td>
                  <td><?php echo $row->pgbm; ?></td>
                  <td><?php echo $row->rasiosiswaperguru; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
          </div><!--rowfluid end-->
<!--end kualitas pendidikan -->
<!----------info START--------------------------------------->
          <div class="w-box-content cnt_a invoice_preview">
          <div class="row-fluid cnt_a invoice_preview"> <!--rowfluid start-->
            <div class="span12">
              <div class="inv_notes">
                <label class="label badge-inverse">Info</label>
                <ul class="list_a">
                  <li>
                    <p class="text-info"> APK dan APM digunakan untuk mengukur keberhsilan program pembangunan pendidikan yg diselenggarakan dalam rangka memperluas kesempatan bagi penduduk untuk mengenyam pendidikan</p>
                    <p class="text-info"> APK (Angka Partisispasi Kasar) : APK>=100 menandakan banyak populasi murid ang bersekolah disuatu jenjang pendidikan, mencakup anak diluar batas usia sekolah pada jenjang pendidian.</p>
                    <p class="text-info"> APM (Angka Partisispasi Murni) : APM>=90.5 menandakan anak usia sekolah yang bersekolah tepat waktu</p>
                  </li>
                  <li>
                    <p class="text-info"> %GBM : Persentase guru yang berwenang mengajar. </p>
                  </li>
                  <li>
                    <p class="text-info"> R-S/G : Perbandingan antra jumlah siswa atau warga belajar dengan jumlah guru pada. </p>
                  </li>
                </ul>
                
              </div>
            </div>
            </div> <!--rowfluid start-->
            </div>
<!-----------info END-------------------------------------------------------------------------------------->   
      </div>
    </div>
  </div>
</div>





<div class="footer_space"></div>
</div>