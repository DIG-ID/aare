import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import Lenis from 'lenis';

//Lenis configuration
let lenis;

document.addEventListener("DOMContentLoaded", function() {

  const isAboutPage = document.body.classList.contains('page-template-page-about');
  
  if (!isAboutPage) {
    // Initialize Lenis only if it's NOT the about page
    lenis = new Lenis({
      duration: 1,
      smooth: true,
      //easing: easeOutExpo(),
    });

    function raf(time) {
      lenis.raf(time);
      requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);

    // GSAP ScrollTrigger integration with Lenis
    lenis.on('scroll', ScrollTrigger.update);

    gsap.ticker.add((time) => {
      lenis.raf(time * 1000);
    });

    gsap.ticker.lagSmoothing(0);
  } else {
    // Ensure the lenis classes and scroll behavior are removed on the about page
    document.documentElement.classList.remove('lenis', 'lenis-scrolling', 'lenis-smooth');
    document.documentElement.style.scrollBehavior = '';

    // Ensure no Lenis behavior is triggered on scroll or wheel events
    window.removeEventListener('scroll', lenis?.onScroll);
    window.removeEventListener('wheel', lenis?.onWheel);
  }

  // GSAP horizontal scroll effect (this will still run on the about page)
  gsap.registerPlugin(ScrollTrigger);
  
  // Horizontal Scroll for .history-hospital
  const scrollContainer = document.querySelector('.history-hospital div');
  
  if (scrollContainer) {
    const scrollWidth = scrollContainer.scrollWidth;
    const viewportWidth = window.innerWidth;

    gsap.to(scrollContainer, {
      x: -(scrollWidth - viewportWidth),
      ease: 'none',
      scrollTrigger: {
        trigger: '.history-hospital',
        start: 'bottom bottom', // Start horizontal scroll when the bottom of the section hits the bottom of the viewport
        pin: true,
        scrub: 1,
        end: () => "+=" + scrollWidth // Sets the scrolling distance
      }
    });
  }

  // Horizontal Scroll for .history-building
  const scrollContainerBuilding = document.querySelector('.history-building div');
  if (scrollContainerBuilding) {
    const scrollWidthBuilding = scrollContainerBuilding.scrollWidth;
    const viewportWidthBuilding = window.innerWidth;

    gsap.to(scrollContainerBuilding, {
      x: -(scrollWidthBuilding - viewportWidthBuilding),
      ease: 'none',
      scrollTrigger: {
        trigger: '.history-building',
        start: 'bottom bottom', // Start horizontal scroll when the bottom of the section hits the bottom of the viewport
        pin: true,
        scrub: 1,
        end: () => "+=" + scrollWidthBuilding // Sets the scrolling distance
      }
    });
  }

});
