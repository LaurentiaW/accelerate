<?php
/**
 * The template for displaying the 404 page
 *
 * 
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<section class="fourofour-page">
	<div id="primary" class="site-content">
		<div id="content" role="main">
			<figure class="image404">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/404.png">
			</figure>

			<p>Urgh.... This unexpected! Not what you were aiming for right? The page you are looking for no longer exist, never existed or has been moved.  If you can’t find what you are looking for let us help your aim and get in <span><a href="<?php echo home_url(); ?>/contact-us/">touch</a></span> or have look at our <span><a href="<?php echo home_url(); ?>/blog/">blog</a></span> or perhpas you  were looking for our featured <span><a href="<?php echo home_url(); ?>/work/">work</a></span>. </p>
		</div>
	</div>


</section><!-- .home-page -->

	
	

<?php get_footer(); ?>