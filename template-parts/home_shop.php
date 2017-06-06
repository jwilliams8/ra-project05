<?php

//$terms = get_terms("Type", "");

$terms = get_terms('Type', array(
    'hide_empty' => false,
) );
echo "<div class='home-shop'>";
echo "<h2>Shop Stuff</h2>";
echo "<div class='page-container flex justify-space-between'>";
$i = 0;
if (!empty($terms) && is_array($terms)) {
	foreach($terms as $term) {
		$blog_url = get_bloginfo("stylesheet_directory");
		echo "
		<div class='flex flex-col align-center shop-term'>
			<img src='".$blog_url."/assets/images/product-type-icons/".$term -> name.".svg'/>
			<p>".$term -> description."</p>
			<a href='".get_term_link($term -> term_id )."' class='btn-green'>".$term -> name." Stuff</a>
		</div>";
	}
}
echo "</div>";
echo "</div>"
?>
