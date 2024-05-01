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

	<?php if( is_front_page() ) : ?>
		<style>
			.entry-content ul{
				padding: 0 !important;
				gap: 16px !important;
			}
			.entry-content ul li {
				width: calc(33% - 8px) !important;
				padding: 0 !important;
			}

			.entry-content ul li img {
				width: 100% !important;
				height: auto !important;
				border-radius: 8px !important;
			}
			.entry-content ul li figure{
				margin: 0 !important;
			}
			.wp-block-group{
				padding: 0 !important;
			}
			.entry-content .wp-block-heading{
				margin: 32px 0 !important;
			}
			.entry-content hr{
				margin: 40px 0 !important;
			}
		</style>
    <script>
		console.log(document.getElementsByClassName("wp-block-post-excerpt__excerpt").length);
		var x = document.getElementsByClassName("wp-block-post-excerpt__excerpt");
		var i;
		for (i = 0; i < x.length; i++) {
			if(x[i].innerText.includes(".2030") == true){
				x[i].innerText = x[i].innerText.slice(0, x[i].innerText.lastIndexOf(".2030") + 5);
			}
			if(x[i].innerText.includes(".2029") == true){
				x[i].innerText = x[i].innerText.slice(0, x[i].innerText.lastIndexOf(".2029") + 5);
			}
			if(x[i].innerText.includes(".2028") == true){
				x[i].innerText = x[i].innerText.slice(0, x[i].innerText.lastIndexOf(".2028") + 5);
			}
			if(x[i].innerText.includes(".2027") == true){
				x[i].innerText = x[i].innerText.slice(0, x[i].innerText.lastIndexOf(".2027") + 5);
			}
			if(x[i].innerText.includes(".2026") == true){
				x[i].innerText = x[i].innerText.slice(0, x[i].innerText.lastIndexOf(".2026") + 5);
			}
			if(x[i].innerText.includes(".2025") == true){
				x[i].innerText = x[i].innerText.slice(0, x[i].innerText.lastIndexOf(".2025") + 5);
			}
			if(x[i].innerText.includes(".2024") == true){
				x[i].innerText = x[i].innerText.slice(0, x[i].innerText.lastIndexOf(".2024") + 5);
			}

			if(x[i].innerText.includes("מאת:") == true){
				x[i].innerText = x[i].innerText.replace("מאת:", "\n\nמאת:");
			}
		}
	</script>
<?php endif; ?>

<?php
get_sidebar();
if ( ! is_front_page() ) :
	get_footer();
endif;