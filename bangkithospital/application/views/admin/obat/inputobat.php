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
            width: 800px;
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
                Database Obat
            </div>
            <div class="card-body">
               
            <form action="<?php echo site_url('obat/save');?>" method="POST">
                    <div class="mb-3 row">
                        <label for="nim" class="col-sm-2 col-form-label">Nama Obat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Nama_obat" name="Nama_obat">
                        </div>
                    </div>
                    
                
                    <div class="mb-3 row">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Deskripsi_obat" name="Deskripsi_obat" >
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Harga_obat" name="Harga_obat" >
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Stok" name="Stok" >
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="stok" class="col-sm-2 col-form-label">Manufaktur</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Manufaktur" name="Manufaktur" >
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
        <h3>Data Obat</h3>
                <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Obat</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Manufaktur</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
    <?php 
    $no = 1;
    foreach ($obat as $val) { ?>
        <tr>
            <th scope="row"><?php echo $no?></th>
            <td><?php echo $val->Nama_obat; ?></td>
            <td><?php echo $val->Deskripsi_obat; ?></td>
            <td><?php echo $val->Harga_obat; ?></td>
            <td><?php echo $val->Stok; ?></td>
            <td><?php echo $val->Manufaktur; ?></td>
            <td> 
                <div class="btn-group" role="group" aria-label="Basic Example">
                    <a href="<?php echo site_url('obat/get_by_id/'.$val->id_obat);?>" class="btn btn-warning m-1">Edit</a>
                    <a href="<?php echo site_url('obat/delete/'.$val->id_obat);?>" onclick="return confirm('Yakin Akan Hapus Data Ini?')" class="btn btn-danger m-1">Hapus</a>
                </div>
            </td>
        </tr>
        <?php $no++; 
    } ?>
</tbody>

            </table>
            <!-- /.card -->

            
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