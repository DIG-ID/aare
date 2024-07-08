<header id="header-main" class="header-main absolute top-0 left-0 w-full z-50 overflow-hidden" itemscope itemtype="http://schema.org/WebSite">
	<a target="_blank" href="https://shop.dominicstricker.ch/" class="shop-btn-slider bg-blue font-transducerCondensed tracking-wide text-[1.2rem] leading-5 text-dark-blue py-2 italic font-[545] uppercase overflow-hidden block w-full whitespace-nowrap xl:hidden">
		<span class="text-slide"><span><?php esc_html_e( 'Serve Up Style: Shop my Latest Merchandise Today!', 'stricker' ); ?></span> <span class="mx-10 hover:text-white transition-all duration-300 ease-in-out"><?php esc_html_e( '> zum Shop <', 'stricker' ); ?></span></span>
	</a>
	<nav class="navbar relative overflow-hidden" role="navigation" aria-label="<?php esc_attr_e( 'Main menu', 'stricker' ); ?>">
		<div class="menu-bg"></div>
		<div class="grid grid-cols-3 px-6 md:px-8 xl:px-16 py-6 md:py-8 xl:py-10">
			<div class="col-span-1 flex justify-start items-center">
				<div class="menu-toggle-wrapper">
					<button class="menu-toggle">
						<span class="menu-toggle__bars">
							<span class="bar"></span>
							<span class="bar"></span>
							<span class="bar"></span>
						</span>
						<span class="menu-toggle__text"><?php esc_html_e( 'Menu', 'stricker' ); ?></span>
					</button>
				</div>
			</div>
			<div class="col-span-1 flex justify-center items-center">
				<div class="site-branding text-white">
					<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url" class="navbar-brand custom-logo-link"><?php do_action( 'theme_logo' ); ?></a>
				</div>
			</div>
			<div class="col-span-1 flex justify-end items-center gap-x-8">
				<a href="https://shop.dominicstricker.ch/" class="btn-arrow-caps text-blue !hidden !invisible xl:!block xl:!visible xl:mr-8"><?php esc_html_e( 'zum Shop', 'stricker' ); ?></a>
				<?php do_action( 'wpml_add_language_selector' ); ?>
			</div>
		</div>
		<div class="menu-wrapper w-full top-0 left-0 bottom-0 hidden relative">
			<div class="menu-link-image-container absolute top-0 left-0 pointer-events-none hidden"></div>
			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'main-menu',
					'menu_id'         => 'main-menu',
					'container_class' => 'main-menu-container pt-20 md:pt-0',
					'menu_class'      => 'main-menu-top-level',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'fallback_cb'     => '__return_false',
					'walker'          => new Stricker_Menu_Walker(),
				)
			);
			?>
		</div>
	</nav>

</header>
