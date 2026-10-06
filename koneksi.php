<?php

$host = "172.0.0.1"; //nama server yang kita gunakan
$username = "root"; //username atau akun pengguna
$pass = ""; //password pengguna
//untuk database disusaikan dengan nama database kalian akan gunakan
$database = "rizki_p_spin";

//perintah untuk menghubungkan database yang kita gunakan dengan project PHP kita
$koneksi = mysqli_connect($host, $username, $pass,$database, 3306);

//untuk mengecek apakah koneksi kedatabasenya berhasil atau gagal
if (!$koneksi) {
    die("koneksi kedatabase gagal" .mysqli_connent_error());
}else{
  echo "koneksi kedatabase berhasil";
}