<header id="header-main" class="header-main bg-blue-shade-5 absolute top-0 left-0 w-full z-50 overflow-hidden" itemscope itemtype="http://schema.org/WebSite">

	<nav class="navbar relative overflow-hidden" role="navigation" aria-label="<?php esc_attr_e( 'Main menu', 'aare' ); ?>">
		<div class="grid grid-cols-3 px-6 md:px-8 xl:px-16 py-6 md:py-8 xl:py-6">
			<div class="col-span-1 flex justify-start items-center">
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
				<?php do_action( 'wpml_add_language_selector' ); ?>
			</div>
			<div class="col-span-1 flex justify-center items-center">
				<div class="site-branding text-white">
					<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url" class="navbar-brand custom-logo-link"><?php do_action( 'theme_logo' ); ?></a>
				</div>
			</div>
			<div class="col-span-1 flex justify-end items-center gap-x-8">
				<a class="btn-internal btn-internal--shade-3 !text-[16px] !font-poppins uppercase font-medium tracking-[0.16px] !px-8 !py-[0.35rem]"  href="#">Jetzt Buchen</a>
			</div>
		</div>
		<div class="px-6 md:px-8 xl:px-16 py-6 md:py-8 xl:py-3 border-t-[0.5px] border-b-[0.5px] border-blue-shade-2 border-opacity-80">
			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'main-menu',
					'menu_id'         => 'main-menu',
					'container_class' => 'main-menu-container pt-20 md:pt-0',
					'menu_class'      => 'main-menu-top-level',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'fallback_cb'     => '__return_false',
					//'walker'          => new Stricker_Menu_Walker(),
				)
			);
			?>
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
					//'walker'          => new Stricker_Menu_Walker(),
				)
			);
			?>
		</div>
	</nav>

</header>
