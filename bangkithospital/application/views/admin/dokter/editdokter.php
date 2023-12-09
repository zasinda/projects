<!DOCTYPE html>
<html lang="en">
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

<head>
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
    
</head>

<body>
    <div class="mx-auto">
    <!-- untuk memasukkan data -->
    <div class="card">
            <div class="card-header">
                Database dokter
            </div>
            <div class="card-body">
               
            <form action="<?php echo site_url('dokter/update/'.$dokter->id_dokter);?>" method="POST" enctype="multipart/form-data"> 
                <input type="hidden" name="id" value="<?php echo isset($dokter) ? $dokter->id_dokter : ''; ?>">
            <div class="mb-3 row">
                        
                    <div class="mb-3 row">
                        <label for="nim" class="col-sm-2 col-form-label">Nama dokter</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_dokter" name="Nama_dokter" value="<?php echo isset($dokter) ? $dokter->nama_dokter : ''; ?>">
                        </div>
                    </div>
                
                    <div class="mb-3 row">
                        <label for="alamat_dokter" class="col-sm-2 col-form-label">Alamat Dokter</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat_dokter" name="Alamat_dokter" value="<?php echo isset($dokter) ? $dokter->alamat_dokter : ''; ?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="pengalaman_dokter" class="col-sm-2 col-form-label">Pengalaman dokter</label>
                        <div class="col-sm-10">
                            <input min="1" max="50" type="number" id="Pengalaman_dokter" name="Pengalaman_dokter" class="form-control" value="<?php echo isset($dokter) ? $dokter->pengalaman_dokter : ''; ?>" />
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="alumni_dokter" class="col-sm-2 col-form-label">Alumni dokter</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alumni_dokter" name="Alumni_dokter" value="<?php echo isset($dokter) ? $dokter->alumni_dokter : ''; ?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="gambar" name="gambar" value="<?php echo isset($dokter) ? $dokter->gambar : ''; ?>">
                        </div>
                    </div>

                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>	