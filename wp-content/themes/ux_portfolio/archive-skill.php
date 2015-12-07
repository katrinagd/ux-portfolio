<?php
/**
 * The template for displaying testimonial archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

   <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">

<!-- 
 * Technical skills.
 *
 *  -->
 <div class="technical">
<h1><span class="title">// </span>Technical skills</h1>
<div class="skills">
<?php
            $softargs = array( 
              'post_type'=>'skill',
              'posts_per_page' => 8,
              'tax_query' => array (
                  array(
                     'taxonomy' => 'skill-type',
                     'field'=> 'slug',
                     'terms' =>'technical-skills'),
               ),
              'order' => 'ASC' );
            $softskill_posts = get_posts( $softargs );
            foreach ( $softskill_posts as $post ) :
              setup_postdata( $post ); ?>
            
              
               
                  <div class="column-skill"><?php the_title( '<h2 class="entry-title line">', '</h2>' ); ?>
                  <?php echo CFS()->get( 'skill_name' ); ?>
                   <?php echo CFS()->get( 'skill_description' ); ?></div>
              <!-- .entry-content -->            
  
          <?php endforeach; 
          wp_reset_postdata(); ?>
           </div>
</div>
</div>
<!-- 
 * Soft skills.
 *
 *  -->
 <div class="teal-bg">
   <div class="content-area soft">
    <h1><span class="title">// </span>Soft  skills</h1> 
    <div class="skills">
             <?php
            $softargs = array( 
              'post_type'=>'skill',
              'posts_per_page' => 7,
              'tax_query' => array (
                  array(
                     'taxonomy' => 'skill-type',
                     'field'=> 'slug',
                     'terms' =>'soft-skills'),
               ),
              'order' => 'ASC' );
            $softskill_posts = get_posts( $softargs );
            foreach ( $softskill_posts as $post ) :
              setup_postdata( $post ); ?>
            
              
               <div class="column-skill">
                  <?php the_title( '<h2 class="entry-title line">', '</h2>' ); ?>
                  <?php echo CFS()->get( 'skill_name' ); ?>
                   <?php echo CFS()->get( 'skill_description' ); ?>
               </div><!-- .entry-content -->            
   
          <?php endforeach; 
          wp_reset_postdata(); ?>
</div>
        </div>   

          
      





        
    

      </main><!-- #main -->
   </div><!-- #primary -->
<?php get_footer(); ?>
