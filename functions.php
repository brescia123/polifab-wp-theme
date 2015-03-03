<?php

function register_equipment_sidebar(){
	register_sidebar( array (
		'name' => 'Sidebar 2',
		'id' => 'sidebar-2',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => "</li>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}

function enqueue_theme_scripts_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    wp_enqueue_style( 'font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' );
    wp_enqueue_script('right-list', get_stylesheet_directory_uri() . '/js/right-list.js',array(),'1.0',true);
}

add_action( 'widgets_init', 'child_register_sidebar' );
add_action('init', 'remove_access');
add_action( 'wp_enqueue_scripts', 'enqueue_theme_scripts_styles' );

?>