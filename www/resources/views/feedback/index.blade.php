<!DOCTYPE html>
<html lang="ua">
<head>
    @include('layouts.head', ['title' => 'InoZemeZ-сервіс оголошень країн Європи. Ви зможете з легкісттю публікувати і переглядати оголошення. Це площадка для обміну інформацію серед іноземців.'])
    <!-- Template Main CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/aboutsite.css') }}">


</head>
<body>



@section('content')
    <h1>Обратная связь</h1>
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{ route('feedback.send') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Имя, фамилия"
                   required maxlength="100" value="{{ old('name') ?? '' }}">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Адрес почты"
                   required maxlength="100" value="{{ old('email') ?? '' }}">
        </div>
        <div class="form-group">
        <textarea class="form-control" name="message" placeholder="Ваше сообщение"
                  required maxlength="500" rows="3">{{ old('message') ?? '' }}</textarea>
        </div>
        <div class="form-group">
            <input type="file" class="form-control-file" name="image" accept="image/png, image/jpeg">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Отправить</button>
        </div>
    </form>
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