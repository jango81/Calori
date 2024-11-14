<?php #get_header(null, array("announcement" => true, "show_cart" => true)) ?>
<main id="main">
    <?php get_template_part("mini-cart") ?>
    <div class="loading" id="loading">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/loading-gif.gif" alt="loading">
    </div>
    <section class="head-section">
        <div class="head-section__container _container">
            <div class="head-section__wrapper">
                <header class="head-section__title">
                    <h1>Terveelliset ja maukkaat ateriat kotiovellesi toimitettuna</h1>
                </header>
                <h3 class="head-section__subtext">Säästä jopa 50h / kk sinulle tärkeämpiin asioihin</h3>
                <div class="head-section__buttons main-buttons">
                    <div class="main-buttons__item">
                        <a class="btn btn-solid btn-medium" href="#"><span class="btn-text">Valitse menu</span></a>
                    </div>
                    <div class="main-buttons__item">
                        <a class="btn btn-transparent btn-small" href="#">Tutustu lisää</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="head-section__image">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/image1.png" alt="bg-image" />
        </div>
    </section>
    <section class="info">
        <div class="swiper info-swiper">
            <div class="swiper-wrapper info-swiper__wrapper">
                <div class="swiper-slide info-swiper__slide info-slide">
                    <div class="info-slide__content">
                        <div class="info-slide__image info__image">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/calori-icon-diet-food.svg"
                                alt="icon" />
                        </div>
                        <p class="info-slide__text">Suunniteltua, kokattua ja toimitettua</p>
                    </div>
                </div>
                <div class="swiper-slide info-slide">
                    <div class="info-slide__content">
                        <div class="info-slide__image info__image">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/calori-icon-bodybuilding.svg"
                                alt="" />
                        </div>
                        <p class="info-slide__text">Ravitsemusasiantuntijoita tiimissä</p>
                    </div>
                </div>
                <div class="swiper-slide info-slide">
                    <div class="info-slide__content">
                        <div class="info-slide__image info__image">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/calori-icon-stopwatch.svg"
                                alt="icon" />
                        </div>
                        <p class="info-slide__text">Ruokalistat kehittyvät viikoittain</p>
                    </div>
                </div>
                <div class="swiper-slide info-slide">
                    <div class="info-slide__content">
                        <div class="info-slide__image info__image">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/calori-icon-salad.svg"
                                alt="icon" />
                        </div>
                        <p class="info-slide__text">Ammattikokkien valmistamaa ruokaa</p>
                    </div>
                </div>
                <div class="swiper-slide info-slide">
                    <div class="info-slide__content">
                        <div class="info-slide__image info__image">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/calori-icon-diet.svg"
                                alt="icon" />
                        </div>
                        <p class="info-slide__text">Yli 100 reseptiä reseptikirjassa</p>
                    </div>
                </div>
                <div class="swiper-slide info-slide">
                    <div class="info-slide__content">
                        <div class="info-slide__image info__image">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/calori-icon-kettlebell.svg"
                                alt="icon" />
                        </div>
                        <p class="info-slide__text">Jostava kuljetus ja pakkaus</p>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination info-swiper__pagination"></div>
        </div>
        <div class="info__container _container">
            <div class="info__content">
                <div class="info__item">
                    <div class="info__image">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/calori-icon-diet-food.svg"
                            alt="icon" />
                    </div>
                    <p class="info__text">Suunniteltua, kokattua ja toimitettua</p>
                </div>
                <div class="info__item">
                    <div class="info__image">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/calori-icon-bodybuilding.svg"
                            alt="icon" />
                    </div>
                    <p class="info__text">Ravitsemusasiantuntijoita tiimissä</p>
                </div>
                <div class="info__item">
                    <div class="info__image">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/calori-icon-stopwatch.svg"
                            alt="icon" />
                    </div>
                    <p class="info__text">Ruokalistat kehittyvät viikoittain</p>
                </div>
                <div class="info__item">
                    <div class="info__image">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/calori-icon-salad.svg"
                            alt="icon" />
                    </div>
                    <p class="info__text">Ammattikokkien valmistamaa ruokaa</p>
                </div>
                <div class="info__item">
                    <div class="info__image">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/calori-icon-diet.svg"
                            alt="icon" />
                    </div>
                    <p class="info__text">Yli 100 reseptiä reseptikirjassa</p>
                </div>
                <div class="info__item">
                    <div class="info__image">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/calori-icon-kettlebell.svg"
                            alt="icon" />
                    </div>
                    <p class="info__text">Jostava kuljetus ja pakkaus</p>
                </div>
            </div>
        </div>
    </section>
    <div class="decor-line _container">
        <span></span>
    </div>
    <section id="meals">
        <custom-meals class="meals" data-post-id="<?php echo get_option("page_on_front") ?>">
            <?php

            function find_key_recursive($array, $key)
            {
                $results = [];

                foreach ($array as $k => $value) {
                    if ($k === $key) {
                        $results[] = $value;
                    }
                    if (is_array($value)) {
                        $results = array_merge($results, find_key_recursive($value, $key));
                    }
                }

                return $results;
            }

            function isCurrentDateInRange($start, $end)
            {
                $currentDate = new DateTime();
                $currentDate->setTime(0, 0, 0);

                $startDate = DateTime::createFromFormat('m/d/Y', $start);
                $endDate = DateTime::createFromFormat('m/d/Y', $end);
                $startDate->setTime(0, 0, 0);
                $endDate->setTime(0, 0, 0);

                if ($startDate === false || $endDate === false) {
                    return false;
                }

                return $currentDate >= $startDate && $currentDate <= $endDate;
            }
            function convertDateRange($dateRange)
            {
                list($start, $end) = explode(' - ', $dateRange);

                $startDate = DateTime::createFromFormat('m/d/Y', trim($start));
                $endDate = DateTime::createFromFormat('m/d/Y', trim($end));

                if ($startDate && $endDate) {
                    return $startDate->format('d.m') . ' - ' . $endDate->format('d.m');
                }

                return $dateRange;
            }
            $args = array(
                'post_type' => 'ruokalistat',
                'posts_per_page' => -1,
            );

            $query = new WP_Query($args);

            $weeks = array();
            $is_current_week_menu = false;
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    $post_id = get_the_ID();
                    $fields = get_fields();
                    if ($fields && isCurrentDateInRange($fields["start_date"], $fields["end_date"])) {
                        $week_menu = $fields;
                        $is_current_week_menu = true;
                        break;
                    } else {
                        $post_props = array("post_id" => $post_id, "fields" => $fields);
                        array_push($weeks, $post_props);
                    }
                }

                if (!$is_current_week_menu) {
                    $week_menu = $weeks[0]["fields"];
                    $post_id = $weeks[0]["post_id"];
                }

                $converted_date = convertDateRange($week_menu["start_date"] . " - " . $week_menu["end_date"]);
            }

            ?>
            <div class="meals__container _container">
                <div class="meals__content">
                    <header class="meals__title section-title">
                        <h1><?php echo $is_current_week_menu ? "Tämän viikon ruokalista" : $converted_date ?></h1>
                    </header>
                    <ul class="meals__days"></ul>
                </div>
            </div>
            <div class="swiper meals-swiper">
                <div class="loading-gif">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/loading-gif.gif"
                        alt="loading">
                </div>
                <?php
                if (have_rows("this_week_whole_menu", $post_id)):
                    while (have_rows("this_week_whole_menu", $post_id)):
                        the_row();
                        $row = get_row(true);
                        foreach ($row as $key => $value):

                            if (!empty($value)):
                                $meals = find_key_recursive($value, "meals"); ?>

                                <div class="swiper-wrapper meals-swiper__wrapper" data-day="<?php echo esc_attr($key) ?>">
                                    <?php foreach ($meals[0] as $meal):
                                        ?>
                                        <div class="swiper-slide meals-slide">
                                            <div class="meals-slide__content">
                                                <div class="meals-slide__image">
                                                    <img src="<?php echo esc_attr($meal["meal_image"]) ?>" alt="food image" />
                                                </div>
                                                <div class="meals-slide__info">
                                                    <header class="meals-slide__title">
                                                        <h2><?php echo esc_html($meal["meal_name"]) ?></h2>
                                                    </header>
                                                    <div class="meals-slide__description">
                                                        <p><?php echo esc_html($meal["meal_of_day"]) ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php else: ?>
                                <div class="swiper-wrapper meals-swiper__wrapper no-meals" data-day="<?php echo esc_attr($key) ?>">
                                    <div class="no-meals-message">
                                        <h1>Ei ruokia tälle päivälle</h1>
                                    </div>
                                </div>
                            <?php endif ?>
                        <?php endforeach; endwhile; ?>
                    <div class="swiper-button-prev swiper-nav-button meals-swiper-prev"></div>
                    <div class="swiper-button-next swiper-nav-button meals-swiper-next"></div>
                    <div class="swiper-pagination meals-swiper__pagination"></div>
                <?php endif; ?>
            </div>
            <div class="meals-popup">
                <div class="meals-popup__image">
                    <img src="" alt="food image" />
                </div>
            </div>
        </custom-meals>
    </section>
    <div class="decor-line _container">
        <span></span>
    </div>
    <section id="order">
        <custom-order class="order">
            <div class="order__container _container">
                <div class="order__content">
                    <header class="order__title section-title">
                        <h1>Tilaa nyt</h1>
                    </header>
                    <div class="order__delivery order-delivery">
                        <div class="order-delivery__icon">
                            <svg fill="#d3d3d3" width="800px" height="800px" viewBox="0 0 16 16"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M15.17 7.36 13 4.92a1.25 1.25 0 0 0-.94-.42h-2V2.75A1.25 1.25 0 0 0 8.82 1.5H1.76A1.25 1.25 0 0 0 .51 2.75v8.5a1.25 1.25 0 0 0 1.25 1.25h.33a2.07 2.07 0 0 0 2.13 2 2.08 2.08 0 0 0 2.14-2H10a2.07 2.07 0 0 0 2.13 2 2.08 2.08 0 0 0 2.14-2 1.26 1.26 0 0 0 1.2-1.25V8.19a1.22 1.22 0 0 0-.3-.83zM4.22 13.25a.82.82 0 0 1-.88-.75.82.82 0 0 1 .88-.75.83.83 0 0 1 .89.75.83.83 0 0 1-.89.75zm4.6-7.58v5.58H5.89a2.17 2.17 0 0 0-1.67-.75 2.17 2.17 0 0 0-1.66.75h-.8v-8.5h7.06zm1.25.08h2l1.44 1.63h-3.44zm2.08 7.5a.82.82 0 0 1-.88-.75.82.82 0 0 1 .88-.75.83.83 0 0 1 .89.75.83.83 0 0 1-.89.75zm0-2.75a2.17 2.17 0 0 0-1.66.75h-.42V8.62h4.17v2.63h-.42a2.17 2.17 0 0 0-1.67-.75z" />
                                </g>
                            </svg>
                        </div>
                        <div class="order-delivery__text">
                            <p>Ensimmäinen toimitus:</p>
                        </div>
                        <p class="order-delivery__date" data-day="<?php echo get_field("order_end_day", "option") ?>"
                            data-time="<?php echo get_field("order_end_time", "option") ?>"
                            data-delivery-day="<?php echo get_field("first_delivery_days", "option") ?>"></p>
                    </div>
                    <?php

                    $products = wc_get_products(array(
                        "limit" => 2,
                        "category" => array("tuote"),
                    ));

                    if (!empty($products)): ?>
                        <form class="order__form" id="add-to-cart-form">
                            <div class="order__products order-products order-block">
                                <?php foreach ($products as $product): ?>
                                    <span class="order-products__product radio-sm">
                                        <input type="radio" name="order-product" id="order-product"
                                            data-product-id="<?php echo esc_attr($product->get_id()) ?>" />
                                        <label
                                            for="order-product"><strong><?php echo esc_html($product->get_name()); ?></strong></label>
                                    </span>
                                <?php endforeach; ?>
                            </div>
                            <?php foreach ($products as $product):
                                $product_attributes = $product->get_attributes();
                                $product_variations = $product->get_available_variations();
                                ?>
                                <div class="order__controls" data-product-id="<?php echo esc_attr($product->get_id()) ?>">
                                    <?php
                                    $product_attributes = $product->get_attributes();
                                    if (!empty($product_attributes)): ?>
                                        <div class="order__settings">
                                            <?php foreach ($product_attributes as $attribute):
                                                $current_select_class = $attribute->get_name() !== "pa_tilauksen-kesto" ? "variant-select" : "show-price-tags";
                                                if ($attribute->get_name() === "pa_maksu-tyyppi")
                                                    continue; ?>
                                                <fieldset class="order-block order__variant" data-current-variant="">
                                                    <legend class="order-block__title">
                                                        <?php echo esc_html(wc_attribute_label($attribute->get_name())); ?>
                                                    </legend>
                                                    <custom-select
                                                        class="custom-select order-block__select <?php echo $current_select_class ?>"
                                                        data-heading="" data-value=""
                                                        data-variant-name="<?php echo $attribute->get_name() ?>">
                                                        <select name="order-variants"></select>
                                                        <div class="custom-select__wrapper">
                                                            <div class="custom-select__value">
                                                                <h5></h5>
                                                                <span></span>
                                                            </div>
                                                            <div class="custom-select__options">
                                                                <?php

                                                                $attribute_options = wc_get_product_terms($product->get_id(), $attribute->get_name(), ['orderby' => 'menu_order']);
                                                                ;
                                                                if (!empty($attribute_options)):
                                                                    foreach ($attribute_options as $option):
                                                                        ?>
                                                                        <div class="custom-select__option"
                                                                            data-value="<?php echo esc_attr($option->term_id); ?>">
                                                                            <?php echo esc_html($option->name) ?>
                                                                        </div>
                                                                    <?php endforeach; endif; ?>
                                                            </div>
                                                        </div>
                                                    </custom-select>
                                                    <div class="order-block__buttons _desktop">

                                                    </div>
                                                </fieldset>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="order__details">
                                        <?php
                                        foreach ($product_variations as $variant):
                                            $has_subscription_type = true;
                                            $variation_id = $variant["variation_id"];
                                            $variation_obj = wc_get_product($variation_id);
                                            $variation_attributes = $variation_obj->get_attributes();
                                            $attribute_names = "";
                                            foreach ($variation_attributes as $attr_key => $attr_value):
                                                $term = get_term_by('slug', $attr_value, $attr_key);

                                                if ($term) {
                                                    if ($attr_key === "pa_maksu-tyyppi") {
                                                        $has_subscription_type = false;
                                                        continue;
                                                    }

                                                    $attribute_names .= $term->term_id . ";";
                                                }
                                            endforeach;
                                            ?>
                                            <fieldset class="order__payment order-payment order-block"
                                                data-variant-id="<?php echo esc_attr($variation_obj->get_id()) ?>"
                                                data-attributes="<?php echo esc_attr($attribute_names) ?>">
                                                <legend class="order-payment__title order-block-title">Maksun muoto</legend>
                                                <div class="order-payment__radiobuttons">
                                                    <?php if (!$has_subscription_type): ?>
                                                        <div class="custom-radio order-payment__radio order-radio">
                                                            <input type="radio" checked
                                                                name="<?php echo "payment-radio_" . esc_attr($variation_obj->get_id()) ?>"
                                                                value="<?php echo esc_attr($term->name) ?>" />
                                                            <div class="custom-radio__wrapper">
                                                                <span class="custom-radio__bullet"></span>
                                                                <h3 class="custom-radio__heading"><?php echo esc_html($term->name) ?>
                                                                </h3>
                                                                <h3 class="custom-radio__price">
                                                                    <?php
                                                                    $price = $variation_obj->get_price();
                                                                    echo wc_price($price)
                                                                        ?>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    <?php else:
                                                        if (!empty($product_attributes)):
                                                            $count = 0;
                                                            foreach ($product_attributes as $product_attr):
                                                                if ($product_attr->get_name() === "pa_maksu-tyyppi"):
                                                                    $attribute_options = $product_attr->get_options();
                                                                    foreach ($attribute_options as $option):
                                                                        $count++;
                                                                        $term = get_term_by("id", $option, $product_attr->get_name());
                                                                        if ($term):
                                                                            ?>
                                                                            <div class="custom-radio order-payment__radio order-radio">
                                                                                <input type="radio" <?php echo $count === 1 ? "checked" : null ?>
                                                                                    name="<?php echo "payment-radio_" . esc_attr($variation_obj->get_id()) ?>"
                                                                                    value="<?php echo esc_attr($term->name) ?>" />
                                                                                <div class="custom-radio__wrapper">
                                                                                    <span class="custom-radio__bullet"></span>
                                                                                    <h3 class="custom-radio__heading"><?php echo esc_html($term->name) ?>
                                                                                    </h3>
                                                                                    <h3 class="custom-radio__price">
                                                                                    </h3>
                                                                                </div>
                                                                            </div>
                                                                        <?php endif; endforeach; endif; endforeach; endif ?>
                                                    <?php endif ?>
                                                </div>
                                            </fieldset>
                                        <?php endforeach; ?>
                                        <div class="order__buttons">
                                            <button class="btn btn-solid btn-medium order-cart__button" type="submit">
                                                <span class="btn-text">Lisää ostoskoriin</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </form>
                    <?php else: ?>
                        <div class="error__message">
                            <h1>Tilaukset suljettu</h1>
                        </div>
                    <?php endif ?>
                    <div class="error__message">
                        <h1></h1>
                    </div>
                    <div class="order__calculator order-calculator">
                        <p>Etkö tiedä mikä on kaloritarpeesi?</p>
                        <a class="btn btn-transparent btn-small order-calculator__button">Avaa kalorilaskuri</a>
                        <custom-calculator class="calculator">
                            <div class="calculator__wrapper">
                                <div class="calculator__body">
                                    <form class="calculator__form">
                                        <div class="calculator__close">
                                            <span></span>
                                        </div>
                                        <div class="calculator__age calculator__block">
                                            <label for="age">Ikä</label>
                                            <input class="input" type="text" id="age" />
                                        </div>
                                        <div class="calculator__gender calculator__block">
                                            <label for="age">Sukupuoli</label>
                                            <div class="custom-radio" data-heading="Mies">
                                                <input type="radio" value="male" name="calculator-radio" id="age" />
                                                <div class="custom-radio__wrapper">
                                                    <span class="custom-radio__bullet"></span>
                                                    <h3 class="custom-radio__heading">Mies</h3>
                                                </div>
                                            </div>
                                            <div class="custom-radio">
                                                <input type="radio" value="female" name="calculator-radio" id="age" />
                                                <div class="custom-radio__wrapper">
                                                    <span class="custom-radio__bullet"></span>
                                                    <h3 class="custom-radio__heading">Nainen</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="calculator__height calculator__block">
                                            <label for="height">Pituus</label>
                                            <input placeholder="cm" class="input" type="text" id="height" />
                                        </div>
                                        <div class="calculator__weight calculator__block">
                                            <label for="weight">Paino</label>
                                            <input placeholder="kg" class="input" type="text" id="weight" />
                                        </div>
                                        <div class="calculator__activity calculator__block">
                                            <custom-select class="custom-select calculator-activity__select"
                                                data-value="" data-heading="Valitse aktiivisuus" data-default="">
                                                <select>
                                                    <option value="1.2">Vähän tai ei lainkaan liikuntaa</option>
                                                    <option value="1.375">Liikunta (1-3krt/vko)</option>
                                                    <option value="1.55">Liikunta (3-5krt/vko)</option>
                                                </select>
                                                <div class="custom-select__wrapper">
                                                    <div class="custom-select__value">
                                                        <h5></h5>
                                                        <span></span>
                                                    </div>
                                                    <div class="custom-select__options">
                                                        <div class="custom-select__option" data-value="1.2">Vähän tai ei
                                                            lainkaan liikuntaa</div>
                                                        <div class="custom-select__option" data-value="1.375">Liikunta
                                                            (1-3krt/vko)</div>
                                                        <div class="custom-select__option" data-value="1.55">Liikunta
                                                            (3-5krt/vko)</div>
                                                    </div>
                                                </div>
                                            </custom-select>
                                        </div>
                                    </form>
                                    <div class="calculator__results results-calculator">
                                        <div class="results-calculator__maintenance results-calculator__block">
                                            <h4>Kalorit painon ylläpitämiseen:</h4>
                                            <span>2307</span>
                                        </div>
                                        <div class="results-calculator__grow results-calculator__block">
                                            <h4>Kalorit lihasmassan kasvattamiseen:</h4>
                                            <span>2307</span>
                                        </div>
                                        <div class="results-calculator__loss results-calculator__block">
                                            <h4>Kalorit painonpudottamiseen:</h4>
                                            <span>2307</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </custom-calculator>
                    </div>
                    <div class="order__infos infos-order">
                        <custom-spoiler class="custom-spoiler infos-order__spoiler">
                            <div class="custom-spoiler__heading infos-order__heading us-none">
                                <h3>Tilaus / toimitus</h3>
                                <span></span>
                            </div>
                            <div class="custom-spoiler__content infos-order__content">
                                <p>
                                    Kun teet tilauksen ennen tiistaita 14:30 - tilauksesi toimitetaan ensimmäistä kertaa
                                    saman viikon perjantaina kun tilaukset sulkeutuivat. Sen jälkeen saat toimituksia
                                    kahdesti viikossa (ti ja pe) kunnes
                                    tilauksesi päättyy. Tiistain jälkeen tehdyt tilaukset siirtyvät automaattisesti
                                    seuraavalle viikolle.
                                </p>
                            </div>
                        </custom-spoiler>
                        <custom-spoiler class="custom-spoiler infos-order__spoiler">
                            <div class="custom-spoiler__heading infos-order__heading us-none">
                                <h3>Tilaus / toimitus</h3>
                                <span></span>
                            </div>
                            <div class="custom-spoiler__content infos-order__content">
                                <p>
                                    Kun teet tilauksen ennen tiistaita 14:30 - tilauksesi toimitetaan ensimmäistä kertaa
                                    saman viikon perjantaina kun tilaukset sulkeutuivat. Sen jälkeen saat toimituksia
                                    kahdesti viikossa (ti ja pe) kunnes
                                    tilauksesi päättyy. Tiistain jälkeen tehdyt tilaukset siirtyvät automaattisesti
                                    seuraavalle viikolle.
                                </p>
                            </div>
                        </custom-spoiler>
                    </div>
                    <custom-timer class="order__timer custom-timer"
                        data-day="<?php echo get_field("order_end_day", "option") ?>"
                        data-time="<?php echo get_field("order_end_time", "option") ?>">
                        <h4 class="custom-timer__title">Tilaukset sulkeutuvat tiistaisin klo 14.30</h4>
                        <div class="custom-timer__body">
                            <div class="custom-timer__time">
                                <span class="custom-timer__number" id="timer-days"></span>
                                <span class="custom-timer__name">Päivää</span>
                            </div>
                            <div class="custom-timer__time">
                                <span class="custom-timer__number" id="timer-hours"></span>
                                <span class="custom-timer__name">Tuntia</span>
                            </div>
                            <div class="custom-timer__time">
                                <span class="custom-timer__number" id="timer-minutes"></span>
                                <span class="custom-timer__name">Minuuttia</span>
                            </div>
                            <div class="custom-timer__time">
                                <span class="custom-timer__number" id="timer-seconds"></span>
                                <span class="custom-timer__name">Sekunttia</span>
                            </div>
                        </div>
                    </custom-timer>
                </div>
            </div>
        </custom-order>
    </section>
    <div class="decor-line _container">
        <span></span>
    </div>
    <section id="advantages">
        <div class="advantages__container _container">
            <div class="advantages__body">
                <div class="advantages__block advantages-without">
                    <div class="advantages__content">
                        <header class="advantages__title">
                            <h1>Ilman caloria</h1>
                        </header>
                        <ul class="advantages__list">
                            <li>
                                <h4>Jopa 20€ / pv lounaaseen ja välipaloihin</h4>
                            </li>
                            <li>
                                <h4>Vaikeaa pitää ruokarytmin</h4>
                            </li>
                            <li>
                                <h4>Vaikeaa syödä terveellisesti</h4>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="advantages__block advantages-with">
                    <div class="advantages__content">
                        <header class="advantages__title">
                            <h1>Calorin kanssa</h1>
                        </header>
                        <ul class="advantages__list">
                            <li>
                                <h4>Alkaen 19,5€ / pv ja 5,7€ / ateria</h4>
                            </li>
                            <li>
                                <h4>2-4 ateriaa päivässä</h4>
                            </li>
                            <li>
                                <h4>Räätälöityä ja toimitettu kotiovelle</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="decor-line _container">
        <span></span>
    </div>
    <section id="steps">
        <custom-steps class="steps">
            <div class="steps__container _container">
                <div class="steps__body">
                    <div class="swiper steps-swiper">
                        <div class="swiper-wrapper swiper-steps__wrapper">
                            <div class="swiper-slide steps-slide">
                                <div class="steps-slide__content">
                                    <div class="steps-slide__image">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/tilaa.png"
                                            alt="bg image" />
                                    </div>
                                    <header class="steps-slide__heading">
                                        <h3>Tilaa</h3>
                                    </header>
                                    <p class="steps-slide__text">Valitse tavoitteellesi sopiva menu ja tilaa itsellesi
                                        tai paritilaus</p>
                                </div>
                            </div>
                            <div class="swiper-slide steps-slide">
                                <div class="steps-slide__content">
                                    <div class="steps-slide__image">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/vastaanota.png"
                                            alt="bg image" />
                                    </div>
                                    <header class="steps-slide__heading">
                                        <h3>Vastaanota</h3>
                                    </header>
                                    <p class="steps-slide__text">Toimitamme sinulle kotiin 2-4 ateriaa valitsemillesi
                                        päiville</p>
                                </div>
                            </div>
                            <div class="swiper-slide steps-slide swiper-no-swiping">
                                <div class="steps-slide__content">
                                    <div class="steps-slide__image">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/nauti.png"
                                            alt="bg image" />
                                    </div>
                                    <header class="steps-slide__heading">
                                        <h3>Nauti</h3>
                                    </header>
                                    <p class="steps-slide__text">Syö terveellisesti päivittäin, nauti ja säästä aikaasi
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="steps__progress">
                        <div class="steps__point">
                            <span>1</span>
                        </div>
                        <div class="steps__point">
                            <span>2</span>
                        </div>
                        <div class="steps__point">
                            <span>3</span>
                        </div>
                    </div>
                </div>
            </div>
        </custom-steps>
    </section>
    <div class="decor-line _container">
        <span></span>
    </div>
    <section id="why" class="us-none">
        <div class="why__container _container">
            <header class="why__title section-title">
                <h1>Miksi Calori?</h1>
            </header>
            <div class="swiper why-swiper">
                <div class="swiper-wrapper why-swiper__wrapper">
                    <div class="swiper-slide why-slide">
                        <div class="why-slide__content">
                            <div class="why-slide__icon">
                                <img src="<?php echo get_template_directory_uri() ?>/assets//images/icons/star.svg"
                                    alt="icon" />
                            </div>
                            <header class="why-slide__heading">
                                <h3>Maukasta ja terveellistä ruokaa</h3>
                            </header>
                            <p class="why-slide__text">Yli 100 erilaista ateriaa kuukaudessa suomalaisesta ja maailman
                                keittiökulttuureista.</p>
                        </div>
                    </div>
                    <div class="swiper-slide why-slide">
                        <div class="why-slide__content">
                            <div class="why-slide__icon">
                                <img src="<?php echo get_template_directory_uri() ?>/assets//images/icons/star.svg"
                                    alt="icon" />
                            </div>
                            <header class="why-slide__heading">
                                <h3>Pidät taukoa kokkaamisesta</h3>
                            </header>
                            <p class="why-slide__text">Ruokakauppaan juoksemisen ja kokkaamisen sijaa keskityt sinulle
                                tärkeimpiin asioihin.</p>
                        </div>
                    </div>
                    <div class="swiper-slide why-slide">
                        <div class="why-slide__content">
                            <div class="why-slide__icon">
                                <img src="<?php echo get_template_directory_uri() ?>/assets//images/icons/star.svg"
                                    alt="icon" />
                            </div>
                            <header class="why-slide__heading">
                                <h3>Tasapainoa ja helpoutta elämääsi</h3>
                            </header>
                            <p class="why-slide__text">Olemme miettineet puolestasi kaikki ruokailuun liittyvät huolet
                                ja rutiinit.</p>
                        </div>
                    </div>
                    <div class="swiper-slide why-slide">
                        <div class="why-slide__content">
                            <div class="why-slide__icon">
                                <img src="<?php echo get_template_directory_uri() ?>/assets//images/icons/star.svg"
                                    alt="icon" />
                            </div>
                            <header class="why-slide__heading">
                                <h3>Saavutat kaikki tavoitteesi</h3>
                            </header>
                            <p class="why-slide__text">Saavuta unelmakroppasi, säästä aikaa tai syö terveellisesti -
                                kaikki onnistuu helposti.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="decor-line _container">
        <span></span>
    </div>
    <section id="quote">
        <div class="quote__container _container">
            <div class="quote__body">
                <div class="quote__content">
                    <blockquote class="quote__text">
                        Me Calorilla näemme maailman, jossa terveellisten ruokavalintojen tekeminen on jännittävää ja
                        vaivatonta. Pyrimme olemaan edelläkävijöitä, jotka tarjoavat tasapainoisia aterioita yhdistäen
                        kotiruokien periaatteet ja
                        ravintolatason laatustandardit, mikä kannustaa kaikkia terveellisempään elämään.
                    </blockquote>
                    <p class="quote__author">- Calorin tiimi</p>
                    <div class="quote__button">
                        <a class="btn btn-transparent btn-small" href="#">Lue meistä lisää</a>
                    </div>
                </div>
            </div>
            <div class="quote__image">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/quoteImage (2).png"
                    alt="quote image" />
            </div>
        </div>
    </section>
    <div class="decor-line _container">
        <span></span>
    </div>
    <section id="reviews">
        <custom-reviews class="reviews" data-text-initial-height="100px">
            <div class="reviews__container _container">
                <header class="reviews__title section-title">
                    <h1>Käytössä kiireisillä yrittäjillä, vaikuttajilla ja urheilijoilla</h1>
                </header>
                <div class="swiper reviews-swiper">
                    <div class="swiper-wrapper reviews-swiper__wrapper">
                        <div class="swiper-slide reviews-slide">
                            <div class="reviews-slide__content">
                                <p class="reviews-slide__text">
                                    Maukas helpotus kiireiseen arkeen! Palvelu antoi minulle monta tuntia lisäaikaa
                                    muihin arjen askareisiin, vei kiireen pois aamuista ja helpotti säännöllisen
                                    syömisen ylläpitoa. Iso suositus!
                                </p>
                                <h4 class="reviews-slide__author">Nina Moritz</h4>
                            </div>
                        </div>
                        <div class="swiper-slide reviews-slide">
                            <div class="reviews-slide__content">
                                <p class="reviews-slide__text">
                                    Ruoka oli todella herkullista ja monipuolista. Ihanaa kun oli niin paljon erilaisia
                                    ateriaoita 😍 Säästin myös todella paljon aikaa kun ei tarvinnut itse kokata ja mikä
                                    parasta ateriat toimitettiin suoraan
                                    kotiovelle! Suosittelen lämmöllä!
                                </p>
                                <h4 class="reviews-slide__author">Nina Moritz</h4>
                            </div>
                        </div>
                        <div class="swiper-slide reviews-slide">
                            <div class="reviews-slide__content">
                                <p class="reviews-slide__text">Lounasravintolassa maksat jopa 15€ ateriasta, mutta
                                    Calorilla saat aamiaisen, lounaan, päivällisen ja iltapalan alle 30€:lla kotiovelle
                                    toimitettuna.</p>
                                <h4 class="reviews-slide__author">Nina Moritz</h4>
                            </div>
                        </div>
                        <div class="swiper-slide reviews-slide">
                            <div class="reviews-slide__content">
                                <p class="reviews-slide__text">Palvelu on helppoa ja ystävällistä, ruoka myös erittäin
                                    maukasta! Etenkin sopii jos haluaa pelailla painon kanssa.</p>
                                <h4 class="reviews-slide__author">Nina Moritz</h4>
                            </div>
                        </div>
                        <div class="swiper-slide reviews-slide">
                            <div class="reviews-slide__content">
                                <p class="reviews-slide__text">Palvelu on helppoa ja ystävällistä, ruoka myös erittäin
                                    maukasta! Etenkin sopii jos haluaa pelailla painon kanssa.</p>
                                <h4 class="reviews-slide__author">Nina Moritz</h4>
                            </div>
                        </div>
                        <div class="swiper-slide reviews-slide">
                            <div class="reviews-slide__content">
                                <p class="reviews-slide__text">Palvelu on helppoa ja ystävällistä, ruoka myös erittäin
                                    maukasta! Etenkin sopii jos haluaa pelailla painon kanssa.</p>
                                <h4 class="reviews-slide__author">Nina Moritz</h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev swiper-nav-button reviews-swiper-prev"></div>
                    <div class="swiper-button-next swiper-nav-button reviews-swiper-next"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="reviews__button">
                    <a class="btn btn-solid btn-medium" href="#">
                        <span class="btn-text">Katso kaikki arvostelut</span>
                    </a>
                </div>
            </div>
        </custom-reviews>
    </section>
    <div class="decor-line _container">
        <span></span>
    </div>
    <section id="banner">
        <div class="banner">
            <div class="swiper banner-swiper">
                <div class="swiper-wrapper banner-swiper__wrapper">
                    <div class="swiper-slide banner-slide">
                        <div class="banner-slide__content">
                            <h3 class="banner-slide__heading">Perinteiset raaka-aineet</h3>
                            <p class="banner-slide__text">Joka päivä jotain uutta sinulle tutuista raaka-aineista.</p>
                            <div class="banner-slide__image">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/banner-table.png"
                                    alt="banner image" />
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide banner-slide">
                        <div class="banner-slide__content">
                            <h3 class="banner-slide__heading">Helpotat elämääsi</h3>
                            <p class="banner-slide__text">Yli 50 tuntia lisää vapaata aikaa kuukaudessa. Voit kokeilla
                                uutta harrastusta, käyttää aikaa tavoitteiden saavuttamiseen tai rentoutua kotona.</p>
                            <div class="banner-slide__image">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/banner-breakfast.png"
                                    alt="banner image" />
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide banner-slide">
                        <div class="banner-slide__content">
                            <h3 class="banner-slide__heading">Syö yksin tai parisi kanssa</h3>
                            <p class="banner-slide__text">Pidämme huolen, että voit nauttia ruoasta yhdessä seurasi
                                kanssa.</p>
                            <div class="banner-slide__image">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/banner-couple.png"
                                    alt="banner image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="decor-line _container">
        <span></span>
    </div>
    <section id="cooperation" class="us-none">
        <header class="cooperation__title section-title">
            <h1>Yhteistyössä</h1>
        </header>
        <div class="swiper cooperation-swiper">
            <div class="swiper-wrapper cooperation-swiper__wrapper">
                <div class="swiper-slide cooperation-slide">
                    <div class="cooperation-slide__image">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/kmarket.png"
                            alt="cooperation company logo" />
                    </div>
                </div>
                <div class="swiper-slide cooperation-slide">
                    <div class="cooperation-slide__image">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/kcitymarket.png"
                            alt="cooperation company logo" />
                    </div>
                </div>
                <div class="swiper-slide cooperation-slide">
                    <div class="cooperation-slide__image">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/T4U 1.png"
                            alt="cooperation company logo" />
                    </div>
                </div>
                <div class="swiper-slide cooperation-slide">
                    <div class="cooperation-slide__image">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/kmarket.png"
                            alt="cooperation company logo" />
                    </div>
                </div>
                <div class="swiper-slide cooperation-slide">
                    <div class="cooperation-slide__image">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/kcitymarket.png"
                            alt="cooperation company logo" />
                    </div>
                </div>
                <div class="swiper-slide cooperation-slide">
                    <div class="cooperation-slide__image">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/T4U 1.png"
                            alt="cooperation company logo" />
                    </div>
                </div>
                <div class="swiper-slide cooperation-slide">
                    <div class="cooperation-slide__image">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/kmarket.png"
                            alt="cooperation company logo" />
                    </div>
                </div>
                <div class="swiper-slide cooperation-slide">
                    <div class="cooperation-slide__image">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/kcitymarket.png"
                            alt="cooperation company logo" />
                    </div>
                </div>
                <div class="swiper-slide cooperation-slide">
                    <div class="cooperation-slide__image">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/T4U 1.png"
                            alt="cooperation company logo" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="main__dark"></div>
</main>
<?php get_footer() ?>