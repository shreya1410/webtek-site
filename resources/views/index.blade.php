<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{('Home/assets/img/favicon.png')}}" rel="icon">
  <link href="{{('Home/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{('Home/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{('Home/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{('Home/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{('Home/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{('Home/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{('Home/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{('Home/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{('Home/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Home - v4.10.0
  * Template URL: https://bootstrapmade.com/Home-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
    @include('header')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
    @include('hero-slider')
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    @include('about')
    <!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    @include('clients')
    <!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    @include('services')
    <!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    @include('portfolio')
    <!-- End Portfolio Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
    @include('footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{('Home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{('Home/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{('Home/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{('Home/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{('Home/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{('Home/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{('Home/assets/js/main.js')}}"></script>

</body>

</html>