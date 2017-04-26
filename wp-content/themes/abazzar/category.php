<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package ajkerbazzar
 */
$multimedia =  array(101,102,103,104,105,106,107,108,109,110);
$cat_obj = get_category( get_query_var( 'cat' ) );
$cat_id = ( $cat_obj ? $cat_id = $cat_obj->term_id : $cat_id = '' );
if (in_array($cat_id, $multimedia, true)) {
    get_header('multimedia');
} else {
    get_header();
}
?>
<div class="wrapper" id="archive-wrapper">

    <div  id="content" class="container">

        <div class="row">

            <div id="primary" class="col-xs-12 col-sm-12 content-area">

                <main id="main" class="site-main" role="main">
                    <div class="row">
                        <div class="col-xs-12 col-sm-8">
                            <?php if (have_posts()) : ?>

                                <header class="page-header">
                                    <?php
                                    //the_archive_title( '<h1 class="page-title">', '</h1>' );
                                    //  the_archive_description( '<div class="taxonomy-description">', '</div>' );
                                    ?>
                                </header><!-- .page-header -->

                                <?php /* Start the Loop */ ?>
                                <?php
                                $index = 1;
                                while (have_posts()) : the_post();
                                    ?>

                                    <?php
                                    // echo '============'.get_post_format();
                                    if ($index == 1) {
                                        get_template_part('loop-templates/content', 'category');
                                    } else {
                                        if ($index == 2) {
                                            echo '<div class="row mrb20">';
                                        }
                                        ?>

                                        <?php
                                        get_template_part('loop-templates/content', 'categorylist');
                                        if ($index == 3) {
                                            $index = 1;
                                            echo '</div>';
                                        }
                                    }
                                    ?>

                                    <?php
                                    $index ++;
                                endwhile;
                                if ($index > 2) {
                                    echo '</div>';
                                }
                                ?>
                                <?php
                                the_posts_pagination(array(
                                    'mid_size' => 0,
                                    'prev_text' => __('Prev ', 'textdomain'),
                                    'next_text' => __('Next ', 'textdomain'),
                                    'screen_reader_text' => __(' ', 'textdomain'),
                                ));
                                ?>
                                <?php //the_posts_navigation(); ?>

                            <?php else : ?>

                                <?php get_template_part('loop-templates/content', 'none'); ?>

                            <?php endif; ?>
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

            <?php //get_sidebar();      ?>

        </div> <!-- .row -->

    </div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
