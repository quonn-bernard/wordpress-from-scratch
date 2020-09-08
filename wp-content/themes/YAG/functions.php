<?php

//Setup
define( 'YAG_DEV_MODE', true);

//includes
include( get_theme_file_path( './assets/includes/front/enqueue.php' ));
include( get_theme_file_path( './assets/includes/setup.php' ));
include( get_theme_file_path( './assets/includes/custom-nav-walker.php' ));
include( get_theme_file_path( './assets/includes/widgets.php' ));

//Hooks
add_action( 'wp_enqueue_scripts', 'yag_enqueue' );
add_action( 'after_setup_theme', 'yag_setup_theme' );
add_action( 'widgets_init', 'yag_widgets');

//Shortcodes


// gets the date
function gt_get_post_view() {
    $count = get_post_meta( get_the_ID(), 'post_views_count', true );
    return "$count views";
}
function gt_set_post_view() {
    $key = 'post_views_count';
    $post_id = get_the_ID();
    $count = (int) get_post_meta( $post_id, $key, true );
    $count++;
    update_post_meta( $post_id, $key, $count );
}
function gt_posts_column_views( $columns ) {
    $columns['post_views'] = 'Views';
    return $columns;
}
function gt_posts_custom_column_views( $column ) {
    if ( $column === 'post_views') {
        echo gt_get_post_view();
    }
}
add_filter( 'manage_posts_columns', 'gt_posts_column_views' );
add_action( 'manage_posts_custom_column', 'gt_posts_custom_column_views' );