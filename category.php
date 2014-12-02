<?php
/**
 * The template for displaying category parent pages
 * cross-referenced
 *
 * category.php
 *
 * @package WordPress
 * @subpackage FoodSafety.osu.edu
 * @since FoodSafety.osu.edu 1.0
 */

get_header(); 

$this_slug = "category"; // parent slug
$this_pretty_name = "Category"; // parent pretty name
$args = array(
	'type'			=> 'post',
    'orderby'       => 'ID', 
    'order'         => 'ASC',
    'hide_empty'    => false,
    'fields'        => 'all', 
    'hierarchical'  => true, 
    'child_of'      => 0, 
    'pad_counts'    => false,
    'taxonomy'		=> 'category'
); 
$tax_terms = get_categories($args);
$found_cat = false;
foreach ($tax_terms as $tax_term) {
	if (is_category($tax_term->slug)) {
		$this_category = $tax_term;
	}
}
if (!$found_cat) {
	// category not found
}
?>
<div id="tax-<?php echo $this_slug; ?>" class="tax-title">
	<div class="wrap <?php echo $this_slug; ?>">
		<div class="tax-title-icon <?php echo $this_slug; ?>">
			<i class="fa fa-home"></i>
		</div>
		<h1>
			<a href="<?php bloginfo('url'); ?>/<?php echo $this_category->slug; ?>"><?php echo $this_category->name; ?> Articles</a>
		</h1>
	</div>
</div>
<div id="content-<?php echo $this_slug; ?>" class="archive-page-content">
	<div class="wrap">
		<div class="archive-left">
			<h6>Posts</h6>
<?php
$args = array(
	'category_name' => $this_category->slug
);
$post_count = 0;
$the_query = new WP_Query( $args );
if (have_posts()) : while (have_posts()) : the_post();
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
endif;
if ($post_count == 0) {
	echo '
			<div class="no-article-holder">
				<h1>
					No articles found under <strong>'.$this_category->name.'</strong>
					<span>Stay tuned, there will be soon!</span>
				</h1>
			</div>
	';
}
?>
		</div> <!-- .archive-left -->
		<div class="archive-right">
			<h6>Categories</h6>
			<div class="archive-categories">
				<ul>
				<?php
$args = array(
    'orderby'       => 'ID', 
    'order'         => 'ASC',
    'hide_empty'    => false, 
    'fields'        => 'all', 
    'hierarchical'  => true, 
    'child_of'      => 0, 
    'pad_counts'    => false
); 
				$terms = get_terms($this_slug, $args);
				$i = 1;
				foreach ($terms as $term) {
					echo '
			        <li class="archive-item archive-item-'.$i.'"><a href="../'.$term->slug.'">'.$term->name.'</a>
        			';
        			$i++;
				}
				?>
				</ul>
			</div> <!-- .archive-categories -->
		</div> <!-- .archive-right -->
		<div style="width: 100%; height: 60px; clear: both; display: block;"></div>
	</div> <!-- .wrap -->
</div> <!-- #content-<?php echo $this_slug; ?> -->


<?php
// get_sidebar();
get_footer();
