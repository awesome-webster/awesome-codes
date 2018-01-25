<?php
/*
Template Name: Full Width Home (No Sidebar)
*/

get_header(); ?>

	<?php get_template_part( 'parts/home', 'hero' ); ?>

	<div id="content">

	  <!--discover -->
      <?php get_template_part( 'parts/home', 'discover' ); ?>

		<!--newsletter CTA -->
	      <?php get_template_part( 'parts/home', 'newsletter' ); ?>

		<!--testimonials CTA -->
					<?php get_template_part( 'parts/home', 'testimonials' ); ?>



		<!-- Blog -->
    <?php get_template_part( 'parts/home', 'blog' ); ?>

		</div>
<!-- end #content -->
<?php get_footer(); ?>
