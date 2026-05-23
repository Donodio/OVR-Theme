<?php
/**
 * Header template.
 *
 * @package OVR_Villages
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="light">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'antialiased min-h-screen flex flex-col' ); ?>>
<?php wp_body_open(); ?>
<a class="ovrv-skip-link" href="#main-content"><?php esc_html_e( 'Skip to content', 'ovr-villages' ); ?></a>
<header class="bg-surface border-b border-border-gray sticky top-0 z-50">
	<div class="flex justify-between items-center w-full px-margin-desktop h-tap-target-min max-w-container-max-width mx-auto">
		<div class="flex items-center gap-6">
			<a class="text-card-title font-card-title font-bold text-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php esc_html_e( 'Our Villages Rentals', 'ovr-villages' ); ?>
			</a>
			<nav class="hidden md:flex items-center gap-6" aria-label="<?php esc_attr_e( 'Primary navigation', 'ovr-villages' ); ?>">
				<a class="text-primary font-bold border-b-2 border-primary pb-1 text-label-md font-label-md" href="<?php echo esc_url( home_url( '/search/' ) ); ?>"><?php esc_html_e( 'Search Rentals', 'ovr-villages' ); ?></a>
				<a class="text-on-surface-variant font-body-lg text-label-md font-label-md hover:text-secondary hover:bg-surface-container-low transition-colors rounded px-2 py-1" href="<?php echo esc_url( home_url( '/map/' ) ); ?>"><?php esc_html_e( 'Map', 'ovr-villages' ); ?></a>
				<a class="text-on-surface-variant font-body-lg text-label-md font-label-md hover:text-secondary hover:bg-surface-container-low transition-colors rounded px-2 py-1" href="<?php echo esc_url( home_url( '/villages-info/' ) ); ?>"><?php esc_html_e( 'Villages Info', 'ovr-villages' ); ?></a>
				<a class="text-on-surface-variant font-body-lg text-label-md font-label-md hover:text-secondary hover:bg-surface-container-low transition-colors rounded px-2 py-1" href="<?php echo esc_url( home_url( '/ovr-info/' ) ); ?>"><?php esc_html_e( 'OVR Info', 'ovr-villages' ); ?></a>
			</nav>
		</div>
		<div class="flex items-center gap-4">
			<a class="hidden md:block text-label-md font-label-md text-primary-container bg-surface border border-primary-container px-4 py-2 rounded h-tap-target-min hover:bg-surface-container-low transition-colors" href="<?php echo esc_url( wp_login_url() ); ?>"><?php esc_html_e( 'Login', 'ovr-villages' ); ?></a>
			<a class="text-label-md font-label-md text-white bg-primary-container px-4 py-2 rounded h-tap-target-min hover:opacity-90 transition-opacity shadow-sm" href="<?php echo esc_url( home_url( '/register/' ) ); ?>"><?php esc_html_e( 'Advertise', 'ovr-villages' ); ?></a>
		</div>
	</div>
</header>
