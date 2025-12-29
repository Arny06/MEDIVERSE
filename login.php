<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pengguna - MEDIVERSE</title> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* 💡 PERBAIKAN: Reset margin dan padding pada html & body */
        html, body {
            margin: 0;
            padding: 0;
            /* Pastikan body setinggi viewport */
            height: 100%; 
        }

        body { 
            background-color: #f7f7f7; 
            
            /* PROPERTI FLEXBOX UNTUK PEMUSATAN */
            display: flex; 
            /* Pusatkan secara horizontal */
            justify-content: center; 
            /* Pusatkan secara vertikal */
            align-items: center; 
            
            /* Gunakan vh pada body */
            height: 100vh; 
        }
        
        .login-box { 
            width: 360px; 
            background: white; 
            padding: 30px; 
            border-radius: 8px; 
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); 
        }
        /* Style untuk pesan error agar mirip dengan gambar awal */
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h3 class="text-center mb-4">MEDIVERSE</h3>
        
        <?php 
        // Logika PHP untuk menampilkan pesan notifikasi...
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "berhasil"){
                echo '<div class="alert alert-success">Registrasi berhasil! Silakan login.</div>';
            } else if($_GET['pesan'] == "gagal"){
                echo '<div class="alert alert-danger">Login gagal! Username atau password salah.</div>';
            } else if($_GET['pesan'] == "logout"){
                echo '<div class="alert alert-info">Anda telah berhasil logout.</div>';
            }
        }
        ?>

        <form action="proses/proses-login.php" method="post">
            <div class="form-group">
                <label for="nama">Username</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama Pengguna" required>
            </div>
            <div class="form-group">
                <label for="pass">Password</label>
                <input type="password" name="pass" id="pass" class="form-control" placeholder="Masukkan Password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
        
        <p class="mt-3 text-center">
            Belum punya akun? <a href="register.php">Daftar di sini</a>
        </p>
    </div>
</body>
</html>