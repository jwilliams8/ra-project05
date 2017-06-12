<?php 
    $terms = get_terms('Type', array(
    'hide_empty' => false,
	) );
get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class='archive-header font-center md-padding-tb'>
			<h1 class="sm-padding-bottom"><?php echo get_queried_object()->name ?></h1>
			<ul>

			<?php
				if (!empty($terms) && is_array($terms)) :
					foreach($terms as $term) :
						echo "<li><a href='".get_term_link ($term -> term_id )."'>".$term -> name."</a></li>";
					endforeach;
				endif;
			?>

			</ul>
		</div>
		<div class='product-category md-padding-tb flex justify-space-between flex-wrap'>

			<?php
			if( have_posts() ) :
				while( have_posts() ) : the_post();
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
			endif;
			?>

		</div>
	</main>
</div>

<?php get_footer(); ?>