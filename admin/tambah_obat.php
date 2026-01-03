<?php
session_start();
include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Obat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h3>Tambah Obat</h3>

    <form action="obat_tambah.php" method="post">
        <div class="mb-2">
            <label>Nama Obat</label>
            <input type="text" name="nm_obat" class="form-control" required>
        </div>

        <div class="mb-2">
            <label>Kategori</label>
            <input type="number" name="kategori" class="form-control">
        </div>

        <div class="mb-2">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control">
        </div>

        <div class="mb-2">
            <label>Stock</label>
            <input type="number" name="stock" class="form-control">>
        </div>

        <button name="simpan" class="btn btn-success">Simpan</button>
        <a href="../index.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?php
if (isset($_POST['simpan'])) {
    mysqli_query($koneksi, "INSERT INTO tb_obat 
        (nm_obat, id_kategori, harga, stock)
        VALUES (
            '$_POST[nm_obat]',
            '$_POST[kategori]',
            '$_POST[harga]',
            '$_POST[stock]'
        )");

    echo "<script>alert('Data obat berhasil ditambahkan'); window.location='obat.php';</script>";
}
?>

</body>
</html>
