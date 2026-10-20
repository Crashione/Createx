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

// Фильтр проектов + Load more
document.querySelectorAll('.work-tabs__list').forEach((tabs) => {
  const buttons = tabs.querySelectorAll('.work-tab');
  const grid = document.querySelector('.work-grid__list');
  if (!grid) return;

  const cards = Array.from(grid.querySelectorAll('.project-card'));
  const loadBtn = document.querySelector('.work-load-more');
  const emptyMsg = document.querySelector('.work-grid__empty');

  const ITEMS_PER_PAGE = 9;

  let currentFilter = 'all';
  let visibleCount = ITEMS_PER_PAGE;

  const render = () => {
    const filtered = cards.filter(
      (c) => currentFilter === 'all' || c.dataset.category === currentFilter
    );

    cards.forEach((c) => {
      if (!filtered.includes(c)) c.style.display = 'none';
    });

    filtered.forEach((c, i) => {
      c.style.display = i < visibleCount ? '' : 'none';
    });

    if (!loadBtn || !emptyMsg) return;

    if (filtered.length === 0) {
      loadBtn.hidden = true;
      emptyMsg.textContent = 'В этой категории пока нет проектов.';
      emptyMsg.hidden = false;
    } else if (filtered.length <= visibleCount) {
      loadBtn.hidden = true;
      emptyMsg.textContent = 'Больше проектов нет.';
      emptyMsg.hidden = false;
    } else {
      loadBtn.hidden = false;
      emptyMsg.hidden = true;
    }
  };

  buttons.forEach((btn) => {
    btn.addEventListener('click', () => {
      currentFilter = btn.dataset.filter;
      visibleCount = ITEMS_PER_PAGE;

      buttons.forEach((b) => b.classList.remove('work-tab--active'));
      btn.classList.add('work-tab--active');

      render();
    });
  });

  if (loadBtn) {
    loadBtn.addEventListener('click', () => {
      visibleCount += ITEMS_PER_PAGE;
      render();
    });
  }

  render();
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

// Чекбокс согласия
document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('[data-agree-toggle]').forEach((checkbox) => {
    const btn = document.getElementById(checkbox.dataset.agreeToggle);
    if (!btn) return;

    const sync = () => { btn.disabled = !checkbox.checked; };
    checkbox.addEventListener('change', sync);
    sync();
  });
});

// Футер
document.addEventListener('DOMContentLoaded', function () {
  const checkbox = document.getElementById('checkbox');
  const btnForm = document.getElementById('btn-form');
  if (!checkbox || !btnForm) return;

  if (checkbox.hasAttribute('data-agree-toggle')) return;

  const sync = () => { btnForm.disabled = !checkbox.checked; };
  checkbox.addEventListener('change', sync);
  sync();
});

// page-about.php
document.querySelectorAll('[data-history]').forEach((root) => {
  const dates   = Array.from(root.querySelectorAll('.history__date'));
  const img     = root.querySelector('[data-history-img]');
  const text    = root.querySelector('[data-history-text]');
  const prevBtn = root.querySelector('[data-history-prev]');
  const nextBtn = root.querySelector('[data-history-next]');

  if (!dates.length || !img || !text) return;

  let current = 0;

  const show = (i) => {
    if (i < 0) i = dates.length - 1;
    if (i >= dates.length) i = 0;
    if (i === current) return;

    const btn = dates[i];
    img.src = btn.dataset.img;
    img.alt = btn.textContent.trim();
    text.textContent = btn.dataset.text;
    current = i;

    dates.forEach((d, idx) => d.classList.toggle('history__date--active', idx === i));
    const activeDate = document.querySelector('.history__date--active');
    if (activeDate) {
      activeDate.scrollIntoView({
        behavior: 'smooth',
        block: 'nearest',
        inline: 'center'
      });
    }
  };

  dates.forEach((btn, idx) => btn.addEventListener('click', () => show(idx)));
  if (prevBtn) prevBtn.addEventListener('click', () => show(current - 1));
  if (nextBtn) nextBtn.addEventListener('click', () => show(current + 1));
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

// главная
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

  let timer = setInterval(() => show(index + 1), 6000);
  hero.addEventListener('mouseenter', () => clearInterval(timer));
  hero.addEventListener('mouseleave', () => {
    timer = setInterval(() => show(index + 1), 6000);
  });
})();

// анимация счётчиков и кругов
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

// Бургер-меню
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
    if (window.innerWidth > 1024) closeMenu();
  }, { passive: true });
})();