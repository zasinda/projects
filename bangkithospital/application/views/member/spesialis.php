<section id="doctors" class="doctors">
      <div class="container">
        <div class="section-title">
          <h2>Pilih Dokter</h2>
          <p>
            Pilih Dokter yang tersedia sesuai kebutuhan Anda.
          </p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="member d-flex align-items-start">
                <div class="member-info">
                    <h4>Anak - Sp.A</h4>
                    <?php
                    $dokter_by_spesialis = $this->Madmin->count_dokter_by_spesialis();
                    foreach ($dokter_by_spesialis as $dokter) {
                        if ($dokter->id_spesialis == '1') {
                            echo '<span>' . $dokter->jumlah_dokter . ' Dokter</span>';
                        }
                    }
                    ?>
                    <p>
                        Spesialis Anaak adalah dokter yang memiliki fokus pada kesehatan fisik, mental, dan emosional anak usia 0–18 tahun.
                    </p>
                    <div>
                        <br>
                        <a href="<?php echo site_url('main/listdokter_by_spesialis/1'); ?>" class="btn-get-started scrollto">Lihat Dokter</a>
                    </div>
                </div>
            </div>
          </div>


          <div class="col-lg-4">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4>Bedah - Sp.B</h4>
                <?php
                    $dokter_by_spesialis = $this->Madmin->count_dokter_by_spesialis();
                    foreach ($dokter_by_spesialis as $dokter) {
                        if ($dokter->id_spesialis == '2') {
                            echo '<span>' . $dokter->jumlah_dokter . ' Dokter</span>';
                        }
                    }
                    ?>
                <p>
                  Spesialis Bedah adalah dokter spesialis yang mengobati penyakit, cedera, atau kondisi gawat darurat pada tubuh melalui metode bedah.
                <div>
                  <br>
                  <a href="<?php echo site_url('main/listdokter_by_spesialis/2'); ?>" class="btn-get-started scrollto">Lihat Dokter</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h6><b>Jantung dan Pembulu Darah - Sp.JP</b></h6>
                <?php
                    $dokter_by_spesialis = $this->Madmin->count_dokter_by_spesialis();
                    foreach ($dokter_by_spesialis as $dokter) {
                        if ($dokter->id_spesialis == '3') {
                            echo '<span>' . $dokter->jumlah_dokter . ' Dokter</span>';
                        }
                    }
                    ?>
                <p>
                  Spesialis Jantung dan Pembulu Darah adalah dokter yang fokus dalam masalah penyakit yang berkaitan dengan jantung dan pembuluh darah.
                </p>
                <div>
                  <br>
                  <a href="<?php echo site_url('main/listdokter_by_spesialis/3'); ?>" class="btn-get-started scrollto">Lihat Dokter</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4>Penyakit Dalam - Sp.PD</h4>
                <?php
                    $dokter_by_spesialis = $this->Madmin->count_dokter_by_spesialis();
                    foreach ($dokter_by_spesialis as $dokter) {
                        if ($dokter->id_spesialis == '4') {
                            echo '<span>' . $dokter->jumlah_dokter . ' Dokter</span>';
                        }
                    }
                    ?>
                <p>
                  Spesialis Penyakit Dalam adalah dokter spesialis yang menangani berbagai keluhan, gejala, dan masalah kesehatan terkait hampir seluruh sistem organ dalam tubuh pada pasien dewasa dan lansia. Keahlian dan kompetensinya dalam menangani penyakit terkait sistem organ dalam ini tidak dapat ditangani oleh dokter umum.
                </p>
                <div>
                  <br>
                  <a href="<?php echo site_url('main/listdokter_by_spesialis/4'); ?>" class="btn-get-started scrollto">Lihat Dokter</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4>Kulit dan Kelamin - Sp.KK</h4>
                <?php
                    $dokter_by_spesialis = $this->Madmin->count_dokter_by_spesialis();
                    foreach ($dokter_by_spesialis as $dokter) {
                        if ($dokter->id_spesialis == '5') {
                            echo '<span>' . $dokter->jumlah_dokter . ' Dokter</span>';
                        }
                    }
                    ?>
                <p>
                  Spesialis Kulit dan Kelamin adalah dokter yang fokus menangani beragam masalah kesehatan kulit dan kelamin, baik pada pria maupun wanita. Tugas dokter spesialis kulit dan kelamin adalah mendiagnosa dan memberikan penanganan sesuai dengan keluhan yang Anda rasakan. Segera berobat
                </p>
                <div>
                  <br>
                  <a href="<?php echo site_url('main/listdokter_by_spesialis/5'); ?>" class="btn-get-started scrollto">Lihat Dokter</a>
                </div>
              </div>
            </div>
          </div>  
          
          <div class="col-lg-4">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4>Umum</h4>
                <?php
                    $dokter_by_spesialis = $this->Madmin->count_dokter_by_spesialis();
                    foreach ($dokter_by_spesialis as $dokter) {
                        if ($dokter->id_spesialis == '6') {
                            echo '<span>' . $dokter->jumlah_dokter . ' Dokter</span>';
                        }
                    }
                    ?>
                <p>
                  Dokter Umum Adalah seorang dokter yang berfokus untuk menangani gejala dan penyakit pada pasien secara umum. Dokter ini juga dikenal sebagai dokter layanan tingkat pertama yang berperan dalam memberikan pencegahan, diagnosis, penanganan awal, dan rujukan ke dokter spesialis jika diperlukan
                </p>
                <div>
                  <br>
                  <a href="<?php echo site_url('main/listdokter_by_spesialis/6'); ?>" class="btn-get-started scrollto">Lihat Dokter</a>
                </div>
              </div>
            </div>
          </div>

          
          </div>
        </div>
      </div>
    </section>