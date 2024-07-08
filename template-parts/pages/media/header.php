<section class="page-header page-header__media bg-page-bg-light text-dark-blue pt-40 md:pt-60 xl:pt-[275px] pb-20 xl:pb-40">
	<div class="st-grid">
		<div class="st-container st-container-grid">
			<div class="col-span-2 md:col-span-4 xl:col-span-3">
				<?php do_action( 'breadcrumbs' ); ?>
				<h1 class="st-title text-dark-blue mb-4"><?php the_title(); ?></h1>
			</div>
			<div class="col-span-2 md:col-span-4 xl:col-span-2">
				<p class="font-transducer font-normal text-[10px] md:text-[17px] text-dark-blue leading-[18px] md:leading-[29px] tracking-[0.2px] md:tracking-[0.34px] mb-12"><?php the_field( 'header_description' ); ?></p>
			</div>
			<div class="col-span-2 md:col-span-4 xl:col-span-4 xl:col-start-7">
				<div class="info border border-blue rounded-xl px-11 py-8">
					<p class="font-transducer font-normal text-[10px] md:text-[17px] text-blue leading-[19px] md:leading-[29px] tracking-[0.2px] md:tracking-[0.34px] mb-7"><?php the_field( 'header_notification_text' ); ?></p>
					<p class="font-transducer font-semibold text-xs text-dark-blue leading-[23px] tracking-[0.24px] flex w-full gap-x-6">
						<span class="mt-1">
							<svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M8.55 14.25H10.45V8.55H8.55V14.25ZM9.5 6.65C9.76917 6.65 9.99495 6.5588 10.1773 6.3764C10.3597 6.194 10.4506 5.96853 10.45 5.7C10.45 5.43083 10.3588 5.20537 10.1764 5.0236C9.994 4.84183 9.76853 4.75063 9.5 4.75C9.23083 4.75 9.00537 4.8412 8.8236 5.0236C8.64183 5.206 8.55063 5.43147 8.55 5.7C8.55 5.96917 8.6412 6.19495 8.8236 6.37735C9.006 6.55975 9.23147 6.65063 9.5 6.65ZM9.5 19C8.18583 19 6.95083 18.7505 5.795 18.2514C4.63917 17.7523 3.63375 17.0756 2.77875 16.2212C1.92375 15.3663 1.24703 14.3608 0.7486 13.205C0.250167 12.0492 0.000633333 10.8142 0 9.5C0 8.18583 0.249533 6.95083 0.7486 5.795C1.24767 4.63917 1.92438 3.63375 2.77875 2.77875C3.63375 1.92375 4.63917 1.24703 5.795 0.7486C6.95083 0.250167 8.18583 0.000633333 9.5 0C10.8142 0 12.0492 0.249533 13.205 0.7486C14.3608 1.24767 15.3663 1.92438 16.2212 2.77875C17.0763 3.63375 17.7533 4.63917 18.2523 5.795C18.7514 6.95083 19.0006 8.18583 19 9.5C19 10.8142 18.7505 12.0492 18.2514 13.205C17.7523 14.3608 17.0756 15.3663 16.2212 16.2212C15.3663 17.0763 14.3608 17.7533 13.205 18.2523C12.0492 18.7514 10.8142 19.0006 9.5 19Z" fill="#14A5BB"/>
							</svg>
						</span>
						<?php the_field( 'header_notification_disclaimer' ); ?>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
