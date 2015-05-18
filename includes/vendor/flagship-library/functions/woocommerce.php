<?php
// woocommerce stuff

?>

<?php

// http://docs.woothemes.com/document/third-party-custom-theme-compatibility
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<main id="content" class="content" role="main">';
}

function my_theme_wrapper_end() {
  echo '</main>';
}