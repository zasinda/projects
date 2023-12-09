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
                    <form action="<?php echo base_url('index.php/main/saveregister');?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="form-group">
                            <label for="inputPassword4">nama</label>
                            <input type="text" class="form-control" name="namaKonsumen" placeholder="nama">
                            </div>
                            <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                            <label for="inputUsername">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                            <label for="inputPassword">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                            <label for="inputAddress">alamat</label>
                            <input type="text" class="form-control" name="alamat" placeholder="alamat">
                            </div>
                            <div class="form-group">
                            <label for="inputPassword4">No Hp</label>
                            <input type="text" class="form-control" name="tlpn" placeholder="Telepon">
                            </div>
                        <div class="form-group">
                            <label for="inputAddress2"></label>
                            <input type="hidden" class="form-control" name="statusAktif" value="Y">
                        </div>
                        <button type="submit" class="btn btn-primary py-2 px-4">Sign Up</button>
                </form>
                </div>
            </div>
        </div>
    </div>