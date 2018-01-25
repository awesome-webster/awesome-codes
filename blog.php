<?php
   /*
   Template Name: blog
   */

   get_header(); ?>
<?php get_template_part( 'parts/blog', 'hero' ); ?>
<div class="row">
   <div class="columns  medium-8 small-12">
      <?php get_template_part( 'parts/blog', 'posts' ); ?>
   </div>
   <div class="columns  medium-4 small-12">
      <?php get_template_part( 'parts/sidebar', 'newsletter' ); ?>
      <?php get_template_part( 'parts/sidebar', 'popular' ); ?>
      <?php get_template_part( 'parts/sidebar', 'social' ); ?>
      <?php get_sidebar(); ?>
   </div>
</div>
<div id="content"></div>
<?php get_footer(); ?>
