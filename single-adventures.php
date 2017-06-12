<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="width-80 margin-auto md-padding-tb">

		<?php
		while(have_posts()) : the_post();
			get_template_part( 'template-parts/content', 'page' );
		endwhile;
		include ('inc/social-links.php');	
		?>

	</div>
</div>

<?php get_footer(); ?>