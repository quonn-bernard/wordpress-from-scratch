<?php
/**
 * Template Name: Home Page Full Width
 *
 * Template for displaying home page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */
?>

<?php get_header(); ?>
    <!-- For Sticky header -->
    <div id="sticky-header"></div>

    <!-- Start slider area -->
    <div class="slider">
        <div class="slider_inner owl-carousel">
            
            <!-- Start slider item -->
            <div class="slider_item slider_style_two bg_overlay">
                <div class="slider_bg_thumb bg-image" style="background-image: url(<?php the_field('banner_image'); ?>);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-10 col-xs-12">
                            <div class="slider_content text-white">
                                <h1 class="slider_title">EXPOSING OUR YOUTH <br>TO THE <span class="text-yellow">ARTS</span></h1>
                                <p class="slider_subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry tandard dummy text ever since </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End slider item -->
            
            <!-- Start slider item -->
            <div class="slider_item slider_style_two bg_overlay">
                <div class="slider_bg_thumb bg-image" style="background-image: url(<?php the_field('banner_image_2'); ?>);"></div>
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
        <div class="about-area about-style-two mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="smudge_tab">
                            <!--Start Smudge Tab Nav -->
                            <ul class="nav smudge_tab_nav" role="tablist">
                                <li class="active mr-md-1" style=" background-position: center!important; background-size: cover!important;background: linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.9)), url(<?php the_field('banner_bottom_box_bg_img_1') ?>)">
                                    <a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                                    <i class="fa fa-heart" style="color: gold;"> </i><?php the_field('banner_bottom_box_header_1') ?>
                                        <p class="h3"><?php the_field('banner_bottom_box_subheader_1') ?></p>
                                    </a>
                                </li>
                                <li class="mr-md-1" style=" background-position: center!important; background-size: cover!important;background: linear-gradient(rgba(255,215,0,.8),rgba(255,215,0,1)), url(<?php the_field('banner_bottom_box_bg_img_2') ?>)">
                                    <a style="color: black" href="#profile" aria-controls="profile" role="tab" data-toggle="tab" >
                                        <i class="fa fa-child" style="color: white;"></i> <?php the_field('banner_bottom_box_header_2') ?>
                                        <p><?php the_field('banner_bottom_box_subheader_2') ?></p>
                                    </a>
                                </li>
                                <li class="mr-md-1" style=" background-position: center!important; background-size: cover!important;background: linear-gradient(rgba(255,215,0,.8),rgba(255,215,0,1)), url(<?php the_field('banner_bottom_box_bg_img_3') ?>)">
                                    <a style="color: black" href="#messages" aria-controls="messages" role="tab" data-toggle="tab">
                                    <i class="fa fa-globe" style="color: white;"></i> <?php the_field('banner_bottom_box_header_3') ?>
                                        <p><?php the_field('banner_bottom_box_subheader_3') ?></p>
                                    </a>
                                </li>
                                <li class="" style=" background-position: center!important; background-size: cover!important;background: linear-gradient(rgba(255,215,0,.8),rgba(255,215,0,1)), url(<?php the_field('banner_bottom_box_bg_img_4') ?>)">
                                    <a style="color: black" href="#messages" aria-controls="messages" role="tab" data-toggle="tab">
                                    <i class="fa fa-calendar" style="color: white;"></i> <?php the_field('banner_bottom_box_header_4') ?>
                                        <p><?php the_field('banner_bottom_box_subheader_4') ?></p>
                                    </a>
                                </li>
                            </ul><!-- End Smudge Tab Nav -->
                            
                            <!-- Start Tab Content -->
                            <!--  -->
                                
                                <!-- <div role="tabpanel" class="tab-pane best_choice_area" id="messages">
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
                                                </figure>/.biography_midea
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                
                            </div><!-- End Tab Content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start About Area -->
        <div class="about-area about-style-one">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="about_thumb_area shadow__black">
                            <figure class="about_thumb image_effect">
                                <img src="<?php the_field('section_2_img'); ?>" alt="thumb">
                                <div class="video__inner">
                            
                                </div>
                            </figure><!--/.about_thumb-->
                            <a class="btn btn-about">More About us<i class="flaticon-right-arrow"></i></a>
                        </div><!--/.about_thumb_area-->
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="about_content section_title">
                            <h4 class="title__heading"><?php the_field('section_2_header'); ?></h4>
                            
                            <p><strong><?php the_field('section_2_p_text_bold'); ?></strong><?php the_field('section_2_p_text'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Area -->
        
        <!-- Start Services Area -->
        <div class="services-area services-style-two mt-85">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="services_info_content">
                        <div class="section_title">
                        </i><h3 class="d-inline title__heading text-capitalize"><?php the_field('programs_section_header'); ?></h3>
                        </div><!--/.section_title-->
                            <p class="text-white services_info_content_p"><?php the_field('programs_section_p_full') ?></p>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="single_service text-left" style=" background-position: center!important; background-size: cover!important;background: linear-gradient(rgba(0,0,0,.8),rgba(0,0,0,.55)), url(<?php the_field('program_section_box_1_bg_img') ?>)" >
                                    <h3><?php the_field('program_section_box_1_title') ?></h3>
                                    <hr/>
                                    <p></p>
                                    <button class="btn btn-sm border-1">LEARN MORE</button>
                                </div>
                            </div><!-- End Single Service -->
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="single_service text-center" style=" background-position: center!important; background-size: cover!important;background: linear-gradient(rgba(0,0,0,.8),rgba(0,0,0,.55)), url(<?php the_field('program_section_box_2_bg_img') ?>)" >
                                    <h3><?php the_field('program_section_box_2_title') ?></h3>
                                    <hr/>
                                    <p>Lorem ipsum dolor.</p>
                                    <button class="btn btn-sm btn-block border-1">LEARN MORE</button>
                                </div>
                            </div><!-- End Single Service -->
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="single_service text-center" style=" background-position: center!important; background-size: cover!important;background: linear-gradient(rgba(0,0,0,.8),rgba(0,0,0,.55)), url(<?php the_field('program_section_box_3_bg_img') ?>)" >
                                    <h3><?php the_field('program_section_box_3_title') ?></h3>
                                    <hr/>
                                    <p>Lorem ipsum dolor.</p>
                                    <button class="btn btn-sm btn-block border-1">LEARN MORE</button>
                                </div>
                            </div><!-- End Single Service -->
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="single_service text-center" style=" background-position: center!important; background-size: cover!important;background: linear-gradient(rgba(0,0,0,.8),rgba(0,0,0,.55)), url(<?php the_field('program_section_box_4_bg_img') ?>)" >
                                    <h3><?php the_field('program_section_box_4_title') ?></h3>
                                    <hr/>
                                    <p>Lorem ipsum dolor.</p>
                                    <button class="btn btn-sm btn-block border-1">LEARN MORE</button>
                                </div>
                            </div><!-- End Single Service -->
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="single_service text-center" style=" background-position: center!important; background-size: cover!important;background: linear-gradient(rgba(0,0,0,.8),rgba(0,0,0,.55)), url(<?php the_field('program_section_box_5_bg_img') ?>)" >
                                    <h3><?php the_field('program_section_box_5_title') ?></h3>
                                    <hr />
                                    <p>Lorem ipsum dolor.</p>
                                    <button class="btn btn-sm btn-block border-1">LEARN MORE</button>
                                </div>
                            </div><!-- End Single Service -->
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="single_service text-center" style=" background-position: center!important; background-size: cover!important;background: linear-gradient(rgba(0,0,0,.8),rgba(0,0,0,.35)), url(<?php the_field('program_section_box_6_bg_img') ?>)" >
                                    <h3><?php the_field('program_section_box_6_title') ?></h3>
                                    <hr/>
                                    <p>Lorem ipsum dolor.</p>
                                    <button class="btn btn-sm btn-block border-1">LEARN MORE</button>
                                </div>
                            </div><!-- End Single Service -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Services Area -->
         <!-- Start Counter area -->
         <div class="counter_area" style="border-radius: 5px; border: 1px solid rgba(0,0,0,1); background-position: center!important; background-size: cover!important;background: linear-gradient(to bottom right, rgba(255,215,0, .9),rgba(255,215,0, .9)), url(<?php the_field('numbers__bg_img') ?>">
           <div class="container">
                <div class="row">
                    <!-- Start Single Counter -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="single_counter text-center">
                            <h3 class="counter">29</h3>
                            <h4>Active Years</h4>
                        </div>
                    </div><!-- End Single Counter -->
                    <!-- Start Single Counter -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="single_counter text-center">
                            <h3 class="counter">38</h3>
                            <h4>Shows Performed</h4>
                        </div>
                    </div><!-- End Single Counter -->
                    <!-- Start Single Counter -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="single_counter text-center">
                            <h3 class="counter">492</h3>
                            <h4>Academy Grads</h4>
                        </div>
                    </div><!-- End Single Counter -->
                    <!-- Start Single Counter -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="single_counter text-center">
                            <h3 class="counter">40</h3>
                            <h4>Current Enrollemnt</h4>
                        </div>
                    </div><!-- End Single Counter -->
                </div>
            </div>
        </div><!-- End Counter area -->

        <!-- Start Working Area -->
        <div id="work" class="working_area working_style_two bg-white">
            <div class="container">
                <div class="row mb-0">
                    <div class="col-md-12 col-sm-12">
                        <div class="section_title text-center">
                            <h2 class="title__heading text-capitalize">Get Involved</h2>
                            <p>Simply Dummy text of the Printing</p>
                        </div><!--/.section_title-->
                    </div>
                </div><!--/.row-->
                 <!-- Start footer widgets area -->
        <div class="footer-widgets-area">
            <div class="container">
                
                <div class="row">
                    <div class="col-md-10 col-md-offset-1" >
                        <!-- Start single contact info -->
                        <div class="single_contact_info" style="border-radius: 5px; border: 1px solid rgba(0,0,0,1); background-position: center!important; background-size: cover!important;background: linear-gradient(to bottom right, rgba(255,215,0,.65),rgba(255,215,0.65)), url(<?php the_field('contact_section_location_info_bg') ?>">
                            <span class="icon flaticon-placeholder"></span>
                            <div class="info">
                                <h3><strong>YAG Community Arts:</strong> 619 N. 7th Street, Memphis, TN</h3>
                                <h3><strong>Satelite Site A:</strong> 1926 First Commercial Dr. N, Southaven, MS</h3>
                                <h3><strong>Satelite Site B:</strong> 1391 Ferguson Street, Memphis, TN</h3>
                            </div>
                        </div><!-- End single contact info -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End footer widgets area -->
        
                <!-- Start Contact Form area -->
        <div class="col-md-offset-1 contact-form-area mt-0">
            <div class="container">
                <div class="row">
				<div class="col-md-10">
                        <form id="contact_form" class="default_form contact_form shadow__black" name="contactform">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="contact-title">Get in Touch </h2>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input name="name" id="first_name" placeholder="Your Name" class="form-controllar" type="text">
                                    </div><!--/.form-group-->   
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input name="email" id="email" placeholder="Your Emaill" class="form-controllar" type="email">
                                    </div><!--/.form-group-->  
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input name="mobile" id="mobile" placeholder="Mobile Number" class="form-controllar" type="text">
                                    </div><!--/.form-group-->   
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input name="sub" id="sub" placeholder="Subject" class="form-controllar" type="text">
                                    </div><!--/.form-group-->  
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-controllar" placeholder="Your Message"></textarea>
                                    </div><!--/.form-group-->
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group-btn">
                                        <button id="submit" type="submit" class="btn btn-default">SUBMIT</button>
                                    </div><!--/.form-group-btn-->
                                </div>
                            </div>   
                        </form>
                    </div>
                    <!-- <div class="col-md-6">
                        <div id="gmaps"></div>
                    </div> -->
                    
                </div>
            </div>
        </div><!-- End Contact Form area -->
            </div>
        </div><!-- End Working Area -->
        
        <!-- Start Biography Area -->

        
        <!-- Start Brand Clients Area -->
        <div class="brand_clients_area mt-90">
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="section_title text-center">
                            <h2 class="title__heading text-capitalize">Thanks To Our Sponsors!</h2>
                            <p>Community Partners that make YAG Possible!</p>
                        </div><!--/.section_title-->
                    </div>
                </div><!--/.row-->
                <div class="row">
                     <!-- Start Single Brand -->
                     <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="single_brand shadow__black text-center">
                            <div class="single_brand_inner">
                            <img src="<?php the_field('mploy_logo') ?>" alt="thmub">
                            </div>
                            <h4 class="mt-20 mb-0 pb-0"> <i class="fa fa-building"> </i> <?php the_field('mploy_logo_name');?></h4>
                        </div>
                    </div><!-- End Single Brand -->
                    <!-- Start Single Brand -->
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="single_brand shadow__black text-center">
                            <div class="single_brand_inner">
                            <img src="<?php the_field('havana_logo') ?>" alt="thmub">
                            </div>
                            <h4 class="mt-20 mb-0 pb-0"><i class="fa fa-building"> </i> <?php the_field('havanna_logo_name');?></h4>
                        </div>
                    </div><!-- End Single Brand -->
                    <!-- Start Single Brand -->
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="single_brand shadow__black text-center">
                            <div class="single_brand_inner">
                            <img src="<?php the_field('sponsor_logo_1') ?>" alt="thmub">
                            </div>
                            <h4 class="mt-20 mb-0 pb-0 bg-accent"><i class="fa fa-building"> </i> <?php the_field('sponsor_logo_1_name');?></h4>
                        </div>
                    </div><!-- End Single Brand -->
                     <!-- Start Single Brand -->
                     <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="single_brand shadow__black text-center">
                            <div class="single_brand_inner">
                            <img src="<?php the_field('sponsor_logo_2') ?>" alt="thmub">
                            </div>
                            <h4 class="mt-20 mb-0 pb-0"><i class="fa fa-building"> </i> <?php the_field('sponsor_logo_2_name');?></h4>
                        </div>
                    </div><!-- End Single Brand -->
                      <!-- Start Single Brand -->
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="single_brand shadow__black text-center">
                            <div class="single_brand_inner">
                            <img src="<?php the_field('sponsor_logo_3') ?>" alt="thmub">
                            </div>
                            <h4 class="mt-20 mb-0 pb-0"><i class="fa fa-building"> </i> <?php the_field('sponsor_logo_3_name');?></h4>
                        </div>
                    </div><!-- End Single Brand -->
                    <!-- Start Single Brand -->
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="border single_brand shadow__black text-center">
                            <h4 class="mt-20 mb-0 pb-0">THIS COULD BE YOUR LOGO </h4>
                            <button id="submit" class="btn btn-default">BECOME A SPONSOR</button>
                        </div>
                    </div><!-- End Single Brand -->
                </div>
            </div>
        </div>
        <!-- End Brand Clients Area -->
    </section>
    <!-- End page section area -->
    
    <?php get_footer( ) ?>


        <!-- if( have_posts()){
            while (have_posts()){
                the_post();
                get_template_part('partials/posts/content-excerpt', 'excerpt');
            }
        }
     -->
