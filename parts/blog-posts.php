<section class="blog-posts fullwidth section-padding-global">
   <?php
      $temp = $wp_query; $wp_query= null;
      $wp_query = new WP_Query(); $wp_query->query('posts_per_page=4' . '&paged='.$paged);
      while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
   <h2><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
   <?php get_template_part( 'parts/content', 'byline' ); ?>
   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-dots.png" class="blog-dots"/>
   <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'thumb-large' ); } ?>
   <div class="post-excerpt"><?php echo excerpt(50); ?> <a href="<?php the_permalink(); ?>" title="Read more" >[...]</a></div>

   <?php endwhile; ?>
   <?php if ($paged > 1) { ?>
   <nav id="nav-posts">

   </nav>
   <?php } else { ?>

   <?php } ?>
   <div class="numbered-pagination">
     <?php echo paginate_links( $args ); ?>
     <?php $args = array(
  'base'               => '%_%',
  'format'             => '?paged=%#%',
  'total'              => 1,
  'current'            => 0,
  'show_all'           => false,
  'end_size'           => 1,
  'mid_size'           => 2,
  'prev_next'          => true,
  'prev_text'          => __('« Previous'),
  'next_text'          => __('Next »'),
  'type'               => 'plain',
  'add_args'           => false,
  'add_fragment'       => '',
  'before_page_number' => '',
  'after_page_number'  => ''
  ); ?>

   </div>


   <?php wp_reset_postdata(); ?>
</section>
