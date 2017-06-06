<?php
   $args = array(
        'posts_per_page' => 16,
        'post_type' => "products"
    );
    $query = new WP_Query( $args );
    $terms = get_terms('Type', array(
    'hide_empty' => false,
	) );
get_header();
echo "<div class='page-container'>";
echo "<div class='category-header'>";
echo "<h1>".get_queried_object()->name."</h1>";
echo "<ul>";
	if (!empty($terms) && is_array($terms)) {
		foreach($terms as $term) {
			echo "<li><a href='".get_term_link ($term -> term_id )."'>".$term -> name."</a></li>";
		}
	}
echo "</ul>";
echo "</div>";
echo "<div class='product-category flex justify-space-between flex-wrap'>";

if( $query->have_posts() ) :
	while( $query->have_posts() ) : $query->the_post();
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
echo "</div>";
echo "</div>";
get_footer();
?>