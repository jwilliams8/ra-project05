<?php

$terms = get_terms('Type', array(
    'hide_empty' => false,
) );
?>
<div class='home-shop font-center'>
	<h2 class='md-padding-tb'>Shop Stuff</h2>
	<div class='page-container flex justify-space-between'>

	<?php
		$i = 0;
		if (!empty($terms) && is_array($terms)) {
			foreach($terms as $term) {
				$blog_url = get_bloginfo("stylesheet_directory");
				echo "
				<div class='flex flex-col align-center shop-term text-center'>
					<img src='".$blog_url."/assets/images/product-type-icons/".$term -> name.".svg'/>
					<p class='font-center'>".$term -> description."</p>
					<a href='".get_term_link($term -> term_id )."' class='btn btn-green'>".$term -> name." Stuff</a>
				</div>";
			}
		}
	?>

	</div>
</div>

