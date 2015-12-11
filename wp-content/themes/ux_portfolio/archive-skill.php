<?php
/**
 * The template for displaying testimonial archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
        <h1><span class="title">// </span>About me</h1>

        <div class="grey-bg">
            <section id="whitney-gallery">
              <?php echo do_shortcode( '[LBSP id=100]' ); ?>
            </section>
        </div>

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
                  'posts_per_page' => 20,
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



            <div class="column-skill">
                <?php the_title( '<h3 class="entry-title line">', '</h3>' ); ?>
                <?php echo CFS()->get( 'skill_description' ); ?>
            </div>
            <!-- .entry-content -->

            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
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
                'posts_per_page' => 20,
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
                    <?php the_title( '<h3 class="entry-title line">', '</h3>' ); ?>
                    <?php echo CFS()->get( 'skill_description' ); ?>
                </div><!-- .entry-content -->

            <?php endforeach;
            wp_reset_postdata(); ?>
        </div>
    </div>
</div>





        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->
    <?php get_footer(); ?>