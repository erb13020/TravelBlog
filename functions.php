<?php
namespace EricBurt\GreeceTravelBlog;

function blog_files() {
	wp_enqueue_style('google-fonts-lora', '//fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic');
	wp_enqueue_style('google-fonts-opensans', '//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('bootstrap-css', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
	wp_enqueue_style('blog_main_styles', get_stylesheet_uri(), NULL, microtime());
}

add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\blog_files');

function blog_features() {
	register_nav_menu('headerMenuLocation', 'Header Menu Location');
}

add_action('after_setup_theme', __NAMESPACE__ . '\\blog_features');

function blog_scripts() {
	  wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.3.1.slim.min.js');
	  wp_enqueue_script('bootstrap-js', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');
	  wp_enqueue_script('popper.js', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
}

add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\blog_scripts')

?>
