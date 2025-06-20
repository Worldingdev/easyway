<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Envoyez vos colis avec Easyway - Livraison rapide</title>
  <meta name="description" content="Service d'expédition rapide depuis USA vers les Haiti. Suivi en ligne, délais fiables, prix compétitifs.">
  <meta name="keywords" content="envoyer un colis livraison express Haïti USA">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png') }}" rel="icon">
  {{-- <link href="{{asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon"> --}}

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        
        <h1 class=""><img src="{{asset('assets/img/logoeasywayWhite.png') }}" alt=""></h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Akey</a></li>
          <li><a href="#about">Galeri</a></li>
          <li><a href="#sevis">Sèvis</a></li>
          <li>
            @auth
                <a href="{{ route('dashboard') }}" class="text-blue-600 hover:underline">Dachbod</a>
            @else
                <a href="{{ route('loginPage') }}" class="text-blue-600 hover:underline">Konekte</a>
            @endauth
          </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main id="hero" class="main">

    <!-- Hero Section -->
 

      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ $page->flyer_1_d ? asset('storage/' . $page->flyer_1_d ) : asset('assets/img/bannerEasyway.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ $page->flyer_2_d ? asset('storage/' . $page->flyer_2_d ) : asset('assets/img/bannerEasyway4.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ $page->flyer_3_d ? asset('storage/' . $page->flyer_3_d ) :  asset('assets/img/bannerEasyway3.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <section  class="hero section light-background">

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h2>Easyway</h2>
            <p>{{ $page->text_1 }}</p>
            <p>{{ $page->text_2 }}</p>
            <div class="d-flex">
              <a href="{{ $page->videoLink }}" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Pou ou voye koli ak Easyway, Kijan ou kapbap fe sa, Klike pou gade yon video kap edew</span></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="{{asset('assets/img/delivery.png') }}" class="img-fluid" alt="">
          </div>
        </div>
      </div>

      <div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="200">
        <div class="container position-relative">
          <div class="row gy-4 mt-5 justify-content-center">

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-geo-alt"></i></div>
                <h4 class="title"><a href="#adres" class="stretched-link">Adrès nou yo</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-phone"></i></div>
                <h4 class="title"><a href="#adres" class="stretched-link">Kontak nou</a></h4>
              </div>
            </div><!--End Icon Box -->

            

          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">
      

      <div class="container">
        <div class="container section-title" data-aos="fade-up">
          <h2>Galeri</h2>
          <div><span>dènye</span> <span class="description-title">afich nou yo</span></div>
        </div><!-- End Section Title -->
        <div class="row gy-4 justify-content-evenly">
          

          <div class="col-sm-10 about-images justify-content-evenly" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">
              <div class="col-lg-6">
                <img src="{{ $page->flyer_1 ? asset('storage/' . $page->flyer_1 ) : asset('assets/img/fliyerInfo.jpg') }}" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6">
                <img src="{{ $page->flyer_2 ? asset('storage/' . $page->flyer_2 ) : asset('assets/img/SaleByCard.jpg') }}" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6">
                <div class="row gy-4">
                  <div class="col-lg-12">
                    <img src="{{ $page->flyer_3 ? asset('storage/' . $page->flyer_3 ) : asset('assets/img/NewAddress.jpg') }}" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-12">
                    <img src="{{ $page->flyer_4 ? asset('storage/' . $page->flyer_4 ) : asset('assets/img/fee.jpg') }}" class="img-fluid" alt="">
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="row gy-4">
                  <div class="col-lg-12">
                    <img src="{{ $page->flyer_5 ? asset('storage/' . $page->flyer_5 ) : asset('assets/img/notice.jpg') }}" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-12">
                    <img src="{{ $page->flyer_6 ? asset('storage/' . $page->flyer_6 ) : asset('assets/img/bannerEasyway.jpg') }}" class="img-fluid" alt="">
                  </div>
                </div>
              </div>
              
            </div>

          </div>

        </div>

      </div>
     

    <!-- Features Section -->
    <section id="sevis" class="features section light-background" style="margin-top: 60px ;">

      <!-- Section Title -->
      <section class="container section-title" data-aos="fade-up">
        <h2>Sèvis</h2>
        <div class="row justify-content-center">
          <div class="col-lg-8">
              <span>Gade nan ki etap</span>
              <span class="description-title">koli ou a ye</span>
          </div>
          <div class="col-lg-8 contact justify-content-center">
                  <form method="POST" action="/CheckColis" class=" row php-email-form justify-content-center" >
                  @csrf
                    <div class="col-md-10 justify-content-center">
                        <input type="hidden" name="typeCheck" value="check">
                        <input type="text" class="form-control" name="idColis" placeholder="Antre tracking number koli ou an nan pati sa" required>
                        <button class="btn" type="submit">Verifye</button>
                    </div>
                  </form>
          </div><!-- /Contact Section -->
        </div>
        
      </section><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5 justify-content-between">

          <div class="container section-title" data-aos="fade-up">
            <div><span>Kek</span> <span class="description-title">Boutik anliy</span></div>
          </div><!-- End Section Title -->

          <div class="col-xl-5" data-aos="zoom-out" data-aos-delay="100">
            <img src="{{ asset('assets/img/warehouse.png') }}" class="img-fluid" alt="">
          </div>
          <div class="col-xl-6 d-flex">
            <div class="row align-self-center gy-4">
  
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-handbag"></i>
                  <h3><a href="https://www.fashionnova.com/">FashionNova</a></h3>
                </div>
              </div><!-- End Feature Item -->
  
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-handbag"></i>
                  <h3><a href="https://www.amazon.com/">Amazon</a></h3>
                </div>
              </div><!-- End Feature Item -->
  
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-handbag"></i>
                  <h3><a href="https://www.ebay.com/">Ebay</a></h3>
                </div>
              </div><!-- End Feature Item -->
  
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-handbag"></i>
                  <h3><a href="https://www.shein.com/">Shein</a></h3>
                </div>
              </div><!-- End Feature Item -->
  
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-handbag"></i>
                  <h3><a href="https://www.boohooman.com/us/">BoohooMAN</a></h3>
                </div>
              </div><!-- End Feature Item -->
  
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="700">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-handbag"></i>
                  <h3><a href="https://www.temu.com/">TEMU</a></h3>
                </div>
              </div><!-- End Feature Item -->
  
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Features Section -->
    

    @include('Modal.AlertCheck')


    <!-- Faq Section -->
    <section id="" class="faq section light-background">

      <!-- <div class="container"> -->

        <div class="row gy-12">

          <div class="col-xl-12" data-aos="zoom-out" data-aos-delay="100">
            <img src="{{ asset('assets/img/bannerEasyway1.jpg') }}" class="img-fluid" alt="">
          </div>
        </div>

      <!-- </div> -->

    </section><!-- /Faq Section -->

    <!-- Contact Section -->
    <section id="adres" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Adrès</h2>
        <div><span>Tout</span> <span class="description-title">adrès nou yo</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade" data-aos-delay="100">

        <div class="row gy-4 justify-content-evenly">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3 >Adrès nou Etazini</h3>
                <p>{{ $page->adress_1 }}</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Nimero telefon</h3>
                <p>{{ $page->tel_usa }}</p>
              </div>
            </div><!-- End Info Item -->

            

          </div>

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Adrès nou Ayiti</h3>
                <p>{{ $page->adress_2 }}</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Telefon</h3>
                <p>{{ $page->tel_ht }}</p>
                <p>+509 4018 1662</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Imel</h3>
                <p>{{ $page->email }}</p>
              </div>
            </div><!-- End Info Item -->

          </div>

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer light-background">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Easyway</strong> <span>All Rights Reserved</span></p>
      </div>
      <div class="social-links d-flex justify-content-center">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
      <div class="credits">
        Designed by <a href="#">Worlding</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{asset('assets/js/main.js') }}"></script>

</body>

</html>
