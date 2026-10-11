<?php require 'doctype.php'; ?>

  <section class="hero" data-hero>
    <div class="hero__slider">
      <div class="hero__slide is-active">
        <img src="./img/home/hero-1.jpg" alt="Construction site with tower crane at sunset" class="hero__bg">
      </div>
      <div class="hero__slide">
        <img src="./img/home/hero-2.jpg" alt="Workers on a skyscraper construction site" class="hero__bg">
      </div>
      <div class="hero__slide">
        <img src="./img/home/hero-3.jpg" alt="Architectural blueprints and 3D model" class="hero__bg">
      </div>
      <div class="hero__slide">
        <img src="./img/home/hero-4.jpg" alt="Modern interior design project" class="hero__bg">
      </div>
    </div>

    <div class="container">
      <div class="hero__inner">
        <h1 class="hero__title">CREATE<span>X</span><br>CONSTRUCTION</h1>
        <p class="hero__text">
          Cras ultrices leo vitae non viverra. Fringilla nisi quisque consequat,
          dignissim vitae proin ipsum sed. Pellentesque nec turpis purus eget
          pellentesque integer ipsum elementum felis.
        </p>
        <div class="hero__buttons">
          <a href="page-about.php" class="btn__solid btn__lg hero__btn-outline">Learn more about us</a>
          <a href="page-contacts.php" class="btn__filled btn__lg">Submit request</a>
        </div>
      </div>
    </div>

    <button type="button" class="hero__arrow hero__arrow--prev" aria-label="Previous slide" data-hero-prev>
      <img src="./img/single-service/arrow-prev.svg" alt="" aria-hidden="true">
    </button>
    <button type="button" class="hero__arrow hero__arrow--next" aria-label="Next slide" data-hero-next>
      <img src="./img/single-service/arrow-next.svg" alt="" aria-hidden="true">
    </button>

    <div class="container">
      <div class="hero__pager" data-hero-pager>
        <button type="button" class="hero__page is-active" data-hero-page="0"><span>01</span><span class="hero__line"></span></button>
        <button type="button" class="hero__page" data-hero-page="1"><span>02</span><span class="hero__line"></span></button>
        <button type="button" class="hero__page" data-hero-page="2"><span>03</span><span class="hero__line"></span></button>
        <button type="button" class="hero__page" data-hero-page="3"><span>04</span><span class="hero__line"></span></button>
      </div>
    </div>
  </section>

  <section class="home-about">
    <div class="container">
      <h2 class="section-title">We are Createx Construction Bureau</h2>
      <p class="section-subtitle">We are rightfully considered to be the best construction company in the USA.</p>

      <div class="home-about__video" data-video>
        <video
          class="home-about__video-el"
          poster="./img/home/about-video.jpg"
          preload="metadata"
          playsinline
          data-video-el
        >
          <source src="./video/about.mp4" type="video/mp4">
          <source src="./video/about.webm" type="video/webm">
          Ваш браузер не поддерживает встроенное видео.
        </video>

        <button
          type="button"
          class="home-about__play"
          aria-label="Play about video"
          data-video-play
        ></button>
      </div>
    </div>
  </section>

  <section class="core-values">
    <div class="container">
      <h2 class="section-title">Our core values</h2>
      <p class="section-subtitle">Our mission is to set the highest standards for construction sphere.</p>

      <div class="core-values__grid">

        <div class="core-value">
          <img src="./img/about/ic-quality.svg" alt="" aria-hidden="true" class="core-value__icon">
          <h3 class="core-value__title">Quality</h3>
          <p class="core-value__desc">Culpa nostrud commodo ea consequat aliquip reprehenderit. Veniam velit nostrud aliquip sunt.</p>
        </div>

        <div class="core-value">
          <img src="./img/about/ic-safety.svg" alt="" aria-hidden="true" class="core-value__icon">
          <h3 class="core-value__title">Safety</h3>
          <p class="core-value__desc">Anim reprehenderit sint voluptate exercitation adipisicing laborum adipisicing. Minim empor est ea.</p>
        </div>

        <div class="core-value">
          <img src="./img/about/ic-comfort.svg" alt="" aria-hidden="true" class="core-value__icon">
          <h3 class="core-value__title">Comfort</h3>
          <p class="core-value__desc">Sit veniam aute dolore adipisicing nulla sit culpa. Minim mollit voluptate ullamco proident ea ad.</p>
        </div>

      </div>
    </div>
  </section>

  <section class="home-request">
    <div class="container">
      <div class="home-request__box">
        <h3 class="home-request__title">Want to know more? Ask us a question:</h3>

        <form class="home-request__form" action="#" method="POST">
          <div class="home-request__group">
            <label for="req-name" class="home-request__label">Name</label>
            <input id="req-name" name="name" type="text" placeholder="Your name" class="home-request__input">
          </div>

          <div class="home-request__group">
            <label for="req-phone" class="home-request__label">Phone</label>
            <input id="req-phone" name="phone" type="tel" placeholder="Your phone" class="home-request__input">
          </div>

          <div class="home-request__group home-request__group--wide">
            <label for="req-message" class="home-request__label">Message</label>
            <input id="req-message" name="message" type="text" placeholder="Your message" class="home-request__input">
          </div>

          <button type="submit" class="btn__filled btn__md">Send</button>
        </form>
      </div>
    </div>
  </section>

  <section class="home-services">
    <div class="container">
      <h2 class="section-title">Our services</h2>
      <p class="section-subtitle">Createx Construction Bureau is a construction giant with a full range of construction services.</p>

      <div class="home-services__grid">

        <a href="single-service.php" class="home-service">
          <img src="./img/home/service-construction.svg" alt="" aria-hidden="true" class="home-service__icon">
          <span class="home-service__title">Construction</span>
        </a>

        <a href="single-service.php" class="home-service">
          <img src="./img/home/service-project.svg" alt="" aria-hidden="true" class="home-service__icon">
          <span class="home-service__title">Project Development</span>
        </a>

        <a href="single-service.php" class="home-service">
          <img src="./img/home/service-interior.svg" alt="" aria-hidden="true" class="home-service__icon">
          <span class="home-service__title">Interior Design</span>
        </a>

        <a href="single-service.php" class="home-service">
          <img src="./img/home/service-repairs.svg" alt="" aria-hidden="true" class="home-service__icon">
          <span class="home-service__title">Repairs</span>
        </a>

      </div>

      <div class="home-services__cta">
        <p class="home-services__cta-text">Learn more about our services</p>
        <a href="services.php" class="btn__filled btn__lg">View services</a>
      </div>
    </div>
  </section>

  <section class="home-projects">
    <div class="container">
      <div class="home-projects__head">
        <h2 class="section-title section-title--left">
          Browse our selected projects<br>and learn more about our work
        </h2>
        <div class="slider-nav">
          <button type="button" class="slider-nav__btn slider-nav__btn--prev" aria-label="Previous project">
            <img src="./img/single-service/arrow-prev.svg" alt="" aria-hidden="true">
          </button>
          <button type="button" class="slider-nav__btn slider-nav__btn--next" aria-label="Next project">
            <img src="./img/single-service/arrow-next.svg" alt="" aria-hidden="true">
          </button>
        </div>
      </div>

      <div class="portfolio__slider">
        <div class="portfolio__track">

          <article class="project-card">
            <div class="project-card__media">
              <img src="./img/page-work/project-7.jpg" alt="Red Finger Building — business center">
            </div>
            <div class="project-card__body">
              <h3 class="project-card__title">Red Finger Building</h3>
              <p class="project-card__category">Business Centers</p>
              <a href="single-project.php" class="btn__solid btn__md project-card__btn">View Project</a>
            </div>
          </article>

          <article class="project-card">
            <div class="project-card__media">
              <img src="./img/page-work/project-1.jpg" alt="Cubes Building — business center">
            </div>
            <div class="project-card__body">
              <h3 class="project-card__title">Cubes Building</h3>
              <p class="project-card__category">Business Centers</p>
              <a href="single-project.php" class="btn__solid btn__md project-card__btn">View Project</a>
            </div>
          </article>

          <article class="project-card">
            <div class="project-card__media">
              <img src="./img/page-work/project-6.jpg" alt="The Pencil Building — stores and malls">
            </div>
            <div class="project-card__body">
              <h3 class="project-card__title">The Pencil Building</h3>
              <p class="project-card__category">Stores &amp; Malls</p>
              <a href="single-project.php" class="btn__solid btn__md project-card__btn">View Project</a>
            </div>
          </article>

          <article class="project-card">
            <div class="project-card__media">
              <img src="./img/page-work/project-2.jpg" alt="Modern Cottage — private house">
            </div>
            <div class="project-card__body">
              <h3 class="project-card__title">Modern Cottage</h3>
              <p class="project-card__category">Private Houses</p>
              <a href="single-project.php" class="btn__solid btn__md project-card__btn">View Project</a>
            </div>
          </article>

          <article class="project-card">
            <div class="project-card__media">
              <img src="./img/page-work/project-4.jpg" alt="Modern Double Bedroom — apartments and flats">
            </div>
            <div class="project-card__body">
              <h3 class="project-card__title">Modern Double Bedroom</h3>
              <p class="project-card__category">Apartments &amp; Flats</p>
              <a href="single-project.php" class="btn__solid btn__md project-card__btn">View Project</a>
            </div>
          </article>

          <article class="project-card">
            <div class="project-card__media">
              <img src="./img/page-work/project-3.jpg" alt="Luxury Beach House — private house">
            </div>
            <div class="project-card__body">
              <h3 class="project-card__title">Luxury Beach House</h3>
              <p class="project-card__category">Private Houses</p>
              <a href="single-project.php" class="btn__solid btn__md project-card__btn">View Project</a>
            </div>
          </article>

          <article class="project-card">
            <div class="project-card__media">
              <img src="./img/page-work/project-5.jpg" alt="Kids Bedroom With Decorations — apartments and flats">
            </div>
            <div class="project-card__body">
              <h3 class="project-card__title">Kids Bedroom With Decorations</h3>
              <p class="project-card__category">Apartments &amp; Flats</p>
              <a href="single-project.php" class="btn__solid btn__md project-card__btn">View Project</a>
            </div>
          </article>

          <article class="project-card">
            <div class="project-card__media">
              <img src="./img/page-work/project-9.jpg" alt="Brown and Gray Painted House — private house">
            </div>
            <div class="project-card__body">
              <h3 class="project-card__title">Brown and Gray Painted House</h3>
              <p class="project-card__category">Private Houses</p>
              <a href="single-project.php" class="btn__solid btn__md project-card__btn">View Project</a>
            </div>
          </article>

          <article class="project-card">
            <div class="project-card__media">
              <img src="./img/page-work/project-8.jpg" alt="Scandinavian Style Interior — private house">
            </div>
            <div class="project-card__body">
              <h3 class="project-card__title">Scandinavian Style Interior</h3>
              <p class="project-card__category">Private Houses</p>
              <a href="single-project.php" class="btn__solid btn__md project-card__btn">View Project</a>
            </div>
          </article>

        </div>
      </div>

      <div class="home-projects__cta">
        <p class="home-projects__cta-text">Explore all our works</p>
        <a href="page-work.php" class="btn__filled btn__lg">View portfolio</a>
      </div>
    </div>
  </section>

  <section class="partners">
    <div class="container">
      <h2 class="partners__title">Supported by 12+ partners</h2>

      <div class="partners__grid">
        <img src="./img/single-service/partner-indepth.svg" alt="InDepth Consulting logo">
        <img src="./img/single-service/partner-higher.svg" alt="Higher Fit logo">
        <img src="./img/single-service/partner-sentinal.svg" alt="Sentinal Consulting logo">
        <img src="./img/single-service/partner-happy.svg" alt="Happy Home logo">
        <img src="./img/single-service/partner-forsale.svg" alt="For Sale logo">
        <img src="./img/single-service/partner-sunset.svg" alt="Sunset Realty logo">
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
              <img src="./img/page-work/avatar-1.jpg" alt="Shawn Edwards, client of Createx" class="testimonial__avatar">
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
              <img src="./img/page-work/avatar-2.jpg" alt="John Doe, client of Createx" class="testimonial__avatar">
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
            <button type="button" class="slider-nav__btn slider-nav__btn--prev" aria-label="Previous testimonial">
              <img src="./img/single-service/arrow-prev.svg" alt="" aria-hidden="true">
            </button>
            <button type="button" class="slider-nav__btn slider-nav__btn--next" aria-label="Next testimonial">
              <img src="./img/single-service/arrow-next.svg" alt="" aria-hidden="true">
            </button>
          </div>
        </div>
      </div>

      <div class="testimonials__media">
        <img src="./img/page-work/testimonial-photo.jpg" alt="Createx team members shaking hands with a client">
      </div>

    </div>
  </section>

  <section class="home-facts">
    <div class="container">
        <h2 class="section-title">Some facts and figures</h2>

        <div class="home-facts__grid">

            <div class="home-fact" data-fact>
        <svg class="home-fact__circle" viewBox="0 0 148 148" aria-hidden="true">
          <circle cx="74" cy="74" r="71" fill="none" stroke="#FFE0C7" stroke-width="6"/>
          <circle class="home-fact__progress"
                  cx="74" cy="74" r="71"
                  fill="none" stroke="#F89828" stroke-width="6"
                  stroke-linecap="round"
                  stroke-dasharray="446"
                  stroke-dashoffset="446"
                  transform="rotate(-90 74 74)"
                  data-percent="98"/>
        </svg>
        <span class="home-fact__value">
          <span data-target="98">0</span><span class="home-fact__suffix">%</span>
        </span>
        <span class="home-fact__label">Totally satisfied clients</span>
            </div>

            <div class="home-fact" data-fact>
        <svg class="home-fact__circle" viewBox="0 0 148 148" aria-hidden="true">
          <circle cx="74" cy="74" r="71" fill="none" stroke="#F8D7DD" stroke-width="6"/>
          <circle class="home-fact__progress"
                  cx="74" cy="74" r="71"
                  fill="none" stroke="#F52F6E" stroke-width="6"
                  stroke-linecap="round"
                  stroke-dasharray="446"
                  stroke-dashoffset="446"
                  transform="rotate(-90 74 74)"
                  data-percent="75"/>
        </svg>
        <span class="home-fact__value">
          <span data-target="20">0</span>
        </span>
        <span class="home-fact__label">Years of experience</span>
            </div>

            <div class="home-fact" data-fact>
        <svg class="home-fact__circle" viewBox="0 0 148 148" aria-hidden="true">
          <circle cx="74" cy="74" r="71" fill="none" stroke="#D7E0F5" stroke-width="6"/>
          <circle class="home-fact__progress"
                  cx="74" cy="74" r="71"
                  fill="none" stroke="#5A87FC" stroke-width="6"
                  stroke-linecap="round"
                  stroke-dasharray="446"
                  stroke-dashoffset="446"
                  transform="rotate(-90 74 74)"
                  data-percent="82"/>
        </svg>
        <span class="home-fact__value">
          <span data-target="9452">0</span>
        </span>
        <span class="home-fact__label">Working hours spent</span>
            </div>

            <div class="home-fact" data-fact>
        <svg class="home-fact__circle" viewBox="0 0 148 148" aria-hidden="true">
          <circle cx="74" cy="74" r="71" fill="none" stroke="#C9F1E6" stroke-width="6"/>
          <circle class="home-fact__progress"
                  cx="74" cy="74" r="71"
                  fill="none" stroke="#03CEA4" stroke-width="6"
                  stroke-linecap="round"
                  stroke-dasharray="446"
                  stroke-dashoffset="446"
                  transform="rotate(-90 74 74)"
                  data-percent="100"/>
        </svg>
        <span class="home-fact__value">
          <span data-target="100">0</span><span class="home-fact__suffix">%</span>
        </span>
        <span class="home-fact__label">Succeeded projects</span>
            </div>

        </div>
    </div>
  </section>

  <section class="home-news">
    <div class="container">
      <h2 class="section-title">Recent news</h2>

      <div class="home-news__grid">

        <article class="home-news__large">
          <div class="home-news__img-wrap">
            <img src="./img/news/news-img/1.jpg" alt="How to Build Climate Change-Resilient Infrastructure">
          </div>
          <div class="home-news__body">
            <h3 class="home-news__title">How to Build Climate Change-Resilient Infrastructure</h3>
            <div class="home-news__meta">
              <span class="home-news__cat">Industry News</span>
              <span class="home-news__divider"></span>
              <span class="home-news__date">June 24, 2020</span>
              <span class="home-news__divider"></span>
              <span class="home-news__comments">
                <img src="./img/icons/comment.svg" alt="" aria-hidden="true" class="home-news__comment-icon">
                4 comments
              </span>
            </div>
            <p class="home-news__desc">
              Ipsum aliquet nisi, hendrerit rhoncus quam tortor, maecenas faucibus.
              Tincidunt aliquet sit vel, venenatis nulla. Integer bibendum turpis convallis...
            </p>
          </div>
        </article>

        <article class="home-news__small">
          <div class="home-news__img-wrap">
            <img src="./img/news/news-img/2.jpg" alt="How Construction Can Help Itself">
          </div>
          <div class="home-news__body">
            <h3 class="home-news__title">How Construction Can Help Itself</h3>
            <div class="home-news__meta">
              <span class="home-news__cat">Innovation</span>
              <span class="home-news__divider"></span>
              <span class="home-news__date">June 12, 2020</span>
              <span class="home-news__divider"></span>
              <span class="home-news__comments">
                <img src="./img/icons/comment.svg" alt="" aria-hidden="true" class="home-news__comment-icon">
                No comments
              </span>
            </div>
          </div>
        </article>

        <article class="home-news__small">
          <div class="home-news__img-wrap">
            <img src="./img/news/news-img/6.jpg" alt="Types of Flooring Materials">
          </div>
          <div class="home-news__body">
            <h3 class="home-news__title">Types of Flooring Materials</h3>
            <div class="home-news__meta">
              <span class="home-news__cat">Company News</span>
              <span class="home-news__divider"></span>
              <span class="home-news__date">December 1, 2019</span>
              <span class="home-news__divider"></span>
              <span class="home-news__comments">
                <img src="./img/icons/comment.svg" alt="" aria-hidden="true" class="home-news__comment-icon">
                No comments
              </span>
            </div>
          </div>
        </article>

      </div>

      <div class="home-news__cta">
        <p class="home-news__cta-text">Explore all our news posts</p>
        <a href="page-news.php" class="btn__filled btn__lg">View all news</a>
      </div>
    </div>
  </section>

<script src="./js/slider.js" defer></script>
<?php require 'footer.php'; ?>