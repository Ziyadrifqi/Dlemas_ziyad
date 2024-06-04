<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Prog II | Aplikasi Sederhana Digital Learning Management System (Di-Lemas)</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/styleDLemas.css">
</head>
<body>
<nav>
    <div class="logo">
        <img src="assets/SMA.png" alt="SMA 35">
        <span class="logo-text">SMA Negeri 35</span>
    </div>
    <ul class="nav-links">
        <li><a href="<?php echo base_url() . 'DLemas'; ?>">Home</a></li>
        <li><a href="#gallery">Gallery</a></li> <!-- Tambahkan link ke halaman gallery -->
        <li><a href="#location">Location</a></li><!-- Tambahkan link ke halaman lokasi -->
    </ul>
    </ul>
    <!-- Tambahkan tombol Input -->
    <div class="login-button">
        <a href="<?php echo base_url() . 'DLemas/Input'; ?>">Input</a>
    </div>
</nav>

    <div class="content">
        <h1>WELCOME</h1>
        <p>This is official website SMAN 35 Jakarta</p>
        <!-- Penempatan gambar di dalam div content -->
        <div class="welcome-photo-container">
            <img src="<?= base_url('assets/SMA.png') ?>" class="welcome-photo" alt="Selamat Datang">
        </div>
    </div>

   <!-- Gallery -->
<h2 id="gallery">Gallery</h2>
<div class="gallery">
    <div class="card">
        <img src="<?= base_url('assets/halaman.jpg') ?>" class="card-img-top" alt="Ini adalah gambar makanan">
        <div class="card-body">
            <p class="card-text">Selamat Datang</p>
        </div>
    </div>
    <div class="card">
        <img src="<?= base_url('assets/upacara.jpg') ?>" class="card-img-top" alt="Ini adalah gambar makanan">
        <div class="card-body">
            <p class="card-text">Upacara Senin</p>
        </div>
    </div>
    <div class="card">
        <img src="<?= base_url('assets/lapangan.jpg') ?>" class="card-img-top" alt="Image 3">
        <div class="card-body">
            <p class="card-text">SMAN 35 JAKARTA</p>
        </div>
    </div>
    <!-- Add more cards here -->
    <div class="card">
        <img src="<?= base_url('assets/sosialisasi.jpeg') ?>" class="card-img-top" alt="Image 3">
        <div class="card-body">
            <p class="card-text">Sosialisasi Pemilihan Mata Pelajaran Peminatan</p>
        </div>
    </div>
    <div class="card">
        <img src="<?= base_url('assets/pelepasan.jpg') ?>" class="card-img-top" alt="Image 3">
        <div class="card-body">
            <p class="card-text">Pelepasan Guru Purnabakti</p>
        </div>
    </div>
    <div class="card">
        <img src="<?= base_url('assets/kerja.jpg') ?>" class="card-img-top" alt="Image 3">
        <div class="card-body">
            <p class="card-text">Kerja Bakti SMAN 35 Menyambut Hari Pertama Belajar</p>
        </div>
    </div>
</div>
 
<!-- School Address & Map -->
<h2 id="location">Location</h2>
<div class="address-map">
    <div class="card">
        <div class="card-body alamat">
            <h2>School Address</h2>
            <p>SMA Negeri 35</p>
            <p> Jl. Mutiara, RT.18/RW.5</p>
            <p>Karet Tengsin, Kecamatan Tanah Abang</p>
            <p>Kota Jakarta Pusat</p>
            <p>Daerah Khusus Ibukota Jakarta 10220</p>
        </div>
        <div class="card-body map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.413674493744!2d106.81139727355419!3d-6.209042560816939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6a8fdb5ae9d%3A0x6b804be3ace5e1cb!2sSMA%20Negeri%2035%20Jakarta%20Pusat!5e0!3m2!1sid!2sid!4v1714204994210!5m2!1sid!2sid" 
                width="100%" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" l
                oading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</div>

<footer class="index-footer">
    <p>&copy; 2024 Web Prog II | Aplikasi Sederhana Digital Learning Management System (Di-Lemas)</p>
    <p>ZiyadRifqi Permana</p>
</footer>
</body>
</html>
