<?php
    session_start();
    require "../koneksi.php";

    $sedia = mysqli_query($config, "SELECT a.*, b.nama AS nama_kategori FROM produk a JOIN kategori b ON a.kategori_id=b.id");
    $jmlpdk = mysqli_num_rows($sedia);

    $kategori = mysqli_query($config, "SELECT * FROM kategori");

    function generateRandomString($length = 10){
        $characters = '12345zyatbrdacd';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++){
            $randomString = $characters[rand(0, $charactersLength -1)];
        }
        return $randomString;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRETTYSHION TAMBAH PRODUK</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css">
</head>
<body background="tanaman.jpg">
<?php require "navbar.php"?>
    <div class="container mt-3">
    <div class="my-5 col-12 col-md-6">
            <h3>Tambah Produk</h3>

            <form action="" method="post" enctype="multipart/form-data">
                <div>
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control" required>  
                </div>
                <div>
                    <label for="kategori">Kategori</label>
                    <select name="kategori" id="kategori" class="form-control" required>
                        <option value="">Silahkan Pilih</option>
                        <?php
                            while($data=mysqli_fetch_array($kategori)){
                                ?>
                                    <option value="<?php echo $data['id'] ?>"><?php echo $data['nama'] ?></option>
                                <?php
                            }
                        ?>
                    </select>
                </div>
                <div>
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" class="form-control">
                </div>
                <div>
                    <label for="gambar">Pilih Foto</label>
                    <input type="file" name="gambar" id="gambar" class="form-control">
                </div>
                <div>
                    <label for="detail">Detail</label>
                    <textarea name="detail" id="detail" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div>
                    <label for="stok">Stok</label>
                    <select name="stok" id="stok" class="form-control">
                        <option value="tersedia">Tersedia</option>
                        <option value="habis">Habis</option>
                    </select>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                </div>
            </form>

            <?php
                if(isset($_POST['simpan'])){
                    $nama = htmlspecialchars($_POST['nama']);
                    $kategori = htmlspecialchars($_POST['kategori']);
                    $harga = htmlspecialchars($_POST['harga']);
                    $detail = htmlspecialchars($_POST['detail']);
                    $stok = htmlspecialchars($_POST['stok']);

                    $target_dir = "../images/"; 
                    $file = basename($_FILES["gambar"]["name"]);
                    $target_file = $target_dir . $file;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    $image_size = $_FILES["gambar"]["size"];
                    $random_name = generateRandomString(20);
                    $baru = $random_name . "." . $imageFileType;


                    if($nama=='' || $kategori=='' || $harga=''){
                        ?>
                    <div class="alert alert-warning mt-3" role="alert">
                        Nama, kategori dan harga wajib isi.
                    </div>
                    <?php
                    }
                    else{
                        if($file!=''){
                            if($image_size > 900000){
                                ?>
                                 <div class="alert alert-warning mt-3" role="alert">
                                     Tidak boleh lebih dari 900kb.
                                </div>
                                <?php
                            }
                            else{
                                if($imageFileType != 'jpg' && $imageFileType != 'png'){
                                    ?>
                                    <div class="alert alert-warning mt-3" role="alert">
                                        Foto yang diupload bukan tipe jpg atau png.
                                    </div>
                                    <?php
                                }
                                else{
                                    move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_dir . $baru);
                                }
                            }
                        }

                        $Tambah = mysqli_query($config, "INSERT INTO produk (kategori_id, nama, harga, foto, detail, stok) VALUES ('$kategori', '$nama', '$harga', '$baru', '$detail', '$stok')");

                        if($Tambah){
                            ?>
                                <div class="alert alert-primary mt-3" role="alert">
                                    Produk berhasil disimpan.
                                </div>

                                <meta http-equiv="refresh" content="2; url=produk.php"/>
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