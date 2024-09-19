document.addEventListener("DOMContentLoaded", () => {
    // Wait until all resources are loaded
    window.addEventListener("load", () => {
        const header = document.querySelector('#header-main');
        const aboutPage = document.body.classList.contains('page-template-page-about');
    
        if (!aboutPage && header) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 100) {
            header.classList.add('bg-blue-shade-5');
            header.classList.remove('bg-transparent');
            } else {
            header.classList.remove('bg-blue-shade-5');
            header.classList.add('bg-transparent');
            }
        });
        }
    });
});
  