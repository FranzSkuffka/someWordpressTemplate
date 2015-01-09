<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Raich
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class='pageImage'>
<img src='http://wpti.ps/wp-content/uploads/catwalk.jpg'/>
</div>
	<header class="entryHeader">
		<?php the_title( '<h1 class="entryTitle">', '</h1>' ); ?>
		<a class='backToHomeLink' href='<?php echo get_site_url()?>'>Zur&uumlck zur Startseite</a>
	</header><!-- .entry-header -->

<div class="entryContentWrap">
	<div class="entryContent">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'raich' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</div>
</article><!-- #post-## -->
