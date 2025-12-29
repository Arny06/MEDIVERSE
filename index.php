<?php
include "koneksi.php"; // Pastikan nama filenya benar
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEDIVERSE</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg" id="mainNavbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-prescription-bottle-medical"></i> MEDIVERSE
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav ms-auto ml-auto"></ul>
                    <li class="nav-item text-center">
                        <a class="nav-link active" aria-current="page" href="#about">Tentang Kami</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link" href="#services">Layanan</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link" href="#products">Produk</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link" href="#latest-medicines">Pendatang Baru</a> </li>
                    <li class="nav-item text-center">
                        <a class="nav-link" href="#offers">Penawaran</a> </li>
                    <li class="nav-item text-center">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link" href="#contact">Kontak</a>
             </li>
        <li class="nav-item text-center">
            <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item text-center">
            <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="hero" class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1>MEDIVERSE Hadir Untuk Memeberikan Kemudahan Maksimal, Kepercayaan Total.</h1>
                <p>Temukan era baru pelayanan farmasi dengan MEDIVERSE. <br>Sumber terpercaya Anda untuk obat-obatan, saran ahli, dan masa depan yang lebih sehat.</p>
                <a href="#services" class="btn btn-primary btn-lg btn-hero">Jelajahi Layanan</a>
                <a href="#latest-medicines" class="btn btn-outline-light btn-lg btn-hero">Obat Baru</a>
            </div>
        </div>
    </section>

    <section id="about" class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="https://raw.githubusercontent.com/farazc60/Project-Images/refs/heads/main/Pharmacy%20Website%20Template/welcome-to-pharmasleek.webp" alt="About PharmaSleek Team" class="img-fluid about-us-img">
                </div>
                <div class="col-lg-6 about-us-content">
                    <div class="section-title text-start ps-lg-3">
                        <h2 class="text-start">Selamat Datang Di MEDIVERSE</h2>
                    </div>
                    <p class="ps-lg-3">MEDIVERSE lebih dari sekadar apotek; kami adalah mitra Anda dalam kesehatan. Misi kami adalah menyediakan perawatan farmasi yang mudah diakses dan berkualitas tinggi, solusi kesehatan inovatif, dan dukungan penuh empati kepada setiap individu yang kami layani.</p>
                    <p class="ps-lg-3">Apotek MEDIVERSE kami didirikan atas dasar kemitraan kesehatan sejati. Kami memadukan pengetahuan ahli di bidang farmasi dengan komitmen kuat untuk meningkatkan kualitas hidup komunitas. Didukung oleh nilai Integritas Tak Tertandingi, Fokus pada Kesejahteraan Pasien, dan Standar Keunggulan Pelayanan, kami siap menjadi tetangga yang peduli bagi kesehatan Anda.</p>
                    <ul class="list-unstyled mt-4 ps-lg-3">
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Manajemen pengobatan yang dipersonalisasi</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Rangkaian lengkap produk kesehatan & kebugaran</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Berkomitmen untuk mewujudkan komunitas yang lebih sehat.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- <section id="services" class="section-padding bg-light">
        <div class="container">
            <div class="section-title">
                <h2>Our Comprehensive Services</h2>
                <p>Delivering excellence in pharmaceutical care, tailored to your needs.</p>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-card">
                        <div class="icon"><i class="fas fa-pills"></i></div>
                        <h4>Prescription Services</h4>
                        <p>Accurate, fast, and reliable prescription filling, with options for easy refills and medication synchronization.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-card">
                        <div class="icon"><i class="fas fa-syringe"></i></div>
                        <h4>Immunizations & Vaccines</h4>
                        <p>Protect yourself and your loved ones with a wide range of vaccines, administered by our certified pharmacists.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-card">
                        <div class="icon"><i class="fas fa-stethoscope"></i></div> 
                        <h4>Health Screenings</h4>
                        <p>Convenient health monitoring services, including blood pressure, cholesterol, and glucose screenings.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-card">
                        <div class="icon"><i class="fas fa-capsules"></i></div> 
                        <h4>OTC & Wellness Products</h4>
                        <p>An extensive selection of over-the-counter medications, vitamins, supplements, and personal care items.</p>
                    </div>
                </div>
                 <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-card">
                        <div class="icon"><i class="fas fa-shipping-fast"></i></div> 
                        <h4>Express Delivery</h4>
                        <p>Get your prescriptions and health essentials delivered to your doorstep, quickly and discreetly.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-card">
                        <div class="icon"><i class="fas fa-user-nurse"></i></div>
                        <h4>Medication Therapy Management</h4>
                        <p>Personalized consultations to review your medications, optimize effectiveness, and minimize side effects.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

  <section id="products" class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Produk Kesehatan Unggulan (MEDIVERSE)</h2>
                <p>Kami menghadirkan rangkaian produk farmasi dan kesehatan pilihan untuk mendukung gaya hidup sehat Anda, mulai dari pencegahan hingga pemulihan.</p>
            </div>
            <div class="swiper product-swiper">
                <div class="swiper-wrapper">
                                            <?php
                        // Pastikan koneksi ($koneksi) sudah tersedia
                        
                        // 1. Query untuk mengambil data obat
                        $queryObat = mysqli_query($koneksi, "SELECT * FROM tb_obat");
                        
                        // Cek apakah ada data yang ditemukan
                        if (mysqli_num_rows($queryObat) > 0) {
                            
                            while ($rowObat = mysqli_fetch_array($queryObat)) {
                                
                                // Ambil NAMA FILE gambar (misalnya 'metformin.jpg', 'jahe.jpg') dari kolom 'gambar'
                                $namaFileGambar = $rowObat['gambar']; 
                                
                                // ************ BARIS KOREKSI ************
                                // Gabungkan BASE PATH ('upload/') dengan NAMA FILE DINAMIS ($namaFileGambar)
                                // Contoh hasil: 'upload/jahe.jpg', 'upload/cetirizine.png'
                                $urlGambarFinal = 'upload/' . $namaFileGambar; 
                                
                                // Ambil nama obat untuk judul dan alt text
                                // Variabel $metformin diganti menjadi $namaObat agar lebih konsisten
                                $namaObat = $rowObat['nm_obat']; 
                                
                                echo '<div class="swiper-slide">
                                        <div class="product-card">
                                            
                                            <img src="'.$urlGambarFinal.'" alt="'.$namaObat.'"> 
                                            
                                            <div class="card-body">
                                                
                                                <h5 class="card-title">'.$namaObat.'</h5>
                                                
                                                <p class="card-text text-muted">"Produk Pilihan Apoteker Resmi. Kesehatan Optimal Kini Ada di Genggaman Anda"</p>
                                                <p class="price">Rp '.$rowObat['harga'].'</p>
                                                <a href="#" class="btn btn-outline-primary btn-sm w-100">Learn More</a>
                                            </div>
                                        </div>
                                    </div>';
                            }
                        } else {
                            // Pesan jika database kosong
                            echo '<div class="col-12"><p class="text-center">Tidak ada data obat yang tersedia.</p></div>';
                        }
                    ?>
                    <!-- <div class="swiper-slide">
                        <div class="product-card">
                            <img src="https://raw.githubusercontent.com/farazc60/Project-Images/refs/heads/main/Pharmacy%20Website%20Template/advanced-probiotic-blend.webp" alt="Advanced Probiotic Blend">
                            <div class="card-body">
                                <h5 class="card-title">Advanced Probiotic Blend</h5>
                                <p class="card-text text-muted">Supports digestive balance and gut health.</p>
                                <p class="price">$25.99</p>
                                <a href="#" class="btn btn-outline-primary btn-sm w-100">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-card">
                            <img src="https://raw.githubusercontent.com/farazc60/Project-Images/refs/heads/main/Pharmacy%20Website%20Template/herbal-sleep-aid.webp" alt="Herbal Sleep Aid">
                            <div class="card-body">
                                <h5 class="card-title">Herbal Sleep Aid</h5>
                                <p class="card-text text-muted">Natural formula for restful sleep.</p>
                                <p class="price">$14.25</p>
                                <a href="#" class="btn btn-outline-primary btn-sm w-100">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-card">
                            <img src="https://raw.githubusercontent.com/farazc60/Project-Images/refs/heads/main/Pharmacy%20Website%20Template/omega-3-fish-oil.webp" alt="Omega-3 Fish Oil">
                            <div class="card-body">
                                <h5 class="card-title">Omega-3 Fish Oil</h5>
                                <p class="card-text text-muted">Supports heart and brain health.</p>
                                <p class="price">$20.00</p>
                                <a href="#" class="btn btn-outline-primary btn-sm w-100">Learn More</a>
                            </div>
                        </div>
                    </div>
                     <div class="swiper-slide">
                        <div class="product-card">
                            <img src="https://raw.githubusercontent.com/farazc60/Project-Images/refs/heads/main/Pharmacy%20Website%20Template/adult-multivitamin-gummies.webp" alt="Adult Multivitamin Gummies">
                            <div class="card-body">
                                <h5 class="card-title">Adult Multivitamin Gummies</h5>
                                <p class="card-text text-muted">Tasty way to get essential daily nutrients.</p>
                                <p class="price">$16.99</p>
                                <a href="#" class="btn btn-outline-primary btn-sm w-100">Learn More</a>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>

    <section id="latest-medicines" class="section-padding bg-light">
    <div class="container">
        <div class="section-title">
            <h2>Produk Baru & Inovasi</h2>
            <p>Tetap terdepan dengan kemajuan terbaru dalam perawatan farmasi dan produk kesehatan.</p>
        </div>
        <div class="row">
            
            <?php
                // Asumsi: Variabel $koneksi sudah terkoneksi ke database.
                
                // ************ KOREKSI DI SINI ************
                // 1. Query hanya mengambil 4 data (LIMIT 4). 
                //    Gunakan ORDER BY id_obat DESC untuk memastikan data yang ditampilkan adalah yang terbaru.
                $queryObat = mysqli_query($koneksi, "SELECT * FROM tb_obat ORDER BY id_obat DESC LIMIT 4");
                
                if (mysqli_num_rows($queryObat) > 0) {
                    
                    while ($rowObat = mysqli_fetch_array($queryObat)) {
                        
                        $namaFileGambar = $rowObat['gambar']; 
                        $namaObat = $rowObat['nm_obat'];
                        $hargaObat = $rowObat['harga'];
                        
                        // Gabungkan PATH DINAMIS (Misal: 'upload/Vitamin.png')
                        $urlGambarFinal = 'upload/' . $namaFileGambar; 
                        
                        // 2. Output HTML dinamis untuk setiap kartu obat
                        echo '<div class="col-md-6 col-lg-3 mb-4">
                                <div class="medicine-card">
                                    <img src="'.$urlGambarFinal.'" alt="'.$namaObat.'">
                                    <div class="card-body">
                                        <h5 class="card-title">'.$namaObat.'</h5>
                                        <p class="card-text text-muted">Produk Asli dan Terjamin dari sumber farmasi resmi MEDIVERSE.</p> 
                                        <p class="price">Rp '.$hargaObat.'</p>
                                        <a href="#" class="btn btn-primary btn-sm w-100">Details</a>
                                    </div>
                                </div>
                            </div>';
                    }
                } else {
                    echo '<div class="col-12"><p class="text-center">Tidak ada data obat baru yang tersedia.</p></div>';
                }
            ?>

        </div>
    </div>
