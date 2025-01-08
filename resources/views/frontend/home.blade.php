@extends('frontend.layouts.app')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

    <div id="hero-carousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>My Profile</span></h2>
          <p class="animate__animated animate__fadeInUp">
            Welcome to my profile! Here, you'll find a collection of my best works in graphic design, from creative projects to visual solutions for various needs. I believe that art is a universal language, and I’m excited to share my stories through design.
          </p>
          <a href="javascript:void(0);" class="btn-get-started animate__animated animate__fadeInUp scroll-to" data-target="#portfolio">Read More</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">About Me</h2>
          <p class="animate__animated animate__fadeInUp">
            I am a graphic designer with a background in Informatics Engineering. Combining creativity with technology, I strive to create works that are not only visually appealing but also functional. Let’s dive deeper into my journey and how I can help bring your ideas to life.
          </p>
          <a href="javascript:void(0);" class="btn-get-started animate__animated animate__fadeInUp scroll-to" data-target="#about">Read More</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Get In Touch</h2>
          <p class="animate__animated animate__fadeInUp">
            Do you have an idea, project, or simply want to chat? I’m always open to discussions and collaborations. There’s nothing more fulfilling than helping turn your dreams into reality. Feel free to reach out to me via email or social media. I look forward to hearing from you!
          </p>
          <a href="javascript:void(0);" class="btn-get-started animate__animated animate__fadeInUp scroll-to" data-target="#contact">Read More</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

      </div>



      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="wave1">
          <use xlink:href="#wave-path" x="50" y="3"></use>
        </g>
        <g class="wave2">
          <use xlink:href="#wave-path" x="50" y="0"></use>
        </g>
        <g class="wave3">
          <use xlink:href="#wave-path" x="50" y="9"></use>
        </g>
      </svg>

    </section><!-- /Hero Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>What we've done</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-design">Design</li>
          <li data-filter=".filter-ui-ux">UI/UX</li>
          <li data-filter=".filter-app-web">App/Web</li>
        </ul><!-- End Portfolio Filters -->

        <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
          @foreach($portofolios as $portofolio)
            <div class="col-lg-4 col-md-6 col-12 portfolio-item isotope-item filter-{{ strtolower(str_replace(['/', '&'], ['-', 'and'], $portofolio->kategori)) }}">
              <!-- Gambar Portofolio -->
              <img src="{{ asset('storage/' . $portofolio->gambar) }}" class="img-fluid" alt="{{ $portofolio->nama }}">
              <div class="portfolio-info">
                <h4>{{ $portofolio->nama }}</h4>
                <!-- Preview Gambar -->
                <a href="{{ asset('storage/' . $portofolio->gambar) }}" title="{{ $portofolio->nama }}" data-gallery="portfolio-gallery-{{ strtolower(str_replace(['/', '&'], ['-', 'and'], $portofolio->kategori)) }}" class="glightbox preview-link" id="portfolio-image-{{ $portofolio->portofolio_id }}">
                  <i class="bi bi-zoom-in"></i>
                </a>
                <!-- Link Ke Halaman Detail -->
                <a href="{{ url('portofolio/' . $portofolio->portofolio_id) }}" title="More Details" class="details-link" id="portfolio-details-{{ $portofolio->portofolio_id }}">
                  <i class="bi bi-link-45deg"></i>
                </a>
              </div>
            </div>
          @endforeach
        </div>


        </div>

      </div>

      <script>
        document.addEventListener("DOMContentLoaded", function() {
          // Mengecek ukuran layar
          if (window.innerWidth <= 768) {
            // Menambahkan event listener untuk gambar
            const previewLinks = document.querySelectorAll('.preview-link');
            
            previewLinks.forEach(link => {
              link.addEventListener('click', function(e) {
                // Mencegah aksi default
                e.preventDefault();
                
                // Mendapatkan ID portofolio
                const portfolioId = this.id.split('-')[2];

                // Redirect ke halaman detail portfolio
                window.location.href = '/portofolio/' + portfolioId;
              });
            });
          }
        });
      </script>


    </section><!-- /Portfolio Section -->


    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p>Who we are</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p>
              Hi! I'm a passionate Freelance Graphic Designer with a keen eye for creativity and detail. Alongside my work in design, I'm currently pursuing a degree in Informatics Engineering, where I deepen my understanding of technology and problem-solving. My journey combines art and technology, allowing me to create innovative and visually compelling solutions. Let's collaborate and bring ideas to life!
            </p>
            <a href="javascript:void(0);" class="read-more scroll-to" data-target="#portfolio"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>Mojotengah, Wonosobo, Central Java 56361</p>
              </div>
            </div><!-- End Info Item -->

            <!-- <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+62 82123456789</p>
              </div>
            </div>End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>tohasyafingi12@gmail.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="">

              <livewire:contact-form />
          </div>
        </div>

      </div>

    </section><!-- /Contact Section -->
@endsection