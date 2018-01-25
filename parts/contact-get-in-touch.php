<section class="get-in-touch fullwidth  section-padding-global">
   <div class="row">
      <div class="columns  medium-6 small-12 no-col-spacing">
         <div class="get-in-touch_container blackbg">
            <h4 class="get-in-touch_headline"><?php the_field('get_in_touch_heading'); ?></h4>
            <p class="get-in-touch_description"><?php the_field('get_in_touch_text'); ?></p>
            <a href="#"> Email: <?php the_field('get_in_touch_email'); ?></a>
         </div>
      </div>
      <div class="columns  medium-6 small-12 no-col-spacing">
         <div class="get-in-touch_container turquoisebg">
            <h4 class="get-in-touch_headline"><?php the_field('say_something_heading'); ?></h4>
            <?php echo do_shortcode( '[contact-form-7 id="117" title="say something"]'); ?>
         </div>
      </div>
   </div>
</section>
