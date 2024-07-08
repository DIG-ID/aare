<section class="page-contact-content bg-dark-blue pb-20 md:pb-36 xl:pb-48">
	<div class="st-grid">
		<div class="st-container st-container-grid">
			<div class="col-span-6	 md:col-span-6 xl:col-span-4">
				<h2 class="inline-block pr-9 font-transducerCondensed font-[545] text-white text-base md:text-[32px] leading-[19px] md:leading-[39px] italic relative after:w-full after:bg-blue after:rounded-full after:h-[2px] after:block after:xl:mt-8 after:md:mt-4 after:mt-2 mb-11 xl:mb-20"><?php the_field( 'contacts_title' ); ?></h2>
				<?php
				$email = get_field( 'contacts_email' );
				if ( $email ) :
					?>
					<p class="flex items-center gap-x-6 font-transducerCondensed font-[340] text-white text-base md:text-[45px] leading-none ml:leading-[50px] italic mb-11">
						<svg class="w-4 h-4 md:w-8 md:h-8" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path id="Vector" d="M14.5385 19.4615L1 13.3077L33 1L20.6923 33L14.5385 19.4615ZM14.5385 19.4615L21.9231 12.0769" stroke="#14A5BB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
						<a href="mailto:<?php echo esc_url( $email ); ?>"><?php echo $email; ?></a>
					</p>
					<?php
				endif;
				$phone = get_field( 'contacts_phone' );
				if ( $phone ) :
					?>
					<p class="flex items-center gap-x-6 font-transducerCondensed font-[340] text-white text-base md:text-[45px] leading-none md:leading-[50px] italic mb-16 md:mb-32 xl:mb-0">
						<svg class="w-4 h-4 md:w-8 md:h-8" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path id="Vector" d="M31.7262 34C28.1449 34 24.4729 33.1032 20.7103 31.3097C16.9476 29.5148 13.4527 26.9967 10.2255 23.7554C6.9955 20.5126 4.48375 17.017 2.69025 13.2685C0.896749 9.52 0 5.85508 0 2.27375C0 1.62492 0.2125 1.08446 0.6375 0.652375C1.0625 0.217459 1.59375 0 2.23125 0H7.48637C8.06437 0 8.56871 0.182042 8.99937 0.546125C9.43004 0.910208 9.72117 1.37629 9.87275 1.94437L10.9268 7.0125C11.0259 7.6075 11.0082 8.12671 10.8736 8.57012C10.7405 9.01354 10.5053 9.37691 10.1681 9.66025L5.50375 14.008C6.37642 15.5918 7.34046 17.0623 8.39588 18.4195C9.45129 19.7781 10.5775 21.0651 11.7746 22.2806C13.0071 23.5131 14.3345 24.6606 15.7569 25.7231C17.1792 26.7842 18.7404 27.7858 20.4404 28.7279L24.9858 24.1017C25.3314 23.7292 25.7203 23.4834 26.1524 23.3644C26.5845 23.2468 27.0619 23.2234 27.5846 23.2943L32.0556 24.208C32.6322 24.3497 33.1004 24.6401 33.4603 25.0793C33.8201 25.5198 34 26.0249 34 26.5944V31.7688C34 32.4062 33.7832 32.9375 33.3498 33.3625C32.9177 33.7875 32.3751 34 31.7262 34ZM4.505 12.0148L8.585 8.262C8.721 8.15433 8.80883 8.00488 8.8485 7.81363C8.891 7.62238 8.88392 7.44529 8.82725 7.28238L7.88587 2.77738C7.83062 2.56063 7.735 2.39771 7.599 2.28863C7.463 2.17954 7.28663 2.125 7.06988 2.125H2.70938C2.54646 2.125 2.41046 2.17954 2.30138 2.28863C2.19229 2.39771 2.13775 2.53371 2.13775 2.69663C2.17883 4.14871 2.4055 5.66454 2.81775 7.24412C3.23283 8.82512 3.79383 10.4153 4.505 12.0148ZM22.4634 29.7245C23.8999 30.4357 25.4299 30.962 27.0534 31.3034C28.6797 31.6434 30.0964 31.8254 31.3034 31.8495C31.4663 31.8495 31.6023 31.7957 31.7114 31.688C31.8205 31.5789 31.875 31.4422 31.875 31.2779V27.013C31.875 26.7948 31.8205 26.6178 31.7114 26.4818C31.6023 26.3443 31.4394 26.2487 31.2226 26.1949L27.2914 25.3895C27.127 25.3357 26.9832 25.3286 26.86 25.3682C26.7382 25.4107 26.6093 25.4993 26.4733 25.6339L22.4634 29.7245Z" fill="#14A5BB"/>
						</svg>
						<a href="tel:<?php echo esc_attr( $phone ); ?>"><?php esc_html_e( 'Stricker Stephan' );?><br><?php echo $phone; ?></a>
					</p>
					<?php
				endif;
				?>
			</div>
			<div class="col-span-6 md:col-span-6 xl:col-span-6">
				<h2 class="inline-block pr-9 font-transducerCondensed font-[545] text-white text-base md:text-[32px] leading-[19px] md:leading-[39px] italic relative after:w-full after:bg-blue after:rounded-full after:h-[2px] after:block after:xl:mt-8 after:md:mt-4 after:mt-2 mb-11 xl:mb-20"><?php the_field( 'form_title' ); ?></h2>
				<?php
				$form_sc = get_field( 'form_form_shortcode' );
				if ( ! empty( $form_sc ) ) :
					echo do_shortcode( $form_sc );
				endif;
				?>
			</div>
		</div>
	</div>
</section>
