<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package ajkerbazzar
 */


if ( ! function_exists( 'ajkerbazzar_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function ajkerbazzar_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		//$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">' . __( 'Edited %4$s ', 'ajkerbazzar' ) . '</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		esc_html_x( '%s', 'post date', 'ajkerbazzar' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);
        //'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	$byline = sprintf(
		esc_html_x( ' %s', 'post author', 'ajkerbazzar' ),
		'<span class="author vcard">' . esc_html( get_the_author() ) . '</span>'
	);

	echo '<i class="fa fa-clock-o"></i> <span class="posted-on">' . $posted_on . '</span> | <span class="byline"> ' . $byline . '</span>';

}
endif;

if ( ! function_exists( 'ajkerbazzar_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function ajkerbazzar_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' == get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( __( ', ', 'ajkerbazzar' ) );
		if ( $categories_list && ajkerbazzar_categorized_blog() ) {
			printf( '<span class="cat-links">' . __( 'Posted in %1$s', 'ajkerbazzar' ) . '</span>', $categories_list );
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', __( ', ', 'ajkerbazzar' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . __( 'Tagged %1$s', 'ajkerbazzar' ) . '</span>', $tags_list );
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( __( 'Leave a comment', 'ajkerbazzar' ), __( '1 Comment', 'ajkerbazzar' ), __( '% Comments', 'ajkerbazzar' ) );
		echo '</span>';
	}

		edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'ajkerbazzar' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function ajkerbazzar_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'ajkerbazzar_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'ajkerbazzar_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so ajkerbazzar_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so ajkerbazzar_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in ajkerbazzar_categorized_blog.
 */
function ajkerbazzar_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'ajkerbazzar_categories' );
}
add_action( 'edit_category', 'ajkerbazzar_category_transient_flusher' );
add_action( 'save_post',     'ajkerbazzar_category_transient_flusher' );
