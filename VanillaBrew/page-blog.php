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
get_header(); 

?>

<div id="page-container-blog" class="page-container">
<?php
$args=array(
	'tag' => 'featured',
	'showposts'=>1,
	'caller_get_posts'=>1
);
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
	while ($my_query->have_posts()) : $my_query->the_post(); 
?>
	<div id="blog-page-screen-1">
		<div class="wrap">
			<h1><a href="<?php the_permalink(); ?>"><strong>Featured Article</strong><span><?php the_title(); ?></span><em>Go to Article<i class="fa fa-long-arrow-right"></i></em></a></h1>
		</div> <!-- .wrap -->
		<div id="featured-wrap">
			<?php 
			if (class_exists('MultiPostThumbnails')) {
				$string = MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'secondary-image');
			} else {
				$string = 'notavailable';
			}
			$len = strlen($string);
//			$ext = strripos($string,'.jpg');
			$sub = substr($string,0,$len-4);
			$sub = $sub.'-red.jpg';
			?>
			<img src="<?php echo $sub; ?>">
		</div>
	</div> <!-- #contact-page-screen-1 -->
<?php
	endwhile;
} //  if($my_query)
?>
	<div id="blog-page-screen-2">
		<div class="wrap">
			<h1 id="recent-articles">Recent Articles</h1>
<?php
wp_reset_query();
$args = array(
	'posts_per_page' => '-1'
);
$the_query = new WP_Query( $args );
$num_posts = $the_query->post_count;
while ( $the_query->have_posts() ) : $the_query->the_post(); 
	$url = wp_get_attachment_url(get_post_thumbnail_id());
?>
			<div class="article-holder">
				<a href="<?php the_permalink(); ?>" class="article-img"><img src="<?php echo $url; ?>"></a>
				<div class="left">
					<a href="<?php the_permalink(); ?>" class="article-title"><?php the_title(); ?></a>
				</div>
				<div class="right">
					<p><?php the_excerpt(); ?></p>
					<a href="<?php the_permalink(); ?>" class="article-link">Keep Reading <i class="fa fa-long-arrow-right"></i></a>
				</div>
				<div class="bottom">
					<p><i class="fa fa-clock-o"></i> <?php the_date(); ?></p>
					<p><i class="fa fa-user"></i> by <?php the_author(); ?></p>
					<p><i class="fa fa-tags"></i> <?php the_category(', '); ?></p>
				</div>
			</div> <!-- .article-holder -->
<?php
endwhile;
?>
			<a href="#" id="older-posts">Older Posts <i class="fa fa-long-arrow-right"></i></a>
		</div> <!-- .wrap -->
	</div> <!-- #contact-page-screen-2 -->

<?php
get_footer();
