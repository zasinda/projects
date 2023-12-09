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
                Database pasien
            </div>
            <div class="card-body">
            
            
            <form action="<?php echo site_url('pasien/save');?>" method="POST">
                    <div class="mb-3 row">
                            <label for="dokter" class="col-sm-2 col-form-label">Dokter</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="id_dokter" id="dokter">
                                    <?php foreach($dokter as $dok): ?>
                                        <option value="<?php echo $dok->id_dokter; ?>"><?php echo $dok->nama_dokter; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nim" class="col-sm-2 col-form-label">nama Pasien</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_pasien" name="nama_pasien">
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="nim" class="col-sm-2 col-form-label">Jenis Kelamin Pasien</label>
                        <div class="col-sm-10">
                        <select class="form-control" id="jk_pasien" name="jk_pasien">
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                        </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="alamat_pasien" class="col-sm-2 col-form-label">Alamat Pasien</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat_pasien" name="alamat_pasien" >
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="riwayat_penyakit" class="col-sm-2 col-form-label">Riwayat Pasien</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="riwayat_penyakit" name="riwayat_penyakit" >
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nik_pasien" class="col-sm-2 col-form-label">NIK Pasien</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nik_pasien" name="nik_pasien" >
                        </div>
                    </div>
                    <div class="mb-3 row">
                    <label for="nim" class="col-sm-2 col-form-label">Jenis Kelamin Pasien</label>
                        <div class="col-sm-10">
                        <select class="form-control" id="gol_darah" name="gol_darah">
                            <option>O</option>
                            <option>A</option>
                            <option>B</option>
                            <option>AB</option>
                        </select>
                        </div>
                    </div>

                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>	
		
            <!-- /.card -->
                 <!-- untuk mengeluarkan data -->
        <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
        <h3>Data pasien</h3>

        <div class="table-responsive">
        <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">nama_pasien</th>
                        <th scope="col">Jk_pasien</th>
                        <th scope="col">alamat_pasien</th>
                        <th scope="col">riwayat_penyakit</th>
                        <th scope="col">nik_pasien</th>
                        <th scope="col">gol_darah</th>
                        <th scope="col">Dokter</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
$no = 1;
foreach ($pasien as $val) { ?>
    <tr>
        <th scope="row"><?php echo $no?></th>
        <td><?php echo $val->nama_pasien; ?></td>
        <td><?php echo $val->Jk_pasien; ?></td>
        <td><?php echo $val->alamat_pasien; ?></td>
        <td><?php echo $val->riwayat_penyakit; ?></td>
        <td><?php echo $val->nik_pasien; ?></td>
        <td><?php echo $val->gol_darah; ?></td>
        <td><?php echo $val->nama_dokter; ?></td>
        <td>
            <div class="btn-group" role="group" aria-label="Basic Example">
                <a href="<?php echo site_url('pasien/edit/'.$val->id_pasien);?>" class="btn btn-warning m-1">Edit</a>
                <a href="<?php echo site_url('pasien/delete/'.$val->id_pasien);?>" onclick="return confirm('Yakin Akan Hapus Data Ini?')" class="btn btn-danger m-1">Hapus</a>
            </div>
        </td>
    </tr>
<?php $no++;
} ?>
</tbody>

            </table>
        </div>
                
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
</body>

</html>