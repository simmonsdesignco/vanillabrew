<?php
/**
 * @package VanillaBrew
 * @subpackage VanillaBrew
 * @since VanillaBrew 1.0
 */
get_header(); 

global $post;
$this_slug = get_post( $post )->post_name;
$this_permalink = get_permalink();

?>
	<div id="content-<?php echo $this_slug; ?>" class="content-wrap">
		<?php
			while (have_posts()) : the_post();
				the_content();
			endwhile;
		?>
	</div>
<?php
get_footer();
