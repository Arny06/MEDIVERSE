<?php
// Memulai session
session_start();

// Menghapus semua data session yang ada
session_unset();

// Menghancurkan session (logout total)
session_destroy();

// Mengarahkan pengguna kembali ke halaman login utama
echo "<script>
    alert('Anda telah berhasil keluar.');
    window.location.href='../login.php';
</script>";
exit();
?>