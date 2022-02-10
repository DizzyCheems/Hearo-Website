@section('song-info')
<body> 
    <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center"  style="background-image:url('/images/WallpaperDog-10881763.jpg');">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
       <h1><a href="{{route('homepage')}}">
       </a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
        <img src="/images/Hearo.png"  class="logo-prop">
        <nav id="navbar" class="navbar" >
        <ul>
          <li><a class="nav-link scrollto active" href="{{route('homepage')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#store">Store</a></li>
          <li><a class="nav-link scrollto" href="{{route('artists')}}">Artists</a></li>
          <li><a class="nav-link scrollto" href="#events">Events</a></li>
          <li><a class="modal-button" type="button"  data-target="play-song" 
                                  href="{{route('homepage')}}" type="button">Contact</a></li>
          <li><a class="getstarted scrollto" href="#contact">Join</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  
<div style= "background-image:url('/images/WallpaperDog-10881763.jpg');">
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs" >
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Love Me Too</h2>
          <ol>
            <li><a href="{{route('musics')}}">Music Library</a></li>
            <li>Song Information</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="/succesor/image/Raez.jpg"  alt="" style="height: 450px;">
                </div>

                <div class="swiper-slide">
                  <img src="/succesor/albumbg/7bcc75bd4595cd470247bb872031e7d8-700.jpg" alt="" style="height: 450px;">
                </div>

                <div class="swiper-slide">
                  <img src="/images/Razaec LOGO.jpg" alt="" style="height: 450px;">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Song information</h3>
              <ul>
                <li><strong>Song Name</strong>: Love Me Too</li>
                <li><strong>Artist</strong>: Razaec</li>
                <li><strong>Date Released</strong>: Razaec</li>
                <li><strong>BPM</strong>: 01 March, 2020</li>
                <li><strong>Background photo Sauce</strong>: www.example.com</li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Facts</h2>
              <p>
                "SAMPLE TEXT"
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
</div>
  </div> <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">

            &copy; Copyright <strong>Hearo Records</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/vesperr-free-bootstrap-template/ -->
            Designed by <a href="#"> Hearo Inc.</a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Home</a>
            <a href="#about" class="scrollto">About</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Use</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->


      </body>
      @endsection