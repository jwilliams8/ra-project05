<?php 
get_header();
echo "<div class='page-container single-product flex justify-space-between'>";
echo "<div class='product-col-1'>";
echo "<img src='".get_field('product_image')."'>";
echo "</div>";
echo "<div class='product-col-2'>";
while(have_posts()) : the_post();
	echo "<h1>".get_the_title()."</h1>";
	echo "<h2>".get_field('price')."</h2>";
	echo "<p>".get_the_content()."</p>";
endwhile;
echo"
		<a href='#' class='btn-black'><i class='fa fa-facebook' aria-hidden='true'></i> Like</a>
		<a href='#' class='btn-black'><i class='fa fa-twitter' aria-hidden='true'></i> Tweet</a>
		<a href='#' class='btn-black'><i class='fa fa-pinterest' aria-hidden='true'></i> Pin</a>
	</div>
</div>
";
get_footer();
?>