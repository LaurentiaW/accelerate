<?php
/**
 * The template for displaying the homepage
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

  <section class="home-page">
  	<div class="site-content">
  		<?php while ( have_posts() ) : the_post(); ?>
  			<div class='homepage-hero'>
  				<?php the_content(); ?>
  				<a class="button" href="<?php echo home_url(); ?>/work">View Our Work</a>
  			</div>
  		<?php endwhile; // end of the loop. ?>
  	</div><!-- .container -->
  </section><!-- .home-page -->

  <section class="featured-work">
     <div class="site-content">
      <div class="fwork">
        
        <h4><a href="<?php echo home_url(); ?>/work">Featured Work</a></h4>
        <div class="homep-fwork">
          <ul class="homepage-featured-work">  
            <?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
            <?php while ( have_posts() ) : the_post(); 

                $image_1 = get_field("image_1");
                $size = "medium"
            ?>
            <li class="individual-featured-work">
                <figure>
                  <?php echo wp_get_attachment_image($image_1, $size); ?>
                </figure>

              <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
            </li>
            <?php endwhile; ?> 
            <?php wp_reset_query(); ?>
          </ul>
        </div>
      </div>
     </div>
    

  </section>

  <section class="list-services">
     <div class="site-content">
      <div class="fwork">
        
        <h4><a href="<?php echo home_url(); ?>/about">our services</a></h4>
        <div class="homep-fwork">
          <ul class="homepage-featured-work">  
            <?php query_posts('posts_per_page=4&post_type=services'); ?>
              <?php while ( have_posts() ) : the_post(); 

                $icon = get_field("icon");
                $size = "medium"
            ?>

            <li class="individual-featured-work">
                <figure>
                  <a href="<?php echo home_url(); ?>/about">
                  <?php echo wp_get_attachment_image($icon, $size); ?>
                  </a>
                </figure>
                <h5><a href="<?php echo home_url(); ?>/about"><?php the_title(); ?></a></h5>
            </li>
            
            <?php endwhile; ?> 
            
            <?php wp_reset_query(); ?>
          
        </ul>
      </div>
    </div>
  </div>
</section>


  <section class="recent-posts">
    <div class="site-content">
      <div class="blog-post">
       <h4>From the Blog</h4>
        <?php query_posts('posts_per_page=1'); ?>
         <?php while ( have_posts() ) : the_post(); ?>
           <h2><?php the_title(); ?></h2>
           <?php the_excerpt(); ?> 
           <a class="read-more-link" href="<?php the_permalink(); ?>">Read More <span>&rsaquo;</span></a>
         <?php endwhile; ?> 

      </div>
      <div class="twitter-feed">
        <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
            <div id="secondary" class="widget-area" role="complementary">
              <?php dynamic_sidebar( 'sidebar-2' ); ?>
              <a class="read-more-link" href="#">Follow us <span>&rsaquo;</span></a>
            </div>
       
        <?php endif; ?>
      </div>
     
    </div>
  </section>
<?php get_footer(); ?>