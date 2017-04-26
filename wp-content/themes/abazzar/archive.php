<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package ajkerbazzar
 */
get_header();
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
                                <?php while (have_posts()) : the_post(); ?>

                                    <?php
                                    /* Include the Post-Format-specific template for the content.
                                     * If you want to override this in a child theme, then include a file
                                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                     */
                                   // echo '============'.get_post_format();
                                    get_template_part('loop-templates/content', get_post_format());
                                    ?>

                                <?php endwhile; ?>

                                <?php //the_posts_navigation(); ?>

                            <?php else : ?>

                                <?php get_template_part('loop-templates/content', 'none'); ?>

                            <?php endif; ?>
                        </div>
                        <div class="col-xs-12 col-sm-4">
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
                        </div>
                    </div>
                </main><!-- #main -->

            </div><!-- #primary -->

            <?php //get_sidebar();  ?>

        </div> <!-- .row -->

    </div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
