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
<?php
// The OVR plugin renders the single site-wide header here, on wp_body_open
// (see OVR\Frontend\Header). The theme intentionally no longer ships its own
// nav so there is exactly one header across the whole site.
wp_body_open();
?>
<a class="ovrv-skip-link" href="#main-content"><?php esc_html_e( 'Skip to content', 'ovr-villages' ); ?></a>
