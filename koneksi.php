<?php
// DETAIL KONEKSI (SESUAIKAN)
$host = "localhost"; 
$user = "root"; 
$pass = "";     
$db = "db_apotek"; // GANTI NAMA DATABASE INI

// MEMBUAT KONEKSI
$koneksi = mysqli_connect($host, $user, $pass, $db);

// CEK KONEKSI (Hentikan script jika gagal)
if (!$koneksi) {
    die("Koneksi Database Gagal: " . mysqli_connect_error());
}

mysqli_set_charset($koneksi, "utf8");
?>