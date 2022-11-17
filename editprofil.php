<?php

session_start();
// $query = mysqli_query($conn, "SELECT * FROM pembeli WHERE id_pembeli = '".$_SESSION['id_pembeli']."' ");
// 	$d = mysqli_fetch_object($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Edit Profil</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
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

  <main id="main" class="main">
</br></br></br></br></br></br>


    <section class="section profile">
    <div class="container" data-aos="fade-up">

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Profile</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#address">Edit Alamat</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Ubah Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Detail Profile</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Username</div>
                    <div class="col-lg-9 col-md-8"><?php echo $_SESSION['nama_pembeli']; ?></div>
                  </div>

                  

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nomor HP</div>
                    <div class="col-lg-9 col-md-8"><?php echo $_SESSION['telpon']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?php echo $_SESSION['email']; ?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Alamat</div>
                    <div class="col-lg-9 col-md-8"></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Kecamatan</div>
                    <div class="col-lg-9 col-md-8"></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Kota</div>
                    <div class="col-lg-9 col-md-8"></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Kode Pos</div>
                    <div class="col-lg-9 col-md-8"></div>
                  </div>


                </div>
                

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Username</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="fullName" type="text" class="form-control" id="fullName" value="<?php echo $_SESSION['nama_pembeli']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Nomor HP</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="number" class="form-control" id="Phone" value="<?php echo $_SESSION['telpon']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="<?php echo $_SESSION['email']; ?>">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" name="submit" class="btn btn-primary">Ubah Profile</button>

                    </div>
                  </form><!-- End Profile Edit Form -->
                  

                </div>


                <div class="tab-pane fade address pt-3" id="address">

<!-- Address Form -->
<form>

  <div class="row mb-3">
    <label for="alamat" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
    <div class="col-md-8 col-lg-9">
      <input name="alamat" type="text" class="form-control" id="alamat" value="">
    </div>
  </div>

  <div class="row mb-3">
    <label for="kota" class="col-md-4 col-lg-3 col-form-label">Kota</label>
    <div class="col-md-8 col-lg-9">
      <input name="kota" type="text" class="form-control" id="kota" value="">
    </div>
  </div>

  <div class="row mb-3">
    <label for="kecamatan" class="col-md-4 col-lg-3 col-form-label">Kecamatan</label>
    <div class="col-md-8 col-lg-9">
      <input name="kecamatan" type="text" class="form-control" id="kecamatan" value="">
    </div>
  </div>

  <div class="row mb-3">
    <label for="kodepos" class="col-md-4 col-lg-3 col-form-label">Kode Pos</label>
    <div class="col-md-8 col-lg-9">
      <input name="kodepos" type="text" class="form-control" id="kodepos" value="">
    </div>
  </div>

  <div class="text-center">
    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
  </div>
</form><!-- End Address Form -->

</div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form>

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Password Saat Ini</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="currentPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Password Baru</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Ulangi Password Baru</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Ganti Password</button>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>
                        </div>
        </div>
      </div>
    </section>

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




  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>