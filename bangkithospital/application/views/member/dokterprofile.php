<section id="doctors" class="doctors">

<div class="row">
            <div class="col-md-3 malis">
              <div class="">
              <div class="member-info">
                <br>
              </div>
              <img src="<?php echo base_url('assets/dokter/' . $dokter->gambar); ?>" class="img-fluid">
              </div>
            </div>

            <div class="col-md-4 mt-4">
            <div class="member d-flex align-items-start">
              
              <div class="member-info">
                <h4><?php echo $dokter->nama_dokter; ?></h4>
                        <span><?php echo $dokter->spesialis; ?></span><br>
                <br />
                <h6><strong>Riwayat Akademik</strong></h6>
                <p>
                    <?php echo $dokter->alumni_dokter; ?>
                  </p>
                          <br>
                <h6><strong>Informasi Lainnya</strong></h6>
                <p></p><?php echo $dokter->nama_dokter; ?>, berpengalaman <?php echo $dokter->pengalaman_dokter; ?> tahun dalam bekerja profesional.</p>
                <p><b>Harga yang tertera merupakan biaya konsultasi dokter, belum termasuk tindakan lain dan biaya admin dari RS.</b></p>
              </div>
            </div>
          </div>

   

          <div class="col-md-5 mt-4">
            <div class="member d-flex align-items-start">
              <div class="container py-9 py-lg-11 position-relative z-index-1">
    <div class="row">
    <h5><b>Setelah membuat janji temu , Kami akan menghubungi anda lewat whatsapp </b></h5>
    <form action="<?php echo site_url('main/save_temujanji'); ?>" method="post">
        <div class="mb-3">
            <input type="text" class="form-control" id="id_member" name="id_member" value="<?php echo $id_member; ?>" hidden>
        </div>

        <div class="mb-3">
            <input type="text" class="form-control" id="id_dokter" name="id_dokter" value="<?php echo $dokter->id_dokter; ?>" hidden>
        </div>

        <div class="mb-3">
            <label for="id_hari" class="form-label">Nomor Handphone Anda - whatsapp
            </label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo $user->nohp_member; ?>">
        </div>

        <div class="mb-3">
        <label for="tanggal" class="form-label">Pilih Hari dan Tanggal<p><small>*Hari untuk konsultasi yang tersedia cuma Senin, Rabu, Jumat</small></p></label>
        <input type="date" class="form-control" id="tanggal" name="tanggal" min="<?php echo date('Y-m-d'); ?>" max="<?php echo date('Y-m-d', strtotime('+2 weeks')); ?>" required pattern="(Monday|Wednesday|Friday)">
        <?php if ($this->session->flashdata('error')): ?>
                        <div class="alert alert-danger m-2 text-center" role="alert">
                            <?php echo $this->session->flashdata('error'); ?>
                        </div>
          <?php endif; ?> 
        </div>

        <div class="mb-3">
            <label for="id_sesi" class="form-label">Pilih Sesi</label>
            <select class="form-control" id="id_sesi" name="id_sesi">
            <option value="Pagi - 08.00">Pagi - 08.00</option>
            <option value="Siang - 13.00">Siang - 13.00</option>
            <option value="Sore - 16.00">Sore - 16.00</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="keluhan" class="form-label">Keluhan</label>
            <textarea class="form-control" id="keluhan" name="keluhan" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <input type="text" class="form-control" id="harga" name="harga" value="250000" hidden>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>




        
    </div>
            </div>
          </div>

          
        </div>



        
      </div>
    </section>