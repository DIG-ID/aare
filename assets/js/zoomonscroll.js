document.addEventListener("DOMContentLoaded", () => {
    // Wait until all resources are loaded
    window.addEventListener("load", () => {
        // Add scroll event listener
        window.addEventListener("scroll", () => {
            // Iterate over each element with class 'zoom-on-scroll'
            document.querySelectorAll('.zoom-on-scroll').forEach((element) => {
                // Get the position of the center of the element relative to the viewport
                const elementRect = element.getBoundingClientRect();
                const elementCenter = elementRect.top + elementRect.height / 2;
                // Get the middle third of the viewport
                const viewportMiddle = window.innerHeight / 2;
                const viewportTop = viewportMiddle - window.innerHeight / 6;
                const viewportBottom = viewportMiddle + window.innerHeight / 6;
                // Get the current scroll position
                const scrollPosition = window.pageYOffset || document.documentElement.scrollTop;

                // Check if the center of the element is within the middle third of the viewport
                if (elementCenter > viewportTop && elementCenter < viewportBottom) {
                    element.classList.add('zoomed');
                } else {
                    element.classList.remove('zoomed');
                }
            });
        });
    });
});
