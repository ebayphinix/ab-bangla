<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published
 *
 * @package ajkerbazzar
 */
get_header();
require get_template_directory() . '/inc/settings.php';
?>
<div class="wrapper" id="home-wrapper">
    <div  id="content" class="container">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <div class="row mrb20">
                    <div class="col-xs-12 col-sm-7">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="heading"><h3><?php echo category_link($cat_prochod, 'সর্বশেষ'); ?></h3></div>
                            </div>
                            <div class="col-xs-12 col-sm-8">  
                                <?php
                                /*
                                 * STICKY POSTS
                                 */
                                $args_sticky = array(
                                    'posts_per_page' => 2,
                                    'cat' => $cat_prochod,
                                    'post__in' => get_option('sticky_posts'),
                                    'post_status' => 'publish',
                                );
                                $the_query = new WP_Query($args_sticky);
                                $index = 1;
                                while ($the_query->have_posts()) : $the_query->the_post();
                                    if ($index == 1):
                                        ?> 
                                        <div>
                                            <h1 class="headline-feature"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1> 
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-xs-12 col-sm-12 plnone">
                                                    <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'medium'); ?></a>
                                                </div>
                                            <?php endif; ?>
                                            <?php echo excerpt(50) ?>
                                            <div class="rmholder">
                                                <?php echo read_more(get_the_ID(), true); ?>
                                            </div>                                   
                                        </div>
                                        <?php
                                    endif;
                                    $index++;
                                    break;
                                endwhile;
                                ?>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 addvertise">
                                        <?php echo do_shortcode('[amads id="679" size="468x60" title="After lead news 468x60"]'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <?php
                                while ($the_query->have_posts()) : $the_query->the_post();
                                    if ($index == 2) {
                                        ?> 
                                        <div class="news-item">
                                            <h3> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-xs-5 col-sm-6 plnone">
                                                    <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a>
                                                </div> 
                                            <?php endif; ?>
                                            <?php echo excerpt(7) ?>
                                            <div class="rm-holder">
                                                <?php echo read_more(get_the_ID()); ?>
                                            </div>                                   
                                        </div>
                                        <?php
                                        $index ++;
                                        wp_reset_postdata();
                                    }
                                endwhile;
                                /*
                                 * NON-STICKY POSTS
                                 */
                                //Display the non-sticky posts next
                                $args = array(
                                    'posts_per_page' => 3,
                                    'cat' => $cat_prochod,
                                    'post__not_in' => get_option('sticky_posts'),
                                    'post_status' => 'publish',
                                );
                                $the_query = new WP_Query($args);
                                while ($the_query->have_posts()) : $the_query->the_post();
                                    ?>
                                    <div class="news-item">
                                        <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                            <div class="col-xs-5 col-sm-4 plnone">
                                                <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a>
                                            </div> 
                                        <?php endif; ?>  
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    </div>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                                <div class="rmholder">
                                    <?php echo category_read_more($cat_prochod, ' সর্বশেষের '); ?> 
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="col-xs-12 col-sm-5">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="heading">
                                    <h3 class="panel-heading"><?php echo category_link($cat_stockmarket, 'পুঁজিবাজার'); ?></h3>
                                </div>
                                <ul class="list-parent">
                                    <?php
                                    /*
                                     * STICKY POSTS
                                     */
                                    $args_sticky = array(
                                        'posts_per_page' => 1,
                                        'cat' => $cat_stockmarket,
                                        'post__in' => get_option('sticky_posts'),
                                        'post_status' => 'publish',
                                    );
                                    $the_query = new WP_Query($args_sticky);
                                    while ($the_query->have_posts()) : $the_query->the_post();
                                        ?> 
                                        <li class="list-item">
                                            <h3> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-xs-5 col-sm-6 plnone"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a></div> 
                                            <?php endif; ?>
                                            <?php echo excerpt(10) ?>
                                            <p class="rm-holder">
                                                <?php echo read_more(get_the_ID()); ?>
                                            </p>                                   
                                        </li>
                                        <?php
                                    endwhile;
                                    wp_reset_postdata();
                                    /*
                                     * NON-STICKY POSTS
                                     */
                                    $args = array(
                                        'posts_per_page' => 4,
                                        'cat' => $cat_stockmarket,
                                        'post__not_in' => get_option('sticky_posts'),
                                        'post_status' => 'publish',
                                    );
                                    $the_query = new WP_Query($args);
                                    while ($the_query->have_posts()) : $the_query->the_post();
                                        ?>
                                        <li class="list-item">
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-xs-5 col-sm-4 plnone">
                                                    <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a>
                                                </div> 
                                            <?php endif; ?>  
                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        </li>
                                        <?php
                                    endwhile;
                                    wp_reset_postdata();
                                    ?>
                                    <li class="list-item rmholder">
                                        <?php echo category_read_more($cat_stockmarket, 'পুঁজিবাজারের'); ?> 
                                    </li>  
                                </ul>

                            </div>
                            <div class="col-xs-12 col-sm-6 hidden-xs-down">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <h4><span style="color:red">সরাসরি সম্প্রচার</span></h4>
                                        <iframe width="100%" height="180" src="https://www.youtube.com/embed/11su7nqrT0A?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>                                       
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="heading">
                                            <h3 class="panel-heading"><?php echo category_link($cat_stockmarket_opinion, 'পুঁজিবাজার অভিমত'); ?></h3>
                                        </div>
                                        <?php
                                        $args = array('posts_per_page' => 1, 'post_status' => 'publish', 'category' => $cat_stockmarket_opinion);
                                        $postslist = get_posts($args);
                                        foreach ($postslist as $index => $post) :
                                            setup_postdata($post);
                                            ?> 
                                            <div>                                         
                                                <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                    <div class="col-xs-5 col-sm-12 plnone pdr0 mpdr8">
                                                        <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'medium'); ?></a>
                                                    </div>
                                                <?php endif; ?>
                                                <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>                                 
                                            </div>
                                            <?php
                                        endforeach;
                                        wp_reset_postdata();
                                        ?>

                                        <div class="rmholder">
                                            <?php echo category_read_more($cat_stockmarket_opinion); ?> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mrb20">
                    <div class="col-xs-12 col-sm-7">

                        <div class="row mrb20">
                            <div class="col-xs-12 col-sm-12">
                                <div class="heading"><h3>অর্থ-শিল্প-বাণিজ্য</h3></div>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <?php
                                /*
                                 * STICKY POSTS
                                 */
                                $args_sticky = array(
                                    'posts_per_page' => 1,
                                    'cat' => $cat_bank,
                                    'post__in' => get_option('sticky_posts'),
                                    'post_status' => 'publish',
                                );
                                $the_query = new WP_Query($args_sticky);
                                while ($the_query->have_posts()) : $the_query->the_post();
                                    ?> 
                                    <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                        <div class="featured-image col-xs-5 col-sm-12">
                                            <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'medium'); ?></a></div> 
                                    <?php endif; ?>
                                    <h3> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                                    <div class="rmholder">
                                        <?php echo read_more(get_the_ID()); ?>
                                    </div>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <?php
                                /*
                                 * STICKY POSTS
                                 */
                                $args_sticky = array(
                                    'posts_per_page' => 1,
                                    'cat' => $cat_agribusiness,
                                    'post__in' => get_option('sticky_posts'),
                                    'post_status' => 'publish',
                                );
                                $the_query = new WP_Query($args_sticky);
                                while ($the_query->have_posts()) : $the_query->the_post();
                                    ?> 
                                    <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                        <div class="featured-image col-xs-5 col-sm-12">
                                            <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'medium'); ?></a></div> 
                                    <?php endif; ?>
                                    <h3> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                                    <div class="rmholder">
                                        <?php echo read_more(get_the_ID()); ?>
                                    </div>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <?php
                                /*
                                 * STICKY POSTS
                                 */
                                $args_sticky = array(
                                    'posts_per_page' => 1,
                                    'cat' => $cat_telecom,
                                    'post__in' => get_option('sticky_posts'),
                                    'post_status' => 'publish',
                                );
                                $the_query = new WP_Query($args_sticky);
                                while ($the_query->have_posts()) : $the_query->the_post();
                                    ?> 
                                    <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                        <div class="featured-image col-xs-5 col-sm-12">
                                            <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'medium'); ?></a></div> 
                                    <?php endif; ?>
                                    <h3> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                                    <div class="rmholder">
                                        <?php echo read_more(get_the_ID()); ?>
                                    </div>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                        </div> 
                        <div class="row mrb20">
                            <div class="col-xs-12 col-sm-4">
                                <?php
                                /*
                                 * STICKY POSTS
                                 */
                                $args_sticky = array(
                                    'posts_per_page' => 1,
                                    'cat' => $cat_energy_power,
                                    'post__in' => get_option('sticky_posts'),
                                    'post_status' => 'publish',
                                );
                                $the_query = new WP_Query($args_sticky);
                                while ($the_query->have_posts()) : $the_query->the_post();
                                    ?> 
                                    <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                        <div class="featured-image col-xs-5 col-sm-12">
                                            <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'medium'); ?></a>
                                        </div> 
                                    <?php endif; ?>
                                    <h3> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                                    <div class="rmholder">
                                        <?php echo read_more(get_the_ID()); ?>
                                    </div>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <?php
                                /*
                                 * STICKY POSTS
                                 */
                                $args_sticky = array(
                                    'posts_per_page' => 1,
                                    'cat' => $cat_communication,
                                    'post__in' => get_option('sticky_posts'),
                                    'post_status' => 'publish',
                                );
                                $the_query = new WP_Query($args_sticky);
                                while ($the_query->have_posts()) : $the_query->the_post();
                                    ?> 
                                    <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                        <div class="featured-image col-xs-5 col-sm-12">
                                            <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'medium'); ?></a></div> 
                                    <?php endif; ?>
                                    <h3> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                                    <div class="rmholder">
                                        <?php echo read_more(get_the_ID()); ?>
                                    </div>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <?php
                                /*
                                 * STICKY POSTS
                                 */
                                $args_sticky = array(
                                    'posts_per_page' => 1,
                                    'cat' => $cat_technology,
                                    'post__in' => get_option('sticky_posts'),
                                    'post_status' => 'publish',
                                );
                                $the_query = new WP_Query($args_sticky);
                                while ($the_query->have_posts()) : $the_query->the_post();
                                    ?> 
                                    <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                        <div class="featured-image col-xs-5 col-sm-12">
                                            <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'medium'); ?></a>
                                        </div> 
                                    <?php endif; ?>
                                    <h3> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                                    <div class="rmholder">
                                        <?php echo read_more(get_the_ID()); ?>
                                    </div>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                        </div> 
                        <div class="row mrb20">
                            <div class="col-xs-12 col-sm-4">
                                <?php
                                /*
                                 * STICKY POSTS
                                 */
                                $args_sticky = array(
                                    'posts_per_page' => 1,
                                    'cat' => $cat_abason,
                                    'post__in' => get_option('sticky_posts'),
                                    'post_status' => 'publish',
                                );
                                $the_query = new WP_Query($args_sticky);
                                while ($the_query->have_posts()) : $the_query->the_post();
                                    ?> 
                                    <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                        <div class="featured-image col-xs-5 col-sm-12">
                                            <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'medium'); ?></a></div> 
                                    <?php endif; ?>
                                    <h3> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                                    <div class="rmholder">
                                        <?php echo read_more(get_the_ID()); ?>
                                    </div>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <?php
                                /*
                                 * STICKY POSTS
                                 */
                                $args_sticky = array(
                                    'posts_per_page' => 1,
                                    'cat' => $cat_garments,
                                    'post__in' => get_option('sticky_posts'),
                                    'post_status' => 'publish',
                                );
                                $the_query = new WP_Query($args_sticky);
                                while ($the_query->have_posts()) : $the_query->the_post();
                                    ?> 
                                    <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                        <div class="featured-image col-xs-5 col-sm-12">
                                            <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'medium'); ?></a>
                                        </div> 
                                    <?php endif; ?>
                                    <h3> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                                    <div class="rmholder">
                                        <?php echo read_more(get_the_ID()); ?>
                                    </div>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <?php
                                /*
                                 * STICKY POSTS
                                 */
                                $args_sticky = array(
                                    'posts_per_page' => 1,
                                    'cat' => $cat_porjoton,
                                    'post__in' => get_option('sticky_posts'),
                                    'post_status' => 'publish',
                                );
                                $the_query = new WP_Query($args_sticky);
                                while ($the_query->have_posts()) : $the_query->the_post();
                                    ?> 
                                    <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                        <div class="featured-image col-xs-5 col-sm-12">
                                            <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'medium'); ?></a>
                                        </div> 
                                    <?php endif; ?>
                                    <h3> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                                    <div class="rmholder">
                                        <?php echo read_more(get_the_ID()); ?>
                                    </div>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                        </div> 
                        <div class="row mrb20">
                            <div class="col-xs-12 col-sm-4">
                                <?php
                                /*
                                 * STICKY POSTS
                                 */
                                $args_sticky = array(
                                    'posts_per_page' => 1,
                                    'cat' => $cat_export,
                                    'post__in' => get_option('sticky_posts'),
                                    'post_status' => 'publish',
                                );
                                $the_query = new WP_Query($args_sticky);
                                while ($the_query->have_posts()) : $the_query->the_post();
                                    ?> 
                                    <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                        <div class="featured-image col-xs-5 col-sm-12">
                                            <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'medium'); ?></a>
                                        </div> 
                                    <?php endif; ?>
                                    <h3> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                                    <div class="rmholder">
                                        <?php echo read_more(get_the_ID()); ?>
                                    </div>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <?php
                                /*
                                 * STICKY POSTS
                                 */
                                $args_sticky = array(
                                    'posts_per_page' => 1,
                                    'cat' => $cat_shilpo,
                                    'post__in' => get_option('sticky_posts'),
                                    'post_status' => 'publish',
                                );
                                $the_query = new WP_Query($args_sticky);
                                while ($the_query->have_posts()) : $the_query->the_post();
                                    ?> 
                                    <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                        <div class="featured-image col-xs-5 col-sm-12">
                                            <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'medium'); ?></a>
                                        </div> 
                                    <?php endif; ?>
                                    <h3> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                                    <div class="rmholder">
                                        <?php echo read_more(get_the_ID()); ?>
                                    </div>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <?php
                                /*
                                 * STICKY POSTS
                                 */
                                $args_sticky = array(
                                    'posts_per_page' => 1,
                                    'cat' => $cat_economy,
                                    'post__in' => get_option('sticky_posts'),
                                    'post_status' => 'publish',
                                );
                                $the_query = new WP_Query($args_sticky);
                                while ($the_query->have_posts()) : $the_query->the_post();
                                    ?> 
                                    <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                        <div class="featured-image col-xs-5 col-sm-12">
                                            <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'medium'); ?></a>
                                        </div> 
                                    <?php endif; ?>
                                    <h3> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                                    <div class="rmholder">
                                        <?php echo read_more(get_the_ID()); ?>
                                    </div>                                   
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                        <div class="row mrb20 hidden-xs-down">
                            <div class="col-xs-12 col-sm-12 addvertise">
                                <?php echo do_shortcode('[amads id="925" size="728x90" title="Home-728x90-1th"]'); ?>
                            </div>
                            <div class="col-xs-12 col-sm-12">
                                <div class="heading"><h3><?php echo category_link($cat_corporate_news, 'কর্পোরেট নিউজ'); ?></h3></div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <?php
                                        $args = array('posts_per_page' => 6, 'post_status' => 'publish', 'category' => $cat_corporate_news);
                                        $postslist = get_posts($args);
                                        foreach ($postslist as $index => $post) :
                                            setup_postdata($post);
                                            ?> 
                                            <h3> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-xs-5 col-sm-12 plnone">
                                                    <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'medium'); ?></a></div> 
                                            <?php endif; ?>
                                            <?php echo excerpt(15) ?>
                                            <?php echo read_more(get_the_ID()); ?>                                   
                                        </div>
                                        <?php
                                        if ($index == 0)
                                            break;
                                    endforeach;
                                    ?>
                                    <div class="col-xs-12 col-sm-6">
                                        <?php
                                        foreach ($postslist as $index => $post) :
                                            setup_postdata($post);
                                            if ($index == 0)
                                                continue;
                                            ?> 
                                            <div class="news-item">
                                                <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                    <div class="col-xs-5 col-sm-3 plnone">
                                                        <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a>
                                                    </div> 
                                                <?php endif; ?>  
                                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            </div>
                                            <?php
                                        endforeach;
                                        wp_reset_postdata();
                                        ?>
                                    </div>                                    
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="rmholder">
                                            <?php echo category_read_more($cat_corporate_news); ?> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mrb20">
                            <div class="col-xs-12 col-sm-12">
                                <div class="heading"><h3><?php echo category_link($cat_bank, 'ব্যাংক বীমা আর্থিক খাত'); ?></h3></div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="border-bottom-xs">
                                            <?php
                                            $args = array('posts_per_page' => 6, 'post_status' => 'publish', 'category' => $cat_bank);
                                            $postslist = get_posts($args);
                                            foreach ($postslist as $index => $post) :
                                                setup_postdata($post);
                                                ?> 
                                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                                                <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                    <div class="col-xs-5 col-sm-12 plnone">
                                                        <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'medium'); ?></a></div> 
                                                <?php endif; ?>
                                                <?php echo excerpt(15) ?>
                                                <?php echo read_more(get_the_ID()); ?>                                   
                                            </div>
                                        </div>
                                        <?php
                                        if ($index == 0)
                                            break;
                                    endforeach;
                                    ?>
                                    <div class="col-xs-12 col-sm-6">
                                        <?php
                                        foreach ($postslist as $index => $post) :
                                            setup_postdata($post);
                                            if ($index == 0)
                                                continue;
                                            ?> 
                                            <div class="news-item">
                                                <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                    <div class="col-xs-5 col-sm-3 plnone">
                                                        <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a></div> 
                                                <?php endif; ?>  
                                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            </div>
                                            <?php
                                        endforeach;
                                        wp_reset_postdata();
                                        ?>
                                    </div>                                    
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="rmholder">
                                            <?php echo category_read_more($cat_bank,'ব্যাংক বীমা আর্থিক খাতের'); ?> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mrb20">
                            <div class="col-xs-12 col-sm-12 addvertise hidden-xs-down">
                                <?php echo do_shortcode('[amads id="927" size="728x90" title="Home-728x90-2nd"]'); ?>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="heading"><h3><?php echo category_link($cat_educationbusiness, 'এডুবাজার'); ?></h3></div>
                                <?php
                                $args = array('posts_per_page' => 6, 'post_status' => 'publish', 'category' => $cat_educationbusiness);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                    if ($index == 0) {
                                        ?> 
                                        <div class="news-item">
                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-xs-5 col-sm-6 plnone">
                                                    <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a></div> 
                                            <?php endif; ?>
                                            <?php echo excerpt(15) ?>
                                            <?php echo read_more(get_the_ID()); ?>                                
                                        </div>
                                    <?php } else {
                                        ?>
                                        <div class="news-item">
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-xs-5 col-sm-3 plnone">
                                                    <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a></div> 
                                            <?php endif; ?>  
                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        </div>
                                        <?php
                                    }
                                endforeach;
                                wp_reset_postdata();
                                ?>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="rmholder">
                                            <?php echo category_read_more($cat_educationbusiness,'এডুবাজার'); ?> 
                                        </div>
                                    </div>
                                </div>   
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="heading"><h3><?php echo category_link($cat_health_pharma, 'হেলথ বাজার'); ?></h3></div>
                                <?php
                                $args = array('posts_per_page' => 6, 'post_status' => 'publish', 'category' => $cat_health_pharma);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                    if ($index == 0) {
                                        ?> 
                                        <div class="news-item">
                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-xs-5 col-sm-6 plnone"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a></div> 
                                            <?php endif; ?>
                                            <?php echo excerpt(15) ?>
                                            <?php echo read_more(get_the_ID()); ?>                                
                                        </div>
                                    <?php } else {
                                        ?>
                                        <div class="news-item">
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-xs-5 col-sm-3 plnone"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a></div> 
                                            <?php endif; ?>  
                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        </div>
                                        <?php
                                    }
                                endforeach;
                                wp_reset_postdata();
                                ?>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="rmholder">
                                            <?php echo category_read_more($cat_health_pharma,'হেলথ বাজারের'); ?> 
                                        </div>
                                    </div>
                                </div>
                            </div>                           
                        </div>
                        <div class="row mrb20">                     
                            <div class="col-xs-12 col-sm-12">
                                <div class="heading"><h3><?php echo category_link($cat_sports, 'খেলার বাজার'); ?></h3></div>
                                <div class="row">

                                    <div class="col-xs-12 col-sm-6">
                                        <div class="border-bottom-xs">
                                            <?php
                                            $args = array('posts_per_page' => 6, 'post_status' => 'publish', 'category' => $cat_sports);
                                            $postslist = get_posts($args);
                                            foreach ($postslist as $index => $post) :
                                                setup_postdata($post);
                                                ?> 
                                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                                                <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                    <div class="col-xs-5 col-sm-12 plnone">
                                                        <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'medium'); ?></a></div> 
                                                <?php endif; ?>
                                                <?php echo excerpt(15) ?>
                                                <?php echo read_more(get_the_ID()); ?>                                 
                                            </div>
                                        </div>
                                        <?php
                                        if ($index == 0)
                                            break;
                                    endforeach;
                                    ?>
                                    <div class="col-xs-12 col-sm-6">
                                        <?php
                                        foreach ($postslist as $index => $post) :
                                            setup_postdata($post);
                                            if ($index == 0)
                                                continue;
                                            ?> 
                                            <div class="news-item">
                                                <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                    <div class="col-xs-5 col-sm-3 plnone"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a></div> 
                                                <?php endif; ?>  
                                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            </div>
                                            <?php
                                        endforeach;
                                        wp_reset_postdata();
                                        ?>
                                    </div>                                    
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="rmholder">
                                            <?php echo category_read_more($cat_sports,'খেলার বাজারের'); ?> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mrb20">
                            <div class="col-xs-12 col-sm-12 addvertise hidden-xs-down">
                                <?php echo do_shortcode('[amads id="933" size="728x90" title="Home-728x90-3rd"]'); ?>
                            </div>
                            <div class="col-xs-12 col-sm-12">
                                <div class="heading"><h3><?php echo category_link($cat_agribusiness, 'এগ্রিবিজনেস'); ?></h3></div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="border-bottom-xs">
                                        <?php
                                        $args = array('posts_per_page' => 6, 'post_status' => 'publish', 'category' => $cat_agribusiness);
                                        $postslist = get_posts($args);
                                        foreach ($postslist as $index => $post) :
                                            setup_postdata($post);
                                            ?> 
                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-xs-5 col-sm-12 plnone"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'medium'); ?></a></div> 
                                            <?php endif; ?>
                                            <?php echo excerpt(15) ?>
                                            <?php echo read_more(get_the_ID()); ?>                                  
                                        </div>
                                    </div>
                                        <?php
                                        if ($index == 0)
                                            break;
                                    endforeach;
                                    ?>
                                    <div class="col-xs-12 col-sm-6">
                                        <?php
                                        foreach ($postslist as $index => $post) :
                                            setup_postdata($post);
                                            if ($index == 0)
                                                continue;
                                            ?> 
                                            <div class="news-item">
                                                <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                    <div class="col-xs-5 col-sm-3 plnone"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a></div> 
                                                <?php endif; ?>  
                                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            </div>
                                            <?php
                                        endforeach;
                                        wp_reset_postdata();
                                        ?>
                                    </div>                                    
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="rmholder">
                                            <?php echo category_read_more($cat_agribusiness,'এগ্রিবিজনেসের'); ?> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mrb20">
                            <div class="col-xs-12 col-sm-6">
                                <div class="heading"><h3><?php echo category_link($cat_technology, 'প্রযুক্তি'); ?></h3></div>
                                <?php
                                $args = array('posts_per_page' => 6, 'post_status' => 'publish', 'category' => $cat_technology);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                    if ($index == 0) {
                                        ?> 
                                        <div class="news-item">
                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-xs-5 col-sm-6 plnone"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a></div> 
                                            <?php endif; ?>
                                            <?php echo excerpt(15) ?>
                                            <?php echo read_more(get_the_ID()); ?>                                  
                                        </div>
                                    <?php } else {
                                        ?>
                                        <div class="news-item">
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-xs-5 col-sm-3 plnone"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a></div> 
                                            <?php endif; ?>  
                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        </div>
                                        <?php
                                    }
                                endforeach;
                                wp_reset_postdata();
                                ?>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="rmholder">
                                            <?php echo category_read_more($cat_technology, 'প্রযুক্তির'); ?> 
                                        </div>
                                    </div>
                                </div>   
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="heading"><h3><?php echo category_link($cat_telecom, 'টেলিকম'); ?></h3></div>
                                <?php
                                $args = array('posts_per_page' => 6, 'post_status' => 'publish', 'category' => $cat_telecom);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                    if ($index == 0) {
                                        ?> 
                                        <div class="news-item">
                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-xs-5 col-sm-6 plnone"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a></div> 
                                            <?php endif; ?>
                                            <?php echo excerpt(15) ?>
                                            <?php echo read_more(get_the_ID()); ?>                                  
                                        </div>
                                    <?php } else {
                                        ?>
                                        <div class="news-item">
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-xs-5 col-sm-3 plnone"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a></div> 
                                            <?php endif; ?>  
                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        </div>
                                        <?php
                                    }
                                endforeach;
                                wp_reset_postdata();
                                ?>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="rmholder">
                                            <?php echo category_read_more($cat_telecom,'টেলিকমের'); ?> 
                                        </div>
                                    </div>
                                </div>
                            </div>                           
                        </div>
                        <div class="row mrb20">
                            <div class="col-xs-12 col-sm-12 addvertise hidden-xs-down">
                                <?php echo do_shortcode('[amads id="935" size="728x90" title="Home-728×90-4th"]'); ?>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="heading"><h3><?php echo category_link($cat_energy_power, 'এনার্জি-পাওয়ার'); ?></h3></div>
                                <?php
                                $args = array('posts_per_page' => 6, 'post_status' => 'publish', 'category' => $cat_energy_power);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                    if ($index == 0) {
                                        ?> 
                                        <div class="news-item">
                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-xs-5 col-sm-6 plnone"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a></div> 
                                            <?php endif; ?>
                                            <?php echo excerpt(15) ?>
                                            <?php echo read_more(get_the_ID()); ?>                                   
                                        </div>
                                    <?php } else {
                                        ?>
                                        <div class="news-item">
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-xs-5 col-sm-3 plnone"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a></div> 
                                            <?php endif; ?>  
                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        </div>
                                        <?php
                                    }
                                endforeach;
                                wp_reset_postdata();
                                ?>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="rmholder">
                                            <?php echo category_read_more($cat_energy_power,'এনার্জি-পাওয়ারের'); ?> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="heading"><h3><?php echo category_link($cat_communication, 'যোগাযোগ'); ?></h3></div>
                                <?php
                                $args = array('posts_per_page' => 6, 'post_status' => 'publish', 'category' => $cat_communication);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                    if ($index == 0) {
                                        ?> 
                                        <div class="news-item">
                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-xs-5 col-sm-6 plnone"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a></div> 
                                            <?php endif; ?>
                                            <?php echo excerpt(15) ?>
                                            <?php echo read_more(get_the_ID()); ?>                                 
                                        </div>
                                    <?php } else {
                                        ?>
                                        <div class="news-item">
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-xs-5 col-sm-3 plnone"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a></div> 
                                            <?php endif; ?>  
                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        </div>
                                        <?php
                                    }
                                endforeach;
                                wp_reset_postdata();
                                ?>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="rmholder">
                                            <?php echo category_read_more($cat_communication,'যোগাযোগের'); ?> 
                                        </div>
                                    </div>
                                </div>   
                            </div>
                        </div>
                        <div class="row mrb20">
                            <div class="col-xs-12 col-sm-12">
                                <div class="heading"><h3><?php echo category_link($cat_abason, 'আবাসন নির্মাণ'); ?></h3></div>
                                <div class="row">

                                    <div class="col-xs-12 col-sm-6">
                                        <div class="border-bottom-xs">
                                        <?php
                                        $args = array('posts_per_page' => 6, 'post_status' => 'publish', 'category' => $cat_abason);
                                        $postslist = get_posts($args);
                                        foreach ($postslist as $index => $post) :
                                            setup_postdata($post);
                                            ?> 
                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-xs-5 col-sm-12 plnone"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'medium'); ?></a></div> 
                                            <?php endif; ?>
                                            <?php echo excerpt(15) ?>
                                            <?php echo read_more(get_the_ID()); ?>                                  
                                        </div>
                                    </div>
                                        <?php
                                        if ($index == 0)
                                            break;
                                    endforeach;
                                    ?>
                                    <div class="col-xs-12 col-sm-6">
                                        <?php
                                        foreach ($postslist as $index => $post) :
                                            setup_postdata($post);
                                            if ($index == 0)
                                                continue;
                                            ?> 
                                            <div class="news-item">
                                                <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                    <div class="col-xs-5 col-sm-3 plnone"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a></div> 
                                                <?php endif; ?>  
                                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            </div>
                                            <?php
                                        endforeach;
                                        wp_reset_postdata();
                                        ?>
                                    </div>                                    
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="rmholder">
                                            <?php echo category_read_more($cat_abason,'আবাসন নির্মাণের'); ?> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mrb20">
                            <div class="col-xs-12 col-sm-6">
                                <div class="heading"><h3><?php echo category_link($cat_porjoton, 'পর্যটন'); ?></h3></div>
                                <?php
                                $args = array('posts_per_page' => 6, 'post_status' => 'publish', 'category' => $cat_porjoton);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                    if ($index == 0) {
                                        ?> 
                                        <div class="news-item">
                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-xs-5 col-sm-6 plnone"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a></div> 
                                            <?php endif; ?>
                                            <?php echo excerpt(15) ?>
                                            <?php echo read_more(get_the_ID()); ?>                                   
                                        </div>
                                    <?php } else {
                                        ?>
                                        <div class="news-item">
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-xs-5 col-sm-3 plnone"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a></div> 
                                            <?php endif; ?>  
                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        </div>
                                        <?php
                                    }
                                endforeach;
                                wp_reset_postdata();
                                ?>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="rmholder">
                                            <?php echo category_read_more($cat_porjoton,'পর্যটনের'); ?> 
                                        </div>
                                    </div>
                                </div>   
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="heading"><h3><?php echo category_link($cat_shilpo, 'শিল্প বাজার'); ?></h3></div>
                                <?php
                                $args = array('posts_per_page' => 6, 'post_status' => 'publish', 'category' => $cat_shilpo);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                    if ($index == 0) {
                                        ?> 
                                        <div class="news-item">
                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-xs-5 col-sm-6 plnone"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a></div> 
                                            <?php endif; ?>
                                            <?php echo excerpt(15) ?>
                                            <?php echo read_more(get_the_ID()); ?>                                 
                                        </div>
                                    <?php } else {
                                        ?>
                                        <div class="news-item">
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-xs-5 col-sm-3 plnone"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a></div> 
                                            <?php endif; ?>  
                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        </div>
                                        <?php
                                    }
                                endforeach;
                                wp_reset_postdata();
                                ?>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="rmholder">
                                            <?php echo category_read_more($cat_shilpo,'শিল্প বাজারের'); ?> 
                                        </div>
                                    </div>
                                </div>
                            </div>                           
                        </div>
                        <div class="row mrb20">
                            <div class="col-xs-12 col-sm-12 addvertise hidden-xs-down">
                                <?php echo do_shortcode('[amads id="936" size="728x90" title="Home-728×90-5th"]'); ?>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="heading"><h3><?php echo category_link($cat_garments, 'গার্মেন্টস-ক্লথিং'); ?></h3></div>
                                <?php
                                $args = array('posts_per_page' => 6, 'post_status' => 'publish', 'category' => $cat_garments);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                    if ($index == 0) {
                                        ?> 
                                        <div class="news-item">
                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-xs-5 col-sm-6 plnone"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a></div> 
                                            <?php endif; ?>
                                            <?php echo excerpt(15) ?>
                                            <?php echo read_more(get_the_ID()); ?>                                   
                                        </div>
                                    <?php } else {
                                        ?>
                                        <div class="news-item">
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-xs-5 col-sm-3 plnone"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a></div> 
                                            <?php endif; ?>  
                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        </div>
                                        <?php
                                    }
                                endforeach;
                                wp_reset_postdata();
                                ?>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="rmholder">
                                            <?php echo category_read_more($cat_garments,'গার্মেন্টস-ক্লথিং এর'); ?> 
                                        </div>
                                    </div>
                                </div>   
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="heading"><h3><?php echo category_link($cat_export, 'বাণিজ্য-আমদানি-রপ্তানি'); ?></h3></div>
                                <?php
                                $args = array('posts_per_page' => 6, 'post_status' => 'publish', 'category' => $cat_export);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                    if ($index == 0) {
                                        ?> 
                                        <div class="news-item">
                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-xs-5 col-sm-6 plnone"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a></div> 
                                            <?php endif; ?>
                                            <?php echo excerpt(15) ?>
                                            <?php echo read_more(get_the_ID()); ?>                                 
                                        </div>
                                    <?php } else {
                                        ?>
                                        <div class="news-item">
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-xs-5 col-sm-3 plnone"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a></div> 
                                            <?php endif; ?>  
                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        </div>
                                        <?php
                                    }
                                endforeach;
                                wp_reset_postdata();
                                ?>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="rmholder">
                                            <?php echo category_read_more($cat_export, 'বাণিজ্য-আমদানি-রপ্তানির '); ?> 
                                        </div>
                                    </div>
                                </div>
                            </div>                           
                        </div>
                        <div class="row mrb20">
                            <div class="col-xs-12 col-sm-12">
                                <div class="heading"><h3><?php echo category_link($cat_economy, 'অর্থনীতি-উন্নয়ন'); ?></h3></div>
                                <div class="row">

                                    <div class="col-xs-12 col-sm-6">
                                        <div class="border-bottom-xs">
                                        <?php
                                        $args = array('posts_per_page' => 6, 'post_status' => 'publish', 'category' => $cat_economy);
                                        $postslist = get_posts($args);
                                        foreach ($postslist as $index => $post) :
                                            setup_postdata($post);
                                            ?> 
                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-xs-5 col-sm-12 plnone"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'medium'); ?></a></div> 
                                            <?php endif; ?>
                                            <?php echo excerpt(15) ?>
                                            <?php echo read_more(get_the_ID()); ?>                                 
                                        </div>
                                    </div>
                                        <?php
                                        if ($index == 0)
                                            break;
                                    endforeach;
                                    ?>
                                    <div class="col-xs-12 col-sm-6">
                                        <?php
                                        foreach ($postslist as $index => $post) :
                                            setup_postdata($post);
                                            if ($index == 0)
                                                continue;
                                            ?> 
                                            <div class="news-item">
                                                <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                    <div class="col-xs-5 col-sm-3 plnone"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a></div> 
                                                <?php endif; ?>  
                                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            </div>
                                            <?php
                                        endforeach;
                                        wp_reset_postdata();
                                        ?>
                                    </div>                                    
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="rmholder">
                                            <?php echo category_read_more($cat_economy,'অর্থনীতি-উন্নয়নের'); ?> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-5">                       
                        <div class="row hidden-xs-down">
                            <div class="col-xs-12 col-sm-12 addvertise">
                                <?php echo do_shortcode('[amads id="681" size="336x280" title="Home sidebar-1 445x280"]'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="heading"><h3 class="panel-heading"><?php echo category_link($cat_spotlight, 'এডিটর্স চয়েস'); ?></h3></div>
                                <?php
                                $args = array('posts_per_page' => 4, 'post_status' => 'publish', 'category' => $cat_spotlight);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                    $divclose = false;
                                    if ($index % 2 == 0):
                                        echo '<div class="row">';
                                        $divclose = true;
                                    endif;
                                    ?> 
                                    <div class="col-xs-12 col-sm-6">
                                        <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                            <div class="col-xs-5 col-sm-12 plnone pdr0 mpdr8"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'medium'); ?></a></div> 
                                        <?php endif; ?>
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                                        <p class="rmholder">
                                            <?php echo read_more(get_the_ID()); ?>
                                        </p>                                   
                                    </div>
                                    <?php
                                    if ($index > 0 && $index % 2 != 0):
                                        echo '</div>';
                                        $divclose = false;
                                    endif;
                                endforeach;
                                wp_reset_postdata();
                                if ($divclose):
                                    echo '</div>';
                                endif;
                                ?>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="rmholder">
                                            <?php echo category_read_more($cat_spotlight,'এডিটর্স চয়েসের'); ?> 
                                        </div>
                                    </div>
                                </div>
                                <div class="row">&nbsp;</div>
                            </div>
                        </div>
                        <div class="row hidden-xs-down">
                            <div class="col-xs-12 col-sm-12 addvertise">
                                <?php echo do_shortcode('[amads id="683" size="468x60" title="Home sidebar-2 445×80"]'); ?>
                            </div>
                        </div>                        
                        <div class="row hidden-xs-down">
                            <div class="col-xs-12 col-sm-12">
                                <div class="heading">
                                    <h3 class="panel-heading"><?php echo category_link($cat_saradesh, 'সারাদেশ'); ?></h3>
                                </div>
                                <?php
                                $args = array('posts_per_page' => 4, 'post_status' => 'publish', 'category' => $cat_saradesh);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                    $divclose = false;
                                    if ($index % 2 == 0):
                                        echo '<div class="row">';
                                        $divclose = true;
                                    endif;
                                    ?> 
                                    <div class="col-xs-12 col-sm-6">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                            <div class="col-xs-5 col-sm-6 plnone"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a></div> 
                                        <?php endif; ?>
                                        <?php echo excerpt(15) ?>
                                        <p class="rmholder">
                                            <?php echo read_more(get_the_ID()); ?>
                                        </p>                                   
                                    </div>
                                    <?php
                                    if ($index > 0 && $index % 2 != 0):
                                        echo '</div>';
                                        $divclose = false;
                                    endif;
                                endforeach;
                                wp_reset_postdata();
                                if ($divclose):
                                    echo '</div>';
                                endif;
                                ?>
                                <div class="rmholder">
                                    <?php echo category_read_more($cat_saradesh,'সারাদেশের'); ?> 
                                </div>
                            </div>
                        </div>
                        <div class="row hidden-xs-down">
                            <div class="col-xs-12 col-sm-12 addvertise">
                                <?php echo do_shortcode('[amads id="685" size="468x60" title="Home sidebar-3 445x80"]'); ?>
                            </div>
                        </div>
                        <div class="row">            
                            <div class="col-xs-12 col-sm-12">
                                <div class="heading">
                                    <h3 class="panel-heading"><?php echo category_link($cat_district, 'জেলার সংবাদ'); ?></h3>
                                </div>
                                <?php
                                $args = array('posts_per_page' => 4, 'post_status' => 'publish', 'category' => $cat_district);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                    $divclose = false;
                                    if ($index % 2 == 0):
                                        echo '<div class="row">';
                                        $divclose = true;
                                    endif;
                                    ?> 
                                    <div class="col-xs-12 col-sm-6">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                            <div class="col-xs-5 col-sm-6 plnone"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a></div> 
                                        <?php endif; ?>
                                        <?php echo excerpt(15) ?>
                                        <p class="rmholder">
                                            <?php echo read_more(get_the_ID()); ?>
                                        </p>                                   
                                    </div>
                                    <?php
                                    if ($index > 0 && $index % 2 != 0):
                                        echo '</div>';
                                        $divclose = false;
                                    endif;
                                endforeach;
                                wp_reset_postdata();
                                if ($divclose):
                                    echo '</div>';
                                endif;
                                ?>
                                <div class="rmholder">
                                    <?php echo category_read_more($cat_district,'জেলার'); ?> 
                                </div>
                            </div>
                        </div>
                        <div class="row hidden-xs-down">
                            <div class="col-xs-12 col-sm-12 addvertise">
                                <?php echo do_shortcode('[amads id="687" size="468x60" title="Home sidebar-4 445×80"]'); ?>
                            </div>
                        </div>
                        <div class="row hidden-xs-down">
                            <div class="col-xs-12 col-sm-12">
                                <div class="heading">
                                    <h3 class="panel-heading"><?php echo category_link($cat_politics, 'রাজনীতি'); ?></h3>
                                </div>
                                <?php
                                $args = array('posts_per_page' => 4, 'post_status' => 'publish', 'category' => $cat_politics);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                    $divclose = false;
                                    if ($index % 2 == 0):
                                        echo '<div class="row">';
                                        $divclose = true;
                                    endif;
                                    ?> 
                                    <div class="col-xs-12 col-sm-6">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                            <div class="col-xs-5 col-sm-6 plnone"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a></div> 
                                        <?php endif; ?>
                                        <?php echo excerpt(15) ?>
                                        <p class="rmholder">
                                            <?php echo read_more(get_the_ID()); ?>
                                        </p>                                   
                                    </div>
                                    <?php
                                    if ($index > 0 && $index % 2 != 0):
                                        echo '</div>';
                                        $divclose = false;
                                    endif;
                                endforeach;
                                wp_reset_postdata();
                                if ($divclose):
                                    echo '</div>';
                                endif;
                                ?>
                                <div class="rmholder">
                                    <?php echo category_read_more($cat_politics,'রাজনীতির'); ?> 
                                </div>
                            </div>
                        </div>
                        <div class="row hidden-xs-down">
                            <div class="col-xs-12 col-sm-12 addvertise">
                                <?php echo do_shortcode('[amads id="688" size="468x60" title="Home sidebar-5 445×80"]'); ?>
                            </div>
                        </div>
                        <div class="row hidden-xs-down">
                            <div class="col-xs-12 col-sm-12">
                                <div class="heading">
                                    <h3 class="panel-heading"><?php echo category_link($cat_international, 'আন্তর্জাতিক'); ?></h3>
                                </div>
                                <?php
                                $args = array('posts_per_page' => 4, 'post_status' => 'publish', 'category' => $cat_international);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                    $divclose = false;
                                    if ($index % 2 == 0):
                                        echo '<div class="row">';
                                        $divclose = true;
                                    endif;
                                    ?> 
                                    <div class="col-xs-12 col-sm-6">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                                        <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                            <div class="col-xs-5 col-sm-6 plnone"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a></div> 
                                        <?php endif; ?>
                                        <?php echo excerpt(15) ?>
                                        <p class="rmholder">
                                            <?php echo read_more(get_the_ID()); ?>
                                        </p>                                   
                                    </div>
                                    <?php
                                    if ($index > 0 && $index % 2 != 0):
                                        echo '</div>';
                                        $divclose = false;
                                    endif;
                                endforeach;
                                wp_reset_postdata();
                                if ($divclose):
                                    echo '</div>';
                                endif;
                                ?>
                                <div class="rmholder">
                                    <?php echo category_read_more($cat_international,'আন্তর্জাতিকের'); ?> 
                                </div>
                            </div>
                        </div>
                        <div class="row hidden-xs-down">
                            <div class="col-xs-12 col-sm-12 addvertise">
                                <?php echo do_shortcode('[amads id="689" size="468x60" title="Home sidebar-6 445×80"]'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="heading">
                                    <h3 class="panel-heading"><?php echo category_link($cat_showbiz, 'শোবিজ'); ?></h3>
                                </div>
                                <?php
                                $args = array('posts_per_page' => 4, 'post_status' => 'publish', 'category' => $cat_showbiz);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                    $divclose = false;
                                    if ($index % 2 == 0):
                                        echo '<div class="row">';
                                        $divclose = true;
                                    endif;
                                    ?> 
                                    <div class="col-xs-12 col-sm-6">
                                        <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                            <div class="col-xs-5 col-sm-12 plnone"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'medium'); ?></a></div> 
                                        <?php endif; ?>
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                                        <p class="rmholder">
                                            <?php echo read_more(get_the_ID()); ?>
                                        </p>                                   
                                    </div>
                                    <?php
                                    if ($index > 0 && $index % 2 != 0):
                                        echo '</div>';
                                        $divclose = false;
                                    endif;
                                endforeach;
                                wp_reset_postdata();
                                if ($divclose):
                                    echo '</div>';
                                endif;
                                ?>
                                <div class="rmholder">
                                    <?php echo category_read_more($cat_showbiz,'শোবিজের'); ?> 
                                </div>
                            </div>
                        </div>
                        <div class="row hidden-xs-down">
                            <div class="col-xs-12 col-sm-12 addvertise">
                                <?php echo do_shortcode('[amads id="690" size="468x60" title="Home sidebar-7 445×80"]'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="heading">
                                    <h3 class="panel-heading"><?php echo category_link($cat_life_style, 'লাইফস্টাইল'); ?> ।। <?php echo category_link($cat_fashion, 'ফ্যাশন-গ্লামার'); ?></h3>
                                </div>
                                <div class="row">
                                    <?php
                                    $args = array('posts_per_page' => 1, 'post_status' => 'publish', 'category' => $cat_life_style);
                                    $postslist = get_posts($args);
                                    foreach ($postslist as $index => $post) :
                                        setup_postdata($post);
                                        ?> 
                                        <div class="col-xs-12 col-sm-6">                                      
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-xs-5 col-sm-12 plnone pdr0 mpdr8">
                                                    <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'medium'); ?></a>
                                                </div>
                                            <?php endif; ?>
                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            <div class="rmholder">
                                                <?php echo category_read_more($cat_life_style,'লাইফস্টাইলের'); ?> 
                                            </div>
                                        </div>
                                        <?php
                                    endforeach;
                                    wp_reset_postdata();
                                    ?>
                                    <?php
                                    $args = array('posts_per_page' => 1, 'post_status' => 'publish', 'category' => $cat_fashion);
                                    $postslist = get_posts($args);
                                    foreach ($postslist as $index => $post) :
                                        setup_postdata($post);
                                        ?> 
                                        <div class="col-xs-12 col-sm-6">                                      
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-xs-5 col-sm-12 plnone pdr0 mpdr8">
                                                    <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'medium'); ?></a>
                                                </div>
                                            <?php endif; ?>
                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            <div class="rmholder">
                                                <?php echo category_read_more($cat_fashion,'ফ্যাশন-গ্লামারের'); ?> 
                                            </div>
                                        </div>
                                        <?php
                                    endforeach;
                                    wp_reset_postdata();
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="row hidden-xs-down">
                            <div class="col-xs-12 col-sm-12 addvertise">
                                <?php echo do_shortcode('[amads id="691" size="468x60" title="Home sidebar-8 445×80"]'); ?>
                            </div>
                        </div>
                        <div class="row hidden-xs-down">
                            <div class="col-xs-12 col-sm-12">
                                <div class="heading">
                                    <h3 class="panel-heading"><?php echo category_link($cat_job, 'চাকরির বাজার'); ?></h3>
                                </div>
                                <?php
                                $args = array('posts_per_page' => 2, 'post_status' => 'publish', 'category' => $cat_job);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                    $divclose = false;
                                    if ($index % 2 == 0):
                                        echo '<div class="row">';
                                        $divclose = true;
                                    endif;
                                    ?> 
                                    <div class="col-xs-12 col-sm-6"> 
                                        <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                            <div class="col-xs-5 col-sm-12 plnone pdr0 mpdr8"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'medium'); ?></a></div> 
                                        <?php endif; ?>
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <?php //echo excerpt(15) ?>
                                        <p class="rmholder">
                                            <?php echo read_more(get_the_ID()); ?>
                                        </p>                                   
                                    </div>
                                    <?php
                                    if ($index > 0 && $index % 2 != 0):
                                        echo '</div>';
                                        $divclose = false;
                                    endif;
                                endforeach;
                                wp_reset_postdata();
                                if ($divclose):
                                    echo '</div>';
                                endif;
                                ?>
                                <div class="rmholder">
                                    <?php echo category_read_more($cat_job); ?> 
                                </div>
                            </div>
                        </div>
                        <div class="row hidden-xs-down">
                            <div class="col-xs-12 col-sm-12 addvertise">
                                <?php echo do_shortcode('[amads id="692" size="468x60" title="Home sidebar-9 445×80"]'); ?>
                            </div>
                        </div>
                        <div class="row hidden-xs-down">
                            <div class="col-xs-12 col-sm-12">
                                <div class="heading">
                                    <h3 class="panel-heading"><?php echo category_link($cat_sahitto, 'সাহিত্য-সংস্কৃতি'); ?></h3>
                                </div>
                                <?php
                                $args = array('posts_per_page' => 2, 'post_status' => 'publish', 'category' => $cat_sahitto);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                    $divclose = false;
                                    if ($index % 2 == 0):
                                        echo '<div class="row">';
                                        $divclose = true;
                                    endif;
                                    ?> 
                                    <div class="col-xs-12 col-sm-6">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                            <div class="col-xs-5 col-sm-6 plnone"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a></div> 
                                        <?php endif; ?>
                                        <?php echo excerpt(15) ?>
                                        <p class="rmholder">
                                            <?php echo read_more(get_the_ID()); ?>
                                        </p>                                   
                                    </div>
                                    <?php
                                    if ($index > 0 && $index % 2 != 0):
                                        echo '</div>';
                                        $divclose = false;
                                    endif;
                                endforeach;
                                wp_reset_postdata();
                                if ($divclose):
                                    echo '</div>';
                                endif;
                                ?>
                                <div class="rmholder">
                                    <?php echo category_read_more($cat_sahitto); ?> 
                                </div>
                            </div>
                        </div>
                        <div class="row hidden-xs-down">
                            <div class="col-xs-12 col-sm-12 addvertise">
                                <?php echo do_shortcode('[amads id="693" size="468x60" title="Home sidebar-10 445×80"]'); ?>
                            </div>
                        </div>
                        <div class="row hidden-xs-down">
                            <div class="col-xs-12 col-sm-12">
                                <div class="heading">
                                    <h3 class="panel-heading"><?php echo category_link($cat_todays_woman, 'আজকের নারী'); ?></h3>
                                </div>
                                <?php
                                $args = array('posts_per_page' => 2, 'post_status' => 'publish', 'category' => $cat_todays_woman);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                    $divclose = false;
                                    if ($index % 2 == 0):
                                        echo '<div class="row">';
                                        $divclose = true;
                                    endif;
                                    ?> 
                                    <div class="col-xs-12 col-sm-6">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                            <div class="col-xs-5 col-sm-6 plnone"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a></div> 
                                        <?php endif; ?>
                                        <?php echo excerpt(15) ?>
                                        <p class="rmholder">
                                            <?php echo read_more(get_the_ID()); ?>
                                        </p>                                   
                                    </div>
                                    <?php
                                    if ($index > 0 && $index % 2 != 0):
                                        echo '</div>';
                                        $divclose = false;
                                    endif;
                                endforeach;
                                wp_reset_postdata();
                                if ($divclose):
                                    echo '</div>';
                                endif;
                                ?>
                                <div class="rmholder">
                                    <?php echo category_read_more($cat_todays_woman); ?> 
                                </div>
                            </div>
                        </div>
                        <div class="row hidden-xs-down">
                            <div class="col-xs-12 col-sm-12 addvertise">
                                <?php echo do_shortcode('[amads id="694" size="468x60" title="Home sidebar-11 445×80"]'); ?>
                            </div>
                        </div>
                        <div class="row hidden-xs-down">
                            <div class="col-xs-12 col-sm-12">
                                <div class="heading">
                                    <h3 class="panel-heading"><?php echo category_link($cat_childreen, 'শিশু-কিশোর'); ?></h3>
                                </div>
                                <?php
                                $args = array('posts_per_page' => 2, 'post_status' => 'publish', 'category' => $cat_childreen);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                    $divclose = false;
                                    if ($index % 2 == 0):
                                        echo '<div class="row">';
                                        $divclose = true;
                                    endif;
                                    ?> 
                                    <div class="col-xs-12 col-sm-6">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                                        <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                            <div class="col-xs-5 col-sm-6 plnone"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a></div> 
                                        <?php endif; ?>
                                        <?php echo excerpt(15) ?>
                                        <p class="rmholder">
                                            <?php echo read_more(get_the_ID()); ?>
                                        </p>                                   
                                    </div>
                                    <?php
                                    if ($index > 0 && $index % 2 != 0):
                                        echo '</div>';
                                        $divclose = false;
                                    endif;
                                endforeach;
                                wp_reset_postdata();
                                if ($divclose):
                                    echo '</div>';
                                endif;
                                ?>
                                <div class="rmholder">
                                    <?php echo category_read_more($cat_childreen); ?> 
                                </div>
                            </div>
                        </div>
                        <div class="row hidden-xs-down">
                            <div class="col-xs-12 col-sm-12 addvertise">
                                <?php echo do_shortcode('[amads id="695" size="468x60" title="Home sidebar-12 445x80"]'); ?>
                            </div>
                        </div>
                        <div class="row hidden-xs-down">
                            <div class="col-xs-12 col-sm-12">
                                <div class="sidebar-head"><h3><?php echo category_link($cat_opinion, 'মতামত'); ?></h3></div>
                                <?php
                                $args = array('posts_per_page' => 4, 'post_status' => 'publish', 'category' => $cat_opinion);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                    $divclose = false;
                                    if ($index % 2 == 0):
                                        echo '<div class="row">';
                                        $divclose = true;
                                    endif;
                                    ?> 
                                    <div class="col-xs-12 col-sm-6">
                                        <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                            <div class="col-xs-5 col-sm-12 plnone pdr0 mpdr8"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'medium'); ?></a></div> 
                                        <?php endif; ?>
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <p class="rmholder">
                                            <?php echo read_more(get_the_ID()); ?>
                                        </p>                                   
                                    </div>
                                    <?php
                                    if ($index > 0 && $index % 2 != 0):
                                        echo '</div>';
                                        $divclose = false;
                                    endif;
                                endforeach;
                                wp_reset_postdata();
                                if ($divclose):
                                    echo '</div>';
                                endif;
                                ?>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="rmholder">
                                            <?php echo category_read_more($cat_opinion); ?> 
                                        </div>
                                    </div>
                                </div>
                                <div class="row">&nbsp;</div>
                            </div>

                            <div class="col-xs-12 col-sm-12 hidden-xs-down">
                                <?php
                                $args = array(
                                    'before_widget' => '<div class="widget">',
                                    'after_widget' => '</div></div>',
                                    'before_title' => '<div class="sidebar-head">',
                                    'after_title' => '</div><div class="widgetBody">');
                                $instance = array('bangla' => 1, 'title' => 'আর্কাইভ');
                                the_widget('ajax_ac_widget', $instance, $args);
                                ?>
                            </div>
                        </div>
                        <div class="row hidden-xs-down">
                            <div class="col-xs-12 col-sm-12 addvertise">
                                <?php //echo do_shortcode('[amads id="925" size="728x90" title="Home-728x90-1th"]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </main><!-- #main -->

        </div><!-- #primary -->

    </div><!-- Container end -->

</div><!-- Wrapper end -->
<?php get_footer(); ?>