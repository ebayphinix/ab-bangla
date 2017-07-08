<?php
/**
 * @package ajkerbazzar
 */
?>

    <div class="col-xs-12 col-sm-6 border-bottom-cat-xs">
            <header class="entry-header">

                <?php the_title(sprintf('<h2><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

                <?php 
                if ('post' == get_post_type()) : ?>

                    <div class="entry-meta">
                        <?php ajkerbazzar_posted_on(); ?>
                    </div><!-- .entry-meta -->

                <?php endif; ?>

            </header><!-- .entry-header -->
            <div class="col-xs-12 col-sm-5 plnone">
                <a href="<?php echo esc_url(get_permalink()); ?>"><?php echo get_the_post_thumbnail($post->ID, 'medium'); ?></a> 
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