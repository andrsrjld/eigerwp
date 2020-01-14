<?php

/**

 Template Name: career-detail

 */

?>
<?php get_header();?>
<?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>

		<!-- start post content section --> 
			<div class="bg-dark-footer padding-50px-tb footer sm-padding-30px-tb career-hitam">
                <div class="container">
                    <div class="row col-lg-10 padding-20px-tb footer">
                        <!-- start logo -->
							<div class="col-2 alt-font text-normal" style="text-align: left; color:#fff;">
							<a><?php wpjm_the_job_title(); ?></a>
							</div>
							
							<div class="col-8" style="text-align: center;">
							
							</div>
							
							<div class="col-2 alt-font text-normal" style="text-align: right; color:#fff;">
							<a><?php the_job_location(); ?></a>
							</div>
                        </div>
                        <!-- end social media -->
                    </div>
                </div>
            </div>
			
        <section class="career-detail-section">
            <div class="container">
                <div class="row flex-lg-row-reverse">                   
                    <main class="col-12 col-lg-9 left-sidebar md-margin-60px-bottom sm-margin-40px-bottom pr-0 md-no-padding-left">
                        <!-- start post item --> 
                        <div class="col-12 blog-post-content margin-60px-bottom sm-margin-30px-bottom text-center text-md-left">
                            <div class="blog-image">
								<a>
									<?php if ( get_field( 'header' ) ) { ?>
									<img src="<?php the_field( 'header' ); ?>" alt=""/><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
										<button class="btn btn-position apply-now"><a href="<?php the_field( 'job_link' ); ?>">Apply Now</a></button>
									<?php } ?>
								</a>
							</div>
						</div>
						<div class="col-lg-12 col-12 fadeInLeft row wrap-eiger-history wrap-history">
                            <div class="col-6 fadeInRight wrap-history wrap-eiger-history">
								<h5>What you’ll do</h5>
									<ul>
										<?php while ( have_rows( 'jobdesk' ) ) : the_row(); ?>
											<li><?php the_sub_field( 'jobdesk_list' ); ?></li>
											<?php endwhile; ?>
									</ul>
							</div>
							<div class="col-6 fadeInRight wrap-history wrap-eiger-history">
								<h5>What you’ll need to be successful</h5>
									<ul>
										<?php while ( have_rows( 'jobdesk' ) ) : the_row(); ?>
											<li><?php the_sub_field( 'jobdesk_list' ); ?></li>
											<?php endwhile; ?>
									</ul>
							</div>
						</div>
						
                        <!-- end post item  -->
                    </main>
                    <aside class="col-12 col-lg-3">

						<div class="margin-45px-bottom sm-margin-25px-bottom">
                            <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase text-small font-weight-600"><span>Share this job listing</span>
<div class="social social-share">
        <!--Twitter-->
        <a class="fab fa-twitter" href="http://twitter.com/home?status=Reading: <?php the_permalink(); ?>" title="Share this post on Twitter!" target="_blank"></a>
        <!--Google Plus-->
        <a class="fab fa-google-plus-g" target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"></a>
		<!--Facebook-->
        <a class="fab fa-facebook" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" title="Share this post on Facebook!" onclick="window.open(this.href); return false;"></a>
</div>
							</div>
							<ul class="meta-desc">
							<li class=" job_description">Posted on &nbsp &nbsp &nbsp: <?php the_field( 'posted_on' ); ?></li>
							<li class=" job_description">Job Function &nbsp &nbsp &nbsp: <?php the_field( 'job_function' ); ?></li>
							<li class=" job_description">Report To &nbsp &nbsp &nbsp: <?php the_field( 'report_to' ); ?></li>
							<li class=" job_description">Job Type &nbsp &nbsp &nbsp:  <?php the_field( 'job_type' ); ?></li>
							<li class=" job_description location-job">Location &nbsp &nbsp &nbsp: <?php the_job_location(); ?></li>
							</ul>
                        </div>
                        <div class="margin-45px-bottom sm-margin-25px-bottom">
                            <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase text-small font-weight-600"><span>Summary</span></div>
							<p class="m-0"><?php the_content(); ?></p>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
        <!-- end blog content section -->  

<?php endwhile; endif; ?>
<?php get_footer();?>