<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fake_theme
 */

?>

	</div><!-- #content -->


	
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
   			<div class="col-left">
   				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_white.png">
   			</div>
   			<div class="col-right">
		        <div class="rsx_scx_block">
		        	<p class="rsx_scx_title"><?php echo "Suivez-nous"; ?></p>
	        		<div class="rsx_scx_container">

	        			<div class="scx_link">
	        				<a href="<?php echo the_field('facebook_link', 'option'); ?>" target="_blank"><i class="icon-facebook"></i></a>
<!--         			        				<a href="<?php echo the_field('instagram_link', 'option'); ?>" target="_blank"><i class="icon-instagram"></i></a> -->
	        				<a href="<?php echo the_field('twitter_link', 'option'); ?>" target="_blank"><i class="icon-twitter"></i></a>
	        				<a href="<?php echo the_field('soundcloud_link', 'option'); ?>" target="_blank"><i class="icon-soundcloud"></i></a>
	        				<a href="<?php echo the_field('youtube_link', 'option'); ?>" target="_blank"><i class="icon-youtube"></i></a>

	        			</div>           			
		        		
		        	</div>
		        </div>
   			</div>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/flickity.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>


</body>
</html>
