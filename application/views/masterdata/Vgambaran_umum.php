
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
<div class="container" style="width:1200px !important;">
  <div class="row-fluid blog_page">
    <div class="span2 pull-right">
      <div class="blog_content pull-left" id="n_combobox">
        <form class="" action="<?php echo base_url('index.php/masterdata/Gambaran_umum'); ?>" method="post">
        <select name="thajar" id="s2_single" class="span12" placeholder="Pilih Tahun Ajaran">
          <option  value="0">---pilih tahun ajaran---</option>
          <?php if(isset($tajar ) && is_array($tajar )){
            foreach($tajar as $key => $row)  {
              echo '<option  value="'.$row->th_ajaran.'">'.$row->th_ajaran.'</option>';
            }
          }
          ?>
        </select>
        SD : <input type="radio" name="bdidikan" value="SD">
        SMP : <input type="radio" name="bdidikan" value="SMP"> <br>
        <input type="submit" name="" class="pull-right" value="Tampilkan" >
        </form>
      </div>
    </div>
    <div class="span8">
      <div class="blog_content">
        <div class="blog_itemss">
          <?php foreach ($totsatuanpendidikan as $row): ?>
          <h1>Gambaran Umum Pendidikan <?php echo $row->bentuk_pndidikan;?> Kabupaten Bandung Barat</h1>
          <div class="toolbar clearfix">
            <span class="muted">Tahun Ajaran, <?php echo $row->th_ajaran; ?></span>
          </div>
        </div>
      </div>
    </div>
    <!--
      ##Satuan pendidikan##
    -->
    <div class="span11">
      <div class="blog_content">
        <div class="blog_items col-md-5" style="padding:0px">
            <label> Satuan Pendidikan</label>
            <table class="table table-striped table-bordered" style="width:400px; over">
              <thead>
                <tr>
                  <th rowspan="2">No</th>
                  <th rowspan="2">Wilayah</th>
                  <th>Bentuk Pendidikan</th>
                  <th colspan="2">Status Sekolah</th>
                </tr>
                <tr>
                 <th><?php echo $row->bentuk_pndidikan; ?></th>
                 <th>Swasta</th> <th>Negeri</th>
                </tr>
                <tr>
                  <th colspan="2">&nbsp; Bandung Barat</th>
                  <th><?php echo $row->pen; ?></th>
                  <th><?php echo $row->swasta; ?></th>
                  <th><?php echo $row->negeri; ?></th>
                </tr>
                <?php endforeach; ?>
              </thead>
              <tbody>
                <?php
                  $no = 0;
                  foreach ($satuanpendidikan as $row):
                    $no=$no+1;
                ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row->wil; ?></td>
                  <td><?php echo $row->pen; ?></td>
                  <td><?php echo $row->swasta; ?></td>
                  <td><?php echo $row->negeri; ?></td>
                <?php endforeach; ?>
                </tr>
              </tbody>
            </table>
        </div>
    <!--
      ##Satuan peserta didik dan agama##
    -->
        <div class="blog_items col-md-6" style="padding:0px">
            <label>Peserta Didik Menurut Jenis Kelamin dan Kelompok Agama</label>
            <?php foreach ($totpdidikagama as $row): ?>
            <table class="table table-striped table-bordered" style="max-width:400px !important; -min-width:400px !important">
              <thead>
                <tr>
                  <th rowspan="2">No</th>
                  <th rowspan="2">Wilayah</th>
                  <th colspan="3">Jenis Kelamin</th>
                  <th colspan="7">Agama</th>
                </tr>
                <tr>
                 <th>L</th> <th>P</th><th>JML</th>
                 <th>Islam</th><th>Kristen</th><th>Katolik</th><th>Hindu</th><th>Budha</th><th>Kong Hu Chu</th><th>JML</th>
                </tr>
                <tr>
                  <th colspan="2">&nbsp; bandung barat</th>
                  <th><?php echo $row->totlaki_laki; ?></th>
                  <th><?php echo $row->totprempuan; ?></th>
                  <th><?php echo $row->totkelamin; ?></th>
                  <th><?php echo $row->totislm; ?></th>
                  <th><?php echo $row->totkristen; ?></th>
                  <th><?php echo $row->totkatolik; ?></th>
                  <th><?php echo $row->tothindu; ?></th>
                  <th><?php echo $row->totbudha; ?></th>
                  <th><?php echo $row->totkonghuchu; ?></th>
                  <th><?php echo $row->totagama; ?></th>
                </tr>
                <?php endforeach; ?>
              </thead>
              <tbody>
                <?php
                  $no = 0;
                  foreach ($pdidikagama as $row):
                    $no=$no+1;
                ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row->kec; ?></td>
                  <td><?php echo $row->totlaki_laki; ?></td>
                  <td><?php echo $row->totprempuan; ?></td>
                  <td><?php echo $row->totkelamin; ?></td>
                  <td><?php echo $row->totislm; ?></td>
                  <td><?php echo $row->totkristen; ?></td>
                  <td><?php echo $row->totkatolik; ?></td>
                  <td><?php echo $row->tothindu; ?></td>
                  <td><?php echo $row->totbudha; ?></td>
                  <td><?php echo $row->totkonghuchu; ?></td>
                  <td><?php echo $row->totagama; ?></td>
                  <!--<td><?php $a = $row->jmsiswa;
                    $b = $row->konghuchu;
                    $c = $a-$b;
                    echo $c;
                  ?></td>-->
                <?php endforeach; ?>
                </tr>
              </tbody>
            </table>
        </div>

      </div>
    </div>
    <!--
      ##Setatus kepegawaian ptk
    -->
    <div class="span11">
      <div class="blog_content">
        <div class="blog_items">
          <label>Setatus Kepegawaian Pendidik dan Tenaga Kependidikan</label>
          <table class="table table-striped table-bordered">

            <thead>
              <tr>
                <th rowspan="3">No</th>
                <th rowspan="3">WILAYAH</th>
                <th colspan="8">STATUS KEPEGAWAIAN</th>
              </tr>
              <tr>
                <th colspan="4">PNS</th>
                <th colspan="3">NON PNS</th>
                <th rowspan="2">JML</th>
              </tr>
              <tr>
                <th>CPNS</th>
                <th>PNS</th>
                <th>PNS Depag</th>
                <th>PNS Diperbantukan</th>
                <th>GTY/PTY</th>
                <th>Guru Honor Sekolah</th>
                <th>Tenaga Honor Sekolah</th>
              </tr>
              <tr>
                <th colspan="2">&nbsp;bandung barat</th>
                <?php foreach ($totstpegawai as $row) : ?>
                  <th><?php echo $row->totcpns; ?></th>
                  <th><?php echo $row->totpns; ?></th>
                  <th><?php echo $row->totpnsdep; ?></th>
                  <th><?php echo $row->totpnsdip; ?></th>
                  <th><?php echo $row->totgty; ?></th>
                  <th><?php echo $row->totguru_honorer; ?></th>
                  <th><?php echo $row->tottenaga_honorer; ?></th>
                  <th><?php echo $row->totpeg; ?></th>
                <?php endforeach; ?>
              </tr>
            </thead>
            <tbody>
              <?php
                $no = 0;
                foreach ($stpegawai as $row):
                  $no=$no+1;
              ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row->kec; ?></td>
                <td><?php echo $row->totcpns; ?></td>
                <td><?php echo $row->totpns; ?></td>
                <td><?php echo $row->totpnsdep; ?></td>
                <td><?php echo $row->totpnsdip; ?></td>
                <td><?php echo $row->totgty; ?></td>
                <td><?php echo $row->totguru_honorer; ?></td>
                <td><?php echo $row->tottenaga_honorer; ?></td>
                <td><?php echo $row->totpeg; ?></td>
              <?php endforeach; ?>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!--
      ##jenis ptk
    -->
    <div class="span11">
      <div class="blog_content">
        <div class="blog_items">
          <label>Jenis Pendidik dan Tenaga Kependidikan</label>
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th rowspan="2">No</th>
                <th rowspan="2">WILAYAH</th>
                <th colspan="8">JENIS PTK</th>
              </tr>
              <tr>
                <th>GURU BK</th>
                <th>GURU KELAS</th>
                <th>GURU MAPEL</th>
                <th>Tenaga Administrasi Sekolah</th>
                <th>Tenaga Perpustakaan</th>
                <th>Penjaga Sekolah</th>
                <th>Pesuruh/Office Boy</th>
                <th>JML</th>
              </tr>
              <tr>
                <th colspan="2">&nbsp;Bandung Barat</th>
                <?php foreach ($totjnsptk as $row) : ?>
                  <th><?php echo $row->totgbk; ?></th>
                  <th><?php echo $row->totgkls; ?></th>
                  <th><?php echo $row->totgmapel; ?></th>
                  <th><?php echo $row->tottas; ?></th>
                  <th><?php echo $row->totperpus; ?></th>
                  <th><?php echo $row->totpenjaga; ?></th>
                  <th><?php echo $row->totob; ?></th>
                  <th><?php echo $row->totptk; ?></th>
                <?php endforeach; ?>
              </tr>
            </thead>
            <tbody>
              <?php
                $no = 0;
                foreach ($jnsptk as $row):
                  $no=$no+1;
              ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row->kec; ?></td>
                <td><?php echo $row->totgbk; ?></td>
                <td><?php echo $row->totgkls; ?></td>
                <td><?php echo $row->totgmapel; ?></td>
                <td><?php echo $row->tottas; ?></td>
                <td><?php echo $row->totperpus; ?></td>
                <td><?php echo $row->totpenjaga; ?></td>
                <td><?php echo $row->totob; ?></td>
                <td><?php echo $row->totptk; ?></td>
              <?php endforeach; ?>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<div class="footer_space"></div>
</div>
