<?php 


add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_image_size('pages-destacada', 1900,872,true);
add_image_size('post-destacada', 1900,600,true);


register_nav_menus( array(
	'menu-1' => esc_html__( 'Primary', 'simple'),

	));


// Registro de css y script

function reg_script() {

	wp_enqueue_style('bootstrap_style', get_template_directory_uri() . '/css/bootstrap.min.css');

	wp_enqueue_style('styleme', get_stylesheet_uri() );
	
	wp_enqueue_script('jquery');

	wp_enqueue_script('scriptme', get_template_directory_uri() . '/js/clean-blog.js', array('jquery'), '1.0', true);
	
	wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), true);

	

	wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css');

}

add_action('wp_enqueue_scripts', 'reg_script');

function google_font() {

	wp_enqueue_style('titlesfont', 'https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic',false);

	wp_enqueue_style('titlesfont2', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',false);


}

add_action('wp_enqueue_scripts', 'google_font');

add_filter('show_admin_bar','__return_false');


/** Remove [...] in the the_exceprt() */

function wpdocs_excerpt_more( $more ) {
    return '';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

 ?>

