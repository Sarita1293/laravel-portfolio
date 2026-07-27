<section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Portfolio</h2>
        <p>Here are some of my projects showcasing my skills in web development and design. Each project demonstrates my ability to build scalable and user-friendly applications</p>
      </div><!-- End Section Title -->

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
            <li data-filter="*" class="filter-active">
              <i class="bi bi-grid-3x3"></i> All Projects
            </li>
            <!-- <li data-filter=".filter-ui">
              Design
            </li>
            <li data-filter=".filter-development">
              Development
            </li> -->
          </ul>

          <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="300">
        
          @foreach($projects as $project)

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-ui">
              <article class="portfolio-entry">
                <figure class="entry-image">
                  <img src="{{ asset('storage/'.$project->thumbnail_image) }}" class="img-fluid" alt="" loading="lazy">
                  <div class="entry-overlay">
                    <div class="overlay-content">
                      <div class="entry-meta">{{ $project->role}}</div>
                      <h3 class="entry-title">{{ $project->title }}</h3>
                      <div class="entry-links">
                        
                        <a href="{{ asset('storage/'.$project->thumbnail_image) }}" class="glightbox" data-gallery="portfolio-gallery-ui" data-glightbox="title: {{ $project->title }}; description: {{ $project->short_description }}">
                          <i class="bi bi-arrows-angle-expand"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </figure>
              </article>
            </div><!-- End Portfolio Item -->

            @endforeach


          </div><!-- End Portfolio Container -->
        </div>
      </div>
      
    </section>

    