<?php
   /**
    * The template for displaying all single posts and attachments
    */

   get_header(); ?>

<div class="row">
   <div class="columns medium-8 small-12">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php get_template_part( 'parts/loop', 'single' ); ?>
      <?php endwhile; else : ?>
      <?php get_template_part( 'parts/content', 'missing' ); ?>
      <?php endif; ?>
   </div>
   <div class="columns  medium-4 small-12">
     <?php get_template_part( 'parts/sidebar', 'newsletter' ); ?>
     <?php get_template_part( 'parts/sidebar', 'popular' ); ?>
     <?php get_template_part( 'parts/sidebar', 'social' ); ?>
     <?php get_sidebar(); ?>
   </div>
</div>
<?php get_footer(); ?>
