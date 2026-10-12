<?php require 'doctype.php'; ?>

  <section class="section service page-hero">
    <div class="container">
        <div class="page-hero__content">
            <div class="page-hero__path">Homepage/ Work</div>
            <h1 class="page-hero__title">
            OUR WORK
            </h1>
            <div class="page-hero__desc">
                Our portfolio represents 20 years of 
                construction experience backed by a 
                passion for perfect client service, quality 
                and innovations in consctuction industry.
            </div>
        </div>
    </div>
    <div class="page-hero__media">
            <img src="./img/page-work/work.png" alt="Portfolio of Createx Construction Bureau projects" class="page-hero__img" fetchpriority="high" decoding="async">
    </div>
  </section>

  <section class="work-tabs">
    <div class="container">
      <div class="work-tabs__list">
        <button class="work-tab work-tab--active" data-filter="all">
          <img src="./img/page-work/ic-house.svg" alt="" aria-hidden="true" class="work-tab__icon" loading="lazy" decoding="async" width="48" height="48">
          <span class="work-tab__title">All Projects</span>
        </button>
        <button class="work-tab" data-filter="construction">
          <img src="./img/page-work/ic-construction.svg" alt="" aria-hidden="true" class="work-tab__icon" loading="lazy" decoding="async" width="48" height="48">
          <span class="work-tab__title">Construction</span>
        </button>
        <button class="work-tab" data-filter="project">
          <img src="./img/page-work/ic-plan.svg" alt="" aria-hidden="true" class="work-tab__icon" loading="lazy" decoding="async" width="48" height="48">
          <span class="work-tab__title">Project Development</span>
        </button>
        <button class="work-tab" data-filter="interior">
          <img src="./img/page-work/ic-pantone.svg" alt="" aria-hidden="true" class="work-tab__icon" loading="lazy" decoding="async" width="48" height="48">
          <span class="work-tab__title">Interior Design</span>
        </button>
        <button class="work-tab" data-filter="repairs">
          <img src="./img/page-work/ic-painting.svg" alt="" aria-hidden="true" class="work-tab__icon" loading="lazy" decoding="async" width="48" height="48">
          <span class="work-tab__title">Repairs</span>
        </button>
      </div>
    </div>
  </section>

  <section class="work-grid">
    <div class="container">
      <div class="work-grid__list">

        <article class="project-card" data-category="construction">
          <div class="project-card__media">
            <img src="./img/page-work/project-7.jpg" alt="Red Finger Building — business center project" loading="lazy" decoding="async" width="390" height="345">
          </div>
          <div class="project-card__body">
            <h3 class="project-card__title">Red Finger Building</h3>
            <p class="project-card__category">Business Centers</p>
            <a href="single-project.php" class="btn__solid btn__md project-card__btn">View Project</a>
          </div>
        </article>

        <article class="project-card" data-category="project">
          <div class="project-card__media">
            <img src="./img/page-work/project-1.jpg" alt="Cubes Building — business center project" loading="lazy" decoding="async" width="390" height="345">
          </div>
          <div class="project-card__body">
            <h3 class="project-card__title">Cubes Building</h3>
            <p class="project-card__category">Business Centers</p>
            <a href="single-project.php" class="btn__solid btn__md project-card__btn">View Project</a>
          </div>
        </article>

        <article class="project-card" data-category="interior">
          <div class="project-card__media">
            <img src="./img/page-work/project-6.jpg" alt="The Pencil Building — stores and malls project" loading="lazy" decoding="async" width="390" height="345">
          </div>
          <div class="project-card__body">
            <h3 class="project-card__title">The Pencil Building</h3>
            <p class="project-card__category">Stores &amp; Malls</p>
            <a href="single-project.php" class="btn__solid btn__md project-card__btn">View Project</a>
          </div>
        </article>

        <article class="project-card" data-category="repairs">
          <div class="project-card__media">
            <img src="./img/page-work/project-2.jpg" alt="Modern Cottage — private house project" loading="lazy" decoding="async" width="390" height="345">
          </div>
          <div class="project-card__body">
            <h3 class="project-card__title">Modern Cottage</h3>
            <p class="project-card__category">Private Houses</p>
            <a href="single-project.php" class="btn__solid btn__md project-card__btn">View Project</a>
          </div>
        </article>

        <article class="project-card" data-category="interior">
          <div class="project-card__media">
            <img src="./img/page-work/project-4.jpg" alt="Modern Double Bedroom — apartments and flats project" loading="lazy" decoding="async" width="390" height="345">
          </div>
          <div class="project-card__body">
            <h3 class="project-card__title">Modern Double Bedroom</h3>
            <p class="project-card__category">Apartments &amp; Flats</p>
            <a href="single-project.php" class="btn__solid btn__md project-card__btn">View Project</a>
          </div>
        </article>

        <article class="project-card" data-category="construction">
          <div class="project-card__media">
            <img src="./img/page-work/project-3.jpg" alt="Luxury Beach House — private house project" loading="lazy" decoding="async" width="390" height="345">
          </div>
          <div class="project-card__body">
            <h3 class="project-card__title">Luxury Beach House</h3>
            <p class="project-card__category">Private Houses</p>
            <a href="single-project.php" class="btn__solid btn__md project-card__btn">View Project</a>
          </div>
        </article>

        <article class="project-card" data-category="project">
          <div class="project-card__media">
            <img src="./img/page-work/project-5.jpg" alt="Kids Bedroom With Decorations — apartments and flats project" loading="lazy" decoding="async" width="390" height="345">
          </div>
          <div class="project-card__body">
            <h3 class="project-card__title">Kids Bedroom With Decorations</h3>
            <p class="project-card__category">Apartments &amp; Flats</p>
            <a href="single-project.php" class="btn__solid btn__md project-card__btn">View Project</a>
          </div>
        </article>

        <article class="project-card" data-category="repairs">
          <div class="project-card__media">
            <img src="./img/page-work/project-9.jpg" alt="Brown and Gray Painted House — private house project" loading="lazy" decoding="async" width="390" height="345">
          </div>
          <div class="project-card__body">
            <h3 class="project-card__title">Brown and Gray Painted House</h3>
            <p class="project-card__category">Private Houses</p>
            <a href="single-project.php" class="btn__solid btn__md project-card__btn">View Project</a>
          </div>
        </article>

        <article class="project-card" data-category="interior">
          <div class="project-card__media">
            <img src="./img/page-work/project-8.jpg" alt="Scandinavian Style Interior — private house project" loading="lazy" decoding="async" width="390" height="345">
          </div>
          <div class="project-card__body">
            <h3 class="project-card__title">Scandinavian Style Interior</h3>
            <p class="project-card__category">Private Houses</p>
            <a href="single-project.php" class="btn__solid btn__md project-card__btn">View Project</a>
          </div>
        </article>

      </div>

      <div class="work-grid__load-more">
        <button class="work-load-more" type="button">
          <img src="./img/page-work/ic-convert.svg" alt="" aria-hidden="true" class="work-load-more__icon" loading="lazy" decoding="async" width="24" height="24">
          <span class="work-load-more__text">Load more</span>
        </button>
        <p class="work-grid__empty" hidden></p>
      </div>
    </div>
  </section>


  <section class="testimonials">
    <div class="container testimonials__inner">

      <div class="testimonials__content">
        <h2 class="testimonials__title">What our clients are saying</h2>

        <div class="testimonial-slider" data-testimonial-slider>
          <div class="testimonial-slider__track">
            <blockquote class="testimonial">
              <img src="./img/page-work/avatar-1.jpg" alt="Shawn Edwards, client of Createx" class="testimonial__avatar" loading="lazy" decoding="async" width="72" height="72">
              <p class="testimonial__text">
                Ipsum aute sunt aliquip aute et occaecat. Anim minim do cillum
                eiusmod enim. Consectetur magna cillum consequat minim laboris
                cillum laboris voluptate minim proident exercitation ullamco.
              </p>
              <footer class="testimonial__author">
                <strong class="testimonial__name">Shawn Edwards</strong>
                <span class="testimonial__position">Position, Company name</span>
              </footer>
            </blockquote>

            <blockquote class="testimonial">
              <img src="./img/page-work/avatar-2.jpg" alt="John Doe, client of Createx" class="testimonial__avatar" loading="lazy" decoding="async" width="72" height="72">
              <p class="testimonial__text">
                Duis aute irure dolor in reprehenderit in voluptate velit
                esse cillum dolore eu fugiat nulla pariatur.
              </p>
              <footer class="testimonial__author">
                <strong class="testimonial__name">John Doe</strong>
                <span class="testimonial__position">Position, Company name</span>
              </footer>
            </blockquote>
          </div>

          <div class="testimonial-slider__nav">
            <button class="slider-nav__btn slider-nav__btn--prev" aria-label="Previous testimonial">
              <img src="./img/single-service/arrow-prev.svg" alt="" aria-hidden="true">
            </button>
            <button class="slider-nav__btn slider-nav__btn--next" aria-label="Next testimonial">
              <img src="./img/single-service/arrow-next.svg" alt="" aria-hidden="true">
            </button>
          </div>
        </div>
      </div>

      <div class="testimonials__media">
        <img src="./img/page-work/testimonial-photo.jpg" alt="Createx team members shaking hands with a client" loading="lazy" decoding="async">
      </div>

    </div>
  </section>

  <section class="our-clients">
    <div class="container">
      <h2 class="our-clients__title">Our clients</h2>

      <div class="our-clients__grid">
        <img src="./img/single-service/partner-indepth.svg" alt="InDepth Consulting logo" loading="lazy" decoding="async" width="120" height="64">
        <img src="./img/single-service/partner-higher.svg" alt="Higher Fit logo" loading="lazy" decoding="async" width="120" height="64">
        <img src="./img/single-service/partner-sentinal.svg" alt="Sentinal Consulting logo" loading="lazy" decoding="async" width="120" height="64">
        <img src="./img/single-service/partner-happy.svg" alt="Happy Home logo" loading="lazy" decoding="async" width="120" height="64">
        <img src="./img/single-service/partner-forsale.svg" alt="For Sale logo" loading="lazy" decoding="async" width="120" height="64">
        <img src="./img/single-service/partner-sunset.svg" alt="Sunset Realty logo" loading="lazy" decoding="async" width="120" height="64">
      </div>
    </div>
  </section>


<?php require 'footer.php'; ?>