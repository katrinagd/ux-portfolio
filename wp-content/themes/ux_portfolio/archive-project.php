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
               <?php the_archive_description( '<div class="taxonomy-description">', '</div>' );?>
               <h1><span class="title">// </span>Projects</h1>
            </header><!-- .page-header -->

           <ul class="project disc">

            <?php $args = array( 'post_type' => 'project','project-type' =>'featured', 'orderby' => 'menu-order' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $project; ?>
            <li class="project-container">
               <div class="project-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a></div>
               <div class="project-preview"><h2><?php the_title(); ?></h2>
               <div class="project_intro"><?php echo CFS()->get('project_intro'); ?></div>
               <span class="btn"><a href="<?php the_permalink(); ?>">See details</a></span></div>
            </li>
         <?php endwhile;?>

         </ul>

         <?php the_posts_navigation(); ?>

         <?php else : ?>

            <?php get_template_part( 'template-parts/content', 'none' ); ?>

         <?php endif; ?>
      </main><!-- #main -->
   </div><!-- #primary -->

<?php get_footer(); ?>
