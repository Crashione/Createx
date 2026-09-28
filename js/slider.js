document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.portfolio__slider').forEach(initSlider);
});

function initSlider(root) {
  const track = root.querySelector('.portfolio__track');
  if (!track) return;

  const originalSlides = Array.from(track.children);
  if (originalSlides.length < 2) return;

  const section = root.closest('section') || document;
  const prevBtn = section.querySelector('.slider-nav__btn--prev');
  const nextBtn = section.querySelector('.slider-nav__btn--next');

  originalSlides.forEach((slide) => {
    const clone = slide.cloneNode(true);
    clone.classList.add('is-clone');
    clone.setAttribute('aria-hidden', 'true');
    clone.querySelectorAll('a, button').forEach(el => el.tabIndex = -1);
    track.appendChild(clone);
  });

  for (let i = originalSlides.length - 1; i >= 0; i--) {
    const clone = originalSlides[i].cloneNode(true);
    clone.classList.add('is-clone');
    clone.setAttribute('aria-hidden', 'true');
    clone.querySelectorAll('a, button').forEach(el => el.tabIndex = -1);
    track.insertBefore(clone, track.firstChild);
  }

  const allSlides = Array.from(track.children);
  const originalsStart = originalSlides.length;
  const originalsEnd = originalsStart + originalSlides.length - 1;

  let visible = 3;
  let step = 0;
  let index = originalsStart;

  let isAnimating = false;
  const ANIM_MS = 450;

  const calcVisible = () => {
    const w = window.innerWidth;
    if (w < 768) return 1;
    if (w < 1024) return 2;
    return 3;
  };

  const measure = () => {
    const first = allSlides[0];
    const slideWidth = first.getBoundingClientRect().width;
    const styles = getComputedStyle(track);
    const gap = parseFloat(styles.columnGap || styles.gap) || 0;
    step = slideWidth + gap;
    visible = calcVisible();
  };

  const setTransform = (noTransition = false) => {
    if (noTransition) {
      track.style.transition = 'none';
      track.style.transform = `translate3d(${-index * step}px, 0, 0)`;
      void track.offsetWidth;
      track.style.transition = `transform ${ANIM_MS}ms cubic-bezier(.4, 0, .2, 1)`;
    } else {
      track.style.transform = `translate3d(${-index * step}px, 0, 0)`;
    }
  };

  const lockButtons = () => {
    if (prevBtn) { prevBtn.classList.add('is-loading'); prevBtn.disabled = true; }
    if (nextBtn) { nextBtn.classList.add('is-loading'); nextBtn.disabled = true; }
  };

  const unlockButtons = () => {
    if (prevBtn) { prevBtn.classList.remove('is-loading'); prevBtn.disabled = false; }
    if (nextBtn) { nextBtn.classList.remove('is-loading'); nextBtn.disabled = false; }
  };

  const next = () => {
    if (isAnimating) return;
    isAnimating = true;
    lockButtons();
    index++;
    setTransform(false);
    setTimeout(() => { if (isAnimating) { isAnimating = false; unlockButtons(); } }, ANIM_MS + 50);
  };

  const prev = () => {
    if (isAnimating) return;
    isAnimating = true;
    lockButtons();
    index--;
    setTransform(false);
    setTimeout(() => { if (isAnimating) { isAnimating = false; unlockButtons(); } }, ANIM_MS + 50);
  };

  track.addEventListener('transitionend', (e) => {
    if (e.propertyName !== 'transform') return;

    if (index > originalsEnd) {
      index -= originalSlides.length;
      setTransform(true);
    } else if (index < originalsStart) {
      index += originalSlides.length;
      setTransform(true);
    }

    isAnimating = false;
    unlockButtons();
  });

  if (nextBtn) nextBtn.addEventListener('click', next);
  if (prevBtn) prevBtn.addEventListener('click', prev);

  document.addEventListener('keydown', (e) => {
    const rect = root.getBoundingClientRect();
    const inView = rect.top < window.innerHeight && rect.bottom > 0;
    if (!inView) return;
    if (e.key === 'ArrowRight') next();
    if (e.key === 'ArrowLeft') prev();
  });

  let touchStartX = 0;
  let touchDeltaX = 0;

  root.addEventListener('touchstart', (e) => {
    if (isAnimating) return;
    touchStartX = e.touches[0].clientX;
    track.style.transition = 'none';
  }, { passive: true });

  root.addEventListener('touchmove', (e) => {
    if (isAnimating) return;
    touchDeltaX = e.touches[0].clientX - touchStartX;
    const current = -index * step + touchDeltaX;
    track.style.transform = `translate3d(${current}px, 0, 0)`;
  }, { passive: true });

  root.addEventListener('touchend', () => {
    if (isAnimating) return;
    track.style.transition = `transform ${ANIM_MS}ms cubic-bezier(.4, 0, .2, 1)`;
    if (touchDeltaX < -50) next();
    else if (touchDeltaX > 50) prev();
    else setTransform(false);
    touchDeltaX = 0;
  });

  let resizeTimer;
  window.addEventListener('resize', () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
      measure();
      setTransform(true);
    }, 100);
  });

  track.style.transition = `transform ${ANIM_MS}ms cubic-bezier(.4, 0, .2, 1)`;
  measure();
  setTransform(true);
}