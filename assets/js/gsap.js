import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import Lenis from 'lenis';

// GSAP horizontal scroll effect (this will still run on the about page)
gsap.registerPlugin(ScrollTrigger);

// Initialize Lenis only if it's NOT the about page
const lenis = new Lenis({
	duration: 1.1,
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

// Back to top scroll functionality
document.getElementById('back-to-top').addEventListener('click', function (event) {
    event.preventDefault();
	lenis.scrollTo(0, { offset: 0, duration: 2.5 });
});




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

	gsap.from(['.section-hero--title', '.section-hero--boat'], {
		duration: 1,
		y: 50,
		stagger: 0.3,
		opacity: 0,
		autoAlpha: 0
	});

	/*gsap.from('.selector', {
		autoAlpha: 0,
		//opacity: 0,
		x: 70,
		//stagger: 0.2,
		scrollTrigger: {
			trigger: '.selector',
			start: 'top 60%',
			scrub: true,
			end: '+=400',
			markers: true
			
		},
	});*/
}
if ( $(".fade-in")[0] ) {
	var fadeInItems = gsap.utils.toArray('.fade-in');

	fadeInItems.forEach((fadeInItem) => {
		gsap.from(fadeInItem, {
			autoAlpha: 0,
			y: 60,
			//stagger: 0.3,
			scrollTrigger: {
				trigger: fadeInItem,
				start: 'top 90%',
				scrub: true,
				end: '+=300',
				//markers: true,
				//stagger: 0.3,
			},

		});
	});
}
if ( $(".fade-in--noscroll")[0] ) {
	//console.log($(".fade-in--noscroll"));
	var fadeInItemsNs = gsap.utils.toArray('.fade-in--noscroll');
	gsap.from(fadeInItemsNs, {
		autoAlpha: 0,
		y: 50,
		stagger: 0.3,
		duration: 1,
		/*scrollTrigger: {
			trigger: fadeInItemsNs,
			start: '50px 65%',
			//scrub: true,
			end: '+=400',
			//markers: true
			
		},*/
	});
}

if ( $(".fade-in--n")[0] ) {
	//console.log($(".fade-in--noscroll"));
	var fadeInItemsNs = gsap.utils.toArray('.fade-in--n');
	gsap.from(fadeInItemsNs, {
		autoAlpha: 0,
		y: 50,
		stagger: 0.3,
		duration: 1,
		/*scrollTrigger: {
			trigger: fadeInItemsNs,
			start: '50px 65%',
			//scrub: true,
			end: '+=400',
			//markers: true
			
		},*/
	});
}
