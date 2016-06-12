<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blog64
 */

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>

<div class="col-md-8 col-sm-6">
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
</div>