<?php

/**

 Template Name: about

 */

?>
<?php get_header();?>    
<?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
        <!-- start slider section --> 
        <div class="header-landing-page col-12">
<?php if ( have_rows( 'banner_setting' ) ) : ?>
	<?php while ( have_rows( 'banner_setting' ) ) : the_row(); ?>
		<?php if ( get_sub_field( 'banner_image' ) ) { ?>
            <img src="<?php the_sub_field( 'banner_image' ); ?>" />
            <?php } ?>
            <div class="landing-page-text">
                <h2><?php the_sub_field( 'banner_title' ); ?></h2>
            </div>
<?php endwhile; ?>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
        </div>
        <!-- end slider section -->
        <!-- start parallax menu -->
        <div class="wow fadeIn">
            <div class="container">
                <div class="parallax-menu">
                    <div class="col-lg-8 col-sm-10">
                        <ul class="par-menu">
                            <a href="#history"><li>HISTORY</li></a>
                            <a href="#vimi"><li>VISION & MISSION</li></a>
                            <a href="#pl"><li>PACK LEADERS</li></a>
                            <a href="#culture"><li>CULTURE</li></a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end parallax menu -->
        <!-- start storytime section --> 
        <div class="wow fadeIn md-no-background-img bg-medium-light-gray" id="history">
            <div class="con-storytime">
                <div class="timeline">
                  <div class="swiper-container">
                    <div class="swiper-wrapper">

<?php if ( have_rows( 'slider_setting' ) ) : ?>
	<?php while ( have_rows( 'slider_setting' ) ) : the_row(); ?>
		<?php if ( get_sub_field( 'swiper_image' ) ) { ?>

                      <div class="swiper-slide" style="background-image: url('<?php the_sub_field( 'swiper_image' ); ?>');" data-year="<?php the_sub_field( 'swiper_year' ); ?><div class='bullet-swiper'></div>">
                      <?php } ?>
                        <div class="swiper-slide-content"><span class="timeline-year"><?php the_sub_field( 'swiper_year' ); ?></span>
                          <h4 class="timeline-title"><?php the_sub_field( 'swiper_title' ); ?></h4>
                          <p class="timeline-text"><?php the_sub_field( 'swiper_description' ); ?></p>
                        </div>
                      </div>

            <?php endwhile; ?>
        <?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
					</div>
                    <div class="line-swiper"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-pagination"></div>
                  </div>
                </div>
              </div>
			  </div>
        </div>
        <!-- end storytime section -->
		
		
        
<?php if ( have_rows( 'history_setting' ) ) : ?>
	<?php while ( have_rows( 'history_setting' ) ) : the_row(); ?>
        <?php if ( get_sub_field( 'history_background' ) ) { ?>
            
        <!-- start about section --> 
        <div class="wow fadeIn bg-medium-light-gray history2" style="background-image: url('<?php the_sub_field( 'history_background' ) ?>');background-size: 100%;">
        <?php } ?>
            <div class="container">
                <div class="row"> 
                    <div class="col-8 col-lg-6 offset-lg-6 col-sm-8 wow fadeIn histories2">
                        <div class="row m-0">
                            <div class="text-about-us col-12 text-center text-lg-left sm-no-padding-lr last-paragraph-no-margin"> 
                                <p class="width-100 md-width-100 about-history"><?php the_sub_field( 'history_desc' ); ?>
                                </p>
                            </div>                          
                        </div>
                    </div> 
                </div>
            </div>
        </div>
         <!-- end about section -->
         <?php endwhile; ?>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>


        <!-- start section -->
        <section class="p-0 wow fadeIn" id='vimi'>
            <div class="container-fluid">
                <div class="row">
                    <!-- start features item -->
<?php if ( have_rows( 'our_vision' ) ) : ?>
	<?php while ( have_rows( 'our_vision' ) ) : the_row(); ?>
					<?php if ( get_sub_field( 'vision_bg' ) ) { ?>
                    <div class="col-12 col-lg-6 col-md-6 p-0 align-items-center cover-1 cover-background position-relative sm-height-300px wow fadeIn" style="background: transparent url('<?php the_sub_field( 'vision_bg' ); ?>');margin:0 auto;">
                    <?php } ?>
						<div class="col-lg-5 vimi">
                            <h5><b><?php the_sub_field( 'vision_title' ); ?></b></h5>
                            <p><?php the_sub_field( 'vision_desc' ); ?></p>
                        </div>
                    </div>
					<?php endwhile; ?>
			<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
                    <!-- end features item -->
                    <!-- start features item -->
