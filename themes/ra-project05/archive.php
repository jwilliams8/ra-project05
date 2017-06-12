<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main flex" role="main">
		<div class='width-70 md-padding-right border-right-grey archive-page md-padding-tb'>

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
				while(have_posts()) : the_post();
					echo "<div class='single-post-image' style=\"background: url('".get_the_post_thumbnail_url()."') center center / cover no-repeat;\">";
					echo "<h1>".get_the_title()."</h1>";
					echo "<h4 class='font-weight-400'>".get_the_date()." / ".get_comments_number()." Comments / By ".get_the_author()."</h4>";
					echo "</div>";
					echo "<div class='single-post-content'>";
					echo "<p>".get_the_excerpt()."</p>";
					echo "<a href='".get_permalink()."' class='btn btn-black'>Read More <i class='fa fa-long-arrow-right' aria-hidden='true'></i></a>";
					echo "</div>";
				endwhile;
			?>

			<?php the_posts_navigation(); ?>

			<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</div>

		<?php get_sidebar(); ?>

	</main>
</div>

<?php get_footer(); ?>

