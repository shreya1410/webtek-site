<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Webtek inc</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{('Home/assets/img/logo.png')}}" rel="icon">
  <link href="{{('Home/assets/img/logo.png')}}" rel="logo">

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

</head>

<body>

  <!-- ======= Header ======= -->
    @include('header')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
    @include('hero-slider-about')
  <!-- End Hero -->

  <main id="main">
      @include('services')
      <section id="about" class="about">
        <div class="container">
          <div class="row content">
            <div class="col-lg-6">
              <h2>CREATIVE WEB DESIGN AND DEVELOPMENT COMPANY.</h2>
              <h3>WEBTEK INC is a leading Website Design and Website Development company. We provide specialized services like SEO, Graphic Design, Logo Design & Social Media Marketing</h3>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
              <!-- <img src="{{('Home/assets/img/logo.png')}}" height="300px" width="500px" /> -->
            </div>
          </div>
        </div>
      </section>



        <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="row">
              <h2>LET’S BUILD SOMETHING GREAT TOGETHER.</h2>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
      <!-- <section id="about" class="about">
        <div class="container">
          <div class="row content">
            <div class="col-lg-6">
              <h2>LET’S BUILD SOMETHING GREAT TOGETHER.</h2>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
              <form>
                
              </form>
            </div>
          </div>
        </div>
      </section> -->
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