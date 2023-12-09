<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Form Edit Profil</span></h2>
    </div>
    <div class="row px-xl-5">
        <div class="col-lg-7 mb-5">
            <div class="contact-form">
                <div id="success"></div>
                <form class="form-horizontal" method="post" action="<?php echo site_url('profile/update'); ?>">
                    <div class="control-group">
                        <input type="hidden" class="form-control" name="id" placeholder="Id" value="<?php echo $profile->idKonsumen; ?>"  required="required" data-validation-required-message="Please enter your password" />
                        <p class="help-block text-danger"></p>
                    </div> 
                    <div class="control-group">
                    <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $profile->username; ?>" required="required" data-validation-required-message="Please enter your username" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                    <label for="namaKonsumen">Nama Konsumen</label>
                        <input type="text" class="form-control" name="namaKonsumen" placeholder="Full Name" value="<?php echo $profile->namaKonsumen; ?>" required="required" data-validation-required-message="Please enter your full name" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                    <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Address" value="<?php echo $profile->alamat; ?>" required="required" data-validation-required-message="Please enter your address" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                    <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $profile->email; ?>" required="required" data-validation-required-message="Please enter your email" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                    <label for="tlpn">Telephone</label>
                        <input type="text" class="form-control" name="tlpn" placeholder="Telephone" value="<?php echo $profile->tlpn; ?>" required="required" data-validation-required-message="Please enter your telephone number" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                            <button type="submit" class="btn btn-danger">Simpan</button>
                            <a href="<?php echo site_url('profile'); ?>" class="btn btn-warning">Batal</a>
                        </div>
                </form>
            </div>
        </div>

    </div>
</div>