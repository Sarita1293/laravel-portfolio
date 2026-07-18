<section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Services</h2>
        <p>I deliver clean, fast, and user-focused web solutions tailored to your goals.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4">

        @foreach($services as $service)
          <!-- Card 1 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item">
              <div class="icon">
                <i class="{{$service->icon}}"></i>
              </div>
              <h3>{{$service->title}}</h3>
              <p>{{$service->description}}</p>
            </div>
          </div><!-- End Service Item -->

          @endforeach
          
        </div>
      </div>
    </section>