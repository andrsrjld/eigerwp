<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
      <?php wp_footer(); ?>

<?php $latest = new WP_Query('showposts=1&cat=2');?>
<?php if(have_posts()) :while($latest->have_posts()) : $latest->the_post();?>


		<!-- start services section -->
        <div class="wow fadeIn">
            <div class="container padding-50px-tb" style="background-repeat: no-repeat;box-sizing: border-box;background-size: cover;">
                <div class="row">
                    <div class="col-12 text-center wrap-reach">
                        <h1>-</h1>
                        <h5 class="alt-font text-extra-dark-gray font-weight-700 md-width-100"><?php the_field( 'ready_section' ); ?></h5>
						<?php if ( have_rows( 'ready_button' ) ) : ?>
						<?php while ( have_rows( 'ready_button' ) ) : the_row(); ?>
                        <a href="<?php the_sub_field( 'link' ); ?>">
							<button class="btn-footer"><?php the_sub_field( 'button' ); ?></button>
						</a>
						<?php endwhile; ?>
						<?php else : ?>
							<?php // no rows found ?>
						<?php endif; ?>
                    </div>
                </div>
            </div> 
        </div>
        <!-- end services section -->
		
		<!-- start footer first -->
		<div class="wow fadeIn footer-first" style='background-color: #F7F7F7')">
            <div class="container">
                <div class="row col-lg-12 text-center wrap-quote-black">
                    <div class="col-lg-6 col-sm-6 q1" style="padding-right: 120px; padding-top: 20px;">
                        <h5 class="futura-bold"><?php the_field( 'pt_eiger_title' ); ?></h5>
                        <p><?php the_field( 'desc_pt_eigerindo' ); ?></p>
                    </div>
                    <div class="col-lg-6 col-sm-6 q2" style="padding-left: 120px; padding-top: 20px;">
                        <h5 class="futura-bold"><?php the_field( 'global_top_leader_title' ); ?></h5>
                        <p><?php the_field( 'desc_global_top_leader' ); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end footer first -->
        <!-- start footer --> 
        <footer class="footer-classic-dark padding-two-bottom">
            <div class="bg-dark-footer padding-20px-tb sm-padding-30px-tb">
                <div class="container">
                    <div class="row col-lg-10 padding-50px-tb footers">
                        <!-- start logo -->
                        <div class="col-lg-8 col-md-6 sm-margin-10px-bottom footer-1">
                            
                        <?php if ( have_rows( 'header_logo' ) ) : ?>
	                        <?php while ( have_rows( 'header_logo' ) ) : the_row(); ?>


                        <a href="<?php the_sub_field( 'logo_link' ); ?>" title="EigerIndo" class="logo">
                            <img src="<?php the_sub_field( 'logo' ); ?>" data-rjs="<?php bloginfo('template_url');?>/assets/images/logo-white@2x.png" alt="Eiger" class="logo-light default"></a>

                            <?php endwhile; ?>
                        <?php else : ?>
                        	<?php // no rows found ?>
                        <?php endif; ?>

                            <p><?php the_field( 'footer_alamat' ); ?></p>
							
							
						<div class="social-footer">
                        <?php if ( have_rows( 'header_sosmed' ) ) : ?>
	                        <?php while ( have_rows( 'header_sosmed' ) ) : the_row(); ?>

                            <a href="<?php the_sub_field( 'sosmed_link' ); ?>" title="<?php the_sub_field( 'sosmed_title' ); ?>" target="_blank"><?php the_sub_field( 'sosmed_logo' ); ?></a>
                        <?php endwhile; ?>
                            <?php else : ?>
                                	<?php // no rows found ?>
                            <?php endif; ?>                 
                        </div>
						
                        </div>
                        <!-- end logo -->
                        <!-- start slogan -->
                        <div class="col-lg-2 col-md-3 alt-font sm-margin-10px-bottom footer-2">
                            <h6>Working Hours</h6>
                            <ul>
                                <li><?php the_field( 'footer_working_day' ); ?></li>
                                <li><?php the_field( 'footer_working_hour' ); ?></li>
                            </ul>
                        </div>
                        <!-- end slogan -->
                        <!-- start social media -->
                        <div class="col-lg-2 col-md-3 alt-font sm-margin-10px-bottom footer-2">
                            <h6>Informations</h6>
                            <ul>
                                <!-- start menu item -->
                                <?php if ( have_rows( 'header_setting' ) ) : ?>
                                	<?php while ( have_rows( 'header_setting' ) ) : the_row(); ?>
                                		
                                        <li><a href="<?php the_sub_field( 'header_link' ); ?>"><?php the_sub_field( 'header_title' ); ?></a></li>
                                		
                                	<?php endwhile; ?>
                                <?php else : ?>
                                	<?php // no rows found ?>
                                <?php endif; ?>
                                <!-- end menu item -->
                            </ul>
                        </div>
                        <!-- end social media -->
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="footer-bottom border-top padding-30px-top">
                    <div class="row">
                        <!-- start copyright -->
                        <div class="footer-cr col-lg-12 text-center">&copy; <?php the_field( 'footer_copyright' ); ?> </div>
                        <!-- end copyright -->
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
        <!-- end scroll to top  -->
        <!-- javascript libraries -->
        <script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/jquery.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/modernizr.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/bootstrap.bundle.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/skrollr.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/smooth-scroll.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/jquery.appear.js"></script>
        <!-- menu navigation -->
        <script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/bootsnav.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/jquery.nav.js"></script>
        <!-- animation -->
        <script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/wow.min.js"></script>
        <!-- page scroll -->
        <!-- <script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/page-scroll.js"></script> -->
        <!-- swiper carousel -->
        <!-- <script type="text/javascript" src="js/swiper.min.js"></script> -->
        <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js'></script>
        <script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/function.js"></script>
        <!-- counter -->
        <script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/jquery.count-to.js"></script>
        <!-- parallax -->
        <script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/jquery.stellar.js"></script>
        <!-- magnific popup -->
        <script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/jquery.magnific-popup.min.js"></script>
        <!-- portfolio with shorting tab -->
        <script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/isotope.pkgd.min.js"></script>
        <!-- images loaded -->
        <script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/imagesloaded.pkgd.min.js"></script>
        <!-- pull menu -->
        <script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/classie.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/hamburger-menu.js"></script>
        <!-- counter  -->
        <script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/counter.js"></script>
        <!-- fit video  -->
        <script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/jquery.fitvids.js"></script>
        <!-- skill bars  -->
        <script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/skill.bars.jquery.js"></script> 
        <!-- justified gallery  -->
        <script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/justified-gallery.min.js"></script>
        <!--pie chart-->
        <script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/jquery.easypiechart.min.js"></script>
        <!-- instagram -->
        <script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/instafeed.min.js"></script>
        <!-- retina -->
        <script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/retina.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/dist/script.js"></script>
        <!-- revolution -->
        <!-- <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script> -->
        <!-- revolution slider extensions (load below extensions JS files only on local file systems to make the slider work! The following part can be removed on server for on demand loading) -->
        <!--<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>-->
        <!-- setting -->
        <script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/main.js"></script>
        <!-- <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script> -->
    </body>
</html>
<?php endwhile; endif; ?>