    <section id="hero" class="hero section">

      <div class="container">
        <div class="row g-0 align-items-center">

          <div class="col-lg-6 hero-content" data-aos="fade-right" data-aos-delay="100">
            <div class="content-wrapper">
              <h2 class="hero-title">
                <span class="typed" data-typed-items="Sr.PHP Developer, Laravel Developer, Backend Engineer"></span><br>
              </h2>
              <p class="lead"> {{ $personal->title }} with {{ $personal->years_of_experience }}+ years of experience in PHP and Laravel, specializing in developing secure, scalable web applications and REST APIs. Experienced in MySQL, JQuery, Docker, and application maintenance, with a strong focus on clean architecture and business-driven solutions. Currently expanding expertise in AWS Cloud technologies.</p>

              <div class="hero-stats" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-item">
                  <span class="hero-exp" > {{ $personal->years_of_experience }}+</span>
                  <span class="stat-label">Years Experience</span>
                </div>
                <div class="stat-item">
                  <span class="hero-exp"><span>20+</span></span>
                  <span class="stat-label">Modules Delivered</span>
                </div>
                <div class="stat-item">
                  <span class="hero-exp"><span>15+</span></span>
                  <span class="stat-label">REST APIs Developed</span>
                </div>
              </div>

              <div class="hero-actions" data-aos="fade-up" data-aos-delay="300">
                <a href="#portfolio" class="btn btn-primary">View My Work</a>
                <a href="#contact" class="btn btn-outline">Get In Touch</a>
              </div>

              <div class="social-links" data-aos="fade-up" data-aos-delay="400">
                <a href="{{ $personal->linkedin_url }}"  target="_blank"><i class="bi bi-linkedin"></i></a>
                <a href="{{ $personal->github_url }}"  target="_blank"><i class="bi bi-github"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 hero-image" data-aos="fade-left" data-aos-delay="200">
            <div class="image-container">
              <div class="floating-elements">
                <div class="floating-card card-1" data-aos="zoom-in" data-aos-delay="300">
                  <i class="bi bi-code-slash"></i>
                  <span>Development</span>
                </div>
                <div class="floating-card card-2" data-aos="zoom-in" data-aos-delay="400">
                  <i class="bi bi-database-fill"></i>
                  <span>Database</span>
                </div>
                <div class="floating-card card-3" data-aos="zoom-in" data-aos-delay="500">
                  <i class="bi bi-clouds-fill"></i>
                  <span>Cloud</span>
                </div>
              </div>
              <img src="{{ asset('storage/profile/'.$personal->profile_image) }}" alt="{{ $personal->name }}" class="img-fluid hero-main-image">

              <div class="image-overlay"></div>
            </div>
          </div>

        </div>
      </div>

    </section>