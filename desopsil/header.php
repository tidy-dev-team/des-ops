<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DesOpsIL
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://desops.co.il/style.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="article">
    <div class="section c-flex-center logo">
        <a href="https://desops.co.il" target="_self"><img src="https://desops.co.il/images/ops-logo.svg" /></a>
    </div>

	<div class="section r-flex-start margin-tb-80 mob-margin-tb-20">
            <a href="https://desops.co.il" target="_self" class="no-link small r-flex-center flex-just-start g-12">
                <div class="icon rotate-180" style="--url:url(images/ic-arrow.svg)"></div>
                <p class="noto-bold margin-tb-0">לעמוד הבית</p>
            </a>
        </div>