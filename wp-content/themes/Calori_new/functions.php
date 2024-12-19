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
        wp_enqueue_script("calori-landing", get_template_directory_uri() . "/assets/scripts/landing.js?v1", array(), false, true);
        wp_script_add_data("calori-landing", "type", "module");
        wp_localize_script("calori-landing", "ajax_object", array(
            "ajax_url" => admin_url("admin-ajax.php"),
        ));
        wp_enqueue_style("calori-swiper", "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css");
    }
    if (is_checkout()) {
        wp_enqueue_style("calori-checkout", get_template_directory_uri() . "/assets/styles/checkout.css");
    }
    //------Meistä page-----
    if (is_page(214)) {
        wp_enqueue_script("calori-about", get_template_directory_uri() . "/assets/scripts/about.js", array(), false, true);
        wp_enqueue_style("calori-about", get_template_directory_uri() . "/assets/styles/about.css");
    }

    if (is_page(217)) {
        // wp_enqueue_script("calori-about", get_template_directory_uri() . "/assets/scripts/about.js", array(), false, true);
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
        // wp_enqueue_script("calori-swiper", "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js");
        // wp_enqueue_script("calori-menu", get_template_directory_uri() . "/assets/scripts/menu.js", array(), false, true);
        wp_localize_script("calori-menu", "ajax_object", array(
            "ajax_url" => admin_url("admin-ajax.php"),
        ));

        wp_enqueue_style("calori-menu", get_template_directory_uri() . "/assets/styles/menu.css");
        // wp_enqueue_style("calori-swiper", "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css");
    }

    wp_enqueue_style("calori-reset-style", get_template_directory_uri() . "/assets/styles/reset.css");
    wp_enqueue_style("calori-style", get_template_directory_uri() . "/assets/styles/style.css");

    wp_enqueue_style("calori-style-new", get_template_directory_uri() . "/assets/styles/style.min.css?v.1.46");
    wp_enqueue_script("calori-landing-main", get_template_directory_uri() . "/assets/scripts/main.min.js?v1.3", array(), false, true);

    wp_enqueue_script("calori-main", get_template_directory_uri() . "/assets/scripts/main.js?v1.2", array(), false, true);
    wp_localize_script("calori-main", "ajax_object", array(
        "ajax_url" => admin_url("admin-ajax.php"),
    ));
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

add_action('admin_head', 'custom_changes_css');

function custom_changes_css()
{
    echo '<style>
    #order_line_items .name .display_meta {
        width: 100%;
    }
    #order_line_items .name .display_meta tr {
        display: flex;
    }
    #order_line_items .name .display_meta td p {
        display: block;
        width: auto !important;
        font-size: 16px;
    }
    #order_line_items .name .display_meta th {
        display: block;
        width: auto !important;
        font-size: 16px;
    }
    #order_line_items .item_cost, 
    #order_line_items .quantity, 
    #order_line_items .line_cost {
        font-size: 18px;
    }
    #order_line_items .name .wc-order-item-name {
        font-size: 18px;
    }
    #order_data h3 {
        color: #000;
        font-weight: 600;
        font-size: 17px;
    }
    #order_data p {
        color: #000;
        font-size: 15px;
    }
    </style>';
}

