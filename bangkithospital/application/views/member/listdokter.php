<section id="doctors" class="doctors">
    <div class="container">
        <div class="section-title">
            <h2>Dokter</h2>
            <p>
                Pilih dokter yang paling anda senangi. <br />
                Walau begitu, seluruh dokter di Bangkit Hospital memiliki nilai rating yang sangat baik
                dan pengalaman profesional lebih dari 10 tahun.
            </p>
        </div>

        <div class="row">
            <?php foreach ($dokter as $d) { ?>
            <div class="col-md-4 mt-4">
                <div class="member d-flex align-items-start">
                    <div class="pic">
                    <img src="<?php echo base_url('assets/dokter/' . $d->gambar );?>" class="img-fluid">
                    </div>
                    <div class="member-info">
                        <h4><?php echo $d->nama_dokter; ?></h4>
                        <span><?php echo $d->spesialis; ?></span>
                        <br />
                        <h5><strong>Rp. 150.000</strong></h5>
                        <div>
                        <a href="<?php echo site_url('main/detail_data_dokter/' . $d->id_dokter); ?>" class="btn-get-started scrollto">Buat Janji</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

