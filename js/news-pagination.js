document.addEventListener('DOMContentLoaded', function() {
    const allNews = document.querySelectorAll('.news__container'); 
    const allCategories = document.querySelectorAll('.categories__item');
    const newsEmpty = document.querySelector('.news__empty');
    const paginationContainer = document.querySelector('.categories__pagination');

    const itemsPage = 6;
    let currentPage = 1;
    let currentFilter = 'all'; 

    if (allCategories.length === 0) return;

   
    function updateLayout() {
        let counterNews = 0;
        const filteredNews = [];

    
        allNews.forEach(function(news) {
            const newsCategories = news.getAttribute('data-category');
            if (currentFilter === 'all' || newsCategories === currentFilter) {
                filteredNews.push(news);
                counterNews++;
            } else {
                news.style.display = 'none'; 
            }
        });

        if (newsEmpty) {
            if (counterNews === 0) {
                newsEmpty.classList.add('news__empty--active');
            } else {
                newsEmpty.classList.remove('news__empty--active');
            }
        }

       
        const totalPages = Math.ceil(counterNews / itemsPage);
        if (currentPage > totalPages) {
            currentPage = totalPages || 1;
        }

        const startIndex = (currentPage - 1) * itemsPage;
        const endIndex = startIndex + itemsPage;


        filteredNews.forEach(function(news, index) {
            if (index >= startIndex && index < endIndex) {
                news.style.display = 'grid'; 
            } else {
                news.style.display = 'none';
            }
        });

        
        renderPagination(totalPages);
    }

    
    function renderPagination(totalPages) {
        if (!paginationContainer) return;
        paginationContainer.innerHTML = ''; 

        if (totalPages <= 1) return; 

        for (let i = 1; i <= totalPages; i++) {
            const btn = document.createElement('button');
            btn.innerText = i;
            btn.classList.add('pagination__btn');

            if (i === currentPage) {
                btn.classList.add('pagination__btn--active');
            }

          
            btn.addEventListener('click', function() {
                currentPage = i;
                updateLayout(); 
            });

            paginationContainer.appendChild(btn);
        }
    }

   
    allCategories.forEach(function(categories) {
        categories.addEventListener('click', function() {
            allCategories.forEach(function(item) {
                item.classList.remove('categories__item--active');
            });
            categories.classList.add('categories__item--active');

            currentFilter = categories.getAttribute('data-filter');
            currentPage = 1; 

            updateLayout();
        });
    });

    
    updateLayout();
});