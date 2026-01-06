<?php
session_start();
include "../koneksi.php"; // pastikan file koneksi.php ada di root apotekuas/

// Ambil semua data obat
$query = mysqli_query($koneksi, "SELECT * FROM tb_obat");
if (!$query) {
    die("Query gagal: " . mysqli_error($koneksi));
}

// Fungsi aman ambil data
function safe_get($data, $key) {
    return isset($data[$key]) && $data[$key] !== '' ? htmlspecialchars($data[$key]) : 'Belum tersedia';
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Obat | MEDIVERSE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h2 class="text-center mb-4">Informasi Obat</h2>

    <?php while ($data = mysqli_fetch_assoc($query)) { ?>
        <div class="card mb-3 p-3 shadow-sm">
            <h4><?= safe_get($data, 'nm_obat'); ?></h4>
            <p><strong>Kategori:</strong> <?= safe_get($data, 'kategori'); ?></p>
            <p><strong>Deskripsi:</strong><br><?= nl2br(safe_get($data, 'deskripsi')); ?></p>
            
            <div class="d-flex gap-2 mt-3">
                <a href="pesan.php?id_obat=<?= $data['id_obat']; ?>" class="btn btn-primary">Pesan</a>

                <a href="../admin/edit_obat.php?id_obat=<?= $data['id_obat']; ?>" class="btn btn-warning">Edit</a>

                <a href="../admin/hapus_obat.php?id_obat=<?= $data['id_obat']; ?>" 
                   class="btn btn-danger" 
                   onclick="return confirm('Yakin ingin menghapus obat ini?')">Hapus</a>
            </div>
        </div>
    <?php } // PENUTUP WHILE PINDAH KE SINI ?>

    <a href="../index.php" class="btn btn-secondary mt-3">Kembali ke Beranda</a>
</div>

<footer class="text-center mt-5 py-3 bg-primary text-white">
    © <?= date('Y'); ?> MEDIVERSE
</footer>

</body>
</html>
