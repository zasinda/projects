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
    <title>prettyshion Produk</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css">
</head>

<style>
    .no-decoration:hover{
            text-decoration: none;
        }

        form div{
            margin-bottom: 10px;
        }
</style>

<body background="tanaman.jpg">
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
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="produk.php" class="no-decoration text-muted"><i class="fas fa-box"></i> Produk</a>
                </li>
            </ol>
        </nav>
        <a href="tambahproduk.php" class="btn btn-primary">Tambah Produk</a>
        <div class="mt-5"></div>
        <h2>List Produk</h2>

        <div class="table-responsive mt-3">
        <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                        <th>tanggal</th>
                    </tr>
                </thead>
        <tbody>
            <?php
                if($jmlpdk==0){
                    ?>
                    <tr>
                        <td colspan=6 class="text-center">Data Produk tidak tersedia</td>
                    </tr>
                    <?php
                }
                else{
                    $jml = 1;
                    while($data=mysqli_fetch_array($sedia)){
                        ?>
                        <tr>
                            <td><?php echo $jml; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['nama_kategori']; ?></td>
                            <td><?php echo $data['harga']; ?></td>
                            <td><?php echo $data['stok']; ?></td>
                            <td><a href="../images<?php echo $data['foto'] ?>" target="_blank"> <img src="../images/<?php echo $data['foto'] ?>" width="180px"> </a></td>
                            <td>
                                <a href="produkedit.php?z=<?php echo $data['id']?>"
                                    class="btn btn-info">Edit dan Hapus</a>
                                </td>
                                <td><?php echo $data['tanggal_masuk']; ?></td>
                        </tr>
                        <?php
                        $jml++;
                    }
                }
            ?>
        </tbody>
            </table>
        </div>
        
    </div>

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../fontawesome/js/all.min.js"></script>
</body>
</html>