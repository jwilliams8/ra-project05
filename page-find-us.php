<?php
get_header();
echo "<div class='page-container find-us'>";
echo "<div class='col-7 border-right-grey md-padding-right'>";
while(have_posts()) : the_post();
	get_template_part( 'template-parts/content', 'page' );endwhile;
echo "</div>";
echo "</div>";
get_footer();
?>

