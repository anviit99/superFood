<!doctype html>
<html lang="en">
  <head>
    <title>{{$_ENV['APP_NAME']}}|@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{BASE_URL}}Frontend/assets/images/layout/favicon.ico">
    <!-- Bootstrap Css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Meddon&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <!-- Fancy Box-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
    <!-- Link Owl Carousel-->
    <link rel="stylesheet" href="{{BASE_URL.'Frontend/assets/css/owl.carousel.min.css'}}">
    <link rel="stylesheet" href="{{BASE_URL.'Frontend/assets/css/owl.theme.default.min.css'}}">
    <!-- Wow JS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    {{--    CSS--}}
    <link rel="stylesheet" href="{{BASE_URL.'Frontend/assets/css/main.css'}}">


  </head>
  <body>
    <div class="wrapper">
      @include('frontend.layouts.menu')
{{--      @include('frontend.layouts.slider')--}}
{{--      @include('frontend.layouts.about')--}}
{{--      @include('frontend.layouts.fortfolio')--}}
{{--      @include('frontend.layouts.customer')--}}
{{--      @include('frontend.layouts.client')--}}
{{--      @include('frontend.layouts.history')--}}
{{--      @include('frontend.layouts.counter')--}}
{{--      @include('frontend.layouts.testimonials')--}}
{{--      @include('frontend.layouts.contact')--}}
      @yield('content')
      @include('frontend.layouts.footer')
      @include('frontend.layouts.modal')
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- Jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Owl Carousel-->
    <script src="{{BASE_URL.'Frontend/assets/js/owl.carousel.min.js'}}"></script>
    <!-- Fancy Box-->
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <!-- Wow JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <!-- Main JS-->
    <script src="{{BASE_URL.'Frontend/assets/js/main.js'}}"></script>

  </body>
</html>