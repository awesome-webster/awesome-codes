<?php
/**
 * For more info: https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */

// Theme support options
require_once(get_template_directory().'/functions/theme-support.php');

// WP Head and other cleanup functions
require_once(get_template_directory().'/functions/cleanup.php');

// Register scripts and stylesheets
require_once(get_template_directory().'/functions/enqueue-scripts.php');

// Register custom menus and menu walkers
require_once(get_template_directory().'/functions/menu.php');

// Register sidebars/widget areas
require_once(get_template_directory().'/functions/sidebar.php');

// Makes WordPress comments suck less
require_once(get_template_directory().'/functions/comments.php');

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/functions/page-navi.php');

// Adds support for multiple languages
require_once(get_template_directory().'/functions/translation/translation.php');

// Adds site styles to the WordPress editor
// require_once(get_template_directory().'/functions/editor-styles.php');

// Remove 4.2 Emoji Support
// require_once(get_template_directory().'/functions/disable-emoji.php');

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/functions/related-posts.php');

// Use this as a template for custom post types
// require_once(get_template_directory().'/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/functions/login.php');

// Customize the WordPress admin
// require_once(get_template_directory().'/functions/admin.php');


/*--------------blog post functions----------------------*/

add_action( 'after_setup_theme', 'mytheme_custom_thumbnail_size' );
function mytheme_custom_thumbnail_size(){
    add_image_size( 'thumb-small', 700, 200, true ); // Hard crop to exact dimensions (crops sides or top and bottom)
    add_image_size( 'thumb-medium', 520, 9999 ); // Crop to 520px width, unlimited height
    add_image_size( 'thumb-large', 720, 356 ); // Soft proprtional crop to max 720px width, max 340px height
    add_image_size( 'thumb-home', 250, 120 ); // Soft proprtional crop to max 250px width, max 120px height
    add_image_size( 'thumb-equal', 130, 130 ); //

}
// Enable featured image
add_theme_support( 'post-thumbnails' );

// custom excerpt length blog

function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}

function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }
  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content);
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}


// testimonials homepage


// blog posts popular posts
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }
    else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

// Carbon Fields

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {

  // Products
    Container::make( 'theme_options', __( 'Products', 'crb' ) )
    ->add_fields( array(
        Field::make( 'complex', 'crb_slides', 'Products' )
            ->set_layout( 'tabbed-horizontal' )
            ->add_fields( array(
                Field::make( 'text', 'title', 'Title' ),
                Field::make( 'image', 'image', 'Image' ),
                Field::make( 'text', 'description', 'Description' ),
                Field::make( 'text', 'button-text', 'Button Text' ),
                Field::make( 'text', 'button-link', 'Button Link' ),

            ) ),
    ) );

    // Services
    Container::make( 'theme_options', __( 'Services', 'crb' ) )
    ->add_fields( array(
        Field::make( 'complex', 'crb_slides', 'Services' )
            ->set_layout( 'tabbed-horizontal' )
            ->add_fields( array(
                Field::make( 'text', 'title', 'Title' ),
                Field::make( 'image', 'image', 'Image' ),
                Field::make( 'text', 'description', 'Description' ),
                Field::make( 'text', 'button-text', 'Button Text' ),
                Field::make( 'text', 'button-link', 'Button Link' ),

            ) ),
    ) );

    // Recommendations
    Container::make( 'theme_options', __( 'Recommendations', 'crb' ) )
    ->add_fields( array(
        Field::make( 'complex', 'crb_slides', 'Recommendations' )
            ->set_layout( 'tabbed-horizontal' )
            ->add_fields( array(
                Field::make( 'text', 'title', 'Title' ),
                Field::make( 'image', 'image', 'Image' ),
                Field::make( 'text', 'description', 'Description' ),
                Field::make( 'text', 'button-text', 'Button Text' ),
                Field::make( 'text', 'button-link', 'Button Link' ),

            ) ),
    ) );

    // Testimonials
    Container::make( 'theme_options', __( 'Testimonials', 'crb' ) )
    ->add_fields( array(
        Field::make( 'complex', 'crb_slides', 'Testimonials' )
            ->set_layout( 'tabbed-horizontal' )
            ->add_fields( array(
                Field::make( 'textarea', 'testimonial', 'Testimonial' ),
                Field::make( 'text', 'name', 'Name' ),
                Field::make( 'text', 'bio', 'Bio' ),
            ) ),
    ) );
}
