<?php get_header(); ?>
    <!-- For Sticky header -->
    <div id="sticky-header"></div>
    
    <!-- Start Page Heading area -->
    <div class="page_heading_area ptb-110 bg-image bg_overlay bg-img-fixed" style="background-image: url(images/header/1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page_title">
                        <h1><?php echo '<h1 class="page-title">';single_cat_title();echo '</h1>' ?></h1>
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
        
                <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <main id="main" class="site-main">
                      <a href="<?php echo $post->guid; ?>">Direct Download</a>
                    <?php
                         echo '<pre>';
                            print_r($post);
                         echo '</pre>';
                         the_content();
                    ?>
                      
                    </main>
                </div>
                <div class="col-md-4 col-sm-12">
                    <aside class="sidebar">
                        <!-- search widget -->
                        <div class="search-widget widget">
                            <div class="widget-title">
                                <h3 class="headline">Search!</h3>
                            </div>
                            <form role="search" method="get" class="search-form" action="#">
                                <label>
                                    <input type="search" class="search-field" placeholder="Tell Me! What’s you need...." value="" name="s" />
                                </label>
                                <input type="submit" class="search-submit" value="Search" />
                            </form>
                        </div>

                        <!-- Most Viewed Post -->
                        <!-- <div class="popular-post-widget widget">
                            <div class="widget-title">
                                <h3 class="headline">Most Viewed Post</h3>
                            </div>
                            <div class="most-view-post">
                                <div class="popular-post">
                                    <img src="images/blog/most/1.jpg" alt="img" class="img-responsive">
                                    <h5><a href="#">Lorem Ipsum is simply dummy printing</a></h5>
                                </div>
                                <div class="popular-post">
                                    <img src="images/blog/most/2.jpg" alt="img" class="img-responsive">
                                    <h5><a href="#">Lorem Ipsum is simply dummy printing</a></h5>
                                </div>
                            </div>
                        </div> -->

                        <!-- Related Posts -->
                        <?php
                        $categories            =  get_the_category();
                       
                        // queries db for related posts
                        $rp_query            =  new WP_Query([
                            'posts_per_page' => 2,   
                            'post__not_in'   => [ $post->ID],
                            'cat'            => $categories[0]->term_id || null
                        ]);
                          
                        if($rp_query->have_posts()){
                            while( $rp_query->have_posts() ){
                                $rp_query->the_post();
                                ?>

                                <!-- Recent post -->
                        <div class="recent-post-widget widget">
                            <div class="widget-title">
                                <h3 class="headline">Recent Post</h3>
                            </div>
                            <ul class="simple-post-list">
                                <li>
                                <?php
                        if( has_post_thumbnail()){
                            ?>
                            <div class="post-image">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail(); ?>
                                        </a>
                                    </div>
                                    <?php
                                }

                                ?>
                                    
                                    <div class="post-info">
                                        <a class="post-title" href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                        <div class="post-meta">
                                            <span><i class="fa fa-user"></i> <a href="#"></a> </span>
                                            <span><i class="fa fa-clock-o"></i> <?php echo get_the_date() ?>  </span>
                                            <p><?php the_excerpt(); ?></p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <?php
                            }
                        }
                        ?>

                        <!-- Categories -->
                        <div class="category-widget widget">
                            <div class="widget-title">
                                <h3 class="headline">Categories</h3>
                            </div>
                            <ul class="category-list">
                                <li><a href="#">Graphic Design<span class="cat-count">5</span></a></li>
                                <li><a href="#">Adobe Photoshop<span class="cat-count">6</span></a></li>
                                <li><a href="#">Adobe Illustrator<span class="cat-count">8</span></a></li>
                                <li><a href="#">Adobe Indesign<span class="cat-count">9</span></a></li>
                                <li><a href="#">After Effect<span class="cat-count">3</span></a></li>
                                <li><a href="#">Creative Design<span class="cat-count">4</span></a></li>
                                <li><a href="#">User Experience Design<span class="cat-count">5</span></a></li>
                                <li><a href="#">User Interface<span class="cat-count">7</span></a></li>
                                <li><a href="#">Infographic<span class="cat-count">2</span></a></li>
                            </ul>
                        </div>

                        
                        <!-- Sign Up Our Newsletter -->
                        <div class="search-widget widget">
                            <div class="widget-title">
                                <h3 class="headline">Sign Up Our Newsletter</h3>
                            </div>
                            <form role="search" method="get" class="search-form" action="#">
                                <label>
                                    <input type="search" class="search-field" placeholder="Enter your email" value="" name="s" />
                                </label>
                                <input type="submit" class="search-submit" value="Submit" />
                            </form>
                        </div>
                        
                        <!-- instagram -->
                        <!-- <div class="instagram-widget widget">
                            <div class="widget-title">
                                <h3 class="headline">Instragram Feed</h3>
                            </div>
                            <ul class="instagram-feed">
                                <li><img src="images/blog/feed/1.jpg" alt="image" class="img-responsive"></li>
                                <li><img src="images/blog/feed/2.jpg" alt="image" class="img-responsive"></li>
                                <li><img src="images/blog/feed/3.jpg" alt="image" class="img-responsive"></li>
                                <li><img src="images/blog/feed/4.jpg" alt="image" class="img-responsive"></li>
                                <li><img src="images/blog/feed/5.jpg" alt="image" class="img-responsive"></li>
                                <li><img src="images/blog/feed/6.jpg" alt="image" class="img-responsive"></li>
                            </ul>
                        </div> -->

                        <!-- video -->
                        <div class="video-widget widget">
                            <div class="video gallery">
                                <img src="images/blog/video.jpg" alt="img" class="img-responsive"> 
                                <div class="video__inner">
                                    <a href="https://www.youtube.com/watch?v=dBlBYP1pQgE" class="video__trigger"><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>


        
    </div>
    <!-- End page section area -->
    
    
    <?php get_footer( ) ?>

    