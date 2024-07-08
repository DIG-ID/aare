import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import Lenis from '@studio-freight/lenis';

//Lenis configuration
export const lenis = new Lenis({
  //content: document.querySelector("#foo:bar")
  duration: 1,
  smooth: true,
  //easing: easeOutExpo(),
});

/*lenis.on('scroll', (e) => {
  console.log(e)
});*/

function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf)
}

requestAnimationFrame(raf);

gsap.registerPlugin(ScrollTrigger);

//GSAP ScrollTrigger integration
lenis.on('scroll', ScrollTrigger.update);

gsap.ticker.add((time)=>{
  lenis.raf(time * 1000)
});

gsap.ticker.lagSmoothing(0);

$(function() {
  const $toggleBtn = $('.menu-toggle');
  $toggleBtn.on('click', (e) => {
    if( $('#header-main').hasClass( 'menu-open' ) ) {
      lenis.start();
    } else {
      lenis.stop();
    }
  });
  //var $imageContainer = $('<div class="menu-item-image-container"></div>').appendTo('.menu-main-menu-container'); // Create a container for the image
  var $image = $('<img class="hover-image" src="" />').appendTo('.menu-link-image-container'); // Create the image element inside the container


  // Handle hover over menu items to update image source
  $('.menu-item a').on('mouseenter', function() {
    console.log( 'hover' );
    // Track mouse movement and update image position with delay (mouse lag effect)
    $(document).on('mousemove', function(event) {
      mouseX = event.clientX; // Get the current X coordinate of the mouse
      mouseY = event.clientY; // Get the current Y coordinate of the mouse

      // Calculate the new image position with a delay
      gsap.to('.menu-link-image-container', {
        duration: 0.2,
        x: mouseX,
        y: mouseY,
        ease: 'power3.out' // Adjust the easing function as needed
      });
    });

    var $menuItem = $(this);
    var imageUrl = $menuItem.data('data-img'); // Assuming you set a data attribute with the image URL
    if (imageUrl) {
      $image.attr('src', imageUrl); // Set the image source
      $('.menu-link-image-container').css('display', 'block'); // Show the image container
    }
  }, function() {
    // Reset image source and hide the image container when mouse leaves the menu item
    $image.attr('src', ''); // Reset image source
    $('.menu-link-image-container').css('display', 'none'); // Hide the image container
  });

  /*****************************************
   *                                       *
   *               Home Page               *
   *                                       *
   ****************************************/
  if ( $(".page-template-page-home")[0] ) {
    
    const items = document.querySelectorAll(".number-anim");
    const sectionProfile = document.querySelector("#section-profile");

    // Callback function to animate the numbers when section-profile enters the viewport
    function animateNumbers(entries, observer) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          gsap.from(items, {
            textContent: 0,
            duration: 2,
            ease: "power1.in",
            snap: { textContent: 1 },
            stagger: {
              each: 1.0,
              
            }
          });
          observer.unobserve(sectionProfile); // Stop observing once animation is triggered
        }
      });
    }

    // Intersection Observer setup
    const observer = new IntersectionObserver(animateNumbers, { threshold: 0 });

    // Observe the section-profile element
    observer.observe(sectionProfile);


  };

  /*****************************************
   *                                       *
   *               Profile Page               *
   *                                       *
   ****************************************/
  if ( $(".page-template-page-profile")[0] ) {
    
    let sections = gsap.utils.toArray(".panel");

    let scrollTween = gsap.to(sections, {
        xPercent: -100 * (sections.length - 1),
        ease: "none", // <-- IMPORTANT!
        scrollTrigger: {
          trigger: ".scroll-section",
          pin: true,
          scrub: 0.1,
          //snap: directionalSnap(1 / (sections.length - 1)),
          end: "+=3000"
        }
      });


  };

});