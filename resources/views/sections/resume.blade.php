<section id="resume" class="resume section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Resume</h2>
        <p>Explore my professional journey, skills, and project highlights.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="experience-section">
              <div class="section-header">
                <h2><i class="bi bi-briefcase"></i> Professional Journey</h2>
                <p class="section-subtitle">A track record of delivering secure, scalable, and high-performance solutions by combining full-stack development skills with modern DevOps and cloud practices.</p>
              </div>

              <div class="experience-cards">
                @foreach($experiences as $experience)
                
                <div class="experience-card" data-aos="zoom-in" data-aos-delay="300">
                  <div class="card-header">
                    <div class="role-info">
                      <h3>{{ $experience->designation }}</h3>
                      <h4>{{ $experience->project_name }}</h4>
                    </div>
                    <span class="duration">
                      {{ \Carbon\Carbon::parse($experience->start_date)->format('M Y') }}
                        -
                      {{ \Carbon\Carbon::parse($experience->end_date)->format('M Y') }}
                    </span>
                  </div>
                  <div class="card-body">
                    <p>{{ $experience->description}}</p>
                    <ul class="achievements">
                      @foreach(explode("\n", $experience->roles_and_responsibilities) as $role)
                          @if(trim($role))
                              <li>{{ trim($role) }}</li>
                          @endif
                      @endforeach
                      
                      </ul>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
            <div class="education-section">
              <div class="section-header">
                <h2><i class="bi bi-mortarboard"></i> Academic Excellence</h2>
                <p class="section-subtitle">Master's in Science-Information Tehcnology with a strong focus on web development, databases, and modern programming practices. Consistently excelled in project-based learning and technology-driven problem solving.</p>
              </div>

              <div class="education-timeline">
                <div class="timeline-track"></div>
                 @foreach($education as $edu)
                <div class="education-item" data-aos="slide-up" data-aos-delay="300">
                  <div class="timeline-marker"></div>
                  <div class="education-content">
                    <div class="degree-header">
                      <h3>{{ $edu->course }}</h3>
                      <span class="year">{{ $edu->years }}</span>
                    </div>
                    <h4 class="institution">{{ $edu->university }}</h4>
                    <p>{{ $edu->description }}</p>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>

      </div>

    </section>