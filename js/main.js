// аккордеон
  document.querySelectorAll('[data-accordion]').forEach((group) => {
  const items = group.querySelectorAll('.accordion__item');

  items.forEach((item) => {
    const head = item.querySelector('.accordion__head');
    const body = item.querySelector('.accordion__body');
    if (!head || !body) return;

    head.addEventListener('click', () => {
      const isOpen = item.classList.contains('is-open');

      items.forEach((i) => {
        i.classList.remove('is-open');
        const h = i.querySelector('.accordion__head');
        const b = i.querySelector('.accordion__body');
        if (h) h.setAttribute('aria-expanded', 'false');
        if (b) b.style.maxHeight = null;
      });

      if (!isOpen) {
        item.classList.add('is-open');
        head.setAttribute('aria-expanded', 'true');
        body.style.maxHeight = body.scrollHeight + 'px';
      }
    });
  });

  const opened = group.querySelector('.accordion__item.is-open .accordion__body');
  if (opened) opened.style.maxHeight = opened.scrollHeight + 'px';
});

//Фильтр проектов
document.querySelectorAll('.work-tabs__list').forEach((tabs) => {
  const buttons = tabs.querySelectorAll('.work-tab');
  const grid = document.querySelector('.work-grid__list');
  if (!grid) return;

  const cards = grid.querySelectorAll('.project-card');
  
  buttons.forEach((btn) => {
    btn.addEventListener('click', () => {
      const filter = btn.dataset.filter;

      buttons.forEach((b) => b.classList.remove('work-tab--active'));
      btn.classList.add('work-tab--active');

      cards.forEach((card) => {
        const match = filter === 'all' || card.dataset.category === filter;
        card.style.display = match ? '' : 'none';
      });
    });
  });
});


// Слайдер отзывов
document.querySelectorAll('[data-testimonial-slider]').forEach((slider) => {
  const slides = slider.querySelectorAll('.testimonial');
  const prevBtn = slider.querySelector('.slider-nav__btn--prev');
  const nextBtn = slider.querySelector('.slider-nav__btn--next');
  if (slides.length < 2) return;

  let index = 0;

  const show = (i) => {
    slides.forEach((s, k) => s.classList.toggle('is-hidden', k !== i));
  };

  show(index);

  if (nextBtn) {
    nextBtn.addEventListener('click', () => {
      index = (index + 1) % slides.length;
      show(index);
    });
  }
  if (prevBtn) {
    prevBtn.addEventListener('click', () => {
      index = (index - 1 + slides.length) % slides.length;
      show(index);
    });
  }
});

