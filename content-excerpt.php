<?php /** * @package Raich
 */
?>

	<div href='#' class='newsTeaser slotWrap'>
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
<p class='excerptBody'>
	<span class='excerptDate'><?php the_date('d.m.y'); ?></span> - 
<?php echo get_the_excerpt(); ?></p>
		</div><!-- .entry-content -->
		<a href='<?php echo get_permalink(); ?>' class='newsTeaser slotLink'>
		</a><!-- .entry-content -->
