<section class="value-products value three-col-infobox fullwidth section-padding-global">
  <div class="value_container">
  <h2> <?php the_field('recommendations'); ?> </h2>
   <div class="row" data-equalizer data-equalize-by-row="true">
      <div class="columns  medium-4 small-12" data-equalizer-watch>
         <div class="three-col-infobox_container">
            <img src="<?php the_field('image_column_1'); ?>"/>
            <h4><?php the_field('heading_column_1'); ?></h4>
            <div class="detail"><?php the_field('text_column_1'); ?></div>
            <a href="<?php the_field('button_link_column_1'); ?>" class="round button"><?php the_field('button_column_1'); ?></a>
         </div>
      </div>
      <div class="columns  medium-4 small-12" data-equalizer-watch>
         <div class="three-col-infobox_container">
            <img src="<?php the_field('image_column_2'); ?>"/>
            <h4><?php the_field('heading_column_2'); ?></h4>
            <div class="detail"><?php the_field('text_column_2'); ?></div>
            <a href="<?php the_field('button_link_column_2'); ?>" class="round button"><?php the_field('button_column_2'); ?></a>
         </div>
      </div>
      <div class="columns medium-4 small-12" data-equalizer-watch>
         <div class="three-col-infobox_container">
            <img src="<?php the_field('image_column_3'); ?>"/>
            <h4><?php the_field('heading_column_3'); ?></h4>
            <div class="detail"><?php the_field('text_column_3'); ?></div>
            <a href="<?php the_field('button_link_column_3'); ?>" class="round button"><?php the_field('button_column_3'); ?></a>
         </div>
      </div>
   </div>
 </div>
</section>
