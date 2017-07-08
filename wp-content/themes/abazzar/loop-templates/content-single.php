<?php
/**
 * @package ajkerbazzar
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">

        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>

        <div class="entry-meta">

            <?php ajkerbazzar_posted_on(); ?>

        </div><!-- .entry-meta -->

    </header><!-- .entry-header -->
    <?php
    $youtube = get_custom_field_values('youtube', $post->ID);
    if ($youtube):
        ?> 
        <div class="col-xs-12 col-sm-12 plnone">
            <div class="video-container">
                <?php
                echo $youtube;
                ?> 
            </div>
        </div>
    <?php else: ?>
    <?php if (wp_get_thumbnail_url($post->ID)): ?>
        <div class="col-xs-12 col-sm-7 plnone">
            <?php echo get_the_post_thumbnail($post->ID, 'large'); ?> 
        </div>
    <?php endif; ?>
    <?php endif; ?>
    <div class="entry-content">

        <?php the_content(); ?>
        <?php
        wp_link_pages(array(
            'before' => '<div class="page-links">' . __('Pages:', 'ajkerbazzar'),
            'after' => '</div>',
        ));
        ?>

    </div><!-- .entry-content -->

    <footer class="entry-footer">

        <?php //ajkerbazzar_entry_footer(); ?>

    </footer><!-- .entry-footer -->

</article><!-- #post-## -->
