<?php

require_once "class-calori-calc-time.php";

add_filter("woocommerce_default_address_fields", function ($fields) {
    $labels = [
        "first_name" => "Etunimi",
        "last_name" => "Sukunimi",
        "company" => "Yritys",
        "address_1" => "Katuosoite",
        "address_2" => "Katuosoite 2",
        "city" => "Kaupunki",
        "postcode" => "Postinumero",
        "country" => "Maa",
        "state" => "Maakunta",
        "phone" => "Puhelinnumero",
        "email" => "Sähköposti"
    ];

    foreach ($labels as $field_key => $label) {
        if (isset($fields[$field_key])) {
            #unset($fields[$field_key]["label"]);
            $fields[$field_key]["placeholder"] = $label;
            $fields[$field_key]["class"] = array("checkout-field-inputs");
        }
    }

    return $fields;
});

#billing fields
add_filter("woocommerce_checkout_fields", function ($fields) {
    $labels = [
        "billing_first_name" => "Etunimi",
        "billing_last_name" => "Sukunimi",
        "billing_company" => "Yritys",
        "billing_address_1" => "Katuosoite",
        "billing_address_2" => "Katuosoite 2",
        "billing_city" => "Kaupunki",
        "billing_postcode" => "Postinumero",
        "billing_country" => "Maa",
        "billing_state" => "Maakunta",
        "billing_phone" => "Puhelinnumero",
        "billing_email" => "Sähköposti"
    ];

    foreach ($labels as $field_key => $label) {
        if (isset($fields["billing"][$field_key])) {
            $fields["billing"][$field_key]["placeholder"] = $label;
            $fields["billing"][$field_key]["class"] = array("checkout-field-inputs");
        }
    }

    return $fields;
});

#shipping fields
add_filter("woocommerce_checkout_fields", function ($fields) {
    $labels = [
        "shipping_first_name" => "Etunimi",
        "shipping_last_name" => "Sukunimi",
        "shipping_company" => "Yritys",
        "shipping_address_1" => "Katuosoite",
        "shipping_address_2" => "Katuosoite 2",
        "shipping_city" => "Kaupunki",
        "shipping_postcode" => "Postinumero",
        "shipping_country" => "Maa",
        "shipping_state" => "Maakunta"
    ];

    foreach ($labels as $field_key => $label) {
        if (isset($fields["shipping"][$field_key])) {
            $fields["shipping"][$field_key]["placeholder"] = $label;
            $fields["shipping"][$field_key]["class"] = array("checkout-field-inputs");
        }
    }

    return $fields;
});

add_filter("woocommerce_default_address_fields", function ($address_fields) {
    $address_fields["postcode"]["label"] = "Postinumero (esim. 00800)";
    return $address_fields;
}, 10, 1);


#account fields
add_filter("woocommerce_checkout_fields", function ($fields) {
    $labels = [
        "account_username" => "Käyttäjänimi",
        "account_password" => "Salasana",
        "account_password-2" => "Salasana uudelleen"
    ];

    foreach ($labels as $field_key => $label) {
        if (isset($fields["account"][$field_key])) {
            #unset($fields["account"][$field_key]["label"]);
            $fields["account"][$field_key]["placeholder"] = $label;
            $fields["account"][$field_key]["class"] = array("checkout-field-inputs");
        }
    }

    return $fields;
});

#order fields
add_filter("woocoomerce_checkout_fields", function ($fields) {
    $labels = [
        "order_comments" => "Lisätietoja"
    ];

    foreach ($labels as $field_key => $label) {
        if (isset($fields["order"][$field_key])) {
            $fields["order"][$field_key]["label"] = $label;
        }
    }

    return $fields;
});

add_filter("woocoomerce_checkout_fields", function ($fields) {
    foreach ($fields as $field_key => $field) {
        if (isset($fields[$field_key]["class"])) {
            $fields[$field_key]["class"] = array("checkout-field-inputs");
        }
    }
});


add_action("woocommerce_before_order_notes", function ($checkout) {
    echo "<div class='checkout-field-inputs'>";
    woocommerce_form_field("delivery_outdoor", array(
        "type" => "checkbox",
        "class" => array("checkout-field-checkbox"),
        "label" => "Paketin saa jättää oven eteen",
        "required" => false
    ), $checkout->get_value("delivery_outdoor"));
    woocommerce_form_field("delivery_time", array(
        "type" => "select",
        "options" => array(
            "Toimitus aikaikkuna 15:30-18:00" => "Toimitus aikaikkuna 15:30-18:00",
            "Toimitus aikaikkuna 17:00-21:00" => "Toimitus aikaikkuna 17:00-21:00",
            "Toimitus aikaikkuna 19:00-22:00" => "Toimitus aikaikkuna 19:00-22:00"
        ),
        "class" => array("checkout-field-select"),
        "label" => "Valitse toimitusaikaikkuna",
        "required" => true
    ), $checkout->get_value("delivery_time"));
    echo "</div>";

});



