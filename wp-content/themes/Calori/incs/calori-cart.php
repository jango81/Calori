<?php

add_action("wp_ajax_add_to_cart", "add_to_cart");
add_action("wp_ajax_nopriv_add_to_cart", "add_to_cart");

function add_to_cart()
{
    $product_id = isset($_POST["product_id"]) ? absint($_POST["product_id"]) : 0;
    $variant_id = isset($_POST["variant_id"]) ? absint($_POST["variant_id"]) : 0;
    $payment_type = isset($_POST["payment_type"]) ? sanitize_text_field($_POST["payment_type"]) : '';
    $other_data = isset($_POST["other_data"]) ? wp_unslash($_POST["other_data"]) : array();

    if (is_array($other_data)) {
        $sanitized_data = array_map(function ($item) {
            return is_array($item) ? array_map('sanitize_text_field', $item) : sanitize_text_field($item);
        }, $other_data);
    } else {
        $sanitized_data = sanitize_text_field($other_data);
    }

    $variation = array(
        'attribute_pa_maksu-tyyppi' => $payment_type,
    );

    $cart_item_key = WC()->cart->add_to_cart($product_id, 1, $variant_id, $variation, $sanitized_data);



    if ($cart_item_key) {
        $cart_item = WC()->cart->get_cart_item($cart_item_key);
        if ($cart_item) {
            error_log(print_r($cart_item, true));
            $product = $cart_item["data"];
            $product_name = $product->get_name();
            $product_price = $product->get_price();
            $product_quantity = $cart_item["quantity"];
            $product_attrs = array();
            $product_extras = isset($cart_item["extra_data"]) ? $cart_item["extra_data"] : array();
            foreach ($cart_item["variation"] as $attr_name => $attr_value) {
                $clean_attr_name = str_replace("attribute_", "", $attr_name);
                $term = get_term_by('slug', $attr_value, $clean_attr_name);
            
                $attr_label = wc_attribute_label($clean_attr_name);
                $attr_value_label = $term ? $term->name : $attr_value;

                $product_attrs[$attr_label] = $attr_value_label;
            }

            $data = array(
                "product_name" => $product_name,
                "product_price" => $product_price,
                "product_quantity" => $product_quantity,
                "product_attrs" => $product_attrs,
                "product_extras" => $product_extras,
            );
        }
        wp_send_json_success(array(
            "cart_item_key" => $cart_item_key,
            "cart_url" => wc_get_cart_url(),
            "cart_count" => WC()->cart->get_cart_contents_count(),
            "current_product_data" => $data,
        ));
    } else {
        wp_send_json_error("Failed to add to cart");
    }

    wp_die();
}

add_action("wp_ajax_delete_product_cart", "delete_product_cart");
add_action("wp_ajax_nopriv_delete_product_cart", "delete_product_cart");

function delete_product_cart()
{
    $cart_item_key = isset($_POST["product_key"]) ? sanitize_text_field($_POST["product_key"]) : "";
    $removed = WC()->cart->remove_cart_item($cart_item_key);

    if ($removed) {
        wp_send_json_success(array(
            "cart_url" => wc_get_cart_url(),
            "cart_count" => WC()->cart->get_cart_contents_count(),
        ));
    } else {
        wp_send_json_error("Failed to remove product from cart");
    }

    wp_die();
}