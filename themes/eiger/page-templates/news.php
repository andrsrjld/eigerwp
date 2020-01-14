<?php

/**

 Template Name: news

 */

?>

<?php get_header();?>

        <!-- start page title section -->
		<?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
        <section class="wow fadeIn parallax news-top">
		
			<?php if ( have_rows( 'header_left_repeater' ) ) : ?>
			<?php while ( have_rows( 'header_left_repeater' ) ) : the_row(); ?>
            <div class="col-lg-3 col-3 n-top">
				<?php if ( get_sub_field( 'left_image' ) ) { ?>
					<img src="<?php the_sub_field( 'left_image' ); ?>" />
				<?php } ?>
                <div class="col-lg-6 n-content">
                    <h6><?php the_sub_field( 'left_category' ); ?></h6>
                    <p><?php the_sub_field( 'left_description' ); ?></p>
                </div>
            </div>
			<?php endwhile; ?>
			<?php else : ?>
			<?php // no rows found ?>
			<?php endif; ?>
			
			<?php if ( have_rows( 'header_center_repeater' ) ) : ?>
			<?php while ( have_rows( 'header_center_repeater' ) ) : the_row(); ?>
            <div class="col-lg-6 col-6 n-top">
                <img src="<?php the_sub_field( 'center_image' ); ?>" />
                <div class="col-lg-3 col-6 n-content">
                    <h6><?php the_sub_field( 'center_category' ); ?></h6>
                    <p><?php the_sub_field( 'center_description' ); ?></p>
                </div>
            </div>
			<?php endwhile; ?>
			<?php else : ?>
			<?php // no rows found ?>
			<?php endif; ?>
			
			<?php if ( have_rows( 'header_right_repeater' ) ) : ?>
			<?php while ( have_rows( 'header_right_repeater' ) ) : the_row(); ?>
            <div class="col-lg-3 col-3 n-top">
                <img src="<?php the_sub_field( 'right_image' ); ?>" />
                <div class="col-lg-6 n-content">
                    <h6><?php the_sub_field( 'right_category' ); ?></h6>
                    <p><?php the_sub_field( 'right_description' ); ?></p>
                </div>
            </div>
			<?php endwhile; ?>
			<?php else : ?>
			<?php // no rows found ?>
			<?php endif; ?>
			
        </section>
		<?php endwhile; endif; ?>
        <!-- end page title section --> 
		

        <!-- start post content section --> 
        <section id="blog" class="wow fadeIn bg-light-gray half-section last-paragraph-no-margin blog-post-style5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 px-3 p-md-0">
                        <ul class="blog-grid blog-5col gutter-large">
                            <li class="grid-sizer"></li>
                            <!-- start post item -->
                            <?php
                                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                                $latest = new WP_Query('cat=8&posts_per_page=6&paged=' . $paged);
                                if(have_posts()) :while($latest->have_posts()) : $latest->the_post();
                            ?>

                            <li class="grid-item wow fadeInUp last-paragraph-no-margin">
                                <div class="blog-post">
                                    <div class="blog-post-images overflow-hidden">
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?php the_field( 'content_cover' ); ?>" alt="">
                                        </a>
                                        <div class="blog-categories bg-white text-uppercase text-extra-small alt-font"><a href="<?php the_permalink(); ?>"><?php the_category(); ?></a></div>
                                    </div>
                                    <div class="post-details padding-40px-all bg-white md-padding-20px-all">
                                        <div class="blog-hover-color"></div>
                                        <a href="<?php the_permalink(); ?>" class="alt-font post-title text-medium text-extra-dark-gray width-90 d-block lg-width-100 margin-5px-bottom"><?php the_field( 'content_title' ); ?></a>
                                        <div class="author">
                                            <span class="text-medium-gray text-uppercase text-extra-small d-inline-block">by <a href="<?php the_permalink(); ?>" class="text-medium-gray"><?php the_author_posts_link(); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo get_the_date('d M Y'); ?></span>
                                        </div>
                                        <div class="separator-line-horrizontal-full bg-medium-gray margin-seven-tb lg-margin-four-tb"></div>
                                        <p><?php the_field( 'content_shortdesc' ); ?></p>
                                    </div>
                                </div>
                            </li>

                            <?php endwhile;?>
                            
                            <?php else :?>
                               
                            <?php endif;?>
                            <?php wp_reset_query();?>
                            <!-- end post item -->
                        </ul>
                    </div>
                </div>
                <!-- start pagination -->
                <div class=" text-center margin-100px-top md-margin-50px-top wow fadeInUp mw-pagination clearfix">
                    <div class="pagination text-small text-uppercase text-extra-dark-gray">
                        <ul class="mx-auto">
                            <li><a href="#"><i class="fas fa-long-arrow-alt-left margin-5px-right d-none d-md-inline-block"></i> Prev</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">Next <i class="fas fa-long-arrow-alt-right margin-5px-left d-none d-md-inline-block"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- end pagination -->
            </div>
        </section>
        <!-- end post content section --> 
 
<?php get_footer();?>