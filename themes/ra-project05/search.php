<?php get_header(); ?>

<section id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="flex search-page">
			<div class="width-70 border-right-grey md-padding-right">
			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php printf( esc_html( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header><!-- .page-header -->

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'search' ); ?>

				<?php endwhile; ?>

				<?php red_starter_numbered_pagination(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</main>
</section> 

<?php get_footer(); ?>
