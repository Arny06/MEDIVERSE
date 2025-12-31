<?php
include "../koneksi.php";

$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM tb_obat WHERE id_obat='$id'");

header("location:obat-list.php");
s