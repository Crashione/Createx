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