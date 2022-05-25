<?php
    include_once("konfigurasi.php");
    $cnn = mysqli_connect(HOST,USER,PWD,DBNAME) or die ("Tidak bisa koneksi ke database");
    // echo ("Berhasil koneksi ke database");
