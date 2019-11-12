<?php
/**
 * Plugin Name: Time to read
 * Plugin Description: Add the time-to-read a post to the page or post.
 */

use Dokter\TimeToRead\TimeToRead;

require __DIR__ . '/vendor/autoload.php';

add_filter( 'the_title', 'ttr_filter_post_title', 10, 2 );

/**
 * Filters the post title to add the time to read.
 *
 * @since 1.0.0
 *
 * @param string $title The post title.
 * @param int    $id    The current post ID.
 *
 * @return string The filtered post title.
 */
function ttr_filter_post_title( $title, $post_id ) {
	$post = get_post( $post_id );

	if ( ! $post instanceof WP_Post || 'post' !== $post->post_type ) {
		return $title;
	}

	$time_to_read = new TimeToRead( $post->post_content );
	$time         = max( 1, $time_to_read->getMinutes() );

	$minutes = _n( 'minute', 'minutes', $time > 1, 'ttr' );
	$postfix = sprintf( ' - %d %s', $time, $minutes );

	return $title . $postfix;
}
