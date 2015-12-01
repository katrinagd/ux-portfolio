<?php
/**
 *The template for displaying the "project" post type archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

   <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">

      <?php if ( have_posts() ) : ?>

         <header class="page-header">
            <?php
               the_archive_description( '<div class="taxonomy-description">', '</div>' );
            ?>
            <h1><span class="title">// </span>Portfolio</h1>
         </header><!-- .page-header -->


<?php /* Start the Loop */ ?>
         <?php while ( have_posts() ) : the_post(); ?>

            <ul class="project">
                
               <?php if ( has_post_thumbnail() ) : ?>
               <li>
                     
                        <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) : ?>
         <?php the_post_thumbnail( 'medium' ); ?>
      <?php endif; ?></a>
                     <?php endif; ?>
                     <span class="project-preview"><h2><?php the_title(); ?></h2>
                     <?php echo CFS()->get('project_intro'); ?>
                     <span class="btn"><a href="<?php the_permalink(); ?>">Read more...</span></a></span>
               </li>
            
               </ul>
               
               
                     
            

         <?php endwhile; ?>

         <?php the_posts_navigation(); ?>

      <?php else : ?>

         <?php get_template_part( 'template-parts/content', 'none' ); ?>

      <?php endif; ?>
      </main><!-- #main -->
   </div><!-- #primary -->

<?php get_footer(); ?>
