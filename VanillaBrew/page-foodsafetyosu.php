<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage FoodSafety.osu.edu
 * @since FoodSafety.osu.edu 1.0
 */
get_header(); ?>

<div id="page-container-fs" class="page-container">
	<div id="fs-page-screen-1">
		<div class="bg"></div>
		<div class="wrap">
			<span>Featured Project</span>
			<h1><span>FoodSafety.</span>OSU.EDU</h1>
			<span>Case Study</span>
		</div> <!-- .wrap -->
		<div id="wrap-button">
			<div id="arrow-button">
				<div class="box">
					<div class="left"></div><div class="right"></div>
				</div> <!-- .box -->
			</div> <!-- #arrow-button -->
		</div> <!-- .wrap-button -->
	</div> <!-- #fs-page-screen-1 -->
	<div id="fs-page-screen-2">
		<div class="wrap">
			<h1>FoodSafety.<strong>osu.edu</strong> <span>Website Design, Content Strategy, Responsive, UX</span></h1>
			<a href="http://foodsafety.osu.edu" id="site-link" target="_blank">View Site</a>
			<hr>
			<div class="left">
				<h2>The Mission</h2>
				<p>The Food Safety program at The Ohio State University needs a refreshed, visually enticing, well-structured website where diverse viewers can easily access and discuss information and experiences regarding specific agricultural commodities. The site must be optimized for desktop and mobile viewers, and must comply with university standards and regulations.</p>
			</div>
			<div class="right">
				<h2>Our Solution</h2>
				<p>Staying within the bounds of OSU's branding guidelines, we were able to craft a beautiful, clean website for the Food Safety program. Through extensive Mapping and Wireframing, we organized and structured the site to be easy to navigate for the average user yet still retain depth of content for educators and researchers. To top it off, we optimized the site for all devices, making it brilliantly responsive.</p>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div id="fs-page-screen-3">
		<div class="wrap">
			<h3>Landing Page Design</h3>
			<hr>
			<img src="<? bloginfo('url'); ?>/wp-content/themes/sdc/images/fs-landing-page.png">
			<div class="clear"></div>
		</div>
	</div>
	<div id="fs-page-screen-4">
		<div class="wrap">
			<div class="left">
				<h3>Dropdown Menu</h3>
				<hr>
				<img src="<? bloginfo('url'); ?>/wp-content/themes/sdc/images/fs-dropdown.png">
			</div>
			<div class="right">
				<h3>Secondary Dropdown Menu</h3>
				<hr>
				<img src="<? bloginfo('url'); ?>/wp-content/themes/sdc/images/fs-dropdown-2.png">
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div id="fs-page-screen-5">
		<div class="wrap">
			<div class="left">
				<h3>Category Archive</h3>
				<hr>
				<img src="<? bloginfo('url'); ?>/wp-content/themes/sdc/images/fs-archive.png">
			</div>
			<div class="right">
				<h3>Blog Post</h3>
				<hr>
				<img src="<? bloginfo('url'); ?>/wp-content/themes/sdc/images/fs-single.png">
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div id="fs-page-screen-6">
		<div class="wrap">
			<h3>Responsive</h3>
			<hr>
			<img src="<? bloginfo('url'); ?>/wp-content/themes/sdc/images/fs-iphone-screens.png">
			<div class="clear"></div>
		</div>
	</div>
	<div id="fs-page-screen-7">
		<div class="wrap">
			<h1>Like What You See? &nbsp;
				<a href="../contact" id="contact-link">Let's Talk Shop</a>
			</h1>
		</div>
	</div>
<?php
get_footer();
