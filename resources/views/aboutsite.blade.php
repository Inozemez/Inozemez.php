<!DOCTYPE html>
<html lang="ua">

<head>
    @include('layouts.head', ['title' => 'Titolo pagina aboutsite'])
    <link href="{{ asset('public/css/aboutsite.css') }}" rel="stylesheet">

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inner Page - OnePage Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

</head>
<body>

  <!-- ======= Header ======= -->

  @include('layouts.header')
  @include('layouts.headerbtn')

  </header><!-- End Header -->


    <!-- ======= Breadcrumbs ======= -->

        @include('layouts.breadcrumbs')

    </section><!-- End Breadcrumbs -->

        <!-- ======= App Features Section ======= -->
        <section id="features" class="features">
      <div class="container">

        <div class="section-title-new">
          <h2>ПРО САЙТ</h2>
          <p>Швидко, просто, зручно, де б ви не були!</p>
        </div>

      </div>
    </section><!-- End App Features Section -->

    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
      <div class="container">

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src=" public/img/aboutsite/details-1.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <h3>Головною метою сайту є допомагати українцям по всій Італії та Європі  у пошуку стандартних речей для іноземця, мандрівника чи постійного мешканця країни. </h3>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src=" public/img/aboutsite/details-2.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3> Ви зможете з легкісттю розмістити особисте оголошення, яке буде опубліковано у відповідній категорії, таким чином користувач сайту зможе просто і швидко переглянути його і відповідно з'вязатися з вами.</h3>
            <p class="font-italic">
            Не витрачаючи більше купу часу на мандрівки різними групами у Facebook, чи чатами у WhatsApp і Telegram.
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="public/img/aboutsite/details-3.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5" data-aos="fade-up">
            <h3>Ви зможете насолоджуватись швидкісттю пошуку. Це платформа для буденного життя, для буденних потреб.</h3>
            <p>Тут будуть категорії, які б були цікавими в першу чергу Вам: </p>
            <ul>
              <li><i class="icofont-check"></i> Житло, квартира, кімната, місце ліжко, на короткий довгий період; </li>
              <li><i class="icofont-check"></i> Перевізники, буси, автобуси;</li>
              <li><i class="icofont-check"></i> Робота;</li>
              <li><i class="icofont-check"></i> Послуги такі як, здоров‘я і краса, перекладачі, майстри і ремонт, перевезення, екскурсоводи, ІТ підтримка, курси та приватні уроки, аніматори, заходи та весілля та інші послуги.</li>
            </ul>
            <p>
            Також, ми потурбувалися про те, аби ви за допомогою нашої бази даних, могли швидко знайти Посольство, Магазини, Церкви, Адвокатів,Нотаріусів, Бугалтерів, Каф.
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="public/img/aboutsite/details-4.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Приєднуйтесь до нашої компанії, пишіть свої оголошення, залишайте свої відгуки та рекомендації під оголошеннями і послугами, якими ви дійсно залишилися задоволені, або ж навпаки не задоволені.</h3>
<!--             <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p> -->
            <p>
              Звертайтесь, якщо вас цікавить розміщення реклами на сайті. Ми будемо постійно розвиватися і покращувати сайт, та в цьому нам буде потрібна ваша допомога. 
            </p>
<!--             <ul>
              <li><i class="icofont-check"></i> Et praesentium laboriosam architecto nam .</li>
              <li><i class="icofont-check"></i> Eius et voluptate. Enim earum tempore aliquid. Nobis et sunt consequatur. Aut repellat in numquam velit quo dignissimos et.</li>
              <li><i class="icofont-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
            </ul> -->
          </div>
        </div>

      </div>
    </section><!-- End Details Section -->

  <!-- ======= Footer ======= -->
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