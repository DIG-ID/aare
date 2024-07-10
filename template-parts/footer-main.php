<footer class="footer-main bg-dark-blue">
	<div class="st-grid py-40">

		<div class="col-span-2 md:col-span-6 xl:col-span-4 xl:col-start-2">
			
		</div>
		<div class="col-span-2 md:col-span-6 xl:col-span-2 xl:col-start-7 flex flex-col justify-between items-center px-1">
			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'menu-footer',
					'menu_id'         => 'menu-footer',
					'container_class' => '',
					'menu_class'      => 'menu-footer-top-level',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'fallback_cb'     => '__return_false',
				)
			);
			?>
		</div>
		<div class="col-span-2 md:col-span-6 xl:col-span-3 flex flex-col items-center xl:items-start xl:flex-row xl:justify-end mx-auto xl:mx-0">
			
		</div>
		
	</div>
</footer>