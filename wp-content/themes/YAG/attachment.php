<?php get_header(); ?>
    <!-- For Sticky header -->
    <div id="sticky-header"></div>
    
    <!-- Start Page Heading area -->
    <div class="page_heading_area ptb-110 bg-image bg_overlay bg-img-fixed" style="background-image: url(images/header/1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page_title">
                        <?php the_title('<h1 class="page-title">', '</h1>') ?>
                        
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
        <!-- Start Project Details Area -->
        <div class="project_details_area mt-110">
            <div class="container">
                <div class="row">
                    <div class="mt-100 mb-100">
                <a href="<?php echo $post->guid; ?>">Direct Download</a>
                            <img class="img-fluid" src="<?php echo $post->guid; ?>">
</div>
<?php the_content(); ?>
                </div>
            </div>
        </div>
        <!-- End Project Details Area -->
        
        
    </section>
    <!-- End page section area -->
    
    <?php get_footer( ) ?>
