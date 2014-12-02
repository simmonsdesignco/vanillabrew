<?php
/**
 * The Template for displaying author pages
 *
 * @package WordPress
 * @subpackage FoodSafety
 * @since FoodSafety.osu.edu 1.0
 */

get_header(); ?>
<?php if ( have_posts() ) : ?>
	<?php the_post(); 
//	$this_slug = the_author_meta('user_login');
	$this_author = get_the_author();
	$author_associations = get_author_associations($this_author);
	?>
<div id="author-<?php the_author_meta('user_login'); ?>" class="author-subheader">
	<div class="wrap <?php echo $this_slug; ?>">
		<div class="author-info-holder">
			<img src="<?php bloginfo('template_directory'); ?>/images/author-<?php the_author_meta('user_login'); ?>.png?2">
			<h2><?php the_author(); ?></h2><?php
			foreach($author_associations as $data){
			?>
			<span>
				<?php echo $data; ?>
			</span>
			<?php } // foreach ?>
		</div>
		<div class="author-bio">
			<h6><i class="fa fa-user"></i> Author Bio</h6>
			<p class="author-description">
				<?php the_author_meta('description'); ?>
			</p>
		</div>
		<div class="clear-it"></div>
	</div>
</div>
<div id="content-<?php echo $this_slug; ?>" class="author-page-content">
	<div class="wrap">
		<div class="archive-left">
			<h6>Posts</h6>
<?php
rewind_posts();
$post_count = 0;
while (have_posts()) : the_post();
// while ( $the_query->have_posts() ) : $the_query->the_post();
	$post_count++;
?>
			<div class="article-link-holder">
				<?php
                    if ( has_post_thumbnail() ) {
                        echo '<a href="';
                        the_permalink();
                        echo '" class="the-link">';
                        the_post_thumbnail();
	                	$this_id = get_the_ID();
	                    // icons function
	                    $icons = get_icons($this_id);
	                    echo '<div class="article-icons"><div class="ai-holder">';
	                    foreach ($icons as $icon) {
	                    	echo $icon;
	                    }
	                    echo '</div></div>';
                        echo '</a>';
                    }
				$this_categories = get_the_category($this_id);
				$separator = ' ';
				$output = '';
				$first_cat = true;
				foreach ($this_categories as $this_category) {
					if ($first_cat) { $first_cat = false; } else { $output .= $separator; }
					$output .= '<a href="'.get_category_link( $this_category->term_id ).'"><i class="fa fa-tags"></i> '.$this_category->cat_name.'</a>';
				}
				?>
   				<h1><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h1>
				<div class="the-summary">
					<?php the_excerpt(); ?>
					<p class="the-author">BY <a href="<?php bloginfo('url'); ?>/author/<?php the_author_meta('user_login'); ?>"><span><?php the_author(); ?></span></a> | <?php the_date(); ?></p>
	                <div class='posted-in'><?php echo $output; ?></div>
				</div>
				<p class="clear"></p>
			</div>
<?php
endwhile;
if ($post_count == 0) {
	echo '
			<div class="no-article-holder">
				<h1>
					No articles found by <strong>'.the_author().'</strong>
					<span>Stay tuned, there will be soon!</span>
				</h1>
			</div>
	';
}
?>
		</div> <!-- .archive-left -->
		<div class="other-authors-holder">
			<h6>Authors</h6>
			<?php
			$blogusers = get_users();
			foreach ($blogusers as $user) { ?>
			<a href="<?php bloginfo('url'); ?>/author/<?php echo $user->user_login; ?>" class="single-author">
				<img src="<?php bloginfo('template_directory'); ?>/images/author-<?php echo $user->user_login; ?>.png">
				<div class="single-name">
					<p><?php echo $user->display_name; ?></p>
				</div>
			</a>
				<?php
			}
			?>
		</div> <!-- .other-authors-holder -->
		<div class="clear-it"></div>
	</div>
</div>
<?php endif; ?>

<?php
get_footer();
