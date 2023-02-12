 <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto">
      <a href="{{url('/')}}" class="logo me-auto"><img src="{{('Home/assets/img/logo.png')}}" alt="" class="img-fluid"></a>
    </h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{url('/')}}" class="active">Home</a></li>

          <li><a href="{{url('/about-us')}}">About</a></li>
          <li><a href="{{url('/services')}}">Services</a></li>
          <li><a href="{{url('/portfolio')}}">Portfolio</a></li>
          <li><a href="{{url('/blog')}}">Blog</a></li>
          <li><a href="{{url('/contact')}}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>