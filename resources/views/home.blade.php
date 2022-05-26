<!DOCTYPE html>
<html lang="ua">
<head>
    @include('layouts.head', ['title' => 'InoZemeZ-сервіс оголошень країн Європи. Площадка для обміну інформацію серед іноземців.'])
    <meta content="" name="Розділи: оренда, перевізники, робота, послуг такі як: Здоров'я і краса,Майстри і ремонт,Водії та перевезення,Екскурсоводи,ІТ-підтримка,Курси та приватні уроки,Аніматори,
    заходи та весілля,Перекладачі,Адвокати,Інші послуги.">
    <meta content="" name="keywords">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/aboutsite.css') }}">
</head>
<body>
<!-- Messenger Plug-in della chat Code -->
<div id="fb-root"></div>

<!-- Your Plug-in della chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "104758268608611");
  chatbox.setAttribute("attribution", "biz_inbox");

  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v11.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

  <!-- ======= Top Bar ======= -->
<div>
 <section id="topbar" class="d-flex align-items-right">
   <div class="container justify-content-md-between fixed-top" style="text-align: right;">
     <div class="contact-info">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">info@inozemez.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +1 5589 55488 55
      </div>
    </div>
 </section>
</div>

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
            <h3>Приєднуйтесь, пишіть свої оголошення, шукайте серед опублікованих оголошень, залишайте свої відгуки та рекомендації.</h3>
            <p>Завдяки вашій допомозі ми будемо постійно розвиватися і покращувати сайт.</p>
            <div class="row mt-0">
              </div>
    
            </div>
          </div>
</section><!-- End Cta Section -->


<!-- ======= Footer ======= -->
  <!-- data-aos="fade-up" - codice del movimento del testo -->
  <footer id="footer">

   @include('layouts.social-links')

   @include('layouts.newsletter')

   @include('layouts.footer')

</footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

   @include('layouts.js')

<!-- start webpushr code --> 
<script>(function(w,d, s, id) {if(typeof(w.webpushr)!=='undefined') return;w.webpushr=w.webpushr||function(){(w.webpushr.q=w.webpushr.q||[]).push(arguments)};var js, fjs = d.getElementsByTagName(s)[0];js = d.createElement(s); js.id = id;js.async=1;js.src = "https://cdn.webpushr.com/app.min.js";fjs.parentNode.appendChild(js);}(window,document, 'script', 'webpushr-jssdk'));webpushr('setup',{'key':'BMMpA172yCoE-5ru1JsVfuvbWc34dLnMTbydcNy8IN5TNBbhv9aV6MAjWKzD9h0-85ARjCGre-04LwAGkmKXus4' });</script>
<!-- end webpushr code -->

</body>

</html>