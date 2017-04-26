<?php
/**
 * @package ajkerbazzar
 */
?>

    <div class="col-xs-12 col-sm-6">
            <header class="entry-header">

                <?php the_title(sprintf('<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h4>'); ?>

                <?php 
                if ('post' == get_post_type()) : ?>

                    <div class="entry-meta">
                        <?php ajkerbazzar_posted_on(); ?>
                    </div><!-- .entry-meta -->

                <?php endif; ?>

            </header><!-- .entry-header -->
            <div class="col-xs-12 col-sm-5 plnone">
                <?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?> 
            </div>
            <div class="entry-content">

                <?php
                echo excerpt(20);
                echo read_more_lalign($post->ID);
                ?>

            </div><!-- .entry-content -->

            <footer class="entry-footer">

                <?php //ajkerbazzar_entry_footer(); ?>

            </footer><!-- .entry-footer -->
    </div>