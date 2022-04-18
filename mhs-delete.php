<?php
    /**
     * 1. buka koneksi ke DBMS dan buka database mahasiswa
     * 2. buat query untuk delete data
     * 3. execute query
     * 4. cek status
     * 5. tutup koneksi
     */

     include_once("dbkoneksi2.php");
     $nim="12312323";
     $sql="DELETE FROM mhs WHERE nim='12312323';";

     $hsl= mysqli_query($cnn,$sql);
     if($hsl){
         echo"proses penghapusan sukses<br>";
     }else{
         echo "Terjadi Masalah Saat menghapus data";
     }