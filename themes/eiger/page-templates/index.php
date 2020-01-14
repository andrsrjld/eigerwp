<?php

/**

 Template Name: home1

 */
the_content();
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



        <!-- start about section --> 
        <?php if ( have_rows( 'about_setting' ) ) : ?>
             <?php while ( have_rows( 'about_setting' ) ) : the_row(); ?>
                <?php if ( get_sub_field( 'about_banner_image' ) ) { ?>
                <section class="wow fadeIn bg-medium-light-gray index-2" style="background-image: url('<?php the_sub_field( 'about_banner_image' ) ?>');background-size: 100%;">
                <?php } ?>
                    <div class="container">
                        <div class="row"> 
                            <div class="col-12 col-lg-6 offset-lg-6 wow fadeIn">
                                <div class="row m-0">
                                    <div class="text-about-us col-12 text-center text-lg-left sm-no-padding-lr last-paragraph-no-margin margin-60px-bottom md-margin-30px-bottom"> 
                                        <h2 class="alt-font text-extra-dark-gray font-weight-600 right"><?php the_sub_field( 'about_banner_title' ); ?></h2>
                                        <p class="width-100 md-width-100 eiger-desc left" style="margin-left:0"><?php the_sub_field( 'about_banner_desc' ); ?></p>
                                        <a href="<?php the_permalink(); ?>/about">
											<button class="btn btn-about-us">Learn More</button>
										</a>
                                    </div>                          
                                </div>
                            </div> 
                        </div>
                    </div>
                </section>
                <?php endwhile; ?>
        <?php else : ?>
        	<?php // no rows found ?>
        <?php endif; ?>
        <!-- end about section -->



        <!-- start services section -->
        <div class="wow fadeIn brands">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8 margin-five-bottom text-center last-paragraph-no-margin">

                        <?php if ( have_rows( 'our_brand_text' ) ) : ?>
                        	<?php while ( have_rows( 'our_brand_text' ) ) : the_row(); ?>
                                                <h5 class="alt-font text-extra-dark-gray font-weight-600"><?php the_sub_field( 'our_brand_title' ); ?></h5>
                                                <p class="width-80 d-inline-block sm-width-100 we-delve-deep-into-l"><?php the_sub_field( 'our_brand_desc' ); ?></p>
                        <?php endwhile; ?>
                        <?php else : ?>
                        	<?php // no rows found ?>
                        <?php endif; ?>

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
                    <?php if ( have_rows( 'eiger' ) ) : ?>
                    	<?php while ( have_rows( 'eiger' ) ) : the_row(); ?>
                    		<?php if ( get_sub_field( 'eiger_background' ) ) { ?>
                                        <div class="col-12 col-lg-3 p-0 align-items-center cover-1 cover-background position-relative md-height-500px sm-height-300px wow fadeIn" style="background: transparent url('<?php the_sub_field( 'eiger_background' ) ?>');margin:0 auto;">
                                        <?php } ?>    
                                        <?php if ( get_sub_field( 'eiger_logo' ) ) { ?>
                                            <a href="<?php the_sub_field( 'eiger_link' ); ?>">
                                                <img src="<?php the_sub_field( 'eiger_logo' ); ?>" style="left:12%;top:20%;align-items: center!important;" />
                                            </a>
                                        <?php } ?>
                                        </div>
                            <?php endwhile; ?>
                        <?php else : ?>
                    <?php // no rows found ?>
                    <?php endif; ?>
                    <!-- end features item -->
                    <!-- start features item -->
                    <?php if ( have_rows( 'bodypack' ) ) : ?>
                        <?php while ( have_rows( 'bodypack' ) ) : the_row(); ?>
                        	<?php if ( get_sub_field( 'bodypack_background' ) ) { ?>
                                        <div class="col-12 col-lg-3 p-0 align-items-center cover-1 cover-background position-relative md-height-500px sm-height-300px wow fadeIn" style="background: transparent url('<?php the_sub_field( 'bodypack_background' ) ?>');margin:0 auto;">
                                        <?php } ?>    
                                        <?php if ( get_sub_field( 'bodypack_logo' ) ) { ?>
                                            <a href="<?php the_sub_field( 'bodypack_lyric' ); ?>">
                                                <img src="<?php the_sub_field( 'bodypack_logo' ); ?>" style="left:35%;top:32%;" />
                                            </a>
                                        <?php } ?>
                                        </div>
                            <?php endwhile; ?>
                        <?php else : ?>
                    <?php // no rows found ?>
                    <?php endif; ?>
                    <!-- end features item -->
                    <!-- start features item -->
                    <?php if ( have_rows( 'export' ) ) : ?>
                        <?php while ( have_rows( 'export' ) ) : the_row(); ?>
                        	<?php if ( get_sub_field( 'export_background' ) ) { ?>
                                        <div class="col-12 col-lg-3 p-0 align-items-center cover-1 cover-background position-relative md-height-500px sm-height-300px wow fadeIn" style="background: transparent url('<?php the_sub_field( 'export_background' ) ?>');margin:0 auto;">
                                        <?php } ?>    
                                        <?php if ( get_sub_field( 'export_logo' ) ) { ?>
                                            <a href="<?php the_sub_field( 'export_link' ); ?>">
                                                <img src="<?php the_sub_field( 'export_logo' ); ?>" style="left:33%;top:45%;" />
                                            </a>
                                        <?php } ?>
                                        </div>
                            <?php endwhile; ?>
                        <?php else : ?>
                    <?php // no rows found ?>
                    <?php endif; ?>
                    <!-- end features item -->
                    <!-- start features item -->
                    <?php if ( have_rows( 'outlive' ) ) : ?>
                        <?php while ( have_rows( 'outlive' ) ) : the_row(); ?>
                        	<?php if ( get_sub_field( 'outlive_background' ) ) { ?>
                                        <div class="col-12 col-lg-3 p-0 align-items-center cover-4 cover-background position-relative md-height-500px sm-height-300px wow fadeIn" style="background: transparent url('<?php the_sub_field( 'outlive_background' ) ?>');margin:0 auto;">
                                        <?php } ?>    
                                        <?php if ( get_sub_field( 'outlive_logo' ) ) { ?>
                                            <a href="<?php the_sub_field( 'outlive_link' ); ?>">
                                                <img src="<?php the_sub_field( 'outlive_logo' ); ?>" style="left:35%;top:35%;" />
                                            </a>
                                        <?php } ?>
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
        <?php endwhile; endif; ?>

        <!-- start portfolio section -->
        <section class="wow fadeIn padding-90px-top md-padding-50px-top sm-padding-30px-top pb-0">
            <div class="container">
                <div class="row lat-event">
                    <h5>Latest Events</h5>
                    <div class="col-12">
                        <!-- start filter navigation -->
                        <ul class="portfolio-filter nav nav-tabs justify-content-center border-0 portfolio-filter-tab-1 font-weight-600 alt-font text-uppercase text-center margin-80px-bottom text-small md-margin-40px-bottom sm-margin-20px-bottom">
                            <?php
                                $no = 1;
                                $args = array(
                                    'child_of'=>8,
                                    'hide_empty'=> 0,
                                    'orderby' => 'name',
                                    'order' => 'ASC'
                                );
                                $categories = get_categories($args);
                                foreach($categories as $category) { 
                            ?>
                            <li class="nav <?php if($no==1){ echo'active';} ?>">
                                <a href="javascript:void(0);" data-filter=".<?php echo $category->term_id ; ?>" class="light-gray-text-link text-very-small"  role="tab" data-toggle="tab"><?php echo $category->name ; ?></a>
                            </li>
                            <?php $no++; } ?>
                        </ul>
                        
                        <div class="container-fluid">
                <div class="row">
                    <div class="col-12 px-0 sm-padding-15px-lr">
                        <div class="filter-content overflow-hidden">
                            <ul class="portfolio-grid work-4col gutter-medium hover-option7">
                        <div class="row portfolio-grid work-4col">
                            <?php
                                $no = 1;
                                $args = array(
                                    'child_of'=>8,
                                    'hide_empty'=> 0,
                                    'orderby' => 'name',
                                    'order' => 'ASC'
                                );
                                $categories = get_categories($args);
                                foreach($categories as $category) { 
                            ?>
                            <li class="grid-sizer"></li>
                                
                                    <?php
                                        $latest = new WP_Query('cat='.$category->term_id.'&posts_per_page=12&paged=' . $paged);
                                        if(have_posts()) :while($latest->have_posts()) : $latest->the_post();
                                    ?>
                                    <li role="tabpanel" class="grid-item web branding design wow fadeInUp <?php echo $category->term_id ; ?> <?php if($no==1){ echo'active show';} ?>" id="cat<?php echo $category->term_id ; ?>">
                                    <a href="<?php the_permalink(); ?>">
                                        <figure>
                                            <div class="portfolio-img"><img src="<?php the_field( 'content_cover' ); ?>" alt=""/></div>
                                            <figcaption>
                                                <div class="portfolio-hover-main text-center last-paragraph-no-margin">
                                                    <div class="portfolio-hover-box align-middle">
                                                        <div class="portfolio-hover-content position-relative">
                                                            <span class="font-weight-600 alt-font text-uppercase margin-one-bottom d-block text-extra-dark-gray"><?php the_field( 'content_title' ); ?></span>
                                                            <p class="text-medium-gray text-uppercase text-extra-small" style="text-align: center;"><?php the_author_posts_link(); ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                    </li>
                                    <?php endwhile; endif; ?>
                            
                            <?php $no++; } ?>
                        </div>                                                             
                        <!-- end filter navigation -->
                    </div>
                </div>
            </div>
            <!-- start filter content -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 px-0 sm-padding-15px-lr">
                        <div class="filter-content overflow-hidden">
                            <ul class="blog-grid blog-5col gutter-large">
                            <li class="grid-sizer"></li>
                            <!-- start post item -->
                            <?php
                                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                                $latest = new WP_Query('cat=8&posts_per_page=6&paged=' . $paged);
                                if(have_posts()) :while($latest->have_posts()) : $latest->the_post();
                            ?>
                            
                            <?php endwhile;?>
                            
                            <?php else :?>
                               
                            <?php endif;?>
                            <?php wp_reset_query();?>
                            <!-- end post item -->
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end filter content -->
        </section>
        <!-- end portfolio section -->   

        <?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
        <!-- start parallax feature box -->
        <section class="p-0 wow fadeIn bg-light-gray join-collab">
            <div class="container-fluid">
                <div class="row"> 
                
                    <?php if ( have_rows( 'join_our_team' ) ) : ?>
                        <?php while ( have_rows( 'join_our_team' ) ) : the_row(); ?>
                            <?php if ( get_sub_field( 'join_background' ) ) { ?>
                                    <div class="col-12 col-lg-6 join-collabs md-height-300px wow fadeInLeft" style="background-image:url('<?php the_sub_field( 'join_background' ) ?>'); object-fit: cover; width:100px;">
                                    <?php } ?>
                                            <div class="wrap-jc col-lg-8">
                                                <h5 class="join-our-team"><?php the_sub_field( 'join_title' ); ?></h5>
                                                <p><?php the_sub_field( 'join_desc' ); ?></p>
                                                <a href="<?php the_sub_field( 'join_link' ); ?>"><button>Join Here</button></a>
                                            </div>
                                        </div> 
                                <?php endwhile; ?>
                            <?php else : ?>
                    	<?php // no rows found ?>
                    <?php endif; ?>
                            
                    <?php if ( have_rows( 'collaborate_with_us' ) ) : ?>
                        <?php while ( have_rows( 'collaborate_with_us' ) ) : the_row(); ?>
                            <?php if ( get_sub_field( 'collaborate_backgroud' ) ) { ?>
                                        <div class="col-12 col-lg-6 join-collabs md-height-300px wow fadeInRight" style="background-image:url('<?php the_sub_field( 'collaborate_backgroud' ) ?>'); object-fit: fill;">
                                        <?php } ?>
                                            <div class="wrap-jc col-lg-8">
                                                <h5 class="join-our-team"><?php the_sub_field( 'collaborate_title' ); ?></h5>
                                                <p><?php the_sub_field( 'collaborate_desc' ); ?></p>
                                                <a href="<?php the_sub_field( 'collaborate_link' ); ?>"><button>Collaborate Here</button></a>
                                            </div>
                                        </div>
                                <?php endwhile; ?>
                            <?php else : ?>
                    	<?php // no rows found ?>
                    <?php endif; ?>

                </div>
            </div>
        </section>
        <!-- end parallax feature box --> 
        <?php endwhile; endif; ?>



<?php get_footer();?>