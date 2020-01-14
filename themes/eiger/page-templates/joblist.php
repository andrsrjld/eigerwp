<?php
/**
Template Name:Joblist
 */
?>
<?php get_header();?>
    <link rel='stylesheet' id='chosen-css' href='<?php bloginfo('template_url');?>/mediaeiger/wp-content/plugins/wp-job-manager/assets/css/A.chosen.css%2cqver%3d1.1.0.pagespeed.cf.9mYIHkHJHV.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-job-manager-frontend-css' href='<?php bloginfo('template_url');?>/mediaeiger/wp-content/plugins/wp-job-manager/assets/css/A.frontend.css%2cqver%3d1.31.3.pagespeed.cf.Lu8JxkWmyJ.css' type='text/css' media='all' />
 <div id="main" class="sidebar-left sidebar-divider-vertical" style="padding:0px !important;">
<header id="fancy-header" class="fancy-header titles-off breadcrumbs-off title-center" style="background-color:#222;background-size:cover;background-repeat:no-repeat;background-image:url('<?php the_field('header_image'); ?>');background-position:center center;padding-top:0;padding-bottom:0">
        <div class="wf-wrap" style="min-height: 300px;">
            <div class="fancy-title-head hgroup">
                <h1 class="fancy-title entry-title start-animation-done start-animation" style="color: #ffffff; font-size: 30px; line-height: 36px; text-transform: none;">
                    <span><?php the_field('header_title'); ?></span>
                </h1>
            <div>
        </div>
        <span class="fancy-header-overlay"></span>
    </header>
<div class="main-gradient"></div>
<div class="wf-wrap  ptpb-50">
    <div class="wf-container-main">




        <div id="content" class="content" role="main">

            <div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div id="ultimate-heading-57495c777ef792e9e" class="uvc-heading ult-adjust-bottom-margin ultimate-heading-57495c777ef792e9e uvc-3005 " data-hspacer="no_spacer" data-halign="left" style="text-align:left"><div class="uvc-heading-spacer no_spacer" style="top"></div><div class="uvc-main-heading ult-responsive" data-ultimate-target='.uvc-heading.ultimate-heading-57495c777ef792e9e h2' data-responsive-json-new='{"font-size":"desktop:18px;","line-height":""}'><h2 style="font-weight:bold;color:#ff4e00;margin-top:30px;margin-bottom:10px;">Career</h2></div></div></div></div></div></div><div class="vc_row wpb_row vc_row-fluid">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner vc_custom_1545117112509">
                        <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <?php echo do_shortcode('[job_dashboard]');?> 
                                            </div>
                                        </div>
                                    </div>
                    </div>
                </div>
            </div>
            <span class="cp-load-after-post"></span>
        </div><!-- #content -->


       <aside id="sidebar" class="sidebar">
                <div class="sidebar-content">
                    <script type="text/javascript">var netgo_navigation_options = netgo_navigation_options || {}; netgo_navigation_options.netgo_navigation_netgo_navigation2 = { clickable_parent: false, widget_id: "netgo_navigation_netgo_navigation-2" }</script>
                    <section id="netgo_navigation-2" class="widget widget_netgo_navigation">
                        <div class="widget-title"></div><div class='netgo_navigation' id='netgo_navigation_netgo_navigation-2'>
                            <div class="menu-about-us-container">
                                    <ul id="menu-about-us" class="menu">
                                      
                                        <li id="menu-item-1222" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1222 current-menu-item"><a href="<?php echo home_url('/?page_id=95'); ?>">Vacancy</a></li>
                                    </ul>
                                </div>
                        </div>
                    </section>
                </div>
            </aside><!-- #sidebar -->



    </div><!-- .wf-container -->
</div><!-- .wf-wrap -->
</div><!-- #main -->
<?php get_footer();?>
