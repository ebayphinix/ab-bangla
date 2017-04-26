<?php
/**
 * Template Name: Multimedia news
 * Template for displaying Multimedia news
 *
 * @package ajkerbazzar
 */
if (is_category('multimedia')) {
    get_header('multimedia');
} else {
    get_header();
}
require get_template_directory() . '/inc/settings.php';
?>
<div class="wrapper" id="archive-wrapper">

    <div  id="content" class="container">

        <div class="row">

            <div id="primary" class="col-xs-12 col-sm-12 content-area">

                <main id="main" class="site-main" role="main">
                    <div class="row">
                        <div class="col-xs-12 col-sm-8">
                            <div class="row mr-b15">
                                <div class="col-xs-12 col-sm-12">
                                    <h3 class="heading"><span><?php echo $cat_ab_news_title; ?></span></h3>  
                                </div>

                                <?php
                                query_posts("cat=$cat_ab_news&showposts=4");
                                while (have_posts()) : the_post();
                                    // do whatever you want
                                    ?>
                                    <div class="col-xs-6 col-sm-3 pad-b15">
                                        <div class="video-container">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                echo get_the_post_thumbnail($post->ID, 'thumbnail');
                                            } else {
                                                ?>
                                                <?php
                                                $youtube = get_custom_field_values('youtube', $post->ID);
                                                echo $youtube;
                                                ?> 

                                            <?php } ?>
                                        </div>
                                        <div class="caption">
                                            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                        </div>
                                    </div>
                                    <?php
                                endwhile;
                                ?>
                                <div class="col-xs-12 category_readmore">
                                    <div class="rmholder">
                                        <?php echo category_read_more($cat_ab_news); ?> 
                                    </div>
                                </div>
                            </div>
                            <div class="row mr-b15">
                                <div class="col-xs-12 col-sm-12">
                                    <h3 class="heading"><span><?php echo $cat_ab_stockmarket_title; ?></span></h3>  
                                </div>

                                <?php
                                query_posts("cat=$cat_ab_stockmarket&showposts=4");
                                while (have_posts()) : the_post();
                                    // do whatever you want
                                    ?>
                                    <div class="col-xs-6 col-sm-3 pad-b15">
                                        <div class="video-container">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                echo get_the_post_thumbnail($post->ID, 'thumbnail');
                                            } else {
                                                ?>
                                                <?php
                                                $youtube = get_custom_field_values('youtube', $post->ID);
                                                echo $youtube;
                                                ?> 

                                            <?php } ?>
                                        </div>
                                        <div class="caption">
                                            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                        </div>
                                    </div>
                                    <?php
                                endwhile;
                                ?>
                                <div class="col-xs-12 category_readmore">
                                    <div class="rmholder">
                                        <?php echo category_read_more($cat_ab_stockmarket); ?> 
                                    </div>
                                </div>
                            </div>
                            <div class="row mr-b15">
                                <div class="col-xs-12 col-sm-12">
                                    <h3 class="heading"><span><?php echo $cat_ab_business_title; ?></span></h3>  
                                </div>

                                <?php
                                query_posts("cat=$cat_ab_business&showposts=4");
                                while (have_posts()) : the_post();
                                    // do whatever you want
                                    ?>
                                    <div class="col-xs-6 col-sm-3 pad-b15">
                                        <div class="video-container">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                echo get_the_post_thumbnail($post->ID, 'thumbnail');
                                            } else {
                                                ?>
                                                <?php
                                                $youtube = get_custom_field_values('youtube', $post->ID);
                                                echo $youtube;
                                                ?> 

                                            <?php } ?>
                                        </div>
                                        <div class="caption">
                                            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                        </div>
                                    </div>
                                    <?php
                                endwhile;
                                ?>
                                <div class="col-xs-12 category_readmore">
                                    <div class="rmholder">
                                        <?php echo category_read_more($cat_ab_business); ?> 
                                    </div>
                                </div>
                            </div>
                            <div class="row mr-b15">
                                <div class="col-xs-12 col-sm-12">
                                    <h3 class="heading"><span><?php echo $cat_ab_corporate_title; ?></span></h3>  
                                </div>

                                <?php
                                query_posts("cat=$cat_ab_corporate&showposts=4");
                                while (have_posts()) : the_post();
                                    // do whatever you want
                                    ?>
                                    <div class="col-xs-6 col-sm-3 pad-b15">
                                        <div class="video-container">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                echo get_the_post_thumbnail($post->ID, 'thumbnail');
                                            } else {
                                                ?>
                                                <?php
                                                $youtube = get_custom_field_values('youtube', $post->ID);
                                                echo $youtube;
                                                ?> 

                                            <?php } ?>
                                        </div>
                                        <div class="caption">
                                            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                        </div>
                                    </div>
                                    <?php
                                endwhile;
                                ?>
                                <div class="col-xs-12 category_readmore">
                                    <div class="rmholder">
                                        <?php echo category_read_more($cat_ab_corporate); ?> 
                                    </div>
                                </div>
                            </div>
                            <div class="row mr-b15">
                                <div class="col-xs-12 col-sm-12">
                                    <h3 class="heading"><span><?php echo $cat_ab_education_title; ?></span></h3>  
                                </div>

                                <?php
                                query_posts("cat=$cat_ab_education&showposts=4");
                                while (have_posts()) : the_post();
                                    // do whatever you want
                                    ?>
                                    <div class="col-xs-6 col-sm-3 pad-b15">
                                        <div class="video-container">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                echo get_the_post_thumbnail($post->ID, 'thumbnail');
                                            } else {
                                                ?>
                                                <?php
                                                $youtube = get_custom_field_values('youtube', $post->ID);
                                                echo $youtube;
                                                ?> 

                                            <?php } ?>
                                        </div>
                                        <div class="caption">
                                            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                        </div>
                                    </div>
                                    <?php
                                endwhile;
                                ?>
                                <div class="col-xs-12 category_readmore">
                                    <div class="rmholder">
                                        <?php echo category_read_more($cat_ab_education); ?> 
                                    </div>
                                </div>
                            </div>
                            <div class="row mr-b15">
                                <div class="col-xs-12 col-sm-12">
                                    <h3 class="heading"><span><?php echo $cat_ab_health_title; ?></span></h3>  
                                </div>

                                <?php
                                query_posts("cat=$cat_ab_health&showposts=4");
                                while (have_posts()) : the_post();
                                    // do whatever you want
                                    ?>
                                    <div class="col-xs-6 col-sm-3 pad-b15">
                                        <div class="video-container">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                echo get_the_post_thumbnail($post->ID, 'thumbnail');
                                            } else {
                                                ?>
                                                <?php
                                                $youtube = get_custom_field_values('youtube', $post->ID);
                                                echo $youtube;
                                                ?> 

                                            <?php } ?>
                                        </div>
                                        <div class="caption">
                                            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                        </div>
                                    </div>
                                    <?php
                                endwhile;
                                ?>
                                <div class="col-xs-12 category_readmore">
                                    <div class="rmholder">
                                        <?php echo category_read_more($cat_ab_health); ?> 
                                    </div>
                                </div>
                            </div>
                            <div class="row mr-b15">
                                <div class="col-xs-12 col-sm-12">
                                    <h3 class="heading"><span><?php echo $cat_ab_sports_title; ?></span></h3>  
                                </div>

                                <?php
                                query_posts("cat=$cat_ab_sports&showposts=4");
                                while (have_posts()) : the_post();
                                    // do whatever you want
                                    ?>
                                    <div class="col-xs-6 col-sm-3 pad-b15">
                                        <div class="video-container">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                echo get_the_post_thumbnail($post->ID, 'thumbnail');
                                            } else {
                                                ?>
                                                <?php
                                                $youtube = get_custom_field_values('youtube', $post->ID);
                                                echo $youtube;
                                                ?> 

                                            <?php } ?>
                                        </div>
                                        <div class="caption">
                                            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                        </div>
                                    </div>
                                    <?php
                                endwhile;
                                ?>
                                <div class="col-xs-12 category_readmore">
                                    <div class="rmholder">
                                        <?php echo category_read_more($cat_ab_sports); ?> 
                                    </div>
                                </div>
                            </div>
                            <div class="row mr-b15">
                                <div class="col-xs-12 col-sm-12">
                                    <h3 class="heading"><span><?php echo $cat_ab_entertainment_title; ?></span></h3>  
                                </div>

                                <?php
                                query_posts("cat=$cat_ab_entertainment&showposts=4");
                                while (have_posts()) : the_post();
                                    // do whatever you want
                                    ?>
                                    <div class="col-xs-6 col-sm-3 pad-b15">
                                        <div class="video-container">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                echo get_the_post_thumbnail($post->ID, 'thumbnail');
                                            } else {
                                                ?>
                                                <?php
                                                $youtube = get_custom_field_values('youtube', $post->ID);
                                                echo $youtube;
                                                ?> 

                                            <?php } ?>
                                        </div>
                                        <div class="caption">
                                            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                        </div>
                                    </div>
                                    <?php
                                endwhile;
                                ?>
                                <div class="col-xs-12 category_readmore">
                                    <div class="rmholder">
                                        <?php echo category_read_more($cat_ab_entertainment); ?> 
                                    </div>
                                </div>
                            </div>
                            <div class="row mr-b15">
                                <div class="col-xs-12 col-sm-12">
                                    <h3 class="heading"><span><?php echo $cat_ab_politics_title; ?></span></h3>  
                                </div>

                                <?php
                                query_posts("cat=$cat_ab_politics&showposts=4");
                                while (have_posts()) : the_post();
                                    // do whatever you want
                                    ?>
                                    <div class="col-xs-6 col-sm-3 pad-b15">
                                        <div class="video-container">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                echo get_the_post_thumbnail($post->ID, 'thumbnail');
                                            } else {
                                                ?>
                                                <?php
                                                $youtube = get_custom_field_values('youtube', $post->ID);
                                                echo $youtube;
                                                ?> 

                                            <?php } ?>
                                        </div>
                                        <div class="caption">
                                            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                        </div>
                                    </div>
                                    <?php
                                endwhile;
                                ?>
                                <div class="col-xs-12 category_readmore">
                                    <div class="rmholder">
                                        <?php echo category_read_more($cat_ab_politics); ?> 
                                    </div>
                                </div>
                            </div>
                            <div class="row mr-b15">
                                <div class="col-xs-12 col-sm-12">
                                    <h3 class="heading"><span><?php echo $cat_ab_international_title; ?></span></h3>  
                                </div>

                                <?php
                                query_posts("cat=$cat_ab_international&showposts=4");
                                while (have_posts()) : the_post();
                                    // do whatever you want
                                    ?>
                                    <div class="col-xs-6 col-sm-3 pad-b15">
                                        <div class="video-container">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                echo get_the_post_thumbnail($post->ID, 'thumbnail');
                                            } else {
                                                ?>
                                                <?php
                                                $youtube = get_custom_field_values('youtube', $post->ID);
                                                echo $youtube;
                                                ?> 

                                            <?php } ?>
                                        </div>
                                        <div class="caption">
                                            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                        </div>
                                    </div>
                                    <?php
                                endwhile;
                                ?>
                                <div class="col-xs-12 category_readmore">
                                    <div class="rmholder">
                                        <?php echo category_read_more($cat_ab_international); ?> 
                                    </div>
                                </div>
                            </div>                            
                        </div>

                        <div class="col-xs-12 col-sm-4">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 addvertise">
                                    <?php echo do_shortcode('[amads id="703" size="336x280" title="category sidebar-1"]'); ?>
                                </div>
                            </div>
                            <div class="row">
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
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 addvertise">
                                    <?php echo do_shortcode('[amads id="704" size="468x60" title="category sidebar-2"]'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 addvertise">
                                    <?php echo do_shortcode('[amads id="705" size="468x60" title="category sidebar-3"]'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 addvertise">
                                    <?php echo do_shortcode('[amads id="706" size="468x60" title="category sidebar-4"]'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 addvertise">
                                    <?php echo do_shortcode('[amads id="707" size="468x60" title="category sidebar-5"]'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 addvertise">
                                    <?php echo do_shortcode('[amads id="708" size="468x60" title="category sidebar-6"]'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 addvertise">
                                    <?php echo do_shortcode('[amads id="709" size="468x60" title="category sidebar-7"]'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 addvertise">
                                    <?php echo do_shortcode('[amads id="710" size="468x60" title="category sidebar-8"]'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </main><!-- #main -->

            </div><!-- #primary -->

            <?php //get_sidebar();       ?>

        </div> <!-- .row -->

    </div><!-- Container end -->

</div><!-- Wrapper end -->
<?php get_footer(); ?>