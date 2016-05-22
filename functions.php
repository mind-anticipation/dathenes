<?php

add_action( 'wp_enqueue_scripts', function() {
  // Parent theme stylesheet
  wp_enqueue_style( 'twentysixteen-style', trailingslashit( get_template_directory_uri() ) . 'style.css' );
});
