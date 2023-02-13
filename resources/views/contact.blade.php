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

    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

           <div class="row gy-4">
              <div class="col-md-12">
                <div class="info-box">
                  <!-- <i class="bi bi-geo-alt"></i> -->
                  <h3>LET’S BUILD SOMETHING GREAT TOGETHER</h3>
                  <!-- <p>A108 Adam Street,<br>New York, NY 535022</p> -->
                </div>
              </div>
          
            </div>


          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section>

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
   
   
   
   
   
   
   
   
   
   
   
   
   