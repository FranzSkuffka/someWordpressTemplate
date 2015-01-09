<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Raich
 */
remove_filter( 'the_content', 'wpautop' );
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--
<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
<?php
    $location = 'subSite';
    if ( is_front_page() && is_home() ) {
        $location = 'home';
    }?>
        <div class="highlightZone <?php echo $location?>" ></div>
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'raich' ); ?></a>

		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<span class="site-titlePartOne">Raich</span>
				<span class="site-titlePartTwo">Rechtsanwalt</span>
			</a></h1>
		</div><!-- .site-branding -->


		<?php get_sidebar(); ?>
			<div id="content" class="site-content">
