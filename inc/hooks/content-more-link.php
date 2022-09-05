<?php
/**
 * Customize "Read More" string on <!-- more --> with the_content();
 *
 * @package gutenbergtheme
 */

namespace GutenbergTheme;

/**
 * Customize "Read More" string on <!-- more --> with the_content();
 *
 * @author WebDevStudios
 *
 * @return string Read more link.
 */
function content_more_link() {
	return ' <a class="more-link" href="' . get_permalink() . '">' . esc_html__( 'Read More', 'gutenbergtheme' ) . '...</a>';
}

add_filter( 'the_content_more_link', __NAMESPACE__ . '\content_more_link' );