<?php if ( have_rows( 'our_mission' ) ) : ?>
	<?php while ( have_rows( 'our_mission' ) ) : the_row(); ?>
		<?php if ( get_sub_field( 'mission_bg' ) ) { ?>
                    <div class="col-12 col-lg-6 col-md-6 p-0 align-items-center cover-background position-relative sm-height-300px wow fadeIn" style="background: transparent url('<?php the_sub_field( 'mission_bg' ); ?>');margin:0 auto;">
                        <?php } ?>
						<div class="col-lg-6 vimi">
                            <h5><b><?php the_sub_field( 'mission_title' ); ?></h5></b>
                            <p><?php the_sub_field( 'mission_desc' ); ?></p>
                        </div>
                    </div>
					<?php endwhile; ?>
			<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
                    <!-- end features item -->
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start services section -->
        <div class="wow fadeIn brands vimis">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8 text-center last-paragraph-no-margin">
                        <h5 class="alt-font text-extra-dark-gray font-weight-600" id='culture'><?php the_field( 'culture_title' ); ?></h5>
                        <p class="width-80 d-inline-block sm-width-100"><?php the_field( 'culture_desc' ); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end services section -->
        <!-- start section -->
        <section class="p-0 wow fadeIn">
            <div class="container-fluid">
                <div class="row">
                    <!-- start features item -->
                    <div class="col-12 wrap-culture p-0 align-items-center cover-1 cover-culture position-relative wow fadeIn" style="background: transparent url('<?php bloginfo('template_url');?>/assets/img/img-culture-5.png');margin:0 auto;">
                        <div class="col-lg-10 culture-5">
                            <h5><?php the_field( 'culture_1_title' ); ?></h5>
                            <p><?php the_field( 'culture_1_desc' ); ?></p>
                        </div>
                    </div>
                    <!-- end features item -->
                    <!-- start features item -->
                    <div class="col-12 wrap-culture p-0 align-items-center cover-culture position-relative wow fadeIn" style="background: transparent url('<?php bloginfo('template_url');?>/assets/img/img-culture-4.png');margin:0 auto;">
                        <div class="col-lg-10 culture-5">
                            <h5><?php the_field( 'culture_2_title' ); ?></h5>
                            <p><?php the_field( 'culture_2_desc' ); ?></p>
                        </div>
                    </div>
                    <!-- end features item -->
                    <!-- start features item -->
                    <div class="col-12 wrap-culture p-0 align-items-center cover-culture position-relative wow fadeIn" style="background: transparent url('<?php bloginfo('template_url');?>/assets/img/img-culture-3.png');margin:0 auto;">
                        <div class="col-lg-10 culture-5">
                            <h5><?php the_field( 'culture_3_title' ); ?></h5>
                            <p><?php the_field( 'culture_3_desc' ); ?></p>
                        </div>
                    </div>
                    <!-- end features item -->
                    <!-- start features item -->
                    <div class="col-12 wrap-culture p-0 align-items-center cover-culture position-relative wow fadeIn" style="background: transparent url('<?php bloginfo('template_url');?>/assets/img/img-culture-2.png');margin:0 auto;">
                        <div class="col-lg-10 culture-5">
                            <h5><?php the_field( 'culture_4_title' ); ?></h5>
                            <p><?php the_field( 'culture_4_desc' ); ?></p>
                        </div>
                    </div>
                    <!-- end features item -->
                    <!-- start features item -->
                    <div class="col-12 wrap-culture p-0 align-items-center cover-culture position-relative wow fadeIn" style="background: transparent url('<?php bloginfo('template_url');?>/assets/img/img-culture-1.png');margin:0 auto;">
                        <div class="col-lg-10 culture-5">
                            <h5><?php the_field( 'culture_5_title' ); ?></h5>
                            <p><?php the_field( 'culture_5_desc' ); ?></p>
                        </div>
                    </div>
                    <!-- end features item -->
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start services section -->
        <div class="wow fadeIn brands" id='pl'>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8 text-center last-paragraph-no-margin">
                        <h5 class="alt-font text-extra-dark-gray font-weight-600">Pack Leaders</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- end services section -->
        <!-- start about section --> 
		
		<?php endwhile; endif; ?>

        <!-- start blog post style 01 section -->

            <div class="container">
                <div class="row">
                    <!-- start blog post item -->
                    <div class="col-12 col-lg-3 col-md-6 md-margin-four-bottom sm-margin-40px-bottom last-paragraph-no-margin wow fadeInUp">
                        <div class="blog-post blog-post-style1">
                            <div class="blog-post-images overflow-hidden margin-25px-bottom">
                                <a href="#">
                                <?php $leader_photo_1 = get_field( 'leader_photo_1' ); ?>
                                    <?php if ( $leader_photo_1 ) { ?>
                                        <img src="<?php echo $leader_photo_1['url']; ?>" alt="<?php echo $leader_photo_1['alt']; ?>">
                                    <?php } ?>
                                </a>
                            </div>
                            <div class="post-details">
                                <a href="#" class="post-title text-medium text-extra-dark-gray d-block"><?php the_field( 'leader_name_1' ); ?></a>
                                <span class="post-author text-extra-small text-medium-gray text-uppercase d-block margin-10px-bottom sm-margin-5px-bottom"><?php the_field( 'leader_department_1' ); ?></a></span>
                                <div class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb"></div>
                                <p class="post-title text-medium text-extra-dark-gray d-block"><?php the_field( 'leader_history_1' ); ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- end blog post item -->
                    <!-- start blog post item -->
                    <div class="col-12 col-lg-3 col-md-6 md-margin-four-bottom sm-margin-40px-bottom last-paragraph-no-margin wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-post blog-post-style1">
                            <div class="blog-post-images overflow-hidden margin-25px-bottom">
                                <a href="#">
                                <?php $leader_photo_2 = get_field( 'leader_photo_2' ); ?>
                                    <?php if ( $leader_photo_2 ) { ?>
                                        <img src="<?php echo $leader_photo_2['url']; ?>" alt="<?php echo $leader_photo_2['alt']; ?>" />
                                    <?php } ?>
                                </a>
                            </div>
                            <div class="post-details">
                                <a href="#" class="post-title text-medium text-extra-dark-gray d-block"><?php the_field( 'leader_name_2' ); ?></a>
                                <span class="post-author text-extra-small text-medium-gray text-uppercase d-block margin-10px-bottom sm-margin-5px-bottom"><?php the_field( 'leader_department_2' ); ?></a></span>
                                <div class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb"></div> 
                                <p class="post-title text-medium text-extra-dark-gray d-block"><?php the_field( 'leader_history_2' ); ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- end blog post item -->
                    <!-- start blog post item -->
                    <div class="col-12 col-lg-3 col-md-6 sm-margin-40px-bottom last-paragraph-no-margin sm-clear-both wow fadeInUp" data-wow-delay="0.4s">
                        <div class="blog-post blog-post-style1">
                            <div class="blog-post-images overflow-hidden margin-25px-bottom">
                                <a href="#">
                                <?php $leader_photo_3 = get_field( 'leader_photo_3' ); ?>
                                    <?php if ( $leader_photo_3 ) { ?>
                                        <img src="<?php echo $leader_photo_3['url']; ?>" alt="<?php echo $leader_photo_3['alt']; ?>" />
                                    <?php } ?>
                                </a>   
                            </div>
                            <div class="post-details">
                                <a href="#" class="post-title text-medium text-extra-dark-gray d-block"><?php the_field( 'leader_name_3' ); ?></a>
                                <span class="post-author text-extra-small text-medium-gray text-uppercase d-block margin-10px-bottom sm-margin-5px-bottom"><?php the_field( 'leader_department_3' ); ?></a></span>
                                <div class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb"></div>
                                <p class="post-title text-medium text-extra-dark-gray d-block"><?php the_field( 'leader_history_3' ); ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- end blog post item -->
                    <!-- start blog post item -->
                    <div class="col-12 col-lg-3 col-md-6 last-paragraph-no-margin wow fadeInUp" data-wow-delay="0.6s">
                        <div class="blog-post blog-post-style1">
                            <div class="blog-post-images overflow-hidden margin-25px-bottom">
                                <a href="#">
                                <?php $leader_photo_4 = get_field( 'leader_photo_4' ); ?>
                                    <?php if ( $leader_photo_4 ) { ?>
                                        <img src="<?php echo $leader_photo_4['url']; ?>" alt="<?php echo $leader_photo_4['alt']; ?>" />
                                    <?php } ?>
                                </a>
                            </div>
                            <div class="post-details">
                                <a href="#" class="post-title text-medium text-extra-dark-gray d-block"><?php the_field( 'leader_name_4' ); ?></a>
                                <span class="post-author text-extra-small text-medium-gray text-uppercase d-block margin-10px-bottom sm-margin-5px-bottom"><?php the_field( 'leader_department_4' ); ?></a></span>
                                <div class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb"></div>
                                <p class="post-title text-medium text-extra-dark-gray d-block"><?php the_field( 'leader_history_4' ); ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- end blog post item -->
                </div>
            </div>

        <!-- end blog post style 01 section -->

        <!-- end about section -->

        <section class="wow fadeIn padding-50px-top md-padding-50px-top sm-padding-30px-top pb-0">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-12 px-0 sm-padding-15px-lr">
                        <div class="filter-content overflow-hidden">
                        <!-- start filter navigation -->
                        <ul class="justify-content-center border-0 portfolio-filter-tab-1 font-weight-600 alt-font text-uppercase text-center margin-80px-bottom text-small md-margin-40px-bottom sm-margin-20px-bottom nav" id="myTab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Reach Eigerindo</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Reach the Brands</a>
                          </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('<?php the_field( 'company_background' ); ?>');">
            <div class="container">
            
              
                <div class="row justify-content-center">
                    <!-- start contact-form head -->
                    <div class="col-12 col-lg-12 p-0 align-items-center cover-1 cover-company position-relative sm-height-300px wow fadeIn">
                        <div class="col-8 wrap-company">
                            <h5><?php the_field( 'company_title' ); ?></h5>
                            <p><?php the_field( 'company_history' ); ?></p>
                        </div>
                    </div>
                    <!-- end contact-form head -->
                </div>
                <?php the_field( 'contact_form_1' ); ?>
              
            </div>
        </div>


		<!-- start portfolio section -->
        <div class="wow fadeIn padding-10px-top md-padding-50px-top sm-padding-30px-top pb-0">
            <!-- start filter content -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 px-0 sm-padding-15px-lr">
                        <div class="filter-content overflow-hidden">
                            <ul class="portfolio-grid work-4col gutter-medium hover-option7">
                                <li class="grid-sizer"></li>
                                <!-- start portfolio item -->
								
								<?php if ( have_rows( 'company_gallery' ) ) : ?>
									<?php while ( have_rows( 'company_gallery' ) ) : the_row(); ?>
										<li class="grid-item web branding design wow fadeInUp" style="<?php the_sub_field( 'position' ); ?>">
											<a>
												<!-- <figure> -->
													<div class="portfolio-img">
														<?php if ( get_sub_field( 'company_gallery_image' ) ) { ?>
															<img src="<?php the_sub_field( 'company_gallery_image' ); ?>" />
														<?php } ?>
													</div>
												<!-- </figure> -->
											</a>
										</li>
										<!-- end portfolio item -->
										<?php endwhile; ?>
									<?php else : ?>
										<?php // no rows found ?>
								<?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end filter content -->
        </div>
        <!-- end portfolio section -->  

    </div>

    <div class="tab-pane fade active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('<?php the_field( 'company_background' ); ?>');">
            <div class="container">
            
              
                <div class="row justify-content-center">
                    <!-- start contact-form head -->
                    <div class="col-12 col-lg-12 p-0 align-items-center cover-1 cover-company position-relative sm-height-300px wow fadeIn">
                        <div class="col-8 wrap-company">
                            <h5><?php the_field( 'company_title_copy' ); ?></h5>
                            <p><?php the_field( 'company_history_copy' ); ?></p>
                        </div>
                    </div>
                    <!-- end contact-form head -->
                </div>
                <?php the_field( 'contact_form_2' ); ?>
            
            </div>
        </div>


		<!-- start portfolio section -->
        <div class="wow fadeIn padding-10px-top md-padding-50px-top sm-padding-30px-top pb-0">
            <!-- start filter content -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 px-0 sm-padding-15px-lr">
                        <div class="filter-content overflow-hidden">
                            <ul class="portfolio-grid work-4col gutter-medium hover-option7">
                                <li class="grid-sizer"></li>
                                <!-- start portfolio item -->
								
								<?php if ( have_rows( 'company_gallery_copy' ) ) : ?>
									<?php while ( have_rows( 'company_gallery_copy' ) ) : the_row(); ?>
										<li class="grid-item web branding design wow fadeInUp" style="<?php the_sub_field( 'position' ); ?>">
											<a>
												<!-- <figure> -->
													<div class="portfolio-img">
														<?php if ( get_sub_field( 'company_gallery_image' ) ) { ?>
															<img src="<?php the_sub_field( 'company_gallery_image' ); ?>" />
														<?php } ?>
													</div>
												<!-- </figure> -->
											</a>
										</li>
										<!-- end portfolio item -->
										<?php endwhile; ?>
									<?php else : ?>
										<?php // no rows found ?>
								<?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end filter content -->
        </div>
        <!-- end portfolio section --> 

    </div>
</div>
        
<?php get_footer();?>