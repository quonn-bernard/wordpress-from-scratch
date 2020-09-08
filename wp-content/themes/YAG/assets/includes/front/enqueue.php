<?php
function yag_enqueue(){
    $uri                    = get_theme_file_uri( );
    wp_register_style( 'yag_google_fonts', 'https://fonts.googleapis.com/css?family=Roboto:200,300,400,400i,500,700,900' );
    wp_register_style( 'yag_bootstrap', $uri . '/assets/css/bootstrap.min.css' );
    wp_register_style( 'yag_bootstrap', $uri . '/assets/css/bootstrap.min.css' );
    wp_register_style( 'yag_main_style', $uri . '/assets/css/main.css' );
    wp_register_style( 'yag_default_style', $uri . '/assets/css/default.css' );
    wp_register_style( 'yag_animate_style', $uri . '/assets/css/plugins/animate.min.css' );
    wp_register_style( 'yag_flaticon_style', $uri . '/assets/css/plugins/flaticon.css' );
    wp_register_style( 'yag_font_awesome_style', $uri . '/assets/css/plugins/font-awesome.min.css' );
    wp_register_style( 'yag_font_YTPlayer_style', $uri . '/assets/css/plugins/jquery.mb.YTPlayer.min.css' );
    wp_register_style( 'yag_meanmenu_style', $uri . '/assets/css/plugins/meanmenu.css' );
    wp_register_style( 'yag_owl_carousel_style', $uri . '/assets/css/plugins/owl-carousal.min.css' );

    wp_enqueue_style( 'yag_google_fonts' );
    wp_enqueue_style( 'yag_bootstrap' );
    wp_enqueue_style( 'yag_main_style' );
    wp_enqueue_style( 'yag_default_style' );
    wp_enqueue_style( 'yag_animate_style' );
    wp_enqueue_style( 'yag_flaticon_style' );
    wp_enqueue_style( 'yag_font_awesome_style' );
    wp_enqueue_style( 'yag_font_YTPlayer_style' );
    wp_enqueue_style( 'yag_meanmenu_style' );
    wp_enqueue_style( 'yag_owl_carousel_style' );

    wp_register_script( 'yag_plugins', $uri . '/assets/js/plugins.js', [], false, true);
    wp_register_script( 'yag_bootstrap_js', $uri . '/assets/js/bootstrap.min.js', [], false, true);
    wp_register_script( 'yag_gmaps_js', $uri . '/assets/js/gmaps.min.js', [], false, true);
    wp_register_script( 'yag_main', $uri . '/assets/js/main.js', [], false, true);
    wp_register_script( 'yag_jquery_js', $uri . '/assets/js/vendor/jquery.min.js', [], false, true);
    wp_register_script( 'yag_modernizer', $uri . '/assets/js/modernizr-2.8.3.min.js', [], false, true);
    
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'yag_jquery_js');
    wp_enqueue_script( 'yag_plugins');
    wp_enqueue_script( 'yag_bootstrap_js');
    wp_enqueue_script( 'yag_gmaps_js');
    wp_enqueue_script( 'yag_main');
    wp_enqueue_script( 'yag_modernizer');
    
};