//футер форма 
document.addEventListener('DOMContentLoaded', function() {
  const checkbox = document.getElementById('checkbox');
  const btnForm = document.getElementById('btn-form');

  if (!checkbox || !btnForm) return;
  checkbox.addEventListener('change', function () {
    btnForm.disabled = !checkbox.checked;
  });
});
// page-about.php
document.querySelectorAll('[data-history]').forEach((root) => {
  const dates = root.querySelectorAll('.history__date');
  const img = root.querySelector('.history__img');
  const text = root.querySelector('.history__text');
  const prevBtn = root.querySelector('[data-history-prev]');
  const nextBtn = root.querySelector('[data-history-next]');

  if (!dates.length || !img || !text) return;

  const slides = [
    {
      img: './img/about/history-present.jpg',
      text: 'Bcelerisque dapibus pharetra nibh semper iaculis duis viverra porttitor in. Eu nec vitae, malesuada vitae egestas integer et morbi. Maecenas sed quis diam posuere malesuada magnis. Bcelerisque dapibus. Eu nec vitae.',
    },
    { img: './img/about/history-2019.jpg', text: 'March 2019 — открытие нового офиса.' },
    { img: './img/about/history-2018.jpg', text: 'November 2018 — расширение команды.' },
    { img: './img/about/history-2015.jpg', text: 'July 2015 — новые проекты.' },
    { img: './img/about/history-2010.jpg', text: 'August 2010 — старт крупного строительства.' },
    { img: './img/about/history-2007.jpg', text: 'February 2007 — новый филиал.' },
    { img: './img/about/history-2004.jpg', text: 'May 2004 — рост штата.' },
    { img: './img/about/history-2001.jpg', text: 'October 2001 — первые крупные контракты.' },
    { img: './img/about/history-2000.jpg', text: 'June 2000 — основание компании.' },
  ];

  let current = 0;
  let isAnimating = false;
  const ANIM_MS = 300;

  slides.forEach((s) => {
    const pre = new Image();
    pre.src = s.img;
  });

  const lockButtons = () => {
    if (prevBtn) { prevBtn.classList.add('is-loading'); prevBtn.disabled = true; }
    if (nextBtn) { nextBtn.classList.add('is-loading'); nextBtn.disabled = true; }
  };
  const unlockButtons = () => {
    if (prevBtn) { prevBtn.classList.remove('is-loading'); prevBtn.disabled = false; }
    if (nextBtn) { nextBtn.classList.remove('is-loading'); nextBtn.disabled = false; }
  };

  const show = (i) => {
    if (isAnimating) return;
    if (i < 0) i = slides.length - 1;
    if (i >= slides.length) i = 0;
    if (i === current && img.src) return;

    const slide = slides[i];
    if (!slide) return;

    isAnimating = true;
    lockButtons();

    const pre = new Image();

    const apply = () => {
      img.classList.remove('is-visible');
      text.classList.remove('is-visible');

      setTimeout(() => {
        img.src = slide.img;
        img.alt = 'History';
        text.textContent = slide.text;
        current = i;

        dates.forEach((d, idx) => {
          d.classList.toggle('history__date--active', idx === i);
        });

        requestAnimationFrame(() => {
          requestAnimationFrame(() => {
            img.classList.add('is-visible');
            text.classList.add('is-visible');

            setTimeout(() => {
              isAnimating = false;
              unlockButtons();
            }, ANIM_MS);
          });
        });
      }, ANIM_MS);
    };

    pre.onload = apply;
    pre.onerror = apply;
    pre.src = slide.img;
    if (pre.complete && pre.naturalWidth > 0) apply();
  };

  dates.forEach((date, idx) => {
    date.addEventListener('click', () => show(idx));
  });

  if (prevBtn) prevBtn.addEventListener('click', () => show(current - 1));
  if (nextBtn) nextBtn.addEventListener('click', () => show(current + 1));

  document.addEventListener('keydown', (e) => {
    const rect = root.getBoundingClientRect();
    const inView = rect.top < window.innerHeight && rect.bottom > 0;
    if (!inView) return;
    if (e.key === 'ArrowRight') show(current + 1);
    if (e.key === 'ArrowLeft') show(current - 1);
  });

  img.classList.add('is-visible');
  text.classList.add('is-visible');
});

// Модалка
(function () {
  const openers = document.querySelectorAll('[data-modal-open]');
  if (!openers.length) return;

  const openModal = (id) => {
    const modal = document.getElementById('modal-' + id);
    if (!modal) return;
    modal.hidden = false;
    document.body.classList.add('modal-open');

    const firstInput = modal.querySelector('input, select, textarea, button');
    if (firstInput) firstInput.focus();
  };

  const closeModal = (modal) => {
    if (!modal) return;
    modal.hidden = true;
    document.body.classList.remove('modal-open');
  };

  const closeAll = () => {
    document.querySelectorAll('.modal').forEach(closeModal);
    document.body.classList.remove('modal-open');
  };

  openers.forEach((btn) => {
    btn.addEventListener('click', () => {
      const id = btn.dataset.modalOpen;
      if (id) openModal(id);
    });
  });

  document.querySelectorAll('.modal').forEach((modal) => {
    modal.querySelectorAll('[data-modal-close]').forEach((el) => {
      el.addEventListener('click', () => closeModal(modal));
    });
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeAll();
  });
})();

