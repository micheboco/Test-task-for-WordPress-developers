<?php
/**
 * Customize the [...] on the_excerpt();
 *
 * @package gutenbergtheme
 */

namespace GutenbergTheme;

/**
 * Customize the [...] on the_excerpt();
 *
 * @author WebDevStudios
 *
 * @param string $more The current $more string.
 *
 * @return string Read more link.
 */
function excerpt_more( $more ) {
	return sprintf( ' <a class="more-link" href="%1$s">%2$s</a>', get_permalink( get_the_ID() ), esc_html__( 'Read more...', 'gutenbergtheme' ) );
}

add_filter( 'excerpt_more', __NAMESPACE__ . '\excerpt_more' );
