<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
			<ul>
		<div class='archive-header md-padding-tb font-center'>
			<h1><?php echo get_queried_object()->name ?></h1>
			<p><?php echo get_queried_object()->description ?></p>
		</div>
		<div class='product-category flex justify-space-between md-padding-tb'>

		<?php
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
		?>

			</div>
		</div>
	</main>
</div>

<?php get_footer(); ?>