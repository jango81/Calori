<?php

add_action("wp_ajax_add_to_cart", "add_to_cart");
add_action("wp_ajax_nopriv_add_to_cart", "add_to_cart");

function add_to_cart()
{
    $product_id = isset($_POST["product_id"]) ? absint($_POST["product_id"]) : 0;
    $variant_id = isset($_POST["variant_id"]) ? absint($_POST["variant_id"]) : 0;
    
    $cart_item_key = WC()->cart->add_to_cart($product_id, 1, $variant_id);

    
    if ($cart_item_key) {
        wp_send_json_success(array(
            "cart_item_key" => $cart_item_key,
            "cart_url" => wc_get_cart_url(),
            "cart_count" => WC()->cart->get_cart_contents_count(),
        ));
    } else {
        wp_send_json_error("Failed to add to cart");
    }
}