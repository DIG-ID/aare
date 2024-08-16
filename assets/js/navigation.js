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

    /* Sub-menu add classes */
    const menuItems = document.querySelectorAll('#main-menu > .menu-item');

    menuItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            // Remove the 'menu-item-hover' class from all menu items
            menuItems.forEach(item => item.classList.remove('menu-item-hover'));

            // Add the 'menu-item-hover' class to the current menu item
            this.classList.add('menu-item-hover');
        });
    });

    /* Mobile Nav */
    let attrLists = document.querySelectorAll(".menu-item-has-children > a");

    attrLists.forEach(attr => {
        attr.addEventListener("click", function (e) {
            e.preventDefault(); // Prevent the default action (navigation)

            // Find the next sibling 'ul' element, which should be the submenu
            let submenu = attr.nextElementSibling;

            if (submenu && submenu.tagName.toLowerCase() === 'ul') {
                // Toggle the 'active' class to show/hide the submenu
                submenu.classList.toggle("active");
            }
        });
    });

  }, false);
});