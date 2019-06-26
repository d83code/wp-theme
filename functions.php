<?php

function custom_widgets_init() {
  register_sidebar( array(
     'name' => 'footer desno',
     'id' => 'footer-right',
     'before_widget' => '<div>',
     'after_widget' => '</div>',
     'before_title' => '<h2 class="rounded">',
     'after_title' => '</h2>',
  ) );
}
add_action( 'widgets_init', 'custom_widgets_init' );