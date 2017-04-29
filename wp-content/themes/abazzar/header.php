<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package ajkerbazzar
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="language" content="bengali"/>
        <meta http-equiv="refresh" content="500"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
        <meta name="google-site-verification" content="GGtrcPQrkPTHJUUcbxXM9dXCg7HrKRkEcrMF8_lxZ0E" />
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico"/>
        <link rel="icon" type="image/ico" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico"/>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
    <div id="page" class="hfeed site">
            <div class="top_header">
                <div class="container">
                    <div class="row hidden-xs-down">
                        <div class="col-xs-12 col-sm-12 ab_common_ads mrb10">
                            <?php echo do_shortcode('[amads id="674" size="970x90" title="Header 970x90"]'); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="ab-top">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-3">                           
                                        
                                    </div>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="pull-right"><a class="login-link btn btn-abtv btn-xs font-eng" href="<?php echo esc_url(home_url('/login/')); ?>">Login</a></div>
                                        <ul class="social-links">
                                            <li class="fa-hover"><a href="https://www.facebook.com/dailyajkerbazar/" target="_blank"><i class="fa fa-facebook-square" style="padding: 0;"></i></a></li>
                                            <li class="fa-hover"><a href="https://twitter.com/dailyajkerbazar" target="_blank"><i class="fa fa-twitter-square" style="padding: 0;"></i></a></li>
                                            <li class="fa-hover"><a href="https://www.youtube.com/channel/UC4DE5hwZK0bzPUwKgXdkznw" target="_blank"><i class="fa fa-youtube-square" style="padding: 0;"></i></a></li>
                                            <li class="fa-hover"><a href="https://plus.google.com/116783712858201464980" target="_blank"><i class="fa fa-google-plus-square" style="padding: 0;"></i></a></li>                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="logo">
                                <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                                    <img class="responsive" alt="ajkerbazzar.com" src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
                                </a> 
                                <p class="bangla_date hidden-xs-down">
                                    <?php echo "ঢাকা, " ?><?php echo do_shortcode('[bangla_day]'); ?>, <?php echo do_shortcode('[bangla_time]'); ?> ।  <?php echo do_shortcode('[english_date]'); ?>, <?php echo do_shortcode('[bangla_date]'); ?>,  <?php echo do_shortcode('[hijri_date]'); ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 hidden-xs-down">    
                            <div class="ab-other pull-right">
                                <a class="btn btn-abtv btn-xs" href="http://abtv.ajkerbazzar.com/" target="_blank"><img alt="abtv.com" title="abtv" src="<?php echo get_template_directory_uri(); ?>/images/abtv-icon.png"></a>
                                <a class="btn btn-success btn-xs" target="_blank" href="http://en.ajkerbazzar.com/">English</a>
                                <a class="btn btn-abtv btn-xs" target="_blank" href="http://radio.ajkerbazzar.com/"><img alt="ab-radio" title="ab radio" src="<?php echo get_template_directory_uri(); ?>/images/ab-radio.png"></a>
                                <a class="btn btn-abtv btn-xs" target="_blank" href="<?php echo get_category_link( 100 );?>"><img alt="ab-multimedia" title="ab multimedia" src="<?php echo get_template_directory_uri(); ?>/images/ab-multimedia.png"></a>
                                <a class="btn btn-abtv btn-xs" href="javascript:void()"><img alt="ab-apps" title="ab apps" src="<?php echo get_template_directory_uri(); ?>/images/ab-apps.png"></a>
                                <a class="btn btn-success btn-xs" href="javascript:void()">e-Paper</a>
                            </div>                         
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div id="search-container" class="search-box-wrapper hide">  
                                <div class="search-box">
                                    <a class="hidden-xs-down btn btn-secondary pull-right" target="_blank" href="/download/fonts/fonts.zip"><img alt=""src="<?php echo get_template_directory_uri(); ?>/images/bangla.png"></a>
                                    <div class="search-form pull-right"><?php get_search_form(); ?></div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>       
            </div>
            <!-- ******************* The Navbar Area ******************* -->
            <div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

                <a class="skip-link screen-reader-text sr-only" href="#content"><?php _e('Skip to content', 'ajkerbazzar'); ?></a>
                <nav class="navbar navbar-dark bg-inverse site-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <div class="container">
                        <div class="navbar-header">

                            <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->

                            <button class="navbar-toggle hidden-sm-up" type="button" data-toggle="collapse" data-target=".exCollapsingNavbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        </div>

                        <!-- The WordPress Menu goes here -->
                        <?php
                        wp_nav_menu(
                                array(
                                    'theme_location' => 'primary',
                                    'container_class' => 'collapse navbar-toggleable-xs exCollapsingNavbar',
                                    'menu_class' => 'nav navbar-nav',
                                    'fallback_cb' => '',
                                    'menu_id' => 'main-menu',
                                    'walker' => new wp_bootstrap_navwalker()
                                )
                        );
                        ?>

                    </div> <!-- .container -->


                </nav><!-- .site-navigation -->

            </div><!-- .wrapper-navbar end -->
            <?php if (is_front_page()) { ?>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="headline_container">
                                <div class="ticker_heading">
                                    শিরোনাম :
                                </div>
                                <div class="ticker_slider">
                                    <marquee truespeed="truespeed" scrolldelay="30" scrollamount="1" onmouseover="this.stop();" onmouseout="this.start();" direction="left" behavior="scroll" align="top">
                                        <?php
                                        $args = array('posts_per_page' => 5, 'order' => 'DESC', 'orderby' => 'id', 'category' => 1);
                                        $postslist = get_posts($args);                                      
                                        foreach ($postslist as $index => $post) :
                                            setup_postdata($post);
                                            ?>
                                            <a href="<?php the_permalink(); ?>" class="each_item"><?php the_title(); ?></a>   
                                            <?php
                                        endforeach;
                                        wp_reset_postdata();
                                        ?>
                                    </marquee>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="breadcrumbs" typeof="BreadcrumbList">
                                <?php
                                if (function_exists('bcn_display')) {
                                    bcn_display();
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>         
            <?php } ?>
