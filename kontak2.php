<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cemilku</title>
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

      <a href="home.php" class="logo d-flex align-items-center me-auto me-lg-0">
       
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Cemilku<span>.</span></h1>
      </a>

<!-- Awal Navigasi -->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="produk.php">Produk</a></li>
            <li><a href="about2.php">About</a></li>
              <li><a href="kontak2.php">Kontak</a></li>
              <li><a href="keranjang.php">Keranjang</a></li>
              
        </ul>
        <!-- <ul>
          
          <a class="btn-book-a-table" href="login.php">Masuk</a>
          <a class="btn-book-a-table" href="register.php">Daftar</a>
          </ul> -->

         </nav>  
     
      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="assets/img/profile.png" alt="Profile" class="rounded-circle" width="60px">
        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['email']; ?></span>
        <!-- <span class="d-none d-md-block dropdown-toggle ps-2">Kevin Anderson</span> -->
      </a><!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $_SESSION['nama_pembeli']; ?></h6>
              <span>Pembeli</span>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="editprofil.php">
            <i class="bi bi-person-lines-fill"></i>
            <span>My Profile</span>
          </a>
        </li>


            <li>
              <hr class="dropdown-divider">
            </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="index.html">
            <i class="bi bi-box-arrow-in-right"></i>
            <span>Logout</span>
          </a>
        </li>
       

      </ul><!-- End Profile Dropdown Items -->

    </nav>
      
     <!-- Akhir Navigasi --> 
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header>
  
  <!-- Akhir Header -->
</br></br></br></br>
    <!-- ======= Contact Section ======= -->
    <section style="background-color:rgb(215, 206, 206)" id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
        
          <p><b>Hubungi <span>Kontak</span></b></p>
          
        </div>
        
        <div class="mb-3">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.1754303859713!2d111.8958392509711!3d-7.595985337487691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e784b028a0814ef%3A0x99a23e2327e4dddd!2sJl.%20Ar%20Saleh%20II%2039%2C%20Kauman%2C%20Kec.%20Nganjuk%2C%20Kabupaten%20Nganjuk%2C%20Jawa%20Timur%2064411!5e0!3m2!1sen!2sid!4v1668012883849!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Alamat</h3>
                <p>Jl. Ar Saleh II 39, Kauman, Kec. Nganjuk, Kabupaten Nganjuk, Jawa Timur 64411</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email</h3>
                <p>cemilku6969@gmail.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>WhatsApp</h3>
                <p>+628575429765</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Buka Setiap Hari</h3>
                <div><strong>Mon-Sat:</strong> 9AM - 20PM;
                  <strong>Sunday:</strong> 8AM - 14PM
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>
          </br>

        <div class="php-email-form p-3 p-md-4" >
          <a href="https://wa.me/623846543760">
          <div class="text-center"><button type="submit">Hubungi Via WhatsApp</button></div>
          </a>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    
      <div class="copyright">
        &copy; Copyright <strong><span>Cemilku</span></strong>. All Rights Reserved
     
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