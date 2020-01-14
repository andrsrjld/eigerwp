<?php

/**

 Template Name: career

 */

?>
<?php get_header();?>    

<?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>

   <!-- start page title section -->
		<?php if ( get_field( 'cover_background' ) ) { ?>
		<!-- start about section --> 
        <section class="wow fadeIn bg-medium-light-gray" style="background-image: url('<?php the_field( 'cover_background' ); ?>');background-size: 100%;">
            <div class="container">
                <div class="row">
					<div class="col-12 page-title-large d-flex flex-column justify-content-center text-center padding-30px-tb">
                        <!-- start page title -->
                        <h1 class="alt-font text-white-2 font-weight-600 mb-0"><?php the_field( 'cover_title' ); ?></h1>
                        <!-- end page title -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end about section -->
		<?php } ?>
        <!-- end page title section -->

        <!-- start career tabel section -->
        <section class="wow fadeIn career">
            <div class="container">
                <div class="col-lg-12 wrap-career">
                    <div class="col-lg-12 career-input">
					<?php echo do_shortcode('[jobs]');?> 
                    
                </div>
            </div>
        </section>
        <!-- end career tabel section -->
		
		<?php endwhile; endif; ?>
<?php get_footer();?>