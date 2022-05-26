<!DOCTYPE html>
<html lang="ua">
<head>
    @include('layouts.head', ['title' => 'InoZemeZ'])
    <!-- Template Main CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/aboutsite.css') }}">
    <link href="{{ asset('css/util.css') }}" rel="stylesheet" type="text/css">



</head>
<body>

<!-- ======= Header ======= -->

    @include('layouts.header')

</header><!-- End Header -->

<!-- ======= Breadcrumbs ======= -->

    @include('layouts.breadcrumbs')

</section><!-- End Breadcrumbs -->
    

<!-- ======= Emb Section ======= -->

@include('layouts.embasy-section')

</section><!-- End Emb Section -->


<!-- ======= Footer ======= -->
  <!-- data-aos="fade-up" - codice del movimento del testo -->
  <footer id="footer">

   @include('layouts.social-links')

   @include('layouts.footer')

</footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

   @include('layouts.js')
</body>

</html>