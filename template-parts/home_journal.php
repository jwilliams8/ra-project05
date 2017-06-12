<?php
	
    $args = array(
        'posts_per_page' => 3
    );
    $query = new WP_Query( $args );
?>
<div class='home-journal'>
	<h2 class='md-padding-tb'>Inhabitent Journal</h2>
	<div class='page-container flex justify-space-between'>
	
    <?php
		if( $query->have_posts() ) :
			while( $query->have_posts() ) : $query->the_post();
				echo "<div class='journal-post flex flex-col'>";
				echo "<img src='".get_the_post_thumbnail_url()."'>";
				echo "<div class='journal-info'>";
				echo "<p>".get_the_date()." / ".get_comments_number()." Comments"."</p>";
				echo "<h3>".get_the_title()."</h3>";
				echo "<a href='".get_permalink()."' class='btn btn-black'>Read Entry</a>";
				echo "</div>";
				echo "</div>";
			endwhile; 
		endif;
	?>

	</div>
</div>
