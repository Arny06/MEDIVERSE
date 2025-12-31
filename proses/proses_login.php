<?php
session_start();
require_once __DIR__ . '/../koneksi.php';

if (!isset($_POST['nama']) || !isset($_POST['pass'])) {
    header("Location: ../login.php");
    exit();
}

$username = mysqli_real_escape_string($koneksi, $_POST['nama']);
$password = $_POST['pass'];


// =======================
// 1️⃣ CEK LOGIN ADMIN
// =======================
$qAdmin = mysqli_query($koneksi,
    "SELECT id_admin, username, password 
     FROM tb_admin 
     WHERE username='$username'"
);

if (mysqli_num_rows($qAdmin) > 0) {
    $admin = mysqli_fetch_assoc($qAdmin);

    // jika password admin masih plain text
    if ($password == $admin['password']) {

        $_SESSION['status'] = 'login';
        $_SESSION['role']   = 'admin';
        $_SESSION['id']     = $admin['id_admin'];
        $_SESSION['nama']   = $admin['username'];

        header("Location: ../admin/dashboard.php");
        exit();
    }
}


// =======================
// 2️⃣ CEK LOGIN PELANGGAN
// =======================
$qUser = mysqli_query($koneksi,
    "SELECT id_pelanggan, nm_pelanggan, password
     FROM tb_pelanggan
     WHERE nm_pelanggan='$username'"
);

if (mysqli_num_rows($qUser) > 0) {
    $user = mysqli_fetch_assoc($qUser);
if (password_verify($password, $user['password'])) {

    $_SESSION['status'] = 'login';
    $_SESSION['role']   = 'pelanggan';
    $_SESSION['id']     = $user['id_pelanggan'];
    $_SESSION['nama']   = $user['nm_pelanggan'];

    // 🔹 LOGIN PELANGGAN → ke halaman beranda daftar obat
    header("Location: ../customer/index.php"); 
    exit();
}
}


// =======================
// 3️⃣ GAGAL LOGIN
// =======================
header("Location: ../login.php?pesan=gagal");
exit();
