<?php
session_start();
require "../koneksi.php";

$queryKategori = mysqli_query($config,"SELECT * FROM kategori");
$jumlahKategori = mysqli_num_rows($queryKategori);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prettyshion KATEGORI</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css">
</head>
<style>
    .align{
        text-align: right;
    }
    .no-decoration:hover{
            text-decoration: none;
        }
</style>
<body background="model1.webp">
    <?php require "navbar.php"?>
    <div class="container mt-3">
    <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="welcome.php" class="no-decoration text-muted"> <i class="fas fa-home"></i> Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="kategori.php" class="no-decoration text-muted"><i class="fas fa-align-justify"></i> Kategori</a>
                </li>
            </ol>
        </nav>
        <a href="tambahkategori.php" class="btn btn-primary">Tambah Kategori</a>

        <div class="mt-5">
            <h2>List Kategori</h2>

            <div class="table-responsive mt-3">
                <table class="table">
                  <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        if($jumlahKategori==0){
                            ?>
                                <tr>
                                    <td colspan=3 class="text-center">Data Kategori Tidak Ada</td>
                                </tr>
                            <?php
                        }
                        else{
                            $number = 1;
                            while($data=mysqli_fetch_array($queryKategori)){
                            ?>
                                <tr>
                                    <td><?php echo $number; ?></td>
                                    <td><?php echo $data['nama'];?></td>
                                    <td>
                                        <a href="kategoriedit.php?z=<?php echo $data['id']?>"
                                        class="btn btn-info">Edit dan Hapus</a>
                                    </td>
                                </tr>
                            <?php
                                $number++;
                            }
                        }
                    ?>
                  </tbody>  
                </table>
            </div>
        </div>
    </div>
    
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../fontawesome/js/all.min.js"></script>
</body>
</html>