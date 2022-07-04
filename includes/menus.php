<?php
function register_my_menus() {
  register_nav_menus(
    array(
       'main-navi' => __( 'Hauptnavigation' )
    )
  );
}
add_action( 'init', 'register_my_menus' );