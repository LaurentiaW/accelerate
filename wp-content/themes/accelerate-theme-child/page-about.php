<?php
/**
 * The template for displaying the about page
 *
 *  *
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
      <div id="about-wrap">
        <h4>Our Services</h4>
        <p>We take pride in our clients and the content we create for them. <br>
        Here’s a brief overview of our offered services.</p>
      

        <section class="list-services">
          <?php query_posts('post_type=services'); ?>
            <?php while ( have_posts() ) : the_post(); 

                $icon = get_field("icon");
                $size = "medium"
            ?>

            <div class="alternating-content">

              <div class="item">  
                <div class="icon">  <?php echo wp_get_attachment_image($icon, $size); ?>  </div>
                
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
    </div>
      <hr>

      <div class="about-contact">
        <aside class="about-contact-text">
          <h3>Interested in working with us?</h3>
        </aside>
        <div class="button-about">
          <a class="button" href="<?php echo home_url(); ?>/blog">Contact Us</a>
        </div>
      

  </div>


               
   
             
        
        
   
			
 
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>