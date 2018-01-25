<?php
   /**
    * Template part for displaying a single post
    */
   ?>
<section class="blog-posts section-padding-global">
   <div class="row">
      <div class="columns  medium-12 small-12">
         <h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
         <?php get_template_part( 'parts/content', 'byline' ); ?>
         <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'thumb-large' ); } ?>
         <div class="post-excerpt"><?php the_content(); ?></div>
         <?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ), 'after'  => '</div>' ) ); ?>
         <p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', ''); ?></p>
         <!-- end article footer -->
         <?php comments_template(); ?>
         </article> <!-- end article -->
      </div>
   </div>
</section>
