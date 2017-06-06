<?php
get_header();
echo "<div class='page-container'>";
echo "<div class='category-header'>";
echo "<h1>".get_queried_object()->name."</h1>";
echo "<p>".get_queried_object()->description."</p>";
echo "</div>";
echo "<div class='product-category flex justify-space-between'>";
while(have_posts()) : the_post();
	echo "<div class='product flex flex-col'>";
	echo "<img src='".get_field('product_image')."'>";
	echo "<a href='".get_permalink()."'>";
	echo "<div class='product-info flex justify-space-between'>";
	echo "<p>".get_the_title()."</p>";
	echo "<div class='dotted-line'></div>";
	echo "<p>".get_field('price')."</p>";
	echo "</div>";
	echo "</a>";
	echo "</div>";
endwhile;
echo "</div>";
echo "</div>";
get_footer();
?>