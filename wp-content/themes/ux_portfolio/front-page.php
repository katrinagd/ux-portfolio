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
      <section class="gallery-bg">
       
      </section>
<div id="primary" class="content-area">
	<section>
		<div>
			<h1>Testimonials</h1>
		</div>

		<ul>
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

				<div>
					<?php echo CFS()->get( 'review_content' ); ?>
					<p><?php the_title(); ?></p>
					<p><?php echo esc_html( CFS()->get( 'job_title' ) ); ?> &ndash; <?php echo CFS()->get( 'company' ); ?></p>
				</div>
			</li>
		<?php endforeach; wp_reset_postdata(); ?>
	    </ul>
    </section>
</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
