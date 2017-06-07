<?php
get_header();
echo "<div class='page-container about'>";
echo "<div class='col-7 md-padding-right margin-auto'>";
while(have_posts()) : the_post();
	echo "<h1>".get_the_title()."</h1>";
	echo "<div class='page-content'>";
	echo get_the_content();
	echo "</div>";
endwhile;
echo "</div>";
echo "</div>";
get_footer();
?>