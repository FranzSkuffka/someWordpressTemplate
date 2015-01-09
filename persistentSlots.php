



<aside class="slot secondSlot <?php echo is_home() ? "" : "subSite"?>">
		<?php if ( have_posts() ) : ?>
		<?php $count=0; ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php if ($count==0) : ?>
				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content','excerpt' );
$count++;
?>
<?php endif;?>
			<?php endwhile; ?>
		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
	</aside>

<aside class="slot slotLast <?php echo is_home() ? "" : "subSite"?>">
		<div href='#' class='contactTeaser slotWrap'>
			<h2>Kontakt</h2>
				<address>
<div class='addressWrap'>
						<span class="address addressName">Raich Rechtsanwalt</span>
						<span class="address addressStreet">Wateverstrasse 12</span>
						<span class="address addressTown">908345 Haushausen</span>
</div>
<div class='contactWrap'>
						<span class="contact contactPhone">09823 34589234</span>
						<a href='#' class="contact contactMail">kontakt@raich.de</a>
						<span class="contact contactFax">02317 12312t</span>
</div>
				</address>
		</div>
		<a href='#' class='slotLink'>
		</a>
	</aside>