// главная //
(function () {
  const hero = document.querySelector('[data-hero]');
  if (!hero) return;

  const slides = hero.querySelectorAll('.hero__slide');
  const pages = hero.querySelectorAll('[data-hero-page]');
  const prevBtn = hero.querySelector('[data-hero-prev]');
  const nextBtn = hero.querySelector('[data-hero-next]');
  if (slides.length < 2) return;

  let index = 0;
  const total = slides.length;

  const show = (i) => {
    if (i < 0) i = total - 1;
    if (i >= total) i = 0;
    index = i;

    slides.forEach((s, k) => s.classList.toggle('is-active', k === i));
    pages.forEach((p, k) => p.classList.toggle('is-active', k === i));
  };

  pages.forEach((p) => {
    p.addEventListener('click', () => show(parseInt(p.dataset.heroPage, 10)));
  });
  if (prevBtn) prevBtn.addEventListener('click', () => show(index - 1));
  if (nextBtn) nextBtn.addEventListener('click', () => show(index + 1));

  // автопрокрутка
  let timer = setInterval(() => show(index + 1), 6000);
  hero.addEventListener('mouseenter', () => clearInterval(timer));
  hero.addEventListener('mouseleave', () => {
    timer = setInterval(() => show(index + 1), 6000);
  });
})();


// анимация счётчиков и кругов//
(function () {
  const facts = document.querySelectorAll('[data-fact]');
  if (!facts.length) return;

  const CIRCUMFERENCE = 446;

  const animate = (fact) => {
    const valueEl = fact.querySelector('[data-target]');
    const progress = fact.querySelector('[data-percent]');
    if (!valueEl) return;

    const target = parseInt(valueEl.dataset.target, 10) || 0;
    const percent = progress ? parseInt(progress.dataset.percent, 10) : 0;

    const duration = 1400;
    const start = performance.now();
    const from = 0;

    const tick = (now) => {
      const t = Math.min((now - start) / duration, 1);
      const current = Math.round(from + (target - from) * t);
      valueEl.textContent = current;
      if (t < 1) requestAnimationFrame(tick);
      else valueEl.textContent = target;
    };
    requestAnimationFrame(tick);

    if (progress) {
      setTimeout(() => {
        const offset = CIRCUMFERENCE * (1 - percent / 100);
        progress.style.strokeDashoffset = offset;
      }, 100);
    }
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        animate(entry.target);
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.3 });

  facts.forEach((f) => observer.observe(f));
})();

// Видеоплеер
(function initAboutVideo() {
  const video = document.querySelector('[data-video-el]');
  const playBtn = document.querySelector('[data-video-play]');
  const wrapper = document.querySelector('[data-video]');

  if (!video || !playBtn || !wrapper) return;

  playBtn.addEventListener('click', () => {
    video.play();
  });

  video.addEventListener('click', () => {
    if (video.paused) video.play();
    else video.pause();
  });

  video.addEventListener('play', () => {
    wrapper.classList.add('is-playing');
    video.setAttribute('controls', '');
  });

  video.addEventListener('pause', () => {
    wrapper.classList.remove('is-playing');
    video.removeAttribute('controls');
  });

  video.addEventListener('ended', () => {
    wrapper.classList.remove('is-playing');
    video.removeAttribute('controls');
    video.currentTime = 0;
  });
})();

// Бургер-меню в хедере
(function initHeaderBurger() {
  const burger = document.querySelector('[data-header-burger]');
  const nav = document.querySelector('[data-header-nav]');
  const overlay = document.querySelector('[data-header-overlay]');

  if (!burger || !nav) return;

  const openMenu = () => {
    nav.classList.add('is-open');
    burger.classList.add('is-active');
    burger.setAttribute('aria-expanded', 'true');
    burger.setAttribute('aria-label', 'Close menu');
    if (overlay) overlay.classList.add('is-open');
    document.body.classList.add('modal-open');
  };

  const closeMenu = () => {
    nav.classList.remove('is-open');
    burger.classList.remove('is-active');
    burger.setAttribute('aria-expanded', 'false');
    burger.setAttribute('aria-label', 'Open menu');
    if (overlay) overlay.classList.remove('is-open');
    document.body.classList.remove('modal-open');
  };

  burger.addEventListener('click', () => {
    if (nav.classList.contains('is-open')) closeMenu();
    else openMenu();
  });

  if (overlay) {
    overlay.addEventListener('click', closeMenu);
  }

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && nav.classList.contains('is-open')) {
      closeMenu();
    }
  });

  nav.querySelectorAll('.header__item').forEach((link) => {
    link.addEventListener('click', closeMenu);
  });

  window.addEventListener('resize', () => {
    if (window.innerWidth > 768) closeMenu();
  });
})();