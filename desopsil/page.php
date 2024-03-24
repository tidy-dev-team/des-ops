<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DesOpsIL
 */

 if ( ! is_front_page() ) :
	get_header();
endif;
?>

<?php if( is_front_page() ) : ?>
    <script>
		console.log('FRONT');
	</script>
<?php endif; ?>

<link rel="stylesheet" href="https://www.desops.co.il/style.css">
<base target="_top">

	<main id="primary" class="site-main" style="direction:rtl;">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
if ( ! is_front_page() ) :
	get_footer();
endif;
