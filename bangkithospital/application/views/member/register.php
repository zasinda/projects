<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Bangkit Hospital</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="<?php echo base_url('assets/img/favicon.png');?>" rel="icon" />
    <link href="<?php echo base_url('assets/img/apple-touch-icon.png');?>" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css');?>"
      rel="stylesheet"
    />
    <link href="<?php echo base_url('assets/vendor/animate.css/animate.min.css');?>" rel="stylesheet" />
    <link
      href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>"
      rel="stylesheet"
    />
    <link
      href="<?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css');?>"
      rel="stylesheet"
    />
    <link href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css');?>" rel="stylesheet" />
    <link
      href="<?php echo base_url('assets/vendor/glightbox/css/glightbox.min.css');?>"
      rel="stylesheet"
    />
    <link href="<?php echo base_url('assets/vendor/remixicon/remixicon.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.css');?>" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Medilab
  * Updated: Jun 23 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
        <h1 class="logo me-auto">
          <a href="<?php echo site_url('');?>">Bangkit Hospital</a>
        </h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->
    <section>
    <div class="container col-lg-3">
        <h2>Registrasi</h2>
        <form action="<?php echo site_url('main/register_process');?>" method="post">
            <!-- Nama Lengkap input -->
            <div class="form-outline mb-4">
                <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" required />
            </div>

            <!-- Username input -->
            <div class="form-outline mb-4">
                <input type="text" name="usr_member" class="form-control" placeholder="Username" required />
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" name="ps_member" class="form-control" placeholder="Passoword" required />
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Daftar</button>

            <!-- Register buttons -->
            <div class="text-center">
                <p>Sudah punya akun? <a href="<?php echo site_url('main/login');?>">Masuk</a></p>
            </div>
        </form>
    </div>
    </section>

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->

    <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('assets/vendor/purecounter/purecounter_vanilla.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/glightbox/js/glightbox.min.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/php-email-form/validate.js');?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets/js/main.js');?>"></script>

</body>
</html>
