<?php
/**
 * The template for displaying testimonial archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

   <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">

      <?php if ( have_posts() ) : ?>

         <header class="page-header">
            <?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
         </header><!-- .page-header -->

         <?php /* Start the Loop */ ?>
         <?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
               <?php echo wp_get_attachment_image( CFS()->get( 'headshot' ), array( 100, 100 ) ); ?>

               <div class="entry-content">
                  <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
                  <?php echo CFS()->get( 'review_content' ); ?>
                  <p class="reviewer-creds"><?php echo esc_html( CFS()->get( 'job_title' ) ); ?> &ndash; <?php echo CFS()->get( 'company' ); ?></p>
               </div><!-- .entry-content -->
            </article><!-- #post-## -->

         <?php endwhile; ?>

         <?php lrb_numbered_pagination(); ?>

      <?php else : ?>

         <?php get_template_part( 'template-parts/content', 'none' ); ?>

      <?php endif; ?>

      </main><!-- #main -->
   </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
