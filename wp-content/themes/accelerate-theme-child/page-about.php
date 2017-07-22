<?php
/**
 * The template for displaying about page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<h2><?php the_title (); ?></h2>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>

			<h4>our services</h4>
			<p id="services-p">We take pride in our clients and the content we create for them. 
Here’s a brief overview of our offered services.</p>
      <div class="list-of-services">
        <ul class="list-services">
        <!--need to find the right way to right this query post-->  
          <?php query_posts('posts_per_page=6&post_type=services'); ?>
          <?php while ( have_posts() ) : the_post(); 

              $icon = get_field("icon");
              $size = "medium"
          ?>
          <li class="individual-service">
              <figure class="icon">
                <?php echo wp_get_attachment_image($image_1, $size); ?>
              </figure>
              <div id="service-descrip">
            	<h5><?php the_title(); ?></h5>
            	<p><?php the_content(); ?></p>
            </div>
          </li>
          <?php endwhile; ?> 
          <?php wp_reset_query(); ?>
        </ul>
      </div>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>