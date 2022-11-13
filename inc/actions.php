<?php

function add_style() {
    wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/style.min.css', array(), "1.0.0", false);
}

add_action('wp_head', 'add_style');