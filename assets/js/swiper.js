import Swiper from 'swiper/bundle';
import { gsap } from "gsap";
// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
	//wait until images, links, fonts, stylesheets, and js is loaded
	window.addEventListener("load", () => {

			
		if ( $(".page-template-page-stay-long-term")[0] ) {
			var sutdioSwiper0 = new Swiper(".studioSwiper0", {
				slidesPerView: 1,
				loop: true,
				navigation: {
					nextEl: ".studioSwiper0-button-next",
					prevEl: ".studioSwiper0-button-prev",
				},
			});
			var sutdioSwiper1 = new Swiper(".studioSwiper1", {
				slidesPerView: 1,
				loop: true,
				navigation: {
					nextEl: ".studioSwiper1-button-next",
					prevEl: ".studioSwiper1-button-prev",
				},
			});
		}
		if ( $(".single-zimmer")[0] ) {
			var zimmerSwiperThumbs = new Swiper(".zimmerSwiperThumbs", {
				slidesPerView: 6,
				//spaceBetween: 16,
				grid: {
					rows: 2,
				},
			});
			var zimmerSwiper = new Swiper(".zimmerSwiper", {
				slidesPerView: 1,
				loop: true,
				navigation: {
					nextEl: ".zimmerSwiper-button-next",
					prevEl: ".zimmerSwiper-button-prev",
				},
				thumbs: {
					swiper: zimmerSwiperThumbs,
				},
			});

		}


	}, false);
});