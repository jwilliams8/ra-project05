<?php
// Our custom post type function
function register_post_type_func($key) {
	$key_dash = str_ireplace(" ", "-", $key);
	register_post_type( strtolower($key_dash),
		array(
			'labels' => array(
				'name' => __( ucwords($key)),
				'singular_name' => __( ucwords($key) )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => strtolower($key_dash)),
			'supports' => array('title', 'editor', 'author', 'thumbnail')
		)
	);
}

function register_tax_func($item, $key) {
	$item_dash = str_ireplace(" ", "-", $item);
	register_taxonomy($item_dash, $key, array(
		'label'        => __( $item ),
        'rewrite'      => array( 'slug' => $item_dash ),
        'hierarchical' => true,
	));
}

function create_pt_tax() {
	$post_type_array = array(
		"products" => array("Type"),
		"adventures"
		);
		foreach($post_type_array as $key => $value) {
			if (is_array($value)) {
				register_post_type_func($key);
				foreach($value as $item){
					register_tax_func($item, $key);
				}
			} else {
				register_post_type_func($value);
			}
		}	
}
add_action( 'init', 'create_pt_tax' );
?>