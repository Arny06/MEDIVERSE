<?php
// logout.php
session_start();

// Jika pengguna klik OK untuk logout
if (isset($_GET['confirm']) && $_GET['confirm'] === 'yes') {
    // Hapus semua session
    session_unset();
    session_destroy();

    // Redirect ke halaman utama dengan pesan
    echo "<script>
        alert('Anda telah berhasil keluar.');
        window.location.href='index.php';
    </script>";
    exit();
}

// Jika pengguna belum konfirmasi, tampilkan konfirmasi
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Logout | MEDIVERSE</title>
    <script>
        function confirmLogout() {
            let result = confirm("Apakah Anda yakin ingin keluar?");
            if (result) {
                // Jika OK, arahkan ke logout.php dengan parameter confirm=yes
                window.location.href = "logout.php?confirm=yes";
            } else {
                // Jika Cancel, kembali ke halaman sebelumnya
                window.history.back();
            }
        }

        // Jalankan konfirmasi otomatis saat halaman dibuka
        window.onload = confirmLogout;
    </script>
</head>
<body>
</body>
</html>
