<?php 
add_action( 'wp_enqueue_scripts', 'salient_child_enqueue_styles');
function salient_child_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', array('font-awesome'));
	wp_enqueue_style( 'compiled-styles', get_stylesheet_directory_uri() . '/assets/css/main.css', array('parent-style'));
}
?>
