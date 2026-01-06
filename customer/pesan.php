<?php
session_start();
include "../koneksi.php";

// Mengambil ID (mendukung id_obat atau id)
$id_obat = $_GET['id_obat'] ?? $_GET['id'] ?? null;

if (!$id_obat) {
    echo "<script>
            alert('ID tidak ditemukan di URL! Klik tombol pesan lagi.');
            window.location='informasi_obat.php';
          </script>";
    exit();
}

// Ambil data
$query = mysqli_query($koneksi, "SELECT * FROM tb_obat WHERE id_obat = '$id_obat'");
$obat = mysqli_fetch_assoc($query);

if (!$obat) {
    echo "<script>
            alert('Obat dengan ID $id_obat tidak ada di database!');
            window.location='informasi_obat.php';
          </script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pemesanan | MEDIVERSE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h3 class="mb-4">Form Pemesanan Obat</h3>

    <form action="proses_pesan.php" method="post">

        <!-- kirim id obat -->
        <input type="hidden" name="id_obat" value="<?= $obat['id_obat']; ?>">

        <div class="mb-3">
    <label class="form-label">Nama Obat</label>
    <input type="text" class="form-control bg-light"
           value="<?= htmlspecialchars($obat['nm_obat'] ?? $obat['nama_obat']); ?>" readonly>
    </div>

    <div class="mb-3">
    <label class="form-label">Harga</label>
    <input type="text" class="form-control bg-light"
           value="Rp <?= number_format($obat['harga'], 0, ',', '.'); ?>" readonly>
    </div>

    <div class="mb-3">
    <label class="form-label">Jumlah Pesanan</label>
    <input type="number" name="jumlah" class="form-control" min="1" value="1" required>
    </div>
        <button type="submit" class="btn btn-primary">
            Pesan Sekarang
        </button>

        <a href="informasi_obat.php" class="btn btn-secondary">
            Batal
        </a>
    </form>
</div>

</body>
</html>
