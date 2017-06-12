<?php
function custom_sidebars() {
    register_sidebar( array(
        'name' => __( 'Footer Sidebar', 'theme-slug' ),
        'id' => 'footer-sidebar',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
	'after_widget'  => '</section>',
	'before_title'  => '<h3>',
	'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name' => __( 'Logo Sidebar', 'theme-slug' ),
        'id' => 'logo-sidebar',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h3>',
	'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'custom_sidebars' );
?>