<article class="post post-large post-format-slide">
<?php
                                if(has_post_thumbnail()){
                                    ?>
                                <div class="post-thumbnail">

                                    <div class="post-slide owl-carousel">
                                        <a href="single-blog.html">
                                            
                                            <?php the_post_thumbnail('full', ['class' => 'image_fade'] ); ?>
                                            
                                            </a>
                                        <!-- <a href="single-blog.html">
                                            <img src="images/blog/2.jpg" alt="post">
                                        </a> -->
                                    </div>

                                    <div class="entry-date">
                                        <a href="#">
                                            <?php get_the_date()?>
                                        </a>
                                    </div>
                                </div>
                                <div class="entry-content">

                                    <h2 class="entry-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                                    </h2>
                                    <p><?php the_excerpt(); ?></p>
                                    <div class="entry-meta">
                                        <span><i class="fa fa-user"></i> By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"><?php the_author() ?></a> </span>
                                        <span><i class="fa fa-folder-open"></i> <?php the_category(' ') ?></span>
                                        <span><i class="fa fa-comment"></i> <a href="#"><?php comments_number(); ?></a></span>
                                        <span><i class="fa fa-eye"></i> <a href="#">250 Views</a></span>
                                    </div>
                                    
                                </div>
                                <?php
                            }
                                ?>
                            </article>