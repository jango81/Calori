<?php


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
            #unset($fields["billing"][$field_key]["label"]);
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
            #unset($fields["shipping"][$field_key]["label"]);
            $fields["shipping"][$field_key]["placeholder"] = $label;
            $fields["shipping"][$field_key]["class"] = array("checkout-field-inputs");
        }
    }

    return $fields;
});

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


add_action("woocommerce_after_order_notes", function ($checkout) {
    echo "<div class='checkout-field-inputs'>";
    woocommerce_form_field("delivery_outdoor", array(
        "type" => "checkbox",
        "class" => array("checkout-field-checkbox"),
        "label" => "Paketin saa jättää oven eteen",
        "required" => false
    ), $checkout->get_value("delivery_outdoor"));
    echo "</div>";

});

add_action("woocommerce_checkout_update_order_meta", function ($order_id) {
    if (!empty($_POST["delivery_outdoor"])) {
        $result = sanitize_text_field($_POST["delivery_outdoor"]);
        error_log($result);
        $order = wc_get_order($order_id);
        $order->update_meta_data("delivery_outdoor", $result === "1" ? "yes" : "no");
        $order->save_meta_data();
    }
});


add_action( 'woocommerce_admin_order_data_after_shipping_address', function( $order ) {
    echo '<p><strong>' . esc_html__( 'Delivery outdoor' ) . ':</strong> ' . esc_html( $order->get_meta( 'delivery_outdoor', true ) ) . '</p>';
}, 10, 1 );


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