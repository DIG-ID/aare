<section class="section-partner-content pb-16 lg:pb-24">
	<div class="theme-container">
		<div class="theme-grid">
			<?php
			if ( have_rows( 'partners' ) ) :
				while ( have_rows( 'partners' ) ) :
					the_row();
					?>
					<div class="card-partner bg-blue-shade-1 col-span-2 lg:col-span-6 rounded-[20px] overflow-hidden mb-8 lg:mb-6 invisible fade-in--noscroll">
						<?php
						if ( get_sub_field( 'image' ) ) :
							echo wp_get_attachment_image( get_sub_field( 'image' ), 'full', false, array( 'class' => 'w-full object-cover rounded-b-[20px] min-h-[225px]' ) );
						endif;
						?>
						<div class="card-partner-content py-11 px-9 lg:py-16 lg:px-24">
							<h2 class="text-title-h3 text-blue-shade-4 mb-4"><?php the_sub_field( 'title' ); ?></h2>
							<?php
							if ( get_sub_field( 'description' ) ) :
								echo '<p class="text-body text-blue-shade-5 mb-6 lg:max-w-[414px]">' . get_sub_field( 'description' ) . '</p>';
							endif;
							$tlink = get_sub_field( 'link' );
							if ( $tlink ) :
								$link_url    = $tlink['url'];
								$link_title  = $tlink['title'];
								$link_target = $tlink['target'] ? $tlink['target'] : '_self';
								?>
								<a class="btn-external btn-external--shade-1" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
								<?php
							endif;
							?>
						</div>

					</div>
					<?php
				endwhile;
			endif;
			?>
		</div>
	</div>
</section>
