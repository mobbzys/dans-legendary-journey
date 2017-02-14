<?php

function dsm_styles() {
	wp_enqueue_style('style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'dsm_styles' ); 

//@import url( "stype-portfolio.css" );
//@import url( "https://fonts.googleapis.com/css?family=Ubuntu" )

add_theme_support( 'post-thumbnails' );  //Adds thumbnails compatibility to the theme 
// set_post_thumbnail_size( 250, 250 ); // 50 pixels wide by 50 pixels tall, resize mode

function register_widget_areas() {
	register_sidebar( array(
		'name'          => __( ' Front-page-blog' ),
		'id'            =>'dsm_blog',
		'description'   => __( 'Add widgets here to appear on front page.' ),
		'before_widget' => '
		', 'after_widget' => '
		', 'before_title' => '
		<h2 class="widget-title">', 'after_title' => '</h2>
', ) ); } add_action( 'widgets_init', 'register_widget_areas' ); ;

function wpb_autolink_featured_images( $html, $post_id, $post_image_id ) {
$html = '<a href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';
return $html;
}
add_filter( 'post_thumbnail_html', 'wpb_autolink_featured_images', 10, 3 );
