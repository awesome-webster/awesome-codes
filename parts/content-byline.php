<?php
/**
 * The template part for displaying an author byline
 */
?>

<p class="byline">
	<?php the_time('F j, Y') ?> by <?php the_author_posts_link(); ?>
</p>
