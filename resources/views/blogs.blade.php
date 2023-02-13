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

    <section id="recent-blog-posts" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Blog</h2>
          <p>Recent posts form our Blog</p>
        </header>

        <div class="row">

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="{{('Home/assets/img/blog/blog-1.jpg')}}" class="img-fluid" alt=""></div>
              <span class="post-date">Tue, September 15</span>
              <h3 class="post-title">Digital Marketing Agency</h3>
              <a href="{{('Home/blog-single.html')}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="{{('Home/assets/img/blog/blog-2.jpg')}}" class="img-fluid" alt=""></div>
              <span class="post-date">Fri, August 28</span>
              <h3 class="post-title">Untangling wicked digital problems</h3>
              <a href="{{('blog-single.html')}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="{{('Home/assets/img/blog/blog-3.jpg')}}" class="img-fluid" alt=""></div>
              <span class="post-date">Mon, July 11</span>
              <h3 class="post-title">Learn form Jake Knapp: The keys to a great presentation</h3>
              <a href="{{('blog-single.html')}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="{{('Home/assets/img/blog/blog-2.jpg')}}" class="img-fluid" alt=""></div>
              <span class="post-date">Fri, August 28</span>
              <h3 class="post-title">The Complete Video Production Bootcamp</h3>
              <a href="{{('blog-single.html')}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="{{('Home/assets/img/blog/blog-2.jpg')}}" class="img-fluid" alt=""></div>
              <span class="post-date">Fri, August 28</span>
              <h3 class="post-title">Advertisers Embrace Rich Media Format</h3>
              <a href="{{('blog-single.html')}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>


          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="{{('Home/assets/img/blog/blog-2.jpg')}}" class="img-fluid" alt=""></div>
              <span class="post-date">Fri, August 28</span>
              <h3 class="post-title">Search Engine Optimization And Advertising</h3>
              <a href="{{('blog-single.html')}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
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
   
   
   
   
   
   
   
   
   
  