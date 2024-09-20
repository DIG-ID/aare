document.addEventListener("DOMContentLoaded", () => {
    // Wait until all resources are loaded
    window.addEventListener("load", () => {
        const header = document.querySelector('#header-main');
        const menuApp = document.querySelector('.menu-app'); // Select the menu-app element

        if (header && menuApp) {
            // Function to handle the scroll behavior
            function handleScroll() {
                if (window.scrollY > 100) {
                    header.classList.add('bg-blue-shade-5');
                    header.classList.remove('bg-transparent');
                    menuApp.style.display = 'none'; // Hide the menu-app when scrolling
                } else {
                    header.classList.remove('bg-blue-shade-5');
                    header.classList.add('bg-transparent');
                    menuApp.style.display = 'block'; // Show the menu-app when back at the top
                }
            }

            // Check the scroll position when the page loads or refreshes
            handleScroll();

            // Add the scroll event listener to update styles on scroll
            window.addEventListener('scroll', handleScroll);
        }
    });
});
