
<!-- breadcrumbs -->
<div class="container">
    <ul id="breadcrumbs">
      <?php foreach ($prasarana as $row):?>
      <li><a href="<?php echo base_url();?>index.php/upt/home"><i class="icsw16-home"></i></a></li>
      <li><a href="javascript:history.back();">Kelola Profil Sekolah</i></a></li>
      <li><a href="#">Data Profil Sekolah</i></a></li>
      <li><a href="<?php echo base_url();?>index.php/upt/Prasarana/detailprasarana?idnss=<?php echo $row->id_skolah; ?>">Data Peseta Didik</i></a></li>
      <li><span>Tambah prasarana...</span></li>
    <?php endforeach; ?>
    </ul>
</div>
<!-- main content -->
<div class="container">
  <div class="row-fluid">
    <div class="span12">
      <div class="w-box w-box-blue">
        <div class="w-box-header">
          <h4>Tambah Prasarana</h4>
          <i class="icsw16-settings icsw16-white pull-right"></i>
        </div>
        <div class="w-box-content cnt_a">
          <div class="row-fluid">
            <form id="validate_field_types" data-toggle="validator" action="<?php echo base_url(). 'index.php/upt/Prasarana/createPrasarana'; ?>" method="post" >
            <div class="span6">
              <div class="formSep">
                <label for="s_mailer">Jenis Prasarna</label><br>
                  <input type="text" class="form-control span8" name="jenis_prasarana" pattern="^[_A-Z a-z]{1,}$" maxlength="25" />
              </div>
              <div class="formSep">
                <label for="s_mailer">Nama</label><br>
                  <input type="text" class="form-control span8" name="nama" pattern="^[_A-Z a-z]{1,}$" maxlength="25"/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Panjang</label><br>
                  <input type="text" class="form-control span8" name="panjang" pattern="^[_0-9]{1,}$" maxlength="5"/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Lebar</label><br>
                  <input type="text" class="form-control span8" name="lebar" pattern="^[_0-9]{1,}$" maxlength="5"/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Status Kepemilikan</label><br>
                  <input type="text" class="form-control span8" name="status_kepemilikan" pattern="^[_A-Z a-z]{1,}$" maxlength="20"/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Penutup Atap</label><br>
                  <input type="text" class="form-control span8" name="penutup_atap" pattern="^[_a-z A-Z]{1,}$" maxlength="20"/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Rangka Atap</label><br>
                  <input type="text" class="form-control span8" name="rangka_atap" pattern="^[_A-Z a-z 0-9]{1,}$" maxlength="20"/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Lisplang Talang</label><br>
                  <input type="text" class="form-control span8" name="lisplang_talang" pattern="^[_A-Z a-z 0-9]{1,}$" maxlength="20"/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Rangka Plafon</label><br>
                  <input type="text" class="form-control span8" name="rangka_plafon" pattern="^[_A-Z a-z 0-9]{1,}$" maxlength="20"/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Penutup Plafon</label><br>
                  <input type="text" class="form-control span8" name="penutup_plafon" pattern="^[a-z A-Z]{1,}$" maxlength="20"/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Cat Plafon</label><br>
                  <input type="text" class="form-control span8" name="cat_plafon" pattern="^[_a-z A-Z]{1,}$" maxlength="20"/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Kolom Ring Balok</label><br>
                  <input type="text" class="form-control span8" name="kolom_ringbalok" pattern="^[_A-Z a-z 0-9]{1,}$" maxlength="20" />
              </div>
            </div>
            <div class="span6">
              <div class="formSep">
                <label for="s_mailer">Bata Dinding</label><br>
                  <input type="text" class="form-control span8" name="bata_dinding" pattern="^[_A-Z a-z]{1,}$" maxlength="20" />
              </div>
              <div class="formSep">
                <label for="s_mailer">Cat Dinding</label><br>
                  <input type="text" class="form-control span8" name="cat_dinding" pattern="^[_A-Z a-z]{1,}$" maxlength="20" />
              </div>
              <div class="formSep">
                <label for="s_mailer">Kusen</label><br>
                  <input type="text" class="form-control span8" name="kusen" pattern="^[_A-Z a-z]{1,}$" maxlength="20" />
              </div>
              <div class="formSep">
                <label for="s_mailer">Daun Pintu</label><br>
                  <input type="text" class="form-control span8" name="daun_pintu" pattern="^[_A-Z a-z]{1,}$" maxlength="20"/>
              </div>
              <div class="formSep">
                <label for="s_mailer">Daun Jendela</label><br>
                  <input type="text" class="form-control span8" name="daun_jendela" pattern="^[_A-Z a-z]{1,}$" maxlength="20" />
              </div>
              <div class="formSep">
                <label for="s_mailer">Struktur Bawah</label><br>
                  <input type="text" class="form-control span8" name="struktur_bawah" pattern="^[_A-Z a-z]{1,}$" maxlength="20" />
              </div>
              <div class="formSep">
                <label for="s_mailer">Penutup Lantai</label><br>
                  <input type="text" class="form-control span8" name="penutup_lantai" pattern="^[_A-Z a-z]{1,}$" maxlength="20" />
              </div>
              <div class="formSep">
                <label for="s_mailer">Pondasi</label><br>
                  <input type="text" class="form-control span8" name="pondasi" pattern="^[_A-Z a-z]{1,}$" maxlength="20" />
              </div>
              <div class="formSep">
                <label for="s_mailer">Sloop</label><br>
                  <input type="text" class="form-control span8" name="sloop" pattern="^[_A-Z a-z]{1,}$" maxlength="20" />
              </div>
              <div class="formSep">
                <label for="s_mailer">Listrik</label><br>
                  <input type="text" class="form-control span8" name="listrik" pattern="^[_A-Z a-z 0-9]{1,}$" maxlength="20"  />
              </div>
              <div class="formSep">
                <label for="s_mailer">Air Hujan Rambatan</label><br>
                  <input type="text" class="form-control span8" name="air_hujan_rambatan" pattern="^[_A-Z a-z]{1,}$" maxlength="20"  />
                <?php foreach ($prasarana as $row): ?>
                  <input type="hidden" name="id_skolah" value="<?php echo $row->id_skolah; ?>">
                  <input type="hidden" name="th_ajaran" value="<?php echo $row->th_ajaran; ?>">
                <?php endforeach; ?>
              </div>
            </div>

          </div>
        </div>
        <div class="w-box-footer">
          <div class="f-center">
              <button class="btn btn-beoro-3">Save</button>
            </form>
              <button class="btn btn-link"><a href="javascript:history.back()">Cancel</a></button>
          </div>
      </div>
      </div>
    </div>
  </div>
</div>
  <div class="footer_space"></div>
</div>
