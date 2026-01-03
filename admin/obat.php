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
   TAMBAH DATA
===================== */
if (isset($_POST['simpan'])) {
    $nm_obat     = $_POST['nm_obat'];
    $id_kategori = (int) $_POST['id_kategori'];
    $harga       = (int) $_POST['harga'];
    $stock       = (int) $_POST['stock'];

    mysqli_query($koneksi, "INSERT INTO tb_obat 
        (nm_obat, id_kategori, harga, stock)
        VALUES ('$nm_obat', $id_kategori, $harga, $stock)
    ");
    header("Location: obat.php");
}

/* =====================
   UPDATE DATA
===================== */
if (isset($_POST['update'])) {
    $id          = $_POST['id_obat'];
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
    header("Location: obat.php");
}

/* =====================
   HAPUS DATA
===================== */
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    mysqli_query($koneksi, "DELETE FROM tb_obat WHERE id_obat=$id");
    header("Location: obat.php");
}

/* =====================
   AMBIL DATA EDIT
===================== */
$edit = null;
if (isset($_GET['edit'])) {
    $id   = $_GET['edit'];
    $edit = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM tb_obat WHERE id_obat=$id"));
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Obat | Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h3>Kelola Data Obat</h3>
    <a href="dashboard_admin.php" class="btn btn-secondary mb-3">⬅ Kembali</a>

    <!-- ================= FORM ================= -->
    <div class="card mb-4">
        <div class="card-header">
            <?= $edit ? "Edit Obat" : "Tambah Obat"; ?>
        </div>
        <div class="card-body">
            <form method="post">
                <?php if ($edit): ?>
                    <input type="hidden" name="id_obat" value="<?= $edit['id_obat']; ?>">
                <?php endif; ?>

                <div class="mb-2">
                    <label>Nama Obat</label>
                    <input type="text" name="nm_obat" class="form-control"
                           value="<?= $edit['nm_obat'] ?? ''; ?>" required>
                </div>

                <div class="mb-2">
                    <label>Kategori</label>
                    <select name="id_kategori" class="form-control" required>
                        <option value="">-- Pilih Kategori --</option>
                        <?php
                        $kat = mysqli_query($koneksi, "SELECT * FROM tb_kategori");
                        while ($k = mysqli_fetch_assoc($kat)) {
                            $selected = ($edit && $edit['id_kategori'] == $k['id_kategori']) ? "selected" : "";
                            echo "<option value='$k[id_kategori]' $selected>$k[nm_kategori]</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="mb-2">
                    <label>Harga</label>
                    <input type="number" name="harga" class="form-control"
                           value="<?= $edit['harga'] ?? ''; ?>" required>
                </div>

                <div class="mb-2">
                    <label>Stok</label>
                    <input type="number" name="stock" class="form-control"
                           value="<?= $edit['stock'] ?? ''; ?>" required>
                </div>

                <button class="btn btn-primary" name="<?= $edit ? 'update' : 'simpan'; ?>">
                    <?= $edit ? 'Update' : 'Simpan'; ?>
                </button>
                <?php if ($edit): ?>
                    <a href="obat.php" class="btn btn-warning">Batal</a>
                <?php endif; ?>
            </form>
        </div>
    </div>

    <!-- ================= TABEL ================= -->
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Nama Obat</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $no = 1;
        $data = mysqli_query($koneksi, "
            SELECT tb_obat.*, tb_kategori.nm_kategori 
            FROM tb_obat 
            JOIN tb_kategori ON tb_obat.id_kategori = tb_kategori.id_kategori
        ");
        while ($d = mysqli_fetch_assoc($data)):
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d['nm_obat']; ?></td>
            <td><?= $d['nm_kategori']; ?></td>
            <td>Rp <?= number_format($d['harga']); ?></td>
            <td><?= $d['stock']; ?></td>
            <td>
                <a href="?edit=<?= $d['id_obat']; ?>" class="btn btn-sm btn-warning">Edit</a>
                <a href="?hapus=<?= $d['id_obat']; ?>" 
                   onclick="return confirm('Hapus data?')" 
                   class="btn btn-sm btn-danger">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
        </tbody>
    </table>

</div>

</body>
</html>
