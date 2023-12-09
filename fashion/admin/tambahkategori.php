<?php
session_start();
require "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRETTYSHION TAMBAH</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css">
</head>
<body background="model1.webp">
<?php require "navbar.php"?>
    <div class="container mt-3">
<div class="my-5 col-12 col-md-6 align">
            <h3>Tambah Kategori</h3>

            <form action="" method="post">
                <div>
                    <label for="kategori">Kategori</label>
                    <input type="text" id="kategori" name="kategori" placeholder="Input nama kategori" class="form-control align">
                </div>
                <div class="mt-3">
                    <button class="btn btn-primary" type="submit" name="simpankategori">Simpan</button>
                </div>
            </form>

           <?php
            if(isset($_POST['simpankategori'])){
                $kategori = htmlspecialchars($_POST['kategori']);

                $ada = mysqli_query($config, "SELECT nama FROM kategori WHERE nama='$kategori'");
                $jumlahkategori = mysqli_num_rows($ada);

                if($jumlahkategori > 0){
                    ?>
                    <div class="alert alert-warning mt-3" role="alert">
                        Maaf, Kategori sudah ada.
                    </div>
                    <?php
                }
                else{
                    $simpan = mysqli_query($config, "INSERT INTO kategori (nama) VALUES ('$kategori')");
                    if($simpan){
                        ?>
                        <div class="alert alert-primary mt-3" role="alert">
                        Selamat, anda berhasil menambahkan.
                        </div>

                        <meta http-equiv="refresh" content="1; url=kategori.php" />
                        <?php
                    }
                    else{
                        echo mysqli_error($config);
                    }
                }
            }
           ?>
        </div>
        </div>
    
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../fontawesome/js/all.min.js"></script>
</body>
</html>