<?php
get_header();
echo "<div class='page-container about'>";
echo "<div class='col-7 md-padding-right margin-auto'>";
while(have_posts()) : the_post();
	get_template_part( 'template-parts/content', 'page' );endwhile;
	echo "
	<a href='#' class='btn-black'><i class='fa fa-facebook' aria-hidden='true'></i> Like</a>
		<a href='#' class='btn-black'><i class='fa fa-twitter' aria-hidden='true'></i> Tweet</a>
		<a href='#' class='btn-black'><i class='fa fa-pinterest' aria-hidden='true'></i> Pin</a>
		";
echo "</div>";
echo "</div>";
get_footer();
?>