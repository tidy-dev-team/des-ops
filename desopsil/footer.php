<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DesOpsIL
 */

?>

</div>
<div id="wrapper">
        <iframe src="https://desops.co.il/footer.html" frameborder="0" class="full-width footer-frame"
            onload="this.style.height=this.contentWindow.document.getElementsByTagName('body')[0].offsetHeight+'px';"></iframe>
        <footer></footer>
    </div>

<?php wp_footer(); ?>

</body>
</html>
