<header class="hero-image home-hero">
  <div class="hero-image_container" style="background-image: url(<?php the_field('hero_image'); ?>);">
    <div class="row">
      <div class="columns large-7">
        <div class="hero-content">
          <h1><?php the_field('hero_title'); ?></h1>
          <p class="subheader"><?php the_field('hero_text'); ?></p>
          <a class="round button" data-open="popupOne"><?php the_field('hero_button'); ?></a>
        </div>
      </div>
    </div>
  </div>
</header>
