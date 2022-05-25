<!DOCTYPE html>
<html lang="ua">
<head>
@include('layouts.head', ['title' => 'InoZemeZ'])
	<title>soengsouy.com</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
	<!--===============================================================================================-->
	<link href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
	<!--===============================================================================================-->
	<link href="{{ asset('vendor/animate/animate.css') }}" rel="stylesheet" type="text/css">
	<!--===============================================================================================-->
	<link href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" type="text/css">
	<!--===============================================================================================-->
	<link href="{{ asset('vendor/select2/select2.min.css') }}" rel="stylesheet" type="text/css">
	<!--===============================================================================================-->
	<link href="{{ asset('css/util.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/mailformstyle.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/select.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/emain.css') }}" rel="stylesheet">

	<!--===============================================================================================-->
</head>
<body>

<!-- ======= Header ======= -->

@include('layouts.header')

</header><!-- End Header -->
<!-- ======= Breadcrumbs ======= -->

@include('layouts.breadcrumbs')

</section><!-- End Breadcrumbs -->

<!-- ======= Ads Section======= -->
<div class="bg-contact100" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact100">
			<div class="wrap-contact100">
				<div class="contact100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form action="{{ route('send.email') }}" class="contact100-form validate-form" method="post">
                    @csrf
					<span class="contact100-form-title">
					Розмістити оголошення
                    </span>
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif

					<div class="wrap-input100 validate-input" data-validate = "Name is required">
						<input class="input100" type="text" name="name" placeholder="Ім'я:">
						<span class="focus-input100"></span>
                        @error('name')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>

					<div class="wrap-input100 validate-input" data-validate = "Потрібна дійсна електронна адреса: ex@abc.com">
						<input class="input100" type="text" name="email" placeholder="Електронна пошта:">
						<span class="focus-input100"></span>
                    </div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="phone" name="phone" placeholder="Номер телефону:">
						<span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Subject is required">
						<input class="input100" type="text" name="subject" placeholder="Тема оголошення:">
						<span class="focus-input100"></span>
                        @error('subject')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>

					<div class="wrap-input100 validate-input" data-validate = "Message is required">
						<textarea class="input100" name="content" placeholder="Текст оголошення:"></textarea>
                        <span class="focus-input100"></span>
                        @error('content')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
					
					<div class="wrap-input100 validate-input">
						<div class="form__label">Прикріпити фото</div>
						<div class="file">
							<div class="file__item">
								<input id="formImage" accept=".jpg, .png, .gif" type="file" name="image" class="file__input">
								<div class="file__button">Вибрати</div>
							</div>
							<div id="formPreview" class="file__preview"></div>
						</div>

					<div class="wrap-input100 validate-input">
						<div class="checkbox">
							<input id="formAgreement" checked type="checkbox" name="agreement" class="checkbox__input req">
							<label for="formAgreement" class="checkbox__label"><span>Я даю свою згоду на обробку персональних даних відповідно до <a href="">Умов</a>*</span></label>
						</div>

					<div class="container-contact100-form-btn">
						<button type="submit" class="contact100-form-btn">
						Відправити
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	</header><!-- End Ads -->

          <!-- ======= Footer ======= -->
  <!-- data-aos="fade-up" - codice del movimento del testo -->
  <footer id="footer">
       <div class="social-links text-center text-md-center pt-3 pt-md-10">
       </div>
    </div>
 </div>

  @include('layouts.footer')

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>
  
  @include('layouts.js')


	<!--===============================================================================================-->
	<script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
	<!--===============================================================================================-->
	<script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
	<!--===============================================================================================-->
	<script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
	<!--===============================================================================================-->
	<script src="{{ asset('vendor/tilt/tilt.jquery.min.js') }}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="{{ asset('js/emain.js') }}"></script>
	<script src="{{ asset('js/select.js') }}"></script>
	<script src="{{ asset('js/script.js') }}"></script>
	@include('layouts.js')
</body>
</html>
