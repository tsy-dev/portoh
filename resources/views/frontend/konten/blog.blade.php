<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Blog - Portoh</title>
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
       
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current"><a href="/blog">Blog</a></li>
            <li class="current">{{ $blog->nama_user }}</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <section id="blog-details" class="blog-details section">
        <div class="container">

            <article class="article">
                <!-- Menampilkan Gambar Thumbnail -->
                <div class="post-img">
                    <img src="{{ asset('storage/' . $blog->thumbnail) }}" alt="{{ $blog->judul }}" class="img-fluid">
                </div>

                <!-- Menampilkan Judul Blog -->
                <h2 class="title">{{ $blog->judul }}</h2>

                <div class="meta-top">
                    <ul>
                        <!-- Menampilkan Nama Penulis -->
                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">{{ $blog->nama_user }}</a></li>
                        <!-- Menampilkan Tanggal Pembuatan -->
                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="{{ $blog->created_at }}">{{ $blog->created_at->format('M d, Y') }}</time></a></li>
                    </ul>
                </div><!-- End meta top -->

                <div class="content">
                    <!-- Menampilkan Isi Blog -->
                    {!! nl2br($blog->isi) !!}
                </div><!-- End post content -->

                <div class="meta-bottom">
                    <i class="bi bi-folder"></i>
                    <ul class="cats">
                        <li><a href="#">{{ $blog->kategori }}</a></li>
                    </ul>
                </div><!-- End meta bottom -->

            </article>

        </div>
    </section><!-- /Blog Details Section -->

    <div class="row">
    <!-- Main Content Section -->
        <div class="col-lg-8">
            <!-- Main content of the page goes here -->
            <div class="content">
                <!-- Your blog content here -->
            </div>
        </div>

        <!-- Sidebar Section -->
        

        <!-- /Sidebar -->
    </div>


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
