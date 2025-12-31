<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pengguna - MEDIVERSE</title> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
        }

        body { 
            background-color: #f7f7f7; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            height: 100vh; 
        }
        
        .login-box { 
            width: 360px; 
            background: white; 
            padding: 30px; 
            border-radius: 8px; 
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); 
        }
    </style>
</head>
<body>

<div class="login-box">
    <h3 class="text-center mb-4">MEDIVERSE</h3>

    <?php
    // Tampilkan pesan gagal login atau logout
if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
        echo '<div class="alert alert-danger text-center">Login gagal! Username atau password salah.</div>';
    }
    if($_GET['pesan'] == "logout"){
        echo '<div class="alert alert-info text-center">Anda telah logout.</div>';
    }
}
?>
    <!-- ✅ PATH SUDAH BENAR -->
<form action="/apotekuas/proses/proses_login.php" method="post">
    <div class="form-group">
        <label>Username</label>
        <input type="text" name="nama" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="password" name="pass" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary btn-block">Login</button>
</form>

    <p class="mt-3 text-center">
        Belum punya akun? <a href="register.php">Daftar di sini</a>
    </p>
</div>

</body>
</html>
