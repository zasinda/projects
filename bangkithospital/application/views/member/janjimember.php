<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<section>
        
        <h2 class="display-6 text-center mb-4">Janji Saya</h2>
    <div class="container py-3">
      <main>
        <div class="row row-cols-1 row-cols-md-3 mb-3">
            <?php foreach ($temujanji as $janji): ?>
          <div class="col">
            <div class="card mb-4 col-10 rounded-3 shadow-sm">
              <div class="card-header py-3 text-white bg-primary border-primary">
                <h4 class="my-0 fw-normal"><?php echo $janji->nama_dokter; ?></h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">Rp. 150.000</h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li><?php echo date('l, d F Y', strtotime($janji->tanggal)); ?></li>
                  <li><?php echo $janji->sesi; ?></li>
                  <li>Gedung Mawar, Lt.2, Ruang 2.B</li>
                </ul>
                <button type="button" class="w-100 btn btn-lg btn-outline-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Batal</button>
              </div>
            </div>
          </div>
          <div class="col">
            <h2></h2>
          </div>
          <?php endforeach; ?>
        </div>
    
        
        </div>
      </main>
    </div>
    
        </section>

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <?php foreach ($temujanji as $j): ?>
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Batalkan Janji</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        Anda akan membatalkan janji dengan <?php echo $j->nama_dokter; ?>
        <br> pada <?php echo date('d F Y', strtotime($j->tanggal)); ?> <?php echo $j->sesi; ?>. Biaya tidak bisa di refund.
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
        <a href="<?php echo site_url('main/cancel_temujanji/' . $j->id_temujanji); ?>"><button type="button" class="btn btn-danger">Ya, Batalkan</button></a>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</div>