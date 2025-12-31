<?php
session_start();
include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Obat | MEDIVERSE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand fw-bold" href="../index.php">
            MEDIVERSE
        </a>
    </div>
</nav>

<div class="container mt-4">
    <h2 class="mb-4">Daftar Obat</h2>

    <div class="row">
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM tb_obat");

        if (mysqli_num_rows($query) > 0) {
            while ($obat = mysqli_fetch_assoc($query)) {
        ?>
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <img src="../upload/<?= $obat['gambar']; ?>" class="card-img-top" alt="<?= $obat['nm_obat']; ?>">

                <div class="card-body d-flex flex-column">
                    <h5 class="card-title"><?= $obat['nm_obat']; ?></h5>
                    <p class="card-text">Rp <?= number_format($obat['harga'], 0); ?></p>

                    <?php if (isset($_SESSION['status']) && $_SESSION['status'] == 'login') { ?>
                        <!-- SUDAH LOGIN -->
                        <a href="pesan.php?id=<?= $obat['id_obat']; ?>" class="btn btn-primary mt-auto">
                            Pesan
                        </a>
                    <?php } else { ?>
                        <!-- BELUM LOGIN -->
                        <a href="../login.php" class="btn btn-outline-primary mt-auto">
                            Login dulu
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php
            }
        } else {
            echo "<p>Data obat belum tersedia</p>";
        }
        ?>
    </div>
</div>

</body>
</html>
