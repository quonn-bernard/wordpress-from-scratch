<!-- should contain 
-page title 
-content 
-display comment list 
-comment form
-include wp_link_pages() to support nav links
-should not display metadata such as tags categories amd author
-->

<?php get_header(); ?>
    <!-- For Sticky header -->
    <div id="sticky-header"></div>
    
    <!-- Start Page Heading area -->
    <div class="page_heading_area ptb-110 bg-image bg_overlay bg-img-fixed" style="background-image: url(images/header/1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page_title">
                        <h1><?php wp_title(); ?></h1>
                        <p>Why We  Choice?</p>
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
    <div id="page" class="page-section single-post mtb-100">
        <?php
           
            while (have_posts()){
                the_post();

                ?>
                <div class="container">
            <div class="row">
                <div class="col-12">
                    <main id="main" class="site-main">
                        <article class="post post-format-slide">
                            <div class="post-thumbnail">
                
                            </div>
                                <p><?php the_content(); ?></p>
                            </div>
                        </article>
                        <!-- Start Comments area -->
                        <?php
                        if( comments_open() || get_comments_number()){
                            comments_template();
                        }
                        ?>
                    
                        </div><!-- End Comments area -->
                    </main>
                </div>
                
                </div>
            </div>
        </div>

                <?php
            }

        ?>

        
    </div>
    <!-- End page section area -->
    
    <?php get_footer( ) ?>
