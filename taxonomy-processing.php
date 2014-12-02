<?php
/**
 * The template for displaying category child pages
 *
 * taxonomy-on-the-farm.php
 *
 * @package WordPress
 * @subpackage FoodSafety.osu.edu
 * @since FoodSafety.osu.edu 1.0
 */

get_header(); 

$this_slug = "processing"; // parent slug
$this_pretty_name = "Processing"; // parent pretty name
$args = array(
    'orderby'       => 'ID', 
    'order'         => 'ASC',
    'hide_empty'    => false,
    'fields'        => 'all', 
    'hierarchical'  => true, 
    'child_of'      => 0, 
    'pad_counts'    => false
); 
$tax_terms = get_terms($this_slug, $args);
$found_cat = false;
foreach ($tax_terms as $tax_term) {
	if (is_tax($this_slug, $term = $tax_term->slug)) {
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
			<i class="fa fa-truck"></i>
		</div>
		<h1>
			<a href="<?php bloginfo('url'); ?>/<?php echo $this_slug; ?>"><?php echo $this_pretty_name; ?></a>
			<a href="<?php bloginfo('url'); ?>/<?php echo $this_slug; ?>/<?php echo $this_category->slug; ?>"><?php echo $this_category->name; ?> Articles</a>
		</h1>
	</div>
</div>
<div id="content-<?php echo $this_slug; ?>" class="archive-page-content">
	<div class="wrap">
		<div class="archive-left">
			<h6>Posts</h6>
<?php
$args = array(
    'tax_query' => array(
        array(
            'taxonomy' => $this_slug,
            'field' => 'slug',
            'terms' => get_these_terms($this_slug)
        )
    )
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
					<?php the_excerpt();
					if ( function_exists( 'coauthors_posts_links' ) ) {
						// build string that has all authors
						$coauthors = get_coauthors();
						$this_authors = build_by_author($coauthors); // returns string
					}
					else {
						$this_author = get_the_author();
						$this_authors = build_by_author($this_author);
					}
					?>
					<p class="the-author">BY <?php echo $this_authors; ?> | <?php the_date(); ?></p>
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
					No articles found under <strong>'.$this_pretty_name.' &#187; '.$this_category->name.'</strong>
					<span>Stay tuned, there will be soon!</span>
				</h1>
			</div>
	';
}
?>
			<?php wp_pagenavi(); ?>
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
			        <li class="archive-item archive-item-'.$i.'"><a href="/'.$this_slug.'/'.$term->slug.'">'.$term->name.'</a>
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
