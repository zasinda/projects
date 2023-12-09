<section style="background-color: #eee">
    <div class="container">
        <h2>Profil Pengguna</h2>
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <i class="bx bx-user" ></i>
                        <h5 class="my-3"><?php echo $user->nama_lengkap; ?></h5>
                        <p class="text-muted mb-1">ID Pasien : <?php echo $user->nik_member; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <form method="post" action="<?php echo site_url('main/update_profile'); ?>">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Nama Lengkap</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="nama_lengkap" class="form-control" value="<?php echo $user->nama_lengkap; ?>" />
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="email" name="email_member" class="form-control" value="<?php echo $user->email_member; ?>" />
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">No Handphone</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="nohp_member" class="form-control" value="<?php echo $user->nohp_member; ?>" />
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Alamat</p>
                                </div>
                                <div class="col-sm-9">
                                    <textarea name="alamat_member" class="form-control"><?php echo $user->alamat_member; ?></textarea>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">NIK</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="nik_member" class="form-control" value="<?php echo $user->nik_member; ?>" />
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Jenis Kelamin</p>
                                </div>
                                <div class="col-sm-9">
                                    <select name="jk_member" class="form-control">
                                        <option value="Laki-laki" <?php if($user->jk_member === 'Laki-laki') echo 'selected'; ?>>Laki-laki</option>
                                        <option value="Perempuan" <?php if($user->jk_member === 'Perempuan') echo 'selected'; ?>>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary">Update Profil</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6"></div>
                </div>
            </div>
        </div>
    </div>
</section>
