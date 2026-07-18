<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>
    @yield('title', 'Sarita Pal | PHP Laravel Developer')
  </title>

  <meta name="description" content="@yield('description', 'Sarita Pal is an experienced PHP Laravel Developer specializing in Laravel, PHP, MySQL, Vue.js, Docker and AWS.')">
  <meta name="author" content="Sarita Pal">
  <meta name="robots" content="index, follow">

  <!-- Open Graph Meta Tags -->

  <meta property="og:title" content="@yield('title', 'Sarita Pal | Laravel Developer')">

  <meta property="og:description" content="@yield('description', 'Experienced PHP Laravel Developer Portfolio')">

  <meta property="og:type" content="website">

  <meta property="og:image" content="{{ asset('assets/img/profile/profile-sarita.jpg') }}">

  <!-- to avoid duplicate URl's -->
  <link rel="canonical" href="{{ url()->current() }}"> 

  <meta property="og:url" content="{{ url()->current() }}">

  <meta name="keywords" content="PHP Developer, Laravel Developer, Full Stack Developer, Laravel Portfolio, MySQL, Docker, AWS, Vue.js, Mumbai">
 

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  
  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Style
  * Template URL: https://bootstrapmade.com/style-bootstrap-portfolio-template/
  * Updated: Jul 02 2025 with Bootstrap v5.3.7
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    @yield('content')


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/typed.js/typed.umd.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

<a href="https://wa.me/918286027689?text=Hello%20Sarita,%20I%20would%20like%20to%20discuss%20a%20job%20opportunity"
   class="whatsapp-float"
   target="_blank">
    <i class="fab fa-whatsapp" style="font-size:40px;color:white"></i>
    
</a>

