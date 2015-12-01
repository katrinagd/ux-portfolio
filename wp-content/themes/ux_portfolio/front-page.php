<?php /* Template Name: Full width */ ?>
<?php
/**
 * The template for displaying home page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
			<div class="entry-content">
				<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
        </article><!-- #post-## -->

<?php endwhile; // End of the loop. ?>
</div>   
	  <section id="portfolio">
	  </section>

      <section class="gallery-bg">
      </section>

      <section id="portfolio" class="content-area">
      </section>

      <section id="contact" class="content-area">
      <h1><span class="title">// </span>Contact</h1>
      <?php echo do_shortcode( '[contact-form-7 id="19" title="Contact form 1"]' ); ?>
      </section>

      <div class="teal-bg">
        <div id="primary" class="content-area soft">
	    <section class="testimonials">
			
				<h1><span class="title">// </span>Testimonials</h1>
	
		<ul id="slidebx">
			<?php
			$args = array( 
				'post_type'=>'testimonial',
				'posts_per_page' => 4,
				'order' => 'ASC' );
			$testimonial_posts = get_posts( $args );
			foreach ( $testimonial_posts as $post ) :
				setup_postdata( $post ); ?>
			<li>
				<?php echo wp_get_attachment_image( CFS()->get( 'headshot' ), array( 100, 100 ) ); ?>

				<div class="review-content">
					<?php echo CFS()->get( 'review_content' ); ?>
					<p><span class="reviewer-name">&ndash; <?php the_title(); ?>&#44; </span><span class="reviewer-creds"><?php echo esc_html( CFS()->get( 'job_title' ) ); ?><?php echo CFS()->get( 'company' ); ?></p>
				</div>
			</li>
		<?php endforeach; wp_reset_postdata(); ?>
	    </ul>
	     </div>
    </section>
</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
