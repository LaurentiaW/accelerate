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
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->

	
	<div id="primary" class="site-content">
		<div id="content" role="main">
		

		<p>Urgh.... This unexpected! Not what you were aiming for right? The page you are looking for no longer exist, never existed or has been moved.  If you can’t find what you are looking for let us help your aim and get in <span>touch</span> or have look at our <span>blog</span> or perhpas you  were looking for our featured <span>work</span>. </p>

<?php get_footer(); ?>