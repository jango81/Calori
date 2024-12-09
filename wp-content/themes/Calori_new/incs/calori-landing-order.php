<?php 

add_action("wp_ajax_get_variation_by_attr", "get_variation_by_attr");
add_action("wp_ajax_nopriv_get_variation_by_attr", "get_variation_by_attr");

function get_all_term_ids($taxonomy) {
    $terms = get_terms([
        'taxonomy'   => $taxonomy,
        'hide_empty' => false, // Установите в true, если хотите исключить термины без товаров
    ]);

    $term_ids = [];
    if (!is_wp_error($terms) && !empty($terms)) {
        foreach ($terms as $term) {
            $term_ids[] = $term->term_id;
        }
    }

    return $term_ids;
}
function find_variations_by_attribute($product_id, $attribute_id, $value) {
    $matching_variations = [];

    // Получаем объект товара
    $product = wc_get_product($product_id);

    // Проверяем, что товар является вариативным
    if ($product && $product->is_type('variable')) {
        // Получаем все доступные вариации товара
        $variations = $product->get_available_variations();

        // Формируем ключ атрибута в формате WooCommerce
        $attribute_key = 'attribute_' . sanitize_title($attribute_id);

        // Перебираем все вариации и ищем совпадение по атрибуту и значению
        foreach ($variations as $variation) {
            if (isset($variation['attributes'][$attribute_key])) {
                // Сравниваем значение атрибута без учёта регистра
                if (strcasecmp($variation['attributes'][$attribute_key], $value) === 0) {
                    $matching_variations["currency_symbol"] = get_woocommerce_currency_symbol();
                    $matching_variations[$variation['variation_id']] = array(
                        'variation_regular_price' => $variation['display_regular_price'],
                    );
                }
            }
        }
    }

    return $matching_variations; // Возвращаем массив ID вариаций
}

function get_variation_by_attr() {
    $product_id = isset($_POST["product_id"]) ? sanitize_text_field($_POST["product_id"]) : "";
    $attr_value = isset($_POST["attribute_value"]) ? sanitize_text_field($_POST["attribute_value"]) : "";
    $attr_id = isset($_POST["attribute_id"]) ? sanitize_text_field($_POST["attribute_id"]) : "";

    // Ищем вариации по атрибуту
    $variations = find_variations_by_attribute($product_id, $attr_id, $attr_value);

    if (!empty($variations)) {
        wp_send_json_success($variations);
    } else {
        wp_send_json_error("No matching variation found");
    }

    wp_die();
}