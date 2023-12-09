<?php
session_start();
require "../koneksi.php";

$queryKategori = mysqli_query($config,"SELECT * FROM kategori");
$jumlahKategori = mysqli_num_rows($queryKategori);

$queryProduk = mysqli_query($config,"SELECT * FROM produk");
$jumlahProduk = mysqli_num_rows($queryProduk);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>prettyshion HOME</title>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css">
    </head>

    <style>
        .judul{
            text-align: center;
            color: #995f6a;
        }
        .bar{
            text-align: center;
        }
        .txtadmin{
            color: #d7a7e8;
            background-color: black;
            border-radius: 10px;
        }
        .kotak{
            border: solid;
        }
        .summary-kategori{
            background-color: #a85d80;
            border-radius: 10px;
        }
        .summary-produk{
            background-color: #ab4da1;
            border-radius: 10px;
        }
        .no-decoration:hover{
            text-decoration: none;
        }
    </style>
<body background="baju.jpg">
    <?php require "navbar.php"?>
    <h2 class="judul mt-3">PRETTYSHION (Pretty Fashion)</h2>
    <div class="bar">
		<div class="container mt-5">
			<form action="produk.php">
				<input type="text" name="search" placeholder="Cari Produk">
				<input type="submit" name="cari" value="Cari Produk">
			</form>
		</div>
	</div>
    <div class="container mt-5">
        <nav aria-label="breadcrumb">
        </nav>
        <h2 class="txtadmin p-3 col-3">Welcome <?php echo $_SESSION['username']; ?>.</h2>

        <div class="container mt-5"></div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mb-3">
                <div class="summary-kategori p-3">
                    <div class="row">
                        <div class="col-6">
                        <i class="fas fa-store fa-8x text-black-50"></i>
                        </div>
                        <div class="col-6 text-white">
                            <h3 class="fs-2">Kategori</h3>
                            <p class="fs-4"><?php echo $jumlahKategori; ?> Kategori</p>
                            <p><a href="kategori.php" class="text-white no-decoration">Lihat Detail</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-3">
            <div class="summary-produk p-3">
                <div class="row">
                    <div class="col-6">
                    <i class="fas fa-cart-plus fa-8x text-black-50"></i>
                    </div>
                    <div class="col-6 text-white">
                        <h3 class="fs-2">Produk</h3>
                        <p class="fs-4"><?php echo $jumlahProduk; ?> Produk</p>
                        <p><a href="produk.php" class="text-white no-decoration">Lihat Detail</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../fontawesome/js/all.min.js"></script>
</body>
</html>