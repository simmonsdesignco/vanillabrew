<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
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
