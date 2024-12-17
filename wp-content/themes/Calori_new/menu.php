<?php
/* Template Name: Ruokalista */
get_header(null, array("announcement" => true, "show_cart" => true))
?>



<main id="main">
    <?php get_template_part("mini-cart") ?>
    <div class="loading" id="loading">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/loading-gif.gif" alt="loading">
    </div>

    <div class="breadcrumbs">
        <ul>
            <li>
                <a href="/">Kotisivu</a>
            </li>
            <li>
                Ruokalista
            </li>
        </ul>
    </div>

    <section class="section">
        <div class="container">
            <div class="section-wrapper">
                <div class="menu-page">
                    <h1 class="h1">
                        Ruokalistat
                    </h1>

                    <p class="menu-page-text">
                    Tällä sivulla näet kahden viikon menumme, jossa on 58 erilaista reseptiä.
                    </p>

                    <custom-menu class="menu">
                        <div class="menu__container _container">
                            <div class="menu__body">
                                <div class="menu__sticky">
                                    <div class="menu__buttons">
                                        <?php
                                        // задаем нужные нам критерии выборки данных из БД
                                        $args = array(
                                            'post__in' => [445, 192],
                                            'post_type' => 'ruokalistat',

                                        );

                                        $query = new WP_Query($args);

                                        $b = 0;
                                        ?>

                                        <?php while ($query->have_posts()) {
                                            $query->the_post(); ?>
                                            <div class="menu__button radio-sm" data-post-id="<?php the_ID(); ?>">
                                                <label class="<?php if ($b == 0): ?>menu__current <?php endif; ?> menu__button" for="week<?php echo $b ?>">
                                                    <?php the_title(); ?>
                                                </label>
                                                <input type="radio" id="week<?php echo $b ?>" name="week_radio" value="11/05/2024 - 11/12/2024" <?php if ($b == 0): ?>checked="" <?php endif; ?>>
                                            </div>

                                        <?
                                            $b++;
                                        }

                                        wp_reset_postdata(); // ВАЖНО вернуть global $post обратно 
                                        ?>




                                    </div>
                                </div>
                                <div class="menu__loading loading-gif">
                                    <img src="https://calori.ae/wp-content/themes/Calori/assets/images/icons/loading-gif.gif" alt="loading">
                                </div>
                                <div class="menu__wrapper">

                                    <div class="week-menu-tabs">

                                        <div class="week-menu-tabs_tab active">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_2040_5165" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="12" height="12">
                                                    <path d="M0.75 0.750031H11.25V11.25H0.75V0.750031Z" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_2040_5165)">
                                                    <path d="M5.59666 8.83008H6.40329M8.02125 8.83008H8.82788M3.17674 8.83008H3.98338M5.59666 6.41017H6.40329M8.02125 6.41017H8.82788M3.17674 6.41017H3.98338M1.16016 4.38673H10.8445M8.42456 3.17677V1.16019M3.58007 3.17677V1.16019M2.77809 10.8398H9.22653C10.1201 10.8398 10.8445 10.1155 10.8445 9.22188V3.58478C10.8445 2.69121 10.1201 1.96682 9.22653 1.96682H2.77809C1.88453 1.96682 1.16016 2.69121 1.16016 3.58478V9.22188C1.16016 10.1155 1.88453 10.8398 2.77809 10.8398Z" stroke="#2F4F4C" stroke-width="0.82031" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                </g>
                                            </svg>

                                            Maanantai

                                        </div>

                                        <div class="week-menu-tabs_tab ">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_2040_5165" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="12" height="12">
                                                    <path d="M0.75 0.750031H11.25V11.25H0.75V0.750031Z" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_2040_5165)">
                                                    <path d="M5.59666 8.83008H6.40329M8.02125 8.83008H8.82788M3.17674 8.83008H3.98338M5.59666 6.41017H6.40329M8.02125 6.41017H8.82788M3.17674 6.41017H3.98338M1.16016 4.38673H10.8445M8.42456 3.17677V1.16019M3.58007 3.17677V1.16019M2.77809 10.8398H9.22653C10.1201 10.8398 10.8445 10.1155 10.8445 9.22188V3.58478C10.8445 2.69121 10.1201 1.96682 9.22653 1.96682H2.77809C1.88453 1.96682 1.16016 2.69121 1.16016 3.58478V9.22188C1.16016 10.1155 1.88453 10.8398 2.77809 10.8398Z" stroke="#2F4F4C" stroke-width="0.82031" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                </g>
                                            </svg>

                                            Tiistai

                                        </div>

                                        <div class="week-menu-tabs_tab ">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_2040_5165" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="12" height="12">
                                                    <path d="M0.75 0.750031H11.25V11.25H0.75V0.750031Z" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_2040_5165)">
                                                    <path d="M5.59666 8.83008H6.40329M8.02125 8.83008H8.82788M3.17674 8.83008H3.98338M5.59666 6.41017H6.40329M8.02125 6.41017H8.82788M3.17674 6.41017H3.98338M1.16016 4.38673H10.8445M8.42456 3.17677V1.16019M3.58007 3.17677V1.16019M2.77809 10.8398H9.22653C10.1201 10.8398 10.8445 10.1155 10.8445 9.22188V3.58478C10.8445 2.69121 10.1201 1.96682 9.22653 1.96682H2.77809C1.88453 1.96682 1.16016 2.69121 1.16016 3.58478V9.22188C1.16016 10.1155 1.88453 10.8398 2.77809 10.8398Z" stroke="#2F4F4C" stroke-width="0.82031" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                </g>
                                            </svg>

                                            Keskiviikko

                                        </div>

                                        <div class="week-menu-tabs_tab ">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_2040_5165" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="12" height="12">
                                                    <path d="M0.75 0.750031H11.25V11.25H0.75V0.750031Z" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_2040_5165)">
                                                    <path d="M5.59666 8.83008H6.40329M8.02125 8.83008H8.82788M3.17674 8.83008H3.98338M5.59666 6.41017H6.40329M8.02125 6.41017H8.82788M3.17674 6.41017H3.98338M1.16016 4.38673H10.8445M8.42456 3.17677V1.16019M3.58007 3.17677V1.16019M2.77809 10.8398H9.22653C10.1201 10.8398 10.8445 10.1155 10.8445 9.22188V3.58478C10.8445 2.69121 10.1201 1.96682 9.22653 1.96682H2.77809C1.88453 1.96682 1.16016 2.69121 1.16016 3.58478V9.22188C1.16016 10.1155 1.88453 10.8398 2.77809 10.8398Z" stroke="#2F4F4C" stroke-width="0.82031" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                </g>
                                            </svg>

                                            Torstai

                                        </div>

                                        <div class="week-menu-tabs_tab ">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_2040_5165" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="12" height="12">
                                                    <path d="M0.75 0.750031H11.25V11.25H0.75V0.750031Z" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_2040_5165)">
                                                    <path d="M5.59666 8.83008H6.40329M8.02125 8.83008H8.82788M3.17674 8.83008H3.98338M5.59666 6.41017H6.40329M8.02125 6.41017H8.82788M3.17674 6.41017H3.98338M1.16016 4.38673H10.8445M8.42456 3.17677V1.16019M3.58007 3.17677V1.16019M2.77809 10.8398H9.22653C10.1201 10.8398 10.8445 10.1155 10.8445 9.22188V3.58478C10.8445 2.69121 10.1201 1.96682 9.22653 1.96682H2.77809C1.88453 1.96682 1.16016 2.69121 1.16016 3.58478V9.22188C1.16016 10.1155 1.88453 10.8398 2.77809 10.8398Z" stroke="#2F4F4C" stroke-width="0.82031" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                </g>
                                            </svg>

                                            Perjantai

                                        </div>

                                        <div class="week-menu-tabs_tab ">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_2040_5165" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="12" height="12">
                                                    <path d="M0.75 0.750031H11.25V11.25H0.75V0.750031Z" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_2040_5165)">
                                                    <path d="M5.59666 8.83008H6.40329M8.02125 8.83008H8.82788M3.17674 8.83008H3.98338M5.59666 6.41017H6.40329M8.02125 6.41017H8.82788M3.17674 6.41017H3.98338M1.16016 4.38673H10.8445M8.42456 3.17677V1.16019M3.58007 3.17677V1.16019M2.77809 10.8398H9.22653C10.1201 10.8398 10.8445 10.1155 10.8445 9.22188V3.58478C10.8445 2.69121 10.1201 1.96682 9.22653 1.96682H2.77809C1.88453 1.96682 1.16016 2.69121 1.16016 3.58478V9.22188C1.16016 10.1155 1.88453 10.8398 2.77809 10.8398Z" stroke="#2F4F4C" stroke-width="0.82031" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                </g>
                                            </svg>

                                            Lauantai

                                        </div>

                                        <div class="week-menu-tabs_tab ">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_2040_5165" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="12" height="12">
                                                    <path d="M0.75 0.750031H11.25V11.25H0.75V0.750031Z" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_2040_5165)">
                                                    <path d="M5.59666 8.83008H6.40329M8.02125 8.83008H8.82788M3.17674 8.83008H3.98338M5.59666 6.41017H6.40329M8.02125 6.41017H8.82788M3.17674 6.41017H3.98338M1.16016 4.38673H10.8445M8.42456 3.17677V1.16019M3.58007 3.17677V1.16019M2.77809 10.8398H9.22653C10.1201 10.8398 10.8445 10.1155 10.8445 9.22188V3.58478C10.8445 2.69121 10.1201 1.96682 9.22653 1.96682H2.77809C1.88453 1.96682 1.16016 2.69121 1.16016 3.58478V9.22188C1.16016 10.1155 1.88453 10.8398 2.77809 10.8398Z" stroke="#2F4F4C" stroke-width="0.82031" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                </g>
                                            </svg>

                                            Sunnuntai

                                        </div>

                                    </div>


                                    <div class="week-menu-tabscontent">
                                        <?php
                                        // задаем нужные нам критерии выборки данных из БД
                                        $args = array(
                                            'p' => 445,
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
                                                                <div class="week-menu-tabscontent_tab <?php if ($a == 1) : ?> active <?php endif; ?>">
                                                                    <div class="menu-swiper-wrap">
                                                                        <div class="swiper menuswiper menuswiper<?php echo $day; ?>">
                                                                            <div class="swiper-wrapper">
                                                                                <?php
                                                                                $a = 0;
                                                                                foreach ($dayweek[0]['meals'] as $item) {

                                                                                    // print_r($item);

                                                                                ?>
                                                                                    <div class="swiper-slide">                                                                                          
                                                                                        <a data-fancybox="" data-src="#menuitem<?php echo $day; echo $a; ?>" class="menu-item">
                                                                                            <img
                                                                                                src="<?php echo $item['meal_image']; ?>"
                                                                                                alt="food"
                                                                                                class="menu-item-bg" />



                                                                                            <div class="menu-item-title"><?php echo $item['meal_name']; ?></div>
                                                                                            <div class="menu-item-which"><?php echo $item['meal_of_day']; ?></div>
                                                                                        </a>

                                                                                        <div id="menuitem<?php echo $day; echo $a; ?>" class="menupopup" style="display:none;max-width:500px;">
                                                                                            <!-- <button data-fancybox-close="" class="f-button is-close-btn" title="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" tabindex="-1"><path d="M20 20L4 4m16 0L4 20"></path></svg></button> -->

                                                                                            <img src="<?php echo $item['meal_image2']; ?>"  class="menu-item-bg1" alt="food">
                                                                                            <div class="menupopup-wrap">



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

                                                                                <?
                                                                                    $a++;
                                                                                }
                                                                                ?>


                                                                            </div>
                                                                        </div>

                                                                        <div class="arrow-left  arrow-left<?php echo $day; ?>">
                                                                            <svg
                                                                                width="40"
                                                                                height="40"
                                                                                viewBox="0 0 40 40"
                                                                                fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <rect
                                                                                    x="40"
                                                                                    width="40"
                                                                                    height="40"
                                                                                    rx="20"
                                                                                    transform="rotate(90 40 0)"
                                                                                    fill="#213735" />
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
                                                                            <svg
                                                                                width="40"
                                                                                height="40"
                                                                                viewBox="0 0 40 40"
                                                                                fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <rect
                                                                                    y="40"
                                                                                    width="40"
                                                                                    height="40"
                                                                                    rx="20"
                                                                                    transform="rotate(-90 0 40)"
                                                                                    fill="#213735" />
                                                                                <mask id="path-2-inside-1_2002_239" fill="white">
                                                                                    <path
                                                                                        d="M23.9673 20.0004C23.9673 20.1032 23.9302 20.2065 23.8559 20.2876L16.7752 28.0584C16.6165 28.2325 16.3467 28.2453 16.1722 28.0865C15.9976 27.9278 15.9848 27.658 16.144 27.4835L22.9635 20.0004L16.144 12.5168C15.9852 12.3414 15.9981 12.0721 16.1722 11.9138C16.3463 11.755 16.6165 11.7674 16.7752 11.9415L23.8563 19.7131C23.9302 19.7942 23.9673 19.8975 23.9673 20.0004Z" />
                                                                                </mask>
                                                                                <path
                                                                                    d="M23.9673 20.0004C23.9673 20.1032 23.9302 20.2065 23.8559 20.2876L16.7752 28.0584C16.6165 28.2325 16.3467 28.2453 16.1722 28.0865C15.9976 27.9278 15.9848 27.658 16.144 27.4835L22.9635 20.0004L16.144 12.5168C15.9852 12.3414 15.9981 12.0721 16.1722 11.9138C16.3463 11.755 16.6165 11.7674 16.7752 11.9415L23.8563 19.7131C23.9302 19.7942 23.9673 19.8975 23.9673 20.0004Z"
                                                                                    fill="white" />

                                                                            </svg>
                                                                        </div>
                                                                                <?php $day++;?>

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
                                            while (have_rows('this_week_whole_menu')) : 
                                                the_row(); 
                                                $day++;
                                                // Load sub field value.
                                                $sub_value = get_sub_field('sub_field');
                                            endwhile; 
                                        ?>

                                        <?php endif; ?>



                                        <?php

                                        }

                                        wp_reset_postdata(); // ВАЖНО вернуть global $post обратно 
                                        ?>





                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-popup__meal popup-meal" style="visibility: hidden;">
                            <div class="popup-meal__wrapper">
                                <div class="popup-meal__content day-card">
                                    <div class="popup-meal__image day-card-image">
                                        <img src="images/menu/menu image.jpg" alt="meal image">
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


                </div>
            </div>
        </div>
    </section>


    <script>
        jQuery(document).ready(function($) {

            let a=1;

$('.menuswiper').each(function(){
  
  var menuswiper = new Swiper(this, {
    slidesPerView: 4,
    spaceBetween: 24,
    loop:false,
    navigation: {
        nextEl: ".arrow-right" +a,
        prevEl: ".arrow-left" +a,
      },
      breakpoints: {
        0: {
          slidesPerView: 'auto',
          spaceBetween: 12,
          centeredSlides: true,
        },
        1200: {
          slidesPerView: 4,
          spaceBetween: 24,
          centeredSlides: false,
        },
        
      },
  });

  a++;
})


            let b=1;
            $('.menu__button').on('click', function() {
                // if (! $(this).parent().children('input').attr('checked', 'checked')){
                var postId = $(this).data('post-id');

                $.ajax({
                    url: "/wp-admin/admin-ajax.php",
                    type: 'POST',
                    data: {
                        action: 'load_post_content', // Название действия
                        post_type: 'ruokalistat',
                        post_id: postId // ID поста
                    },
                    beforeSend: function() {
                        $('.week-menu-tabscontent').empty();
                        $('.week-menu-tabs_tab').removeClass('active');
                        $('.week-menu-tabs_tab').eq(0).addClass('active');
                        $('.week-menu-tabs').css('display', 'none');
                        $('.menu__loading').addClass('_active');
                    },
                    success: function(response) {
                        $('.week-menu-tabs').css('display', 'flex');
                        $('.menu__loading').removeClass('_active');
                        $('.week-menu-tabscontent').html(response); // Вставляем полученный контент в div

                        b = 1;

                        $('.menuswiper').each(function() {

                            var menuswiper = new Swiper(this, {
                                slidesPerView: 4,
                                spaceBetween: 24,
                                loop: false,
                                navigation: {
                                    nextEl: '.arrow-right' + a,
                                    prevEl: ".arrow-left" + a,
                                },
                                breakpoints: {
                                    0: {
                                        slidesPerView: 'auto',
                                        spaceBetween: 12,
                                        centeredSlides: true,
                                    },
                                    1200: {
                                        slidesPerView: 4,
                                        spaceBetween: 24,
                                        centeredSlides: false,
                                    },

                                },
                            });

                            b++;
                        })
                    },
                    error: function(xhr, status, error) {
                        $('.menu__loading').removeClass('_active');
                        console.error('Ошибка при загрузке');
                    }
                });
                // }
            });

        });
    </script>

    <section class="bigbanner timer mb0">
        <div class="timer-wrap">
            <div class="banner-title">
                Lähin toimitus
            </div>
            <div class="banner-text">
                Huomaa, lähin toimituspäivä on <span class="nextdate"><?php echo get_field("order_end_day", "option") ?></span>. <br>
                Tilauksien vastaanottamiset lähimmälle toimitukselle sulkeutuvat:
            </div>
            <custom-timer class=" custom-timer"
                data-day="<?php echo get_field("order_end_day", "option") ?>"
                data-time="<?php echo get_field("order_end_time", "option") ?>">

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

            <a href="<?php echo get_home_url(); ?>#order" class="btn green">Tee tilaus</a>
        </div>
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/banner11.png" alt="banner" class="bigbanner-bg abs">
    </section>
    <section class="section grey ">
    <div class="container">
      <div class="section-wrapper">
        <div class="whywe swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                <div class="whywe_item">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/ico01.svg" class="whywe_item_ico">

                    <span class="whywe_item_text">
                    Maukasta ja terveellistä ruokaa
                    </span>
                    </img>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="whywe_item">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/ico02.svg" class="whywe_item_ico">

                    <span class="whywe_item_text">
                    Säästät yli 8 tuntia viikossa kokkaamisella
                    </span>
                </div>
                </div>

                <div class="swiper-slide">
                <div class="whywe_item">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/ico03.svg" class="whywe_item_ico">

                    <span class="whywe_item_text">
                    Tasapainoa ja helpoutta elämääsi
                    </span>
                </div>
                </div>

                <div class="swiper-slide">
                <div class="whywe_item">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/ico04.svg" class="whywe_item_ico">

                    <span class="whywe_item_text">
                    Saavutat kaikki tavoitteesi
                    </span>
                </div>
                </div>

            </div>
            </div>
      </div>
    </div>
  </section>

    <section class="section">
        <div class="container">
            <div class="section-wrapper">
                <div class="h2-wrapper">
                    <h2 class="h2">
                        Teemme yhteistyötä
                    </h2>
                </div>

                <div class="partners">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/partner1.png" alt="" class="partners-item">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/partner2.png" alt="" class="partners-item">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/partner3.png" alt="" class="partners-item">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/partner4.png" alt="" class="partners-item">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/partner5.png" alt="" class="partners-item">
                </div>
            </div>
        </div>
    </section>

    <div class="main__dark">
    </div>
</main>
<?php get_footer() ?>