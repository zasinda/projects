<?php
session_start();
require "../koneksi.php";

$id = $_GET['z'];
$query = mysqli_query($config, "SELECT * FROM kategori WHERE id='$id'");
$data = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kategori</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <?php require "navbar.php";?>

    <div class="container">

    <h2>Detail Kategori</h2>

   <div class="col-12 col-md-6">
   <form action="" method="post">
    <div>
        <label for="kategori">Kategori</label>
        <input type="text" name="kategori" id="kategori" class="form-control" value="<?php echo $data['nama'];?>">
    </div>
    <div class="mt-3 d-flex justify-content-between">
        <button type="submit" class="btn btn-primary" name="edit">EDIT</button>
        <button type="submit" class="btn btn-danger" name="delete">Hapus</button>
    </div>
    </form>
    <?php
        if(isset($_POST['edit'])){
            $kategori = htmlspecialchars($_POST['kategori']);

            if($data['nama']==$kategori){
                ?>
                <meta http-equiv="refresh" content="1; url=kategori.php" />
                <?php   
            }
            else{
                $query = mysqli_query($config, "SELECT * FROM kategori WHERE nama='$kategori'");
                $data = mysqli_fetch_array($query);

                if($data > 0){
                    ?>
                    <div class="alert alert-warning mt-3" role="alert">
                        Maaf, Kategori sudah ada.
                    </div>
                    <?php
                }
                else{
                    $simpan = mysqli_query($config, "UPDATE kategori SET nama='$kategori' WHERE id='$id'");
                    $Hitung = mysqli_num_rows($Cek);

                    if($Hitung>0){
                        ?>
                            <div class="alert alert-warning mt-3" role="alert">
                                Kategori sudah ada. Jadi, tidak dapat dihapus.
                            </div>
                        <?php
                    }

                    if($simpan){
                        ?>
                        <div class="alert alert-primary mt-3" role="alert">
                        Selamat, anda berhasil di-Update.
                        </div>

                        <meta http-equiv="refresh" content="1; url=kategori.php" />
                        <?php
                    }
                    else{
                        echo mysqli_error($config);
                    }
                }
            }
        }
        if(isset($_POST['delete'])){
            $Cek = mysqli_query($config,"SELECT * FROM produk WHERE kategori_id='$id'");

            $Hapus = mysqli_query($config, "DELETE FROM kategori WHERE id='$id'");

            if($Hapus){
                ?>
                <div class="alert alert-primary mt-3" role="alert">
                        Selamat, Data kategori berhasil terhapus.
                        </div>
                        <meta http-equiv="refresh" content="1; url=kategori.php" />
                <?php
            }
            else{
                echo mysqli_error($config);
            }
        }
    ?>
   </div>
    </div>
   <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>