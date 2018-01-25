<?php
   /**
    * The template for displaying the header
    *
    * This is the template that displays all of the <head> section
    *
    */
   ?>
<!doctype html>
<html class="no-js"  <?php language_attributes(); ?>>
   <head>
      <meta charset="utf-8">
      <!-- Force IE to use the latest rendering engine available -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Mobile Meta -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta class="foundation-mq">
      <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" type="image/x-icon">
      <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" type="image/x-icon">
      <!-- If Site Icon isn't set in customizer -->
      <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
      <!-- Icons & Favicons -->
      <?php } ?>
      <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
      <?php wp_head(); ?>
      <script src="<?php echo get_template_directory_uri(); ?>/assets/scripts/scripts.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/plugins/foundation.offcanvas.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   </head>
   <body <?php body_class(); ?>>
      <div class="off-canvas-wrapper">
      <!-- Load off-canvas container. Feel free to remove if not using. -->
      <?php get_template_part( 'parts/content', 'offcanvas' ); ?>
      <div class="off-canvas-content" data-off-canvas-content>
      <?php get_template_part( 'parts/nav', 'offcanvas' ); ?>
      <!-- Header Start -->
      <header class="site-header" role="banner">
         <div class="wrapper">
            <nav class="site-nav">
               <div class="sticky-container">
                  <div class="top-bar-main" id="top-bar-menu-main">
                     <div class="row">
                        <div class="column small-6 medium-6 large-4">
                           <a href="home" class="logolink">
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"/>
                           </a>
                        </div>
                        <div class="column medium-6 large-5 text-center" id="menu-holder">
                           <?php wp_nav_menu() ?>
                        </div>
                        <div class="column medium-11 large-3 show-for-medium text-right button-holder social-icons-header">
                           <a href="https://www.facebook.com/FranciscoDiazR" target="_blank" class="facebook"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.png"/></a>
                           <a href="https://www.instagram.com/francisco_jdr" target="_blank"  class="facebook"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.png"/></a>
                           <a href="https://www.youtube.com/channel/UCx-4gWRAg2RBs_MVpwKyAQA?view_as=subscriber" target="_blank"  class="facebook"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/youtube.png"/></a>
                           <a href="https://twitter.com/FranciscoJDR?lang=es" target="_blank"  class="facebook"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.png"/></a>
                           <a href="https://www.linkedin.com/in/franciscojdr" target="_blank"  class="facebook"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.png"/></a>
                        </div>
                     </div>
                  </div>
               </div>
            </nav>
         </div>
      </header>
      <!-- Header END -->