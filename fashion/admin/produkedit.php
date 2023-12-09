<?php
session_start();
require "../koneksi.php";

$id = $_GET['z'];
$query = mysqli_query($config, "SELECT a.*, b.nama AS nama_kategori FROM produk a JOIN kategori b ON a.kategori_id=b.id WHERE a.id='$id'");
$data = mysqli_fetch_array($query);
$pilihkategori = mysqli_query($config, "SELECT * FROM kategori");

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
    <title>Edit Produk</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<style>
     form div{
            margin-bottom: 10px;
        }
</style>
<body>
    <?php require "navbar.php";?>

    <div class="container">
        <h2>Edit Kategori</h2>
        <div class="col-12 col-md-6">
        <form action="" method="post" enctype="multipart/form-data">
            <div>
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" value="<?php echo $data['nama']?>" class="form-control" required>  
            </div>
            <div>
                <label for="kategori">Kategori</label>
                    <select name="kategori" id="kategori" class="form-control" required>
                        <option value="<?php echo $data['kategori_id'];?>"><?php echo $data['nama_kategori'];?></option>
                        <?php
                            while($dataKategori=mysqli_fetch_array($pilihkategori)){
                                ?>
                                    <option value="<?php echo $dataKategori['id'] ?>"><?php echo $dataKategori['nama'] ?></option>
                                <?php
                            }
                        ?>
                    </select>
                </div>
                <div>
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" class="form-control" value="<?php echo $data['harga'];?>">
                </div>
                <div>
                    <label for="gambar">Pilih Foto</label>
                    <input type="file" name="gambar" id="gambar" class="form-control">
                </div>
                <div>
                    <p>Foto Produk</p>
                    <label for="fotosekarang"></label>
                    <img src="../images/<?php echo $data['foto'] ?>" alt="" width="400px">
                </div>
                <div>
                    <label for="detail">Detail</label>
                    <textarea name="detail" id="detail" cols="30" rows="10" class="form-control"><?php echo $data['detail'];?></textarea>
                </div>
                <div>
                    <label for="stok">Stok</label>
                    <select name="stok" id="stok" class="form-control">
                        <option value="<?php echo $data['stok'];?>"><?php echo $data['stok']?></option>
                        <?php
                        if($data['stok']=='tersedia'){
                            ?>
                            <option value="habis">Habis</option>
                            <?php
                        }
                        else{
                            ?>
                                <option value="tersedia">Tersedia</option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary" name="update">Perbaharui</button>
                    <button type="submit" class="btn btn-danger" name="hapus">Delete</button>
                </div>
            </form>
        <?php
            if(isset($_POST['simpan'])){
                $nama = htmlspecialchars($_POST['nama']);
                $kategori = htmlspecialchars($_POST['kategori']);
                $harga = htmlspecialchars($_POST['harga']);
                $detail = htmlspecialchars($_POST['detail']);
                $ketersediaanstok = htmlspecialchars($_POST['stok']);

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
                    $update = mysqliquery($config, "UPDATE produk SET kategori_id='$kategori', nama='$nama', harga='$harga', detail='$detail', stok='$stok' WHERE id=$id");

                    if($file !=''){
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

                                $update = mysqli_query($config, "UPDATE produk SET foto='$baru' WHERE id='$id'");

                                if($update){
                                    ?>
                                    <div class="alert alert-primary mt-3" role="alert">
                                        Produk berhasil ter-Update.
                                    </div>
    
                                    <meta http-equiv="refresh" content="2; url=produkedit.php"/>
                                <?php 
                                }
                                else{
                                    echo mysqli_error($config);
                                }
                            }
                        }
                    }
                }
            }
            if(isset($_POST['hapus'])){
                $delete = mysqli_query($config, "DELETE FROM produk WHERE id='$id'");

                if($delete){
                    ?>
                        <div class="alert alert-primary mt-3" role="alert">
                            Selamat, Data produk berhasil terhapus.
                        </div>
                            <meta http-equiv="refresh" content="1; url=produk.php" />
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