function load_post_content()
{
    error_log("POST ID: " . $_POST['post_id']);
    // Проверяем, установлен ли ID поста
    if (isset($_POST['post_id'])) {
        $post_id = intval($_POST['post_id']);

        // Получаем пост
        $post = get_post($post_id);

        // Проверяем, существует ли пост
        if ($post) {
            // Выводим содержимое поста
            // $post_title = get_the_title( $post );
            // echo $post_title;

            // задаем нужные нам критерии выборки данных из БД
            $args = array(
                'p' => $post_id,
                'post_type' => 'ruokalistat',

            );

            $query = new WP_Query($args);


            ?>

            <?php while ($query->have_posts()) {
                $query->the_post();

                // the_title(); // выведем заголовок поста
                ?>
                <?php

                // Check rows exists.
                if (have_rows('this_week_whole_menu')):
                    $day = 1;
                    // print_r(get_field('this_week_whole_menu'));

                    $days = get_field('this_week_whole_menu');
                    // print_r($days[0]);
                    if ($days) {
                        foreach ($days as $row) {

                            if ($row) {
                                $a = 1;

                                foreach ($row as $dayweek) {
                                    // echo $a;
                                    if ($dayweek[0]['meals']) { ?>
                                        <div class="week-menu-tabscontent_tab <?php if ($a == 1): ?> active <?php endif; ?>">
                                            <div class="menu-swiper-wrap">
                                                <div class="swiper menuswiper menuswiper<?php echo $day; ?>">
                                                    <div class="swiper-wrapper">
                                                        <?php
                                                        $a = 0;
                                                        foreach ($dayweek[0]['meals'] as $item) {

                                                            // print_r($item);
                
                                                            ?>
                                                            <div class="swiper-slide">

                                                                <a data-fancybox="" data-src="#menuitem<?php echo $day;
                                                                echo $a; ?>" class="menu-item">
                                                                    <img src="<?php echo $item['meal_image']; ?>" alt="food" class="menu-item-bg" />



                                                                    <div class="menu-item-title"><?php echo $item['meal_name']; ?></div>
                                                                    <div class="menu-item-which"><?php echo $item['meal_of_day']; ?></div>
                                                                </a>
                                                                <div id="menuitem<?php echo $day;
                                                                echo $a; ?>" class="menupopup"
                                                                    style="display:none;max-width:500px;">
                                                                    <!-- <button data-fancybox-close="" class="f-button is-close-btn" title="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" tabindex="-1"><path d="M20 20L4 4m16 0L4 20"></path></svg></button> -->

                                                                    <img src="<?php echo $item['meal_image2']; ?>" alt="food">
                                                                    <div class="menupopup-wrap">

                                                                        <?php
                                                                        $meal_props = $item['meal_props'];
                                                                        if (!empty($meal_props)): ?>
                                                                            <ul class="menupopup-wrap-props">
                                                                                <?php foreach ($meal_props as $prop): ?>
                                                                                    <li><?php echo esc_html($prop); ?></li>
                                                                                <?php endforeach; ?>
                                                                            </ul>
                                                                            <?php
                                                                        endif;
                                                                        ?>

                                                                        <div class="menupopup-wrap_title"><?php echo $item['meal_name']; ?></div>
                                                                        <div class="menupopup-wrap_text">

                                                                            <?php echo $item['краткое_описание']; ?>
                                                                        </div>

                                                                        <div class="menupopup-wrap_ingr">
                                                                            <?php echo $item['meal_ingredients']; ?>
                                                                        </div>

                                                                        <!-- <div class="menupopup-wrap_kbgu">
                                                                            <div class="item">
                                                                                <div class="item-title">
                                                                                    КБЖУ на 1500:
                                                                                </div>
                                                                                <div class="item-val">
                                                                                    <?php echo $item['кбжу_на_1500']; ?>

                                                                                </div>
                                                                            </div>
                                                                            <div class="item">
                                                                                <div class="item-title">
                                                                                    КБЖУ на 2000:
                                                                                </div>
                                                                                <div class="item-val">
                                                                                    <?php echo $item['кбжу_на_2000']; ?>

                                                                                </div>
                                                                            </div>
                                                                            <div class="item">
                                                                                <div class="item-title">
                                                                                    КБЖУ на 2500:
                                                                                </div>
                                                                                <div class="item-val">
                                                                                    <?php echo $item['кбжу_на_2500']; ?>

                                                                                </div>
                                                                            </div>
                                                                        </div> -->
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <?php
                                                            $a++;
                                                        }
                                                        ?>


                                                    </div>
                                                </div>

                                                <div class="arrow-left  arrow-left<?php echo $day; ?>">
                                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="40" width="40" height="40" rx="20" transform="rotate(90 40 0)" fill="#213735" />
                                                        <mask id="path-2-inside-1_2002_241" fill="white">
                                                            <path
                                                                d="M16.0326 19.9996C16.0326 19.8968 16.0697 19.7935 16.144 19.7124L23.2247 11.9416C23.3834 11.7675 23.6531 11.7547 23.8277 11.9135C24.0023 12.0722 24.0151 12.342 23.8559 12.5165L17.0364 19.9996L23.8559 27.4832C24.0146 27.6586 24.0018 27.9279 23.8277 28.0862C23.6536 28.245 23.3834 28.2326 23.2247 28.0585L16.1435 20.2869C16.0697 20.2058 16.0326 20.1025 16.0326 19.9996Z" />
                                                        </mask>
                                                        <path
                                                            d="M16.0326 19.9996C16.0326 19.8968 16.0697 19.7935 16.144 19.7124L23.2247 11.9416C23.3834 11.7675 23.6531 11.7547 23.8277 11.9135C24.0023 12.0722 24.0151 12.342 23.8559 12.5165L17.0364 19.9996L23.8559 27.4832C24.0146 27.6586 24.0018 27.9279 23.8277 28.0862C23.6536 28.245 23.3834 28.2326 23.2247 28.0585L16.1435 20.2869C16.0697 20.2058 16.0326 20.1025 16.0326 19.9996Z"
                                                            fill="white" />

                                                    </svg>
                                                </div>
                                                <div class="arrow-right  arrow-right<?php echo $day; ?>">
                                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect y="40" width="40" height="40" rx="20" transform="rotate(-90 0 40)" fill="#213735" />
                                                        <mask id="path-2-inside-1_2002_239" fill="white">
                                                            <path
                                                                d="M23.9673 20.0004C23.9673 20.1032 23.9302 20.2065 23.8559 20.2876L16.7752 28.0584C16.6165 28.2325 16.3467 28.2453 16.1722 28.0865C15.9976 27.9278 15.9848 27.658 16.144 27.4835L22.9635 20.0004L16.144 12.5168C15.9852 12.3414 15.9981 12.0721 16.1722 11.9138C16.3463 11.755 16.6165 11.7674 16.7752 11.9415L23.8563 19.7131C23.9302 19.7942 23.9673 19.8975 23.9673 20.0004Z" />
                                                        </mask>
                                                        <path
                                                            d="M23.9673 20.0004C23.9673 20.1032 23.9302 20.2065 23.8559 20.2876L16.7752 28.0584C16.6165 28.2325 16.3467 28.2453 16.1722 28.0865C15.9976 27.9278 15.9848 27.658 16.144 27.4835L22.9635 20.0004L16.144 12.5168C15.9852 12.3414 15.9981 12.0721 16.1722 11.9138C16.3463 11.755 16.6165 11.7674 16.7752 11.9415L23.8563 19.7131C23.9302 19.7942 23.9673 19.8975 23.9673 20.0004Z"
                                                            fill="white" />

                                                    </svg>
                                                </div>

                                                <?php $day++; ?>


                                            </div>
                                        </div>
                                        <?php

                                    }
                                    $a++;
                                }
                            }
                        }
                    }
                    // Loop through rows.


                endif; ?>



                <?php

            }

            wp_reset_postdata(); // ВАЖНО вернуть global $post обратно 


            // echo apply_filters('the_content', $post->post_content);
        } else {
            echo 'Пост не найден.';
        }
    }

    wp_die(); // Завершаем выполнение
}

