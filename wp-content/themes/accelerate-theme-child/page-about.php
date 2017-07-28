<?php
/**
 * The template for displaying the about page
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


<section class="about-page">
  <div class="site-content">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class='about-hero'>
        <?php the_content(); ?>
       </div>
    <?php endwhile; // end of the loop. ?>
  </div><!-- .container -->
</section><!-- .home-page -->

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<h4>Our Services</h4>
			<p id="services-p">We take pride in our clients and the content we create for them. 
        Here’s a brief overview of our offered services.</p>
    </div>

    <section class="list-services">
      <?php query_posts('post_type=services'); ?>
          <?php while ( have_posts() ) : the_post(); 

              $icon = get_field("icon");
              $size = "medium"
          ?>

            <div id="alternating-content">

              <div class="item">  
                <figure class="icon">  <?php echo wp_get_attachment_image($icon, $size); ?>  </figure>
                <div class="caption">  
                    <ul>
                      <li><h3><?php the_title(); ?></h3></li>
                      <li><p><?php the_content(); ?></p></li>
                    </ul>
                  </div>  
                </div>
            </div>

               
   
             
        
          <?php endwhile; ?> 
          <?php wp_reset_query(); ?>

    </section>
         
 
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>