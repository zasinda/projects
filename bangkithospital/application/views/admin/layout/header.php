<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Medilab Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/img/favicon.png');?>" rel="icon">
  <link href="<?php echo base_url('assets/img/apple-touch-icon.png');?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/animate.css/animate.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/glightbox/css/glightbox.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/remixicon/remixicon.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.css');?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab
  * Updated: Jun 23 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <!-- ======= Header ======= -->
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">
    <h1 class="logo me-auto">
      <a href="<?php echo site_url('adminpanel/admin');?>">Bangkit Hospital</a>
    </h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo me-auto"><img src="<?php echo base_url('assets/img/logo.png');?>" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li>
          <a class="nav-link scrollto active" href="<?php echo site_url('adminpanel/admin');?>">Beranda</a>
        </li>
        <li>
          <a class="nav-link scrollto" href="#">Tentang</a>
        </li>
        <li class="dropdown">
          <a href="#"
            ><span>Layanan</span> <i class="bi bi-chevron-down"></i
          ></a>
          <ul>
            <li><a href="spesialis.html">Buat Janji</a></li>
            <li><a href="#">Toko Kesehatan</a></li>
            <li><a href="janji.html">Janji Saya</a></li>
          </ul>
        </li>
        <li>
          <a class="nav-link scrollto" href="spesialis.html">Spesialis</a>
        </li>
        <li><a class="nav-link scrollto" href="dokter.html">Dokter</a></li>

        <li><a class="nav-link scrollto" href="#footer">Kontak</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
    <!-- .navbar -->

    <a href="<?php echo site_url('adminpanel/logout');?>" class="appointment-btn scrollto"
      ><span class="d-none d-md-inline">Keluar</span></a
    >
  </div>
</header>
<!-- End Header -->


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Selamat Datang Admin</h1>
      <h2>Kelola Database Bangkit Hospital</h2>
      <a href="<?php echo site_url('adminpanel/logout');?>" class="btn-get-started scrollto">Keluar</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch mb-3">
            <div class="content">
              <h3>Kenapa Harus Bangkit Hospital?</h3>
              <p>
                Rumah sakit ini memiliki layanan kesehatan yang terjangkau, mudah diakses, dan berkualitas, seperti rawat jalan, rawat inap, UGD, dan ambulance.
              </p>
              <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch mb-3">
                  <a href="<?php echo site_url('dokter/index');?>"><div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-child"></i>
                    <h4>Data Dokter</h4>
                    <p>Database Data Dokter</p>
                  </div></a>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch mb-3">
                  <a href="<?php echo site_url('obat/index');?>"><div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-injection"></i>
                    <h4>Data Obat</h4>
                    <p>Database Data Obat</p>
                  </div></a>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch mb-3">
                  <a href="<?php echo site_url('pasien/index');?>"><div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-user"></i>
                    <h4>Database Pasien</h4>
                    <p>Database Data Pasien</p>
                  </div></a>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch mb-3">
                  <a href="<?php echo site_url('temujanji/index');?>"><div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-time"></i>
                    <h4>Data Janji Temu</h4>
                    <p>Janji Temu Dokter</p>
                  </div></a>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->