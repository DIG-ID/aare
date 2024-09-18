<section class="section-architecture bg-blue-shade-4 pb-52">
	<div class="theme-container">
		<div class="theme-grid">
            <div class="col-span-2 lg:col-start-2 lg:col-span-10 grid grid-cols-2 lg:grid-cols-10">
                <div class="col-span-2 lg:col-span-10 mb-8 lg:mb-44">
                    <div class="flex flex-col w-full text-center">
                        <div class="page-header--title">
                            <h1 class="text-title text-blue-shade-1 py-5 lg:py-10"><?php the_field( 'architecture_title' ); ?></h1>
                        </div>
                        <div class="page-header--description w-3/4 lg:w-[55%] mx-auto">
                            <p class="text-description text-blue-shade-1"><?php the_field( 'architecture_description' ); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-span-2 lg:col-span-4 lg:col-start-2 lg:mb-40">
                    <?php
                    $aimage = get_field( 'architecture_architect_image' );
                    if ( $aimage ) :
                        echo wp_get_attachment_image( $aimage, 'full', false, array( 'class' => 'w-full object-cover rounded-[24px] mb-10 lg:mb-0' ) );
                    endif;
                    ?>
                </div>
                <div class="col-span-2 lg:col-span-5 lg:col-start-7 lg:mb-40">
                    <h3 class="text-title-h3 text-blue-shade-1 mb-12"><?php the_field( 'architecture_architect_title' ); ?></h2>
                    <p class="text-body text-blue-shade-1"><?php the_field( 'architecture_architect_description' ); ?></p>
                </div>
                <div class="col-span-2 lg:col-span-5 lg:col-start-2">
                    <h3 class="text-title-h3 text-blue-shade-1 mb-12"><?php the_field( 'architecture_architects_team_title' ); ?></h2>
                    <p class="text-body text-blue-shade-1"><?php the_field( 'architecture_architects_team_description' ); ?></p>
                </div>
                <div class="col-span-2 lg:col-span-4 lg:col-start-8">
                    <?php
                    $aimage = get_field( 'architecture_architects_team_image' );
                    if ( $aimage ) :
                        echo wp_get_attachment_image( $aimage, 'full', false, array( 'class' => 'w-full object-cover rounded-[24px] mb-10 lg:mb-0' ) );
                    endif;
                    ?>
                </div>
            </div>
		</div>
	</div>
</section>