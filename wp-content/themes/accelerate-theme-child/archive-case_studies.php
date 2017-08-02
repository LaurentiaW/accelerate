<?php
/**
 * The template for displaying archive page for all the case studies
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); 
				$image_1 = get_field('image_1');
				$size = "full";
				$services = get_field('services');
				$link = get_field('site_link');
			?>
			<article class="case-study">
				<aside class="case-study-archivepage-sidebar">
					<h2><?php the_title();?></h2>
					<h5><?php echo $services; ?></h5>
					
					<?php the_content(); ?>

					<p class="hover-link"><strong><a href="<?php the_permalink (); ?>">View Project &gt;</a></strong></p>
				</aside>

				<div class="case-study-images-archivepage">
					<?php if ($image_1) { 
						echo wp_get_attachment_image( $image_1, $size );
					 } ?>
					
							
				</div>


			</article>
			
			<?php endwhile; // end of the loop. ?>



<?php get_footer(); ?>