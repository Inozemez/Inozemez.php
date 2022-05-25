<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head', ['title' => 'Житло в Італії-тут ви знайдете квартири, кімнати та інші варіанти проживання.'])
    <meta content="" name=" Нерухомість в Італії — оренда квартир, кімнат, ліжко-місць на тривалий та короткий період. ">
    <meta content="" name="Італія, квартира в умбрії, кімната в умбрії, місце - ліжко в умбрії, зняти квартиру в умбрії, зняти кімнату в умбрії, зняти місце - ліжко в умбрії.">


    @include('layouts.csscategory')

</head>

<body>

<!-- ======= Header ======= -->

@include('layouts.header')


</header><!-- End Header -->

<!-- ======= Breadcrumbs ======= -->

    @include('layouts.breadcrumbs')

</section><!-- End Breadcrumbs -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <h1>Оренда Житла в регіоні Умбрія!</h1>
        </div>
      </div>
    </div>
    
  </section><!-- End Hero -->

      <!-- ======= Searforcategory Section ======= -->

      <section id="emb" class="emb section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p>Упс...не знайдено жодного оголошення. </p>
        </div>
    </section><!-- End Searforcategory Section -->


  </main><!-- End #main -->

  <!-- ======= Ctg Section ======= -->
  <section id="ctg" class="ctg">
        <div class="container" data-aos="zoom-in">
          <div class="text-center">
          <h3>Опублікуй першим своє оголошення. Потрібно лиш перейти за посиланням і вказати усю необхідну інформацію:</h3>
            <a class="btn" href="./нове_оголошення"> + Розмістити оголошення</a>
            <div class="row mt-0">
              </div>
    
            </div>
          </div>
          </section><!-- End Cta Section -->
          <main id="main">
</main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">


  @include('layouts.footer')

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  @include('layouts.js')

</body>

</html>