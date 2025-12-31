<?php
include "../koneksi.php";

$id = $_GET['id'];
$data = mysqli_fetch_assoc(
    mysqli_query($koneksi, "SELECT * FROM tb_obat WHERE id_obat='$id'")
);

if (isset($_POST['update'])) {
    $nm = $_POST['nm_obat'];
    $desk = $_POST['deskripsi'];

    mysqli_query($koneksi, "UPDATE tb_obat SET
        nm_obat='$nm',
        deskripsi='$desk'
        WHERE id_obat='$id'");

    header("location:obat-list.php");
}
?>

<h2>Edit Obat</h2>

<form method="post">
    Nama Obat <br>
    <input type="text" name="nm_obat" value="<?= $data['nm_obat'] ?>"><br><br>

    Deskripsi <br>
    <textarea name="deskripsi"><?= $data['deskripsi'] ?></textarea><br><br>

    <button name="update">Update</button>
</form>
