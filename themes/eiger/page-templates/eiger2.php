<?php
/**
Template Name:DetailBrands
 */
?>
<?php get_header();?>
 
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/mediaeiger/assets/css/style.css?v=1.1.3.2" />

<div id="main" class="sidebar-none sidebar-divider-vertical" style="padding:0px !important;">
    <header id="fancy-header" class="fancy-header titles-off breadcrumbs-off title-center" style="background-color:#fff;background-size:cover;background-repeat:no-repeat;background-image:url('<?php the_field("brand_detail_cover");?>
        ');background-position:center center;padding-top:0;padding-bottom:0">
        <div class="wf-wrap" style="min-height: 600px;"></div>
        <span class="fancy-header-overlay"></span>
    </header>


    <div class="wf-container-main">
        <div id="content" class="content" role="main">
            <div class="wf-wrap">
                <div class="vc_row wpb_row vc_row-fluid vc_custom_1544517914372 container-new-brands">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div id="ultimate-heading-74085c777abb6e427 " class="uvc-heading ult-adjust-bottom-margin ultimate-heading-74085c777abb6e427 uvc-113 " data-hspacer="line_only" data-halign="center" style="text-align:center">
                                    <div class="uvc-main-heading ult-responsive" data-ultimate-target='.uvc-heading.ultimate-heading-74085c777abb6e427 h2' data-responsive-json-new='{"font-size":"","line-height":""}'>
                                        <h2 style="font-weight:bold;margin-top:0px;">Brand Overview</h2>
                                    </div>
									<div class="uvc-heading-spacer line_only" style="margin-top:30px;height:2px;"><span class="uvc-headings-line" style="border-style:solid;border-bottom-width:2px;border-color:#ff4e00;width:130px;"></span></div><div class="uvc-sub-heading ult-responsive" data-ultimate-target='.uvc-heading.ultimate-heading-74085c777abb6e427 .uvc-sub-heading ' data-responsive-json-new='{"font-size":"","line-height":""}' style="font-weight:normal;margin-top:50px;"><?php the_field("brand_detail_overview");?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <iframe src="<?php the_field('brand_video')?>" width="100%" height="560" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
            <!-- DIV KOTAK 3 DESKRIPSI -->
            <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1544496094732 vc_row-has-fill vc_row-o-equal-height vc_row-o-content-middle vc_row-flex detailbrand">

                <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill ">
                    <div class="vc_column-inner vc_custom_1543978006964">
                        <div class="wpb_wrapper">
                            <div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1543985064004">

                                <figure class="wpb_wrapper vc_figure">
                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="642" height="541" src="<?php the_field('brand_image_cover')?>" class="vc_single_image-img attachment-large" alt="" srcset="<?php the_field('brand_image_cover')?> 642w, <?php the_field('brand_image_cover')?> 300w, <?php the_field('brand_image_cover')?> 600w" sizes="(max-width: 642px) 100vw, 642px" data-dt-location="index4d7e.html?attachment_id=1043" /></div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill ">
                    <div class="vc_column-inner vc_custom_1544496217709">
                        <div class="wpb_wrapper">
                            <div id="ultimate-heading-44815c777abb6f047" class=" ult-adjust-bottom-margin ultimate-heading-44815c777abb6f047 uvc-4773 vc_col-sm-12">
                                <div class="uvc-main-heading ult-responsive">
                                    <h3>Founded</h3>
                                </div>
                                <div class="uvc-sub-heading ult-responsive">
                                    <p style="font-size: 11px;"><?php the_field("brand_found");?></p>
                                </div>
                                <div class="uvc-main-heading ult-responsive">
                                    <h3>Primary Product</h3>
                                </div>
                                <div class="uvc-sub-heading ult-responsive">
                                    <p style="font-size: 11px;"><?php the_field("brand_primary");?></p>
                                </div>
                                <div class="uvc-main-heading ult-responsive">
                                    <h3>Online</h3>
                                </div>
                                <div class="uvc-sub-heading ult-responsive">
                                    <div class="linkbrand">
                                        <?php if( have_rows('brand_link_shop') ):while ( have_rows('brand_link_shop') ) : the_row();?>
                                        <a href="<?php the_sub_field('category_link'); ?>"><?php the_sub_field('category_name'); ?></a>
                                        <?php	 endwhile;else : endif;?>
                                    </div>
                                </div>
                                <div class="uvc-main-heading ult-responsive">
                                    <h3>Brand Category</h3>
                                </div>
                                <div class="uvc-sub-heading ult-responsive">
                                    <ul>
                                        <?php if( have_rows('brand_category') ):while ( have_rows('brand_category') ) : the_row();?>
                                        <li><?php the_sub_field('category_name'); ?></li>
                                        <?php	 endwhile;else : endif;?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill" style="border-left:1px solid #bbb">
                    <div class="vc_column-inner vc_custom_1544496217709">
                        <div class="wpb_wrapper">
                            <div id="ultimate-heading-44815c777abb6f047" class=" ult-adjust-bottom-margin ultimate-heading-44815c777abb6f047 uvc-4773 vc_col-sm-12 bagiankanandetailbrand">
                                <div class="uvc-main-heading ult-responsive">
                                    <h3>History</h3>
                                </div>

                                <div class="uvc-sub-heading ult-responsive">
                                    <ul>
                                        <?php if( have_rows('brand_history') ):while ( have_rows('brand_history') ) : the_row();?>
                                        <li><i class="fa fa-caret-right"></i><?php the_sub_field('history-item'); ?>.</li>
                                        <?php	 endwhile;else : endif;?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row-full-width vc_clearfix"></div><!-- Row Backgrounds -->

            <!-- DIV UNTUK ++ RETAIL -->
            <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1544009183000 vc_row-has-fill vc_row-o-equal-height vc_row-o-content-middle vc_row-flex bg-brands-plus">
                <div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner"><div class="wpb_wrapper"><div id="ultimate-heading-43645c777abb70cf9" class="uvc-heading ult-adjust-bottom-margin ultimate-heading-43645c777abb70cf9 uvc-5449 " data-hspacer="no_spacer" data-halign="center" style="text-align:center"><div class="uvc-heading-spacer no_spacer" style="top"></div><div class="uvc-main-heading ult-responsive" data-ultimate-target='.uvc-heading.ultimate-heading-43645c777abb70cf9 h2' data-responsive-json-new='{"font-size":"desktop:30px;","line-height":""}'><h2 style="font-style:italic;font-weight:normal;margin-top:0px !important;">RETAIL STORE</h2></div></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-3">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="stats-top  ">
                                <div class="aio-icon-top"><div class="ult-just-icon-wrapper  "><div class="align-icon" style="text-align:center;"></div></div></div><div class="stats-desc" id="counter-responsv-wrap-2877">
                                    <div id="counter_17837058035c777abb712f5" data-id="counter_17837058035c777abb712f5" data-ultimate-target='#counter-responsv-wrap-2877 .stats-number' data-responsive-json-new='{"font-size":"desktop:50px;","line-height":""}' class="stats-number ult-responsive" style=" color:#ef4823; color:#ef4823;" data-speed="3" data-counter-value="500" data-separator="," data-decimal="."><?php the_field('brand_retail_store'); ?></div>
                                    <div id="counter-responsv-wrap-2877" data-ultimate-target='#counter-responsv-wrap-2877 .stats-text' data-responsive-json-new='{"font-size":"","line-height":""}' class="stats-text ult-responsive" style="font-size:18px; color:#ef4823; ">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-3">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div id="ultimate-heading-49895c777abb715c4" class="uvc-heading ult-adjust-bottom-margin ultimate-heading-49895c777abb715c4 uvc-1420 " data-hspacer="no_spacer" data-halign="center" style="text-align:center">
                                <div class="uvc-heading-spacer no_spacer" style="top"></div>
                                <div class="uvc-main-heading ult-responsive" data-ultimate-target='.uvc-heading.ultimate-heading-49895c777abb715c4 h2' data-responsive-json-new='{"font-size":"desktop:30px;","line-height":""}'><h2 style="font-style:italic;font-weight:normal;margin-top:0px!important;">ONLINE STORE</h2></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-3">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="stats-top  ">
                                <div class="aio-icon-top"><div class="ult-just-icon-wrapper  "><div class="align-icon" style="text-align:center;"></div></div></div><div class="stats-desc" id="counter-responsv-wrap-8605">
                                    <div id="counter_15130683835c777abb71a40" data-id="counter_15130683835c777abb71a40" data-ultimate-target='#counter-responsv-wrap-8605 .stats-number' data-responsive-json-new='{"font-size":"desktop:85px;","line-height":""}' class="stats-number ult-responsive" style=" color:#ef4823; color:#ef4823;" data-speed="3" data-counter-value="19" data-separator="," data-decimal="."><?php the_field('brand_online_store'); ?></div>
                                    <div id="counter-responsv-wrap-8605" data-ultimate-target='#counter-responsv-wrap-8605 .stats-text' data-responsive-json-new='{"font-size":"","line-height":""}' class="stats-text ult-responsive" style="font-size:18px; color:#ef4823; "></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="upb_color" data-bg-override="full" data-bg-color="#f6f6f6" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="true" data-rtl="false" data-custom-vc-row="" data-vc="5.6" data-is_old_vc="" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>

            <div class=" wpb_row vc_row-fluid">

                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner">

                        <div class="wpb_wrapper">
						
                            <div class=" wpb_row vc_inner vc_row-fluid vc_custom_1545876287167 nopadding">
								<div class="width1200">
                                <div class="wpb_column vc_column_container vc_col-sm-4">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div id="ultimate-heading-18875c777a95d4466" class="uvc-heading ult-adjust-bottom-margin ultimate-heading-18875c777a95d4466 uvc-8312 " data-hspacer="line_only" data-halign="left" style="text-align:left">
                                                <div class="uvc-main-heading ult-responsive" data-ultimate-target='.uvc-heading.ultimate-heading-18875c777a95d4466 h2' data-responsive-json-new='{"font-size":"desktop:25px;","line-height":""}'>
                                                    <h2 style="font-weight:bold;margin-top:0px!important;">Social Latest Post</h2>
                                                </div>
                                                <div class="uvc-heading-spacer line_only" style="margin-top:10px;height:1px;"><span class="uvc-headings-line" style="border-style:solid;border-bottom-width:1px;border-color:#ef4823;width:200px;"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-8">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <p style="text-align: left;"><?php the_field('social_media_text')?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="instashop-gallery" data-gallery="<?php the_field('social_media_id')?>" style="margin-top:100px;margin-top:100px;padding-left:80px;padding-right:80px;"></div>
                            </div>
							
							
                        </div>

                    </div>
                </div>
            </div>
         
            <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1545892687032 vc_row-o-equal-height vc_row-flex" style="background:rgb(246, 246, 246) none repeat scroll 0% 0%;width:100%;">
				<div class="width1200">
                <div class="wpb_column vc_column_container vc_col-sm-6 plpr-15">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="wpb_text_column wpb_content_element ">
                                <div class="wpb_wrapper">
                                    <h3></h3>
                                    <h3><strong><?php the_field('brand_social_title_1')?></strong></h3>

                                    <p style="padding-right:20px;"><?php the_field('brand_social_detail_1')?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-6 plpr-15">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="wpb_text_column wpb_content_element ">
                                <div class="wpb_wrapper">
                                    <h3></h3>
                                    <h3><strong><?php the_field('brand_social_title_2')?></strong></h3>

                                    <p style="padding-right:20px;"><?php the_field('brand_social_detail_2')?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

            </div>



				
				<section id="news" class="blog_section store-location padding  pb-50">
                    <div class="container-fluid">
					  <div class="vc_col-sm-12" style="padding:30px 0">
						<div class="vc_col-sm-7 top-left">
						  <div id="ultimate-heading-18875c777a95d4466" class="uvc-heading ult-adjust-bottom-margin ultimate-heading-18875c777a95d4466 uvc-8312 " data-hspacer="line_only" data-halign="left" style="text-align:left">
                                                <div class="uvc-main-heading ult-responsive" data-ultimate-target=".uvc-heading.ultimate-heading-18875c777a95d4466 h2" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:25px;&quot;,&quot;line-height&quot;:&quot;&quot;}">
                                                    <h2 style="font-weight:bold;margin-top:0px!important;">Store Finder</h2>
                                                </div>
                                                <div class="uvc-heading-spacer line_only" style="margin-top:10px;height:1px;"><span class="uvc-headings-line" style="border-style: solid; border-bottom-width: 1px; border-color: rgb(239, 72, 35); width: 200px; float: left;"></span></div>
                                            </div>
						</div>
						<div class="vc_col-sm-5 top-right">
						  <div class="input-group input-find">
							<input
							  type="text" id="boxsearch"
							  placeholder="Search near"
							/><i class="fa fa-search"></i>
						  </div>
						</div>
					  </div>
					  <div class="vc_col-sm-12 content">
						<div class="vc_col-sm-4 content-left content-left-click">
						  <div class="sidebar-left">
							<div class="sidebar-toggle">
							</div>
							<div class="sidebar-content">
							   <?php $c = 0;?>
										<?php if( have_rows('store_city') ):while ( have_rows('store_city') ) : the_row();?>
										<?php $city = get_sub_field('store_city_name');?>
								<div class="vc_col-sm-12">
									<div class="vc_col-lg-12 content-detail">
										<div class="vc_col-lg-12 content-title">
										</div>
										 <?php $l = 0;?>
												<?php if( have_rows('store_location') ):while ( have_rows('store_location') ) : the_row();?>
												<?php $location = get_sub_field('store_location_city'); ?>
												<?php if (strtolower($city) == strtolower($location)) : ?>
												<div class="vc_col-sm-12 storebut store1"  href="#maps" lat="<?php the_sub_field("store_latitude"); ?>" lng="<?php the_sub_field("store_longitude"); ?>" cont="constore<?php echo $c . $l;?>">
													<div class="vc_col-lg-2 content-icon">
														<i class="fa fa-map-marker"></i>
													</div>
													<div class="vc_col-lg-10 content-address">
														
																<h5><?php echo $city; ?></h5>
																<label><?php the_sub_field("store_name"); ?></label>
																
																 <label><?php the_sub_field("store_address"); ?></label>
																<div class="constore<?php echo $c . $l;?> hidden">
																	<h4><?php the_sub_field("store_name"); ?></h4>
																	<label><?php the_sub_field("store_address"); ?></label>
																</div>
													</div>
												</div>
										 <?php endif;?>
												<?php $l++;?>
												<?php  endwhile;else : endif;?>
										
									</div>
								</div>
								  <?php $c++;?>
										<?php  endwhile;else : endif;?>
								
							   
							</div>
						  </div>
						</div>
						
						
						<div class="vc_col-sm-8 content-right nopadding">
							  <div id="maps" style="display: block; margin: 0;">
										<div id="map_canvas" style="height: 450px;"></div>
										<div id="map_nav">
											<ul class="listnav"></ul>
										</div>
									</div>
						</div>
					  </div>
				   
					

					</div>
                </section><!-- /.blog_section -->

            <!-- Row Backgrounds -->

        </div>
    </div>
</div>

<script type="text/javascript" src="https://s3.amazonaws.com/instashop/js/dist/embed-1.6.0.js"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyDKYJj9oM-kIO3goX5oazbfcOOyQhQrB40"></script>
<script src="http://bodypack.co.id/wp-content/themes/egs/js/store.js"></script>

<script>
        $(document).ready(function () {
            initialize("-6.916158", "107.613389", "<h4>Eiger Adventure Flagship Store</h4><br/><p>Jl. Sumatera No.23, Braga, Sumur Bandung, Kota Bandung, Jawa Barat 40111, Indonesia</p>");

        });

        $(".storebut").click(function () {
   console.log($(this).attr("lat"));
   console.log($(this).attr("lng"));
   console.log($(this).attr("cont"));
            LoadStoreLocator($(this).attr("lat"), $(this).attr("lng"), $(this).attr("cont"));
        });
		
$(document).ready(function(){
  $("#boxsearch").on("keyup", function() {
	  if(event.keyCode===13){
    var value = $(this).val().toLowerCase();
    $(".store1").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
	  }
  });
});


</script>
<?php get_footer();?>
