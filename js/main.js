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
