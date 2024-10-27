<?php


add_action('after_setup_theme', function () {
    load_theme_textdomain("calori", get_template_directory() ."/languages");
    add_theme_support('woocommerce');
    add_theme_support("title-tag");

    register_nav_menus(array(
        "header_menu" => __("Header menu", "calori"),
    ));
});


add_action("wp_enqueue_scripts", function () {

    wp_enqueue_style("calori-swiper", "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css");
    wp_enqueue_style("calori-reset-style", get_template_directory_uri() . "/assets/styles/reset.css");
    wp_enqueue_style("calori-style", get_template_directory_uri() . "/assets/styles/style.css");

    wp_enqueue_script("calori-swiper", "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js");

    wp_enqueue_script("calori-landing", get_template_directory_uri() . "/assets/scripts/landing.js", array(),false, true );
    wp_script_add_data("calori-landing", 'type', 'module');

    wp_enqueue_script("calori-main", get_template_directory_uri() . "/assets/scripts/main.js", array(), false, true );
    wp_script_add_data("calori-main", 'type', 'module');
});

add_filter( 'script_loader_tag', function ($tag, $handle, $src){
    $script_names = array("calori-landing", "calori-main");
    foreach ($script_names as $name) {
        if($name === $handle) {
            return str_replace( '<script ', '<script type="module"', $tag );
        }
    }

    return $tag;
}, 10, 3 );



require_once get_template_directory() . "/incs/calori-nav-menu.php";