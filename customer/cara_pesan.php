<?php
session_start();
include "../koneksi.php";  // path sudah sesuai
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Cara Pemesanan | MEDIVERSE</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 90%;
            max-width: 800px;
            margin: 30px auto;
            background: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #0d6efd;
            margin-bottom: 25px;
        }
        ol {
            padding-left: 20px;
        }
        li {
            margin-bottom: 15px;
            line-height: 1.6;
        }
        .btn {
            display: inline-block;
            text-decoration: none;
            background-color: #0d6efd;
            color: #fff;
            padding: 10px 20px;
            border-radius: 6px;
            margin-top: 20px;
            transition: 0.3s;
        }
        .btn:hover {
            background-color: #0b5ed7;
        }
        footer {
            text-align: center;
            margin-top: 30px;
            color: #555;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Cara Pemesanan Obat</h2>
    <ol>
        <li><strong>Pilih Obat:</strong> Telusuri daftar obat yang tersedia dan pilih obat yang ingin dibeli.</li>
        <li><strong>Masukkan ke Keranjang:</strong> Tambahkan obat yang dipilih ke keranjang belanja.</li>
        <li><strong>Isi Data Pemesanan:</strong> Masukkan informasi pribadi, alamat pengiriman, dan jumlah obat yang dipesan.</li>
        <li><strong>Pilih Metode Pembayaran:</strong> Pilih metode pembayaran, misal transfer bank atau COD.</li>
        <li><strong>Konfirmasi Pesanan:</strong> Periksa kembali data pemesanan, lalu klik tombol konfirmasi untuk menyelesaikan pemesanan.</li>
        <li><strong>Proses Pengiriman:</strong> Tim kami akan memproses pesanan dan mengirimkan obat ke alamat Anda.</li>
    </ol>

    <!-- Tombol kembali ke beranda -->
<a href="../index.php" class="btn btn-primary mt-3">Kembali ke Beranda</a>

</div>

<footer>
    <p>© 2025 MEDIVERSE. Semua Hak Dilindungi.</p>
</footer>

</body>
</html>
