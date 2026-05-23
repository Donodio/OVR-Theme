<?php
/**
 * Page template.
 *
 * @package OVR_Villages
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<main id="main-content" class="flex-grow">
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<article <?php post_class(); ?>>
			<?php the_content(); ?>
		</article>
		<?php
	endwhile;
	?>
</main>
<?php
get_footer();

