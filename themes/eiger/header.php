<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<?php wp_head(); ?>

<?php $latest = new WP_Query('showposts=1&cat=2');?>
    <?php if(have_posts()) :while($latest->have_posts()) : $latest->the_post();?>
<head>
        <!-- title -->
        <title>Eigerindo MPI</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="author" content="WIT">
        <!-- description -->
        <meta name="description" content="POFO is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and portfolio HTML5 template with 25 ready home page demos.">
        <!-- keywords -->
        <meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq">
        <!-- favicon -->
        <link rel="shortcut icon" href="<?php bloginfo('template_url');?>/assets/images/favicon.png">
        <link rel="apple-touch-icon" href="<?php bloginfo('template_url');?>/assets/images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url');?>/assets/images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url');?>/assets/images/apple-touch-icon-114x114.png">
        <!-- animation -->
        <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/animate.css">
        <!-- bootstrap -->
        <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/bootstrap.min.css">
        <!-- et line icon --> 
        <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/et-line-icons.css">
        <!-- font-awesome icon -->
        <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/font-awesome.min.css">
        <!-- themify icon -->
        <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/themify-icons.css">
        <!-- swiper carousel -->
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css'>
        <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/parallax.css">
        <!-- justified gallery  -->
        <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/justified-gallery.min.css">
        <!-- magnific popup -->
        <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/magnific-popup.css">
        <!-- revolution slider -->
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/assets/revolution/css/settings.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/assets/revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/assets/revolution/css/navigation.css">
        <!-- bootsnav -->
        <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/bootsnav.css">
        <!-- style -->
		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/font.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/style.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/responsive.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/custom.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/dist/style.css">
		
        <!--[if IE]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- start header -->
        <header>
            <!-- start navigation -->
            <nav class="navbar navbar-default bootsnav  header-dark background-transparent white-link navbar-expand-lg">
                <div class="container nav-header-container">
                    <!-- start logo -->
                    <div class="col-auto pl-lg-0">
                        <?php if ( have_rows( 'header_logo' ) ) : ?>
	                        <?php while ( have_rows( 'header_logo' ) ) : the_row(); ?>


                        <a href="<?php the_sub_field( 'logo_link' ); ?>" title="EigerIndo" class="logo">
                            <img src="<?php the_sub_field( 'logo' ); ?>" data-rjs="<?php bloginfo('template_url');?>/assets/images/logo-white@2x.png" alt="Eiger" class="logo-light default"></a>

                            <?php endwhile; ?>
                        <?php else : ?>
                        	<?php // no rows found ?>
                        <?php endif; ?>
                    </div>
                    <!-- end logo -->
                    <div class="col accordion-menu pr-0 pr-md-3">
                        <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
                            <span class="sr-only">toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-collapse collapse justify-content-end" id="navbar-collapse-toggle-1">
                            <ul id="accordion" class="nav navbar-nav no-margin alt-font text-normal">
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
                    </div>
                    <div class="col-auto pr-lg-0">
                        <div class="header-searchbar">
                            <a href="#search-header" class="header-search-form"><i class="fas fa-search search-button"></i></a>
                            <!-- search input-->
                            <form id="search-header" method="post" action="search-result.html" name="search-header" class="mfp-hide search-form-result">
                                <div class="search-form position-relative">
                                    <button type="submit" class="fas fa-search close-search search-button"></button>
                                    <input type="text" name="search" class="search-input" placeholder="Enter your keywords..." autocomplete="off">
                                </div>
                            </form>
                        </div>
                        <div class="header-social-icon d-none d-md-inline-block">

                        <?php if ( have_rows( 'header_sosmed' ) ) : ?>
	                        <?php while ( have_rows( 'header_sosmed' ) ) : the_row(); ?>

                            <a href="<?php the_sub_field( 'sosmed_link' ); ?>" title="<?php the_sub_field( 'sosmed_title' ); ?>" target="_blank"><?php the_sub_field( 'sosmed_logo' ); ?></a>
                            <!-- <a href="https://twitter.com/" title="Instagram" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="https://google.com/" title="google" target="_blank"><i class="fab fa-google-plus-g"></i></a>  
                            <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                            <a href="https://instagram.com/" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>        -->

                        <?php endwhile; ?>
                            <?php else : ?>
                                	<?php // no rows found ?>
                            <?php endif; ?>                 
                        </div>
                    </div>
                </div>
            </nav>
            <!-- end navigation --> 
        </header>
        <!-- end header -->
<?php endwhile; endif; ?>