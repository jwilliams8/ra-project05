<?php  get_header(); ?>
 
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main"> 
		<div class='single-product flex justify-space-between'>
			<div class='product-image'>
				<img src="<?php echo get_field('product_image'); ?>">
			</div>
		<div class='product-details'>

		<?php
		while(have_posts()) : the_post();
			echo "<h1>".get_the_title()."</h1>";
			echo "<h2>".get_field('price')."</h2>";
			echo "<p>".get_the_content()."</p>";
		endwhile;
		include 'inc/social-links.php';
		?>

	</div>
</div>

<?php get_footer(); ?>