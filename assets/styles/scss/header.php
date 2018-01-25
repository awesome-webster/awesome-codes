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

		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/scripts/js/wp-foundation.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/scripts/js/init-foundation.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/scripts/scripts.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/scripts/custom.js"></script>

	</head>

	<body <?php body_class(); ?>>

		<div class="off-canvas-wrapper">

			<!-- Load off-canvas container. Feel free to remove if not using. -->
			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>

			<div class="off-canvas-content" data-off-canvas-content>
<!-- Header Start -->
<header class="site-header" role="banner">

<div class="wrapper">


<nav class="site-nav">

<div class="sticky-container">
<div class="top-bar" id="top-bar-menu">
  <div class="row">
    <div class="column small-6 medium-3">
       <a href="{{ "/" | relative_url}}" class="logolink">
        <svg xmlns="http://www.w3.org/2000/svg" class="logo" viewBox="0 0 332.5 132.1">
          <g class="a"><path class="st0" d="M14.1 89.1c1.1-0.8 2.3-1.6 3.6-2.4 1.3-0.8 2.4-1.7 3.5-2.7 1.1-1 1.9-2.1 2.6-3.3 0.7-1.2 1.1-2.6 1.1-4.2 0-2.5-0.7-4.4-2.2-5.8 -1.4-1.4-3.3-2.1-5.5-2.1 -1.5 0-2.8 0.4-3.9 1.1 -1.1 0.7-1.9 1.6-2.5 2.8 -0.6 1.2-1.1 2.4-1.4 3.8C9.2 77.7 9 79.1 9 80.5H6.5v14.2c0.4-0.4 0.9-0.7 1.3-1.1C9.8 92.2 11.9 90.7 14.1 89.1z"></path>
          <path class="st0" d="M79.4 112.1L57.6 77h-0.1v35.1H46.6V59.7h11.5l21.9 35.2h0.1V59.7h6.4v-54h-80V63c0.9-0.7 1.9-1.2 3-1.7 2.4-1.1 5.1-1.6 8.2-1.6 2.3 0 4.6 0.4 6.7 1.1 2.1 0.7 4 1.8 5.6 3.2 1.6 1.4 2.9 3.1 3.9 5.1 1 2 1.4 4.3 1.4 6.8 0 2.6-0.4 4.8-1.2 6.7 -0.8 1.9-1.9 3.5-3.3 5 -1.4 1.4-2.9 2.8-4.7 3.9 -1.7 1.2-3.5 2.3-5.2 3.5 -1.8 1.2-3.5 2.4-5.1 3.7 -1.7 1.3-3.1 2.9-4.4 4.6h24.3v9H6.5v16.3h80v-16.3H79.4z"></path></g>
          <path class="st0" d="m96.7 93.3c0-2.7 0.4-5.2 1.1-7.6 0.8-2.4 1.9-4.5 3.3-6.3 1.5-1.8 3.3-3.2 5.4-4.3 2.2-1.1 4.6-1.6 7.4-1.6 2.8 0 5.3 0.5 7.4 1.6 2.2 1.1 4 2.5 5.4 4.3 1.5 1.8 2.6 3.9 3.3 6.3 0.8 2.4 1.1 4.9 1.1 7.6 0 2.7-0.4 5.2-1.1 7.6-0.8 2.4-1.9 4.5-3.3 6.3-1.5 1.8-3.3 3.2-5.4 4.3-2.2 1.1-4.6 1.6-7.4 1.6-2.8 0-5.3-0.5-7.4-1.6-2.2-1.1-4-2.5-5.4-4.3-1.5-1.8-2.6-3.9-3.3-6.3-0.7-2.4-1.1-5-1.1-7.6zm2.8 0c0 2.3 0.3 4.4 1 6.5 0.6 2.1 1.6 3.9 2.8 5.5 1.2 1.6 2.7 2.9 4.6 3.9 1.8 1 3.9 1.4 6.2 1.4 2.3 0 4.4-0.5 6.2-1.4 1.8-1 3.3-2.2 4.6-3.9 1.2-1.6 2.2-3.5 2.8-5.5 0.6-2.1 1-4.2 1-6.5 0-2.3-0.3-4.4-1-6.5-0.6-2.1-1.6-3.9-2.8-5.5-1.2-1.6-2.7-2.9-4.6-3.9-1.8-1-3.9-1.4-6.2-1.4-2.3 0-4.4 0.5-6.2 1.4-1.8 1-3.3 2.2-4.6 3.9-1.2 1.6-2.2 3.5-2.8 5.5-0.7 2-1 4.2-1 6.5z"></path><path class="st0" d="m142.4 74.4 2.8 0 0 7.7 0.1 0c0.3-1.2 0.8-2.3 1.5-3.3 0.7-1 1.6-2 2.7-2.8 1.1-0.8 2.2-1.4 3.5-1.8 1.3-0.4 2.7-0.7 4.1-0.7 1.8 0 3.4 0.2 4.7 0.7 1.3 0.5 2.4 1.1 3.4 1.8 0.9 0.8 1.7 1.6 2.2 2.6 0.5 1 0.9 1.9 1.1 2.9l0.1 0c1.1-2.6 2.6-4.6 4.5-6 1.9-1.3 4.4-2 7.5-2 1.7 0 3.3 0.3 4.7 0.8 1.4 0.5 2.7 1.3 3.7 2.3 1.1 1.1 1.9 2.4 2.5 4 0.6 1.6 0.9 3.5 0.9 5.7l0 25.8-2.8 0 0-25.8c0-2.4-0.4-4.3-1.1-5.7-0.7-1.4-1.6-2.4-2.6-3.1-1-0.7-2-1.1-3-1.3-1-0.2-1.8-0.3-2.3-0.3-1.7 0-3.3 0.3-4.7 0.9-1.4 0.6-2.7 1.5-3.7 2.6-1.1 1.2-1.9 2.6-2.5 4.4-0.6 1.7-0.9 3.7-0.9 6l0 22.3-2.8 0 0-25.8c0-2.4-0.4-4.2-1.1-5.6-0.7-1.4-1.5-2.4-2.5-3.1-1-0.7-1.9-1.1-2.9-1.3-1-0.2-1.8-0.3-2.4-0.3-1.3 0-2.7 0.3-4.1 0.8-1.4 0.5-2.7 1.4-3.9 2.5-1.2 1.1-2.1 2.6-2.9 4.3-0.7 1.8-1.1 3.8-1.1 6.2l0 22.3-2.8 0 0-37.7z"></path>
          <path class="st0" d="m230.2 104.6-0.2 0c-0.4 1.1-1.1 2.2-1.9 3.2-0.8 1-1.8 1.9-3 2.7-1.2 0.8-2.6 1.4-4.1 1.8-1.5 0.4-3.2 0.7-5 0.7-4 0-7.1-0.9-9.3-2.6-2.2-1.7-3.3-4.4-3.3-8 0-2.2 0.4-4 1.3-5.4 0.9-1.4 2-2.5 3.3-3.3 1.3-0.8 2.8-1.4 4.5-1.7 1.6-0.3 3.2-0.6 4.7-0.7l4.3-0.4c2-0.1 3.6-0.4 4.7-0.7 1.1-0.3 2-0.8 2.6-1.3 0.6-0.6 1-1.3 1.1-2.2 0.1-0.9 0.2-2 0.2-3.3 0-1-0.2-2-0.6-2.9-0.4-0.9-1-1.7-1.8-2.3-0.8-0.7-1.9-1.2-3.2-1.6-1.3-0.4-2.9-0.6-4.8-0.6-3.4 0-6.1 0.8-8.2 2.5-2.1 1.7-3.2 4.2-3.4 7.6l-2.8 0c0.2-4.2 1.5-7.3 4-9.4 2.5-2.1 6-3.1 10.5-3.1 4.6 0 7.9 0.9 9.9 2.7 2.1 1.8 3.1 4.1 3.1 7l0 21.9c0 0.5 0 1.1 0 1.6 0 0.5 0.1 1 0.3 1.5 0.1 0.4 0.4 0.8 0.7 1.1 0.3 0.3 0.8 0.4 1.5 0.4 0.5 0 1.2-0.1 2.1-0.2l0 2.3c-0.7 0.2-1.5 0.3-2.3 0.3-1.1 0-2-0.1-2.7-0.4-0.7-0.3-1.2-0.7-1.5-1.2-0.3-0.5-0.6-1.1-0.7-1.7-0.1-0.7-0.2-1.4-0.2-2.2l0-2.1zm0-13.9c-0.7 0.8-1.7 1.4-3.1 1.7-1.4 0.3-2.9 0.5-4.7 0.7l-4.7 0.4c-1.4 0.1-2.7 0.4-4.1 0.6-1.4 0.3-2.6 0.7-3.7 1.4-1.1 0.6-2 1.5-2.7 2.6-0.7 1.1-1 2.5-1 4.3 0 2.8 0.9 4.9 2.6 6.2 1.8 1.3 4.2 2 7.3 2 3.2 0 5.7-0.6 7.6-1.7 1.9-1.1 3.3-2.5 4.3-4 1-1.5 1.6-2.9 1.9-4.3 0.3-1.4 0.4-2.3 0.4-2.8l0-7.1z"></path><path class="st0" d="m275.4 104-0.1 0c-1.6 3-3.5 5.2-5.9 6.7-2.3 1.5-5.2 2.2-8.6 2.2-2.8 0-5.3-0.5-7.3-1.6-2.1-1.1-3.7-2.5-5.1-4.3-1.3-1.8-2.3-3.9-2.9-6.3-0.6-2.4-1-4.9-1-7.5 0-2.8 0.3-5.4 1-7.8 0.7-2.4 1.7-4.5 3.1-6.3 1.4-1.8 3.1-3.2 5.2-4.2 2.1-1 4.6-1.5 7.4-1.5 1.5 0 3 0.2 4.5 0.6 1.5 0.4 2.8 1 4.1 1.8 1.2 0.8 2.3 1.8 3.3 2.9 0.9 1.2 1.6 2.5 2.1 4l0.1 0 0-23 2.8 0 0 52.4-2.8 0 0-8.1zm-14 6.6c2.4 0 4.5-0.5 6.2-1.5 1.7-1 3.2-2.3 4.3-3.9 1.1-1.6 2-3.5 2.6-5.5 0.6-2.1 0.8-4.2 0.8-6.3 0-2.2-0.3-4.3-0.8-6.4-0.6-2.1-1.4-3.9-2.5-5.6-1.1-1.6-2.6-2.9-4.4-3.9-1.8-1-3.9-1.5-6.3-1.5-2.5 0-4.6 0.5-6.4 1.4-1.8 1-3.2 2.2-4.4 3.9-1.2 1.6-2 3.5-2.5 5.6-0.5 2.1-0.8 4.3-0.8 6.5 0 2.2 0.3 4.3 0.8 6.4 0.6 2.1 1.4 3.9 2.6 5.5 1.1 1.6 2.6 2.9 4.4 3.9 1.8 0.9 3.9 1.4 6.4 1.4z"></path><path class="st0" d="m292.8 99.6c0.1 1.8 0.5 3.3 1.2 4.7 0.7 1.3 1.6 2.5 2.7 3.4 1.1 0.9 2.4 1.7 3.9 2.2 1.5 0.5 3.1 0.7 4.8 0.7 1.2 0 2.5-0.1 3.9-0.3 1.4-0.2 2.7-0.6 3.9-1.2 1.2-0.6 2.2-1.4 3-2.5 0.8-1.1 1.2-2.4 1.2-4 0-2.1-0.6-3.7-1.9-4.8-1.3-1.1-2.9-1.9-4.8-2.5-1.9-0.6-4-1.1-6.2-1.4-2.2-0.4-4.3-0.9-6.2-1.7-1.9-0.7-3.5-1.8-4.8-3.1-1.3-1.3-1.9-3.3-1.9-5.9 0-1.9 0.4-3.4 1.2-4.7 0.8-1.2 1.9-2.2 3.2-3 1.3-0.7 2.8-1.3 4.4-1.6 1.6-0.3 3.2-0.5 4.8-0.5 2 0 3.8 0.2 5.5 0.7 1.7 0.4 3.2 1.2 4.4 2.1 1.2 1 2.2 2.2 2.9 3.7 0.7 1.5 1.1 3.4 1.1 5.5l-2.8 0c0-1.7-0.3-3.2-0.8-4.4-0.6-1.2-1.3-2.2-2.3-3-1-0.8-2.2-1.3-3.6-1.7-1.4-0.4-2.8-0.6-4.4-0.6-1.3 0-2.6 0.1-3.9 0.4-1.3 0.2-2.5 0.7-3.5 1.2-1 0.6-1.9 1.3-2.5 2.3-0.7 0.9-1 2.1-1 3.4 0 1.5 0.4 2.7 1.1 3.7 0.7 0.9 1.7 1.7 2.9 2.2 1.2 0.6 2.5 1 4 1.4 1.5 0.3 3 0.7 4.5 1 1.9 0.3 3.6 0.7 5.2 1.2 1.6 0.5 3.1 1.1 4.3 1.9 1.2 0.8 2.1 1.8 2.8 3.1 0.7 1.3 1 2.9 1 4.8 0 2.1-0.5 3.7-1.4 5.1-0.9 1.3-2.1 2.4-3.5 3.2-1.4 0.8-3 1.4-4.7 1.7-1.7 0.3-3.4 0.5-5.1 0.5-2.2 0-4.1-0.3-6-0.8-1.8-0.6-3.4-1.4-4.8-2.6-1.4-1.2-2.4-2.6-3.2-4.2-0.8-1.7-1.2-3.6-1.2-5.8l2.6 0z"></path></svg>
     </a>
    </div>

    <div class="column medium-6 text-center" id="menu-holder">
      <ul id="menu-main-menu" class="vertical medium-horizontal menu dropdown" data-responsive-menu="accordion medium-dropdown" role="menubar" data-dropdown-menu="ftmoua-dropdown-menu">

        <li class="sub-menu-parent show-for-medium-up hide-for-small-only" role="menuitem">
          <a class="page-link">About</a>
            <ul class="menu sub-menu">

              <li>
                <a href="#">About</a>
              </li>
              <li>
                <a href="/development">Blog</a>
              </li>
              <li>
                <a href="/online-marketing">Value</a>
              </li>
              <li>
                <a href="/maintenance">Contact</a>
              </li>


            </ul>
        </li>

        <!--Mobile Menu-->
        <li class="show-for-small-only" role="menuitem">
          <a class="page-link" href="/design/">About</a>
        </li>
        <li class="show-for-small-only" role="menuitem">
          <a class="page-link" href="/development/">Blog</a>
        </li>
        <li class="show-for-small-only" role="menuitem">
          <a class="page-link" href="/music/">Value</a>
        </li>
        <li class="show-for-small-only" role="menuitem">
          <a class="page-link" href="/maintenance/">Contact</a>
        </li>



        <li class="menu-item menu-item-type-post_type menu-item-object-page" role="menuitem"><a class="page-link" href="/about">Blog</a></li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page" role="menuitem"><a class="page-link" href="/blog">Value</a></li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page" role="menuitem"><a class="page-link" href="/about">Contact</a></li>

      </ul>
    </div>

    <div class="column small-3 show-for-medium text-right button-holder">
      <a class="button contact-popup-trigger">Contact Us</a>
    </div>


    <div class="column small-6 hide-for-medium text-right">
      <a class="mobile-menu-toggler" data-toggle="menu-holder">
        <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" id="svg2" viewBox="0 0 18 18" height="18" width="18" version="1.1">
          <defs id="defs12"></defs>
          <path class="hamburger-part" id="path4" d="M 16,14 2,14 c -1.103,0 -2,0.897 -2,2 0,1.103 0.897,2 2,2 l 14,0 c 1.103,0 2,-0.897 2,-2 0,-1.103 -0.897,-2 -2,-2 z"></path>
          <path class="hamburger-part" id="path6" d="M 16,7 2,7 C 0.897,7 0,7.897 0,9 c 0,1.103 0.897,2 2,2 l 14,0 c 1.103,0 2,-0.897 2,-2 0,-1.103 -0.897,-2 -2,-2 z"></path>
          <path class="hamburger-part" id="path8" d="M 16,0 2,0 C 0.897,0 0,0.897 0,2 0,3.103 0.897,4 2,4 L 16,4 C 17.103,4 18,3.103 18,2 18,0.897 17.103,0 16,0 Z"></path>
        </svg>
      </a>
    </div>
  </div>
</div>
</div>

</nav>

</div>

</header>
 <!-- Header ENd -->
