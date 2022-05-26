<!DOCTYPE html>
<html lang="ua">
<head>
@include('layouts.head', ['title' => 'InoZemeZ'])
	<title>soengsouy.com</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="{{ asset('css/util.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('/css/emain.css') }}" rel="stylesheet">
	<link href="{{ asset('css/mailformstyle.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/select.css') }}" rel="stylesheet">

	<!--===============================================================================================-->
</head>
<body>
<!-- ======= Header ======= -->

@include('layouts.header')

</header><!-- End Header -->


<!-- ======= Ads Section======= -->
<div class="bg-contact100" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact100">
			<div class="wrap-contact100">
				<div class="contact100-pic js-tilt" data-tilt>
				</div>
				  <span class="contact100-form-title" style="text-align: center;">
					Юридичні Аспекти
				  </span>
					<span class="contact100-form-title">
					  <a href="./">InoZemeZ.com </a>- це віртуальний веб-сайт оголошень. </span>
				    </span>
					<div class="wrap-input100 validate-input">
						<div class="form__label">InoZemeZ - це веб-сторінка оголошень, яка не є посередником. Використовуючи InoZemeZ.com, ви погоджуєтеся, що ця веб-сторінка оголошень, не несе відповідальності щодо будь-якої угоди або угоди до якого ви можете прийти з людьми або компаніями, які розміщують оголошення на цьому сайті.</div>
						</div>
					 <div class="wrap-input100 validate-input">
						<div class="form__label">Політика конфіденційності.</div>

							<label for="formAgreement" class="checkbox__label"><span><a href="./">InoZemeZ</a> збирає дані особистого характеру безпосередньо від фізичних або юридичних осіб (користувачів, відвідувачів і клієнтів), які добровільно хочуть використовувати цей сайт. З моменту введення даних за допомогою відповідного формуляра, ви даєте згоду на обробку цих даних з метою включити їх в нашу базу даних для використання в комерційних цілях, також як і надання інформації, третім особам з цього сайту або по електронній пошті. Обов'язково вкажіть всі дані, запитувані в цьому формулярі, без чого дана послуга не може здійснюватися належним чином. Проте, в будь-який час ви можете скористатися своїм правом доступу, внести виправлення або скасування в зв'язку з цим, звертаючись за вказаною вище адресою електронної пошти, вказавши своє ім'я, адресу електронної пошти та пароль користувача gabinohome.com.</span></label>
						</div>

						<div class="wrap-input100 validate-input">
						<div class="form__label">Звільнення від відповідальності.</div>

							<label for="formAgreement" class="checkbox__label"><span> Інформація, яка знаходиться на даному сайті, була надана і введена безпосередньо користувачами, тому можлива поява помилки або точність даної інформації є відповідальністю безпосередньо особи, яка її надала. У будь-якому випадку, якщо ви виявите будь-яку неточність в існуючій інформації, ми просимо повідомити нам з метою її виправлення. <a href="./">InoZemeZ</a> - не є посередником, в зв'язку з чим не відповідає за достовірність інформації, що публікується.</span></label>
						</div>

						<div class="wrap-input100 validate-input">
						<div class="form__label">Умови використання для рекламодавців.</div>

							<label for="formAgreement" class="checkbox__label"><span> - Заповніть всі необхідні поля формуляра для рекламодавців.</span></label>
							<label for="formAgreement" class="checkbox__label"><span> - Дотримуйтесь категорії; наприклад, якщо ви здаєте квартиру, слід розміщувати оголошення в розділ Квартири в оренду, а не в розділі Кімнати в оренду. Якщо оголошення не відповідає вимогам, ваше оголошення буде видалено або змінено категорія без попереднього сповіщення.</span></label>
							<label for="formAgreement" class="checkbox__label"><span> - У розділі МОВИ повинні бути дотримані норми. Кожна мова має перебувати у відповідному розділі; в разі порушення цієї умови, оголошення може бути негайно видалено з відмовою в поверненні в разі виділеного оголошення.</span></label>
							<label for="formAgreement" class="checkbox__label"><span> - У випадку, якщо рекламодавець не заповнить коректно розділи Категорії і Розділи, InoZemeZ.com залишає за собою право видалити оголошення зі своєї бази без попереднього повідомлення.</span></label>
							<label for="formAgreement" class="checkbox__label"><span> - Повторні оголошення (СПАМ) кожен раз будуть видалені без попереднього повідомлення.</span></label>
							<label for="formAgreement" class="checkbox__label"><span> - Оголошення загального характеру повністю заборонені до розміщення, і будуть негайно видалені без попередньо повідомлення.</span></label>
							<label for="formAgreement" class="checkbox__label"><span> Всі оголошення, особливо Оголошення Преміум-пакету повинні відповідати цим нормам, в іншому випадку вони будуть негайно видалені без можливості відшкодування виробленого платежу, хоча можуть бути розміщені знову після коригування оголошення.</span></label>

						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	</header><!-- End Ads -->

          <!-- ======= Footer ======= -->
  <!-- data-aos="fade-up" - codice del movimento del testo -->
  <footer id="footer">
       </div>
    </div>
 </div>

  @include('layouts.footer')

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>
  
  @include('layouts.js')

	<!--===============================================================================================-->
	<script src="{{ asset('js/emain.js') }}"></script>
	<script src="{{ asset('js/select.js') }}"></script>
	<script src="{{ asset('js/script.js') }}"></script>
	@include('layouts.js')

</body>
</html>
