<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About Cemilku</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy - v1.2.1
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

   <!-- ======= Awal Header ======= -->
   <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
       
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Cemilku<span>.</span></h1>
      </a>

<!-- Awal Navigasi -->
<nav id="navbar" class="navbar">
  <ul>
    <li><a href="index.html">Home</a></li>
    <li><a href="menu.php">Produk</a></li>
      <li><a href="about.php">About</a></li>
        <li><a href="kontak.php">Kontak</a></li>
        <li><a href="keranjang.php">Keranjang</a></li>
        
  </ul>
  <!-- <ul>
    
    <a class="btn-book-a-table" href="login.php">Masuk</a>
    <a class="btn-book-a-table" href="register.php">Daftar</a>
    </ul> -->

   </nav>  

   <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="assets/img/profile.png" alt="Profile" class="rounded-circle" width="60px">
        <!-- <span class="d-none d-md-block dropdown-toggle ps-2">Kevin Anderson</span> -->
      </a><!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <!-- <li class="dropdown-header">
          <h6>Kevin Anderson</h6>
          <span>Web Designer</span>
        </li> -->
        <!-- <li>
          <hr class="dropdown-divider"> -->
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="login.php">
            <i class="bi bi-box-arrow-in-left"></i>
            <span>Masuk</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="register.php">
            <i class="bi bi-person"></i>
            <span>Daftar</span>
          </a>
        </li>
        <li>
       

      </ul><!-- End Profile Dropdown Items -->

</nav>
  
     <!-- Akhir Navigasi --> 
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header>
  
  <!-- Akhir Header -->


<!-- ======= Awal Tentang Kami ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
      <br> <br> <br>
        <p>Tentang <span>Kami</span></p>
      </div>

      <div class="row gy-4">
        <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/kaca.jpeg) ;" data-aos="fade-up" data-aos-delay="150">
          <div class="call-us position-absolute">
            
          </div>
        </div>
        <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
          <div class="content ps-0 ps-lg-5">
            <p class="">
              Cemilku adalah website yang menjual berbagai macam produk UMKM khususnya di bidang kuliner makanan ringan.
            </p>
            <ul>
              <b><li><i class="bi bi-check2-all"></i> Terbuat dari bahan dasar pilihan.</li>
              <li><i class="bi bi-check2-all"></i> Diproduksi oleh orang yang berpengalaman.</li>
              <li><i class="bi bi-check2-all"></i> 100% buatan sendiri.</li></b>
            </ul>
            <p class=""> Sudah 5 tahun kami membuat snack atau makanan ringan dan menjualnya kepada konsumen via offline.
              Oleh karena itu sesuai request dari para pelanggan setia,
               kami telah membuat website Cemilku agar memudahkan pelanggan setia ataupun calon pembeli untuk membeli produk kami.
            </p>

            <div class="position-relative mt-4">
              <img src="assets/img/jamur.jpg" class="img-fluid" alt="">
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- Akhir Tentang Kami -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Cemilku</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
      Designed by <a href="index.html">B2 Team</a>
    </div>
  </div>

</footer><!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>
</html>