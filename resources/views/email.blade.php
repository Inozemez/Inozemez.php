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
    

<!-- ======= Contact Section ======= -->

<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title" style="padding-bottom: 0px">
          <h2>Нове оголошення</h2>
          <p>Зателефонуйте, щоб отримати допомогу з публікацією оголошення.</p>
        </div>

        <div class="row mt-5" style="flex-wrap: wrap-reverse">

          <div class="col-lg-4" style="bording-top: 20px">
            <div class="info">
              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>info@inozemez.com</p>
              </div>
              
              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Телефон:</h4>
                <p>+39 320 46 36 129</p>
                <a>Зателефонуйте, щоб отримати допомогу з публікацією оголошення.</a>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-lg-0" style="margin-top: 5px">

            <form action="{{ route('send.email') }}" method="post" class="contact100-form validate-form">
                @csrf
                <h5>Розмістити оголошення</h5>
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

              <div class="form-row" data-validate = "Name is required">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Ваше ім'я" data-rule="minlen:4" data-msg="Будь ласка, напишіть ваше ім'я" />
                  <span class="focus-input100"></span>
                  @error('name')
                  <span class="text-danger"> {{ $message }} </span>
                  @enderror
                  <div class="validate"></div>
                </div>

                <div class="col-md-6 form-group" data-validate = "Потрібна дійсна електронна адреса: ex@abc.com">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Ваша електронна адреса" data-rule="email" data-msg="Введіть дійсну електронну пошту" />
                 <span class="focus-input100"></span>
                 @error('subject')
                <span class="text-danger"> {{ $message }} </span>
                @enderror
                  <div class="validate"></div>
                </div>
              </div>

              <div class="form-group" data-validate = "Subject is required">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Тема оголошення" data-rule="minlen:4" data-msg="Будь ласка, введіть принаймні 5 символів для Теми" />
                <span class="focus-input100"></span>
                @error('subject')
                <span class="text-danger"> {{ $message }} </span>
                @enderror
                <div class="validate"></div>
              </div>

              <div class="form-group" data-validate = "Будь ласка, напишіть оголошення">
                  <textarea class="form-control" name="content" rows="5" data-rule="required" data-msg="Будь ласка, напишіть оголошення" placeholder="Текст оголошення:"></textarea>
                  <span class="focus-input100"></span>
                  @error('content')
                  <span class="text-danger"> {{ $message }} </span>
                  @enderror
                  <div class="validate"></div>
              </div>
              <div class="form-group">
                  <input type="file" class="form-control-file" name="image" accept="image/png, image/jpeg">
             </div>              
              <div class="mb-3">
              <div class="text-center"><button type="submit">Надіслати повідомлення</button></div>
            </form>
          </div>

        </div>

      </div>

</section><!-- End Contact Section -->

  </main><!-- End #main -->

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