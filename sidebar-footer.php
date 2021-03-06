<?php
/**
 * The template for the one-column footer widget area
 *
 * @package Pirate Rogue
 * @since Pirate Rogue 1.0
 * @version 1.0
 */

if ( ! is_active_sidebar( 'sidebar-footer' ) ) {
	return;
}

// If we get this far, we have widgets. Let's do this.
?>

<aside id="sidebar-footer" class="sidebar-footer cf">
	<?php if ( is_active_sidebar( 'sidebar-footer' ) ) : ?>
		<div class="widget-area">
			<?php dynamic_sidebar( 'sidebar-footer' ); ?>
		</div><!-- .widget-area -->
	<?php endif; ?>

</aside><!-- .sidebar-footer -->
