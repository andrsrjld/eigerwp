<?php

/**

 Template Name: contactus

 */

?>
<?php get_header();?>    

<?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
        <!-- start page title section -->
<?php if ( have_rows( 'banner_setting' ) ) : ?>
	<?php while ( have_rows( 'banner_setting' ) ) : the_row(); ?>
		<?php if ( get_sub_field( 'banner_image' ) ) { ?>
        <section class="wow fadeIn cover-background background-position-top" style="background-image:url('<?php the_sub_field( 'banner_image' ); ?>');">
            <?php } ?>
			<div class="container">
                <div class="row">
                    <div class="col-12 page-title-large d-flex flex-column justify-content-center text-center padding-30px-tb">
                        <!-- start page title -->
                        <h1 class="alt-font text-white-2 font-weight-600 mb-0"><?php the_sub_field( 'banner_title' ); ?></h1>
                        <!-- end page title -->
                    </div>
                </div>
            </div>
        </section>
		<?php endwhile; ?>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
		
        <!-- end page title section -->

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
                          <a href="#vimi"><li>Reach Our Brand</li></a>
                          </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <?php if ( get_field( 'table_background' ) ) { ?>
        <section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('<?php the_field( 'table_background' ); ?>');">
            <?php } ?>
            <div class=""></div>
            <div class="container">
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row justify-content-center">
                    <!-- start contact-form head -->
                    <div class="col-12 col-xl-5 col-md-6 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                        <h5 class="alt-font text-white-2 font-weight-600 mb-0">Fill out the form & we'll be in touch soon!</h5>
                    </div>
                    <!-- end contact-form head -->
                </div>
                <?php the_field( 'contact_form_1' ); ?>

              </div>
              <div class="tab-pane fade" role="tabpanel" aria-labelledby="profile-tab">
                <div class="row justify-content-center">
                    <!-- start contact-form head -->
                    <div class="col-12 col-xl-5 col-md-6 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                        <h5 class="alt-font text-white-2 font-weight-600 mb-0">Fill out the form & we'll be in touch soon!</h5>
                    </div>
                    <!-- end contact-form head -->
                </div>
                <?php the_field( 'contact_form_2' ); ?>
                
              </div>
            </div>
            </div>
        </section>

        <!-- start map section -->
        <section class="p-0 one-second-screen md-height-400px wow fadeIn">
            <?php the_field( 'google_maps_api' ); ?>
        </section>
        <!-- end map section -->
        <!-- start section -->
        <div class="pb-0 wow fadeIn" id="section-down" style="margin: 50px 0;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8 col-md-10 text-center ">
                        <p class="width-80 md-width-100 d-inline-block sm-width-100"><?php the_field( 'short_desc' ); ?></p>
                    </div>
                </div>
            </div>
        </div>    
        <!-- end section -->


        <!-- start section -->
        <section class="p-0 wow fadeIn">
            <div class="container-fluid" id='vimi'>
                <div class="row">

                    <!-- start feature box item -->
                    <?php if ( have_rows( 'eiger' ) ) : ?>
                    	<?php while ( have_rows( 'eiger' ) ) : the_row(); ?>
                    		<?php if ( get_sub_field( 'eiger_background' ) ) { ?>
                    <div class="col-12 col-lg-4 banner-style2 md-margin-30px-bottom wow fadeInUp">
                        <figure> 
                            <div class="banner-image bg-black height-400px cover-background" style="padding-right:0px !important; background-image:url('<?php the_sub_field( 'eiger_background' ) ?>');"></div>
                            <?php } ?>
                            <figcaption class="padding-seven-all bg-white d-flex align-items-center last-paragraph-no-margin">
                                <div class="text-center text-md-left">
                                    <span class="text-medium-gray alt-font text-uppercase">1999 to 2001</span>
                                    <span class="text-large font-weight-600 text-extra-dark-gray alt-font text-uppercase padding-15px-bottom d-block">Rubber Studio</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <a href="<?php the_sub_field( 'eiger_link' ) ?>" target="_blank" class="btn btn-dark-gray btn-small margin-30px-top sm-margin-15px-top">Visit Website</a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <?php endwhile; ?>
                        <?php else : ?>
                    <?php // no rows found ?>
                    <?php endif; ?>  
                    <!-- end feature box -->

                    

                    <!-- start feature box item -->
                    <?php if ( have_rows( 'bodypack' ) ) : ?>
                        <?php while ( have_rows( 'bodypack' ) ) : the_row(); ?>
                        	<?php if ( get_sub_field( 'bodypack_background' ) ) { ?>
                    <div class="col-12 col-lg-4 banner-style2 md-margin-30px-bottom wow fadeInUp banner-tengah">
                        <figure> 
                            <div class="banner-image bg-black height-400px cover-background" style="background-image:url('<?php the_sub_field( 'bodypack_background' ) ?>');"></div>
                            <?php } ?>
                            <figcaption class="padding-seven-all bg-white d-flex align-items-center last-paragraph-no-margin">
                                <div class="text-center text-md-left">
                                    <span class="text-medium-gray alt-font text-uppercase">1999 to 2001</span>
                                    <span class="text-large font-weight-600 text-extra-dark-gray alt-font text-uppercase padding-15px-bottom d-block">Rubber Studio</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <a href="<?php the_sub_field( 'bodypack_link' ); ?>" target="_blank" class="btn btn-dark-gray btn-small margin-30px-top sm-margin-15px-top">Visit Website</a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <?php endwhile; ?>
                        <?php else : ?>
                    <?php // no rows found ?>
                    <?php endif; ?>  
                    <!-- end feature box -->
                    


                    <!-- start feature box item -->
                    <?php if ( have_rows( 'export' ) ) : ?>
                        <?php while ( have_rows( 'export' ) ) : the_row(); ?>
                        	<?php if ( get_sub_field( 'export_background' ) ) { ?>
                    <div class="col-12 col-lg-4 banner-style2 md-margin-30px-bottom wow fadeInUp">
                        <figure> 
                            <div class="banner-image bg-black height-400px cover-background" style="background-image:url('<?php the_sub_field( 'export_background' ) ?>');"></div>
                            <?php } ?>
                            <figcaption class="padding-seven-all bg-white d-flex align-items-center last-paragraph-no-margin">
                                <div class="text-center text-md-left">
                                    <span class="text-medium-gray alt-font text-uppercase">1999 to 2001</span>
                                    <span class="text-large font-weight-600 text-extra-dark-gray alt-font text-uppercase padding-15px-bottom d-block">Rubber Studio</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <a href="<?php the_sub_field( 'export_link' ); ?>" target="_blank" class="btn btn-dark-gray btn-small margin-30px-top sm-margin-15px-top">Visit Website</a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <?php endwhile; ?>
                        <?php else : ?>
                    <?php // no rows found ?>
                    <?php endif; ?>  
                    <!-- end feature box -->
                </div>
            </div>
        </section>
        <!-- end section -->
		
		<?php endwhile; endif; ?>
<?php get_footer();?>