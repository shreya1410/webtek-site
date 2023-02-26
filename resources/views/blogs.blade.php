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
              <div class="post-img"><img src="{{('Home/assets/img/blog/digital-market.jpg')}}" class="img-fluid" alt="" ></div>
              <span class="post-date">Tue, September 15</span>
              <h3 class="post-title">Digital Marketing Agency</h3>
              <a href="{{('Home/blogs-details/digital-marketing.html')}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              <!-- <a href="{{('Home/blog-single.html')}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="{{('Home/assets/img/blog/untangled-wicked.jpg')}}" class="img-fluid" alt="" ></div>
              <span class="post-date">Fri, August 28</span>
              <h3 class="post-title">Untangling wicked digital problems</h3>
              <a href="{{('Home/blogs-details/untangling-wicked-problems.html')}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="{{('Home/assets/img/blog/learn-from-jake.jpg')}}" class="img-fluid" alt=""></div>
              <span class="post-date">Mon, July 11</span>
              <h3 class="post-title">Learn form Jake Knapp: The keys to a great presentation</h3>
              <a href="{{('Home/blogs-details/Learn-form-Jake-Knapp.html')}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="{{('Home/assets/img/blog/complete-video.jpg')}}" class="img-fluid" alt=""></div>
              <span class="post-date">Fri, August 28</span>
              <h3 class="post-title">The Complete Video Production Bootcamp</h3>
              <a href="{{('Home/blogs-details/the-complete-video-production.html')}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="{{('Home/assets/img/blog/rich-media.jpg')}}" class="img-fluid" alt=""></div>
              <span class="post-date">Fri, August 28</span>
              <h3 class="post-title">Advertisers Embrace Rich Media Format</h3>
              <a href="{{('Home/blogs-details/advertisers-embrace-rich-media-format.html')}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>


          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="{{('Home/assets/img/blog/search-engine.jpg')}}" class="img-fluid" alt=""></div>
              <span class="post-date">Fri, August 28</span>
              <h3 class="post-title">Search Engine Optimization And Advertising</h3>
              <a href="{{('Home/blogs-details/search-engine-optimization-and-advertising.html')}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>


           <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="{{('Home/assets/img/blog/fast-for-leaf.jpg')}}" class="img-fluid" alt=""></div>
              <span class="post-date">Fri, August 28</span>
              <h3 class="post-title">Get Ready Fast For Fall Leaf Viewing Trips</h3>
              <a href="{{('Home/blogs-details/get-ready-fast-for-fall-leaf-viewing-trips.html')}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

            <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="{{('Home/assets/img/blog/sky-gate.jpg')}}" class="img-fluid" alt=""></div>
              <span class="post-date">Fri, August 28</span>
              <h3 class="post-title">Sky Gate</h3>
              <a href="{{('Home/blogs-details/sky-gate.html')}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="{{('Home/assets/img/blog/wht-in-eyes.jpg')}}" class="img-fluid" alt=""></div>
              <span class="post-date">Fri, August 28</span>
              <h3 class="post-title">What in the eyes</h3>
              <a href="{{('Home/blogs-details/what-in-the-eyes.html')}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>


          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="{{('Home/assets/img/blog/papillons-nuit.jpg')}}" class="img-fluid" alt=""></div>
              <span class="post-date">Fri, August 28</span>
              <h3 class="post-title">Papillons De Nuit</h3>
              <a href="{{('Home/blogs-details/papillons-de-nuit.html')}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>


          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="{{('Home/assets/img/blog/hotels-free-gift.jpg')}}" class="img-fluid" alt=""></div>
              <span class="post-date">Fri, August 28</span>
              <h3 class="post-title">Hotels How To Get Free Gifts</h3>
              <a href="{{('Home/blogs-details/hotels-how-to-get-free-gifts.html')}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>


          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="{{('Home/assets/img/blog/work-hard.jpg')}}" class="img-fluid" alt=""></div>
              <span class="post-date">Fri, August 28</span>
              <h3 class="post-title">Work Hard, Big Dream!</h3>
              <a href="{{('Home/blogs-details/work-hard-big-dream.html')}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>


          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="{{('Home/assets/img/blog/dream-job.jpg')}}" class="img-fluid" alt=""></div>
              <span class="post-date">Fri, August 28</span>
              <h3 class="post-title">Dream job is hard to get</h3>
              <a href="{{('Home/blogs-details/dream-job-is-hard-to-get.html')}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>


          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="{{('Home/assets/img/blog/unmatched-toner.jpg')}}" class="img-fluid" alt=""></div>
              <span class="post-date">Fri, August 28</span>
              <h3 class="post-title">Unmatched Toner Cartridge Quality 20 Less Than Oem Price</h3>
              <a href="{{('Home/blogs-details/Unmatched-Toner.html')}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
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
   
   
   
   
   
   
   
   
   
  