<?php
session_start();
include "../koneksi.php"; // ../ karena berada di folder customer

// Cegah akses jika belum login
if (!isset($_SESSION['status']) || $_SESSION['status'] != 'login') {
    header("Location: login.php"); // tetap di folder customer
    exit();
}

$id_pelanggan = $_SESSION['id_pelanggan'];

// Ambil data pelanggan
$query_pelanggan = mysqli_query($koneksi, "SELECT * FROM tb_pelanggan WHERE id_pelanggan='$id_pelanggan'");
$pelanggan = mysqli_fetch_assoc($query_pelanggan);

// Ambil riwayat pesanan
$query_pesanan = mysqli_query($koneksi, "
    SELECT p.id_pesanan, o.nm_obat, p.jumlah, p.total_harga, p.tanggal
    FROM tb_pesanan p
    JOIN tb_obat o ON p.id_obat = o.id_obat
    WHERE p.id_pelanggan='$id_pelanggan'
    ORDER BY p.tanggal DESC
");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - MEDIVERSE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Profil Saya</h2>
<div class="card mb-4">
    <div class="card-body">
        <p><strong>Nama:</strong> <?= htmlspecialchars($pelanggan['nm_pelanggan'] ?? '-') ?></p>
        <p><strong>ID Pelanggan:</strong> <?= htmlspecialchars($pelanggan['id_pelanggan'] ?? '-') ?></p>
        <!-- Password biasanya tidak ditampilkan -->
    </div>
</div>


    <h3>Riwayat Pesanan</h3>
    <?php if(mysqli_num_rows($query_pesanan) > 0): ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Obat</th>
                    <th>Jumlah</th>
                    <th>Total Harga</th>
                    <th>Tanggal Pesan</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; while($pesanan = mysqli_fetch_assoc($query_pesanan)): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= htmlspecialchars($pesanan['nm_obat']) ?></td>
                    <td><?= $pesanan['jumlah'] ?></td>
                    <td>Rp <?= number_format($pesanan['total_harga'], 0, ',', '.') ?></td>
                    <td><?= date('d M Y H:i', strtotime($pesanan['tanggal'])) ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Belum ada pesanan.</p>
    <?php endif; ?>

    <a href="../index.php" class="btn btn-primary mt-3">Kembali ke Beranda</a> <!-- ../ karena folder customer -->
</div>
</body>
</html>
