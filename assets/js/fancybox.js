import { Fancybox } from "@fancyapps/ui";

// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
	//wait until images, links, fonts, stylesheets, and js is loaded
	window.addEventListener("load", () => {

		if ( $(".page-template-page-gallery")[0] ) {
			Fancybox.bind("[data-fancybox]", {
				// Your custom options
			});
		}
	}, false);
});