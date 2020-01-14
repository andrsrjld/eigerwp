<?php

/**

 Template Name: csr

 */

?>
<?php get_header();?>    

<?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
        <!-- start slider section --> 
        <div class="header-landing-page col-12 header-csr">
            <?php the_field( 'youtube_video_embed_link' ); ?>
            <!-- <div class="landing-page-text">
                <h3>Blessing People Through Innovative Lifestyle Business.</h3>
            </div> -->
        </div>
        <!-- end slider section -->
        <!-- start services section -->
        <div class="wow fadeIn brands">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8 margin-five-bottom text-center last-paragraph-no-margin">
                        <h5 class="alt-font text-extra-dark-gray font-weight-600"><?php the_field( 'our_csr_title' ); ?></h5>
                        <p class="width-80 d-inline-block sm-width-100"><?php the_field( 'our_csr_desc' ); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end services section -->
<?php endwhile; endif; ?>
        <!-- section start csr -->
        <div class="wow fadeIn csr-masonry">
            <div class="container">
			<div class="grid grid-csr row">
				<?php
					$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
					$latest = new WP_Query('cat=9&posts_per_page=12&paged=' . $paged);
                    if(have_posts()) :while($latest->have_posts()) : $latest->the_post();
				?>
                
                    <div class="<?php the_field( 'grid_setting' ); ?> grid-item">
					<a href="<?php the_permalink(); ?>">
                        <img src="<?php the_field( 'csr_content_cover_col_4' ); ?> <?php the_field( 'csr_content_cover_col_5' ); ?>" />
                        <p class="csr-title-kecil" style="margin: 10px 0px -5px 0px;"><?php the_title(); ?></p>
					</a>                    
					</div>
                
				<?php endwhile;?>
					<div class="mw-pagination clearfix">
                        <?php
                                echo paginate_links( array(
                                    'format'  => 'page/%#%',
                                    'current' => $paged,
                                    'total'   => $latest->max_num_pages,
                                    'mid_size'        => 4,
                                    'prev_text'       => __('<'),
                                    'next_text'       => __('>')
                                ) );
                        ?>
                    </div>
				<?php else :?>
				<?php endif;?>
				<?php wp_reset_query();?>
				</div>
            </div>
        </div>
        <!-- section end csr -->




        akjshdaskjdhalksjhdalksjhdlkjahds
<?php get_footer();?>