<?php
session_start();

// Memuat koneksi.php dan variabel $koneksi
require_once __DIR__ . '/../koneksi.php'; 

if (isset($_POST['nama']) && isset($_POST['pass'])) {
    
    $username_input = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $password_input = $_POST['pass']; 

    
    // 1. Ambil data pengguna
    $query = "SELECT id_pelanggan, nm_pelanggan, password
              FROM tb_pelanggan 
              WHERE nm_pelanggan='$username_input'";
              
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
        
        // 2. Verifikasi Password
        if (password_verify($password_input, $data['password'])) {
            
            // ==========================================================
            // LANGKAH PENTING: LOGIN BERHASIL DAN REDIRECT
            // ==========================================================
            
            // A. Atur Variabel Sesi
            $_SESSION['status'] = 'login'; // Ubah 'login_status' menjadi 'status'
            $_SESSION['nm_pelanggan'] = $data['nm_pelanggan'];
            $_SESSION['id_pelanggan'] = $data['id_pelanggan'];

            // B. Redirect ke index.php
            header("Location: ../index.php"); 
            
            // C. Hentikan eksekusi script setelah redirect (Wajib)
            exit();
            
            // ==========================================================
            
        } else {
            // Password SALAH
            header("Location: ../login.php?pesan=gagal");
            exit();
        }

    } else {
        // Username TIDAK DITEMUKAN
        header("Location: ../login.php?pesan=gagal");
        exit();
    }
} else {
    // Jika diakses tanpa POST
    header("Location: ../login.php");
    exit();
}
?>