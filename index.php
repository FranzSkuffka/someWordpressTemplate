<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Raich
 */

get_header(); ?>




	<div id="primary" class="content-area banner">
		<main id="main" class="site-main" role="main">
<?php $bild = get_field("image",'option' );
      $bild['alt'] = get_field("imageAlt",'option' );
?>

	<img src=<?php echo $bild['url'] ?> alt='<?php echo $bild['alt']?>' class="bannerImage"/>
			<h1 class="bannerHeadline"><?php bloginfo( 'name' ); ?></h1>
			<span class="bannerTagline">Rechtsanwalt fuer Gedoehns und Dingens fuer blub</span>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_template_part('slot','emphasized') ?> 
<?php get_footer(); ?>
