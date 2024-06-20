<?php
require("header.php");
require("navbar.php");
?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-end align-items-center">
  <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

    <!-- Slide 1 -->
    <div class="carousel-item active">
      <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">Selamat Datang di <span>Wage Biro Technic</span></h2>
        <p class="animate__animated fanimate__adeInUp">Kami adalah mitra strategis anda dalam menghadapi tantangan solusi teknologi dan branding.</p>
        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item">
      <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">Filosofi Kami</h2>
        <p class="animate__animated animate__fadeInUp">Kami percaya bahwa inovasi adalah kunci untuk menciptakan perubahan positif, sementara kolaborasi yang kuat memungkinkan ide-ide terbaik untuk muncul. Integritas adalah landasan dari setiap tindakan kami, karena kami bertekad untuk bertindak dengan jujur, adil, dan menghormati nilai-nilai etika dalam setiap interaksi.</p>
        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="carousel-item">
      <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">Visi Untuk Masa Depan</h2>
        <p class="animate__animated animate__fadeInUp">Menjadi salah satu perusahaan pengembang teknologi dan solusi branding terpercaya</p>
        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
      </div>
    </div>

    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
    </a>

  </div>

  <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
    <defs>
      <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
    </defs>
    <g class="wave1">
      <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
    </g>
    <g class="wave2">
      <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
    </g>
    <g class="wave3">
      <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
    </g>
  </svg>

