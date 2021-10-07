<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portfolio_ver1
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	
	<header id="masthead" class="site-header">
		<div class="fixedhamburger">
			<div class="wrapper">
				<div id="menu" class="hamburger">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
			<nav class="menu">
				<ul>
					<li><a href=""><span>メニュー1</span></a></li>
					<li><a href=""><span>メニュー2</span></a></li>
					<li><a href=""><span>メニュー3</span></a></li>
					<li><a href=""><span>メニュー4</span></a></li>
					<li><a href=""><span>メニュー5</span></a></li>
				</ul>
				<div class="menu-inner">
					<h2>Portfolio_ver1</h2>
				</div>
			</nav>
		</div>
	</header><!-- #masthead -->
