<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package treelc
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="off-canvas-wrap">
	<div class="inner-wrap">
		<nav class="tab-bar show-for-small">
			<section class="left-small">
				<a class="left-off-canvas-toggle menu-icon"><span></span></a>
			</section>
			<section class="middle tab-bar-section small-text-center">
		        <h1 class="title">Tree LC</h1>
		     </section>
			<section class="right-small">
				<a class="right-off-canvas-toggle menu-icon"><img src="assets/img/phone-icon.png" alt="" /></a>
			</section>
		</nav>
		<!-- Off Canvas Menu -->
		<aside class="left-off-canvas-menu">
			<!-- whatever you want goes here -->
			<ul class="off-canvas-list">
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="services.html">Services</a></li>
				<li><a href="portfolio.html">Portfolio</a></li>
				<li><a href="faq.html">FAQ</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</aside>
		<aside class="right-off-canvas-menu">
			<ul class="off-canvas-list">
				<li><a href="#">416.666.5555</a></li>
				<li><a href="mailto:">info@treelc.ca</a></li>
				<li><a href="contact.html">Contact Us</a></li>
			</ul>
		</aside>
		<!-- main content goes here -->
		<header id="primary-header" class="show-for-medium-up">
			<div class="row">
				<div class="small-3 columns">
					<a href="index.html"><img src="assets/img/tree-lc-logo.png" alt="" id="logo" /></a> 

				</div>
				<div class="small-9 columns">
					<nav id="desktop">
						<ul>
							<li><a href="about.html">About</a></li>
							<li><a href="services.html">Services</a></li>
							<li><a href="portfolio.html">Portfolio</a></li>
							<li><a href="faq.html">FAQ</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
		<header id="page-header">
			<div class="row">
				<div class="small-12 small-text-center medium-11 large-11 small-centered columns">
					<p class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</p>
					<a href="about.html" class="button">Learn More</a>
				</div>
			</div>
		</header>