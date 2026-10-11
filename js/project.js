// слайдер для фотографий
document.addEventListener('DOMContentLoaded', function() {
    const btnProjectLeft = document.querySelector('.project__btn--left');
    const btnProjectRight = document.querySelector('.project__btn--right');
    const projectMain = document.querySelectorAll('.project__main-slide');
    const projectMiniature = document.querySelectorAll('.project__miniature-slide');

    if (!btnProjectLeft || !btnProjectRight || !projectMain.length) {
        return;
    }

    let indexActive = 0;
    const maxIndex = projectMain.length - 1;

    function updateslide() {
        projectMain.forEach(function(slide, index) {
            slide.classList.toggle('main__slide--active', index === indexActive);
        });
        projectMiniature.forEach(function(slide, index) {
            slide.classList.toggle('miniature__slide--active', index === indexActive);
        });
    }

    btnProjectLeft.addEventListener('click', function() {
        indexActive--;
        if (indexActive < 0) indexActive = maxIndex;
        updateslide();
    });

    btnProjectRight.addEventListener('click', function() {
        indexActive++;
        if (indexActive > maxIndex) indexActive = 0;
        updateslide();
    });

    projectMiniature.forEach(function(slide, index) {
        slide.addEventListener('click', function() {
            indexActive = index;
            updateslide();
        });
    });
});