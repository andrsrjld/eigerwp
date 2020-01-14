<?php

/**

 Template Name: eiger

 */

?>
<?php get_header();?>    
<?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
        <!-- start slider section --> 
        <div class="header-landing-page col-12 header-csr">
            <?php the_field( 'eiger_bg' ); ?>
            <!-- <div class="landing-page-text">
                <h3>Blessing People Through Innovative Lifestyle Business.</h3>
            </div> -->
        </div>
        <!-- start about section --> 
        <section class="wow fadeIn bg-medium-light-gray" style="background-image: url('<?php the_field( 'anchored_bg' ); ?>');background-size: 100%;">
            <div class="container">
                <div class="row"> 
                    <div class="col-12 col-lg-6 offset-lg-6 wow fadeIn">
                        <div class="row m-0">
                            <div class="text-about-us col-12 text-center text-lg-left sm-no-padding-lr last-paragraph-no-margin margin-60px-bottom md-margin-30px-bottom"> 
                                <h4 class="alt-font text-extra-dark-gray font-weight-600"><?php the_field( 'anchored_title' ); ?></h4>
                                <p class="width-100 md-width-100 eiger-desc"><?php the_field( 'anchored_desc' ); ?></p>
                            </div>                          
                        </div>
                    </div> 
                </div>
            </div>
        </section>
        <!-- end about section -->
        <!-- start eiger start -->
        <div class="wow eiger-history">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-11 fadeInLeft row wrap-eiger-history wrap-history">
                        <div class="col-lg-5 col-sm-5">
                            <h5>Founded</h5>
                            <p><?php the_field( 'founded_year' ); ?></p>
                        </div>
                        <div class="col-lg-7 col-sm-7">
                            <h5>Online</h5>
                            <ul>
								<?php while ( have_rows( 'online' ) ) : the_row(); ?>
                                <li>
									
										<?php the_sub_field( 'online_store' ); ?>
									
								</li>
								<?php endwhile; ?>
                            </ul>
                        </div>
                        <div class="col-lg-5 col-sm-5">
                            <h5>Primary Product</h5>
                            <p><?php the_field( 'primary_product' ); ?></p>
                        </div>
                        <div class="col-lg-7 col-sm-7">
                            <h5>Brand Category</h5>
                            <ul style="list-style-type: none;padding-left: 0;">
                                <?php while ( have_rows( 'founded_brand' ) ) : the_row(); ?>
								<li>
									
										<?php the_sub_field( 'brand' ); ?>
									
								</li>
								<?php endwhile; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-11 fadeInRight wrap-history wrap-eiger-history">
                        <h5>History</h5>
                        <ul>
						<?php while ( have_rows( 'history' ) ) : the_row(); ?>
                            <li><?php the_sub_field( 'history_detail' ); ?></li>
						<?php endwhile; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end eiger start -->
        <!-- start services section -->
        <div class="wow fadeIn eiger-store" style="background-image: url('<?php the_field( 'retail_bg' ); ?>');background-size: 100%;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8 wrap-store text-center last-paragraph-no-margin">
                        <div class="col-lg-6 sum-store eig-store fadeInLeft">
                            <h2 class="sore-count-eiger"><?php the_field( 'eiger_retail' ); ?></h2>
                            <h4 class="sore-count-title-eiger">Retail Store</h4>
                        </div>
                        <div class="col-lg-6 sum-store eig-store fadeInRight">
                            <h2 class="sore-count-eiger"><?php the_field( 'eiger_online' ); ?></h2>
                            <h4 class="sore-count-title-eiger">Online Store</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end services section -->
        <!-- start eiger start -->
        <div class="wow eiger-history">
            <div class="container">
                <div class="row col-lg-11" style="margin:0 auto;">
                    <div class="col-lg-5 fadeInLeft row wrap-eiger-history">
                        <h4>Social Latest Post</h4>
                    </div>
                    <div class="col-lg-7 fadeInRight wrap-eiger-history">
                        <p>Get the latest update of our products, events, news, and entertainment only on Eiger Adventure’s
                            social media and YouTube channel.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end eiger start -->
        <!-- start portfolio section -->
        <div class="wow fadeIn sm-padding-10px-top pb-0">
            <!-- start filter content -->
            <div class="container-fluid">
                <div class="row">
                <!-- <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-20px-bottom font-weight-600">Follow us Instagram</div> -->
                    <div class="instagram-follow-api">
                        <ul id="instaFeed-aside"></ul>
                    </div> 
                </div>
            </div>
            <!-- end filter content -->
        </div>
        <!-- start parallax feature box -->
        <section class="p-0 wow fadeIn bg-light-gray join-collab">
            <div class="container-fluid">
                <div class="row"> 
				
				<?php if ( have_rows( 'eiger_tropical' ) ) : ?>
				<?php while ( have_rows( 'eiger_tropical' ) ) : the_row(); ?>
				<?php if ( get_sub_field( 'bg' ) ) { ?>
                    <div class="col-12 col-lg-6 md-height-300px wow fadeInLeft" 
					style="background-image:url('<?php the_sub_field( 'bg' ); ?>');background-size: 100%;">
                        <div class="wrap-jc col-lg-8 col-8 eig-strength">
                            <h5><?php the_sub_field( 'title' ); ?></h5>
                            <p><?php the_sub_field( 'desc' ); ?></p>
                        </div>
                    </div> 
				<?php } ?>
				<?php endwhile; ?>
				<?php else : ?>
				<?php // no rows found ?>
				<?php endif; ?>
				
				<?php if ( have_rows( 'eiger_design' ) ) : ?>
				<?php while ( have_rows( 'eiger_design' ) ) : the_row(); ?>
				<?php if ( get_sub_field( 'bg_design' ) ) { ?>
                    <div class="col-12 col-lg-6 md-height-300px wow fadeInRight" 
					style="background-image:url('<?php the_sub_field( 'bg_design' ); ?>');background-size: 100%;">
                        <div class="wrap-jc col-lg-8 col-8 eig-strength">
                            <h5><?php the_sub_field( 'title' ); ?></h5>
                            <p><?php the_sub_field( 'desc' ); ?></p>
                        </div>
                    </div> 
				<?php } ?>
				<?php endwhile; ?>
				<?php else : ?>
				<?php // no rows found ?>
				<?php endif; ?>
                </div>
            </div>
        </section>
        <!-- end parallax feature box -->
        <!-- start store finder -->
        <div class="wow fadeIn">
            <div class="container">
                <div class="row wrap-store-finder">
                    <div class="col-lg-5 sf-left">
                        <h4>Store Finder</h4>
                        
                        <div class="col-lg-12 wrap-sf-address">
                        <?php if ( have_rows( 'eiger_store_location' ) ) : ?>
	                                <?php while ( have_rows( 'eiger_store_location' ) ) : the_row(); ?>
                                    <?php $map = get_sub_field( 'store_lt_ld' ); ?>
                            <div href="#map" class="col-lg-12 sf-content">
                           
                                <div class="col-lg-2">
                                    <img src="<?php bloginfo('template_url');?>/assets/img/ic-location.png">
                                </div>
                                <div class="col-lg-10">
                                

                                    <h6><?php the_sub_field( 'city' ); ?></h6>
                                    <p><?php the_sub_field( 'store_name' ); ?></p>
                                    
                                </div>
                            </div>
                            <?php endwhile; ?>
                                <?php else : ?>
                                	<?php // no rows found ?>
                                <?php endif; ?> 
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="col-lg-12 wrap-map" style="padding:0">
                        <div class="mapouter"><div id="map" class="gmap_canvas">
                            <?php echo $map ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- partial:index.partial.html -->
<div class="ismap"><a href="#map">Map It</a></div>
	</br>
	<div id="map-container" class="mapit" >
		<div id="map-canvas" data-geocode="36.885387,-76.306421"></div>
		<p>There is map here</p>
	</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js'></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/dist/script.js"></script>
		
        <!-- end store finder -->   
		<?php endwhile; endif; ?>
<?php get_footer();?>



