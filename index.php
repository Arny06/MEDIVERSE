<?php
session_start();
include "koneksi.php";


if (isset($_SESSION['status']) && $_SESSION['status'] == 'login') {
    $akses = 1; 
} else {
    $akses = 2; 
}
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
        <a class="navbar-brand" href="index.php">
            <i class="fas fa-prescription-bottle-medical"></i> MEDIVERSE
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto text-center">

                <li class="nav-item">
                    <a class="nav-link active" href="index.php">
                         Beranda
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="customer/daftar_obat.php"> Daftar Obat</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="customer/informasi_obat.php">
                         Informasi Obat
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="cara_pesan.php">
                         Cara Pemesanan
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="lokasi.php">
                         Lokasi Apotek
                    </a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="customer/profil.php"> Profil</a>
                    </li>

                <?php if ($akses == 1) { ?>
                   <li class="nav-item">
                        <a class="nav-link text-danger" href="logout.php"
                           onclick="return confirm('Apakah Anda yakin ingin logout?');"> Logout</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link text-warning" href="login.php"> Login</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>

    <section id="hero" class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1>SELAMAT DATANG DI APOTEK MEDIVERSE.</h1>
                <p>Mendukung Pelayanan Kesehatan yang Efisien dan Akurat,<br>Temukan era baru pelayanan farmasi dengan MEDIVERSE.</p>
            </div>
        </div>
    </section>

    <section id="about" class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="https://www.k24klik.com/blog/wp-content/uploads/2017/05/pharmacies.jpg" alt="About PharmaSleek Team" class="img-fluid about-us-img">
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
                            <a href="tel:+15551234567">+16 81215140740</a>
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
            
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="script.js"></script>
</body>
</html>