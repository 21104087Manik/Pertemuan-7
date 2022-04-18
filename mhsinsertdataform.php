<?php
if(isset($_POST['txNIM'])){
    include_once("dbkoneksi2.php");
$nim=$_POST['txNIM'];
$nama=$_POST['txNAMA'];
$jur=$_POST['txJUR'];
$jk=$_POST['txJK'];
$talag=$_POST['txTALAG'];
$passcode=$_POST['txPASSCODE'];

$sql="INSERT INTO mhs(NIM, NAMA, JURUSAN, JK, TGLLAHIR, PASSCODE)
    values ('$nim','$nama', '$jur','$jk','$talag','$passcode')"

    $hsl=mysqli_query($cnn,$sql);
    if($hsl){
        echo"insert Data sukses<br>";
    }else{
        echo"Insert data gagal<br>";
    }
}else{
    header("location: mhs-insertdata.php");
}