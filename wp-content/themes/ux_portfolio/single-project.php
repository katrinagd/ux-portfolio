<?php
/**
 * The template for displaying all single projects.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class="site-content">
	<div id="primary" class="content-area">
		

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'product' ); ?>

					
		<?php endwhile; // End of the loop. ?>

		
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
