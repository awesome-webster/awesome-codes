<section class="blog-home section-padding-global">
   <h2 class="blog-site-three-up-headline h2-heading"><?php the_field('blog_home'); ?></h2>
   <div class="row first-blog-row">
      <div class="columns">

        <?php
           $temp = $wp_query; $wp_query= null;
           $wp_query = new WP_Query(); $wp_query->query('posts_per_page=4' . '&paged='.$paged);
           while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
           <div class="blog-post-wrap">
             <a href="<?php the_permalink(); ?>" title="Read more">
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'thumb-home' ); } ?>
                <h2><?php the_title(); ?></h2>
                <div class="post-excerpt_home"><p><?php echo excerpt(10); ?></p></div>
              </a>
            </div>
        <?php endwhile; ?>

   </div>
</section>
