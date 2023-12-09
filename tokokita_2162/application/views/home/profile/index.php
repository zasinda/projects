<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Informasi Profile</h5>
                    <hr>
                    <?php if ($profile) { ?>
                        <div class="form-group">
                            <label for="username">Username :</label>
                            <input type="text" class="form-control" id="username" value="<?php echo $profile->username; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="email">Email :</label>
                            <input type="email" class="form-control" id="email" value="<?php echo $profile->email; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="namaKonsumen">Nama Konsumen :</label>
                            <input type="text" class="form-control" id="namaKonsumen" value="<?php echo $profile->namaKonsumen; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat :</label>
                            <input type="text" class="form-control" id="alamat" value="<?php echo $profile->alamat; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="telepon">Telepon :</label>
                            <input type="text" class="form-control" id="tlpn" value="<?php echo $profile->tlpn; ?>" readonly>
                        </div>
                        <a href="<?php echo site_url('profile/edit'); ?>" class="btn btn-danger">Edit Profil</a>
                        <a href="<?php echo site_url('main'); ?>" class="btn btn-warning">Kembali</a>
                    <?php } else { ?>
                        <p>Data profil tidak tersedia.</p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
