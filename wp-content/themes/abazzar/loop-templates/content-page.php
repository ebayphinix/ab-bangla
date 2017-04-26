<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package ajkerbazzar
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">

		<?php the_title( '<h4 class="entry-title">', '</h4>' ); ?>

	</header><!-- .entry-header -->

     <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?> 
    
	<div class="entry-content">

		<?php the_content(); ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'ajkerbazzar' ),
				'after'  => '</div>',
			) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'ajkerbazzar' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
