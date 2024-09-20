import { gsap } from "gsap";
// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", () => {

    /* Hamburguer toggle */
    const $toggleBtn = $('.menu-toggle');

    $toggleBtn.on('click', (e) => {
        const $header = $('#header-main');

        if ($header.hasClass('menu-open')) {
            $header.removeClass('menu-open');
            $('body').css('overflow', 'auto');
            $('.menu-wrapper').fadeOut(500);

            // Remove the cross animation
            $toggleBtn.removeClass('menu-toggle-active');
        } else {
            $header.addClass('menu-open');
            $('body').css('overflow', 'hidden');
            $('.menu-wrapper').fadeIn(500);

            // Add the cross animation
            $toggleBtn.addClass('menu-toggle-active');
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

    // Function to toggle the 'active' class on submenus
    function toggleSubmenu(e) {
        e.preventDefault(); // Prevent the default action (navigation)

        // Find the next sibling 'ul' element, which should be the submenu
        let submenu = e.target.nextElementSibling;

        if (submenu && submenu.tagName.toLowerCase() === 'ul') {
            // Toggle the 'active' class to show/hide the submenu
            submenu.classList.toggle("active");
        }
    }

    // Add click event listeners to menu items with children
    attrLists.forEach(attr => {
        attr.addEventListener("click", toggleSubmenu);
    });

    // Select all 'back' menu items
    let backMenus = document.querySelectorAll(".back__menu");

    // Function to hide the current submenu and go back to the parent
    function hideSubmenu(e) {
        e.preventDefault(); // Prevent the default action (navigation)

        // Find the current submenu (parent of the clicked 'back' link)
        let currentSubmenu = e.target.closest('ul');

        if (currentSubmenu) {
            // Remove the 'active' class to hide the current submenu
            currentSubmenu.classList.remove("active");
        }
    }

    // Add click event listeners to 'back' menu items
    backMenus.forEach(back => {
        back.addEventListener("click", hideSubmenu);
    });


  }, false);
});