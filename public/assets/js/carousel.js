
document.addEventListener("DOMContentLoaded", () => {
  const carousels = document.querySelectorAll('[id^="carousel-"]');
  const visibleCount = 3;
  const slideCount = 3;   

  carousels.forEach((carousel) => {
    const list = carousel.querySelector(".product-list");
    const items = Array.from(list.querySelectorAll(".product-item"));
    const totalItems = items.length;
    const buttons = carousel.querySelectorAll(".arrow-btn");
    let currentIndex = 0;

    list.style.display = "flex";
    list.style.transition = "transform 0.5s ease";

    items.forEach(item => {
      item.style.flex = `0 0 ${100 / visibleCount}%`;
      item.style.boxSizing = "border-box";
    });

    const updateSlide = () => {
     
      if (currentIndex >= totalItems) currentIndex = 0;
      if (currentIndex < 0) currentIndex = totalItems - slideCount;
      const translateX = -(currentIndex * (100 / visibleCount));
      list.style.transform = `translateX(${translateX}%)`;
    };

    const nextSlide = () => {
      currentIndex += slideCount;
      updateSlide();
    };

    const prevSlide = () => {
      currentIndex -= slideCount;
      updateSlide();
    };

    buttons.forEach(btn => {
      btn.addEventListener("click", () => {
        const dir = parseInt(btn.dataset.dir);
        if (dir === 1) nextSlide();
        else prevSlide();
      });
    });

    updateSlide();
  });
});

