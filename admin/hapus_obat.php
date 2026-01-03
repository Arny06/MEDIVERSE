<?php
session_start();
include "../koneksi.php";

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    header("Location: ../login_admin.php");
    exit;
}

$id_obat = $_GET['id_obat'] ?? '';

if ($id_obat == '') {
    echo "<script>alert('ID tidak valid'); window.location='informasi_obat.php';</script>";
    exit;
}

mysqli_query($koneksi, "DELETE FROM tb_obat WHERE id_obat='$id_obat'");

echo "<script>
    alert('Data obat berhasil dihapus');
    window.location='informasi_obat.php';
</script>";
