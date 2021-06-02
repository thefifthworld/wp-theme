<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thefifthworld
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<link rel="stylesheet" media="all" href="https://thefifthworld.s3.us-east-2.stackpathstorage.com/design/v/1/0/4/style.css" crossorigin="" />
</head>

<body <?php body_class( 'thefifthworld' ); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'thefifthworld' ); ?></a>

	<header id="masthead" class="site-header">
		<h1 class="logo">
      <a href="/">
        <img src="https://thefifthworld.s3.us-east-2.stackpathstorage.com/design/img/wordmark.black.svg" alt="The Fifth World">
      </a>
    </h1>
	</header>
