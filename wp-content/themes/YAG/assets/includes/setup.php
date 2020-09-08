<?php

function yag_setup_theme(){
    // enables featured images in a post
    add_theme_support( ('post-thumbnails') );
    //enables programmatic nav menu
    register_nav_menu( 'primary', __('Primary Menu', 'yag'));
}