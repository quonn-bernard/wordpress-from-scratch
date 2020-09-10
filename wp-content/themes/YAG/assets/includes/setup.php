<?php

function yag_setup_theme(){
    // enables featured images in a post
    add_theme_support( ('post-thumbnails') );
    add_theme_support( 'title-tag');
    add_theme_support('custom-logo');

    //enables programmatic nav menu
    register_nav_menu( 'primary', __('Primary Menu', 'yag'));
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
}

function yag_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'header_textcolor' , array(
        'default'   => '#000000',
        'transport' => 'refresh',
    ) );
 }

 