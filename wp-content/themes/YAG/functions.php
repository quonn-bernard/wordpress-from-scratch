<?php

//Setup
define( 'YAG_DEV_MODE', true);

//includes
include( get_theme_file_path( './assets/includes/front/enqueue.php' ));
include( get_theme_file_path( './assets/includes/setup.php' ));
include( get_theme_file_path( './assets/includes/custom-nav-walker.php' ));
include( get_theme_file_path( './assets/includes/widgets.php' ));
include( get_theme_file_path( './assets/includes/theme-customizer.php'));

//Hooks
add_action( 'wp_enqueue_scripts', 'yag_enqueue' );
add_action( 'after_setup_theme', 'yag_setup_theme' );
add_action( 'widgets_init', 'yag_widgets');
add_action( 'customize_register', 'yag_customize_register');

//Shortcodes



//add custom background
add_theme_support( 'custom-background' );

$defaults = array(
	'default-color'          => '',
	'default-image'          => '',
	'default-repeat'         => 'repeat',
	'default-position-x'     => 'left',
        'default-position-y'     => 'top',
        'default-size'           => 'auto',
	'default-attachment'     => 'scroll',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );