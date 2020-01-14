<?php

/**

 Template Name: news-detail

 */

?>
<?php get_header();?>

<?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
               <!-- start page title section -->
               <section class="wow fadeIn cover-background background-position-top" style="background-image:url('<?php the_field( 'content_cover' ); ?>');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 d-flex justify-content-center flex-column text-center page-title-large padding-30px-tb">
                        <!-- start sub title -->
                        <span class="text-white-2 opacity6 alt-font margin-10px-bottom d-block text-uppercase text-small"><?php echo get_the_date('d M Y'); ?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;by <a href="#" class="text-white"><?php the_author_posts_link(); ?></a><a href="#" class="text-white-2"></a></span>
                        <!-- end sub title -->
                        <!-- start page title -->
                        <h1 class="text-white-2 alt-font font-weight-600 margin-10px-bottom"><?php the_title(); ?></h1>
                        <!-- end page title -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title section -->
        <!-- start section -->
        <section class="wow fadeIn padding-20px-tb border-bottom border-color-extra-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-12 breadcrumb alt-font text-small">
                        <!-- breadcrumb -->
                        <ul>
                            <li><a href="https://eiger.wit.id/news" class="text-medium-gray"><?php the_category(); ?></a></li>
                        </ul>
                        <!-- end breadcrumb -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start blog content section -->
        <section class="wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 mx-auto text-center last-paragraph-no-margin">
                        <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0"><?php the_field( 'content_subtitle' ); br?><br><br></h5>
                        <p><?php the_field( 'isi_content' ); ?><br><br></p>
                    </div>
                </div>
                <div class="row">

                    <div class="col-12 col-lg-10 d-flex flex-wrap mx-auto">
                    <?php while ( have_rows( 'highlight_post' ) ) : the_row(); ?>
                        <div class="col-12 col-lg-6 pl-0 md-no-padding-lr md-margin-30px-bottom text-center last-paragraph-no-margin">
                            <div class="bg-light-gray padding-50px-all md-padding-25px-all">
                                <span class="text-medium font-weight-600 text-extra-dark-gray alt-font"><?php the_sub_field( 'highlight_title' ); ?></span>
                                <?php if ( get_sub_field( 'hightlight_image' ) ) { ?>
                                    <img src="<?php the_sub_field( 'hightlight_image' ); ?>" alt="" class="width-100 margin-30px-tb">
                                <?php } ?>
                                <p><?php the_sub_field( 'highlight_desc' ); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    </div>
                </div>

            </div>
        </section>
        <!-- end blog content section -->
        <!-- start section -->
        <section class="wow fadeIn pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 d-flex flex-wrap mx-auto p-0">
                        <div class="col-12 col-lg-8 col-md-6 text-center text-md-left sm-margin-10px-bottom">
                            <div class="tag-cloud">
                                <a href="http://www.themezaa.com/html/pofo/blog-grid.html">Advertisement</a>
                                <a href="http://www.themezaa.com/html/pofo/blog-grid.html">Artistry</a>
                                <a href="http://www.themezaa.com/html/pofo/blog-grid.html">Blog</a>
                                <a href="http://www.themezaa.com/html/pofo/blog-grid.html">Conceptual</a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-md-6 text-center text-md-right">
                            <div class="social-icon-style-6">
                                <ul class="extra-small-icon">
                                    <li><a class="likes-count" href="#" target="_blank"><i class="fas fa-heart text-deep-pink"></i><span class="text-small">300</span></a></li>
                                    <li><a class="facebook" href="http://facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a class="twitter" href="http://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a class="google" href="http://google.com/" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a class="pinterest" href="http://dribbble.com/" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- end section -->
        <!-- start related post section -->
        <section class="wow fadeIn bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 mx-auto text-center sm-margin-40px-bottom">
                        <div class="position-relative overflow-hidden width-100">
                            <span class="text-small text-outside-line-full alt-font font-weight-600 text-uppercase text-extra-dark-gray">Related Posts</span>
                        </div>
                    </div>
                </div>
                <!-- start post content section --> 
        <section id="blog" class="wow fadeIn bg-light-gray half-section last-paragraph-no-margin blog-post-style5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 px-3 p-md-0">
                        <ul class="blog-grid blog-4col gutter-large">
                            <li class="grid-sizer"></li>
                            <!-- start post item -->
                            <li class="grid-item wow fadeInUp last-paragraph-no-margin">
                                <div class="blog-post">
                                    <div class="blog-post-images overflow-hidden">
                                        <a href="blog-post-layout-01.html">
                                            <img src="<?php bloginfo('template_url');?>/assets/img/img-csr-12.png" alt="">
                                        </a>
                                        <div class="blog-categories bg-white text-uppercase text-extra-small alt-font"><a href="blog-grid.html">Design</a></div>
                                    </div>
                                    <div class="post-details padding-40px-all bg-white md-padding-20px-all">
                                        <div class="blog-hover-color"></div>
                                        <a href="blog-post-layout-01.html" class="alt-font post-title text-medium text-extra-dark-gray width-90 d-block lg-width-100 margin-5px-bottom">Design is not just what it looks like and feels like. Design is how it works.</a>
                                        <div class=" bg-medium-gray margin-seven-tb lg-margin-four-tb"></div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy...</p>
                                    </div>
                                </div>
                            </li>
                            <!-- end post item -->

                            <!-- start post item -->
                            <li class="grid-item wow fadeInUp last-paragraph-no-margin">
                                <div class="blog-post">
                                    <div class="blog-post-images overflow-hidden">
                                        <a href="blog-post-layout-03.html">
                                            <img src="<?php bloginfo('template_url');?>/assets/img/img-csr-5.png" alt="">
                                        </a>
                                        <div class="blog-categories bg-white text-uppercase text-extra-small alt-font"><a href="blog-grid.html">fashion</a></div>
                                    </div>
                                    <div class="post-details padding-40px-all bg-white md-padding-20px-all">
                                        <div class="blog-hover-color"></div>
                                        <a href="blog-post-layout-03.html" class="alt-font post-title text-medium text-extra-dark-gray width-90 d-block lg-width-100 margin-5px-bottom">I like design, I like details, to me it is just another form of self-expression.</a>
                                        <div class=" bg-medium-gray margin-seven-tb lg-margin-four-tb"></div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy...</p>
                                    </div>
                                </div>
                            </li>
                            <!-- end post item -->

                            <!-- start post item -->
                            <li class="grid-item wow fadeInUp last-paragraph-no-margin">
                                <div class="blog-post">
                                    <div class="blog-post-images overflow-hidden">
                                        <a href="blog-post-layout-03.html">
                                            <img src="<?php bloginfo('template_url');?>/assets/img/img-csr-9.png" alt="">
                                        </a>
                                        <div class="blog-categories bg-white text-uppercase text-extra-small alt-font"><a href="blog-grid.html">fashion</a></div>
                                    </div>
                                    <div class="post-details padding-40px-all bg-white md-padding-20px-all">
                                        <div class="blog-hover-color"></div>
                                        <a href="blog-post-layout-03.html" class="alt-font post-title text-medium text-extra-dark-gray width-90 d-block lg-width-100 margin-5px-bottom">I like design, I like details, to me it is just another form of self-expression.</a>
                                        <div class=" bg-medium-gray margin-seven-tb lg-margin-four-tb"></div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy...</p>
                                    </div>
                                </div>
                            </li>
                            <!-- end post item -->

                            <!-- start post item -->
                            <li class="grid-item wow fadeInUp last-paragraph-no-margin">
                                <div class="blog-post">
                                    <div class="blog-post-images overflow-hidden">
                                        <a href="blog-post-layout-03.html">
                                            <img src="<?php bloginfo('template_url');?>/assets/img/img-csr-6.png" alt="">
                                        </a>
                                        <div class="blog-categories bg-white text-uppercase text-extra-small alt-font"><a href="blog-grid.html">fashion</a></div>
                                    </div>
                                    <div class="post-details padding-40px-all bg-white md-padding-20px-all">
                                        <div class="blog-hover-color"></div>
                                        <a href="blog-post-layout-03.html" class="alt-font post-title text-medium text-extra-dark-gray width-90 d-block lg-width-100 margin-5px-bottom">I like design, I like details, to me it is just another form of self-expression.</a>
                                        <div class=" bg-medium-gray margin-seven-tb lg-margin-four-tb"></div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy...</p>
                                    </div>
                                </div>
                            </li>
                            <!-- end post item -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end post content section --> 
            </div>
        </section>
        <!-- end related post section -->
        
        <?php endwhile; endif;?>

<?php get_footer();?>