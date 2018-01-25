<section class="value-services value three-col-infobox fullwidth section-padding-global">
  <h2><?php the_field('services'); ?></h2>
   <div class="row" data-equalizer data-equalize-by-row="true">
      <div class="columns  medium-4 small-12" data-equalizer-watch>
         <div class="three-col-infobox_container">
            <img src="<?php the_field('image_1'); ?>"/>
            <h4><?php the_field('heading_1'); ?></h4>
            <div class="detail"><?php the_field('text_1'); ?></div>
            <a href="<?php the_field('button_link_1'); ?>" class="round button"><?php the_field('button_1'); ?></a>
         </div>
      </div>
      <div class="columns  medium-4 small-12" data-equalizer-watch>
         <div class="three-col-infobox_container">
            <img src="<?php the_field('image_2'); ?>"/>
            <h4><?php the_field('heading_2'); ?></h4>
            <div class="detail"><?php the_field('text_2'); ?></div>
            <a href="<?php the_field('button_link_2'); ?>" class="round button"><?php the_field('button_2'); ?></a>
         </div>
      </div>
      <div class="columns medium-4 small-12" data-equalizer-watch>
         <div class="three-col-infobox_container">
            <img src="<?php the_field('image_3'); ?>"/>
            <h4><?php the_field('heading_3'); ?></h4>
            <div class="detail"><?php the_field('text_3'); ?></div>
            <a href="<?php the_field('button_link_3'); ?>" class="round button"><?php the_field('button_3'); ?></a>
         </div>
      </div>
   </div>
</section>
