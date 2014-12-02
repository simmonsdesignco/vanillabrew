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

<div id="page-container-process" class="page-container">
	<div id="process-page-screen-1">
		<div class="wrap">
			<h1>Our Process</h1>
		</div> <!-- .wrap -->
	</div> <!-- #process-page-screen-1 -->
	<div id="process-page-screen-2">
	</div> <!-- #process-page-screen-2 -->
	<div id="process-page-screen-3">
		<div class="wrap">
			<div class="top"></div>
			<section class="timeline">
				<div class="timeline-piece left one yellow">
					<div class="marker"></div>
					<div class="timeline-holder">
						<div class="header">
							<h2><span>01</span>Learn</h2>
						</div>
						<p class="body">
							Our first objective is to get familiar with your business and to catch your vision. If you don't know what you want, don't worry - we can discover it together.
						</p>
					</div>
				</div>
				<div class="timeline-piece right one green">
					<div class="marker"></div>
					<div class="timeline-holder">
						<div class="header">
							<h2><span>02</span>Strategize</h2>
						</div>
						<p class="body">
							Our next move is Wireframing and Mapping. We'll also determine flow and functionality of the project in order to organize and optimize the site’s content.
						</p>
					</div>
				</div>
				<div class="timeline-piece left one purple">
					<div class="marker"></div>
					<div class="timeline-holder">
						<div class="header">
							<h2><span>03</span>Design</h2>
						</div>
						<p class="body">
							Next up we take what we've learned and our Wireframes and Maps and create a first draft mockup design. After revisions, we finalize designs for key pages and elements.
						</p>
					</div>
				</div>
				<div class="timeline-piece right one red">
					<div class="marker"></div>
					<div class="timeline-holder">
						<div class="header">
							<h2><span>04</span>Development</h2>
						</div>
						<p class="body">
							This is where the rubber meets the road - we cut up and code our final designs. We'll host your project privately on our servers to 'beta test' every scenario and browser.
						</p>
					</div>
				</div>
				<div class="timeline-piece left one mint">
					<div class="marker"></div>
					<div class="timeline-holder">
						<div class="header">
							<h2><span>05</span>Launch</h2>
						</div>
						<p class="body">
							Lastly, we transfer your project from our servers to yours, running checks and tests to ensure everything works as planned.
						</p>
					</div>
				</div>
			</section>
			<div class="top"></div>
			<h3>Ready to Get Started?</h3>
			<div class="contact-link-wrap">
				<a href="../contact" id="contact-link">Let's Talk Shop</a>
			</div>
		</div> <!-- .wrap -->
	</div> <!-- #process-page-screen-3 -->

<?php
get_footer();
