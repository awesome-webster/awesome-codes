<?php
   /*
   Template Name: Full Width about (No Sidebar)
   */
   
   get_header(); ?>
<?php get_template_part( 'parts/about', 'hero' ); ?>
<!--newsletter CTA -->
<?php get_template_part( 'parts/home', 'newsletter' ); ?>
<?php get_template_part( 'parts/about', 'quick-shot' ); ?>
<?php get_template_part( 'parts/about', 'accomplishment' ); ?>
<?php get_template_part( 'parts/about', 'really-love' ); ?>
<?php get_template_part( 'parts/newsletter', 'two' ); ?>
<div id="content"></div>
<!-- end #content -->
<?php get_footer(); ?>