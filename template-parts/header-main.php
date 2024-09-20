<header id="header-main" class="header-main absolute top-0 left-0 w-full z-50 overflow-hidden" itemscope itemtype="http://schema.org/WebSite">

	<nav class="navbar relative overflow-hidden" role="navigation" aria-label="<?php esc_attr_e( 'Main menu', 'aare' ); ?>">
		<div class="header-wrapper relative grid grid-cols-3 px-6 md:px-8 xl:px-16 py-6 md:py-8 xl:py-6 z-40 border-b-[0.5px] border-blue-shade-2 border-opacity-80 md:z-auto">
			<div class="col-span-1 flex justify-end md:justify-start items-center order-3 md:order-1 md:z-50">
				<div class="menu-toggle-wrapper">
					<button class="menu-toggle">
						<span class="menu-toggle__bars">
							<span class="bar"></span>
							<span class="bar"></span>
							<span class="bar"></span>
						</span>
						<span class="menu-toggle__text"><?php esc_html_e( 'Menu', 'aare' ); ?></span>
					</button>
				</div>
				<div class="hidden md:block"><?php do_action( 'wpml_add_language_selector' ); ?></div>
			</div>
			<div class="col-span-1 col-start-2 flex justify-center items-center order-2">
				<div class="site-branding">
					<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url" class="navbar-brand custom-logo-link"><?php do_action( 'theme_logo' ); ?></a>
				</div>
			</div>
			<div class="col-span-1 hidden md:flex justify-end items-center gap-x-8 order-3">
				<?php
				$booking_url = get_field( 'booking_url', 'options' );
				if ( $booking_url ) :
					?><a href="<?php echo esc_url( $booking_url ); ?>" target="_blank" class="btn-internal btn-internal--shade-3 !text-[16px] !font-poppins uppercase font-medium tracking-[0.16px] !px-8 !py-[0.35rem] !bg-transparent"><?php esc_html_e( 'Jetzt Buchen', 'aare' ); ?></a><?php
				endif;
				?>
			</div>
		</div>
		<div class="menu-app px-6 md:px-8 xl:px-16 py-6 md:py-8 xl:py-3 border-b-[0.5px] border-blue-shade-2 border-opacity-80 hidden md:block">
			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'main-menu',
					'menu_id'         => 'main-menu',
					'container_class' => 'main-menu-container pt-20 md:pt-0',
					'menu_class'      => 'main-menu-out-top-level',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'fallback_cb'     => '__return_false',
				)
			);
			?>
		</div>
		<?php
			require_once get_stylesheet_directory() . '/inc/theme-custom-menu-walker.php';
		?>
		<div id="menu-wrapper" class="menu-wrapper w-full top-0 left-0 bottom-0 hidden fixed">
			<div class="menu-bg"></div>
			<div class="grid grid-cols-12 px-0 py-0 h-full">
				<div class="col-span-8 pl-48 pt-44 hidden xl:block">
					<div class="site-branding mega-menu__logo">
						<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url" class="navbar-brand custom-logo-link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/mega-menu__logo.svg" alt="Hotel Aaren Logo" title="Hotel Aaren Logo" /></a>
					</div>
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'main-mega-menu',
							'menu_id'         => 'main-menu',
							'container_class' => 'main-menu-container pt-20 md:pt-0 md:mt-11',
							'menu_class'      => 'main-menu-top-level relative',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'fallback_cb'     => '__return_false',
							//'walker'          => new Custom_Walker_Nav_Menu(),
						)
					);
					?>
				</div>
				<div class="col-span-12 px-0 py-0 md:pl-8 md:pt-12 bg-blue-shade-5 block xl:hidden mobile__nav">
					<nav>
						<?php
						wp_nav_menu(
							array(
								'theme_location'  => 'main-mega-menu',
								'menu_id'         => 'main-menu',
								'container_class' => 'main-menu-container pt-20 md:pt-0',
								'menu_class'      => 'main-menu-top-level p-8',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'fallback_cb'     => '__return_false',
								'walker'          => new Custom_Walker_Nav_Menu(),
							)
						);
						?>
					</nav>
				</div>
				<div class="col-span-4 bg-blue-shade-3 pt-44 text-center hidden xl:block">
					<div class="w-full mb-20">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/paper-boat.svg" class="mx-auto" alt="Paper boat" title="Paper boat" />
					</div>
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'secondary-menu',
							'menu_id'         => 'secondary-menu',
							'container_class' => 'secondary-menu-container pt-20 md:pt-0',
							'menu_class'      => 'secondary-menu-top-level',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'fallback_cb'     => '__return_false',
						)
					);
					?>
					<?php do_action( 'wpml_add_language_selector' ); ?>
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'copyright-menu',
							'menu_id'         => 'copyright-menu',
							'container_class' => 'copyright-menu-container pt-20 md:pt-0',
							'menu_class'      => 'copyright-menu-top-level',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'fallback_cb'     => '__return_false',
						)
					);
					?>
				</div>
			</div>
		</div>
	</nav>

</header>
