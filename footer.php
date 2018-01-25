<?php
   /**
    * The template for displaying the footer.
    *
    * Comtains closing divs for header.php.
    *
    * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
    */
    ?>
<footer class="footer" role="contentinfo">
   <div class="inner-footer text-center-small">
     <div class="row">
      <div class="small-12 medium-5 columns about-francisco">

         <div class="about-francisco-box">
           <img src="<?php the_field('footer_left_image', 71); ?>" alt="About Francisco" class="francisco-circle">
            <?php the_field('footer_left_text', 71); ?>
            <a href="#" class="round button" data-open="popupTwo"><?php the_field('footer_left_button', 71); ?></a>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/comment.png" alt="Francisco" class="francisco-comment">
         </div>
      </div>
      <div class="small-12 medium-3 columns explore">
         <h4><?php the_field('footer_middle_heading', 71); ?></h4>
         <a href="#"><?php the_field('footer_middle_link_3', 71); ?></a>
         <a href="#"><?php the_field('footer_middle_link_2', 71); ?></a>
         <a href="#"><?php the_field('footer_middle_link_3', 71); ?></a>
         <a href="#"><?php the_field('footer_middle_link_4', 71); ?></a>
      </div>
      <div class="medium-4 columns stay-connected">
         <h4><?php the_field('footer_heading_right', 71); ?></h4>
         <div class="social-icons">
            <ul>
               <li>
                  <a target="_blank" href="https://www.facebook.com/FranciscoDiazR/">
                     <img src="<?php the_field('facebook_icon', 71); ?>" alt="facebook">
               </li>
               <li><a target="_blank" href="https://twitter.com/FranciscoJDR?lang=es"><img src="<?php the_field('twitter_icon', 71); ?>" alt="twitter"></li>
               <li><a target="_blank" href="https://www.instagram.com/francisco_jdr/"><img src="<?php the_field('instagram_icon', 71); ?>" alt="pintrest"></li>
               <li><a target="_blank" href="https://www.youtube.com/channel/UCx-4gWRAg2RBs_MVpwKyAQA?view_as=subscriber"><img src="<?php the_field('youtube_icon', 71); ?>" alt="Youtube"></li>
               <li><a target="_blank" href="https://www.linkedin.com/in/franciscojdr/"><img src="<?php the_field('linked_in_icon', 71); ?>" alt="Linkedin"></li>
            </ul>
            <div class="email-footer"><?php the_field('footer_right_email', 71); ?></div>
         </div>
      </div>
    </div>
   </div>
   <!-- end #inner-footer -->
   <div class="small-12 medium-12 large-12 columns fullwidth socket">
   <div class="inner-width">
   <img src="<?php the_field('socket_logo', 71); ?>" alt="logo">
   <div class="privacy-policy"><a href="privacy" class="privacy"><?php the_field('privacy_policy', 71); ?></a><span>|</span><a href="terms" class="terms"><?php the_field('terms_and_conditions', 71); ?></a>   </div>
   <div class="source-org copyright"><?php the_field('copyright', 71); ?></div>
   <div class="join"><span><?php the_field('lets_start_a_revolution', 71); ?></span> <a href="#" class="round button send" data-open="popupOne"><?php the_field('join_button_socket_right', 71); ?></a></div>
   </div>
   </div>
</footer>
<!-- end .footer -->
</div>  <!-- end .off-canvas-content -->
</div> <!-- end .off-canvas-wrapper -->
<?php get_template_part( 'parts/popup', 'one' ); ?>
<?php get_template_part( 'parts/popup', 'two' ); ?>

<?php wp_footer(); ?>

<script>
(function (d, t) {
	var ph = d.createElement(t), s = d.getElementsByTagName(t)[0];
	ph.type = 'text/javascript';
	ph.src = '//my.2nomads.org/?p=457&ph_apikey=b7ab07dceda8e8e520325d364a440fd4';
	s.parentNode.insertBefore(ph, s);
})(document, 'script');
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
<script src="https://use.fontawesome.com/826a7e3dce.js"></script>
</body>
</html> <!-- end page -->