</section>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="offers" class="discount-offer-section">
        <div class="container">
            <h2>Penawaran Kesehatan Terbatas! </h2>
            <p>"Jadikan Sehat Anda Prioritas. Klik Sekarang dan Temukan Diskon Kesejahteraan Terbaik!"</p>
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8">
                    <span class="display-4">Hemat hingga 25%</span>
                    <p class="lead">Penawaran khusus untuk semua merek vitamin & suplemen minggu ini!</p>
                    <a href="#products" class="btn btn-light btn-lg">Belanja Sekarang & Hemat</a>
                </div>
            </div>
        </div>
    </section>


    <section id="why-choose-us" class="section-padding"> <div class="container">
            <div class="section-title">
                <h2>Mengapa Anda Harus Mempercayakan Kesehatan Anda kepada MEDIVERSE?</h2>
                <p>Temukan perbedaan MEDIVERSE – tempat perhatian, keahlian, dan kenyamanan bertemu.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-item">
                        <div class="icon"><i class="fas fa-hand-holding-medical"></i></div>
                        <h5>Pelayanan Berpusat pada Kebutuhan Anda.</h5>
                        <p>Lebih personal dan langsung, berfokus pada apa yang dibutuhkan pasien</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-item">
                        <div class="icon"><i class="fas fa-users-cog"></i></div>
                        <h5>Staf yang Berkualifikasi & Peduli</h5>
                        <p>Tim kami yang terdiri dari apoteker dan profesional kesehatan berpengalaman siap melayani Anda.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-item">
                        <div class="icon"><i class="fas fa-shield-alt"></i></div> 
                        <h5>Kualitas & Kepercayaan</h5>
                        <p>Kami mematuhi standar kualitas dan etika tertinggi dalam semua produk dan layanan kami.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials" class="section-padding bg-light">
        <div class="container">
            <div class="section-title">
                <h2>Suara dari Pasien Kami yang Terhormat</h2>
                <p>Dengarkan langsung dari mereka yang telah merasakan perawatan penuh perhatian di MEDIVERSE</p>
            </div>
            <div class="swiper testimonial-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <img src="https://www.codewithfaraz.com/tools/placeholder?size=60x60&bgColor=FFCCBC&textColor=D84315&text=AS" alt="Alice Smith" class="avatar">
                            <p class="quote">"Tim di MEDIVERSE benar-benar luar biasa. Mereka tidak hanya berpengetahuan luas tetapi juga sangat peduli. Layanan pengiriman ke rumah mereka benar-benar mengubah segalanya bagi saya!"</p>
                            <p class="name">Viany</p>
                            <p class="role">Pasien Jangka Panjang</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <img src="https://www.codewithfaraz.com/tools/placeholder?size=60x60&bgColor=CFD8DC&textColor=37474F&text=BJ" alt="Bob Johnson" class="avatar">
                            <p class="quote">"Saya beralih ke MEDIVERSE setahun yang lalu dan sangat puas. Para apoteker meluangkan waktu untuk menjelaskan semuanya, dan aplikasi mereka membuat pengisian ulang resep menjadi sangat mudah."</p>
                            <p class="name">Ina J.</p>
                            <p class="role">Pelanggan Puas</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                             <img src="https://www.codewithfaraz.com/tools/placeholder?size=60x60&bgColor=E1BEE7&textColor=6A1B9A&text=CW" alt="Clara Williams" class="avatar">
                            <p class="quote">"Pemesanan pemeriksaan kesehatan sangat mudah dan cepat. Staf membuat saya merasa nyaman, dan saya mendapatkan hasilnya dengan cepat. MEDIVERSE adalah pilihan utama saya untuk kebutuhan kesehatan."</p>
                            <p class="name">jurna</p>
                            <p class="role">Individu Sadar Kesehatan</p>
                        </div>
                    </div>
                     <div class="swiper-slide">
                        <div class="testimonial-card">
                             <img src="https://www.codewithfaraz.com/tools/placeholder?size=60x60&bgColor=D7CCC8&textColor=4E342E&text=DM" alt="David Miller" class="avatar">
                            <p class="quote">"Pilihan produk kesehatan mereka fantastis, dan saya selalu menemukan suplemen kesehatan terbaru. Rekomendasi dari staf selalu tepat sasaran!"</p>
                            <p class="name">Arny</p>
                            <p class="role">Penggemar Kesehatan</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section id="blog" class="section-padding"> <div class="container">
            <div class="section-title">
                <h2>Asupan Kesehatan Harian Anda</h2>
                <p>Jelajahi artikel, tips, dan berita yang informatif untuk memberdayakan perjalanan kesehatan Anda.</p>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="blog-card">
                        <img src="https://raw.githubusercontent.com/farazc60/Project-Images/refs/heads/main/Pharmacy%20Website%20Template/mindful-eating-a-path-to-better-health.webp" alt="Mindful Eating: A Path to Better Health">
                        <div class="card-body">
                            <h5 class="card-title">Makan dengan Kesadaran: Jalan Menuju Kesehatan yang Lebih Baik</h5>
                            <p class="card-text">Temukan bagaimana makan dengan penuh kesadaran dapat mengubah hubungan Anda dengan makanan dan meningkatkan pencernaan.</p>
                            <a href="#" class="read-more">Baca Artikel Lengkap <i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="blog-card">
                        <img src="https://raw.githubusercontent.com/farazc60/Project-Images/refs/heads/main/Pharmacy%20Website%20Template/the-benefits-of-a-digital-detox.webp" alt="Blog Post 2">
                        <div class="card-body">
                            <h5 class="card-title">Manfaat Detoks Digital</h5>
                            <p class="card-text">Pelajari mengapa beristirahat dari layar dapat meningkatkan kejernihan mental dan mengurangi stres.</p>
                            <a href="#" class="read-more">Baca Artikel Lengkap<i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="blog-card">
                        <img src="https://raw.githubusercontent.com/farazc60/Project-Images/refs/heads/main/Pharmacy%20Website%20Template/simple-ways-to-stay-active-daily.webp" alt="Blog Post 3">
                        <div class="card-body">
                            <h5 class="card-title">Cara Sederhana untuk Tetap Aktif Setiap Hari</h5>
                            <p class="card-text">Tambahkan lebih banyak gerakan ke dalam rutinitas Anda dengan tips mudah dan efektif ini.</p>
                            <a href="#" class="read-more">Baca Artikel Lengkap <i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="consultation" class="section-padding bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2>Pesan Konsultasi Pribadi</h2>
                        <p>Hubungi apoteker ahli kami untuk mendapatkan saran dan dukungan yang sesuai dengan kebutuhan Anda.</p>
                    </div>
                    <div class="booking-form">
                        <form id="consultationForm">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="consultName" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="consultName" placeholder="e.g., John Doe" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="consultEmail" class="form-label">Alamat Email</label> <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="consultEmail" placeholder="e.g., name@example.com" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="consultPhone" class="form-label">Nomor Telpon <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" id="consultPhone" placeholder="e.g., +1 (555) 123-4567" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="consultDate" class="form-label">Preferred Date <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="consultDate" placeholder="Select a date" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="consultService" class="form-label">Jenis Konsultasi <span class="text-danger">*</span></label>
                                <select class="form-select" id="consultService" required>
                                    <option selected disabled value="">Silakan pilih layanan...</option>
                                    <option value="medication_review">Tinjauan dan Pengelolaan Obat</option>
                                    <option value="vaccination_info">Saran Vaksinasi & Imunisasi</option>
                                    <option value="health_screening_advice">Tindak Lanjut Pemeriksaan Kesehatan</option>
                                    <option value="wellness_planning">Perencanaan Kesehatan & Gaya Hidup</option>
                                    <option value="general_health_query">Pertanyaan Umum tentang Kesehatan</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="consultMessage" class="form-label">Catatan atau Pertanyaan Tambahan</label>
                                <textarea class="form-control" id="consultMessage" rows="4" placeholder="Let us know if you have specific questions or concerns..."></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Minta Janji Temu</button>
                            </div>
                        </form>
                         <div id="consultationFormFeedback" class="mt-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="faq" class="section-padding faq-section"> <div class="container">
            <div class="section-title">
                <h2>Jawaban atas Pertanyaan Anda</h2>
                <p>Temukan jawaban cepat untuk pertanyaan umum tentang layanan dan kebijakan PharmaSleek.</p>
            </div>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Bagaimana cara saya mentransfer resep saya ke PharmaSleek dengan mudah?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Memindahkan resep Anda sangat mudah! Anda dapat menghubungi kami dengan detail apotek Anda saat ini, membawa botol resep Anda, atau menggunakan formulir transfer online yang aman di situs web kami. Tim kami akan menangani seluruh proses dengan lancar untuk Anda.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                           Apa saja manfaat dari layanan pengiriman ke rumah Anda?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                           Layanan pengiriman ke rumah kami dirancang untuk kenyamanan Anda. Kami menawarkan pengiriman resep dan produk kesehatan pilihan secara gratis, cepat, dan rahasia langsung ke depan pintu Anda, sehingga menghemat waktu dan tenaga Anda. Kami melayani sebagian besar wilayah lokal; silakan hubungi kami untuk memastikan kelayakan.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                           Jenis asuransi apa saja yang diterima di MEDIVERSE?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            MEDIVERSE menerima berbagai macam rencana asuransi utama. Untuk memverifikasi apakah rencana asuransi Anda tercakup, silakan hubungi apotek kami, kunjungi kami dengan kartu asuransi Anda, atau periksa pengecek asuransi online kami. Staf kami selalu siap membantu Anda.
                        </div>
                    </div>
                </div>
                 <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                           Apakah perlu membuat janji temu untuk vaksinasi?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Untuk sebagian besar vaksinasi rutin, seperti vaksin flu, janji temu tidak sepenuhnya wajib, tetapi disarankan untuk meminimalkan waktu tunggu Anda. Untuk vaksin perjalanan khusus atau imunisasi spesifik lainnya, harap hubungi terlebih dahulu atau buat janji temu secara online.
                        </div>
                    </div>
                </div>
                 <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Bagaimana cara kerja Manajemen Terapi Obat (MTM)?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Manajemen Terapi Obat (MTM) adalah layanan personal di mana apoteker kami bekerja sama dengan Anda dan dokter Anda untuk memastikan obat-obatan Anda aman, efektif, dan sesuai dengan kondisi kesehatan Anda. Ini termasuk tinjauan obat yang komprehensif, mengidentifikasi potensi interaksi obat, dan membuat rencana tindakan pengobatan yang dipersonalisasi.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="newsletter" class="newsletter-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center text-lg-start mb-4 mb-lg-0">
                    <h3>Tetap Terhubung, Tetap Sehat</h3>
                    <p>Berlangganan buletin PharmaSleek untuk mendapatkan wawasan kesehatan eksklusif, pembaruan tentang layanan baru, dan penawaran khusus yang dikirimkan langsung ke kotak masuk Anda.</p>
                </div>
                <div class="col-lg-6">
                    <form id="newsletterForm" class="newsletter-form">
                        <div class="input-group">
                            <input type="email" class="form-control form-control-lg" id="newsletterEmail" placeholder="Your Email Address" required aria-label="Email Address for Newsletter">
                            <button class="btn btn-primary" type="submit">Berlangganan Sekarang</button>
                        </div>
                        <div id="newsletterFeedback" class="mt-2 text-center text-lg-start"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Hubung Dengan Kami Sekarang</h2>
                <p>Kami siap membantu Anda. Hubungi kami jika ada pertanyaan, atau rencanakan kunjungan Anda ke apotek kami.</p>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="contact-form h-100 d-flex flex-column">
                        <h4 class="mb-4">Kirim Pesan Aman</h4>
                        <form id="contactForm" class="flex-grow-1">
                            <div class="mb-3">
                                <label for="contactName" class="form-label">Nama Lengkap<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="contactName" placeholder="Your Full Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="contactEmail" class="form-label">Alamat Email  <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="contactEmail" placeholder="your.email@example.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="contactSubject" class="form-label">Subjek <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="contactSubject" placeholder="Reason for Contact" required>
                            </div>
                            <div class="mb-3">
                                <label for="contactMessage" class="form-label">Pesan Anda <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="contactMessage" rows="5" placeholder="Please type your message here..." required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg w-100">Kirim Pesan</button>
                        </form>
                        <div id="contactFormFeedback" class="mt-3"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h4 class="mb-4">Detail Apotek Kami</h4>
                    <div class="contact-info-item">
                        <div class="icon"><i class="fas fa-map-marked-alt"></i></div>
                        <div>
                            <strong>Kunjungi Kami:</strong>
                            123 Health St, Wellness City, HC 45678, USA
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="icon"><i class="fas fa-phone-volume"></i></div>
                        <div>
                            <strong>Call Us:</strong>
                            <a href="tel:+15551234567">+1 (555) 123-4567</a>
                        </div>
                    </div>
                     <div class="contact-info-item">
                        <div class="icon"><i class="fas fa-envelope-open-text"></i></div>
                        <div>
                            <strong>Email Us:</strong>
                            <a href="mailto:info@pharmasleek.com">info@Mediverse.com</a>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="icon"><i class="far fa-clock"></i></div>
                        <div>
                            <strong>Jam Operasional:</strong>
                            Mon - Fri: 8:30 AM - 7:30 PM<br>
                            Sat: 9:00 AM - 4:00 PM<br>
                            Sun: Closed
                        </div>
                    </div>
                    <div class="map-container mt-4">
                        <iframe title="Google Maps Location of PharmaSleek" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.2199008396003!2d-73.98513088459314!3d40.75048187932787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259015532470d%3A0x5c6f395012f052a0!2sTimes%20Square!5e0!3m2!1sen!2sus!4v1620056789012!5m2!1sen!2sus" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <h5><i class="fas fa-prescription-bottle-medical me-2"></i>MEDIVERSE</h5>
                    <p class="small">Mitra setia Anda dalam mencapai kesehatan dan kesejahteraan optimal. Kami berkomitmen untuk menyediakan perawatan farmasi yang luar biasa, saran ahli, dan rangkaian produk kesehatan yang komprehensif.</p>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                    <h5>Mengeksplorasi</h5>
                    <ul class="list-unstyled">
                        <li><a href="#about">Tentang Kami</a></li>
                        <li><a href="#services">Layanan</a></li>
                        <li><a href="#products">Produk</a></li>
                        <li><a href="#latest-medicines">Baru Masuk</a></li>
                        <li><a href="#offers">Penawaran</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5>Mendukung</h5>
                    <ul class="list-unstyled">
                        <li><a href="#faq">Pertanyaan Umum</a></li>
                        <li><a href="#consultation">Konsultasi Buku</a></li>
                        <li><a href="#contact">Konta Kami</a></li>
                        <li><a href="#">Kebijakan Privasi</a></li>
                        <li><a href="#">Ketentuan Layanan</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5>Ikuti Perjalanan Kami</h5>
                     <p class="small mb-2">Ikuti terus berita terbaru dan tips kesehatan kami di media sosial.</p>
                    <div class="social-icons">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                © <span id="currentYear"></span> MEDIVERSE. Seluruh Hak Dilindungi Undang-Undang.
               Dirancang dengan <i class="fas fa-heart text-danger"></i> by <a href="https://codewithfaraz.com/" target="_blank" rel="noopener noreferrer">codewithfaraz.com</a>.
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="script.js"></script>
</body>
</html>