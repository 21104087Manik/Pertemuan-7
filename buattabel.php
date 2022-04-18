<?php
include_once("koneksidb.php");
$sql = "CREATE TABLE mhs(
    NIM Varchar(8) PRIMARY KEY,
    NAMA Varchar(50),
    JURUSAN Varchar(20),
    PASCODE Varchar(10)
);";
$hsl = mysqli_query($cnn,$sql);
if($hsl){
    echo "Pembuatan Tabel Berhasil";
}else{
    echo "Pembuatan Tabel GAagal";
}