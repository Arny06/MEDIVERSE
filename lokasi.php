<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Lokasi Apotek | MEDIVERSE</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 90%;
            max-width: 1000px;
            margin: 30px auto;
            text-align: center;
        }
        h2 {
            color: #0d6efd;
            margin-bottom: 20px;
        }
        .btn-lokasi {
            display: inline-block;
            padding: 10px 20px;
            background: #0d6efd;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
            transition: 0.3s;
        }
        .btn-lokasi:hover {
            background: #0956c3;
        }
        iframe {
            border: 0;
            width: 100%;
            height: 450px;
            border-radius: 8px;
        }
        p {
            margin-top: 15px;
            color: #555;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Lokasi Apotek MEDIVERSE</h2>

    <!-- Tombol klik lokasi -->
    <a class="btn-lokasi" target="_blank" href="https://www.google.com/maps/place/Jl.+Tukad+Batanghari+No.7,+Panjer,+Denpasar+Selatan,+Kota+Denpasar,+Bali+80234/@-8.6784026,115.2279771,17z">
        Klik Lokasi Apotek
    </a>

    <!-- Embed peta langsung -->
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.810091856219!2d115.2279771!3d-8.6784079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240f0b3453443%3A0x391337c09cbc8d35!2sJl.%20Tukad%20Batanghari%20No.7%2C%20Panjer%2C%20Denpasar%20Selatan%2C%20Kota%20Denpasar%2C%20Bali%2080234!5e0!3m2!1sid!2sid!4v1703900000000!5m2!1sid!2sid" 
        allowfullscreen="" 
        loading="lazy">
    </iframe>

    <p>Apotek MEDIVERSE berada di Jl. Tukad Batanghari No.7, Panjer, Denpasar Selatan, Kota Denpasar, Bali 80234. Gunakan peta di atas untuk navigasi.</p>
</div>

</body>
</html>
