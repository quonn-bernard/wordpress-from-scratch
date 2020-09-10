<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kanay - Portfolio HTML5 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <?php wp_head(); ?>
</head>
<body <?php body_class('stretch no-transition'); ?> >
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

     <!-- Start Site Header -->
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo-menu-wrap hidden-xs hidden-sm">
                        
                        <div class="logo">
                        <?php
                            if(has_custom_logo()){
                                the_custom_logo();
                            }else{
                        ?>
                        <a class="d-inline" href="<?php echo home_url('/');?>" >
                            <strong class="h2 d-inline"><?php bloginfo('name'); ?></strong>
                        </a>
                        <?php
                    }
                    ?>
                        </div>
                        <nav class="menu">
                            <?php
                            if( has_nav_menu( 'primary' )){
                                wp_nav_menu([
                                    'theme_location'        => 'primary',
                                    'container'             => false,
                                    'fallback_cb'           => false,
                                    'depth'                 => 4,
                                    'walker'                => new YAG_Custom_Nav_Walker()
                                ]);
                            }
                            ?>
                        </nav>
                    </div>
                    <div class="mobile-menu hidden-md hidden-lg">
                    <?php
                            if(has_custom_logo()){
                                the_custom_logo();
                            }else{
                        ?>
                        <a class="d-inline"  href="<?php echo home_url('/');?>" >
                            <strong class="d-inline"><?php bloginfo('name'); ?></strong>
                        </a>
                        <?php
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- End Site Header -->