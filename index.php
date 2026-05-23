<?php
/**
 * Fallback template.
 *
 * @package OVR_Villages
 */

get_header();
?>
<main id="main-content" class="flex-grow">
	<section class="py-16 max-w-container-max-width mx-auto px-margin-desktop">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article <?php post_class( 'bg-surface border border-border-gray rounded-lg p-6 mb-6' ); ?>>
					<h1 class="text-headline-md-mobile md:text-headline-md font-headline-md-mobile md:font-headline-md text-on-surface mb-4">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h1>
					<div class="text-body-md font-body-md text-on-surface-variant">
						<?php
						if ( is_singular() ) {
							the_content();
						} else {
							the_excerpt();
						}
						?>
					</div>
				</article>
			<?php endwhile; ?>
		<?php else : ?>
			<h1 class="text-headline-md-mobile md:text-headline-md font-headline-md-mobile md:font-headline-md text-on-surface"><?php esc_html_e( 'No content found', 'ovr-villages' ); ?></h1>
		<?php endif; ?>
	</section>
</main>
<?php
get_footer();
