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
  <link href="assets/css/custom.css" rel="stylesheet">


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

</br></br></br>

  		<!-- JUDUL HALAMAN -->
          <section style="background-color:rgb(215, 206, 206)" id="keranjang" class="keranjang">
    <div class="container" data-aos="fade-up">

    
    <div class="section-header">
          <p style="font-size: 90px" class="">Keranjang <span>Belanja</span></p>
        </div>
        </br></br>
		<div class="row">
			<div class="col-12">
				<div class="table-responsive">
				  <table class="table">
				    <tr>
				    	<th>Foto</th>
				    	<th>Nama Produk</th>
				    	<th>Harga Satuan</th>
				    	<th>Kuantitas</th>
				    	<th>Harga</th>
				    	<th>Hapus</th>
				    </tr>

				    <tr>
				    	<td><img src="assets/img/gallery/produk1.jpg" class="img-cart"></td>
				    	<td>
				    		Rempeyek Udang<br>
				    		<small>1 kg</small>
				    	</td>
				    	<td>IDR 52.000</td>
				    	<td>
				    		<input type="number" value="0" class="form-control input-kuantitas" min="0" max="250">
				    	</td>
				    	<td>IDR 104.000</td>
				    	<td>
				    		<a href="#" class="btn btn-danger rounded-circle btn-tambah">
				    			<svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g clip-path="url(#clip0_54_458)">
								<path d="M1.125 16.3123C1.125 16.7599 1.30279 17.1891 1.61926 17.5056C1.93572 17.822 2.36495 17.9998 2.8125 17.9998H12.9375C13.3851 17.9998 13.8143 17.822 14.1307 17.5056C14.4472 17.1891 14.625 16.7599 14.625 16.3123V4.49982H1.125V16.3123ZM10.6875 7.31232C10.6875 7.16314 10.7468 7.02006 10.8523 6.91458C10.9577 6.80909 11.1008 6.74982 11.25 6.74982C11.3992 6.74982 11.5423 6.80909 11.6477 6.91458C11.7532 7.02006 11.8125 7.16314 11.8125 7.31232V15.1873C11.8125 15.3365 11.7532 15.4796 11.6477 15.5851C11.5423 15.6906 11.3992 15.7498 11.25 15.7498C11.1008 15.7498 10.9577 15.6906 10.8523 15.5851C10.7468 15.4796 10.6875 15.3365 10.6875 15.1873V7.31232ZM7.3125 7.31232C7.3125 7.16314 7.37176 7.02006 7.47725 6.91458C7.58274 6.80909 7.72582 6.74982 7.875 6.74982C8.02418 6.74982 8.16726 6.80909 8.27275 6.91458C8.37824 7.02006 8.4375 7.16314 8.4375 7.31232V15.1873C8.4375 15.3365 8.37824 15.4796 8.27275 15.5851C8.16726 15.6906 8.02418 15.7498 7.875 15.7498C7.72582 15.7498 7.58274 15.6906 7.47725 15.5851C7.37176 15.4796 7.3125 15.3365 7.3125 15.1873V7.31232ZM3.9375 7.31232C3.9375 7.16314 3.99676 7.02006 4.10225 6.91458C4.20774 6.80909 4.35082 6.74982 4.5 6.74982C4.64918 6.74982 4.79226 6.80909 4.89775 6.91458C5.00324 7.02006 5.0625 7.16314 5.0625 7.31232V15.1873C5.0625 15.3365 5.00324 15.4796 4.89775 15.5851C4.79226 15.6906 4.64918 15.7498 4.5 15.7498C4.35082 15.7498 4.20774 15.6906 4.10225 15.5851C3.99676 15.4796 3.9375 15.3365 3.9375 15.1873V7.31232ZM15.1875 1.12482H10.9688L10.6383 0.467401C10.5683 0.326851 10.4604 0.208624 10.3269 0.126019C10.1934 0.0434148 10.0394 -0.000289557 9.88242 -0.000176942H5.86406C5.7074 -0.000779187 5.55373 0.0427622 5.42067 0.125459C5.28761 0.208155 5.18054 0.326662 5.11172 0.467401L4.78125 1.12482H0.5625C0.413316 1.12482 0.270242 1.18409 0.164752 1.28958C0.0592632 1.39506 0 1.53814 0 1.68732L0 2.81232C0 2.96151 0.0592632 3.10458 0.164752 3.21007C0.270242 3.31556 0.413316 3.37482 0.5625 3.37482H15.1875C15.3367 3.37482 15.4798 3.31556 15.5852 3.21007C15.6907 3.10458 15.75 2.96151 15.75 2.81232V1.68732C15.75 1.53814 15.6907 1.39506 15.5852 1.28958C15.4798 1.18409 15.3367 1.12482 15.1875 1.12482Z" fill="white"/>
								</g>
								<defs>
								<clipPath id="clip0_54_458">
								<rect width="15.75" height="18" fill="white"/>
								</clipPath>
								</defs>
								</svg>

				    		</a>
				    	</td>
				    </tr>

				    <tr>
				    	<td><img src="assets/img/gallery/produk2.jpg" class="img-cart"></td>
				    	<td>
				    		Keripik Kentang Balado<br>
				    		<small>1 kg</small>
				    	</td>
				    	<td>IDR 60.00</td>
				    	<td>
				    		<input type="number" value="0" class="form-control input-kuantitas" min="0" max="250">
				    	</td>
				    	<td>IDR 120.000</td>
				    	<td>
				    		<a href="#" class="btn btn-danger rounded-circle btn-tambah">
				    			<svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g clip-path="url(#clip0_54_458)">
								<path d="M1.125 16.3123C1.125 16.7599 1.30279 17.1891 1.61926 17.5056C1.93572 17.822 2.36495 17.9998 2.8125 17.9998H12.9375C13.3851 17.9998 13.8143 17.822 14.1307 17.5056C14.4472 17.1891 14.625 16.7599 14.625 16.3123V4.49982H1.125V16.3123ZM10.6875 7.31232C10.6875 7.16314 10.7468 7.02006 10.8523 6.91458C10.9577 6.80909 11.1008 6.74982 11.25 6.74982C11.3992 6.74982 11.5423 6.80909 11.6477 6.91458C11.7532 7.02006 11.8125 7.16314 11.8125 7.31232V15.1873C11.8125 15.3365 11.7532 15.4796 11.6477 15.5851C11.5423 15.6906 11.3992 15.7498 11.25 15.7498C11.1008 15.7498 10.9577 15.6906 10.8523 15.5851C10.7468 15.4796 10.6875 15.3365 10.6875 15.1873V7.31232ZM7.3125 7.31232C7.3125 7.16314 7.37176 7.02006 7.47725 6.91458C7.58274 6.80909 7.72582 6.74982 7.875 6.74982C8.02418 6.74982 8.16726 6.80909 8.27275 6.91458C8.37824 7.02006 8.4375 7.16314 8.4375 7.31232V15.1873C8.4375 15.3365 8.37824 15.4796 8.27275 15.5851C8.16726 15.6906 8.02418 15.7498 7.875 15.7498C7.72582 15.7498 7.58274 15.6906 7.47725 15.5851C7.37176 15.4796 7.3125 15.3365 7.3125 15.1873V7.31232ZM3.9375 7.31232C3.9375 7.16314 3.99676 7.02006 4.10225 6.91458C4.20774 6.80909 4.35082 6.74982 4.5 6.74982C4.64918 6.74982 4.79226 6.80909 4.89775 6.91458C5.00324 7.02006 5.0625 7.16314 5.0625 7.31232V15.1873C5.0625 15.3365 5.00324 15.4796 4.89775 15.5851C4.79226 15.6906 4.64918 15.7498 4.5 15.7498C4.35082 15.7498 4.20774 15.6906 4.10225 15.5851C3.99676 15.4796 3.9375 15.3365 3.9375 15.1873V7.31232ZM15.1875 1.12482H10.9688L10.6383 0.467401C10.5683 0.326851 10.4604 0.208624 10.3269 0.126019C10.1934 0.0434148 10.0394 -0.000289557 9.88242 -0.000176942H5.86406C5.7074 -0.000779187 5.55373 0.0427622 5.42067 0.125459C5.28761 0.208155 5.18054 0.326662 5.11172 0.467401L4.78125 1.12482H0.5625C0.413316 1.12482 0.270242 1.18409 0.164752 1.28958C0.0592632 1.39506 0 1.53814 0 1.68732L0 2.81232C0 2.96151 0.0592632 3.10458 0.164752 3.21007C0.270242 3.31556 0.413316 3.37482 0.5625 3.37482H15.1875C15.3367 3.37482 15.4798 3.31556 15.5852 3.21007C15.6907 3.10458 15.75 2.96151 15.75 2.81232V1.68732C15.75 1.53814 15.6907 1.39506 15.5852 1.28958C15.4798 1.18409 15.3367 1.12482 15.1875 1.12482Z" fill="white"/>
								</g>
								<defs>
								<clipPath id="clip0_54_458">
								<rect width="15.75" height="18" fill="white"/>
								</clipPath>
								</defs>
								</svg>

				    		</a>
				    	</td>
				    </tr>

				    <tr>
				    	<td><img src="assets/img/gallery/produk3.jpg" class="img-cart"></td>
				    	<td>
				    		Keripik Pisang Original<br>
				    		<small>1 kg</small>
				    	</td>
				    	<td>IDR 40.00</td>
				    	<td>
				    		<input type="number" value="0" class="form-control input-kuantitas" min="0" max="250">
				    	</td>
				    	<td>IDR 80.000</td>
				    	<td>
				    		<a href="#" class="btn btn-danger rounded-circle btn-tambah">
				    			<svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g clip-path="url(#clip0_54_458)">
								<path d="M1.125 16.3123C1.125 16.7599 1.30279 17.1891 1.61926 17.5056C1.93572 17.822 2.36495 17.9998 2.8125 17.9998H12.9375C13.3851 17.9998 13.8143 17.822 14.1307 17.5056C14.4472 17.1891 14.625 16.7599 14.625 16.3123V4.49982H1.125V16.3123ZM10.6875 7.31232C10.6875 7.16314 10.7468 7.02006 10.8523 6.91458C10.9577 6.80909 11.1008 6.74982 11.25 6.74982C11.3992 6.74982 11.5423 6.80909 11.6477 6.91458C11.7532 7.02006 11.8125 7.16314 11.8125 7.31232V15.1873C11.8125 15.3365 11.7532 15.4796 11.6477 15.5851C11.5423 15.6906 11.3992 15.7498 11.25 15.7498C11.1008 15.7498 10.9577 15.6906 10.8523 15.5851C10.7468 15.4796 10.6875 15.3365 10.6875 15.1873V7.31232ZM7.3125 7.31232C7.3125 7.16314 7.37176 7.02006 7.47725 6.91458C7.58274 6.80909 7.72582 6.74982 7.875 6.74982C8.02418 6.74982 8.16726 6.80909 8.27275 6.91458C8.37824 7.02006 8.4375 7.16314 8.4375 7.31232V15.1873C8.4375 15.3365 8.37824 15.4796 8.27275 15.5851C8.16726 15.6906 8.02418 15.7498 7.875 15.7498C7.72582 15.7498 7.58274 15.6906 7.47725 15.5851C7.37176 15.4796 7.3125 15.3365 7.3125 15.1873V7.31232ZM3.9375 7.31232C3.9375 7.16314 3.99676 7.02006 4.10225 6.91458C4.20774 6.80909 4.35082 6.74982 4.5 6.74982C4.64918 6.74982 4.79226 6.80909 4.89775 6.91458C5.00324 7.02006 5.0625 7.16314 5.0625 7.31232V15.1873C5.0625 15.3365 5.00324 15.4796 4.89775 15.5851C4.79226 15.6906 4.64918 15.7498 4.5 15.7498C4.35082 15.7498 4.20774 15.6906 4.10225 15.5851C3.99676 15.4796 3.9375 15.3365 3.9375 15.1873V7.31232ZM15.1875 1.12482H10.9688L10.6383 0.467401C10.5683 0.326851 10.4604 0.208624 10.3269 0.126019C10.1934 0.0434148 10.0394 -0.000289557 9.88242 -0.000176942H5.86406C5.7074 -0.000779187 5.55373 0.0427622 5.42067 0.125459C5.28761 0.208155 5.18054 0.326662 5.11172 0.467401L4.78125 1.12482H0.5625C0.413316 1.12482 0.270242 1.18409 0.164752 1.28958C0.0592632 1.39506 0 1.53814 0 1.68732L0 2.81232C0 2.96151 0.0592632 3.10458 0.164752 3.21007C0.270242 3.31556 0.413316 3.37482 0.5625 3.37482H15.1875C15.3367 3.37482 15.4798 3.31556 15.5852 3.21007C15.6907 3.10458 15.75 2.96151 15.75 2.81232V1.68732C15.75 1.53814 15.6907 1.39506 15.5852 1.28958C15.4798 1.18409 15.3367 1.12482 15.1875 1.12482Z" fill="white"/>
								</g>
								<defs>
								<clipPath id="clip0_54_458">
								<rect width="15.75" height="18" fill="white"/>
								</clipPath>
								</defs>
								</svg>

				    		</a>
				    	</td>
				    </tr>
				  </table>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-5 ms-auto">
				<div class="table-responsive">
				  <table class="table">
				    <tr>
				    	<th>Biaya pengiriman</th>
				    	<td>IDR 10.000</td>
				    </tr>
				    <tr>
				    	<th>Total</th>
				    	<td>IDR 314.000</td>
				    </tr>
				    <tr>
				    	<td colspan="2">
				    		<a href="pembayaran.html" class="btn btn-lg btn-success w-100">Selesaikan Pembayaran</a>
				    	</td>
				    </tr>
				  </table>
				</div>

			</div>
		</div>


	</div> 

</div>
</section><!-- PENUTUP CONTAINER -->

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