document.addEventListener('DOMContentLoaded', function() {
    const btnLeft = document.querySelector ('.project__btn--left');
    const btnRight =document.querySelector ('.project__btn--right');


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

    btnLeft.addEventListener ('click', function(){
        indexActive--;
        if(indexActive < 0){
            indexActive = maxIndex;
        }
        updateslide();
    });

    btnRight.addEventListener ('click', function(){
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


});