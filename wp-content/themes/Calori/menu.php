<?php
/* Template Name: Ruokalista */
get_header(null, array("announcement" => false, "show_cart" => true))
    ?>
<main id="main">
    <?php get_template_part("mini-cart") ?>
    <div class="loading" id="loading">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/loading-gif.gif" alt="loading">
    </div>
    <section id="menu">
        <div class="menu__banner section-banner">
            <div class="menu-banner__wrapper section-banner__wrapper _container">
                <header class="menu__title section-banner__title">
                    <h3>Tämän ja seuraavan viikon</h3>
                    <h1>RUOKALISTAT</h1>
                </header>
            </div>
            <div class="menu__image section-banner__image">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/menu banner.png"
                    alt="banner image" />
            </div>
        </div>
        <custom-menu class="menu">
            <?php

            $args = array(
                'post_type' => 'ruokalistat',
                'posts_per_page' => -1,
            );

            $query = new WP_Query($args);

            ?>
            <div class="menu__container _container">
                <div class="menu__body">
                    <div class="menu__sticky">
                        <?php
                        function isCurrentDateInRange($start, $end)
                        {
                            $currentDate = new DateTime();
                            $currentDate->setTime(0, 0, 0);

                            $startDate = DateTime::createFromFormat('m/d/Y', $start);
                            $endDate = DateTime::createFromFormat('m/d/Y', $end);

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

                        $has_same_week = false;

                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                $fields = get_fields();

                                $date_string = $fields['start_date'] . ' - ' . $fields['end_date'];
                                $converted_date = convertDateRange($date_string);

                                if (isCurrentDateInRange($fields['start_date'], $fields['end_date'])) {
                                    $has_same_week = true;
                                } else {
                                    $next_week = $fields['start_date'] . ' - ' . $fields['end_date'];
                                }
                            }

                            echo '<time class="menu__date"><strong>' . $converted_date . '</strong></time>';
                        }
                        ?>
                        <div class="menu__buttons">
                            <div class="menu__button radio-sm">
                                <label class="menu__current menu__button"
                                    for="fisrt_week"><?php echo $has_same_week ? "Tämä viikko" : $converted_date ?></label>
                                <input type="radio" id="first_week" name="week_radio" value="<?php echo $date_string ?>"
                                    checked>
                            </div>
                            <div class="menu__button radio-sm">
                                <label class="menu__next menu__button" for="second_week">Seuraava viikko</label>
                                <input type="radio" id="second_week" name="week_radio" value="<?php echo $next_week ?>">
                            </div>
                        </div>
                    </div>
                    <div class="menu__loading loading-gif">
                        <img src="<?php echo get_template_directory_uri() . "/assets/images/icons/loading-gif.gif" ?>"
                            alt="loading">
                    </div>
                    <div class="menu__wrapper">
                    </div>
                </div>
            </div>
            <div class="menu-popup__meal popup-meal">
                <div class="popup-meal__wrapper">
                    <div class="popup-meal__content day-card">
                        <div class="popup-meal__image day-card-image">
                            <img src="images/menu/menu image.jpg" alt="meal image" />
                        </div>
                        <div class="popup-meal__info day-card-info">
                            <ul class="popup-meal__properties day-card-propeties">
                                <li>Laktoositon</li>
                                <li>KYLMÄ</li>
                                <li>MIKRO</li>
                            </ul>
                            <h3 class="popup-meal__meal day-card-meal"></h3>
                            <h2 class="popup-meal__name day-card-meal-name"></h2>
                            <div class="popup-meal__block popup-block">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </custom-menu>
    </section>
    <div class="main__dark">
    </div>
</main>
<?php get_footer() ?>