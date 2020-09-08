<?php
        if( have_posts()){
            while (have_posts()){
                the_post();
                get_template_part('partials/posts/content-excerpt', 'excerpt');
            }
        }
    ?>
<?php get_header(); ?>
    <!-- For Sticky header -->
    <div id="sticky-header"></div>

    <!-- Start slider area -->
    <div class="slider">
        <div class="slider_inner owl-carousel">
            <!-- Start slider item -->
            <div class="slider_item slider_item_one">
                <div class="slider_bg_thumb bg-image" style="background-image: url(images/slider/1.jpg);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="slider_content_outer">
                                <div class="slider_content text-white text-center">          
                                    <span class="flaticon-game"></span>
                                    <h1 class="slider_title">Graphic Design</h1>
                                    <p class="slider_subtitle">Lorem Ipsum is simply dummy text printing and typesetting industry Ipsum has been the industry's standard dummy text ever since</p>
                                    <a class="btn btn-default" href="#">read more <i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End slider item -->  
            
            <!-- Start slider item -->
            <div class="slider_item slider_style_two bg_overlay">
                <div class="slider_bg_thumb bg-image" style="background-image: url(images/slider/2.jpg);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-10 col-xs-12">
                            <div class="slider_content text-white">
                                <h1 class="slider_title">We Make Good <br>UX Design</h1>
                                <p class="slider_subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry tandard dummy text ever since </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End slider item -->
            
            <!-- Start slider item -->
            <div class="slider_item slider_style_two bg_overlay">
                <div class="slider_bg_thumb bg-image" style="background-image: url(images/slider/3.jpg);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-10 col-xs-12">
                            <div class="slider_content text-white">
                                <h1 class="slider_title">We Make Good <br>UX Design</h1>
                                <p class="slider_subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry tandard dummy text ever since </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End slider item -->
        </div>
    </div>
    <!-- End slider area -->

    <!-- Start page section area -->
    <section id="page-section" class="page-section">
        <!-- work-progress -->
        <div class="about-area about-style-two mb-100">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="smudge_tab">
                            <!--Start Smudge Tab Nav -->
                            <ul class="nav smudge_tab_nav mb-110" role="tablist">
                                <li class="active">
                                    <a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                                        <i class="flaticon-responsive"></i> Responsive Layout 
                                        <p>From desktop to mobile</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
                                        <i class="flaticon-coding"></i> HTML5 / CSS3 
                                        <p>For today and tomorrow</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">
                                        <i class="flaticon-multimedia"></i> Easily customisable 
                                        <p>Build the way you want!</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">
                                        <i class="flaticon-graphic-design-1"></i> Unique & Clean 
                                        <p>Stand out from the crowd!</p>
                                    </a>
                                </li>
                            </ul><!-- End Smudge Tab Nav -->
                            
                            <!-- Start Tab Content -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active best_choice_area best_choice_style_two" id="home">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="about_thumb_area">
                                                <figure class="biography_midea biography_thumb image_effect">
                                                    <img src="images/thumbnil/4.jpg" alt="thumb">
                                                </figure><!--/.biography_midea-->
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <h3 class="tab-title">Why We Are Best Choice?</h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publiLorem Ipsum is simply dummy text of the printing and typesetting industry.bled it to make a type specimen book. It ha survived not only five centuries, but also the leap into electronic 1960s with the release of Letraset sheets containing.Lorem Ipsum is the standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            <div class="process_setps">
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                                        <div class="single_process">
                                                            <span class="flaticon-multimedia-1"></span>
                                                            <h3>Unique Designs</h3>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                                        <div class="single_process">
                                                            <span class="flaticon-language"></span>
                                                            <h3>Clean Code</h3>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                                        <div class="single_process">
                                                            <span class="flaticon-telemarketer"></span>
                                                            <h3>24/7 support</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane about-style-one " id="profile">
                                    <!-- Start About Area -->
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="about_content">
                                                <h3>We’re Dynamic team of talented people of 
                    innovative & marketing expert.</h3>
                                                <ul class="list_style_square">
                                                    <li>We Are Best Digital Agency in Asia</li>
                                                </ul>
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years.</p>
                                                <p>content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their sites still in their infancy. Various versions have evolved over the years.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="about_thumb_area">
                                                <figure class="about_thumb image_effect">
                                                    <img src="images/about/1.jpg" alt="thumb">
                                                    <div class="video__inner">
                                                        <a href="https://www.youtube.com/watch?v=dBlBYP1pQgE" class="video__trigger"><i class="fa fa-play"></i></a>
                                                    </div>
                                                </figure><!--/.about_thumb-->
                                                <a class="btn btn-about"><span>Explore</span>More About us<i class="flaticon-right-arrow"></i></a>
                                            </div><!--/.about_thumb_area-->
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane best_choice_area" id="messages">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <h3 class="tab-title">Why We Are Best Choice ?</h3>
                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.</p>
                                            <div class="tab-acc-panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                <div class="panel tab-acc-panel">
                                                    <div class="tab-acc-panel-heading" role="tab" id="headingOne">
                                                      <h5 class="tab-acc-panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne2" aria-expanded="true" aria-controls="collapseOne">
                                                          Where does it come from? <span class="acc_toggle_icon"></span>
                                                        </a>
                                                      </h5>
                                                    </div>
                                                    <div id="collapseOne2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                      <div class="tab-acc-body">
                                                        <p>Contrary to belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words</p>
                                                      </div>
                                                    </div>
                                                </div>
                                                <div class="panel tab-acc-panel">
                                                    <div class="tab-acc-panel-heading" role="tab" id="headingTwo">
                                                      <h5 class="tab-acc-panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo">
                                                          Where can I get some demo text ? <span class="acc_toggle_icon"></span>
                                                        </a>
                                                      </h5>
                                                    </div>
                                                    <div id="collapseTwo2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                      <div class="tab-acc-body">
                                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words</p>
                                                      </div>
                                                    </div>
                                                </div>
                                                <div class="panel tab-acc-panel">
                                                    <div class="tab-acc-panel-heading" role="tab" id="headingThree">
                                                      <h5 class="tab-acc-panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree2" aria-expanded="false" aria-controls="collapseThree">
                                                          What is Lorem Ipsum? <span class="acc_toggle_icon"></span>
                                                        </a>
                                                      </h5>
                                                    </div>
                                                    <div id="collapseThree2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                      <div class="tab-acc-body">
                                                          <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words</p>
                                                      </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="about_thumb_area">
                                                <figure class="biography_midea biography_thumb image_effect">
                                                    <img src="images/thumbnil/3.jpg" alt="thumb">
                                                </figure><!--/.biography_midea-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane biography-area" id="settings">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="biography_content">
                                                <h2 class="biography_title">Our Digital Agency</h2>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has standard dummy text ever since the 1500s, when an unknown printer took a galley of type and type specimen book. It has survived not only five centuries, but also the leapinto electronic essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets Lorem Ipsum passages, and more recently with desktop publishing software like Aldus Pageof Lorem Ipsum.</p>
                                                <ul class="list_style_circle">
                                                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                                                    <li>There are many variations of passages of Lorem Ipsum available</li>
                                                    <li>Simply dummy text of the printing and typesetting industry</li>
                                                    <li>It is a long established fact that a reader will be distracted by the readable</li>
                                                </ul>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has standard dummy text ever since the 1500s, when an unknown printer took a galley of type. It was popularised in the 1960s with the release of Letraset sheets  Lorem Ipsum passages, and more recently with desktop software like Aldus Page of Lorem Ipsum.</p>
                                            </div><!--/.biography_content-->
                                        </div><!--/.col-md-6-->
                                        <div class="col-md-5">
                                            <div class="about_thumb_area">
                                                <figure class="biography_midea biography_thumb image_effect">
                                                    <img src="images/about/2.jpg" alt="thumb">
                                                </figure><!--/.biography_midea-->
                                            </div>
                                        </div><!--/.col-md-6-->
                                    </div>
                                </div>
                            </div><!-- End Tab Content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Promo Area -->
        <div class="promo_area mt-103 mb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="promo_content text-center">
                            <h2>Are you impressed work with us ?</h2>
                            <p>If You Start Building Your Next Project With us</p>
                            <div class="btn_group_button">
                                <a class="btn btn-default btn-yellow" href="contact.html">Hire Me</a>
                                <a class="btn btn-default btn-blue" href="#">Skype Call</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Promo Area -->
       
        <!-- Start Services Area -->
        <div class="services-area services-style-one mb-90 mt-90">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section_title text-center">
                            <h2 class="title__heading text-capitalize">Our Services</h2>
                            <p>We Provide Quility Services</p>
                        </div><!--/.section_title-->
                    </div>
                </div><!--/.row-->
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <!-- Start services thumb area -->
                        <div class="services_thumb_area">
                            <figure class="services_thumb image_effect">
                                <img src="images/services/1.jpg" alt="thumb">
                                <a class="btn btn-default" href="contact.html">CONTACT US</a>
                            </figure>
                        </div><!-- End services thumb area -->
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <!-- Star Services Carousel -->
                        <div class="services_carousel owl-carousel">
                            <!-- Star Carousel Item -->
                            <div class="item">
                                <div class="row">
                                    <!-- Start Single Service -->
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single_service text-center">
                                            <span class="service_icon flaticon-responsive"></span>
                                            <h3>Responsive Design</h3>
                                            <p>Lorem Ipsum is simply  dummy text of the printing and type setting industry lorem </p>
                                        </div>
                                    </div><!-- End Single Service -->
                                    <!-- Start Single Service -->
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single_service text-center">
                                            <span class="service_icon flaticon-coding"></span>
                                            <h3>Web Development</h3>
                                            <p>Lorem Ipsum is simply  dummy text of the printing and type setting industry lorem </p>
                                        </div>
                                    </div><!-- End Single Service -->

                                    <div class="clearfix hidden-sm hidden-xs"></div>

                                    <!-- Start Single Service -->
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single_service text-center">
                                            <span class="service_icon flaticon-language"></span>
                                            <h3>Programming</h3>
                                            <p>Lorem Ipsum is simply  dummy text of the printing and type setting industry lorem </p>
                                        </div>
                                    </div><!-- End Single Service -->
                                    <!-- Start Single Service -->
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single_service text-center">
                                            <span class="service_icon flaticon-vector-1"></span>
                                            <h3>Graphic Design</h3>
                                            <p>Lorem Ipsum is simply  dummy text of the printing and type setting industry lorem </p>
                                        </div>
                                    </div><!-- End Single Service -->
                                </div>
                            </div><!-- End Carousel Item -->
                            <!-- Star Carousel Item -->
                            <div class="item">
                                <div class="row">
                                    <!-- Start Single Service -->
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single_service text-center">
                                            <span class="service_icon flaticon-coding"></span>
                                            <h3>Responsive Design</h3>
                                            <p>Lorem Ipsum is simply  dummy text of the printing and type setting industry lorem </p>
                                        </div>
                                    </div><!-- End Single Service -->
                                    <!-- Start Single Service -->
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single_service text-center">
                                            <span class="service_icon flaticon-responsive"></span>
                                            <h3>Web Development</h3>
                                            <p>Lorem Ipsum is simply  dummy text of the printing and type setting industry lorem </p>
                                        </div>
                                    </div><!-- End Single Service -->

                                    <div class="clearfix hidden-sm hidden-xs"></div>

                                    <!-- Start Single Service -->
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single_service text-center">
                                            <span class="service_icon flaticon-language"></span>
                                            <h3>Programming</h3>
                                            <p>Lorem Ipsum is simply  dummy text of the printing and type setting industry lorem </p>
                                        </div>
                                    </div><!-- End Single Service -->
                                    <!-- Start Single Service -->
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single_service text-center">
                                            <span class="service_icon flaticon-vector-1"></span>
                                            <h3>Graphic Design</h3>
                                            <p>Lorem Ipsum is simply  dummy text of the printing and type setting industry lorem </p>
                                        </div>
                                    </div><!-- End Single Service -->
                                </div>
                            </div><!-- End Carousel Item -->
                            <!-- Star Carousel Item -->
                            <div class="item">
                                <div class="row">
                                    <!-- Start Single Service -->
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single_service text-center">
                                            <span class="service_icon flaticon-responsive"></span>
                                            <h3>Responsive Design</h3>
                                            <p>Lorem Ipsum is simply  dummy text of the printing and type setting industry lorem </p>
                                        </div>
                                    </div><!-- End Single Service -->
                                    <!-- Start Single Service -->
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single_service text-center">
                                            <span class="service_icon flaticon-coding"></span>
                                            <h3>Web Development</h3>
                                            <p>Lorem Ipsum is simply  dummy text of the printing and type setting industry lorem </p>
                                        </div>
                                    </div><!-- End Single Service -->

                                    <div class="clearfix hidden-sm hidden-xs"></div>

                                    <!-- Start Single Service -->
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single_service text-center">
                                            <span class="service_icon flaticon-language"></span>
                                            <h3>Programming</h3>
                                            <p>Lorem Ipsum is simply  dummy text of the printing and type setting industry lorem </p>
                                        </div>
                                    </div><!-- End Single Service -->
                                    <!-- Start Single Service -->
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single_service text-center">
                                            <span class="service_icon flaticon-vector-1"></span>
                                            <h3>Graphic Design</h3>
                                            <p>Lorem Ipsum is simply  dummy text of the printing and type setting industry lorem </p>
                                        </div>
                                    </div><!-- End Single Service -->
                                </div>
                            </div><!-- End Carousel Item -->
                        </div><!-- End Services Carousel -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Services Area -->
       
        <!-- Start Working Area -->
        <div id="work" class="working_area mt-94">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section_title text-center">
                            <h2 class="title__heading text-capitalize">Recent Works</h2>
                            <p>See Our Latest Projects</p>
                        </div><!--/.section_title-->
                    </div>
                </div><!--/.row-->
                <div class="row">
                    <!-- Start Single Work -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="work_item">
							<div class="work_thumb">
								<img src="images/portfolio/1.jpg" alt="project1" class="img-responsive">
							</div>
							<div class="work_hover_mask">
								<div class="mask-container text-center">
									<h4>Web Design</h4>
									<div class="divider-border"></div>
									<p>Lorem ipsum dolor sit amet, consetur adipiscing elit. Aliquam enim enim, pharetra in sodales at, interdum sit</p>
									<a class="btn btn-default" href="single-portfolio.html">Project details</a>
								</div>
							</div>
						</div>
                    </div><!-- End Single Work -->
                    <!-- Start Single Work -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="work_item">
							<div class="work_thumb">
								<img src="images/portfolio/2.jpg" alt="project2" class="img-responsive">
							</div>
							<div class="work_hover_mask">
								<div class="mask-container text-center">
									<h4>Web Design</h4>
									<div class="divider-border"></div>
									<p>Lorem ipsum dolor sit amet, consetur adipiscing elit. Aliquam enim enim, pharetra in sodales at, interdum sit</p>
									<a class="btn btn-default" href="single-portfolio.html">Project details</a>
								</div>
							</div>
						</div>
                    </div><!-- End Single Work -->
                    <!-- Start Single Work -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="work_item">
							<div class="work_thumb">
								<img src="images/portfolio/3.jpg" alt="project3" class="img-responsive">
							</div>
							<div class="work_hover_mask">
								<div class="mask-container text-center">
									<h4>Web Design</h4>
									<div class="divider-border"></div>
									<p>Lorem ipsum dolor sit amet, consetur adipiscing elit. Aliquam enim enim, pharetra in sodales at, interdum sit</p>
									<a class="btn btn-default" href="single-portfolio.html">Project details</a>
								</div>
							</div>
						</div>
                    </div><!-- End Single Work -->
                    <!-- Start Single Work -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="work_item">
							<div class="work_thumb">
								<img src="images/portfolio/4.jpg" alt="project4" class="img-responsive">
							</div>
							<div class="work_hover_mask">
								<div class="mask-container text-center">
									<h4>Web Design</h4>
									<div class="divider-border"></div>
									<p>Lorem ipsum dolor sit amet, consetur adipiscing elit. Aliquam enim enim, pharetra in sodales at, interdum sit</p>
									<a class="btn btn-default" href="single-portfolio.html">Project details</a>
								</div>
							</div>
						</div>
                    </div><!-- End Single Work -->
                    <!-- Start Single Work -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="work_item">
							<div class="work_thumb">
								<img src="images/portfolio/5.jpg" alt="project5" class="img-responsive">
							</div>
							<div class="work_hover_mask">
								<div class="mask-container text-center">
									<h4>Web Design</h4>
									<div class="divider-border"></div>
									<p>Lorem ipsum dolor sit amet, consetur adipiscing elit. Aliquam enim enim, pharetra in sodales at, interdum sit</p>
									<a class="btn btn-default" href="single-portfolio.html">Project details</a>
								</div>
							</div>
						</div>
                    </div><!-- End Single Work -->
                    <!-- Start Single Work -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="work_item">
							<div class="work_thumb">
								<img src="images/portfolio/6.jpg" alt="project6" class="img-responsive">
							</div>
							<div class="work_hover_mask">
								<div class="mask-container text-center">
									<h4>Web Design</h4>
									<div class="divider-border"></div>
									<p>Lorem ipsum dolor sit amet, consetur adipiscing elit. Aliquam enim enim, pharetra in sodales at, interdum sit</p>
									<a class="btn btn-default" href="single-portfolio.html">Project details</a>
								</div>
							</div>
						</div>
                    </div><!-- End Single Work -->
                </div>
            </div>
        </div><!-- End Working Area -->
        
        <!-- Start Services Area -->
        <div class="working_process_area mt-94 mb-110">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section_title text-center">
                            <h2 class="title__heading text-capitalize">Our Work Process</h2>
                            <p>Checkout our latest work process</p>
                        </div><!--/.section_title-->
                    </div>
                </div><!--/.row-->
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs workprocess_tab" role="tablist">
                            <li class="active"><a href="#home2" aria-controls="home" role="tab" data-toggle="tab"><span>01</span>Project Planning</a></li>
                            <li><a href="#profile2" aria-controls="profile" role="tab" data-toggle="tab"><span>02</span>Stander Research</a></li>
                            <li><a href="#messages2" aria-controls="messages" role="tab" data-toggle="tab"><span>03</span>Project Goal</a></li>
                            <li><a href="#settings2" aria-controls="settings" role="tab" data-toggle="tab"><span>04</span>Project Finish</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content workprocess_tab_content">
                            <div role="tabpanel" class="tab-pane best_choice_area active" id="home2">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <h3 class="tab-title">Why We Are Best Choice ?</h3>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.</p>
                                        <div class="tab-acc-panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                                            <div class="panel tab-acc-panel">
                                                <div class="tab-acc-panel-heading" role="tab" id="headingOne2">
                                                  <h5 class="tab-acc-panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                      Where does it come from? <span class="acc_toggle_icon"></span>
                                                    </a>
                                                  </h5>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne2">
                                                  <div class="tab-acc-body">
                                                    <p>Contrary to belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words</p>
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="panel tab-acc-panel">
                                                <div class="tab-acc-panel-heading" role="tab" id="headingTwo2">
                                                  <h5 class="tab-acc-panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                      Where can I get some demo text ? <span class="acc_toggle_icon"></span>
                                                    </a>
                                                  </h5>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo2">
                                                  <div class="tab-acc-body">
                                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words</p>
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="panel tab-acc-panel">
                                                <div class="tab-acc-panel-heading" role="tab" id="headingThree2">
                                                  <h5 class="tab-acc-panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                      What is Lorem Ipsum? <span class="acc_toggle_icon"></span>
                                                    </a>
                                                  </h5>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree2">
                                                  <div class="tab-acc-body">
                                                      <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words</p>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="about_thumb_area">
                                            <figure class="biography_midea biography_thumb image_effect">
                                                <img src="images/thumbnil/3.jpg" alt="thumb">
                                            </figure><!--/.biography_midea-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane about-style-one" id="profile2">
                                <!-- Start About Area -->
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="about_content">
                                            <h3>We’re Dynamic team of talented people of 
                innovative & marketing expert.</h3>
                                            <ul class="list_style_square">
                                                <li>We Are Best Digital Agency in Asia</li>
                                            </ul>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years.</p>
                                            <p>content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their sites still in their infancy. Various versions have evolved over the years.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="about_thumb_area">
                                            <figure class="about_thumb image_effect">
                                                <img src="images/about/1.jpg" alt="thumb">
                                                <div class="video__inner">
                                                    <a href="https://www.youtube.com/watch?v=dBlBYP1pQgE" class="video__trigger"><i class="fa fa-play"></i></a>
                                                </div>
                                            </figure><!--/.about_thumb-->
                                            <a class="btn btn-about"><span>Explore</span>More About us<i class="flaticon-right-arrow"></i></a>
                                        </div><!--/.about_thumb_area-->
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane biography-area" id="messages2">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="biography_content">
                                            <h2 class="biography_title">Our Digital Agency</h2>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has standard dummy text ever since the 1500s, when an unknown printer took a galley of type and type specimen book. It has survived not only five centuries, but also the leapinto electronic essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets Lorem Ipsum passages, and more recently with desktop publishing software like Aldus Pageof Lorem Ipsum.</p>
                                            <ul class="list_style_circle">
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                                                <li>There are many variations of passages of Lorem Ipsum available</li>
                                                <li>Simply dummy text of the printing and typesetting industry</li>
                                                <li>It is a long established fact that a reader will be distracted by the readable</li>
                                            </ul>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has standard dummy text ever since the 1500s, when an unknown printer took a galley of type. It was popularised in the 1960s with the release of Letraset sheets  Lorem Ipsum passages, and more recently with desktop software like Aldus Page of Lorem Ipsum.</p>
                                        </div><!--/.biography_content-->
                                    </div><!--/.col-md-6-->
                                    <div class="col-md-5">
                                        <div class="about_thumb_area">
                                            <figure class="biography_midea biography_thumb image_effect">
                                                <img src="images/about/2.jpg" alt="thumb">
                                            </figure><!--/.biography_midea-->
                                        </div>
                                    </div><!--/.col-md-6-->
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane best_choice_area best_choice_style_two" id="settings2">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="about_thumb_area">
                                            <figure class="biography_midea biography_thumb image_effect">
                                                <img src="images/thumbnil/4.jpg" alt="thumb">
                                            </figure><!--/.biography_midea-->
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <h3 class="tab-title">Why We Are Best Choice?</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publiLorem Ipsum is simply dummy text of the printing and typesetting industry.bled it to make a type specimen book. It ha survived not only five centuries, but also the leap into electronic 1960s with the release of Letraset sheets containing.Lorem Ipsum is the standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <div class="process_setps">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-xs-4">
                                                    <div class="single_process">
                                                        <span class="flaticon-multimedia-1"></span>
                                                        <h3>Unique Designs</h3>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-4">
                                                    <div class="single_process">
                                                        <span class="flaticon-language"></span>
                                                        <h3>Clean Code</h3>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-4">
                                                    <div class="single_process">
                                                        <span class="flaticon-telemarketer"></span>
                                                        <h3>24/7 support</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Services Area -->
    </section>
    <!-- End page section area -->
    
    <?php get_footer( ) ?>
