
  var swiper = new Swiper(".categorySwiper", {
    slidesPerView: 4,
    spaceBetween: 30,
    loop: true,
    grabCursor: true,

 
    autoplay: {
      delay: 2500, 
      disableOnInteraction: false, 
    },

  
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

 
    breakpoints: {
      320: { slidesPerView: 1, spaceBetween: 10 },
      576: { slidesPerView: 2, spaceBetween: 20 },
      768: { slidesPerView: 3, spaceBetween: 25 },
      992: { slidesPerView: 4, spaceBetween: 30 },
    },
  });

// ------------------3 slider------------------

 const initializeSlider = (containerElement) => {
            const track = containerElement.querySelector('.prod-slider-track');
            const prevBtn = containerElement.querySelector('.prod-prev-btn');
            const nextBtn = containerElement.querySelector('.prod-next-btn');
            if (!track || !prevBtn || !nextBtn) {
                console.error('Slider initialization failed: Missing required elements in container:', containerElement.id);
                return;
            }
            const originalColumns = Array.from(track.querySelectorAll('.prod-slider-column'));
            if (originalColumns.length === 0) return; 

            let currentIndex = 0; 
            let columnWidth = 0; 
            
            const AUTO_SLIDE_INTERVAL = 3000;
            const RESUME_DELAY = 5000;
            let autoSlideInterval;
            let resumeTimeout;
            const stopAutoSlideInterval = () => clearInterval(autoSlideInterval);
            const startAutoSlideInterval = () => {
                stopAutoSlideInterval(); 
                autoSlideInterval = setInterval(() => {
                    if (!track.matches(':hover')) {
                        slideNext(true); 
                    }
                }, AUTO_SLIDE_INTERVAL);
            };
            const resetAutoSlide = () => {
                stopAutoSlideInterval();
                clearTimeout(resumeTimeout); 
                resumeTimeout = setTimeout(startAutoSlideInterval, RESUME_DELAY);
            };
            const updateCarouselPosition = (isAutomatic = false) => {
                track.style.transition = 'transform 0.3s ease-in-out';
                track.style.transform = `translateX(-${currentIndex * columnWidth}px)`;
                if (!isAutomatic) {
                    resetAutoSlide();
                }
            };
            const slideNext = (isAutomatic = false) => {
                const totalSlides = originalColumns.length;
                currentIndex++;              
                if (currentIndex >= totalSlides) {
                    track.style.transform = `translateX(-${totalSlides * columnWidth}px)`;
                    setTimeout(() => {
                        track.style.transition = 'none'; 
                        track.style.transform = `translateX(0px)`;
                        currentIndex = 0;
                        void track.offsetWidth; 
                        track.style.transition = 'transform 0.3s ease-in-out'; 
                    }, 500); 
                    return;
                }
                updateCarouselPosition(isAutomatic);
            };
            const slidePrev = () => {
                const totalSlides = originalColumns.length;
                currentIndex--;
                
                if (currentIndex < 0) {
                    track.style.transition = 'none'; 
                    track.style.transform = `translateX(-${(totalSlides) * columnWidth}px)`;
                    void track.offsetWidth;
                    currentIndex = totalSlides - 1; 
                }
                updateCarouselPosition(false); 
            };
            const initialize = () => {
                columnWidth = originalColumns[0].offsetWidth; 
                track.querySelectorAll('.prod-slider-column.clone').forEach(clone => clone.remove());
                originalColumns.forEach(column => {
                    const clone = column.cloneNode(true);
                    clone.classList.add('clone');
                    track.appendChild(clone);
                });
                startAutoSlideInterval();
            };
            nextBtn.addEventListener('click', () => slideNext(false));
            prevBtn.addEventListener('click', slidePrev);
            track.addEventListener('mouseenter', stopAutoSlideInterval);
            track.addEventListener('mouseleave', startAutoSlideInterval);
            window.addEventListener('resize', () => {
                columnWidth = originalColumns[0].offsetWidth; 
                track.style.transform = `translateX(-${currentIndex * columnWidth}px)`;
                startAutoSlideInterval();
            });
            initialize();
        }; 
        document.addEventListener('DOMContentLoaded', () => {
            const latestContainer = document.getElementById('latest-products-container');
            const topRatedContainer = document.getElementById('top-rated-products-container');
            const reviewContainer = document.getElementById('review-products-container');
            if (latestContainer) initializeSlider(latestContainer);
            if (topRatedContainer) initializeSlider(topRatedContainer);
            if (reviewContainer) initializeSlider(reviewContainer);
        });

