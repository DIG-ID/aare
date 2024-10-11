import { Fancybox } from "@fancyapps/ui";

//wait until images, links, fonts, stylesheets, and js is loaded
window.addEventListener("load", () => {

	if ( $(".page-template-page-gallery")[0] || $(".page-template-page-stay-long-term")[0] ) {
		Fancybox.bind("[data-fancybox]", {
			// Your custom options
		});
	}
}, false);
