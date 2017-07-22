<?php
/**
 * The template for displaying services to feed into the custom about pages
 *
 * *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">

		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); 
				$icon = get_field('icon');
				$size = "full"
			?>

			<article class="services">
				<aside class="case-study-sidebar">
					<h2><?php the_title();?></h2>


					<?php the_content(); ?>

					
				</aside>

				<div class="case-study-images">
					<?php if ($icon) { 
						echo wp_get_attachment_image( $icon, $size );
					 } ?>
					 <?php if($icon) { ?>
                            <img src="<?php echo $icon ?>"/>
                        <?php } ?>
					
					
				</div>


			</article>
		
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>

