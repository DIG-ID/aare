document.addEventListener("DOMContentLoaded", () => {
    // Wait until all resources are loaded
    window.addEventListener("load", () => {
        const header = document.querySelector('#header-main');
        const menuApp = document.querySelector('.menu-app'); // Select the menu-app element

        if (header && menuApp) {
            // Function to handle the scroll behavior
            function handleScroll() {
                // Only apply the logic if the window width is greater than 1280px
                if (window.innerWidth > 1280) {
                    if (window.scrollY > 100) {
                        header.classList.add('bg-blue-shade-5');
                        header.classList.remove('bg-transparent');
                        menuApp.style.display = 'none'; // Hide the menu-app when scrolling
                    } else {
                        header.classList.remove('bg-blue-shade-5');
                        header.classList.add('bg-transparent');
                        menuApp.style.display = 'block'; // Show the menu-app when back at the top
                    }
                } else {
                    // Reset styles if below 1280px
                    header.classList.remove('bg-transparent');
                    header.classList.add('bg-blue-shade-5');
                    menuApp.style.display = 'none'; // Show the menu-app for lower resolutions
                }
            }

            // Check the scroll position when the page loads or refreshes
            handleScroll();

            // Add the scroll event listener to update styles on scroll
            window.addEventListener('scroll', handleScroll);

            // Also check window resize to adjust behavior if the width changes
            window.addEventListener('resize', handleScroll);
        }
    });
});
