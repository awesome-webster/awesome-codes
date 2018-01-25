<header class="hero-image about-hero" >
   <div class="hero-image_container" style="background-image: url(<?php the_field('hero_background'); ?>);">
      <div class="row">
         <div class="columns large-6">
            <div class="hero-content">
               <h1><?php the_field('hero_title'); ?></h1>
               <p class="subheader"><?php the_field('hero_text'); ?></p>
               <a class="round button" data-open="popupOne"><?php the_field('hero_button', 2); ?></a>
            </div>
         </div>
      </div>
   </div>
</header>
