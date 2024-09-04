<?php
function refurbished_register_stylesheet() {
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css");
    wp_enqueue_style("style", get_stylesheet_directory_uri() . "/style.css");
    wp_enqueue_script("bootstrap-js", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js");
}
add_action("wp_enqueue_scripts", "refurbished_register_stylesheet");


add_theme_support( 'menus' );

add_action( 'init', 'register_my_menus' );

function register_my_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu' ),
            'secondary-menu' => __( 'Secondary Menu' )
        )
    );
}

function webshop_disable_gutenberg() {
    remove_post_type_support("page", "editor");
}
add_action("init", "webshop_disable_gutenberg");


function webshop_register_strings() {
    pll_register_string("Refurbished Living", "Blog");
    pll_register_string("Refurbished Living", "Søg");
    pll_register_string("Refurbished Living", "List-1.1");
    pll_register_string("Refurbished Living", "List-1.2");
    pll_register_string("Refurbished Living", "List-1.3");
    pll_register_string("Refurbished Living", "List-1.4");
}

add_action("init", "webshop_register_strings"); 