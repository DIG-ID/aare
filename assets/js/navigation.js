import { gsap } from "gsap";
// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", () => {

    /* Hamburguer toggle */
    const $toggleBtn = $('.menu-toggle')
    $toggleBtn.on('click', (e) => {


      if( $('#header-main').hasClass( 'menu-open' ) ) {
        $('#header-main').removeClass('menu-open');
        $('body').css('overflow', 'auto');
        $('.menu-wrapper').slideUp(700);
      } else {
        $('#header-main').addClass('menu-open');
        $('body').css('overflow', 'hidden');
        $('.menu-wrapper').slideDown(700);
      }
    });

  }, false);
});