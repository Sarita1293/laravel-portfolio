<section id="contact" class="contact section light-background">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Contact</h2>
        <p>Let’s connect to explore how we can work together.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 g-lg-5">
          <div class="col-lg-6">
            <div class="info-box" data-aos="fade-up" data-aos-delay="200">
              <h3>Contact Info</h3>
              <p>Feel free to reach out for project inquiries, collaborations, or job opportunities.</p>

              <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <i class="bi bi-geo-alt"></i>
                </div>
                <div class="content">
                  <h4>Location</h4>
                  <p>{{$personal->address}}</p>
                </div>
              </div>

              <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                  <i class="bi bi-telephone"></i>
                </div>
                <div class="content">
                  <h4>Phone Number</h4>
                  <p>{{$personal->mobile}}</p>
                </div>
              </div>

              <div class="info-item" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                  <i class="bi bi-envelope"></i>
                </div>
                <div class="content">
                  <h4>Email Address</h4>
                  <p>{{$personal->email}}</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 text-center">
            <img src="{{ asset('storage/projects/contact.png') }}" class="img-fluid w-100 contact-img">
          </div>

        </div>

      </div>

    </section>