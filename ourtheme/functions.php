<?php
function fbi_register_stylesheet() {
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css");
    wp_enqueue_style("our-style", get_stylesheet_directory_uri() . "/style.css");
}
add_action("wp_enqueue_scripts", "our_register_stylesheet");