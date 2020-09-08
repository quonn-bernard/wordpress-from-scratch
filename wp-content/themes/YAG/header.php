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
                            <a href="index.html">
                                <img src="images/logo/1.png" alt="logo">
                            </a>
                        </div>
                        <nav class="menu">
                            <?php
                            if( has_nav_menu( 'primary' )){
                                wp_nav_menu([
                                    'theme_location'        => 'primary',
                                    'container'             => false,
                                    'fallback_cb'           => false,
                                    'depth'                 => 4,
                                    // 'walker'                => new YAG_Custom_Nav_Walker()
                                ]);
                            }
                            ?>
                            <!-- <ul class="mainmenu">
                                <li class="current dropdown-trigger"><a href="#"><span class="flaticon-home"></span>Home</a>
                                    <ul class="dropdown-content">
                                        <li><a href="index.html">home one</a></li>
                                        <li><a href="index-2.html">home two</a></li>
                                        <li><a href="index-3.html">home three</a></li>
                                    </ul>
                                </li>
                                <li><a href="services.html"><span class="flaticon-layers"></span>services</a></li>
                                <li class="dropdown-trigger">
                                    <a href="#"><span class="flaticon-photo"></span>portfolio</a>
                                    <ul class="dropdown-content">
                                        <li><a href="portfolio.html">Portfolio col 2</a></li>
                                        <li><a href="portfolio-col-3.html">Portfolio col 3</a></li>
                                        <li><a href="portfolio-col-4.html">Portfolio col 4</a></li>
                                        <li><a href="single-portfolio.html">Sinlge Portfolio one</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-trigger"><a href="#"><span class="flaticon-settings-cogwheel"></span>features</a>
                                    <ul class="dropdown-content">
                                        <li><a href="about-us.html">about us</a></li>
                                        <li><a href="pricing-table.html">pricing</a></li>
                                        <li><a href="career.html">Career</a></li>
                                        <li><a href="single-career.html">single career</a></li>
                                        <li><a href="single-team.html">single team</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul> 
                                </li>
                                <li class="dropdown-trigger"><a href="#"><span class="flaticon-light-bulb"></span>blog page</a>
                                    <ul class="dropdown-content">
                                        <li><a href="blog.html">Blog page</a></li>
                                        <li><a href="single-blog.html">Single Blog</a></li>
                                        <li><a href="single-blog-video.html">Single Blog video</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html"><span class="flaticon-chat"></span>Contact us</a></li>
                            </ul> -->
                        </nav>
                    </div>
                    <div class="mobile-menu hidden-md hidden-lg">
                        <a class="mobile-logo" href="index.html"><img src="images/logo/1.png" alt="logo"></a>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- End Site Header -->