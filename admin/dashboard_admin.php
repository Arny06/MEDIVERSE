<?php
session_start();
include "../koneksi.php";

/* =====================
   CEK LOGIN ADMIN
===================== */
if (!isset($_SESSION['status']) || $_SESSION['status'] != 'login' || $_SESSION['role'] != 'admin') {
    header("Location: ../login_admin.php");
    exit;
}

/* =====================
   DATA RINGKAS
===================== */
$jml_obat = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tb_obat"));
$jml_kategori = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tb_kategori"));
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin - MEDIVERSE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-primary px-3">
    <span class="navbar-brand">MEDIVERSE | Admin</span>
    <a href="logout.php" class="btn btn-light btn-sm">Logout</a>
</nav>

<div class="container mt-4">
    <h4>Selamat Datang, <?= $_SESSION['nama']; ?></h4>
    <p>Dashboard Admin Apotek MEDIVERSE</p>

    <div class="row mt-4">
        <!-- KARTU OBAT -->
        <div class="col-md-4">
            <div class="card text-bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Obat</h5>
                    <h2><?= $jml_obat; ?></h2>
                </div>
            </div>
        </div>

        <!-- KARTU KATEGORI -->
        <div class="col-md-4">
            <div class="card text-bg-info mb-3">
                <div class="card-body">
                    <h5 class="card-title">Kategori</h5>
                    <h2><?= $jml_kategori; ?></h2>
                </div>
            </div>
        </div>
    </div>

    <!-- MENU -->
    <div class="mt-4">
        <a href="obat.php" class="btn btn-primary">Kelola Obat</a>
        <a href="#" class="btn btn-secondary disabled">Kelola Kategori</a>
        <a href="#" class="btn btn-secondary disabled">Laporan</a>
    </div>
</div>

</body>
</html>
