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
                        <div class="row mrb20">
                            <div class="col-xs-12 col-sm-8">  
                                <?php
                                /*
                                 * STICKY POSTS
                                 */
                                $args_sticky = array(
                                    'posts_per_page' => 1,
                                    'cat' => $cat_prochod,
                                    'post__in' => get_option('sticky_posts'),
                                    'post_status' => 'publish',
                                );
                                $the_query = new WP_Query($args_sticky);
                                while ($the_query->have_posts()) : $the_query->the_post();
                                    ?> 
                                    <div>
                                        <h2 class="headline-feature"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> 
                                        <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                            <div class="col-sm-6 plnone"><img class="responsive" src="<?php echo wp_get_thumbnail_url(get_the_ID()); ?>" alt="<?php the_title(); ?>"/></div>
                                        <?php endif; ?>
                                        <?php echo excerpt(50) ?>
                                        <div class="rmholder">
                                            <?php echo read_more(get_the_ID()); ?>
                                        </div>                                   
                                    </div>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <?php
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
                                $index = 1;
                                while ($the_query->have_posts()) : $the_query->the_post();
                                    if ($index == 1) {
                                        ?> 
                                        <div class="news-item">
                                            <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-sm-6 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></div> 
                                            <?php endif; ?>
                                            <?php echo excerpt(7) ?>
                                            <div class="rmholder">
                                                <?php echo read_more(get_the_ID()); ?>
                                            </div>                                   
                                        </div>
                                        <?php
                                        $index ++;
                                    }else {
                                        ?>
                                        <div class="news-item">
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-sm-3 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="<?php the_title(); ?>"/></div> 
                                            <?php endif; ?>  
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </div>
                                        <?php
                                    }
                                endwhile;
                                wp_reset_postdata();
                                ?>
                                <div class="rmholder">
                                    <?php echo category_read_more($cat_prochod); ?> 
                                </div>
                            </div>
                        </div> 
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
                                    <div>
                                        <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                        <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                            <div class="col-sm-6 plnone"><img class="responsive" src="<?php echo wp_get_thumbnail_url(get_the_ID()); ?>" alt="<?php the_title(); ?>"/></div>
                                        <?php endif; ?>
                                        <?php echo excerpt(20) ?>
                                        <div class="rmholder">
                                            <?php echo read_more(get_the_ID()); ?>
                                        </div>                                   
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
                                    <div>
                                        <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                        <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                            <div class="col-sm-6 plnone"><img class="responsive" src="<?php echo wp_get_thumbnail_url(get_the_ID()); ?>" alt="<?php the_title(); ?>"/></div>
                                        <?php endif; ?>
                                        <?php echo excerpt(20) ?>
                                        <div class="rmholder">
                                            <?php echo read_more(get_the_ID()); ?>
                                        </div>                                   
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
                                    <div>
                                        <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                        <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                            <div class="col-sm-6 plnone"><img class="responsive" src="<?php echo wp_get_thumbnail_url(get_the_ID()); ?>" alt="<?php the_title(); ?>"/></div>
                                        <?php endif; ?>
                                        <?php echo excerpt(20) ?>
                                        <div class="rmholder">
                                            <?php echo read_more(get_the_ID()); ?>
                                        </div>                                   
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
                                    <div>
                                        <?php //the_date();     ?>
                                        <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                        <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                            <div class="col-sm-6 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></div> 
                                        <?php endif; ?>
                                        <?php echo excerpt(15) ?>
                                        <div class="rmholder">
                                            <?php echo read_more(get_the_ID()); ?>
                                        </div>                                   
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
                                    <div>
                                        <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                        <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                            <div class="col-sm-6 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></div> 
                                        <?php endif; ?>
                                        <?php echo excerpt(15) ?>
                                        <div class="rmholder">
                                            <?php echo read_more(get_the_ID()); ?>
                                        </div>                                   
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
                                    <div>
                                        <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                        <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                            <div class="col-sm-6 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></div> 
                                        <?php endif; ?>
                                        <?php echo excerpt(15) ?>
                                        <div class="rmholder">
                                            <?php echo read_more(get_the_ID()); ?>
                                        </div>                                   
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
                                    <div>
                                        <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                        <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                            <div class="col-sm-6 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></div> 
                                        <?php endif; ?>
                                        <?php echo excerpt(15) ?>
                                        <div class="rmholder">
                                            <?php echo read_more(get_the_ID()); ?>
                                        </div>                                   
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
                                    <div>
                                        <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                        <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                            <div class="col-sm-6 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></div> 
                                        <?php endif; ?>
                                        <?php echo excerpt(15) ?>
                                        <div class="rmholder">
                                            <?php echo read_more(get_the_ID()); ?>
                                        </div>                                   
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
                                    <div>
                                        <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                        <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                            <div class="col-sm-6 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></div> 
                                        <?php endif; ?>
                                        <?php echo excerpt(15) ?>
                                        <div class="rmholder">
                                            <?php echo read_more(get_the_ID()); ?>
                                        </div>                                   
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
                                    <div>
                                        <h3> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                                        <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                            <div class="col-sm-6 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></div> 
                                        <?php endif; ?>
                                        <?php echo excerpt(15) ?>
                                        <div class="rmholder">
                                            <?php echo read_more(get_the_ID()); ?>
                                        </div>                                   
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
                                    <div>
                                        <h3> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                                        <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                            <div class="col-sm-6 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></div> 
                                        <?php endif; ?>
                                        <?php echo excerpt(15) ?>
                                        <div class="rmholder">
                                            <?php echo read_more(get_the_ID()); ?>
                                        </div>                                   
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
                                    <div>
                                        <h3> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                                        <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                            <div class="col-sm-6 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></div> 
                                        <?php endif; ?>
                                        <?php echo excerpt(15) ?>
                                        <div class="rmholder">
                                            <?php echo read_more(get_the_ID()); ?>
                                        </div>                                   
                                    </div>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                        <div class="row mrb20">
                            <div class="col-xs-12 col-sm-12">
                                <div class="heading"><h3>কর্পোরেট নিউজ</h3></div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <?php
                                        $args = array('posts_per_page' => 6, 'post_status' => 'publish', 'category' => $cat_corporate_news);
                                        $postslist = get_posts($args);
                                        foreach ($postslist as $index => $post) :
                                            setup_postdata($post);
                                            ?> 
                                            <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-sm-6 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></div> 
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
                                                    <div class="col-sm-2 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="<?php the_title(); ?>"/></div> 
                                                <?php endif; ?>  
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
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
                                <div class="heading"><h3>ব্যাংক বীমা আর্থিক খাত</h3></div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <?php
                                        $args = array('posts_per_page' => 6, 'post_status' => 'publish', 'category' => $cat_bank);
                                        $postslist = get_posts($args);
                                        foreach ($postslist as $index => $post) :
                                            setup_postdata($post);
                                            ?> 
                                            <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-sm-6 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></div> 
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
                                                    <div class="col-sm-2 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="<?php the_title(); ?>"/></div> 
                                                <?php endif; ?>  
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
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
                                            <?php echo category_read_more($cat_bank); ?> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mrb20">
                            <div class="col-xs-12 col-sm-6">
                                <div class="heading"><h3>এডুবাজার</h3></div>
                                <?php
                                $args = array('posts_per_page' => 6, 'post_status' => 'publish', 'category' => $cat_educationbusiness);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                    if ($index == 0) {
                                        ?> 
                                        <div class="news-item">
                                            <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-sm-6 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></div> 
                                            <?php endif; ?>
                                            <?php echo excerpt(15) ?>
                                            <?php echo read_more(get_the_ID()); ?>                                
                                        </div>
                                    <?php } else {
                                        ?>
                                        <div class="news-item">
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-sm-2 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="<?php the_title(); ?>"/></div> 
                                            <?php endif; ?>  
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </div>
                                        <?php
                                    }
                                endforeach;
                                wp_reset_postdata();
                                ?>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="rmholder">
                                            <?php echo category_read_more($cat_educationbusiness); ?> 
                                        </div>
                                    </div>
                                </div>   
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="heading"><h3>হেলথ বাজার</h3></div>
                                <?php
                                $args = array('posts_per_page' => 6, 'post_status' => 'publish', 'category' => $cat_health_pharma);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                    if ($index == 0) {
                                        ?> 
                                        <div class="news-item">
                                            <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-sm-6 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></div> 
                                            <?php endif; ?>
                                            <?php echo excerpt(15) ?>
                                            <?php echo read_more(get_the_ID()); ?>                                
                                        </div>
                                    <?php } else {
                                        ?>
                                        <div class="news-item">
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-sm-2 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="<?php the_title(); ?>"/></div> 
                                            <?php endif; ?>  
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </div>
                                        <?php
                                    }
                                endforeach;
                                wp_reset_postdata();
                                ?>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="rmholder">
                                            <?php echo category_read_more($cat_health_pharma); ?> 
                                        </div>
                                    </div>
                                </div>
                            </div>                           
                        </div>
                        <div class="row mrb20">
                            <div class="col-xs-12 col-sm-12">
                                <div class="heading"><h3>খেলার বাজার</h3></div>
                                <div class="row">

                                    <div class="col-xs-12 col-sm-6">
                                        <?php
                                        $args = array('posts_per_page' => 6, 'post_status' => 'publish', 'category' => $cat_sports);
                                        $postslist = get_posts($args);
                                        foreach ($postslist as $index => $post) :
                                            setup_postdata($post);
                                            ?> 
                                            <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-xs-12 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></div> 
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
                                                    <div class="col-sm-2 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="<?php the_title(); ?>"/></div> 
                                                <?php endif; ?>  
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
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
                                            <?php echo category_read_more($cat_sports); ?> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mrb20">
                            <div class="col-xs-12 col-sm-12">
                                <div class="heading"><h3>এগ্রিবিজনেস</h3></div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <?php
                                        $args = array('posts_per_page' => 6, 'post_status' => 'publish', 'category' => $cat_agribusiness);
                                        $postslist = get_posts($args);
                                        foreach ($postslist as $index => $post) :
                                            setup_postdata($post);
                                            ?> 
                                            <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-sm-6 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></div> 
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
                                                    <div class="col-sm-2 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="<?php the_title(); ?>"/></div> 
                                                <?php endif; ?>  
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
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
                                            <?php echo category_read_more($cat_agribusiness); ?> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mrb20">
                            <div class="col-xs-12 col-sm-6">
                                <div class="heading"><h3>প্রযুক্তি</h3></div>
                                <?php
                                $args = array('posts_per_page' => 6, 'post_status' => 'publish', 'category' => $cat_technology);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                    if ($index == 0) {
                                        ?> 
                                        <div class="news-item">
                                            <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-sm-6 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></div> 
                                            <?php endif; ?>
                                            <?php echo excerpt(15) ?>
                                            <?php echo read_more(get_the_ID()); ?>                                  
                                        </div>
                                    <?php } else {
                                        ?>
                                        <div class="news-item">
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-sm-2 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="<?php the_title(); ?>"/></div> 
                                            <?php endif; ?>  
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </div>
                                        <?php
                                    }
                                endforeach;
                                wp_reset_postdata();
                                ?>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="rmholder">
                                            <?php echo category_read_more($cat_technology); ?> 
                                        </div>
                                    </div>
                                </div>   
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="heading"><h3>টেলিকম</h3></div>
                                <?php
                                $args = array('posts_per_page' => 6, 'post_status' => 'publish', 'category' => $cat_telecom);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                    if ($index == 0) {
                                        ?> 
                                        <div class="news-item">
                                            <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-sm-6 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></div> 
                                            <?php endif; ?>
                                            <?php echo excerpt(15) ?>
                                            <?php echo read_more(get_the_ID()); ?>                                  
                                        </div>
                                    <?php } else {
                                        ?>
                                        <div class="news-item">
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-sm-2 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="<?php the_title(); ?>"/></div> 
                                            <?php endif; ?>  
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </div>
                                        <?php
                                    }
                                endforeach;
                                wp_reset_postdata();
                                ?>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="rmholder">
                                            <?php echo category_read_more($cat_telecom); ?> 
                                        </div>
                                    </div>
                                </div>
                            </div>                           
                        </div>
                        <div class="row mrb20">
                            <div class="col-xs-12 col-sm-6">
                                <div class="heading"><h3>এনার্জি-পাওয়ার</h3></div>
                                <?php
                                $args = array('posts_per_page' => 6, 'post_status' => 'publish', 'category' => $cat_energy_power);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                    if ($index == 0) {
                                        ?> 
                                        <div class="news-item">
                                            <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-sm-6 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></div> 
                                            <?php endif; ?>
                                            <?php echo excerpt(15) ?>
                                            <?php echo read_more(get_the_ID()); ?>                                   
                                        </div>
                                    <?php } else {
                                        ?>
                                        <div class="news-item">
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-sm-2 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="<?php the_title(); ?>"/></div> 
                                            <?php endif; ?>  
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </div>
                                        <?php
                                    }
                                endforeach;
                                wp_reset_postdata();
                                ?>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="rmholder">
                                            <?php echo category_read_more($cat_energy_power); ?> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="heading"><h3>যোগাযোগ</h3></div>
                                <?php
                                $args = array('posts_per_page' => 6, 'post_status' => 'publish', 'category' => $cat_communication);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                    if ($index == 0) {
                                        ?> 
                                        <div class="news-item">
                                            <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-sm-6 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></div> 
                                            <?php endif; ?>
                                            <?php echo excerpt(15) ?>
                                            <?php echo read_more(get_the_ID()); ?>                                 
                                        </div>
                                    <?php } else {
                                        ?>
                                        <div class="news-item">
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-sm-2 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="<?php the_title(); ?>"/></div> 
                                            <?php endif; ?>  
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </div>
                                        <?php
                                    }
                                endforeach;
                                wp_reset_postdata();
                                ?>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="rmholder">
                                            <?php echo category_read_more($cat_communication); ?> 
                                        </div>
                                    </div>
                                </div>   
                            </div>
                        </div>
                        <div class="row mrb20">
                            <div class="col-xs-12 col-sm-12">
                                <div class="heading"><h3>আবাসন নির্মাণ</h3></div>
                                <div class="row">

                                    <div class="col-xs-12 col-sm-6">
                                        <?php
                                        $args = array('posts_per_page' => 6, 'post_status' => 'publish', 'category' => $cat_abason);
                                        $postslist = get_posts($args);
                                        foreach ($postslist as $index => $post) :
                                            setup_postdata($post);
                                            ?> 
                                            <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-sm-6 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></div> 
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
                                                    <div class="col-sm-2 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="<?php the_title(); ?>"/></div> 
                                                <?php endif; ?>  
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
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
                                            <?php echo category_read_more($cat_abason); ?> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mrb20">
                            <div class="col-xs-12 col-sm-6">
                                <div class="heading"><h3>পর্যটন</h3></div>
                                <?php
                                $args = array('posts_per_page' => 6, 'post_status' => 'publish', 'category' => $cat_porjoton);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                    if ($index == 0) {
                                        ?> 
                                        <div class="news-item">
                                            <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-sm-6 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></div> 
                                            <?php endif; ?>
                                            <?php echo excerpt(15) ?>
                                            <?php echo read_more(get_the_ID()); ?>                                   
                                        </div>
                                    <?php } else {
                                        ?>
                                        <div class="news-item">
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-sm-2 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="<?php the_title(); ?>"/></div> 
                                            <?php endif; ?>  
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </div>
                                        <?php
                                    }
                                endforeach;
                                wp_reset_postdata();
                                ?>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="rmholder">
                                            <?php echo category_read_more($cat_porjoton); ?> 
                                        </div>
                                    </div>
                                </div>   
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="heading"><h3>শিল্প বাজার</h3></div>
                                <?php
                                $args = array('posts_per_page' => 6, 'post_status' => 'publish', 'category' => $cat_shilpo);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                    if ($index == 0) {
                                        ?> 
                                        <div class="news-item">
                                            <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-sm-6 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></div> 
                                            <?php endif; ?>
                                            <?php echo excerpt(15) ?>
                                            <?php echo read_more(get_the_ID()); ?>                                 
                                        </div>
                                    <?php } else {
                                        ?>
                                        <div class="news-item">
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-sm-2 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="<?php the_title(); ?>"/></div> 
                                            <?php endif; ?>  
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </div>
                                        <?php
                                    }
                                endforeach;
                                wp_reset_postdata();
                                ?>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="rmholder">
                                            <?php echo category_read_more($cat_shilpo); ?> 
                                        </div>
                                    </div>
                                </div>
                            </div>                           
                        </div>
                        <div class="row mrb20">
                            <div class="col-xs-12 col-sm-6">
                                <div class="heading"><h3>গার্মেন্টস-ক্লথিং</h3></div>
                                <?php
                                $args = array('posts_per_page' => 6, 'post_status' => 'publish', 'category' => $cat_garments);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                    if ($index == 0) {
                                        ?> 
                                        <div class="news-item">
                                            <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-sm-6 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></div> 
                                            <?php endif; ?>
                                            <?php echo excerpt(15) ?>
                                            <?php echo read_more(get_the_ID()); ?>                                   
                                        </div>
                                    <?php } else {
                                        ?>
                                        <div class="news-item">
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-sm-2 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="<?php the_title(); ?>"/></div> 
                                            <?php endif; ?>  
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </div>
                                        <?php
                                    }
                                endforeach;
                                wp_reset_postdata();
                                ?>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="rmholder">
                                            <?php echo category_read_more($cat_garments); ?> 
                                        </div>
                                    </div>
                                </div>   
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="heading"><h3>রপ্তানি-বাণিজ্য</h3></div>
                                <?php
                                $args = array('posts_per_page' => 6, 'post_status' => 'publish', 'category' => $cat_export);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                    if ($index == 0) {
                                        ?> 
                                        <div class="news-item">
                                            <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-sm-6 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></div> 
                                            <?php endif; ?>
                                            <?php echo excerpt(15) ?>
                                            <?php echo read_more(get_the_ID()); ?>                                 
                                        </div>
                                    <?php } else {
                                        ?>
                                        <div class="news-item">
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-sm-2 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="<?php the_title(); ?>"/></div> 
                                            <?php endif; ?>  
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </div>
                                        <?php
                                    }
                                endforeach;
                                wp_reset_postdata();
                                ?>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="rmholder">
                                            <?php echo category_read_more($cat_export); ?> 
                                        </div>
                                    </div>
                                </div>
                            </div>                           
                        </div>
                        <div class="row mrb20">
                            <div class="col-xs-12 col-sm-12">
                                <div class="heading"><h3>অর্থনীতি-উন্নয়ন</h3></div>
                                <div class="row">

                                    <div class="col-xs-12 col-sm-6">
                                        <?php
                                        $args = array('posts_per_page' => 6, 'post_status' => 'publish', 'category' => $cat_economy);
                                        $postslist = get_posts($args);
                                        foreach ($postslist as $index => $post) :
                                            setup_postdata($post);
                                            ?> 
                                            <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-sm-6 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></div> 
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
                                                    <div class="col-sm-2 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="<?php the_title(); ?>"/></div> 
                                                <?php endif; ?>  
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
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
                                            <?php echo category_read_more($cat_economy); ?> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-5">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="heading">
                                    <h3 class="panel-heading">পুঁজিবাজার</h3>
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
                                            <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-sm-6 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></div> 
                                            <?php endif; ?>
                                            <?php echo excerpt(15) ?>
                                            <p class="rmholder">
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
                                        'posts_per_page' => 5,
                                        'cat' => $cat_stockmarket,
                                        'post__not_in' => get_option('sticky_posts'),
                                        'post_status' => 'publish',
                                    );
                                    $the_query = new WP_Query($args);
                                    while ($the_query->have_posts()) : $the_query->the_post();
                                        ?>
                                        <li class="list-item">
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-sm-3 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="<?php the_title(); ?>"/></div> 
                                            <?php endif; ?>  
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </li>
                                        <?php
                                    endwhile;
                                    wp_reset_postdata();
                                    ?>
                                    <li class="list-item rmholder">
                                        <?php echo category_read_more($cat_stockmarket); ?> 
                                    </li>  
                                </ul>

                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <h4><span style="color:red">সরাসরি সম্প্রচার</span></h4>
                                        <iframe width="100%" height="180" src="https://www.youtube.com/embed/FKv8gu_slXg?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>                                       
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="heading">
                                            <h3 class="panel-heading">চাকরির বাজার</h3>
                                        </div>
                                        <?php
                                        $args = array('posts_per_page' => 1, 'post_status' => 'publish', 'category' => $cat_job);
                                        $postslist = get_posts($args);
                                        foreach ($postslist as $index => $post) :
                                            setup_postdata($post);
                                            ?> 
                                            <div>                                         
                                                <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                    <a href="<?php the_permalink(); ?>"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></a>
                                                <?php endif; ?>
                                                <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>                                 
                                            </div>
                                            <?php
                                        endforeach;
                                        wp_reset_postdata();
                                        ?>

                                        <div class="rmholder">
                                            <?php echo category_read_more($cat_job); ?> 
                                        </div>
                                    </div>
                                </div>                               
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="heading">
                                            <h3 class="panel-heading">সারাদেশ</h3>
                                        </div>
                                        <?php
                                        $args = array('posts_per_page' => 4, 'post_status' => 'publish', 'category' => $cat_saradesh);
                                        $postslist = get_posts($args);
                                        foreach ($postslist as $index => $post) :
                                            setup_postdata($post);
                                            $divclose = false;
                                 if($index %2 == 0):
                                     echo '<div class="row">';
                                 $divclose = true;
                                 endif;
                                    ?> 
                                    <div class="col-xs-12 col-sm-6">
                                        <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                        <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                            <div class="col-sm-6 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></div> 
                                        <?php endif; ?>
                                        <?php echo excerpt(15) ?>
                                        <p class="rmholder">
                                            <?php echo read_more(get_the_ID()); ?>
                                        </p>                                   
                                    </div>
                                    <?php
                                    if($index > 0 && $index % 2 != 0):
                                     echo '</div>';
                                        $divclose = false;
                                    endif;
                                endforeach;
                                wp_reset_postdata();
                                if($divclose):
                                     echo '</div>';
                                 endif;
                                        ?>
                                        <div class="rmholder">
                                            <?php echo category_read_more($cat_saradesh); ?> 
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="heading">
                                            <h3 class="panel-heading">জেলার সংবাদ</h3>
                                        </div>
                                        <?php
                                        $args = array('posts_per_page' => 4, 'post_status' => 'publish', 'category' => $cat_district);
                                        $postslist = get_posts($args);
                                        foreach ($postslist as $index => $post) :
                                            setup_postdata($post);
                                            $divclose = false;
                                 if($index %2 == 0):
                                     echo '<div class="row">';
                                 $divclose = true;
                                 endif;
                                    ?> 
                                    <div class="col-xs-12 col-sm-6">
                                        <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                        <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                            <div class="col-sm-6 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></div> 
                                        <?php endif; ?>
                                        <?php echo excerpt(15) ?>
                                        <p class="rmholder">
                                            <?php echo read_more(get_the_ID()); ?>
                                        </p>                                   
                                    </div>
                                    <?php
                                    if($index > 0 && $index % 2 != 0):
                                     echo '</div>';
                                        $divclose = false;
                                    endif;
                                endforeach;
                                wp_reset_postdata();
                                if($divclose):
                                     echo '</div>';
                                 endif;
                                        ?>
                                        <div class="rmholder">
                                            <?php echo category_read_more($cat_district); ?> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="heading">
                                    <h3 class="panel-heading">রাজনীতি</h3>
                                </div>
                                <?php
                                $args = array('posts_per_page' => 4, 'post_status' => 'publish', 'category' => $cat_politics);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                $divclose = false;
                                 if($index %2 == 0):
                                     echo '<div class="row">';
                                 $divclose = true;
                                 endif;
                                    ?> 
                                    <div class="col-xs-12 col-sm-6">
                                        <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                        <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                            <div class="col-sm-6 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></div> 
                                        <?php endif; ?>
                                        <?php echo excerpt(15) ?>
                                        <p class="rmholder">
                                            <?php echo read_more(get_the_ID()); ?>
                                        </p>                                   
                                    </div>
                                    <?php
                                    if($index > 0 && $index % 2 != 0):
                                     echo '</div>';
                                        $divclose = false;
                                    endif;
                                endforeach;
                                wp_reset_postdata();
                                if($divclose):
                                     echo '</div>';
                                 endif;
                                ?>
                                <div class="rmholder">
                                    <?php echo category_read_more($cat_politics); ?> 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="heading">
                                    <h3 class="panel-heading">আন্তর্জাতিক</h3>
                                </div>
                                <?php
                                $args = array('posts_per_page' => 4, 'post_status' => 'publish', 'category' => $cat_international);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                    $divclose = false;
                                 if($index %2 == 0):
                                     echo '<div class="row">';
                                 $divclose = true;
                                 endif;
                                    ?> 
                                    <div class="col-xs-12 col-sm-6">
                                        <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                        <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                            <div class="col-sm-6 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></div> 
                                        <?php endif; ?>
                                        <?php echo excerpt(15) ?>
                                        <p class="rmholder">
                                            <?php echo read_more(get_the_ID()); ?>
                                        </p>                                   
                                    </div>
                                    <?php
                                    if($index > 0 && $index % 2 != 0):
                                     echo '</div>';
                                        $divclose = false;
                                    endif;
                                endforeach;
                                wp_reset_postdata();
                                if($divclose):
                                     echo '</div>';
                                 endif;
                                ?>
                                <div class="rmholder">
                                    <?php echo category_read_more($cat_international); ?> 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="heading">
                                    <h3 class="panel-heading">শোবিজ</h3>
                                </div>
                                <?php
                                $args = array('posts_per_page' => 4, 'post_status' => 'publish', 'category' => $cat_showbiz);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                    $divclose = false;
                                 if($index %2 == 0):
                                     echo '<div class="row">';
                                 $divclose = true;
                                 endif;
                                    ?> 
                                    <div class="col-xs-12 col-sm-6">
                                        <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                        <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                            <div class="col-sm-6 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></div> 
                                        <?php endif; ?>
                                        <?php echo excerpt(15) ?>
                                        <p class="rmholder">
                                            <?php echo read_more(get_the_ID()); ?>
                                        </p>                                   
                                    </div>
                                    <?php
                                    if($index > 0 && $index % 2 != 0):
                                     echo '</div>';
                                        $divclose = false;
                                    endif;
                                endforeach;
                                wp_reset_postdata();
                                if($divclose):
                                     echo '</div>';
                                 endif;
                                ?>
                                <div class="rmholder">
                                    <?php echo category_read_more($cat_showbiz); ?> 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="heading">
                                    <h3 class="panel-heading">লাইফ স্টাইল</h3>
                                </div>
                                <?php
                                $args = array('posts_per_page' => 4, 'post_status' => 'publish', 'category' => $cat_life_style);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                    $divclose = false;
                                 if($index %2 == 0):
                                     echo '<div class="row">';
                                 $divclose = true;
                                 endif;
                                    ?> 
                                    <div class="col-xs-12 col-sm-6">
                                        <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                        <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                            <div class="col-sm-6 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></div> 
                                        <?php endif; ?>
                                        <?php echo excerpt(15) ?>
                                        <p class="rmholder">
                                            <?php echo read_more(get_the_ID()); ?>
                                        </p>                                   
                                    </div>
                                    <?php
                                    if($index > 0 && $index % 2 != 0):
                                     echo '</div>';
                                        $divclose = false;
                                    endif;
                                endforeach;
                                wp_reset_postdata();
                                if($divclose):
                                     echo '</div>';
                                 endif;
                                ?>
                                <div class="rmholder">
                                    <?php echo category_read_more($cat_life_style); ?> 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="heading">
                                    <h3 class="panel-heading">ফ্যাশন-গ্লামার</h3>
                                </div>
                                <?php
                                $args = array('posts_per_page' => 4, 'post_status' => 'publish', 'category' => $cat_fashion);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                    $divclose = false;
                                 if($index %2 == 0):
                                     echo '<div class="row">';
                                 $divclose = true;
                                 endif;
                                    ?> 
                                    <div class="col-xs-12 col-sm-6">
                                        <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                        <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                            <div class="col-sm-6 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></div> 
                                        <?php endif; ?>
                                        <?php echo excerpt(15) ?>
                                        <p class="rmholder">
                                            <?php echo read_more(get_the_ID()); ?>
                                        </p>                                   
                                    </div>
                                    <?php
                                    if($index > 0 && $index % 2 != 0):
                                     echo '</div>';
                                        $divclose = false;
                                    endif;
                                endforeach;
                                wp_reset_postdata();
                                if($divclose):
                                     echo '</div>';
                                 endif;
                                ?>
                                <div class="rmholder">
                                    <?php echo category_read_more($cat_fashion); ?> 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="heading">
                                    <h3 class="panel-heading">সাহিত্য-সংস্কৃতি</h3>
                                </div>
                                <?php
                                $args = array('posts_per_page' => 4, 'post_status' => 'publish', 'category' => $cat_sahitto);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                $divclose = false;
                                 if($index %2 == 0):
                                     echo '<div class="row">';
                                 $divclose = true;
                                 endif;
                                    ?> 
                                    <div class="col-xs-12 col-sm-6">
                                        <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                        <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                            <div class="col-sm-6 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></div> 
                                        <?php endif; ?>
                                        <?php echo excerpt(15) ?>
                                        <p class="rmholder">
                                            <?php echo read_more(get_the_ID()); ?>
                                        </p>                                   
                                    </div>
                                    <?php
                                    if($index > 0 && $index % 2 != 0):
                                     echo '</div>';
                                        $divclose = false;
                                    endif;
                                endforeach;
                                wp_reset_postdata();
                                if($divclose):
                                     echo '</div>';
                                 endif;
                                ?>
                                <div class="rmholder">
                                    <?php echo category_read_more($cat_sahitto); ?> 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="heading">
                                    <h3 class="panel-heading">আজকের নারী</h3>
                                </div>
                                <?php
                                $args = array('posts_per_page' => 4, 'post_status' => 'publish', 'category' => $cat_todays_woman);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                    $divclose = false;
                                 if($index %2 == 0):
                                     echo '<div class="row">';
                                 $divclose = true;
                                 endif;
                                    ?> 
                                    <div class="col-xs-12 col-sm-6">
                                        <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                        <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                            <div class="col-sm-6 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></div> 
                                        <?php endif; ?>
                                        <?php echo excerpt(15) ?>
                                        <p class="rmholder">
                                            <?php echo read_more(get_the_ID()); ?>
                                        </p>                                   
                                    </div>
                                    <?php
                                    if($index > 0 && $index % 2 != 0):
                                     echo '</div>';
                                        $divclose = false;
                                    endif;
                                endforeach;
                                wp_reset_postdata();
                                if($divclose):
                                     echo '</div>';
                                 endif;
                                ?>
                                <div class="rmholder">
                                    <?php echo category_read_more($cat_todays_woman); ?> 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="heading">
                                    <h3 class="panel-heading">শিশু-কিশোর</h3>
                                </div>
                                <?php
                                $args = array('posts_per_page' => 4, 'post_status' => 'publish', 'category' => $cat_childreen);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                    $divclose = false;
                                 if($index %2 == 0):
                                     echo '<div class="row">';
                                 $divclose = true;
                                 endif;
                                    ?> 
                                    <div class="col-xs-12 col-sm-6">
                                        <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                        <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                            <div class="col-sm-6 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></div> 
                                        <?php endif; ?>
                                        <?php echo excerpt(15) ?>
                                        <p class="rmholder">
                                            <?php echo read_more(get_the_ID()); ?>
                                        </p>                                   
                                    </div>
                                    <?php
                                    if($index > 0 && $index % 2 != 0):
                                     echo '</div>';
                                        $divclose = false;
                                    endif;
                                endforeach;
                                wp_reset_postdata();
                                if($divclose):
                                     echo '</div>';
                                 endif;
                                ?>
                                <div class="rmholder">
                                    <?php echo category_read_more($cat_childreen); ?> 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="sidebar-head"><h3>মতামত</h3></div>
                                <?php
                                $args = array('posts_per_page' => 6, 'post_status' => 'publish', 'category' => $cat_opinion);
                                $postslist = get_posts($args);
                                foreach ($postslist as $index => $post) :
                                    setup_postdata($post);
                                    ?> 
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12">
                                            <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                <div class="col-sm-3 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>"/></div> 
                                            <?php endif; ?>  
                                            <p> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p> 
                                        </div>
                                    </div>
                                    <?php
                                endforeach;
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

                            <div class="col-xs-12 col-sm-12">
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
                    </div>
                </div>                
            </main><!-- #main -->

        </div><!-- #primary -->

    </div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>