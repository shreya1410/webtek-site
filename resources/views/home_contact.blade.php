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
                  <h3>LET’S BUILD SOMETHING GREAT TOGETHER</h3>
                </div>
              </div>
            </div>
          </div>

           @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible">
            {{ Session::get('success') }}
            </div>
          @endif

          
<div class="col-lg-6">
<form method="post" action="contact-us">
{{csrf_field()}}

<div class="row gy-4">
<div class="col-md-6">
<div class="form-group">
<label> Name </label>
<input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name">
@error('name')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label> Email </label>
<input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email">
@error('email')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div> 


<div class="col-md-12">
<div class="form-group">
<label> Subject </label>
<input type="text" class="form-control @error('subject') is-invalid @enderror" placeholder="Subject" name="subject">
@error('subject')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>

<div class="col-md-12">
<div class="form-group">
<label> Message </label>
<textarea class="form-control textarea @error('message') is-invalid @enderror" placeholder="Message" name="message"></textarea>
@error('message')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>
</div>

<div class="col-md-12 text-center p-3">
<button type="submit" class="btn btn-primary btn-round">Send Message</button>
</div>
</form>
</div>

        </div>
      </div>
    </section>