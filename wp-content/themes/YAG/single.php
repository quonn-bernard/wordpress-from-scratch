<?php get_header(); ?>
    <!-- For Sticky header -->
    <div id="sticky-header"></div>
    
    <!-- Start Page Heading area -->
    <div class="page_heading_area ptb-110 bg-image bg_overlay bg-img-fixed" style="background-image: url(images/header/1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page_title">
                        <h1>BLOG PAGE</h1>
                        <p>Why We Are Best Choice?</p>
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
           if( have_posts()){
            while (have_posts()){
                the_post();

                global $post;
                $author_ID                 = $post->post_author;
                $author_URL                = get_author_posts_url( $author_ID );

                ?>
                <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <main id="main" class="site-main">
                        <article class="post post-format-slide">
                            <div class="post-thumbnail">
                                <div class="post-slide owl-carousel">
                                    <a href="single-blog.html"><?php the_post_thumbnail('full'); ?></a>
                                    <a href="single-blog.html"><?php the_post_thumbnail('full'); ?></a>
                                </div>
                                <div class="">
                                    <a href="#">
                                        <?php the_date(); ?>
                                    </a>
                                </div>
                            </div>
                            <div class="entry-content">
                                <div class="post-header">
                                    <h2 class="entry-title">
                                        <a href="single-blog.html"><?php the_title() ?></a>
                                    </h2>

                                    <div class="entry-meta">
                                        <span><i class="fa fa-user"></i> By <a href="<?php $author_URL; ?>"> <?php the_author() ?> </a></span>
                                        <span><i class="fa fa-folder-open"></i> <a href="#">Web Development</a> </span>
                                        <span><i class="fa fa-comment"></i> <a href="#"><?php comments_number('0',) ?></a></span>
                                        <span><i class="fa fa-eye"></i> <a href="#">250 Views</a></span>
                                    </div>
                                </div>
                                <p><?php the_content(); ?></p>
                                <?php the_post_thumbnail('full'); ?>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular from a line in section 1.10.32.</p>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                            </div>
                            <div class="entry-footer">
                                <div class="socila_share">
                                    <ul class="share">
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    </ul>
                                </div>
                                <!-- Start Post Navigation -->
                                <nav class="navigation post-navigation">
                                    <div class="nav-links">
                                        <div class="nav-previous">
                                            <?php previous_post_link(); ?>
                                        </div>
                                        <div class="nav-next">
                                           <?php next_post_link(); ?>
                                        </div>
                                    </div>
                                </nav><!-- End Post Navigation -->
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

                <?php
            }

            wp_reset_postdata();
          }
        ?>

        
    </div>
    <!-- End page section area -->
    
    <?php get_footer( ) ?>
