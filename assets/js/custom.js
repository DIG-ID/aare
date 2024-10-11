let header = $('#header-main');
let menuApp = $('.menu-app');
let lastScroll = 0;

function handleScroll() {
    const currentScroll = window.pageYOffset;

    if (window.innerWidth > 1280) {
        if (currentScroll > 100) {
            header.removeClass('bg-transparent').addClass('bg-blue-shade-5 top-nav-fixed');
            if (!header.hasClass('sticky')) {
                header.addClass('sticky');
            }
            menuApp.slideUp(); 
        } else {
            header.removeClass('bg-blue-shade-5 top-nav-fixed sticky').addClass('bg-transparent');
            menuApp.slideDown();  
        }
    } else {
        header.removeClass('bg-transparent').addClass('bg-blue-shade-5 top-nav-fixed sticky');
        menuApp.slideUp();
    }

    lastScroll = currentScroll;
}

handleScroll();

$(window).on('scroll', handleScroll);
$(window).on('resize', handleScroll);
