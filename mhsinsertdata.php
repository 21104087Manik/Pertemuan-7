<?php
include_once("dbkoneksi2.php");
$nim="12312323";
$nama="komang";
$jur="MTI";
$jk="p";
$talag="1989-12-31";
$passcode="123";

$sql="INSERT INTO mhs(NIM, NAMA, JURUSAN, JK, TGLLAHIR, PASSCODE)
    values ('$nim','$nama', '$jur','$jk','$talag','$passcode')"

    $hsl=mysqli_query($cnn,$sql);
    if($hsl){
        echo"insert Data sukses<br>";
    }else{
        echo"Insert data gagal<br>";
    }