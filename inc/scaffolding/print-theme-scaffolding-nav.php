<?php
/**
 * Add a scaffolding nav for easier access.
 *
 * @package gutenbergtheme
 */

namespace GutenbergTheme;

/**
 * Add a scaffolding nav for easier access.
 *
 * @author JC Palmes
 */
function print_theme_scaffolding_nav() {
	?>
	<nav class="scaffolding-nav">
		<span><?php echo esc_html__( 'Scroll to:', 'gutenbergtheme' ); ?></span>
		<a href="#globals" class="link"><?php echo esc_html__( 'Globals', 'gutenbergtheme' ); ?></a>
		<a href="#typography" class="link"><?php echo esc_html__( 'Typography', 'gutenbergtheme' ); ?></a>
		<a href="#media" class="link"><?php echo esc_html__( 'Media', 'gutenbergtheme' ); ?></a>
		<a href="#icons" class="link"><?php echo esc_html__( 'Icons', 'gutenbergtheme' ); ?></a>
		<a href="#buttons" class="link"><?php echo esc_html__( 'Buttons', 'gutenbergtheme' ); ?></a>
		<a href="#forms" class="link"><?php echo esc_html__( 'Forms', 'gutenbergtheme' ); ?></a>
		<a href="#elements" class="link"><?php echo esc_html__( 'Elements', 'gutenbergtheme' ); ?></a>
	</nav><!-- .scaffolding-nav -->
	<?php
}
