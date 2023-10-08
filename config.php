<?php

//buat koneksi
$koneksi = mysqli_connect("localhost","root","","db_sekolah");

// cek koneksi
//if(mysqli_connect_errno()){
    echo "Gagal koneksi ke database";
//} else {
 //   echo "berhasil koneksi";
    
//}

//url induk
$main_url = "http://localhost/sekolah/";
?>