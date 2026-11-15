document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.threeItems.carousel, .fourItems.carousel').forEach(carousel => {
        const minPerSlide = carousel.classList.contains('threeItems') ? 3 : 4;
        const items = carousel.querySelectorAll('.carousel-item');

        items.forEach((el, index) => {
            let nextIndex = index + 1;
            for (let i = 1; i < minPerSlide; i++) {
                // Am Ende wieder beim ersten Element beginnen
                if (nextIndex >= items.length) {
                    nextIndex = 0;
                }
                const cloneChild = items[nextIndex].firstElementChild?.cloneNode(true);
                if (cloneChild) {
                    el.appendChild(cloneChild);
                }
                nextIndex++;
            }
        });
    });
});
