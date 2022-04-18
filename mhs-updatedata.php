<?php
    /**
     * 1. buka koneksi ke DBMS dan buka database mahasiswa
     * 2. buat query untuk delete data
     * 3. execute query
     * 4. cek status
     * 5. tutup koneksi
     */
include_once("dbkoneksi2.php");
$namabaru = "siapa?";
$nim = "12312323";

$sql = "UPDATE tbl SET NAMA='$namabaru'WHERE NIM='nim';";

$hsl = mysqli_query($cnn, $sql);

if($hsl){
    echo"pengubahan data sukses<br>";
}else{
    echo"terjadi masalah saat mengubah data<br>";
}
mysqli_close($cnn);