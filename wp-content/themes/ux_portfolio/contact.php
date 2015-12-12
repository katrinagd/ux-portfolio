<?php /* Template Name: contact page */ ?>
<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class="content-area-contact">
    <h1><span class="title">// </span>Contact</h1>
</div>
<div class="grey-bg">
			    <section class="resume content-area">
			        <a href="<?php echo esc_url( 'http://whitneylaw.ca/resume/Whitney_Law_Resume_UX_Designer.pdf' ); ?>"><?php printf( esc_html( 'Download my resume' )); ?></a>
			        <a href="<?php echo esc_url( 'https://www.linkedin.com/in/whitneylaww' ); ?>"><i class="fa fa-linkedin-square"></i></a>
			    </section>
            </div>

	<div id="primary" class="content-area-contact">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
