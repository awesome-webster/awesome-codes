<section class="value-products value three-col-infobox fullwidth section-padding-global">
<h2> PRODUCTS </h2>
<?php
$slides = carbon_get_theme_option( 'crb_slides' );
echo '<div class="value_container">';
  echo '<div class="row" data-equalizer data-equalize-by-row="true">';
foreach ( $slides as $slide ) {

  echo '<div class="columns  medium-4 small-12" data-equalizer-watch>';
  echo '<div class="three-col-infobox_container">';
  echo wp_get_attachment_image( $slide['image'] );
  echo '<h4>' . $slide['title'] . '</h4>';
  echo '<div class="detail">' . $slide['description'] . '</div>';
  echo '<a href=" ' . $slide['button-link'] . '" class="round button">' . $slide['button-text'] . '</a>';
  echo '</div>';
  echo '</div>';

}
echo '</div>';
echo '</div>';
?>

</section>
