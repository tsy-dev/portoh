<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Portofolio - Portoh</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicon -->
  <link href="{{ asset('assets/img/favicon.svg') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

</head>

<body class="blog-page">

<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <a href="{{ url('/') }}" class="logo d-flex align-items-center">
      <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="img-fluid">
      <h1 class="sitename ">Portoh</h1>
    </a>
    <nav id="" class="">
      <i class="mobile-nav-toggle"></i>
    </nav>
  </div>

</header>

  <main class="main">

<!-- Page Title -->
<div class="page-title dark-background">
  <div class="container position-relative">
    <h1>Portfolio Details</h1>
    <p>Discover my portfolio, showcasing a range of projects that reflect my skills, creativity, and dedication to delivering high-quality work.</p>
    <nav class="breadcrumbs">
      <ol>
        <li><a href="/">Home</a></li>
        <li class="current">Portfolio Details</li>
      </ol>
    </nav>
  </div>
</div><!-- End Page Title -->

<!-- Portfolio Details Section -->
<section id="portfolio-details" class="portfolio-details section">
  <div class="container" data-aos="fade-up">
    <div class="align-items-center">
      <!-- Menampilkan satu gambar -->
      <div class="portfolio-item">
        <img src="{{ asset('storage/' . $portofolios->gambar) }}" alt="Portfolio Image" class="img-fluid">
      </div>
    </div>

    <div class="row justify-content-between gy-4 mt-4">
      <div class="col-lg-8" data-aos="fade-up">
        <div class="portfolio-description">
          <h2 class="portfolio-info">{{ $portofolios->nama }}</h2>
          <p class="portfolio-info">{{ $portofolios->deskripsi }}</p>
        </div>
      </div>

      <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
        <div class="portfolio-info">
          <h3>Project Information</h3>
          <ul>
            <li><strong>Category</strong> {{ $portofolios->kategori }}</li>
            <li><strong>Project Date</strong> {{ $portofolios->created_at->format('d M, Y') }}</li>
            <li><strong>Project URL</strong> <a href="{{ $portofolios->link }}">{{ $portofolios->link }}</a></li>
            <li><a href="{{ $portofolios->link }}" class="btn-visit" target="_blank">Visit Website</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Jangan lupa untuk menginisialisasi AOS di akhir halaman -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Inisialisasi AOS (Animate On Scroll)
    AOS.init();
  });
</script>



</main>

@include('frontend.layouts.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>