
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
                Database Dokter
            </div>
            <div class="card-body">
               
            <form action="<?php echo site_url('dokter/save');?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3 row">
                        <label for="nim" class="col-sm-2 col-form-label">Nama dokter</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Nama_dokter" name="Nama_dokter" >
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                            <label for="dokter" class="col-sm-2 col-form-label">Spesialis Dokter</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="id_spesialis" id="id_spesialis">
                                    <?php foreach($spesialis as $spe): ?>
                                        <option value="<?php echo $spe->id_spesialis; ?>"><?php echo $spe->spesialis; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                    </div>
                
                    <div class="mb-3 row">
                        <label for="alamat_dokter" class="col-sm-2 col-form-label">Alamat Dokter</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Alamat_dokter" name="Alamat_dokter" >
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="pengalaman_dokter" class="col-sm-2 col-form-label">Pengalaman dokter</label>
                        <div class="form-outline col-sm-10">
                            <input min="1" max="50" type="number" id="Pengalaman_dokter" name="Pengalaman_dokter" class="form-control" />
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="alumni_dokter" class="col-sm-2 col-form-label">Alumni dokter</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Alumni_dokter" name="Alumni_dokter" >
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="gambar" name="gambar" >
                        </div>
                    </div>

                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>

 <!-- untuk mengeluarkan data -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
        <h3>Data dokter</h3>
                <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama_Dokter</th>
                        <th scope="col">Spesialis_dokter</th>
                        <th scope="col">Alamat_dokter</th>
                        <th scope="col">Pengalaman_dokter</th>
                        <th scope="col">Alumni_dokter</th>
                        <th scope="col">gambar</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
$no = 1;
foreach ($dokter as $val) { ?>
    <tr>
        <th scope="row"><?php echo $no?></th>
        <td><?php echo $val->nama_dokter; ?></td>
        <td><?php echo $val->spesialis; ?></td>
        <td><?php echo $val->alamat_dokter; ?></td>
        <td><?php echo $val->pengalaman_dokter; ?> Tahun</td>
        <td><?php echo $val->alumni_dokter; ?></td>
        <td><img src="<?php echo base_url('assets/dokter/' . $val->gambar );?>" width="150" height="110"></td>
        <td>
            <div class="btn-group" role="group" aria-label="Basic Example">
                <a href="<?php echo site_url('dokter/edit/'.$val->id_dokter);?>" class="btn btn-warning m-1">Edit</a>
                <a href="<?php echo site_url('dokter/delete/'.$val->id_dokter);?>" onclick="return confirm('Yakin Akan Hapus Data Ini?')" class="btn btn-danger m-1">Hapus</a>
            </div>
        </td>
    </tr>
<?php $no++;
} ?>
</tbody>

            </table>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
</body>

</html>