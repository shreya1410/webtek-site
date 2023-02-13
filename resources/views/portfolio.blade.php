<!DOCTYPE html>
<html lang="en">

@include('head')

<body>

  <!-- ======= Header ======= -->
  @include('header')

  <!-- End Header -->



  <main id="main">
    <!-- ======= About Section ======= -->

    <!-- ======= Values Section ======= -->

    @include('home_portfolio')

    <!-- End Values Section -->

    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  @include('footer')
  
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{('Home/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{('Home/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{('Home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{('Home/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{('Home/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{('Home/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{('Home/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{('Home/assets/js/main.js')}}"></script>

</body>

</html>