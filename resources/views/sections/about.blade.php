<section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>About</h2>
        <p>Senior PHP/Laravel developer with {{ $personal->years_of_experience }} years of experience in designing, developing, and maintaining enterprise web applications, REST APIs, and business solutions.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">

          <div class="col-lg-5" data-aos="fade-right" data-aos-delay="200">
            <div class="profile-image-wrapper">
              <div class="profile-image">
                <img src="{{ asset('storage/profile/'.$personal->profile_image) }}" alt="{{ $personal->name }} Laravel Project" class="img-fluid">
              </div>
              <div class="signature-section">
                <!-- <img src="{{ asset('assets/img/misc/signature-1.webp') }}" alt="Signature" class="signature"> -->
                 <h3>{{$personal->name}}~ {{$personal->title}}</h3>
                <p class="quote">Building secure, scalable, and maintainable web applications using PHP, Laravel, REST APIs, and MySQL.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-7" data-aos="fade-left" data-aos-delay="300">
            <div class="about-content">
              <div class="intro">
                <h3>Hi, I'm {{$personal->name}} - {{$personal->title}}</h3>
                <p>Throughout my career, I have worked on developing and maintaining business applications, implementing new features, designing REST APIs, optimizing databases, fixing production issues, and supporting application deployments. I enjoy solving real-world business problems through clean and reliable backend solutions, and I am currently strengthening my knowledge of AWS Cloud.</p>
              </div>

              <div class="skills-grid">
                
                <div class="skill-item" data-aos="zoom-in" data-aos-delay="400">
                  <div class="skill-icon">
                  <i class="bi bi-code-slash"></i>
                  </div>
                  <h4>Backend Development</h4>
                  <p>Developing secure business applications using PHP, Laravel, authentication, authorization, and REST APIs.</p>               
                </div>

                <div class="skill-item" data-aos="zoom-in" data-aos-delay="450">
                  <div class="skill-icon">
                    <i class="bi bi-database"></i>
                  </div>
                  <h4>Database Management</h4>
                  <p>Designing efficient database structures, writing optimized SQL queries, and managing relational data using MySQL.</p>
                </div>
                <div class="skill-item" data-aos="zoom-in" data-aos-delay="500">
                  <div class="skill-icon">
                    <i class="bi bi-cloud"></i>
                  </div>
                  <h4>Cloud & deployment</h4>
                  <p>Working with Docker, Git, Linux for application deployment and environment management while continuously building hands-on expertise in AWS Cloud.</p>
                </div>
              </div>

              <div class="journey-timeline" data-aos="fade-up" data-aos-delay="300">
                @foreach($education as $edu)

                  <div class="timeline-item">
                      <div class="year">{{ $edu->years }}</div>

                      <div class="description">
                          Graduated with {{ $edu->course }}
                          from {{ $edu->university }}
                      </div>
                  </div>

                  @endforeach
               
              </div>

              <div class="cta-section" data-aos="fade-up" data-aos-delay="400">
                <div class="fun-fact">
                  <span class="emoji">💻</span>
                  <span class="text">Code-fueled full-stack developer based in Maharashtra</span>
                </div>
                <div class="action-buttons">
                  <a href="#portfolio" class="btn btn-primary">View My Work</a>
                  <a href="{{ route('resume.download') }}" class="btn btn-outline">Download Resume</a>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>

    </section>