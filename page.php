<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="flex">
			<div class='width-70 border-right-grey md-padding-right md-padding-tb'>

			<?php
				while ( have_posts() ) : the_post(); 
					get_template_part( 'template-parts/content', 'page' ); 
				endwhile; // End of the loop.
			?>

			</div>

			<?php get_sidebar(); ?>

		</div> 
	</main>
</div> 

<?php get_footer(); ?>
