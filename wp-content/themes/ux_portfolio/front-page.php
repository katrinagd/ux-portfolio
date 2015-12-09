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

<section class="gallery-bg"></section>

<section id="portfolio" class="content-area">
    <h1><span class="title">// </span>Projects</h1>
    <div class="see-all">
        <a href="<?php echo esc_url( '/projects/' ); ?>"><?php printf( esc_html( 'See All' )); ?></a>
    </div>
    <ul class="project">

        <?php $args = array( 'post_type' => 'project','project-type' =>'featured', 'orderby' => 'menu-order' );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $project; ?>
        <li class="project-container">
            <div class="project-img">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
            </div>
            <div class="project-preview">

                <h2><?php the_title(); ?></h2>
                <div class="project_intro">
                    <?php echo CFS()->get('project_intro'); ?>
                </div>
                <span class="btn">
                    <a href="<?php the_permalink(); ?>">See details</a>
                </span>

            </div>
        </li>
        <?php endwhile;?>

    </ul>
</section>


<div class="grey-bg">
  <section id="whitney-gallery" class="content-area">
    <?php echo do_shortcode( '[LBSP id=100]' ); ?>
  </section>
</div>


<div id="primary" class="content-area soft">


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
                    <?php the_title( '<h3 class="entry-title line">', '</h3>' ); ?>
                    <?php echo CFS()->get( 'skill_description' ); ?>
                </div><!-- .entry-content -->

            <?php endforeach;
            wp_reset_postdata(); ?>
        </div>
    </div>
</div>



<div class="grey-bg">
    <section class="resume content-area">
        <a href="<?php echo esc_url( 'http://whitneylaw.ca/wp-content/uploads/2015/12/Whitney_Law_Resume_UX_Designer.pdf' ); ?>"><?php printf( esc_html( 'Download my resume' )); ?></a>
        <a href="<?php echo esc_url( 'https://www.linkedin.com/in/whitneylaww' ); ?>"><i class="fa fa-linkedin-square"></i></a>
    </section>
</div>


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
                        <p>
                            <span class="reviewer-name">&ndash; <?php the_title(); ?>&#44; </span>
                            <span class="reviewer-creds"><?php echo esc_html( CFS()->get( 'job_title ' ) ); ?>
                                <span class="company-link"><?php echo CFS()->get( 'company_website' ); ?></span>
                            </span>
                        </p>
                    </div>
                </li>

                <?php endforeach; wp_reset_postdata(); ?>
            </ul>
        </section>
    </div>
</div>
</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
