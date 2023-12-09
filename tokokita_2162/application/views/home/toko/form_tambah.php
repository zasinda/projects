<div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">REGISTER</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Register</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Form Register</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <?php 
				if($this->session->flashdata('error') !='')
				{
					echo '<div class="alert alert-danger" role="alert">';
					echo $this->session->flashdata('error');
					echo '</div>';
				}
				?>
                    <form action="<?php echo site_url('toko/save');?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="form-group">
                            <label for="inputPassword4">Nama Toko</label>
                            <input type="text" class="form-control" name="namaToko" placeholder="Nama Toko">
                            </div>
                            <?php echo form_error('namaToko', '<div class="text-danger">', '</div>'); ?>
                            <div class="form-group">
                            <label for="inputFile">Logo</label>
                            <input type="file" class="form-control" name="logo" placeholder="logo">
                            </div>
                            <?php echo form_error('logo', '<div class="text-danger">', '</div>'); ?>
                            <div class="form-group">
                            <label for="inputAddress">Deskripsi</label>
                            <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi">
                            </div>
                            <?php echo form_error('deskripsi', '<div class="text-danger">', '</div>'); ?>
                        <button type="submit" class="btn btn-primary py-2 px-4">Simpan</button>
                </form>
                </div>
            </div>
        </div>
    </div>