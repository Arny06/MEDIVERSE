<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengguna Baru - MEDIVERSE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body { 
            background-color: #f7f7f7; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            height: 100vh; 
        }
        .register-box { 
            width: 400px; 
            background: white; 
            padding: 30px; 
            border-radius: 8px; 
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); 
        }
    </style>
</head>
<body>
    <div class="register-box">
        <h3 class="text-center mb-4">Daftar Akun MEDIVERSE</h3>
        
        <?php 
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal_daftar"){
                echo '<div class="alert alert-danger">Pendaftaran gagal. Username mungkin sudah digunakan.</div>';
            }
        }
        ?>

        <form action="proses/proses-register.php" method="post">
            
            <div class="form-group">
                <label for="nm_pelanggan">Username</label>
                <input type="text" name="nm_pelanggan" id="nm_pelanggan" class="form-control" placeholder="Masukkan Username Unik" required>
            </div>
            
            <div class="form-group">
                <label for="pass">Password</label>
                <input type="password" name="pass" id="pass" class="form-control" placeholder="Buat Password" required>
            </div>
            
            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
        </form>
        
        <p class="mt-3 text-center">
            Sudah punya akun? <a href="login.php">Login di sini</a>
        </p>
    </div>
</body>
</html>