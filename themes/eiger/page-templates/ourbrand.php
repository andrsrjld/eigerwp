

<?php

/**

 Template Name: ourbrand

 */

?>
<?php get_header();?>
<?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>

<!-- start slider section --> 
<div class="header-landing-page col-12">
            <?php if ( get_field( 'banner_background' ) ) { ?>
				<img src="<?php the_field( 'banner_background' ); ?>" />
			<?php } ?>
            <div class="landing-page-text">
                <h3><?php the_field( 'banner_title' ); ?></h3>
            </div>
        </div>
        <!-- end slider section -->
        <!-- start services section -->
        <div class="wow fadeIn brands">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8 margin-five-bottom text-center last-paragraph-no-margin">
                        <h5 class="alt-font text-extra-dark-gray font-weight-600"><?php the_field( 'our_brand_title' ); ?></h5>
                        <p class="width-80 d-inline-block sm-width-100"><?php the_field( 'our_brand_desc' ); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end services section -->
        <!-- start about section --> 
		<?php if ( get_field( 'eiger_background' ) ) { ?>		
        <section class="wow fadeIn bg-brand bg-medium-light-gray" style="background-image: url('<?php the_field( 'eiger_background' ); ?>');background-size: 100%;background-repeat: no-repeat;">
            <?php } ?>
			<div class="container">
                <div class="row brand"> 
                    <div class="col-12 col-lg-6 col-md-6 col-sm-8 wow fadeIn">
                        <div class="row m-0">
                            <div class="text-brand col-12 text-lg-left sm-no-padding-lr last-paragraph-no-margin margin-60px-bottom md-margin-30px-bottom"> 
                                <h4 class="alt-font font-weight-600 brand-title" style="width:80%;margin-bottom: 40px;line-height: 1.5;"><?php the_field( 'eiger_title' ); ?></h4>
                                <p class="width-100 md-width-100"><?php the_field( 'eiger_desc' ); ?></p>
                            </div>                          
                        </div>
                    </div> 
                    <div class="col-12 col-lg-6 col-md-6 col-sm-4 wow fadeIn">
                        <div class="row m-0">
                            <div class="text-brand col-12 text-lg-left sm-no-padding-lr last-paragraph-no-margin margin-60px-bottom md-margin-30px-bottom"> 
                                <div class="col-lg-12 brand-img bi-eiger">
								<?php if ( get_field( 'eiger_logo' ) ) { ?>
                                    <img src="<?php the_field( 'eiger_logo' ); ?>" style="width: 65%;">
								<?php } ?>
                                </div>
                                <a href="<?php the_field( 'link_page' ); ?>"><button class="btn btn-our-brand"><?php the_field( 'eiger_button' ); ?></button></a>
                            </div>                          
                        </div>
                    </div> 
                </div>
            </div>
        </section>
        <!-- end about section -->
        <!-- start services section -->
        <div class="wow fadeIn brands">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8 wrap-store margin-five-bottom text-center last-paragraph-no-margin picklead">
                        <div class="col-lg-6 sum-store fadeInLeft sore-count">
                            <h2 class="sore-count"><?php the_field( 'eiger_retail_store' ); ?></h2>
                            <h4 class="sore-count-title">Retail Store</h4>
                        </div>
                        <div class="col-lg-6 sum-store fadeInRight">
                            <h2 class="sore-count"><?php the_field( 'eiger_online_store' ); ?></h2>
                            <h4 class="sore-count-title">Online Store</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end services section -->
        <!-- start about section --> 
		<?php if ( get_field( 'bodypack_background' ) ) { ?>
        <section class="wow fadeIn bg-brand bg-medium-light-gray" style="background-image: url('<?php the_field( 'bodypack_background' ); ?>');background-size: 100%;background-repeat: no-repeat;">
        <?php } ?>
			<div class="container">
                <div class="row brand"> 
                    <div class="col-12 col-lg-6 col-md-6 col-sm-4 wow fadeIn">
                        <div class="row m-0">
                            <div class="text-brand col-12 text-lg-left sm-no-padding-lr last-paragraph-no-margin margin-60px-bottom md-margin-30px-bottom"> 
                                <div class="col-lg-12 brand-img bi-bodypack">
								<?php if ( get_field( 'bodypack_logo' ) ) { ?>
                                    <img src="<?php the_field( 'bodypack_logo' ); ?>" style="width:35%;margin-bottom: 35px;">
								<?php } ?>
                                </div>
                                <a href="<?php the_field( 'link_page_copy' ); ?>"><button class="btn btn-our-brand"><?php the_field( 'bodypack_button' ); ?></button></a>
                            </div>                          
                        </div>
                    </div> 
                    <div class="col-12 col-lg-6 col-md-6 col-sm-8 wow fadeIn">
                        <div class="row m-0">
                            <div class="text-brand col-12 text-lg-left sm-no-padding-lr last-paragraph-no-margin margin-60px-bottom md-margin-30px-bottom"> 
                                <h4 class="alt-font font-weight-600 brand-title" style="width:80%;margin-bottom: 40px;line-height: 1.5;"><?php the_field( 'bodypack_title' ); ?></h4>
                                <p class="width-100 md-width-100"><?php the_field( 'bodypack_desc' ); ?></p>
                            </div>                          
                        </div>
                    </div> 
                </div>
            </div>
        </section>
        <!-- end about section --> 
        <!-- start services section -->
        <div class="wow fadeIn brands">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8 wrap-store margin-five-bottom text-center last-paragraph-no-margin picklead">
                        <div class="col-lg-6 sum-store fadeInLeft">
                            <h2 class="sore-count"><?php the_field( 'bodypack_retail_store' ); ?></h2>
                            <h4 class="sore-count-title">Retail Store</h4>
                        </div>
                        <div class="col-lg-6 sum-store fadeInRight">
                            <h2 class="sore-count"><?php the_field( 'bodypack_online_store' ); ?></h2>
                            <h4 class="sore-count-title">Online Store</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end services section -->
        <!-- start about section --> 
		<?php if ( get_field( 'export_background' ) ) { ?>
        <section class="wow fadeIn bg-brand bg-medium-light-gray" style="background-image: url('<?php the_field( 'export_background' ); ?>');background-size: 100%;background-repeat: no-repeat;">
		<?php } ?>
			<div class="container">
                <div class="row brand"> 
                    <div class="col-12 col-lg-6 col-md-6 col-sm-8 wow fadeIn">
                        <div class="row m-0">
                            <div class="text-brand col-12 text-lg-left sm-no-padding-lr last-paragraph-no-margin margin-60px-bottom md-margin-30px-bottom"> 
                                <h4 class="alt-font font-weight-600 brand-title" style="width:80%;margin-bottom: 40px;line-height: 1.5;"><?php the_field( 'export_title' ); ?></h4>
                                <p class="width-100 md-width-100"><?php the_field( 'export_desc' ); ?></p>
                            </div>                          
                        </div>
                    </div> 
                    <div class="col-12 col-lg-6 col-md-6 col-sm-4 wow fadeIn">
                        <div class="row m-0">
                            <div class="text-brand col-12 text-lg-left sm-no-padding-lr last-paragraph-no-margin margin-60px-bottom md-margin-30px-bottom"> 
                                <div class="col-lg-12 brand-img bi-export">
								<?php if ( get_field( 'export_logo' ) ) { ?>
									<img src="<?php the_field( 'export_logo' ); ?>" style="width:45%;padding: 150px 0 50px 0;"/>
								<?php } ?>
                                </div>
                                <a href="<?php the_field( 'link_page_copy2' ); ?>"><button class="btn btn-our-brand"><?php the_field( 'export_button' ); ?></button></a>
                            </div>                          
                        </div>
                    </div> 
                </div>
            </div>
        </section>
        <!-- end about section --> 
        <!-- start services section -->
        <div class="wow fadeIn brands">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8 wrap-store margin-five-bottom text-center last-paragraph-no-margin picklead">
                        <div class="col-lg-6 sum-store fadeInLeft">
                            <h2 class="sore-count"><?php the_field( 'export_retail_shop' ); ?></h2>
                            <h4 class="sore-count-title">Retail Store</h4>
                        </div>
                        <div class="col-lg-6 sum-store fadeInRight">
                            <h2 class="sore-count"><?php the_field( 'export_online_shop' ); ?></h2>
                            <h4 class="sore-count-title">Online Store</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end services section -->
        <!-- start about section --> 
        <section class="wow fadeIn bg-brand bg-medium-light-gray" style="background-image: url('<?php the_field( 'outlive_bg' ); ?>');background-size: 100%;background-repeat: no-repeat;">
            <div class="container">
                <div class="row brand"> 
                    <div class="col-12 col-lg-6 col-md-6 col-sm-4 wow fadeIn">
                        <div class="row m-0">
                            <div class="text-brand col-12 text-lg-left sm-no-padding-lr last-paragraph-no-margin margin-60px-bottom md-margin-30px-bottom"> 
                                <div class="col-lg-12 brand-img bi-outlive">
								<?php if ( get_field( 'outlive_logo' ) ) { ?>
									<img src="<?php the_field( 'outlive_logo' ); ?>" style="width: 30%;margin-bottom: 35px;"/>
								<?php } ?>
                                </div>
                                <a href="<?php the_field( 'link_page_copy3' ); ?>"><button class="btn btn-our-brand"><?php the_field( 'outlive_button' ); ?></button></a>
                            </div>                          
                        </div>
                    </div> 
                    <div class="col-12 col-lg-6 col-md-6 col-sm-8 wow fadeIn">
                        <div class="row m-0">
                            <div class="text-brand col-12 text-lg-left sm-no-padding-lr last-paragraph-no-margin margin-60px-bottom md-margin-30px-bottom"> 
                                <h4 class="alt-font font-weight-600 brand-title" style="width:80%;margin-bottom: 40px;line-height: 1.5;"><?php the_field( 'outlive_title' ); ?></h4>
                                <p class="width-100 md-width-100"><?php the_field( 'outlive_desc' ); ?></p>
                            </div>                          
                        </div>
                    </div> 
                </div>
            </div>
        </section>
        <!-- end about section --> 
		<!-- start services section -->
        <div class="wow fadeIn brands">
            <div class="container">
                <div class="row justify-content-center outlive-border">
                    <div class="col-12 col-lg-8 wrap-store margin-five-bottom text-center last-paragraph-no-margin picklead">
                        <div class="col-lg-6 sum-store fadeInLeft">
                            <h2 class="sore-count"><?php the_field( 'outlive_retail_shop' ); ?></h2>
                            <h4 class="sore-count-title">Retail Store</h4>
                        </div>
                        <div class="col-lg-6 sum-store fadeInRight">
                            <h2 class="sore-count"><?php the_field( 'outlive_online_shop' ); ?></h2>
                            <h4 class="sore-count-title">Online Store</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end services section -->

<?php endwhile; endif; ?>
        <?php get_footer();?>