<?php
get_header();
$a = get_template_directory( '/assets' );
var_dump($a);
$b = get_theme_file_uri( 'assets/fonts/poppins/Poppins-Regular.ttf' );
var_dump($b);
get_footer();

?>

<h1 class="text-title"><?php echo get_bloginfo( 'title' ); ?></h1>
<a class="btn-internal btn-internal--shade-1"  href="">button internal</a>
<a class="btn-external btn-external--shade-1"  href="">button external</a>
<p class="text-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, blanditiis eum enim placeat error aliquid reprehenderit laborum praesentium reiciendis quae dolores corporis doloribus ex ut dolore incidunt dolorum asperiores neque.</p>