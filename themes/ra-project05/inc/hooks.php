<?php

function post_limit($query) {
	$query-> set('posts_per_page' ,'16');
}

function hooks($query) {
	if (!is_admin()) {
		if (is_post_type_archive('products')) {
			post_limit($query);
		} 
	}
}
add_action('pre_get_posts','hooks');
?>