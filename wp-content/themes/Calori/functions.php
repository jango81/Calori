<?php


add_action('after_setup_theme', function () {
    load_theme_textdomain("calori", get_template_directory() . "/languages");
    add_theme_support('woocommerce');
    add_theme_support("title-tag");

    register_nav_menus(array(
        "header_menu" => __("Header menu", "calori"),
    ));
});

add_action("wp_enqueue_scripts", function () {

    //------Front page-----
    if (is_front_page()) {
        wp_enqueue_script("calori-swiper", "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js");
        wp_enqueue_script("calori-landing", get_template_directory_uri() . "/assets/scripts/landing.js", array(), false, true);
        wp_script_add_data("calori-landing", "type", "module");
        wp_localize_script("calori-landing", "ajax_object", array(
            "ajax_url" => admin_url("admin-ajax.php"),
        ));
        wp_enqueue_style("calori-swiper", "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css");
    }
    if(is_checkout()) {
        wp_enqueue_style("calori-checkout", get_template_directory_uri() . "/assets/styles/checkout.css");
    }
    //------Meistä page-----
    if (is_page(214)) {
        wp_enqueue_script("calori-about", get_template_directory_uri() . "/assets/scripts/about.js", array(), false, true);
        wp_enqueue_style("calori-about", get_template_directory_uri() . "/assets/styles/about.css");
    }

    //------FAQs page-----
    if (is_page(226)) {
        wp_enqueue_style("calori-faq", get_template_directory_uri() . "/assets/styles/faq.css");
    }

    //------Miksi Calori? page-----
    if (is_page(224)) {
        wp_enqueue_style("calori-why", get_template_directory_uri() . "/assets/styles/why.css");
    }

    //------Ota yhteyttä page-----
    if (is_page(217)) {
        wp_enqueue_style("calori-contact", get_template_directory_uri() . "/assets/styles/contact.css");
    }

    //------Menu page-----
    if (is_page(222)) {
        wp_enqueue_script("calori-swiper", "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js");
        wp_enqueue_script("calori-menu", get_template_directory_uri() . "/assets/scripts/menu.js", array(), false, true);

        wp_enqueue_style("calori-menu", get_template_directory_uri() . "/assets/styles/menu.css");
        wp_enqueue_style("calori-swiper", "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css");
    }

    wp_enqueue_style("calori-reset-style", get_template_directory_uri() . "/assets/styles/reset.css");
    wp_enqueue_style("calori-style", get_template_directory_uri() . "/assets/styles/style.css");

    wp_enqueue_script("calori-main", get_template_directory_uri() . "/assets/scripts/main.js", array(), false, true);
});

add_filter('script_loader_tag', function ($tag, $handle, $src) {
    $script_names = array("calori-landing", "calori-main", "calori-menu");
    foreach ($script_names as $name) {
        if ($name === $handle) {
            return str_replace('<script ', '<script type="module"', $tag);
        }
    }

    return $tag;
}, 10, 3);




require_once get_template_directory() . "/incs/calori-nav-menu.php";
require_once get_template_directory() . "/incs/calori-get-meal-menu.php";
require_once get_template_directory() . "/incs/calori-cart.php";
require_once get_template_directory() . "/incs/calori-checkout.php";