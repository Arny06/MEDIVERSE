<?php
include "../koneksi.php";

// 1. Ambil ID dari URL
$id_obat = $_GET['id_obat'];

// 2. Query ke database
// PASTIKAN nama kolomnya benar (id_obat atau id?)
$query = mysqli_query($koneksi, "SELECT * FROM tb_obat WHERE id_obat = '$id_obat'");

// 3. Cek apakah data ditemukan
if (mysqli_num_rows($query) > 0) {
    $data = mysqli_fetch_assoc($query);
    // Tampilkan data obat
} else {
    echo "OBAT TIDAK DITEMUKAN";
}
// 2. Ambil data lama berdasarkan ID
$query = mysqli_query($koneksi, "SELECT * FROM tb_obat WHERE id_obat = '$id'");
$data = mysqli_fetch_assoc($query);

// 3. Cek apakah data benar-benar ada di database
if (!$data) {
    echo "<script>alert('Data tidak ditemukan di database!'); window.location='../customer/informasi_obat.php';</script>";
    exit;
}

// 4. Proses Update jika tombol ditekan
if (isset($_POST['update'])) {
    $nama      = mysqli_real_escape_string($koneksi, $_POST['nm_obat']);
    $kategori  = mysqli_real_escape_string($koneksi, $_POST['kategori']);
    $deskripsi = mysqli_real_escape_string($koneksi, $_POST['deskripsi']);
    $aturan    = mysqli_real_escape_string($koneksi, $_POST['aturan_pakai']);
    $efek      = mysqli_real_escape_string($koneksi, $_POST['efek_samping']);

    $update = mysqli_query($koneksi, "UPDATE tb_obat SET 
                nm_obat = '$nama', 
                kategori_obat = '$kategori', 
                deskripsi = '$deskripsi', 
                aturan_pakai = '$aturan', 
                efek_samping = '$efek' 
              WHERE id_obat = '$id'");

    if ($update) {
        echo "<script>alert('Data berhasil diperbarui!'); window.location='../customer/informasi_obat.php';</script>";
    } else {
        echo "Gagal update: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Edit Obat | MEDIVERSE Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow-sm p-4">
        <h3>Edit Data Obat</h3>
        <hr>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Nama Obat</label>
                <input type="text" name="nm_obat" class="form-control" 
                       value="<?= isset($data['nm_obat']) ? htmlspecialchars($data['nm_obat']) : ''; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Kategori</label>
                <input type="text" name="kategori" class="form-control" 
                       value="<?= isset($data['kategori']) ? htmlspecialchars($data['kategori']) : ''; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" rows="3"><?= isset($data['deskripsi']) ? htmlspecialchars($data['deskripsi']) : ''; ?></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Aturan Pakai</label>
                <textarea name="aturan_pakai" class="form-control" rows="3"><?= isset($data['aturan_pakai']) ? htmlspecialchars($data['aturan_pakai']) : ''; ?></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Efek Samping</label>
                <textarea name="efek_samping" class="form-control" rows="3"><?= isset($data['efek_samping']) ? htmlspecialchars($data['efek_samping']) : ''; ?></textarea>
            </div>
            
            <button type="submit" name="update" class="btn btn-success">Simpan Perubahan</button>
            <a href="../customer/informasi_obat.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
</body>
</html>