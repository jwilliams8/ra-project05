<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class='archive-header md-padding-tb font-center'>
			<h1>Latest Adventures</h1>
		</div>
		<div class='md-padding-tb flex justify-space-between flex-wrap adventures-page'>

		<?php
			if( have_posts() ) :
				while( have_posts() ) : the_post();
					$img = get_field("primary_banner_image");
					echo "<div class='width-50-container'>";
					echo "<div class='adventure-archive-post' style=\"background: linear-gradient(rgba(0,0,0,.4), rgba(0,0,0,.4)), url('".$img."') center center / cover no-repeat;\">";
					echo "<h2>".get_the_title()."</h2>";
					echo "<a href='".get_permalink()."' class='btn btn-white'>Read More</a>";
					echo "</div>";
					echo "</div>";
				endwhile;
			endif;
		?>
	</div>
</div>

<?php get_footer(); ?>