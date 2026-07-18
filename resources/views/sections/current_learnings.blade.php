<section id="testimonials" class="testimonials section">
      <!-- Section Title -->
      <div class="container section-title">
        <h2></i>Current Learnings</h2>
        <p class="text-muted">Here’s what I’m focusing on right now to grow my skills.</p>
      </div><!-- End Section Title -->


      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-12">
            <div class="testimonials-container">
              <div class="swiper testimonials-slider init-swiper" data-aos="fade-up" data-aos-delay="400">
                <script type="application/json" class="swiper-config">
                  {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                      "delay": 5000
                    },
                    "slidesPerView": 1,
                    "spaceBetween": 30,
                    "pagination": {
                      "el": ".swiper-pagination",
                      "type": "bullets",
                      "clickable": true
                    },
                    "breakpoints": {
                      "768": {
                        "slidesPerView": 2
                      },
                      "992": {
                        "slidesPerView": 3
                      }
                    }
                  }
                </script>

                <div class="swiper-wrapper">

                @foreach($currentLearnings as $currentLearning)

                  @php
                        $colors = [
                            'text-primary',
                            'text-success',
                            'text-warning',
                            'text-info'
                        ];
                  @endphp

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <i class="{{ $currentLearning->logo }} display-4 {{ $colors[$loop->index % 4] }} mb-3"></i>
                      <h5 class="card-title">{{ $currentLearning->title }}</h5>
                        <p class="card-text">{{ $currentLearning->description }}</p>
                    </div>
                  </div><!-- End testimonial item -->

                @endforeach
                  
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>