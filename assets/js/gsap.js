import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import Lenis from 'lenis';

//Lenis configuration
let lenis;

// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
	//wait until images, links, fonts, stylesheets, and js is loaded
	window.addEventListener("load", () => {

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

		if ( $(".page-template-page-home")[0] ) {

			gsap.from(['.section-intro--title', '.section-intro--description', '.section-intro--description-2', '.section-intro--img'], {
				scrollTrigger: {
					trigger: '.section-intro',
					//pin: true, // pin the trigger element while active
					start: 'top 60%', // when the top of the trigger hits the top of the viewport
					end: 'bottom bottom', // end after scrolling 500px beyond the start
					scrub: 1.2, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
					markers: true,
					toggleActions: 'play none reverse none'
				},
				y: 100,
				stagger: 0.2,
				opacity: 0,
				autoAlpha: 0
			});

			gsap.from(['.section-services--title', '.section-services--item', '.section-services--button'], {
				scrollTrigger: {
					trigger: '.section-services',
					//pin: true, // pin the trigger element while active
					start: 'top 60%', // when the top of the trigger hits the top of the viewport
					end: 'bottom bottom', // end after scrolling 500px beyond the start
					scrub: 1.2, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
					//markers: true,
					toggleActions: 'play none reverse none'
				},
				y: 100,
				stagger: 0.2,
				opacity: 0,
				autoAlpha: 0
			});

			gsap.from('.offers-box', {
				scrollTrigger: {
					trigger: '.section-offers',
					//pin: true, // pin the trigger element while active
					start: 'top 60%', // when the top of the trigger hits the top of the viewport
					end: 'bottom bottom', // end after scrolling 500px beyond the start
					scrub: 1.2, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
					//markers: true,
					toggleActions: 'play none reverse none'
				},
				y: 100,
				stagger: 0.2,
				opacity: 0,
				autoAlpha: 0
			});

		}


	}, false);
});
