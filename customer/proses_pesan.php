<?php
session_start();
include "../koneksi.php";

// CEGAH AKSES JIKA BELUM LOGIN
if (!isset($_SESSION['status']) || $_SESSION['status'] != 'pesan') {
    header("Location: ../customer/pesan.php");
    exit();
}

// Ambil data dari form
$id_obat = $_POST['id_obat'] ?? '';
$jumlah = $_POST['jumlah'] ?? 0;

// Validasi input
if (!$id_obat || $jumlah <= 0) {
    echo "Data tidak valid.";
    exit();
}

// Ambil data obat dari database
$query = mysqli_query($koneksi, "SELECT * FROM tb_obat WHERE id_obat='$id_obat'");
$obat = mysqli_fetch_assoc($query);

if (!$obat) {
    echo "Obat tidak ditemukan.";
    exit();
}

// Hitung total harga
$total_harga = $obat['harga'] * $jumlah;

// Ambil id_pelanggan dari session
$id_pelanggan = $_SESSION['id_pelanggan'] ?? 0; // pastikan saat login sudah di-set

if ($id_pelanggan == 0) {
    echo "ID pelanggan tidak valid.";
    exit();
}

// Waktu sekarang
$tanggal = date('Y-m-d H:i:s');

// Simpan pesanan ke tabel tb_pesanan
$insert = mysqli_query($koneksi, "
    INSERT INTO tb_pesanan (id_pelanggan, id_obat, jumlah, total_harga, tanggal) 
    VALUES ('$id_pelanggan', '$id_obat', '$jumlah', '$total_harga', '$tanggal')
");

if ($insert) {
   
    echo "<script>
            alert('Pesanan berhasil!');
            window.location='../index.php';
          </script>";
} else {
    echo "Pesanan gagal: " . mysqli_error($koneksi);
}
?>
