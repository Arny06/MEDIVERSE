<?php
session_start();
include "../koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM tb_obat");
?>

<h2>Data Obat</h2>

<a href="obat-tambah.php">+ Tambah Obat</a>

<table border="1" cellpadding="10">
<tr>
  <th>No</th>
  <th>Nama Obat</th>
  <th>Aksi</th>
</tr>

<?php $no=1; while($row=mysqli_fetch_assoc($query)){ ?>
<tr>
  <td><?= $no++ ?></td>
  <td><?= $row['nm_obat'] ?></td>
  <td>
    <a href="obat-edit.php?id=<?= $row['id_obat'] ?>">Edit</a> |
    <a href="obat-hapus.php?id=<?= $row['id_obat'] ?>"
       onclick="return confirm('Hapus data?')">Hapus</a>
  </td>
</tr>
<?php } ?>
</table>
