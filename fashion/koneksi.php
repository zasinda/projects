<?php
    $config = mysqli_connect("localhost","root","","fashion_2162");

    if(!$config){
        die('Gagal terhubung ke MySQLi :'.mysqli_connect_error());
    }
?>