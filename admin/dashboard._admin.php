<?php
session_start();
include "../koneksi.php";

if (!isset($_SESSION['status']) || $_SESSION['role'] != 'admin') {
    header("location:login.php");
    exit;
}

$jml_obat = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tb_obat"));
?>

<h2>Dashboard Admin</h2>
<p>Total Obat: <?= $jml_obat ?></p>

<a href="obat-list.php">Kelola Obat</a>
