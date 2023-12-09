
<!DOCTYPE html>
<html lang="en">
    <head> 
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
  <link href="https://cdn.datatables.net/v/dt/dt-1.13.5/datatables.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/img/favicon.png');?>" rel="icon">
  <link href="<?php echo base_url('assets/img/apple-touch-icon.png');?>" rel="apple-touch-icon">
  <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/datatables.min.css');?>" rel="stylesheet">
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .mx-auto {
            width: 1100px;
        }

        .card {
            margin-top: 100px;
        }
    </style>
      <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
</head>

<body>
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
    <div class="p-3">
        <br>
        <br>
        <br>
 <!-- untuk mengeluarkan data -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content" width="75%" >
        <h3>Data Janji Temu</h3>
        <table id="tabel-data" class="table table-striped table-bordered" cellspacing="0">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Dokter</th>
            <th scope="col">Nama Member</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Sesi</th>
            <th scope="col">Keluhan</th>
            <th scope="col">Hapus</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $no = 1;
    foreach ($temujanji as $janji): ?>
    <tr>
        <th scope="row"><?php echo $no?></th>
        <td><?php echo $janji->nama_dokter; ?></td>
        <td><?php echo $janji->nama_lengkap; ?></td> <!-- Menampilkan Nama Member -->
        <td><?php echo date('d F Y', strtotime($janji->tanggal)); ?></td>
        <td><?php echo $janji->sesi; ?></td>
        <td><?php echo $janji->keluhan; ?></td>
        <td>
            <a href="<?php echo site_url('temujanji/delete/'.$janji->id_temujanji); ?>" class="btn btn-secondary">Selesai</a>
        </td>
    </tr>
    <?php $no++;
    endforeach; ?>
</tbody>

</table>


          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 footer-contact">
          <h3>Bangkit Hospital</h3>
          <p>
            Jl. Ring Road utara <br />
            Condongcatur, Sleman<br />
            DI Yogyakarta <br /><br />
            <strong>Telp:</strong> +62 888 222 44 53<br />
            <strong>Email:</strong> rsbangkit@amidok.ac.id<br />
          </p>
        </div>

        <div class="col-lg-2 col-md-6 footer-links">
          <h4>Link</h4>
          <ul>
            <li>
              <i class="bx bx-chevron-right"></i>
              <a href="<?php echo site_url('adminpanel/index');?>">Beranda</a>
            </li>
            <li>
              <i class="bx bx-chevron-right"></i>
              <a href="#">Tentang</a>
            </li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Layanan</a></li>
            <li>
              <i class="bx bx-chevron-right"></i>
              <a href="spesialis.html">Spesialis</a>
            </li>
            <li>
              <i class="bx bx-chevron-right"></i>
              <a href="dokter.html">Dokter</a>
            </li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Layanan Kami</h4>
          <ul>
            <li>
              <i class="bx bx-chevron-right"></i>
              <a href="spesialis.html">Buat Janji</a>
            </li>
            <li>
              <i class="bx bx-chevron-right"></i>
              <a href="#">Toko Kesehatan</a>
            </li>
            <li>
              <i class="bx bx-chevron-right"></i>
              <a href="janji.html">Lihat Janji Saya</a>
            </li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4>Tim Kami</h4>
          <p>Ibnu Arbianto Pratama | 21.12.2143</p>
          <p>Dzaka Zhilal Haqqa | 21.12.2146</p>
          <p>Abdi Maulana | 21.12.2160</p>
          <p>Zasinda Yasmine A.T.B | 21.12.2162</p>
          <p>Maysi Margianti | 21.12.2210</p>
        </div>
      </div>
    </div>
  </div>
</footer>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('assets/vendor/purecounter/purecounter_vanilla.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/glightbox/js/glightbox.min.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/php-email-form/validate.js');?>"></script>
  <script src="https://cdn.datatables.net/v/dt/dt-1.13.5/datatables.min.js"></script>
  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets/js/main.js');?>"></script>
  <script src="<?php echo base_url('assets/js/datatables.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/jquery-3.7.0.js');?>"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/v/dt/dt-1.13.5/datatables.min.js"></script>
  <script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
    </script>
</body>

</html>