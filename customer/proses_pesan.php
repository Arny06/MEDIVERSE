<?php
session_start();
include "../koneksi.php";

// 1. CEK LOGIN
if (!isset($_SESSION['status'])) {
    echo "<script>
            alert('Silakan login terlebih dahulu!');
            window.location='../login.php';
          </script>";
    exit();
}

// 2. Ambil data dari form
$id_obat_form = $_POST['id_obat'] ?? ''; // Gunakan nama unik
$jumlah_beli  = $_POST['jumlah'] ?? 0;

// 3. Validasi input (Minimal beli 1)
if (empty($id_obat_form) || $jumlah_beli < 1) {
    echo "<script>
            alert('Data tidak valid atau jumlah minimal adalah 1!');
            window.location='informasi_obat.php';
          </script>";
    exit();
}

// 4. Ambil data pelanggan dari session
$id_pelanggan_session = $_SESSION['id_pelanggan'] ?? null;

if (!$id_pelanggan_session) {
    die("Error: ID Pelanggan tidak ditemukan dalam session. Silakan logout dan login kembali.");
}

// 5. Cek data obat di database
$query_obat = mysqli_query($koneksi, "SELECT * FROM tb_obat WHERE id_obat='$id_obat_form'");
$data_obat  = mysqli_fetch_assoc($query_obat);

if (!$data_obat) {
    die("Obat tidak ditemukan di database.");
}

// 6. Hitung total
$total_harga = $data_obat['harga'] * $jumlah_beli;
$tanggal     = date('Y-m-d H:i:s');

// 7. Simpan pesanan
// Masukkan variabel yang benar ke kolom yang benar
$insert = mysqli_query($koneksi, "
    INSERT INTO tb_pesanan (id_pelanggan, id_obat, jumlah, total_harga, tanggal) 
    VALUES ('$id_pelanggan_session', '$id_obat_form', '$jumlah_beli', '$total_harga', '$tanggal')
");

if ($insert) {
    echo "<script>
            alert('Pesanan berhasil disimpan!');
            window.location='../index.php';
          </script>";
} else {
    echo "Gagal menyimpan pesanan: " . mysqli_error($koneksi);
}
?>