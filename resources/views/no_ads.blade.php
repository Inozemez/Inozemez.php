<!DOCTYPE html>
<html lang="ua">
<head>
    @include('layouts.head', ['title' => 'InoZemeZ'])
    <!-- Template Main CSS File -->
    <link href="{{ asset('css/util.css') }}" rel="stylesheet" type="text/css">



</head>
<body>

<!-- ======= Header ======= -->

    @include('layouts.header')

</header><!-- End Header -->

<!-- ======= Breadcrumbs ======= -->

    @include('layouts.breadcrumbs')

</section><!-- End Breadcrumbs -->

<!-- ======= Noads  ======= -->

<!-- ======= Ads Section======= -->
<div class="container-contact100">
			<div class="wrap-contact100">
				<div class="contact100-pic js-tilt" data-tilt>
                   <h1>Тут поки немає нових оголошень</h1>
                    <p class="description">Але ваше може бути першим!</p>
				</div>
			</div>
		</div>
	</div>

</section><!-- End Noads -->



<!-- ======= Footer ======= -->
  <!-- data-aos="fade-up" - codice del movimento del testo -->
  <footer id="footer">

   @include('layouts.footer')

</footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

   @include('layouts.js')
</body>

</html>