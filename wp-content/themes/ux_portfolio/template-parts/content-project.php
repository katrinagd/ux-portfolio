<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		
		


</header><!-- .entry-header -->

<div class="entry-content">
	<h1><?php the_title(); ?></h1>
	

	
		<?php the_content(); ?>
		
	</div><!-- .entry-content -->

</article><!-- #post-## -->


