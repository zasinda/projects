<?php
session_start();
include("../koneksi.php");

$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];

$sql = "SELECT username FROM admin
        WHERE username='$username'
        AND PASSWORD='$password'";

$hasil = mysqli_query($config,$sql) or exit("Error query : <b>".$sql."</b>.");

if(mysqli_num_rows($hasil)>0){
    $data = mysqli_fetch_array($hasil);
    $_SESSION['username'] = $data['username'];
    header("Location: welcome.php");
    exit();
} else { ?>
    <h2>Maaf..</h2>
    <p>Username atau password salah. Klik <a href="login.php">disini</a> untuk kembali login. </p> <?php
}
?>