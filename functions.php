<?php 

add_theme_support( 'menus' ); 
add_theme_support( 'post-thumbnails');
add_theme_support( 'custom-header');


function register_theme_menus() {

	register_nav_menus( 
		array(
			'primary-menu' =>__( 'primary-Menu' )
		)
	);
}
add_action( 'init', 'register_theme_menus' );

function dsm_create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),	 
		'id' => $id, 
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="module-heading">',
		'after_title' => '</h2>'
	));

}

dsm_create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' ) ;
dsm_create_widget( 'footer', 'footer', 'Displays on the side of pages with a sidebar' ) ;
dsm_create_widget( 'banner-middle', 'banner-middle', 'Displays on the side of pages in the blog section' ) ;
dsm_create_widget( 'header', 'header', 'Displays in header section' ) ;

	register_default_headers( array(
		'binary' => array(
		'url'           => 'Images/headers/binary.jpg',
		'thumbnail_url' => 'Images/headers/binary-thumbnail.jpg',
		'description'   => __( 'code', 'The warp' )
	)
) );		

function dsm_theme_styles() {

	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/normalize.css' );

}
add_action( 'wp_enqueue_scripts', 'dsm_theme_styles' );

//function dsm_theme_js() {

	//wp_enqueue_script( '', get_template_directory_uri() . '');

//}
//add_action( 'dsm_enqueue_scripts', 'dsm_theme_js' );

?>