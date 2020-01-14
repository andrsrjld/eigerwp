<div class="slider-items-products">
              <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col1 owl-carousel owl-theme"> 
                  
                  <?php while ( have_posts() ) :the_post(); if ( get_post_gallery() ) :
        $gallery = get_post_gallery( get_the_ID(), false );
        $gids = explode( ",", $gallery['ids'] );
            foreach ($gids as $id) {
                $attachment = wp_get_attachment($id);
    ?>
                  <!-- Item -->
                  <div class="item"> <a href="#"><img alt="" src="<?php echo $attachment['src']; ?>"></a>
                    <div class="cat-img-title cat-bg cat-box">
                      <div class="small-tag"><?php echo $attachment['title']; ?></div>
                      <h2 class="cat-heading"><?php echo $attachment['caption']; ?> <span><?php echo $attachment['alt']; ?></span></h2>
                      <p><?php echo $attachment['description']; ?></p>
                    </div>
                  </div>
                  <!-- End Item --> 
                   <?php
    }
    endif;
    endwhile;
    ?>
                  
                </div>
              </div>
            </div>