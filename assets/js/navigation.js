import { gsap } from "gsap";
// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", () => {

    /*shop btn slider*/
    var shopBtnSlider = document.querySelector(".shop-btn-slider");
    var shopBtnContent = document.querySelector(".text-slide");
    var numberOfCopies = 5;  // Number of times to append the content

    for (var i = 0; i < numberOfCopies; i++) {
        var shopBtnContentCopy = shopBtnContent.cloneNode(true);
        shopBtnSlider.appendChild(shopBtnContentCopy);
    }

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
      //$('#header-main').toggleClass('menu-open');
      
      const $spanElement = $('.menu-toggle span.menu-toggle__text');
    
      if ($spanElement.text().trim() === 'Menu') {
        if(window.location.href.indexOf("/en/") > -1) {
          $spanElement.text('Close');
        }
        else if(window.location.href.indexOf("/fr/") > -1){
          $spanElement.text('Fermer');
        } else{
          $spanElement.text('Schliessen');
        }
        
      } else {
        $spanElement.text('Menu');
      }


    });


  }, false);
});