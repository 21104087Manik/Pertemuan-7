<?php
    /*
    untuk membuat database
    1. koneksi ke server mysql
    2. buat sql untuk ciptakan database
        CREATE DATABASE namadb;
    3. execute/jalankan intruksi pembuatan database
    4. cek status 
    */
    include_once("koneksidb.php");
    $sql = "CREATE DATABASE mahasisiwa;";
    $hsl = mysqli_query($cnn,$sql);
    if($hsl){
        echo "pembuatan database berhasil";
    }else{
        echo "gagal membuat";
    }
    mysqli_close($cnn);