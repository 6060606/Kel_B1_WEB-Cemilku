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

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
       
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Cemilku<span>.</span></h1>
      </a>

<!-- Awal Navigasi -->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="menu.php">Produk</a></li>
            <li><a href="about.html">About</a></li>
              <li><a href="#contact">Kontak</a></li>
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

  <!-- ======= Awal Cemilku ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Isi Waktu Gabutmu
            <br>Dengan Cemilku</h2>
          <p data-aos="fade-up" data-aos-delay="100">Menjual produk UMKM makanan ringan homemade dengan harga merakyat dan dijamin nikmat.</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="menu.html" class="btn-book-a-table">Lihat Produk</a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/produk awal.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section>
<!-- Akhir Cemilku -->
  <main id="main">

    <!-- ======= Awal Kelebihan ======= -->
    <section id="keunggulan" class="keunggulan">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
        
          <p>Keunggulan <span>Cemilku</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/pisang.jpeg) ;" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="">
                Cemilku sudah terpercaya menjadi pilihan para kaum gabut untuk solusi agar kegabutannya teratasi dengan cara memakan cemilan keripik dari produk Cemilku
              </p>
              <ul>
                <b><li><i class="bi bi-check2-all"></i> Terbuat dari bahan dasar pilihan.</li>
                <li><i class="bi bi-check2-all"></i> Diproduksi oleh orang yang berpengalaman.</li>
                <li><i class="bi bi-check2-all"></i> 100% buatan sendiri.</li>
                <li><i class="bi bi-check2-all"></i> Tidak Mengandung Bahan Pengawet</li>
                <li><i class="bi bi-check2-all"></i> Renyah Tahan Lama</li></b>
              </ul>
              <p class=""> Sudah 5 tahun kami membuat snack atau makanan ringan dan menjualnya kepada konsumen via offline.
                Oleh karena itu sesuai request dari para pelanggan setia,
                 kami telah membuat website Cemilku agar memudahkan pelanggan setia ataupun calon pembeli untuk membeli produk kami.
              </p>

              <div class="position-relative mt-4">
                <img src="assets/img/singkong.jpg" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- Kelebihan  -->


    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="zoom-out">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="212" data-purecounter-duration="1" class="purecounter"></span>
              <p>Pelanggan</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
              <p>Produk</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Terjual</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter"></span>
              <p>Rating</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
        
          <p><span>Chef Profesional</span> Kami</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              
              <div class="member-img">
                <img src="assets/img/profil.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Ibu Siti Meimona</h4>
                <span>Master Chef Cemilku</span>
                
              </div>
            </div>

          </div>
          <div class="col-lg-7 d-flex align-items-lg-start" data-aos="fade-up" data-aos-delay="300">
            <div class="member-deskripsi">
               <p>Ibu Siti Meimona adalah chef andalan sekaligus owner dari Cemilku.
                Ibu Siti sudah 5 tahun menggeluti bisnis UMKM di bidang kuliner yaitu berjualan aneka snack makanan ringan yang cocok untuk menemani kamu ketika dilanda kegabutan yang HQQ.
                <br><br>Berikut portofolio singkat Ibu Siti Meimona :
                <ul>
                  <li> Owner Cemilku</li>
                  <li> Chef Cemilku</li>
                  <li> Maker Keripik Singkong Pedaz</li>
                  <li> Maker Keripik Kentang</li>
                  <li> Maker Keripik Pisang</li>
                  <li> Maker Keripik Gadung</li>
                </ul>
              </p>  
          </div>
        </div>
      </div>
    
    </div>
      </div>


      
  
    </section><!-- End Chefs Section -->


    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          
          <p><b>Galery Produk Kami</b></p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/produk1.jpg"><img src="assets/img/gallery/produk1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/produk2.jpg"><img src="assets/img/gallery/produk2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/produk3.jpg"><img src="assets/img/gallery/produk3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/produk4.jpg"><img src="assets/img/gallery/produk4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/produk5.jpg"><img src="assets/img/gallery/produk5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/produk6.jpg"><img src="assets/img/gallery/produk6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/produk7.jpg"><img src="assets/img/gallery/produk7.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/produk8.jpg"><img src="assets/img/gallery/produk8.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
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