// Регистрируем AJAX действия
add_action('wp_ajax_load_post_content', 'load_post_content');
add_action('wp_ajax_nopriv_load_post_content', 'load_post_content'); // Для неавторизованных пользователей



add_action('woocommerce_product_after_variable_attributes', 'shop_add_variable_custom_fields', 10, 3);

function shop_add_variable_custom_fields($loop, $variation_data, $variation)
{
    woocommerce_wp_text_input(array(
        'id' => 'price_for_day[' . $variation->ID . ']',
        'label' => __('Цена за день', 'woocommerce'),

        'desc_tip' => 'true', // Всплывающая подсказка
        'type' => 'number', // Тип поля
        'custom_attributes' => array(),
        'value' => get_post_meta($variation->ID, 'price_for_day', true),
    ));

}

add_action('woocommerce_product_after_variable_attributes', 'shop_add_variable_custom_fields1', 11, 4);

function shop_add_variable_custom_fields1($loop, $variation_data, $variation)
{
    woocommerce_wp_text_input(array(
        'id' => 'price_for_one[' . $variation->ID . ']',
        'label' => __('Цена за блюдо', 'woocommerce'),

        'desc_tip' => 'true', // Всплывающая подсказка
        'type' => 'number', // Тип поля
        'custom_attributes' => array(),
        'value' => get_post_meta($variation->ID, 'price_for_one', true),
    ));

}


add_action('woocommerce_save_product_variation', 'save_variation_barcode_custom_fields', 10, 2);

