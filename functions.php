<?php

function blogging_load_scripts() {
    wp_enqueue_style('blogging-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');
}

add_action('wp_enqueue_scripts', 'blogging_load_scripts');


register_nav_menu( "primary", "main_menu" );


?>