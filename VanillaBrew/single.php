<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage FoodSafety
 * @since FoodSafety.osu.edu 1.0
 */

get_header(); ?>
<?php
while ( have_posts() ) : the_post(); ?>
<div id="page-container-article" class="page-container">
	<div id="article-page-screen-1">
		<div id="image-wrap">
			<?php if (class_exists('MultiPostThumbnails')) : MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image'); endif; ?>
		</div>
		<div class="wrap">
			<h1><?php the_title(); ?></h1>
		</div>
		<div id="wrap-button">
			<div id="arrow-button">
				<div class="box">
					<div class="left"></div><div class="right"></div>
				</div> <!-- .box -->
			</div> <!-- #arrow-button -->
		</div> <!-- .wrap-button -->
	</div>
	<div id="article-page-screen-2">
		<div class="wrap">
			<div id="blog-top"><i class="fa fa-bookmark"></i></div>
			<?php $this_href = get_permalink(); ?>
			<?php the_excerpt(); ?>
			<?php the_content(); ?>
			<div id="author-holder">
				<div id="author-bar"></div>
				<img src="<?php bloginfo('template_directory'); ?>/images/author-<?php the_author_meta('nickname'); ?>.png?1" id="author-image">
				<?php $this_author = get_the_author(); ?>
				<h6 class="author-name"><?php the_author(); ?> <span>|</span> <?php the_author_website($this_author); ?></h6>
				<span class="date"><?php the_date(); ?></span>
			</div>
		</div>
	</div> <!-- #article-page-screen-2 -->
	<div id="article-page-screen-3">
		<div class="wrap">
			<div id="comments-wrap">
				<?php comments_template( '', true ); ?>
			</div><!-- #comments-wrap -->
		</div>
	</div>
<?php
endwhile;
?>



<?php
// always make sure page-container is still open!
get_footer();
