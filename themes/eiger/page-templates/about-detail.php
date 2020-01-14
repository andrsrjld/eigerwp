<?php

/**

 Template Name: about-detail

 */

?>
<?php get_header();?>    
<?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>


        <!-- start slider section --> 
<?php if ( have_rows( 'leader' ) ) : ?>
	<?php while ( have_rows( 'leader' ) ) : the_row(); ?>

		
		<?php if ( have_rows( 'leader_1' )) : ?>
            <div class="header-landing-page col-12">
		    	<?php while ( have_rows( 'leader_1' )) : the_row(); ?>
		    		<?php if ( get_sub_field( 'leader_image' ) ) { ?>
                <img src="<?php the_sub_field( 'leader_image' ); ?>" />
                <?php } ?>
		    </div>
		<section class="leader-detail">
            <div class="landing-page-text-leader-detail">
                <h2><?php the_sub_field( 'leader_name' ); ?></h2>
				<h5><?php the_sub_field( 'leader_department' ); ?></h5>
				<p class="width-100 md-width-100 black"><?php the_sub_field( 'leader_history' ); ?></p>
            </div>
		</section>
        <?php endwhile; ?>
		<?php endif; ?>

        <?php if ( have_rows( 'leader_2' )) : ?>
            <div class="header-landing-page col-12">
		    	<?php while ( have_rows( 'leader_2' )) : the_row(); ?>
		    		<?php if ( get_sub_field( 'leader_image' ) ) { ?>
                <img src="<?php the_sub_field( 'leader_image' ); ?>" />
                <?php } ?>
		    </div>
		<section class="leader-detail">
            <div class="landing-page-text-leader-detail">
                <h2><?php the_sub_field( 'leader_name' ); ?></h2>
				<h5><?php the_sub_field( 'leader_department' ); ?></h5>
				<p class="width-100 md-width-100 black"><?php the_sub_field( 'leader_history' ); ?></p>
            </div>
		</section>


		        <!-- start blog post style 01 section -->
        <section class="wow fadeIn">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-7 text-center margin-100px-bottom sm-margin-40px-bottom">
                        <div class="position-relative overflow-hidden w-100">
                            <span class="text-small text-outside-line-full alt-font font-weight-600 text-uppercase">Blog Post Style 01</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- start blog post item -->
                    <div class="col-12 col-lg-3 col-md-6 md-margin-four-bottom sm-margin-40px-bottom last-paragraph-no-margin wow fadeInUp">
                        <div class="blog-post blog-post-style1">
                            <div class="blog-post-images overflow-hidden margin-25px-bottom">
                                <a href="#">
                                    <img src="images/latest-blog5.jpg" alt="">
                                </a>
                            </div>
                            <div class="post-details">
                                <span class="post-author text-extra-small text-medium-gray text-uppercase d-block margin-10px-bottom sm-margin-5px-bottom">25 April 2017 | by <a href="#" class="text-link-dark-gray">Jay Benjamin</a></span>
                                <a href="#" class="post-title text-medium text-extra-dark-gray width-90 d-block">I like the body. I like to design everything to do with the body.</a>
                                <div class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb"></div>
                                <p class="width-90">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum text...</p>
                            </div>
                        </div>
                    </div>
                    <!-- end blog post item -->
                    <!-- start blog post item -->
                    <div class="col-12 col-lg-3 col-md-6 md-margin-four-bottom sm-margin-40px-bottom last-paragraph-no-margin wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-post blog-post-style1">
                            <div class="blog-post-images overflow-hidden margin-25px-bottom">
                                <a href="#">
                                    <img src="images/latest-blog6.jpg" alt="">
                                </a>
                            </div>
                            <div class="post-details">
                                <span class="post-author text-extra-small text-medium-gray text-uppercase d-block margin-10px-bottom sm-margin-5px-bottom">20 April 2017 | by <a href="#" class="text-link-dark-gray">Herman Miller</a></span>
                                <a href="#" class="post-title text-medium text-extra-dark-gray width-90 d-block">Styles come and go. Design is a language, not a style.</a>
                                <div class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb"></div> 
                                <p class="width-90">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum text...</p>
                            </div>
                        </div>
                    </div>
                    <!-- end blog post item -->
                    <!-- start blog post item -->
                    <div class="col-12 col-lg-3 col-md-6 sm-margin-40px-bottom last-paragraph-no-margin sm-clear-both wow fadeInUp" data-wow-delay="0.4s">
                        <div class="blog-post blog-post-style1">
                            <div class="blog-post-images overflow-hidden margin-25px-bottom">
                                <a href="#">
                                    <img src="images/latest-blog7.jpg" alt="">
                                </a>
                            </div>
                            <div class="post-details">
                                <span class="post-author text-extra-small text-medium-gray text-uppercase d-block margin-10px-bottom sm-margin-5px-bottom">15 march 2017 | by <a href="#" class="text-link-dark-gray">Hugh Macleod</a></span>
                                <a href="#" class="post-title text-medium text-extra-dark-gray width-90 d-block">Recognizing the need is the primary condition for design.</a>
                                <div class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb"></div>
                                <p class="width-90">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum text...</p>
                            </div>
                        </div>
                    </div>
                    <!-- end blog post item -->
                    <!-- start blog post item -->
                    <div class="col-12 col-lg-3 col-md-6 last-paragraph-no-margin wow fadeInUp" data-wow-delay="0.6s">
                        <div class="blog-post blog-post-style1">
                            <div class="blog-post-images overflow-hidden margin-25px-bottom">
                                <a href="#">
                                    <img src="images/latest-blog8.jpg" alt="">
                                </a>
                            </div>
                            <div class="post-details">
                                <span class="post-author text-extra-small text-medium-gray text-uppercase d-block margin-10px-bottom sm-margin-5px-bottom">10 march 2017 | by <a href="#" class="text-link-dark-gray">Jay Benjamin</a></span>
                                <a href="#" class="post-title text-medium text-extra-dark-gray width-90 d-block">Get in over your head as often and as joyfully as possible.</a>
                                <div class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb"></div>
                                <p class="width-90">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum text...</p>
                            </div>
                        </div>
                    </div>
                    <!-- end blog post item -->
                </div>
            </div>
        </section>
        <!-- end blog post style 01 section -->
        <?php endwhile; ?>
		<?php endif; ?>

        
	<?php endwhile; ?>
<?php endif; ?>
        <!-- end slider section -->
		
<?php endwhile; endif; ?>
<?php get_footer();?>