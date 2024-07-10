<?php
get_header();
$a = get_template_directory( '/assets' );
var_dump($a);
$b = get_theme_file_uri( 'assets/fonts/poppins/Poppins-Regular.ttf' );
var_dump($b);
get_footer();

?>

<h1 class="text-title"><?php echo get_bloginfo( 'title' ); ?></h1>
<section class="flex justify-center items-center py-9 px-11 bg-[#D2E9F7] w-full">
	<a class="btn-internal btn-internal--shade-1"  href="">button internal</a>
</section>
<section class="flex justify-center items-center py-9 bg-blue-shade-3">
	<a class="btn-internal btn-internal--shade-2"  href="">button internal</a>
</section>
<section class="flex justify-center items-center py-9 bg-blue-shade-5">
	<a class="btn-internal btn-internal--shade-3"  href="">button internal</a>
</section>
<section class="flex justify-center items-center py-9 bg-blue-shade-2">
	<a class="btn-external btn-external--shade-1"  href="">button external</a>
</section>
<section class="flex justify-center items-center py-9 bg-blue-shade-2">
	<a class="btn-external btn-external--shade-2"  href="">button external</a>
</section>
	<section class="flex justify-center items-center py-9 bg-blue-shade-2">
<a class="btn-external btn-external--shade-3"  href="">button external</a>
</section>

<p class="text-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, blanditiis eum enim placeat error aliquid reprehenderit laborum praesentium reiciendis quae dolores corporis doloribus ex ut dolore incidunt dolorum asperiores neque.</p>