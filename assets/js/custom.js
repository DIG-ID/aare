document.addEventListener("DOMContentLoaded", () => {
    // Wait until all resources are loaded
    window.addEventListener("load", () => {
        const header = document.querySelector('#header-main');
        const menuApp = document.querySelector('.menu-app'); // Select the menu-app element

        if (header && menuApp) {
            window.addEventListener('scroll', function() {
                if (window.scrollY > 100) {
                    header.classList.add('bg-blue-shade-5');
                    header.classList.remove('bg-transparent');

                    // Hide the menu-app immediately when scrolling
                    menuApp.style.display = 'none';
                } else {
                    header.classList.remove('bg-blue-shade-5');
                    header.classList.add('bg-transparent');

                    // Show the menu-app again when scrolling back to the top
                    menuApp.style.display = 'block';
                }
            });
        }
    });
});
  