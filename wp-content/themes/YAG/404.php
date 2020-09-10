<?php get_header(); ?>


<!-- For Sticky header -->
<div id="sticky-header"></div>
    
    
    <!-- Start Page Heading area -->
    <div class="page_heading_area ptb-110 bg-image bg_overlay bg-img-fixed" style="background-image: url(images/header/1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page_title">
                        <h1>404 Page</h1>
                        <p><?php _e( 'Page Not Found', 'yag'); ?></p>
                        <div class="divider">
                            <span></span>
                            <span></span>
                        </div>
                    </div><!--/.page_title-->
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Heading area -->


    <!-- Start page section area -->
    <section id="page" class="page-section">

        
        <!-- Start Error Page Area -->
        <div class="error_page_area mb-110 mt-95">
            <div class="container">
                <div class="row">
                    <div class="col-full-width">
                        
                        <div class="error_content text-center">
                            <!-- search form -->
                          <h1><?php get_search_form(); ?></h1>
                            <h2><?php _e( '404', 'yag'); ?></h2>
                            <h3><?php _e( 'Sorry Page Not Found', 'yag'); ?></h3>
                            <p><?php _e( 'Sorry the page you are looking for could not be found', 'yag'); ?></p>
                            <a class="btn btn-default" href="index.html">Back to Home Page</a>
                        </div><!--/.error_content-->
                    </div>
                </div>
            </div>
        </div><!-- End Error Page Area -->
    </section>
    <!-- End page section area -->


<?php get_footer(); ?>