</section>
<!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="section-title" data-aos="zoom-out">
        <h2>About</h2>
        <p>Tentang Kami</p>
      </div>

      <div class="row content" data-aos="fade-up">
        <div class="col-lg-6">
          <p>
            Kami adalah mitra strategis anda dalam menghadapi
            tantangan solusi teknologi dan branding. Berdiri sejak 2017, kami telah membantu berbagai
            perusahaan di seluruh Indonesia mengembangkan bisnis mereka melalui solusi IT dan
            branding yang inovatif. Kami siap memberikan solusi yang sesuai dengan kebutuhan unik
            bisnis Anda.
          </p>
          <ul>
            <li><i class="ri-lightbulb-line"></i> Filosofi Kami</li>
            <p>
              Kami percaya bahwa inovasi adalah kunci
              untuk menciptakan perubahan positif,
              sementara kolaborasi yang kuat
              memungkinkan ide-ide terbaik untuk
              muncul. Integritas adalah landasan dari
              setiap tindakan kami, karena kami
              bertekad untuk bertindak dengan jujur,
              adil, dan menghormati nilai-nilai etika
              dalam setiap interaksi. Dengan
              mempraktikkan filosofi ini, kami bertujuan
              untuk menjadi mitra yang andal, inovatif,
              dan berintegritas bagi bisnis Anda.
            </p>
          </ul>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <ul>
            <li><i class="ri-lightbulb-line"></i> Visi Untuk Masa Depan</li>
            <p>
              Melihat arah pandang kedepan. Visi
              Wage Biro Technic untuk menjadi salah
              satu perusahaan pengembang teknologi
              dan solusi branding terpercaya.
              Komitmen kami untuk memberikan solusi
              IT dan branding yang inovatif dan efektif
              kepada mitra bisnis, sehingga setiap
              bisnis dapat bersaing di tingkat global.
              Fokus kami pada kualitas pelayanan
              harapanya dapat menciptakan dampak
              positif yang berkelanjutan dalam dunia
              teknologi dan branding bagi bisnis anda.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </ul>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Features Section ======= -->
  <section id="features" class="features">
    <div class="container">

      <ul class="nav nav-tabs row d-flex">
        <li class="nav-item col-4" data-aos="zoom-in">
          <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
            <i class="ri-gps-line"></i>
            <h4 class="d-none d-lg-block">Visi</h4>
          </a>
        </li>
        <li class="nav-item col-4" data-aos="zoom-in" data-aos-delay="100">
          <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
            <i class="ri-body-scan-line"></i>
            <h4 class="d-none d-lg-block">Misi</h4>
          </a>
        </li>
        <li class="nav-item col-4" data-aos="zoom-in" data-aos-delay="200">
          <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
            <i class="ri-sun-line"></i>
            <h4 class="d-none d-lg-block">Nilai Kami</h4>
          </a>
        </li>
      </ul>

      <div class="tab-content" data-aos="fade-up">
        <div class="tab-pane active show" id="tab-1">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
              <h3>Visi.</h3>
              <p class="fst-italic">
                “Menjadi salah satu perusahaan pengembang teknologi dan solusi
                branding yang mampu bersaing secara global dan terpercaya
                dalam memberikan solusi IT dan branding bagi semua kalangan.”
              </p>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="assets/img/features-1.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="tab-pane" id="tab-2">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
              <h3>Misi.</h3>
              <ul>
                <li><i class="ri-checkbox-circle-line"></i> Mengembangkan produk aplikasi (Dekstop & Web) guna meningkatkan produktifitas pekerjaan.</li>
                <li><i class="ri-checkbox-circle-line"></i> Mengembangkan ide dan kerjasama dengan sektor industri lainnya.</li>
                <li><i class="ri-checkbox-circle-line"></i> Mengedepankan profesionalitas, kemampuan diri dan kerjasama tim yang baik.</li>
                <li><i class="ri-checkbox-circle-line"></i> Memberikan solusi IT terbaik untuk semua kalangan guna mengatasi berbagai masalah.</li>
              </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="assets/img/features-2.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="tab-pane" id="tab-3">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
              <h3>Value</h3>
              <ul>
                <li><i class="ri-checkbox-circle-line"></i> Integritas</li>
                <p>
                  Kejujuran dan etika adalah hal utama
                  dalam semua aspek bisnis kami,
                  menjaga kepercayaan klien sebagai
                  hal yang paling berharga.
                </p>
                <li><i class="ri-checkbox-circle-line"></i> Kualitas</li>
                <p>
                  Komitmen kami adalah untuk selalu
                  memberikan yang terbaik dalam
                  layanan dan produk kami, sesuai
                  dengan standar tertinggi.
                </p>
                <li><i class="ri-checkbox-circle-line"></i> Pelayanan</li>
                <p>
                  Kepuasan klien adalah prioritas utama,
                  kami berusaha untuk melebihi harapan
                  klien dalam setiap kesempatan,
                  mendengarkan dengan seksama dan
                  bertindak sesuai dengan kebutuhan
                  mereka. Tim kami bekerja dengan
                  kecepatan dan kesesuaian jadwal guna
                  ketepatan deliver layanan atau produk
                </p>
                <li><i class="ri-checkbox-circle-line"></i> Tim Hebat</li>
                <p>
                  Dikerjakan oleh tim yang profesional
                  dan memiliki dedikasi tinggi dalam
                  proses pengerjaanya, sehingga
                  teknologi yang kami kembangkan
                  memiliki kualitas yang baik.
                </p>
              </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="assets/img/features-3.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Features Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title" data-aos="zoom-out">
        <h2>Services</h2>
        <p>Layanan Kami</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="icon-box" data-aos="zoom-in-left">
            <div class="icon"><i class="bi bi-shield-check" style=" color: #ff689b;"></i></div>
            <h4 class="title"><a href="">Security System</a></h4>
            <p class="description">
            <ul style="margin-left: 10px;">
              <li><i class="ri-circle"></i> Instalasi Dan Konfigurasi CCTV Ataupun PABX</li>
              <li><i class="ri-circle"></i> Service Dan Penambahan CCTV Dan PABX</li>
              <li><i class="ri-circle"></i> Perakitan Dan Instalasi Gate Tripod Untuk Workers Entrance</li>
              <li><i class="ri-circle"></i> System Gate Atau Parkir System</li>
              <li><i class="ri-circle"></i> Access Door Dan Absensi</li>
            </ul>
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
          <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
            <div class="icon"><i class="bi bi-hdd-network" style="color: #e9bf06;"></i></div>
            <h4 class="title"><a href="">Computer & Networking</a></h4>
            <p class="description">
            <ul style="margin-left: 10px;">
              <li><i class="ri-circle"></i> Instalasi Dan Konfigurasi Jaringan Dan Infrasruktur</li>
              <li><i class="ri-circle"></i> Instalasi Komputer Dan Jaringan Fiber Optic</li>
            </ul>
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
          <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
            <div class="icon"><i class="bi bi-window-stack" style="color: #94FFD8;"></i></div>
            <h4 class="title"><a href="">Software Development</a></h4>
            <p class="description">
            <ul style="margin-left: 10px;">
              <li><i class="ri-circle"></i> Enterprise Resource Planning ( ERP )</li>
              <li><i class="ri-circle"></i> Human Resource Management System</li>
              <li><i class="ri-circle"></i> IT Inventory</li>
              <li><i class="ri-circle"></i> Ticketing System</li>
              <li><i class="ri-circle"></i> Finance & Accounting System</li>
              <li><i class="ri-circle"></i> Warehouse Management</li>
              <li><i class="ri-circle"></i> Dll.</li>
            </ul>
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-5">
          <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="300">
            <div class="icon"><i class="bi bi-lightning-charge" style="color:#03AED2;"></i></div>
            <h4 class="title"><a href="">Electrical</a></h4>
            <p class="description">
            <ul style="margin-left: 10px;">
              <li><i class="ri-circle"></i> Instalasi Listrik dan Semua Kebutuhan dalam Infrastruktur Perusahaan</p>
            </ul>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mt-5">
          <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="400">
            <div class="icon"><i class="bi bi-megaphone-fill" style="color: #FF204E;"></i></div>
            <h4 class="title"><a href="">Brand Builder</a></h4>
            <p class="description">
            <ul style="margin-left: 10px;">
              <li><i class="ri-circle"></i> Brand Blueprint
              <li><i class="ri-circle"></i> Brand Design (Logo, Brochure, Packaging, Etc.)
              <li><i class="ri-circle"></i> Company Video Profile
              <li><i class="ri-circle"></i> Creative Content Social Media
              <li><i class="ri-circle"></i> Web/Apps Builder & Development
            </ul>
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mt-5">
          <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="400">
            <div class="icon"><i class="bi bi-houses" style="color: #d6ff22;"></i></div>
            <h4 class="title"><a href="">Home Maintenance</a></h4>
            <p class="description">
            <ul style="margin-left: 10px;">
              <li><i class="ri-circle"></i> Perawatan Berkala Rumah & Villa
              <li><i class="ri-circle"></i> Maintenance Kelistrikan Rumah & Villa
              <li><i class="ri-circle"></i> Maintenance Saluran Air Rumah & Villa
              <li><i class="ri-circle"></i> Repainting Bangunan Rumah & Villa
              <li><i class="ri-circle"></i> Dll.
            </ul>
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mt-5">
          <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="400">
            <div class="icon"><i class="bi bi-buildings-fill" style="color: #FF8F00;"></i></div>
            <h4 class="title"><a href="">Interior Design</a></h4>
            <p class="description">
            <ul style="margin-left: 10px;">
              <li><i class="ri-circle"></i> Desain & Instalasi Interior Sesuai Ruangan
              <li><i class="ri-circle"></i> Desain & Instalasi Both Pameran
              <li><i class="ri-circle"></i> Dll.
            </ul>
            </p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title" data-aos="zoom-out">
        <h2>Portfolio</h2>
        <p>What we've done</p>
      </div>

      <ul id="portfolio-flters" class="d-flex justify-content-end" data-aos="fade-up">
        <li data-filter="*" class="filter-active">All</li>
        <li data-filter=".filter-app">App</li>
        <li data-filter=".filter-card">Card</li>
        <li data-filter=".filter-web">Web</li>
      </ul>

      <div class="row portfolio-container" data-aos="fade-up">

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-1.1.png" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>Host to Host Ceisa 4.0</h4>
            <p>Web</p>
            <a href="assets/img/portfolio/portfolio-1.1.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Host to Host Ceisa 4.0"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.php?param=h2hceisa4.0" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-1.1.png" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>Host to Host Ceisa 4.0</h4>
            <p>Web</p>
            <a href="assets/img/portfolio/portfolio-1.1.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Host to Host Ceisa 4.0"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>App 2</h4>
            <p>App</p>
            <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>Card 2</h4>
            <p>Card</p>
            <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>Web 2</h4>
            <p>Web</p>
            <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>App 3</h4>
            <p>App</p>
            <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>Card 1</h4>
            <p>Card</p>
            <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>Card 3</h4>
            <p>Card</p>
            <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>Web 3</h4>
            <p>Web</p>
            <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Testimonials Section ======= -->
  <section id="client" class="testimonials">
    <div class="container">

      <div class="section-title" data-aos="zoom-out">
        <h2>Clients</h2>
        <p>Klien Kami</p>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/client/client-1.png" class="img-fluid" alt="">
              <!-- <h3>Sheldon J. Plankton</h3>
                <h4>Ceo &amp; Founder</h4> -->
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/client/client-2.png" class="img-fluid" alt="">
              <!-- <h3>Sandy Cheeks</h3>
                <h4>Designer</h4> -->
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/client/client-3.png" class="img-fluid" alt="">
              <!-- <h3>Larry</h3>
                <h4>Store Owner</h4> -->
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/client/client-4.png" class="img-fluid" alt="">
              <!-- <h3>Mermaid Man</h3>
                <h4>Freelancer</h4> -->
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/client/client-5.png" class="img-fluid" alt="">
              <!-- <h3>Mrs. Poppy Puff</h3>
                <h4>Entrepreneur</h4> -->
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/client/client-6.png" class="img-fluid" alt="">
              <!-- <h3>Mrs. Poppy Puff</h3>
                <h4>Entrepreneur</h4> -->
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/client/client-7.png" class="img-fluid" alt="">
              <!-- <h3>Mrs. Poppy Puff</h3>
                <h4>Entrepreneur</h4> -->
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/client/client-8.png" class="img-fluid" alt="">
              <!-- <h3>Mrs. Poppy Puff</h3>
                <h4>Entrepreneur</h4> -->
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/client/client-9.png" class="img-fluid" alt="">
              <!-- <h3>Mrs. Poppy Puff</h3>
                <h4>Entrepreneur</h4> -->
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/client/client-10.png" class="img-fluid" alt="">
              <!-- <h3>Mrs. Poppy Puff</h3>
                <h4>Entrepreneur</h4> -->
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/client/client-11.png" class="img-fluid" alt="">
              <!-- <h3>Mrs. Poppy Puff</h3>
                <h4>Entrepreneur</h4> -->
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/client/client-12.png" class="img-fluid" alt="">
              <!-- <h3>Mrs. Poppy Puff</h3>
                <h4>Entrepreneur</h4> -->
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->

  <!-- ======= Pricing Section ======= -->
  <!-- <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Pricing</h2>
          <p>Our Competing Prices</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="box" data-aos="zoom-in">
              <h3>Free</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="100">
              <h3>Business</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span class="advanced">Advanced</span>
              <h3>Ultimate</h3>
              <h4><sup>$</sup>49<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> -->
  <!-- End Pricing Section -->

  <!-- ======= Team Section ======= -->
  <section id="team" class="team">
    <div class="container">

      <div class="section-title" data-aos="zoom-out">
        <h2>Team</h2>
        <p>Our Hardworking Team</p>
      </div>

      <div class="row">

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up">
            <div class="member-img">
              <img src="assets/img/team/team-1.png" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>SpongeBob SquarePants</h4>
              <span>Chief Executive Officer</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="assets/img/team/team-2.png" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Patrick Star</h4>
              <span>Product Manager</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="assets/img/team/team-3.png" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Mr. Crab</h4>
              <span>CTO</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
              <img src="assets/img/team/team-4.png" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Squidward tentacles</h4>
              <span>Accountant</span>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Team Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title" data-aos="zoom-out">
        <h2>Contact</h2>
        <p>Kontak Kami</p>
      </div>

      <div class="row mt-5">

        <div class="col-lg-4" data-aos="fade-right">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>Jln. Kartini No.16, Dsn. Wage, Ds. Cangkringmalang
                Kec. Beji, Kab. Pasuruan - Jawa Timur 67154</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>wagebirotechnic@gmail.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+62 856-4678-0404</p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
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

</main>
<!-- End #main -->

<?php
require("footer.php");
?>