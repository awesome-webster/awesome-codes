<section class="popular-posts fullwidth sidebar-blog ">
   <h3>POPULAR POSTS</h3>
   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sidebar-dots.png" class="sidebar-dots"/>
   <?php
      global $post;
      $args = array( 'numberposts' => 5, 'offset'=> 1, 'category' => 1 );
      $myposts = get_posts( $args );
      foreach( $myposts as $post ) :  setup_postdata($post); ?>
   <div class="row">
      <div class="columns  medium-4 small-12">
         <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'thumb-equal' ); } ?>
      </div>
      <div class="columns  medium-8 small-12">
         <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
         <span class="author-name"> <span>by</span> <?php the_author_posts_link(); ?> </span> <span class="post-time">  <?php the_time('F j, Y') ?></span>
         <div class="post-excerpt"><?php echo excerpt(8); ?> <a href="<?php the_permalink(); ?>" title="Read more" class="popular-readmore">[...]</a></div>
      </div>
      <!-- post views numbered -->
      <!-- <li><?php setPostViews(get_the_ID()); echo getPostViews(get_the_ID());; ?> </li>-->
   </div>
   <?php endforeach; ?>
</section>