<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

 /**
  * Create "Product" post type
  */
 function ux_register_project_post_type() {

   $slug = 'project';
   $name = 'Projects';
   $singular_name = 'Project';

   $labels = array(
     'name'                => $name, 'Post Type General Name',
     'singular_name'       => $singular_name, 'Post Type Singular Name',
     'menu_name'           => $name,
     'parent_item_colon'   => sprintf( 'Parent %s:', $singular_name ),
     'all_items'           => 'All ' . $name,
     'view_item'           => 'View ' . $singular_name,
     'add_new_item'        => 'Add New ' . $singular_name,
     'add_new'             => 'New ' . $singular_name,
     'edit_item'           => 'Edit ' . $singular_name,
     'update_item'         => 'Update ' . $singular_name,
     'search_items'        => 'Search ' . strtolower( $name ),
     'not_found'           => sprintf( 'No %s found', strtolower( $name ) ),
     'not_found_in_trash'  => sprintf( 'No %s found in Trash', strtolower( $name ) ),
   );

   $args = array(
     'description'         => 'UX Designer projects portfolio',
     'labels'              => $labels,
     'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', ),
     'hierarchical'        => false,
     'public'              => true,
     'show_ui'             => true,
     'show_in_menu'        => true,
     'show_in_nav_menus'   => true,
     'show_in_admin_bar'   => true,
     'menu_position'       => 5,
     'menu_icon'           => 'dashicons-images-alt2',
     'can_export'          => true,
     'has_archive'         => 'portfolio',
     'exclude_from_search' => false,
     'publicly_queryable'  => true,
     'capability_type'     => 'post',
   );

   register_post_type( $slug, $args );
 }
 add_action( 'init', 'ux_register_project_post_type' );


 /**
  * Create "Skill" post type
  */
 function ux_register_skill_post_type() {

   $slug = 'skill';
   $name = 'Skills';
   $singular_name = 'Skill';

   $labels = array(
     'name'                => $name, 'Post Type General Name',
     'singular_name'       => $singular_name, 'Post Type Singular Name',
     'menu_name'           => $name,
     'parent_item_colon'   => sprintf( 'Parent %s:', $singular_name ),
     'all_items'           => 'All ' . $name,
     'view_item'           => 'View ' . $singular_name,
     'add_new_item'        => 'Add New ' . $singular_name,
     'add_new'             => 'New ' . $singular_name,
     'edit_item'           => 'Edit ' . $singular_name,
     'update_item'         => 'Update ' . $singular_name,
     'search_items'        => 'Search ' . strtolower( $name ),
     'not_found'           => sprintf( 'No %s found', strtolower( $name ) ),
     'not_found_in_trash'  => sprintf( 'No %s found in Trash', strtolower( $name ) ),
   );

   $args = array(
     'description'         => 'UX Designer skills set',
     'labels'              => $labels,
     'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', ),
     'hierarchical'        => false,
     'public'              => true,
     'show_ui'             => true,
     'show_in_menu'        => true,
     'show_in_nav_menus'   => true,
     'show_in_admin_bar'   => true,
     'menu_position'       => 5,
     'menu_icon'           => 'dashicons-images-alt2',
     'can_export'          => true,
     'has_archive'         => 'about',
     'exclude_from_search' => false,
     'publicly_queryable'  => true,
     'capability_type'     => 'post',
   );

   register_post_type( $slug, $args );
 }
 add_action( 'init', 'ux_register_skill_post_type' );

 /**
  * Create "Testimonial" post type
  */
 function ux_register_testimonial_post_type() {

   $slug = 'testimonial';
   $name = 'Testimonials';
   $singular_name = 'Testimonial';

   $labels = array(
     'name'                => $name, 'Post Type General Name',
     'singular_name'       => $singular_name, 'Post Type Singular Name',
     'menu_name'           => $name,
     'parent_item_colon'   => sprintf( 'Parent %s:', $singular_name ),
     'all_items'           => 'All ' . $name,
     'view_item'           => 'View ' . $singular_name,
     'add_new_item'        => 'Add New ' . $singular_name,
     'add_new'             => 'New ' . $singular_name,
     'edit_item'           => 'Edit ' . $singular_name,
     'update_item'         => 'Update ' . $singular_name,
     'search_items'        => 'Search ' . strtolower( $name ),
     'not_found'           => sprintf( 'No %s found', strtolower( $name ) ),
     'not_found_in_trash'  => sprintf( 'No %s found in Trash', strtolower( $name ) ),
   );

   $args = array(
     'description'         => 'Testimonials are glowing reviews from happy customers.',
     'labels'              => $labels,
     'supports'            => array( 'title', 'editor', 'author', 'revisions', ),
     'hierarchical'        => false,
     'public'              => true,
     'show_ui'             => true,
     'show_in_menu'        => true,
     'show_in_nav_menus'   => true,
     'show_in_admin_bar'   => true,
     'menu_position'       => 5,
     'menu_icon'           => 'dashicons-megaphone',
     'can_export'          => true,
     'has_archive'         => 'testimonials',
     'exclude_from_search' => false,
     'publicly_queryable'  => true,
     'capability_type'     => 'post',
   );

   register_post_type( $slug, $args );
 }
 add_action( 'init', 'ux_register_testimonial_post_type' );

 /**
  * Change the "Enter the title" text for custom post types
  * @since 1.0.0
  *
  */
 function ux_change_title_here_text( $input ) {
    global $post_type;

    if ( is_admin() && 'testimonial' == $post_type ) {
       return 'Enter customer first and last name here';
    }
    return $input;
 }
 add_filter( 'enter_title_here', 'ux_change_title_here_text' );
