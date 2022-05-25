<!DOCTYPE html>
<html lang="ua">
<head>
    @include('layouts.head', ['title' => 'InoZemeZ'- сервіс оголошень країн Європи.Ви зможете з легкісттю публікувати і переглядати оголошення. Це площадка для обміну інформацію серед іноземців.])
    <!-- Template Main CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/aboutsite.css') }}">


</head>
<body>

  <!-- ======= Header ======= -->

    @include('layouts.header')
    @include('layouts.headerbtn')


</header><!-- End Header -->

<!-- ======= Breadcrumbs ======= -->

    @include('layouts.breadcrumbs')

</section><!-- End Breadcrumbs -->

<!-- ======= Hero Section ======= -->

    @include('layouts.hero')

  </section><!-- End Hero -->

<!-- ======= Cta Section ======= -->
      <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">
          <div class="text-center">
            <h3>Ми допоможемо вам опублікувати оголошення, потрібно лиш перейти за посиланням і вказати усю необхідну інформацію:</h3>
            <a class="cta-btn" href="./нове_оголошення"> + Розмістити оголошення</a>
            <div class="row mt-0">
              </div>
    
            </div>
          </div>
          </section><!-- End Cta Section -->
          <main id="main">
        </main><!-- End #main -->

    
          <!-- ======= About Section ======= -->

         @include('layouts.about-section')

        </section><!-- End About Section -->


      <!-- ======= Cta Section ======= -->
      <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">
          <div class="text-center">
            <h3>Приєднуйтесь до нас, пишіть свої оголошення, шукайте серед опублікованих оголошень, залишайте свої відгуки та рекомендації.</h3>
            <p>Завдяки вашій допомозі ми будемо постійно розвиватися і покращувати сайт.</p>
            <div class="row mt-0">
              </div>
    
            </div>
          </div>
          </section><!-- End Cta Section -->


  <!-- ======= Footer ======= -->
  <!-- data-aos="fade-up" - codice del movimento del testo -->
  <footer id="footer">

   @include('layouts.newsletter')

   @include('layouts.social-links')

   @include('layouts.footer')

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  @include('layouts.js')
</body>

</html>