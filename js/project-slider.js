// сладер для фотографий
document.addEventListener('DOMContentLoaded', function() {
    const btnProjectLeft = document.querySelector ('.project__btn--left');
    const btnProjectRight =document.querySelector ('.project__btn--right');


    const projectMain = document.querySelectorAll ('.project__main-slide');
    const projectMiniature = document.querySelectorAll ('.project__miniature-slide');
    

    let indexActive = 0;
    const maxIndex = projectMain.length - 1;

    function updateslide (){
        projectMain.forEach(function(slide, index){
            if (index === indexActive){
                slide.classList.add('main__slide--active');
            }else{
                slide.classList.remove('main__slide--active');
            }
        });

        projectMiniature.forEach(function(slide, index){
            if(index === indexActive){
                slide.classList.add('miniature__slide--active');
            }else{
                slide.classList.remove('miniature__slide--active');
            }
        })

    }

    btnProjectLeft.addEventListener ('click', function(){
        indexActive--;
        if(indexActive < 0){
            indexActive = maxIndex;
        }
        updateslide();
    });

    btnProjectRight.addEventListener ('click', function(){
        indexActive++;
        if(indexActive > maxIndex){
            indexActive = 0;
        }
        updateslide();
    });

    projectMiniature.forEach(function(slide, index){
        slide.addEventListener('click', function(){
            indexActive = index;
            updateslide();
        });

    });



    // слайдер для всех проектов
    const similarSlider = document.querySelector('.similar__slider')
    const btnSimilarLeft = document.querySelector('.similar__btn--left');
    const btnSimilarRight = document.querySelector('.similar__btn--right');

    const slideAll = document.querySelectorAll('.similar__slide');
    const sliderContainer = document.querySelector('.similar__container');

    let similarIndex = 0;
    const similarMaxIndex = slideAll.length;
    function getVisibleCount(){
        const containerWidth = sliderContainer.offsetWidth;
        const slideWidth = getWidth();
        return Math.round(containerWidth / (slideWidth + 30)) || 1; 
    }
    function getWidth (){
        const slide = document.querySelector('.similar__slide');
        return slide.offsetWidth;
    }

    btnSimilarLeft.addEventListener('click', function(){
            similarIndex--;
            if(similarIndex < 0){
                similarIndex = similarMaxIndex - getVisibleCount();
            }
            similarSlider.style.transform = `translateX(-${similarIndex * (getWidth()+30)}px)`;
    })

    btnSimilarRight.addEventListener('click', function(){
            similarIndex++;
            if(similarIndex > (similarMaxIndex-getVisibleCount())){
                similarIndex = 0
            }
            similarSlider.style.transform = `translateX(-${similarIndex * (getWidth()+30)}px)`;
        
    })





});

