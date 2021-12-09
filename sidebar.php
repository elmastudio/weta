<?php
/**
 * The Sidebar containing the main blog widget area
 *
 * @package Weta
 * @since Weta 1.0
 * @version 1.0
 */

if ( is_woocommerce() ) {
	if ( is_active_sidebar( 'shop-sidebar' ) ) {
		?>
		<div id="blog-sidebar" class="default-sidebar sidebar-small widget-area" role="complementary">
			<?php dynamic_sidebar( 'shop-sidebar' ); ?>
		</div><!-- end #shop-sidebar -->
		<?php
	}
} else {
	if ( is_active_sidebar( 'blog-sidebar' ) ) {
		?>
		<div id="blog-sidebar" class="default-sidebar sidebar-small widget-area" role="complementary">
			<?php dynamic_sidebar( 'blog-sidebar' ); ?>
		</div><!-- end #blog-sidebar -->
		<?php
	}
}
?>
