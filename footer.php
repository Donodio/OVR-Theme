<?php
/**
 * Footer template.
 *
 * @package OVR_Villages
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<footer class="bg-surface-container-high border-t border-border-gray mt-auto">
	<div class="flex flex-col md:flex-row justify-between items-start w-full p-margin-desktop gap-gutter max-w-container-max-width mx-auto">
		<div class="mb-6 md:mb-0 max-w-lg">
			<h2 class="text-card-title font-card-title text-primary mb-2"><?php esc_html_e( 'Our Village Rentals', 'ovr-villages' ); ?></h2>
			<p class="text-metadata font-metadata text-on-surface">© <?php echo esc_html( gmdate( 'Y' ) ); ?> Our Village Rentals. Serving landlords and renters since 2013. Licensed and Bonded. Disclaimer: OVR is an independent listing service and not affiliated with any specific developer or municipality.</p>
		</div>
		<?php
		// These pages haven't been built yet. Per the client's decision the
		// links stay visible (so the footer reads complete) but point at "#"
		// with a "Coming soon" tooltip until real pages exist.
		$ovr_coming_soon = esc_attr__( 'Coming soon', 'ovr-villages' );
		?>
		<nav class="flex flex-col md:flex-row gap-4 md:gap-8" aria-label="<?php esc_attr_e( 'Footer navigation', 'ovr-villages' ); ?>">
			<div class="flex flex-col gap-2">
				<a class="ovr-footer-soon text-body-md font-body-md text-on-surface hover:text-secondary hover:underline transition-all" href="#" title="<?php echo $ovr_coming_soon; ?>"><?php esc_html_e( 'About Us', 'ovr-villages' ); ?></a>
				<a class="ovr-footer-soon text-body-md font-body-md text-on-surface hover:text-secondary hover:underline transition-all" href="#" title="<?php echo $ovr_coming_soon; ?>"><?php esc_html_e( 'FAQs', 'ovr-villages' ); ?></a>
			</div>
			<div class="flex flex-col gap-2">
				<a class="ovr-footer-soon text-body-md font-body-md text-on-surface hover:text-secondary hover:underline transition-all" href="#" title="<?php echo $ovr_coming_soon; ?>"><?php esc_html_e( 'Privacy Policy', 'ovr-villages' ); ?></a>
				<a class="ovr-footer-soon text-body-md font-body-md text-on-surface hover:text-secondary hover:underline transition-all" href="#" title="<?php echo $ovr_coming_soon; ?>"><?php esc_html_e( 'Terms of Service', 'ovr-villages' ); ?></a>
			</div>
			<div class="flex flex-col gap-2">
				<a class="ovr-footer-soon text-body-md font-body-md text-on-surface hover:text-secondary hover:underline transition-all font-semibold" href="#" title="<?php echo $ovr_coming_soon; ?>"><?php esc_html_e( 'Contact Support', 'ovr-villages' ); ?></a>
			</div>
		</nav>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
