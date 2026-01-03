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
   AMBIL ID
===================== */
$id = $_GET['id'] ?? null;
if (!$id) {
    die("ID obat tidak ada di URL");
}

/* =====================
   AMBIL DATA OBAT
===================== */
$query = mysqli_query($koneksi, "SELECT * FROM tb_obat WHERE id_obat=$id");
$obat = mysqli_fetch_assoc($query);

if (!$obat) {
    die("Data obat tidak ditemukan");
}

/* =====================
   UPDATE DATA
===================== */
if (isset($_POST['update'])) {
    $nm_obat     = $_POST['nm_obat'];
    $id_kategori = (int) $_POST['id_kategori'];
    $harga       = (int) $_POST['harga'];
    $stock       = (int) $_POST['stock'];

    mysqli_query($koneksi, "UPDATE tb_obat SET
        nm_obat='$nm_obat',
        id_kategori=$id_kategori,
        harga=$harga,
        stock=$stock
        WHERE id_obat=$id
    ");

    echo "<script>alert('Data berhasil diupdate'); window.location='obat.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Obat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h3>Edit Obat</h3>
    <a href="obat.php" class="btn btn-secondary mb-3">⬅ Kembali</a>

    <div class="card">
        <div class="card-body">
            <form method="post">

                <div class="mb-2">
                    <label>Nama Obat</label>
                    <input type="text" name="nm_obat" class="form-control"
                           value="<?= $obat['nm_obat']; ?>" required>
                </div>

                <div class="mb-2">
                    <label>Kategori</label>
                    <select name="id_kategori" class="form-control" required>
                        <option value="">-- Pilih Kategori --</option>
                        <?php
                        $kat = mysqli_query($koneksi, "SELECT * FROM tb_kategori");
                        while ($k = mysqli_fetch_assoc($kat)) {
                            $selected = ($k['id_kategori'] == $obat['id_kategori']) ? "selected" : "";
                            echo "<option value='$k[id_kategori]' $selected>$k[nm_kategori]</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="mb-2">
                    <label>Harga</label>
                    <input type="number" name="harga" class="form-control"
                           value="<?= $obat['harga']; ?>" required>
                </div>

                <div class="mb-2">
                    <label>Stok</label>
                    <input type="number" name="stock" class="form-control"
                           value="<?= $obat['stock']; ?>" required>
                </div>

                <button class="btn btn-primary" name="update">Update</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
