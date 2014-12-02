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

<div id="page-container-work" class="page-container">
	<div id="work-page-screen-1">
		<div class="bg"></div>
		<div class="wrap">
			<span>Featured Project</span>
			<h1><span>FoodSafety.</span>OSU.EDU</h1>
			<a href="work/foodsafetyosu">View Case Study <i class="fa fa-long-arrow-right"></i></a>
		</div> <!-- .wrap -->
		<div id="wrap-button">
			<div id="arrow-button">
				<div class="box">
					<div class="left"></div><div class="right"></div>
				</div> <!-- .box -->
			</div> <!-- #arrow-button -->
		</div> <!-- .wrap-button -->
	</div> <!-- #work-page-screen-1 -->
	<div id="work-page-screen-2">
		<div class="wrap">
			<h1>Our Clients</h1>
			<div class="client-holder fs">
				<div class="client-picture fs"></div>
				<div class="client-hover">
					<h2>FoodSafety.OSU.EDU</h2>
					<p>Website Design, Responsive, Content Strategy, UX</p>
					<div class="client-links">
						<a href="http://foodsafety.osu.edu" target="_blank">Website</a>
						<a href="work/foodsafetyosu">Case Study</a>
					</div>
				</div>
			</div>
			<div class="client-holder ode">
				<div class="client-picture ode"></div>
				<div class="client-hover">
					<h2>OhioDUIeval.com</h2>
					<p>Branding, Website Design, Responsive, Content Strategy, UI, UX</p>
					<div class="client-links">
						<a href="http://ohioduieval.com" target="_blank">Go to Website</a>
					</div>
				</div>
			</div>
			<div class="client-holder sp">
				<div class="client-picture sp"></div>
				<div class="client-hover">
					<h2>SheedyPaving.com</h2>
					<p>Website Design, Responsive, Content Strategy</p>
					<div class="client-links">
						<a href="http://sheedypaving.com" target="_blank">Go to Website</a>
					</div>
				</div>
			</div>
			<div class="client-holder di">
				<div class="client-picture di"></div>
				<div class="client-hover">
					<h2>DiademImports.com</h2>
					<p>Branding, Website Design</p>
					<div class="client-links">
						<a href="http://diademimports.com" target="_blank">Go to Website</a>
					</div>
				</div>
			</div>
			<div class="client-holder dc">
				<div class="client-picture dc"></div>
				<div class="client-hover">
					<h2>Directions Counseling</h2>
					<p>Landing Page Design, Content Strategy</p>
				</div>
			</div>
			<div class="client-holder ss">
				<div class="client-picture ss"></div>
				<div class="client-hover">
					<h2>Capital City Staffing Solutions</h2>
					<p>Website Design</p>
					<div class="client-links">
						<a href="http://staffingsolutionsohio.com" target="_blank">Go to Website</a>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div id="work-page-screen-3">
		<div class="wrap">
			<h1>Like What You See? &nbsp;
				<a href="../contact" id="contact-link">Let's Talk Shop</a>
			</h1>
		</div>
	</div>

<?php
get_footer();
