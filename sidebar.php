<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Raich
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
	<input class='sidebarState' <?php echo(is_home()) ? 'checked' : '' ?> id='menuVisible' type='checkbox'/>
<div class="sidebarWrap">
<label class='sidebarButton' for='menuVisible'>MENÜ</label>
<nav class="sidebar" role="complementary">
	<?php the_widget( 'WP_Widget_Search' ); ?>
	<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
	<div class='legalLinks'>
		<a href='#' class='legalLink'>Impressum</a>
		<a href='#' class='legalLink'>Impressum</a>
</nav><!-- #secondary -->
</div>
