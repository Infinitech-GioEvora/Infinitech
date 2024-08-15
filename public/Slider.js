document.addEventListener('DOMContentLoaded', function() {
    const prevButton = document.querySelector('.carousel-control-prev');
    const nextButton = document.querySelector('.carousel-control-next');
    const carouselInner = document.querySelector('.carousel-inner');
    const items = document.querySelectorAll('.carousel-item');
    let currentIndex = 0;
    const totalItems = items.length;

    function updateCarousel(direction) {
        const previousIndex = currentIndex;
        currentIndex = (currentIndex + direction + totalItems) % totalItems;
        const angle = -180 * currentIndex;

        // Apply cube rotation
        carouselInner.style.transform = `rotateY(${angle}deg)`;

        // Add and remove classes to handle transition effects
        items[previousIndex].style.opacity = 0.5; // Optional: visual feedback for previous item
        items[currentIndex].style.opacity = 1;
    }

    prevButton.addEventListener('click', () => updateCarousel(-1));
    nextButton.addEventListener('click', () => updateCarousel(1));
});
