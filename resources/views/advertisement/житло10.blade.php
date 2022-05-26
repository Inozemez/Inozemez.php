<!DOCTYPE html>
<html lang="ua">
<head>
@include('layouts.head', ['title' => 'Житло в Італії-тут ви знайдете квартири, кімнати та інші варіанти проживання.'])
    <meta content="" name=" Нерухомість в Італії — оренда квартир, кімнат, ліжко-місць на тривалий та короткий період. ">
    <meta content="" name="квартира в абруццо, кімната в абруццо, місце - ліжко в абруццо, зняти квартиру в абруццо, зняти кімнату в абруццо, зняти місце - ліжко в абруццо, італія">
    <link href="{{ asset('css/annunciosingolo.css') }}" rel="stylesheet">

    @include('layouts.csscategory')

</head>

<body>

  <!-- ======= Header ======= -->

    @include('layouts.header')

</header><!-- End Header -->

<!-- ======= Breadcrumbs ======= -->

@include('layouts.1breadcrumbs')



</section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8"style="padding-top: 115px">

                <div class="swiper-slide">
                  
                <article class="entry entry-single">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
             <div class="carousel-inner">
               <div class="carousel-item active">
                 <img class="card-img-top" src="/img/1.jpeg" alt="First slide" class="img-responsive">
               </div>
               <div class="carousel-item">
                 <img class="card-img-top" src="/img/2.jpeg" alt="Second slide" class="img-responsive">
               </div>
               <div class="carousel-item">
                 <img class="card-img-top" src="/img/3.jpeg" alt="Third slide" class="img-responsive">
               </div>
             </div>
             <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
             </a>
             <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
             </a>
          </div>
            </div>
          </div>

          <div class="col-lg-4" style="padding-top: 90px">

            <div class="portfolio-description">
              <h2>Подобова та постійна оренда житла в Римі біля моря</h2>
              <p>
              🔜Якщо ви шукаєте 🏠житло подобово в Римі, то вам саме до нас!!! З метро  Piramide лінія Б кілька зупинок 🚆поїздом до станції Ostia Centro і ви вже тут.  Для вас оренда кімнат подобово чи на постійно біля берега моря за дуже вигідними цінами.
              </p>
            </div>
            <div class="portfolio-info" >
            <p>
            <h3>Умови</h3>
- санвузол;
- кухня;
- українське ТВ;
- чиста білизна;
- пральна машина;
- холодильник тощо. 
                  </p>
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: Web design</li>
                <li><strong>Client</strong>: ASU Company</li>
                <li><strong>Project date</strong>: 01 March, 2020</li>
                <section id="contact" class="contact">
                <div class="container" data-aos="fade-up">
                <h3>✔Дзоніть по інфо до Оксани:  ☎️</h3>
                  <div class="info">
                    <div class="phone">
                     <i class="icofont-phone"></i>
                     <h4>Телефон:</h4>
                     <p>+39 320 46 36 129</p>
                 </div>
               </section><!-- End Contact Section -->

                <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
              </ul>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->


  <!-- ======= Footer ======= -->

  <footer id="footer">

   @include('layouts.footer')

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Template Main JS File -->

  @include('layouts.js')
</body>

</html>
