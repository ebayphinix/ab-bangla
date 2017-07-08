<?php
/**
 * The template for displaying 404 pages (not found).
 * @package ajkerbazzar
 */
get_header();
?>
<div class="wrapper" id="404-wrapper">

    <div  id="content" class="container">

        <div class="row">

            <div id="primary" class="content-area">

                <main id="main" class="site-main" role="main">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <section class="error-404 not-found">

                                <header class="page-header">

                                    <h1 class="page-title"><?php _e('Oops! That page can&rsquo;t be found.', 'ajkerbazzar'); ?></h1>
                                </header><!-- .page-header -->

                                <div class="page-content">

                                </div><!-- .page-content -->

                            </section><!-- .error-404 -->
                        </div>
                    </div>
                </main><!-- #main -->

            </div><!-- #primary -->

        </div> <!-- .row -->

    </div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
