<?php
session_start();
include "../koneksi.php";


$id = $_GET['id'] ?? null;
if (!$id) {
    die("Obat tidak ditemukan");
}

$obat = mysqli_fetch_assoc(mysqli_query(
    $koneksi,
    "SELECT * FROM tb_obat WHERE id_obat=$id"
));

if (!$obat) {
    die("Obat tidak ditemukan");
}


// ===============================
// AMBIL ID OBAT
// ===============================
$id_obat = $_GET['id'] ?? '';

if ($id_obat == '') {
    echo "<script>
            alert('Obat tidak ditemukan!');
            window.location='informasi_obat.php';
          </script>";
    exit();
}

// ===============================
// AMBIL DATA OBAT
// ===============================
$query = mysqli_query($koneksi, "SELECT * FROM tb_obat WHERE id_obat='$id_obat'");
if (!$query) {
    die("Query gagal: " . mysqli_error($koneksi));
}

$obat = mysqli_fetch_assoc($query);
if (!$obat) {
    echo "<script>
            alert('Obat tidak ditemukan!');
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
            <input type="text" class="form-control"
                   value="<?= htmlspecialchars($obat['nm_obat']); ?>" readonly>
        </div>

        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="text" class="form-control"
                   value="Rp <?= number_format($obat['harga'],0,',','.'); ?>" readonly>
        </div>

        <div class="mb-3">
            <label class="form-label">Jumlah</label>
            <input type="number" name="jumlah" class="form-control"
                   min="1" required>
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
