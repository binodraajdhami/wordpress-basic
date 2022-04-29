<?php

// Registered Menus
function my_restered_menus(){
	register_nav_menus(array(

		'header_menu' => __( 'Header Menu'),		
		'footer_menu' => __( 'Footer Menu'),		
		'quick_links' => __( 'Quick Links'),		

	));
}
add_action('init','my_restered_menus');

// Theme Support

add_theme_support('post-thumbnails');
add_theme_support('custom-logo');


?>