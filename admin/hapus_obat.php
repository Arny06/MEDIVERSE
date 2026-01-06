<?php
include "../koneksi.php";

if (isset($_GET['id_obat'])) {
    $id = $_GET['id_obat'];

    // Query hapus
    $query = mysqli_query($koneksi, "DELETE FROM tb_obat WHERE id_obat = '$id'");

    if ($query) {
        echo "<script>
                alert('Data berhasil dihapus!');
                window.location.href = '../customer/informasi_obat.php';
              </script>";
    } else {
        echo "Gagal menghapus: " . mysqli_error($koneksi);
    }
}
?>