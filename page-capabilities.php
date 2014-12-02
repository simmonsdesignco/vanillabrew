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

<div id="page-container-capabilities" class="page-container">
	<div id="capabilities-page-screen-1">
		<div class="bg"></div>
		<div class="wrap">
			<h1><span>We Build</span>Awesome Websites<div>That Elevate Brands</div></h1>
		</div> <!-- .wrap -->
		<div id="wrap-button">
			<div id="arrow-button">
				<div class="box">
					<div class="left"></div><div class="right"></div>
				</div> <!-- .box -->
			</div> <!-- #arrow-button -->
		</div> <!-- .wrap-button -->
	</div> <!-- #capabilities-page-screen-1 -->
	<div id="capabilities-page-screen-2">
		<div class="wrap">
			<ul>
				<li><a href="#content-strategy"><i class="fa fa-lightbulb-o fa-fw"></i></a></li>
				<li><a href="#ui-ux"><i class="fa fa-sitemap fa-fw"></i></a></li>
				<li><a href="#web-design"><i class="fa fa-desktop fa-fw"></i></a></li>
				<li><a href="#responsive-design"><i class="fa fa-mobile-phone fa-fw"></i></a></li>
				<li><a href="#optimization"><i class="fa fa-tachometer fa-fw"></i></a></li>
				<li><a href="#social"><i class="fa fa-comments-o fa-fw"></i></a></li>
			</ul>
		</div>
	</div> <!-- #capabilities-page-screen-2 -->
	<a id="content-strategy"></a>
	<div id="capabilities-page-screen-3">
		<div class="wrap">
			<div class="double-wrap">
				<h1>Content Strategy</h1>
				<p>Knowing what to say and how to say it can often be the most critical part of any brand - especially on your website. We'll work with you to create effective content, strategically poising your website to dominate organic searches and convert page views into sales. Awesome, right? And don't worry - if you don't know where to begin we'll discover your brand's message together.</p>
			</div>
			<div class="gif-holder">
				<img src="<?php bloginfo('template_directory'); ?>/images/cap-content-strategy.gif" width="960" height="660">
			</div>
		</div>
	</div> <!-- #capabilities-page-screen-3 -->
	<a id="ui-ux"></a>
	<div id="capabilities-page-screen-4">
		<div class="wrap">
			<div class="double-wrap">
				<h1>UI / UX</h1>
				<p>We leave no detail behind. Whether it's information architecture, site flow, accessibility, or simple interactions we make sure your website's viewers encounter <em>your brand.</em> </p>
			</div>
			<div class="gif-holder">
				<img src="<?php bloginfo('template_directory'); ?>/images/ui-ux.png" width="960" height="660">
			</div>
		</div>
	</div> <!-- #capabilities-page-screen-4 -->
	<a id="web-design"></a>
	<div id="capabilities-page-screen-5">
		<div class="wrap">
			<div class="double-wrap">
				<h1>Web Design</h1>
				<p>We build empowering websites to elevate your brand and create meaningful user experiences that drive your business forward. And don’t worry -  no matter how big or small, we use clean, modern code and practices to lay a sustainable foundation for your site.</p>
			</div>
			<div class="gif-holder">
				<img src="<?php bloginfo('template_directory'); ?>/images/cap-web-design.png" width="960" height="660">
			</div>
		</div>
	</div> <!-- #capabilities-page-screen-5 -->
	<a id="responsive-design"></a>
	<div id="capabilities-page-screen-6">
		<div class="wrap">
			<div class="double-wrap">
				<h1>Responsive Design</h1>
				<p>Your website shouldn't be crippled by the device it's being viewed on. We build responsive websites for screens no matter what shape or size.</p>
			</div>
			<div class="gif-holder">
				<img src="<?php bloginfo('template_directory'); ?>/images/cap-responsive.png" width="960" height="660">
			</div>
		</div>
	</div> <!-- #capabilities-page-screen-6 -->
	<a id="optimization"></a><a id="social"></a>
	<div id="capabilities-page-screen-7">
		<div class="wrap">
			<div class="double-wrap left">
				<h1>Optimization</h1>
				<p>We take the extra time to ensure your customers find you, but we don't stop at search optimization. From smoothing animations to accelerating page load speed, we fine-tune every detail of your website, squeeking out every bit of performance along the way.</p>
			</div>
			<div class="double-wrap right">
				<h1>Social</h1>
				<p>We help businesses represent their brands socially and connect with their customers via social media.</p>
			</div>
		</div>
	</div> <!-- #capabilities-page-screen-7 -->
	<div id="capabilities-page-screen-8">
		<div class="wrap">
			<h1>Ready to Get Started?</h1>
			<div style="margin: 0 auto; text-align: center;">
				<a href="../contact" id="contact-link">Let's Talk Shop</a>
			</div>
		</div>
	</div>

<?php
get_footer();
