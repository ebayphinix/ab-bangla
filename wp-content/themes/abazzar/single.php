<?php
/**
 * The template for displaying all single posts.
 *
 * @package ajkerbazzar
 */

$multimedia =  array(100,101,102,103,104,105,106,107,108,109,110);
// get the top level cat id of a single post
$category = get_the_category($post->ID);
//echo "<pre>";
//print_r($category);
//echo "</pre>";
$category_parent = null;
foreach ($category as $item) {
    if($item->category_parent==100){
       $category_parent =  $item->category_parent;
       break;
    }
}

if (in_array($category_parent, $multimedia, true)) {
    get_header('multimedia');
} else {
    get_header();
}
?>
<div class="wrapper" id="single-wrapper">

    <div  id="content" class="container">

        <div class="row">

            <div id="primary" class="col-xs-12 col-sm-12 col-md-12 content-area">

                <main id="main" class="site-main" role="main">
                    <div class="row">
                        <div class="col-xs-12 col-sm-8">
                            <?php
                            $category = get_the_category(get_the_ID());
                            $category_id = $category[0]->cat_ID;
                            ?>
                            <?php while (have_posts()) : the_post(); ?>

                                <?php get_template_part('loop-templates/content', 'single'); ?>
                            
                                    <?php //the_post_navigation(); ?>

                                <?php
                                // If comments are open or we have at least one comment, load up the comment template
                                if (comments_open() || get_comments_number()) :
                                    comments_template();
                                endif;
                                ?>

                            <?php endwhile; // end of the loop. ?>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 addvertise">
                                    <?php echo do_shortcode('[amads id="713" size="336x280" title="single sidebar-1"]'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <div class="sidebar-head"><h4>এ বিভাগের অন্যান্য সংবাদ </h4></div>
                                    <?php
                                    $args = array('posts_per_page' => 10, 'order' => 'DESC', 'orderby' => 'id', 'category' => $category_id);
                                    $postslist = get_posts($args);
                                    foreach ($postslist as $index => $post) :
                                        setup_postdata($post);
                                        ?> 
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12">
                                                <?php if (wp_get_thumbnail_url(get_the_ID())): ?>
                                                    <div class="col-xs-3 col-sm-3 plnone"><img src="<?php echo wp_get_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="<?php the_title(); ?>"/></div> 
                                                <?php endif; ?>  
                                                <p> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p> 
                                            </div>
                                        </div>
                                        <?php
                                    endforeach;
                                    ?>
                                    <?php get_sidebar(); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 addvertise">
                                    <?php echo do_shortcode('[amads id="714" size="468x60" title="single sidebar-2"]'); ?>
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
                                    <?php echo do_shortcode('[amads id="715" size="468x60" title="single sidebar-3"]'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 addvertise">
                                    <?php echo do_shortcode('[amads id="716" size="468x60" title="single sidebar-4"]'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 addvertise">
                                    <?php echo do_shortcode('[amads id="717" size="468x60" title="single sidebar-5"]'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 addvertise">
                                    <?php echo do_shortcode('[amads id="718" size="468x60" title="single sidebar-6"]'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 addvertise">
                                    <?php echo do_shortcode('[amads id="719" size="468x60" title="single sidebar-7"]'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 addvertise">
                                    <?php echo do_shortcode('[amads id="720" size="468x60" title="single sidebar-8"]'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 addvertise">
                                    <?php echo do_shortcode('[amads id="721" size="468x60" title="single sidebar-9"]'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 addvertise">
                                    <?php echo do_shortcode('[amads id="722" size="468x60" title="single sidebar-10"]'); ?>
                                </div>
                            </div>
                        </div>  
                    </div>
                </main><!-- #main -->

            </div><!-- #primary -->



        </div><!-- .row -->

    </div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
