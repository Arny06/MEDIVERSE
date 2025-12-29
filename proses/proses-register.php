<?php
// BARIS INI KRITIS: Memuat koneksi.php dan variabel $koneksi
require_once __DIR__ . '/../koneksi.php'; 

if (isset($_POST['nm_pelanggan']) && isset($_POST['pass'])) {
    
    $username_input = mysqli_real_escape_string($koneksi, $_POST['nm_pelanggan']);
    $password_plaintext = $_POST['pass'];
    
    // HASHING PASSWORD KRITIS!
    $password_hashed = password_hash($password_plaintext, PASSWORD_DEFAULT);
    
    // 1. Cek apakah username sudah digunakan
    $check_query = "SELECT nm_pelanggan FROM tb_pelanggan WHERE nm_pelanggan = '$username_input'";
    $check_result = mysqli_query($koneksi, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        header("Location: ../register.php?pesan=gagal_daftar");
        exit();
    }
    
    // 2. Insert pengguna baru (menggunakan password yang sudah di-HASH)
    $insert_query = "INSERT INTO tb_pelanggan (nm_pelanggan, password) 
                     VALUES ('$username_input', '$password_hashed')";
                     

    if (mysqli_query($koneksi, $insert_query)) {
        // Pendaftaran berhasil, arahkan ke halaman login
        header("Location: ../login.php?pesan=berhasil");
        exit();
    } else {
        header("Location: ../register.php?pesan=gagal_daftar");
        exit();
    }

} else {
    header("Location: ../register.php");
    exit();
}
?>