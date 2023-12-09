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
          <a href="index.html">Bangkit Hospital</a>
        </h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="<?php echo base_url('assets/img/logo.png');?>" alt="" class="img-fluid"></a>-->
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

    <section>
      <div class="container col-lg-3">
        <h2>Masuk</h2>
        <form action="<?php echo site_url('adminpanel/login');?>" method="post">
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
<?php echo form_error('username', '<div class="text-danger">', '</div>'); ?>

        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <?php echo form_error('password', '<div class="text-danger">', '</div>'); ?> <!--Menampilkan pesan error-->

        <div class="row">
            <div class="col-12">
            <?php if ($this->session->flashdata('error')): ?> <!--Menampilkan pesan error-->
                      <div class="alert alert-danger">
                        <?php echo $this->session->flashdata('error'); ?>
                      </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      </div>
    </section>

    <div id="preloader"></div>
    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url('assets/vendor/purecounter/purecounter_vanilla.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/glightbox/js/glightbox.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/php-email-form/validate.js');?>"></script>
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
    <script src="js/plugins.js"></script>
    <script src="js/script.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url('assets/js/main.js');?>"></script>
  </body>
</html>
