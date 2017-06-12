<?php
/* Template Name: page-no-sidebar */
get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class='width-80 margin-auto page-no-sidebar'>

		<?php
			while(have_posts()) : the_post();
				echo "<h1 class='font-center font-center'>".get_the_title()."</h1>";
				echo "<div class='page-content'>";
				echo get_the_content();
				echo "</div>";
			endwhile;
		?>

		</div>
	</main>
</div>

<?php get_footer(); ?>