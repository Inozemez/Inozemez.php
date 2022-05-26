<!DOCTYPE html>
<html lang="en">

<head>
@include('layouts.head', ['title' => 'Житло в Італії-тут ви знайдете квартири, кімнати та інші варіанти проживання.'])
    <meta content="" name=" Нерухомість в Італії — оренда квартир, кімнат, ліжко-місць на тривалий та короткий період. ">
    <meta content="" name="квартира в абруццо, кімната в абруццо, місце - ліжко в абруццо, зняти квартиру в абруццо, зняти кімнату в абруццо, зняти місце - ліжко в абруццо, італія">

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
  <section class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
        </div>
      </div>
    </div>
    
  </section><!-- End Hero -->

      <!-- ======= Searforcategory Section ======= -->

      <section id="emb" class="emb section-bg">
      <div class="container" data-aos="fade-up">

      @include('layouts.2carrierannunci')
      
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