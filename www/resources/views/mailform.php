<!DOCTYPE html>
<html lang="">
<head>
    @include('layouts.head', ['title' => 'Titolo pagina Mailform'])
    <link href="{{ asset('/css/select.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/mailformstyle.css') }}" rel="stylesheet">
    <link href="{{ asset('css/util.css') }}" rel="stylesheet" type="text/css">

</head>
	<body>
  <!-- ======= Header ======= -->

  @include('layouts.header')

  </header><!-- End Header -->


<!-- ======= Breadcrumbs ======= -->

@include('layouts.breadcrumbs')

</section><!-- End Breadcrumbs -->

    <!-- ======= Hero Section ======= -->

     <title>Форма</title>
		<div class="wrapper">
			<div class="form">
      <form action="{{ route('send.email') }}" class="contact100-form validate-form" method="post">
      @csrf
					<h1 class="form__title align-items-center">Розмістити оголошення</h1>
          @if(session()->has('message'))
              <div class="alert alert-success">
                  {{ session()->get('message') }}
              </div>
          @endif
          <!-- <p class="description">Для того аби оголошення було зрозуміле читачам, потрібно заповнити ці дані.</p> -->

					<div class="form__item" data-validate = "Name is required">
						<label for="formName" class="form__label">Ім'я*:</label>
						<input id="formName" type="text" name="name" class="form__input req" placeholder="Ім'я">
            <span class="focus-input100"></span>
            @error('name')
            <span class="text-danger"> {{ $message }} </span>
            @enderror
					</div>

					<div class="form__item" data-validate = "Потрібна дійсна електронна адреса: ex@abc.com">
						<label for="formEmail" class="form__label">Електронна пошта*:</label>
						<input id="formEmail" type="text" name="email" class="form__input req email" placeholder="Електронна пошта">
            <span class="focus-input100"></span>
					</div>

          <div class="form__item">
						<label for="formPhone" class="form__label">Номер телефону*:</label>
					  <input id="formPhone" type="text" name="phone" class="form__input req phone" placeholder="Номер телефону">
            <span class="focus-input100"></span>
					</div>

					<div class="form__item">
						<div class="form__label">Приховати номер у оголошенні?</div>
						<div class="options">
							<div class="options__item">
								<input id="formYes" checked type="radio" value="yes" name="options" class="options__input">
								<label for="formYes" class="options__label"><span>Так</span></label>
							</div>
							<div class="options__item">
								<input id="formNo" type="radio" value="no" name="options" class="options__input">
								<label for="formNo" class="options__label"><span>Ні</span></label>
							</div>
						</div>

            <div class="form__item">
						<div class="form__label">Категорія:</div>
					  	<select name="category" class="form__select">
               <option class="bs-title-option" value>Виберіть категоріяю</option>  
               <option title="Scegli una opzione" data-content="Annulla <span class='reset-label'></span>">Annulla</option>          
							 <option value="Квартира" >Квартира</option>
						   <option value="Кімната">Кімната</option>
							 <option value="Ліжко">Ліжко</option>
               <option value="Автобуси" >Автобуси</option>
							 <option value="Буси">Буси</option>
							 <option value="Авто">Авто</option>
               <option value="Пропозиції роботи" >Пропозиції роботи</option>
							 <option value="Пошук роботи">Пошук роботи</option>
							 <option value="Здоров'я і краса">Здоров'я і краса</option>
               <option value="Перекладачі" >Перекладачі</option>
							 <option value="Адвокати">Адвокати</option>
							 <option value="Бухгалтера">Бухгалтера</option>
               <option value="Каф">Каф</option>
							 <option value="Майстри і ремонт">Майстри і ремонт</option>
							 <option value="Перевезення">Перевезення</option>
               <option value="Екскурсоводи" >Екскурсоводи</option>
							 <option value="ІТ-підтримка">ІТ-підтримка</option>
							 <option value="Приватні уроки">Приватні уроки</option>
               <option value="Аніматори, заходи та весілля" >Аніматори, заходи та весілля</option>
							 <option value="Інші послуги">Інші послуги</option>
						</select>
            <span class="focus-input100"></span>
					  </div>

            <div class="form__item">
						<div class="form__label">Регіон:</div>
              <select title="Scegli una opzione" name="region">  
               <option class="bs-title-option" value>Виберіть регіон</option>            
               <option title="Scegli una opzione" data-content="Annulla <span class='reset-label'></span>">Annulla</option>
               <option value="Абруццо" >Абруццо </option>
               <option value="Апулія">Апулія </option>
               <option value="Базиліката">Базиліката </option>
               <option value="Калабрія">Калабрія </option>
               <option value="Кампанія">Кампанія </option>
               <option value="Емілія-Романья">Емілія-Романья </option>
               <option value="Лаціо">Лаціо </option>
               <option value="Лігурія">Лігурія </option>
               <option value="Ломбардія">Ломбардія </option>
               <option value="Марке">Марке </option>
               <option value="Молізе">Молізе </option>
               <option value="П'ємонт">П'ємонт </option>
               <option value="Тоскана">Тоскана </option>
               <option value="Умбрія">Умбрія </option>
               <option value="Венето">Венето </option>
               <option value="Фріулі-Венеція-Джулія">Фріулі-Венеція-Джулія </option>
               <option value="Сардинія">Сардинія  </option>
               <option value="Сицилія">Сицилія </option>
               <option value="Трентіно-Альто-Адідже">Трентіно-Альто-Адідже </option>
               <option value="Валле-д'Аоста">Валле-д'Аоста  </option>
					  </select>
            <span class="focus-input100"></span>
					 </div>
           <div class="form__item">
						<div class="form__label">Місто:</div>
						  <select class="form__select" name="sity">
               <option class="bs-title-option" value>Виберіть місто</option>            
               <option title="Scegli una opzione" data-content="Annulla <span class='reset-label'></span>">Annulla</option>
               <option value="Андрія">Андрія</option>
               <option value="Барі">Барі</option>
               <option value="Бергамо">Бергамо</option>
               <option value="Болонья">Болонья</option>
               <option value="Больцано">Больцано</option>
               <option value="Брешія">Брешія</option>
               <option value="Венеція">Венеція</option>
               <option value="Верона">Верона</option>
               <option value="Віченца">Віченца</option>
               <option value="Генуя">Генуя</option>
               <option value="Джульяно-ін-Кампанія">Джульяно-ін-Кампанія</option>
               <option value="Кальярі">Кальярі</option>
               <option value="Катанія">Катанія</option>
               <option value="Латина">Латина</option>
               <option value="Ліворно">Ліворно</option>
               <option value="Мессіна">Мессіна</option>
               <option value="Мілан">Мілан</option>
               <option value="Модена">Модена</option>
               <option value="Монца">Монца</option>
               <option value="Неаполь">Неаполь</option>
               <option value="Новара">Новара</option>
               <option value="П'яченца">П'яченца</option>
               <option value="Падуя">Падуя</option>
               <option value="Палермо">Палермо</option>
               <option value="Парма">Парма</option>
               <option value="Перуджа">Перуджа</option>
               <option value="Пескара">Пескара</option>
               <option value="Прато">Прато</option>
               <option value="Равенна">Равенна</option>
               <option value="Реджо-ді-Калабрія">Реджо-ді-Калабрія</option>
               <option value="Реджо-нель-Емілія">Реджо-нель-Емілія</option>
               <option value="Рим">Рим</option>
               <option value="Ріміні">Ріміні</option>
               <option value="Салерно">Салерно</option>
               <option value="Сассарі">Сассарі</option>
               <option value="Сіракузи">Сіракузи</option>
               <option value="Таранто">Таранто</option>
               <option value="Терні">Терні</option>
               <option value="Тренто">Тренто</option>
               <option value="Трієст">Трієст</option>
               <option value="Турин">Турин</option>
               <option value="Феррара">Феррара</option>
               <option value="Флоренція">Флоренція</option>
               <option value="Фоджа">Фоджа</option>
               <option value="Форлі">Форлі</option>
						</select>
            <span class="focus-input100"></span>
					</div>

          <div class="form__item" data-validate = "Тема обов’язкова">
						<label for="formEmail" class="form__label">Тема оголошення*:</label>
						<input id="formEmail" type="text" name="subject" class="form__input req email" placeholder="Тема оголошення">
            <span class="focus-input100"></span>
            @error('subject')
            <span class="text-danger"> {{ $message }} </span>
            @enderror
					</div>

					</div>
					<div class="form__item" data-validate = "Message is required">
						<label for="formMessage" class="form__label">Текст оголошення:</label>
						<textarea name="content" id="formMessage" placeholder="Текст оголошення" class="form__input"></textarea>
            <span class="focus-input100"></span>
            @error('content')
            <span class="text-danger"> {{ $message }} </span>
            @enderror
					</div>

					<div class="form__item">
						<div class="form__label">Прикріпити фото</div>
						<div class="file">
							<div class="file__item">
								<input id="formImage" accept=".jpg, .png, .gif" type="file" name="image" class="file__input">
								<div class="file__button">Вибрати</div>
							</div>
							<div id="formPreview" class="file__preview"></div>
						</div>
					</div>
					<div class="form__item">
						<div class="checkbox">
							<input id="formAgreement" checked type="checkbox" name="agreement" class="checkbox__input req">
							<label for="formAgreement" class="checkbox__label"><span>Я даю свою згоду на обробку персональних даних відповідно до <a href="">Умовами</a>*</span></label>
						</div>
					 </div>
					 <button type="submit" class="form__button">Відправити</button>
				 </form>
			 </div>
	 </div>
     </section><!-- End Hero -->

          <!-- ======= Footer ======= -->
  <!-- data-aos="fade-up" - codice del movimento del testo -->
  <footer id="footer">
        <div class="social-links text-center text-md-center pt-3 pt-md-10">
              <h5>Наші соціальні мережі</h5>
              <p>Ви можете підписатися на наші соціальні мережі, і бути завжди вкурсі коли хтось публікує нове оголошення.</p>
            <div class="social-links text-center text-md-center pt-3 pt-md-0">
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
           </div>
          </div>
        </div>

  @include('layouts.footer')

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

          <!-- Template Main JS File -->
          <script src="{{ asset('/js/select.js') }}"></script>
          <script src="{{ asset('/js/script.js') }}"></script>

  @include('layouts.js')
  
</body>

</html>