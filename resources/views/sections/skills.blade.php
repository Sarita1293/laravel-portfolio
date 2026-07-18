    <!-- Skills Section -->
    <section id="skills" class="skills section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-8">
            <div class="skills-grid">
              <div class="row g-4">

              @foreach($skillCategories as $skillCategory)

                <div class="col-md-6" data-aos="flip-left" data-aos-delay="200">
                  <div class="skill-card">
                    <div class="skill-header">
                      <i class="{{ $skillCategory->icon }}"></i>
                      <h3>{{ $skillCategory->name }}</h3>
                    </div>
                    <div class="skills-animation">
                        @foreach($skillCategory->skills as $skill)

                        <div class="skill-item">
                          <div class="skill-info">
                            <span class="skill-name">{{ $skill->name }}</span>
                            <span class="skill-percentage">{{ $skill->percentage }}%</span>
                          </div>
                          <div class="skill-bar progress">

                            <div class="progress-bar" 
                                  role="progressbar" 
                                  style="width: {{ $skill->percentage }}%;"
                                  aria-valuenow="{{ $skill->percentage }}"
                                  aria-valuemin="0" 
                                  aria-valuemax="100">
                            </div>
                          </div>
                        </div>
                      @endforeach

                    </div>
                  </div><!-- End Frontend Card -->
                </div>

              @endforeach

                
              </div>
            </div><!-- End Skills Grid -->
          </div>

          <div class="col-lg-4">
            <div class="skills-summary" data-aos="fade-left" data-aos-delay="200">
              <h3>Professional Expertise</h3>
              <p><strong>Full-Stack Web Developer</strong> with 8+ years of experience delivering high-performance, maintainable, and visually appealing web solutions. Proficient in <strong>PHP, Laravel, MySQL,</strong> and modern front-end frameworks, I create seamless user experiences backed by robust backend architecture, following <strong>Agile</strong> and <strong>DevOps</strong> best practices.</p>

              <div class="summary-stats">
                <div class="stat-item" data-aos="zoom-in" data-aos-delay="300">
                  <div class="stat-circle">
                    <i class="bi bi-trophy"></i>
                  </div>
                  <div class="stat-info">
                    <span class="stat-number">8</span>
                    <span class="stat-label">Years Experience</span>
                  </div>
                </div>

                <div class="stat-item" data-aos="zoom-in" data-aos-delay="400">
                  <div class="stat-circle">
                    <i class="bi bi-diagram-3"></i>
                  </div>
                  <div class="stat-info">
                    <span class="stat-number">8</span>
                    <span class="stat-label">Projects Completed</span>
                  </div>
                </div>

                <div class="stat-item" data-aos="zoom-in" data-aos-delay="500">
                  <div class="stat-circle">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="stat-info">
                    <span class="stat-number">35+</span>
                    <span class="stat-label">Happy Clients</span>
                  </div>
                </div>
              </div>

              <div class="skills-badges" data-aos="fade-up" data-aos-delay="600">
                <!-- <h4>Certifications</h4> -->
                <div class="badge-list">
                  <!-- <div class="skill-badge">AWS Certified</div>
                  <div class="skill-badge">Laravel Expert</div>
                  <div class="skill-badge">Vue.js Developer</div>
                  <div class="skill-badge">UI/UX Design</div> -->
                </div>
              </div>
            </div><!-- End Skills Summary -->
          </div>
        </div>

      </div>

    </section><!-- /Skills Section -->