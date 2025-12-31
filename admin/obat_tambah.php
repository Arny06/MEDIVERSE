<?php
include "../koneksi.php";

if (isset($_POST['simpan'])) {
    $nm = $_POST['nm_obat'];
    $desk = $_POST['deskripsi'];

    mysqli_query($koneksi, "INSERT INTO tb_obat (nm_obat, deskripsi)
                            VALUES ('$nm', '$desk')");

    header("location:obat-list.php");
}
?>

<h2>Tambah Obat</h2>

<form method="post">
    Nama Obat <br>
    <input type="text" name="nm_obat" required><br><br>

    Deskripsi <br>
    <textarea name="deskripsi"></textarea><br><br>

    <button name="simpan">Simpan</button>
</form>
