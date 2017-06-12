<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class='front-page'>

		<?php
			get_template_part('template-parts/home_shop');
			get_template_part('template-parts/home_journal');
			get_template_part('template-parts/home_adventures');
		?>

		</div>
	</main>
</div>

<?php get_footer(); ?>