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


  checkbox.addEventListener('change', function(){
    if(checkbox.checked){
    btnForm.disabled = false;
  }else{
    btnForm.disabled = true;

  }
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

    isAnimating = true;
    lockButtons();

    img.classList.remove('is-visible');
    text.classList.remove('is-visible');

    setTimeout(() => {
      const slide = slides[i];
      if (slide) {
        img.src = slide.img;
        img.alt = 'History';
        text.textContent = slide.text;
      }
      current = i;

      dates.forEach((d, idx) => {
        d.classList.toggle('history__date--active', idx === i);
      });

      img.classList.add('is-visible');
      text.classList.add('is-visible');

      setTimeout(() => {
        isAnimating = false;
        unlockButtons();
      }, ANIM_MS);
    }, ANIM_MS);
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