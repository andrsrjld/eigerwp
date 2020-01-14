<aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9 wow bounceInUp animated"> 

        <!-- BEGIN SIDE-NAV-CATEGORY -->

        <div class="side-nav-categories">

          <div class="block-title"> Categories </div>

          <!--block-title--> 

          <!-- BEGIN BOX-CATEGORY -->

          <div class="box-content box-category">

            <ul>

              <li> <a <?php if (!in_category('2')) { echo 'class="active"'; } ?> href="<?php echo site_url(); ?>/category/product/">Product</a> <span class="subDropdown minus"></span>

                <ul class="level0_415" style="display:block">

                  <li> <a href="<?php echo site_url(); ?>/category/bunga/">Bunga</a></li>                
                  <li> <a href="<?php echo site_url(); ?>/category/daun/">Daun</a></li>
                  <li ><a href="<?php echo site_url(); ?>/category/wedding/"><span>Wedding Decoration</span></a></li>
                    <li > <a href="<?php echo site_url(); ?>/category/birthday/"> <span>Birthday</span> </a> </li>
                    <li > <a href="<?php echo site_url(); ?>/category/event/"> <span>Event</span> </a> </li>
                     <li ><a href="<?php echo site_url(); ?>/category/vas/"><span>Vas</span></a></li>
                    <li > <a href="<?php echo site_url(); ?>/category/candle/"> <span>Candle</span> </a> </li>
                </ul>

                <!--level0--> 

              </li>

              <li> <a <?php if (in_category('2')) { echo 'class="active"'; } ?> href="<?php echo site_url(); ?>/category/blog/">Blog</a></li>

              

            </ul>

          </div>

          <!--box-content box-category--> 

        </div>

        <!--side-nav-categories-->

        

        <div class="custom-slider">

          <div>

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

              <ol class="carousel-indicators">

                <li class="" data-target="#carousel-example-generic" data-slide-to="0"></li>

                <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>

                <li data-target="#carousel-example-generic" data-slide-to="2"></li>

              </ol>

              <div class="carousel-inner">

                <?php $latest = new WP_Query('showposts=1&cat=7');?>
    <?php if(have_posts()) :while($latest->have_posts()) : $latest->the_post();?> 

                <div class="item active"><img src="<?php the_field('thumnail');?>" alt="slide3">

                  <div class="carousel-caption">

                  <h4><?php the_title(); ?></h4>

                    <h3><a title=" Sample Product" href="#"><?php the_field('subtitle');?></a></h3>

                    <p><?php the_field('description');?></p>

                    <a class="link" href="<?php the_field('link');?>">Detail</a></div>

                </div>

     <?php endwhile;?>
    <?php else :?>
    <h1> NOT</h1>
    <?php endif;?>
    <?php wp_reset_query();?> 
      <?php $latest = new WP_Query('showposts=3&cat=7&offset=1');?>
    <?php if(have_posts()) :while($latest->have_posts()) : $latest->the_post();?> 

                <div class="item"><img src="<?php the_field('thumnail');?>" alt="slide3">

                  <div class="carousel-caption">

                  <h4><?php the_title(); ?></h4>

                    <h3><a title=" Sample Product" href="#"><?php the_field('subtitle');?></a></h3>

                    <p><?php the_field('description');?></p>

                    <a class="link" href="<?php the_field('link');?>">Detail</a></div>

                </div>

     <?php endwhile;?>
    <?php else :?>
    <h1> NOT</h1>
    <?php endif;?>
    <?php wp_reset_query();?> 
                
              </div>

              <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> <span class="sr-only">Next</span> </a></div>

          </div>

        </div>

       

       

       



        

      

      </aside>