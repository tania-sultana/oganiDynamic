const minRange = document.getElementById('minRange');
    const maxRange = document.getElementById('maxRange');
    const priceDisplay = document.getElementById('priceDisplay');
    const sliderTrack = document.getElementById('sliderTrack');
    const minGap = 10;
    const maxValue = parseInt(maxRange.max);
    function updateSlider(e) {
      let minVal = parseInt(minRange.value);
      let maxVal = parseInt(maxRange.value);

      if (maxVal - minVal <= minGap) {
        if (e.target.id === "minRange") {
          minRange.value = maxVal - minGap;
        } else {
          maxRange.value = minVal + minGap;
        }
        minVal = parseInt(minRange.value);
        maxVal = parseInt(maxRange.value);
      }
      priceDisplay.textContent = `$${minVal} - $${maxVal}`;
      const percent1 = ((minVal - minRange.min) / (maxValue - minRange.min)) * 100;
      const percent2 = ((maxVal - minRange.min) / (maxValue - minRange.min)) * 100;
      sliderTrack.style.background = `linear-gradient(to right, #ddd ${percent1}%, #e60000 ${percent1}%, #e60000 ${percent2}%, #ddd ${percent2}%)`;
    }
    minRange.addEventListener('input', updateSlider);
    maxRange.addEventListener('input', updateSlider);
    updateSlider({ target: maxRange });

    // -------------------------------carousel section--------------------

   const track = document.querySelector('.carousel-track');
  let cards = Array.from(track.children);
  let visibleCount;
  let cardWidth;
  let index = 0;
  let slideInterval;
  function cloneCards(count) {
    const clones = track.querySelectorAll('.clone');
    clones.forEach(clone => clone.remove());

    for (let i = 0; i < count; i++) {
      const clone = cards[i].cloneNode(true);
      clone.classList.add('clone');
      track.appendChild(clone);
    }
  }
  function updateDimensions() {
    const width = window.innerWidth;
    if (width <= 600) {
      visibleCount = 1;
    } else if (width <= 768) {
      visibleCount = 2;
    }
     else if (width <= 992) {
      visibleCount = 2;
    } 
    else {
      visibleCount = 3;
    }
    cardWidth = cards[0].getBoundingClientRect().width + 16; 
  }
  function slide() {
    index++;
    track.style.transition = 'transform 0.5s ease-in-out';
    track.style.transform = `translateX(${-index * cardWidth}px)`;
    if (index >= cards.length) {
      setTimeout(() => {
        track.style.transition = 'none';
        track.style.transform = 'translateX(0)';
        index = 0;
        requestAnimationFrame(() => {
          requestAnimationFrame(() => {
            track.style.transition = 'transform 0.5s ease-in-out';
          });
        });
      }, 500);
    }
  }
  function startSlider() {
    slideInterval = setInterval(slide, 3000);
  }
  function stopSlider() {
    clearInterval(slideInterval);
  }
  function initSlider() {
    cards = Array.from(track.children).filter(card => !card.classList.contains('clone'));
    updateDimensions();
    cloneCards(visibleCount);
    index = 0;
    track.style.transition = 'none';
    track.style.transform = 'translateX(0)';
    stopSlider();
    startSlider();
  }
  window.addEventListener('resize', initSlider);
  document.querySelector('.carousel-container').addEventListener('mouseenter', stopSlider);
  document.querySelector('.carousel-container').addEventListener('mouseleave', startSlider);
  initSlider();


//   -----------------radio------------
const radios = document.querySelectorAll('.carousel-controller input[type="radio"]');
function updateRadioActive() {
  let group = Math.floor(index / visibleCount);
  if (group > 1) group = 1;

  radios.forEach((radio, i) => {
    radio.checked = i === group;
  });
}
function goToSlideGroup(group) {
  index = group * visibleCount;
  track.style.transition = 'transform 0.5s ease-in-out';
  track.style.transform = `translateX(${-index * cardWidth}px)`;
}
function slide() {
  index++;
  track.style.transition = 'transform 0.5s ease-in-out';
  track.style.transform = `translateX(${-index * cardWidth}px)`;

  if (index >= cards.length) {
    setTimeout(() => {
      track.style.transition = 'none';
      track.style.transform = 'translateX(0)';
      index = 0;
      requestAnimationFrame(() => {
        requestAnimationFrame(() => {
          track.style.transition = 'transform 0.5s ease-in-out';
        });
      });
    }, 500);
  }
  updateRadioActive();
}
radios.forEach((radio, i) => {
  radio.addEventListener('change', () => {
    goToSlideGroup(i);
  });
});




// -----------left carousel slider-------------------

        document.addEventListener('DOMContentLoaded', () => {
            const track = document.querySelector('.prod-slider-track');
            const prevBtn = document.querySelector('.prod-prev-btn');
            const nextBtn = document.querySelector('.prod-next-btn');
            const originalColumns = Array.from(track.querySelectorAll('.prod-slider-column'));
            
            if (originalColumns.length === 0) return; 

            let currentIndex = 0;
            let columnWidth = 0; 
            const AUTO_SLIDE_INTERVAL = 3000; 
            const RESUME_DELAY = 5000; 
            let autoSlideInterval;
            let resumeTimeout;

            const initialize = () => {
                columnWidth = originalColumns[0].offsetWidth; 
                originalColumns.forEach(column => {
                    const clone = column.cloneNode(true);
                    track.appendChild(clone);
                });
                startAutoSlideInterval();
            };
      
            const stopAutoSlideInterval = () => {
                clearInterval(autoSlideInterval);
            };

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
                track.style.transition = 'transform 0.5s ease-in-out';
                track.style.transform = `translateX(-${currentIndex * columnWidth}px)`;
                if (!isAutomatic) {
                    resetAutoSlide();
                }
            };

            const slideNext = (isAutomatic = false) => {
                const totalSlides = originalColumns.length;

                currentIndex++;
                if (currentIndex >= totalSlides) {
                    track.style.transition = 'none'; 
                    track.style.transform = `translateX(0px)`;
                    void track.offsetWidth; 
                    currentIndex = 1; 
                }
                updateCarouselPosition(isAutomatic);
            };

            const slidePrev = () => {
                currentIndex--;
                if (currentIndex < 0) {
                    track.style.transition = 'none'; 
                    track.style.transform = `translateX(-${originalColumns.length * columnWidth}px)`;
                    void track.offsetWidth;
                    currentIndex = originalColumns.length - 1;
                }
                updateCarouselPosition(false); 
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
        });
 