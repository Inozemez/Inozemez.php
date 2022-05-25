<!DOCTYPE html>
<html lang="en">
<head>
    @include('static.head', ['title' => 'Titolo pagina Home'])
    <link href="{{ asset('css/aboutsite.css') }}" rel="stylesheet">
    <link href="{{ asset('css/categorie.css') }}" rel="stylesheet">
    <link href="{{ asset('css/newcasa.css') }}" rel="stylesheet">

</head>
<body>

  <!-- ======= Header ======= -->

  @include('layouts.header')
  @include('layouts.headerbtn')

  </header><!-- End Header -->

<!-- ======= Breadcrumbs ======= -->

      @include('static.breadcrumbs')

</section><!-- End Breadcrumbs -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-10 text-center">
          <h1>Створити нове оголошення! </h1> 
          @include('static.login')
        </div>
      </div>

    </section><!-- End Breadcrumbs -->
<div>

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

      @include('static.basenew')

      @include('static.casanew')

      @include('static.foto')

      @include('static.description')

    </div>
            </section>
  </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 text-lg-left text-center">
              <div class="copyright">
                &copy; Copyright <strong>OnePage</strong>. All Rights Reserved
              </div>
              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </div>
            <div class="col-lg-6">
              <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
                <a href="#intro" class="scrollto">Головна</a>
                <a href="#about" class="scrollto">Про сайт</a>
                <a href="#">Політика конфіденційності</a>
                <a href="#">Умови користування</a>
              </nav>
            </div>
          </div>
        </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
<div id="preloader"></div>

@include('static.js')

</body>

</html>