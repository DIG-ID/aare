import imagesLoaded from 'imagesloaded';
import isotope from 'isotope-layout';


// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
	//wait until images, links, fonts, stylesheets, and js is loaded
	window.addEventListener("load", () => {

		if ( $(".page-template-page-media")[0] ) {
			// init Isotope
			const grid = new isotope( '.photo-grid', {
				// options
				itemSelector: '.element-item',
				//percentPosition: true,
				layoutMode: 'fitRows'
			});

			imagesLoaded(grid.element).on('progress', function() {
				grid.layout();
			});
	
			var filters = {};

			// flatten object by concatting values
			function concatValues( obj ) {
				var value = '';
				for ( var prop in obj ) {
					value += obj[ prop ];
				}
				return value;
			}

			// bind filter on select change
			$('.filters-select').on( 'change', function() {
				var $select = $(this);
				var filterGroup = $select.attr('data-filter-group');
				var filterValue = $select.val(); // Get selected value
			
				// Update filters object
				filters[filterGroup] = filterValue;
			
				// Generate concatenated filter value
				var filterCombined = concatValues(filters);
				grid.arrange({filter: filterCombined});
			});

			// Event listener for reset button
			$('#reset-filters').on('click', function() {
				// Clear the filters object
				filters = {};

				// Generate empty filter value (show all items)
				var filterValue = '';

				// Apply filter to Isotope to show all items
				grid.arrange({filter: filterValue});

				// Reset all select elements to their default state (e.g., "All")
				$('.filters-select').each(function() {
					var $select = $(this);
					$select.val('*'); // Set default value ("All")
				});
			});

			// Event listener for Isotope arrangeComplete event
			grid.on('arrangeComplete', function(event) {
				// Get filtered items
				var filteredItems = grid.filteredItems;

				// Fade in or out the no-items message based on filtered items
				if (filteredItems.length === 0) {
						$('#no-items-message').stop().fadeIn(); // Fade in if no items
				} else {
						$('#no-items-message').stop().fadeOut(); // Fade out if items present
				}
			});

		}


	}, false);
});