<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{ url('/') }}" class="logo d-flex align-items-center">
        <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="img-fluid">
        <h1 class="sitename ">Portoh</h1>
      </a>

        <!-- Menu Navigasi -->
        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="/" class="scroll-to"data-target="#hero">Home</a></li>
            <li><a href="javascript:void(0);" class="scroll-to" data-target="#portfolio">Portofolio</a></li>
            <li><a href="/blog" target="_blank">Blog</a></li>
            <li><a href="javascript:void(0);" class="scroll-to" data-target="#about">About</a></li>
            <li><a href="javascript:void(0);" class="scroll-to" data-target="#contact">Contact</a></li>
          </ul>

          <!-- Tombol Toggle untuk Mobile -->
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
  </div>
</header>
