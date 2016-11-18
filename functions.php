<?php
function my_theme_enqueue_styles() {

    $parent_style = 'uw-madison-wp-2015-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

/**
 * Register our sidebars and widgetized areas.
 *
 */
function calslabs_widgets_init() {

	register_sidebar( array(
		'name'          => 'Top Right Hours',
		'id'            => 'top_right_area',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

}
add_action( 'widgets_init', 'calslabs_widgets_init' );


?>
