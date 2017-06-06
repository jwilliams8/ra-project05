<?php
    $args = array(
        'posts_per_page' => 4,
        'post_type' => "adventures"
    );
    $query = new WP_Query( $args );
    echo "<div class='home-adventures'>";
    echo "<h2>Latest Adventures</h2>";
    echo "<div class='page-container'>";
    echo "<div class='md-padding-bottom flex justify-space-between'>";
    $i = 0;
	if( $query->have_posts() ) :
		while( $query->have_posts() ) : $query->the_post();
		$i++;
	   	$img = get_field("primary_banner_image");
			if ( $i == 1 ) {
			echo "<div class='adventure-".$i." adventure-col adventure-post' style=\"background: linear-gradient(rgba(0,0,0,.4), rgba(0,0,0,.4)), url('".$img."') center center / cover no-repeat;\">";
			echo "<h3>".get_the_title()."</h3>";
			echo "<a href='".get_permalink()."' class='btn-white'>Read More</a>";
			echo "</div>";
			}
			if ( $i == 2 ) {
			echo "<div class='adventure-col flex flex-col justify-space-between'>";
			echo "<div class='adventure-row'>";
			echo "<div class='adventure-".$i." adventure-post' style=\"background: linear-gradient(rgba(0,0,0,.4), rgba(0,0,0,.4)), url('".$img."') center center / cover no-repeat;\">";
			echo "<h3>".get_the_title()."</h3>";
			echo "<a href='".get_permalink()."' class='btn-white'>Read More</a>";
			echo "</div>";
			echo "</div>";
			}
			if ( $i == 3 ) {
			echo "<div class='adventure-row flex justify-space-between'>";
			echo "<div class='adventure-".$i." adventure-post' style=\"background: linear-gradient(rgba(0,0,0,.4), rgba(0,0,0,.4)), url('".$img."') center center / cover no-repeat;\">";
			echo "<h3>".get_the_title()."</h3>";
			echo "<a href='".get_permalink()."' class='btn-white'>Read More</a>";
			echo "</div>";
			}
			if ( $i == 4 ) {
			echo "<div class='adventure-".$i." adventure-post' style=\"background: linear-gradient(rgba(0,0,0,.4), rgba(0,0,0,.4)), url('".$img."') center center / cover no-repeat;\">";
			echo "<h3>".get_the_title()."</h3>";
			echo "<a href='".get_permalink()."' class='btn-white'>Read More</a>";
			echo "</div>";
			echo "</div>";
			echo "</div>";
			}
		endwhile; 
	endif;
	echo "</div>";
	echo "<a href='#' class='btn-green'>More Adventures</a>";
	echo "</div>";
	echo "</div>";
?>
