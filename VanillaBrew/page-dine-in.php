<?php
/**
 * The template for displaying category parent pages
 *
 * page-dine-in.php
 *
 * @package WordPress
 * @subpackage FoodSafety.osu.edu
 * @since FoodSafety.osu.edu 1.0
 */

get_header(); 
$this_slug = "dine-in";
$this_pretty_name = "Dine In";

// Pagination vars
$max_posts = 4;
$this_page = urldecode($wp_query->query_vars['pagi']);
$this_page = htmlentities($this_page);
if ($this_page == 0) { $this_page = 1; }

?>
<div id="tax-<?php echo $this_slug; ?>" class="tax-title">
	<div class="wrap <?php echo $this_slug; ?>">
		<div class="tax-title-icon <?php echo $this_slug; ?>">
			<i class="fa fa-home"></i>
		</div>
		<h1>
			<a href="<?php bloginfo('url'); ?>/<?php echo $this_slug; ?>"><?php echo $this_pretty_name; ?> Articles</a>
		</h1>
	</div>
</div>
<div id="content-<?php echo $this_slug; ?>" class="archive-page-content">
	<div class="wrap">
		<div class="archive-left">
			<h6>Posts</h6>
<?php
			build_archive_posts($this_slug, $this_page, $max_posts, $this_pretty_name);
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
