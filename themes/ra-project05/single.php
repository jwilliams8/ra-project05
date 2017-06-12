<?php get_header(); ?>
 
<div id="primary" class="content-area">
	<main id="main" class="site-main flex" role="main"> 
		<div class="width-70 md-padding-tb border-right-grey md-padding-right">

 		<?php
		while ( have_posts() ) : the_post(); 
			echo "<div class='single-post-image' style=\"background: url('".get_the_post_thumbnail_url()."') center center / cover no-repeat;\">";
			echo "<h1>".get_the_title()."</h1>";
			echo "<h4 class='font-weight-400'>".get_the_date()." / ".get_comments_number()." Comments / By ".get_the_author()."</h4>";
			echo "</div>";
			echo "<div class='single-post-content'>";
			echo get_the_content();
			echo red_starter_entry_footer();
			include 'inc/social-links.php';
			echo "</div>";

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		endwhile; // End of the loop.
		?>

		</div>
		<?php get_sidebar(); ?>
	</main>
</div>

<?php get_footer(); ?>