function save_variation_barcode_custom_fields($post_id)
{
    $woocommerce__product_variable_barcode = $_POST['price_for_day'][$post_id];
    if (isset($woocommerce__product_variable_barcode) && !empty($woocommerce__product_variable_barcode)) {
        update_post_meta($post_id, 'price_for_day', esc_attr($woocommerce__product_variable_barcode));
    }
}

add_action('woocommerce_save_product_variation', 'save_variation_barcode_custom_fields1', 11, 2);

function save_variation_barcode_custom_fields1($post_id)
{
    $woocommerce__product_variable_barcode = $_POST['price_for_one'][$post_id];
    if (isset($woocommerce__product_variable_barcode) && !empty($woocommerce__product_variable_barcode)) {
        update_post_meta($post_id, 'price_for_one', esc_attr($woocommerce__product_variable_barcode));
    }
}


add_filter('woocommerce_available_variation', 'load_variation_barcode_custom_fields');

function load_variation_barcode_custom_fields($variations)
{
    $variations_time = get_post_meta($variations['variation_id'], 'price_for_day', true);
    if (isset($variations_time) && !empty($variations_time)) {
        $variations['price_for_day'] = '€';
        $variations['price_for_day'] .= get_post_meta($variations['variation_id'], 'price_for_day', true);

    }

    return $variations;
}

add_filter('woocommerce_available_variation', 'load_variation_barcode_custom_fields1');

function load_variation_barcode_custom_fields1($variations)
{
    $variations_time = get_post_meta($variations['variation_id'], 'price_for_one', true);
    if (isset($variations_time) && !empty($variations_time)) {
        $variations['price_for_one'] = '€';

        $variations['price_for_one'] .= get_post_meta($variations['variation_id'], 'price_for_one', true);

    }

    return $variations;
}
// Display custom cart item meta data (in cart and checkout)
add_filter('woocommerce_get_item_data', 'display_cart_item_custom_meta_data', 10, 2);
function display_cart_item_custom_meta_data($item_data, $cart_item)
{
    if (isset($cart_item['excluded_ingredients'])) {
        $item_data[] = array(
            'key' => __('Poistetut ainesosat', 'woocommerce'),
            'value' => wc_clean($cart_item['excluded_ingredients']),
        );
    } else if (isset($cart_item['delivery_day'])) {
        $item_data[] = array(
            'key' => __('Delivery day', 'woocommerce'),
            'value' => wc_clean($cart_item['delivery_day']),
        );
    }

    return $item_data;
}

// Save cart item custom meta as order item meta data and display it everywhere on orders and email notifications.
add_action('woocommerce_checkout_create_order_line_item', 'save_cart_item_custom_meta_as_order_item_meta', 10, 4);
function save_cart_item_custom_meta_as_order_item_meta($item, $cart_item_key, $values, $order)
{
    if (isset($values['excluded_ingredients'])) {
        $item->update_meta_data("Excluded ingredients", $values["excluded_ingredients"]);
    } else if (isset($values['delivery_day'])) {
        $item->update_meta_data("Delivery day", $values['delivery_day']);
    }
}

add_action('woocommerce_new_order_item', 'add_subscription_meta', 10, 3);

function add_subscription_meta($item_id, $item, $item_order_id)
{
    $order = wc_get_order($item_order_id);
    $order_date_created = $order->get_date_created()->date('Y-m-d h:i:s');
    $items = $order->get_items();

    foreach ($items as $item) {
        $meta_key = "pa_tilauksen-kesto";
        $meta_data = $item->get_meta($meta_key);
        $time_class = new Calori_Calc_Time($meta_data);

        if (!empty($meta_data)) {
            $display_value = $meta_data;

            $days = (int) $display_value;
            $subscription_duration = $time_class->calculate_subs_duration($order_date_created, $days);

            $new_meta_key = 'subscription_duration';
            $new_meta_value = empty($subscription_duration['end_date']) && empty($subscription_duration['start_date']) ? "null" : $subscription_duration['start_date'] . ' - ' . $subscription_duration['end_date'];

            $item->update_meta_data($new_meta_key, $new_meta_value);
            $item->save();
        }
    }

    $order->save();
}


require_once get_template_directory() . "/incs/calori-nav-menu.php";
require_once get_template_directory() . "/incs/calori-get-meal-menu.php";
require_once get_template_directory() . "/incs/calori-cart.php";
require_once get_template_directory() . "/incs/calori-checkout.php";
require_once get_template_directory() . "/incs/calori-landing-order.php";