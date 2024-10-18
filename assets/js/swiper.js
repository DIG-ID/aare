import Swiper from 'swiper/bundle';

//wait until images, links, fonts, stylesheets, and js is loaded
window.addEventListener("load", () => {

	if ( $(".page-template-page-solothurn-what-to-do")[0] ) {
		var eventSwiper = new Swiper(".eventSwiper", {
			slidesPerView: 1.2,
			spaceBetween: 24,
			grabCursor: true,
			breakpoints: {
				640: {
					slidesPerView: 1.2,
					spaceBetween: 24,
				},
				768: {
					slidesPerView: 2.2,
					spaceBetween: 24,
				},
				1024: {
					slidesPerView: 2.2,
					spaceBetween: 24,
				},
				1200: {
					slidesPerView: 3.2,
					spaceBetween: 24,
				},
			},
		});
	}
	if ( $(".page-template-page-solothurn-what-to-do")[0] ) {
		var activitiesSwiper = new Swiper(".activitesSwiper", {
			slidesPerView: 1.2,
			spaceBetween: 24,
			grabCursor: true,
			breakpoints: {
				640: {
					slidesPerView: 1.2,
					spaceBetween: 24,
				},
				768: {
					slidesPerView: 1.2,
					spaceBetween: 24,
				},
				1024: {
					slidesPerView: 2.2,
					spaceBetween: 24,
				},
			},
		});
	}
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
			spaceBetween: 0,
			lazy: true,
			grid: {
				fill: 'row',
				rows: 3,
			},
			breakpoints: {
				1024: {
					slidesPerView: 5,
					spaceBetween: 16,
				},
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
