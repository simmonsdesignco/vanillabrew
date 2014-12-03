<?php

$mode = '?'.time();

?>
<?php wp_reset_query(); ?>


		<footer id="footer">
			<?php
				dynamic_sidebar( 'footer' );
			?>
		</footer>



<!-- Scripts -->
<?php if (is_front_page()) { ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBrif7tiyxLI9f0PIMhsInLk0FWl6I4x4g&sensor=false"></script>
<?php } ?>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/touche.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/skrollr.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/sweet-alert.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/custom.js<?php echo $mode; ?>"></script>

<?php if (is_front_page()) { ?>
	<script src="<?php bloginfo('template_url'); ?>/js/gmaps.js"></script>
<?php } ?>
<script>
$('br').each(function(){
	$(this).remove();
});
</script>

<!-- Google Analytics -->

</body>
</html>