add_action("woocommerce_after_checkout_billing_form", function ($checkout) {
    $company_address = get_option('woocommerce_store_address') . " " . get_option('woocommerce_store_address_2') . " " . get_option('woocommerce_store_city') . " " . get_option('woocommerce_store_postcode');

    $zones = WC_Shipping_Zones::get_zones();
    $options = [];

    foreach ($zones as $zone) {
        $zone_id = $zone['zone_id'];
        $shipping_zone = WC_Shipping_Zones::get_zone($zone_id);
        $location = $shipping_zone->get_zone_locations();
        $key = "country";
        $value = "FI";

        foreach ($location as $loc) {
            error_log("location1 " . print_r($loc, true));
            if ($loc->type === $key && $loc->code === $value) {
                $shipping_methods = $shipping_zone->get_shipping_methods();

                foreach ($shipping_methods as $shipping_method) {
                    error_log("shipping_method " . print_r($shipping_method, true));
                    $method_id = $shipping_method->id;
                    $method_title = $shipping_method->title;

                    if ($method_id === "local_pickup") {
                        $method_title = "Nouto" . " (" . $company_address . ")";
                    }

                    $options[$method_id] = $method_title;
                }
            }
        }
    }

    error_log("options " . print_r($options, true)); ?>
    <div class='checkout-field-inputs'>
        <?php
        woocommerce_form_field("delivery_type", array(
            "type" => "select",
            "class" => array("checkout-field-select"),
            "label" => "Toimitustapa",
            "options" => $options,
            "required" => true,
        ), $checkout->get_value("delivery_type"));
        ?>
    </div>
    <?php
}, 10, 1);


$custom_checkout_error = "";

add_action('woocommerce_checkout_process', function () {
    global $custom_checkout_error;
    $custom_checkout_error = "";

    $shippig_postcode = isset($_POST['shipping_postcode']) ? sanitize_text_field($_POST['shipping_postcode']) : '';
    $delivery_type = isset($_POST['delivery_type']) ? sanitize_text_field($_POST['delivery_type']) : '';


    if (!$shippig_postcode || !$delivery_type) {
        return;
    }

    $zones = WC_Shipping_Zones::get_zones();
    $postcodes = [];

    foreach ($zones as $zone) {
        $zone_id = $zone['zone_id'];
        $shipping_zone = WC_Shipping_Zones::get_zone($zone_id);
        $locations = $shipping_zone->get_zone_locations();
        $key = "country";
        $value = "FI";

        if ($locations[0]->type === $key && $locations[0]->code === $value) {
            foreach ($locations as $loc) {
                if ($loc->type === "postcode") {
                    $postcodes[] = $loc->code;
                }
            }
        }
    }


    if (!in_array($shippig_postcode, $postcodes)) {
        global $custom_checkout_error;
        $custom_checkout_error = __('Syöttämäsi postinumero ei kuulu toimitusalueeseemme.', 'woocommerce');
    }

}, 999);



add_action('woocommerce_after_checkout_validation', function ($data, $errors) {
    global $custom_checkout_error;

    if (!empty($custom_checkout_error)) {
        foreach ($errors->get_error_codes() as $code) {
            error_log("CODE " . $code);
            $errors->remove($code);
        }

        $errors->add('custom_error', $custom_checkout_error);
    }
}, 10, 2);

add_action("woocommerce_checkout_update_order_meta", function ($order_id) {
    $delivery_time = isset($_POST["delivery_time"]) ? sanitize_text_field($_POST["delivery_time"]) : "";
    $is_checked = isset($_POST["delivery_outdoor"]) ? "YES" : "NO";
    $delivery_type = isset($_POST["delivery_type"]) ? sanitize_text_field($_POST["delivery_type"]) : "";

    $packages = WC()->shipping->get_packages();
    $shipping_title = "";

    foreach ($packages as $package) {
        if (!empty($package['rates'])) {
            foreach ($package['rates'] as $rate_id => $rate) {
                $id = $rate->get_method_id();
                $title = $rate->get_label();

                if ($id === $delivery_type) {
                    $shipping_title = $title;
                }
            }
        }
    }

    $order = wc_get_order($order_id);

    $order->update_meta_data("delivery_outdoor", $is_checked);
    $order->update_meta_data("delivery_time", $delivery_time);

    $new_shipping_method_id = $delivery_type;

    error_log("items " . print_r($order->get_items('shipping'), true));

    foreach ($order->get_items('shipping') as $shipping_item_id => $shipping_item) {
        $shipping_item->set_method_id($new_shipping_method_id);
        $shipping_item->set_method_title($shipping_title ? $shipping_title : $new_shipping_method_id);
        $shipping_item->save();
    }

    $order->calculate_totals();

    $order->save_meta_data();

    $order->save_meta_data();
});


add_action('woocommerce_admin_order_data_after_shipping_address', function ($order) {
    echo '<p><strong>' . esc_html__('Delivery outdoor') . ':</strong> ' . esc_html($order->get_meta('delivery_outdoor', true)) . '</p>';
    echo '<p><strong>' . esc_html__('Delivery time') . ':</strong> ' . esc_html($order->get_meta('delivery_time', true)) . '</p>';
    echo '<p><strong>' . esc_html__('Delivery type') . ':</strong> ' . esc_html($order->get_meta('delivery_type', true)) . '</p>';
}, 10, 1);



add_action('wp_footer', 'hide_checkout_error_messages');
function hide_checkout_error_messages()
{
    if (is_checkout()):
        ?>
        <script type="text/javascript">
            jQuery(function ($) {
                $(document.body).on('checkout_error', function () {
                    $('.woocommerce-error, .woocommerce-message').hide();
                });
            });
        </script>
        <?php
    endif;
}

?>