<?php
get_header();
echo "<div class='page-container'>";
echo "<div class='category-header'>";
echo "<h1>Latest Adventures</h1>";
echo "</div>";
echo "<div class='product-category flex justify-space-between flex-wrap'>";
if( have_posts() ) :
	while( have_posts() ) : the_post();
		$img = get_field("primary_banner_image");
		echo "<div class='adventure' style=\"background: linear-gradient(rgba(0,0,0,.4), rgba(0,0,0,.4)), url('".$img."') center center / cover no-repeat;\">";
		echo "<h3>".get_the_title()."</h3>";
		echo "<a href='".get_permalink()."' class='btn-white'>Read More</a>";
		echo "</div>";
	endwhile;
endif;
echo "</div>";
echo "</div>";
get_footer();
?>