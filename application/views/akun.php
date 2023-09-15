<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>API Handphone</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url()?>assets/img/smartphone.png" rel="icon">
  <link href="<?php echo base_url()?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eNno - v4.10.0
  * Template URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Dokumentasi API</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Regulasi</a></li>
          <?php if ($_SESSION['hak_akses'] == 'P'){
                ?>
          <li><a class="nav-link scrollto" href="#cta">Dokumentasi API</a></li>
          <?php
                      }
                      ?>
          <!-- <li><a class="nav-link scrollto" href="#">Endpoint</a></li> -->
          
          <li class="dropdown"><a href="#"><span><?php echo $res->nama_lengkap ?></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <?php if ($_SESSION['hak_akses'] == 'P'){
                ?>
              <li><a href="<?php echo site_url()?>/Akun">Api Key</a></li>
              <?php
                      }
                      ?>
              <li>
               <?php if ($_SESSION['hak_akses'] == 'A'){
                ?> 
              <a href="<?php echo site_url()?>/Admin">Kelola Data API</a>
            </li>
            <?php
                      }
                      ?>
              <li><a href="<?php echo site_url()?>/Login/logout">Logout</a></li>
            </ul>
          </li>
          <!-- <li><a class="getstarted scrollto" href="<?php echo site_url()?>/Profilu">Akun</a></li>
          <li><a class="getstarted scrollto" href="<?php echo site_url()?>/Login/logout">Logout</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  
  <?php if ($_SESSION['hak_akses'] == 'P'){
                ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Selamat datang <?php echo $res->nama_lengkap ?>!</h1>
          <h2> </h2>
          <div class="d-flex">
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="<?php echo base_url()?>assets/img/api.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
  <?php
                      }
                      ?>


<?php if ($_SESSION['hak_akses'] == 'A'){
                ?>
   <!-- ======= Hero Section ======= -->
   <section id="hero" class="d-flex align-items-center">

<div class="container">
  <div class="row">
    <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
      <h1>Selamat datang Admin!</h1>
      <h2> </h2>
      <div class="d-flex">
      </div>
    </div>
    <div class="col-lg-6 order-1 order-lg-2 hero-img">
      <img src="<?php echo base_url()?>assets/img/api.png" class="img-fluid animated" alt="">
    </div>
  </div>
</div>

</section><!-- End Hero -->

<?php
                      }
                      ?>
  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-laptop"></i></div>
              <h4 class="title"><a href="">Mudah Digunakan</a></h4>
              <p class="description">ApiHP memberikan kemudahan bagi Anda dengan Endpoint yang mudah untuk diakses</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Menyediakan API</a></h4>
              <p class="description">ApiHP menyediakan API Handphone sehingga Anda dapat menampilkan informasi-informasi Handphone terkini di toko online</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-key"></i></div>
              <h4 class="title"><a href="">Dapatkan Key</a></h4>
              <p class="description">Lakukan registrasi sekarang dan login untuk mendapatkan key Anda</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="<?php echo base_url()?>assets/img/compliant.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>Aturan Penggunaan API</h3>
            <p class="fst-italic">
            Dalam rangka mempermudah Anda menggunakan API Handphone serta menjalin kerja sama yang saling menguntungkan, kami menyusun petunjuk penggunaan API yang harus diikuti:
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Anda diperkenankan melakukan cache untuk hasil Handphone. Cache ini dapat Anda manfaatkan untuk membuat fitur daftar-daftar Handphone atau semisalnya.</li>
              <li><i class="bi bi-check-circle"></i> Endpoint selain yang disebut pada nomor 1, harus di-request secara langsung (tidak boleh di-cache) untuk mendapatkan hasil yang akurat.</li>
              <li><i class="bi bi-check-circle"></i> Dilarang menggunakan bot, cron, atau script otomatis yang melakukan request ke Api HP tanpa action dari user. Seperti 'dumping' data HP dan lain-lain. Hal ini dapat memberatkan server sehingga berpengaruh pada semua user.</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <?php if ($_SESSION['hak_akses'] == 'P'){
                ?>
     <!-- ======= Cta Section ======= -->
     <section id="cta" class="cta">
      <div class="container">

        <div class="text-center">
          <h3>API DOCUMENTATION</h3>
          <p> API HP mudah untuk diintegrasikan karena menggunakan arsitektur REST dengan format balasan berupa JSON yang didukung oleh hampir semua bahasa pemrograman. </p>
          <a class="cta-btn" target="_blank" href="https://documenter.getpostman.com/view/23541771/2s8ZDR761L">Lihat Dokumentasi</a>
        </div>

      </div>
    </section> <br><!-- End Cta Section -->
    <?php
                      }
                      ?>

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row counters">

        <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
            <p>Endpoint</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1" class="purecounter"></span>
            <p>1 Account 1 API Key</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

  
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Contact</span>
          <h2>Contact</h2>
        
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Sarijadi Blok 8 No 48, Bandung</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>aditwiran19@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+62 89654 715638</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row  justify-content-center">
          <div class="col-lg-6">
            <h3>API HP</h3>
          </div>
        </div>

        <div class="social-links">
          <a href="https://twitter.com/Aditiyawiranda5"  target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com/aditiya.wiranda.1/" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/aditiya_0510/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://github.com/Aditw5" target="_blank" class="github"><i class="bx bxl-github"></i></a>
          <a href="https://www.linkedin.com/in/adi-tiya-wiranda-b18b58225/" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Adi Tiya Wiranda</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/enno-free-simple-bootstrap-template/ -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url()?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url()?>assets/js/main.js"></script>

</body>

</html>