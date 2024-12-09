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
        <a href="/">Home</a>
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
            RUOKALISTAT
          </h1>

          <p class="menu-page-text">
            На данной странице вы можете ознакомиться с меню на эту и на следующую неделю
          </p>

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

                            
                        }
                        ?>
                        <div class="menu__buttons">
                            <div class="menu__button radio-sm">
                                <label class="menu__current menu__button"
                                    for="fisrt_week">Эта неделя</label>
                                <input type="radio" id="first_week" name="week_radio" value="<?php echo $date_string ?>"
                                    checked>
                            </div>
                            <div class="menu__button radio-sm">
                                <label class="menu__next menu__button" for="second_week">Следующая неделя</label>
                                <input type="radio" id="second_week" name="week_radio" value="<?php echo $next_week ?>">
                            </div>
                        </div>
                    </div>
                    <div class="menu__loading loading-gif">
                        <img src="<?php echo get_template_directory_uri() . "/assets/images/icons/loading-gif.gif" ?>"
                            alt="loading">
                    </div>
                    <div class="menu__wrapper1">
                    <div class="week-menu-tabs">
                      <div class="week-menu-tabs_tab active">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <mask id="mask0_2040_5165" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="12" height="12">
                          <path d="M0.75 0.750031H11.25V11.25H0.75V0.750031Z" fill="white"/>
                          </mask>
                          <g mask="url(#mask0_2040_5165)">
                          <path d="M5.59666 8.83008H6.40329M8.02125 8.83008H8.82788M3.17674 8.83008H3.98338M5.59666 6.41017H6.40329M8.02125 6.41017H8.82788M3.17674 6.41017H3.98338M1.16016 4.38673H10.8445M8.42456 3.17677V1.16019M3.58007 3.17677V1.16019M2.77809 10.8398H9.22653C10.1201 10.8398 10.8445 10.1155 10.8445 9.22188V3.58478C10.8445 2.69121 10.1201 1.96682 9.22653 1.96682H2.77809C1.88453 1.96682 1.16016 2.69121 1.16016 3.58478V9.22188C1.16016 10.1155 1.88453 10.8398 2.77809 10.8398Z" stroke="#2F4F4C" stroke-width="0.82031" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                          </g>
                          </svg>

                          Понедельник
                          
                      </div>

                      <div class="week-menu-tabs_tab ">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <mask id="mask0_2040_5165" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="12" height="12">
                          <path d="M0.75 0.750031H11.25V11.25H0.75V0.750031Z" fill="white"/>
                          </mask>
                          <g mask="url(#mask0_2040_5165)">
                          <path d="M5.59666 8.83008H6.40329M8.02125 8.83008H8.82788M3.17674 8.83008H3.98338M5.59666 6.41017H6.40329M8.02125 6.41017H8.82788M3.17674 6.41017H3.98338M1.16016 4.38673H10.8445M8.42456 3.17677V1.16019M3.58007 3.17677V1.16019M2.77809 10.8398H9.22653C10.1201 10.8398 10.8445 10.1155 10.8445 9.22188V3.58478C10.8445 2.69121 10.1201 1.96682 9.22653 1.96682H2.77809C1.88453 1.96682 1.16016 2.69121 1.16016 3.58478V9.22188C1.16016 10.1155 1.88453 10.8398 2.77809 10.8398Z" stroke="#2F4F4C" stroke-width="0.82031" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                          </g>
                          </svg>

                          Вторник
                          
                      </div>

                      <div class="week-menu-tabs_tab ">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <mask id="mask0_2040_5165" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="12" height="12">
                          <path d="M0.75 0.750031H11.25V11.25H0.75V0.750031Z" fill="white"/>
                          </mask>
                          <g mask="url(#mask0_2040_5165)">
                          <path d="M5.59666 8.83008H6.40329M8.02125 8.83008H8.82788M3.17674 8.83008H3.98338M5.59666 6.41017H6.40329M8.02125 6.41017H8.82788M3.17674 6.41017H3.98338M1.16016 4.38673H10.8445M8.42456 3.17677V1.16019M3.58007 3.17677V1.16019M2.77809 10.8398H9.22653C10.1201 10.8398 10.8445 10.1155 10.8445 9.22188V3.58478C10.8445 2.69121 10.1201 1.96682 9.22653 1.96682H2.77809C1.88453 1.96682 1.16016 2.69121 1.16016 3.58478V9.22188C1.16016 10.1155 1.88453 10.8398 2.77809 10.8398Z" stroke="#2F4F4C" stroke-width="0.82031" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                          </g>
                          </svg>

                          Среда
                          
                      </div>

                      <div class="week-menu-tabs_tab ">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <mask id="mask0_2040_5165" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="12" height="12">
                          <path d="M0.75 0.750031H11.25V11.25H0.75V0.750031Z" fill="white"/>
                          </mask>
                          <g mask="url(#mask0_2040_5165)">
                          <path d="M5.59666 8.83008H6.40329M8.02125 8.83008H8.82788M3.17674 8.83008H3.98338M5.59666 6.41017H6.40329M8.02125 6.41017H8.82788M3.17674 6.41017H3.98338M1.16016 4.38673H10.8445M8.42456 3.17677V1.16019M3.58007 3.17677V1.16019M2.77809 10.8398H9.22653C10.1201 10.8398 10.8445 10.1155 10.8445 9.22188V3.58478C10.8445 2.69121 10.1201 1.96682 9.22653 1.96682H2.77809C1.88453 1.96682 1.16016 2.69121 1.16016 3.58478V9.22188C1.16016 10.1155 1.88453 10.8398 2.77809 10.8398Z" stroke="#2F4F4C" stroke-width="0.82031" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                          </g>
                          </svg>

                          Четверг
                          
                      </div>

                      <div class="week-menu-tabs_tab ">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <mask id="mask0_2040_5165" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="12" height="12">
                          <path d="M0.75 0.750031H11.25V11.25H0.75V0.750031Z" fill="white"/>
                          </mask>
                          <g mask="url(#mask0_2040_5165)">
                          <path d="M5.59666 8.83008H6.40329M8.02125 8.83008H8.82788M3.17674 8.83008H3.98338M5.59666 6.41017H6.40329M8.02125 6.41017H8.82788M3.17674 6.41017H3.98338M1.16016 4.38673H10.8445M8.42456 3.17677V1.16019M3.58007 3.17677V1.16019M2.77809 10.8398H9.22653C10.1201 10.8398 10.8445 10.1155 10.8445 9.22188V3.58478C10.8445 2.69121 10.1201 1.96682 9.22653 1.96682H2.77809C1.88453 1.96682 1.16016 2.69121 1.16016 3.58478V9.22188C1.16016 10.1155 1.88453 10.8398 2.77809 10.8398Z" stroke="#2F4F4C" stroke-width="0.82031" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                          </g>
                          </svg>

                          Пятница
                          
                      </div>

                      <div class="week-menu-tabs_tab ">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <mask id="mask0_2040_5165" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="12" height="12">
                          <path d="M0.75 0.750031H11.25V11.25H0.75V0.750031Z" fill="white"/>
                          </mask>
                          <g mask="url(#mask0_2040_5165)">
                          <path d="M5.59666 8.83008H6.40329M8.02125 8.83008H8.82788M3.17674 8.83008H3.98338M5.59666 6.41017H6.40329M8.02125 6.41017H8.82788M3.17674 6.41017H3.98338M1.16016 4.38673H10.8445M8.42456 3.17677V1.16019M3.58007 3.17677V1.16019M2.77809 10.8398H9.22653C10.1201 10.8398 10.8445 10.1155 10.8445 9.22188V3.58478C10.8445 2.69121 10.1201 1.96682 9.22653 1.96682H2.77809C1.88453 1.96682 1.16016 2.69121 1.16016 3.58478V9.22188C1.16016 10.1155 1.88453 10.8398 2.77809 10.8398Z" stroke="#2F4F4C" stroke-width="0.82031" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                          </g>
                          </svg>

                          Суббота
                          
                      </div>

                      <div class="week-menu-tabs_tab ">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <mask id="mask0_2040_5165" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="12" height="12">
                          <path d="M0.75 0.750031H11.25V11.25H0.75V0.750031Z" fill="white"/>
                          </mask>
                          <g mask="url(#mask0_2040_5165)">
                          <path d="M5.59666 8.83008H6.40329M8.02125 8.83008H8.82788M3.17674 8.83008H3.98338M5.59666 6.41017H6.40329M8.02125 6.41017H8.82788M3.17674 6.41017H3.98338M1.16016 4.38673H10.8445M8.42456 3.17677V1.16019M3.58007 3.17677V1.16019M2.77809 10.8398H9.22653C10.1201 10.8398 10.8445 10.1155 10.8445 9.22188V3.58478C10.8445 2.69121 10.1201 1.96682 9.22653 1.96682H2.77809C1.88453 1.96682 1.16016 2.69121 1.16016 3.58478V9.22188C1.16016 10.1155 1.88453 10.8398 2.77809 10.8398Z" stroke="#2F4F4C" stroke-width="0.82031" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                          </g>
                          </svg>

                          Воскресенье
                          
                      </div>

                    </div>
                  

                    <div class="week-menu-tabscontent">
                      <div class="week-menu-tabscontent_tab active">
                      <div class="menu-swiper-wrap">
                        <div class="swiper menuswiper menuswiper1">
                            <div class="swiper-wrapper">
                            <?php

                                // проверяем есть ли в повторителе данные
                                if( have_rows('foods', 'options') ):

                                    // перебираем данные
                                    while ( have_rows('foods' , 'options') ) : the_row();
                                    ?>

                                <div class="swiper-slide">
                                <a href="#" class="menu-item">
                                    <img
                                    src="<?php  the_sub_field('food_photo');?>"
                                    alt="food"
                                    class="menu-item-bg"
                                    />

                                    <div class="label">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/toprated.svg" alt="" class="label-ico" />
                                    <span class="label-text"> Top rated </span>
                                    </div>

                                    <div class="menu-item-title"><?php  the_sub_field('food_name');?></div>
                                </a>
                                </div>

                                <?php

                                        // отображаем вложенные поля
                                    

                                    endwhile;

                                else :

                                    // вложенных полей не найдено

                                endif;

                                ?>
                                <div class="swiper-slide">
                                <a href="#" class="menu-item">
                                  <img
                                    src="images/food.png"
                                    alt="food"
                                    class="menu-item-bg"
                                  />
              
                                  <div class="label">
                                    <img src="images/toprated.svg" alt="" class="label-ico" />
                                    <span class="label-text"> Top rated </span>
                                  </div>
              
                                  <div class="menu-item-title">Burger</div>
                                </a>
                              </div>
                            </div>
                        </div>

                        <div class="arrow-left arrow-left1">
                        <svg
                            width="40"
                            height="40"
                            viewBox="0 0 40 40"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <rect
                            x="40"
                            width="40"
                            height="40"
                            rx="20"
                            transform="rotate(90 40 0)"
                            fill="#213735"
                            />
                            <mask id="path-2-inside-1_2002_241" fill="white">
                            <path
                                d="M16.0326 19.9996C16.0326 19.8968 16.0697 19.7935 16.144 19.7124L23.2247 11.9416C23.3834 11.7675 23.6531 11.7547 23.8277 11.9135C24.0023 12.0722 24.0151 12.342 23.8559 12.5165L17.0364 19.9996L23.8559 27.4832C24.0146 27.6586 24.0018 27.9279 23.8277 28.0862C23.6536 28.245 23.3834 28.2326 23.2247 28.0585L16.1435 20.2869C16.0697 20.2058 16.0326 20.1025 16.0326 19.9996Z"
                            />
                            </mask>
                            <path
                            d="M16.0326 19.9996C16.0326 19.8968 16.0697 19.7935 16.144 19.7124L23.2247 11.9416C23.3834 11.7675 23.6531 11.7547 23.8277 11.9135C24.0023 12.0722 24.0151 12.342 23.8559 12.5165L17.0364 19.9996L23.8559 27.4832C24.0146 27.6586 24.0018 27.9279 23.8277 28.0862C23.6536 28.245 23.3834 28.2326 23.2247 28.0585L16.1435 20.2869C16.0697 20.2058 16.0326 20.1025 16.0326 19.9996Z"
                            fill="white"
                            />
                            <path
                            d="M16.144 19.7124L16.8814 20.3878L16.8831 20.3859L16.144 19.7124ZM23.2247 11.9416L22.4857 11.2679L22.4855 11.2681L23.2247 11.9416ZM23.8559 12.5165L23.117 11.8427L23.1167 11.8429L23.8559 12.5165ZM17.0364 19.9996L16.2972 19.3261L15.6834 19.9996L16.2972 20.6732L17.0364 19.9996ZM23.8559 27.4832L24.5973 26.8121L24.595 26.8096L23.8559 27.4832ZM23.8277 28.0862L23.1549 27.3464L23.1539 27.3473L23.8277 28.0862ZM23.2247 28.0585L22.4855 28.732L22.4857 28.7322L23.2247 28.0585ZM16.1435 20.2869L15.4041 20.9601L15.4043 20.9604L16.1435 20.2869ZM17.0326 19.9996C17.0326 20.1363 16.983 20.2769 16.8814 20.3878L15.4065 19.037C15.1564 19.3101 15.0326 19.6573 15.0326 19.9996L17.0326 19.9996ZM16.8831 20.3859L23.9638 12.6152L22.4855 11.2681L15.4048 19.0389L16.8831 20.3859ZM23.9636 12.6154C23.7508 12.8488 23.3888 12.866 23.1548 12.6532L24.5006 11.1737C23.9175 10.6434 23.016 10.6862 22.4857 11.2679L23.9636 12.6154ZM23.1548 12.6532C22.9208 12.4404 22.9034 12.0769 23.117 11.8427L24.5947 13.1903C25.1267 12.607 25.0837 11.7041 24.5006 11.1737L23.1548 12.6532ZM23.1167 11.8429L16.2972 19.3261L17.7755 20.6732L24.595 13.1901L23.1167 11.8429ZM16.2972 20.6732L23.1167 28.1567L24.595 26.8096L17.7755 19.3261L16.2972 20.6732ZM23.1145 28.1542C22.9053 27.9232 22.9188 27.5611 23.1549 27.3464L24.5005 28.8261C25.0849 28.2947 25.1239 27.394 24.5973 26.8121L23.1145 28.1542ZM23.1539 27.3473C23.3876 27.1342 23.75 27.1505 23.9636 27.3847L22.4857 28.7322C23.0168 29.3148 23.9195 29.3558 24.5015 28.8252L23.1539 27.3473ZM23.9638 27.385L16.8827 19.6134L15.4043 20.9604L22.4855 28.732L23.9638 27.385ZM16.8829 19.6136C16.9833 19.7238 17.0326 19.8633 17.0326 19.9996L15.0326 19.9996C15.0326 20.3417 15.1561 20.6877 15.4041 20.9601L16.8829 19.6136Z"
                            fill="white"
                            mask="url(#path-2-inside-1_2002_241)"
                            />
                        </svg>
                        </div>
                        <div class="arrow-right arrow-right1">
                        <svg
                            width="40"
                            height="40"
                            viewBox="0 0 40 40"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <rect
                            y="40"
                            width="40"
                            height="40"
                            rx="20"
                            transform="rotate(-90 0 40)"
                            fill="#213735"
                            />
                            <mask id="path-2-inside-1_2002_239" fill="white">
                            <path
                                d="M23.9673 20.0004C23.9673 20.1032 23.9302 20.2065 23.8559 20.2876L16.7752 28.0584C16.6165 28.2325 16.3467 28.2453 16.1722 28.0865C15.9976 27.9278 15.9848 27.658 16.144 27.4835L22.9635 20.0004L16.144 12.5168C15.9852 12.3414 15.9981 12.0721 16.1722 11.9138C16.3463 11.755 16.6165 11.7674 16.7752 11.9415L23.8563 19.7131C23.9302 19.7942 23.9673 19.8975 23.9673 20.0004Z"
                            />
                            </mask>
                            <path
                            d="M23.9673 20.0004C23.9673 20.1032 23.9302 20.2065 23.8559 20.2876L16.7752 28.0584C16.6165 28.2325 16.3467 28.2453 16.1722 28.0865C15.9976 27.9278 15.9848 27.658 16.144 27.4835L22.9635 20.0004L16.144 12.5168C15.9852 12.3414 15.9981 12.0721 16.1722 11.9138C16.3463 11.755 16.6165 11.7674 16.7752 11.9415L23.8563 19.7131C23.9302 19.7942 23.9673 19.8975 23.9673 20.0004Z"
                            fill="white"
                            />
                            <path
                            d="M23.8559 20.2876L23.1184 19.6122L23.1168 19.6141L23.8559 20.2876ZM16.7752 28.0584L17.5142 28.7321L17.5144 28.7319L16.7752 28.0584ZM16.144 27.4835L16.8829 28.1573L16.8831 28.1571L16.144 27.4835ZM22.9635 20.0004L23.7026 20.6739L24.3165 20.0004L23.7027 19.3268L22.9635 20.0004ZM16.144 12.5168L15.4026 13.1879L15.4049 13.1904L16.144 12.5168ZM16.1722 11.9138L16.8449 12.6536L16.8459 12.6527L16.1722 11.9138ZM16.7752 11.9415L17.5144 11.268L17.5142 11.2678L16.7752 11.9415ZM23.8563 19.7131L24.5958 19.0399L24.5955 19.0396L23.8563 19.7131ZM22.9673 20.0004C22.9673 19.8637 23.0169 19.7231 23.1184 19.6122L24.5934 20.963C24.8435 20.6899 24.9673 20.3427 24.9673 20.0004H22.9673ZM23.1168 19.6141L16.0361 27.3848L17.5144 28.7319L24.5951 20.9611L23.1168 19.6141ZM16.0363 27.3846C16.2491 27.1512 16.6111 27.134 16.845 27.3468L15.4993 28.8263C16.0823 29.3566 16.9839 29.3138 17.5142 28.7321L16.0363 27.3846ZM16.845 27.3468C17.0791 27.5596 17.0965 27.9231 16.8829 28.1573L15.4051 26.8097C14.8731 27.393 14.9162 28.2959 15.4993 28.8263L16.845 27.3468ZM16.8831 28.1571L23.7026 20.6739L22.2244 19.3268L15.4049 26.8099L16.8831 28.1571ZM23.7027 19.3268L16.8832 11.8433L15.4049 13.1904L22.2244 20.6739L23.7027 19.3268ZM16.8854 11.8458C17.0945 12.0768 17.0811 12.4389 16.8449 12.6536L15.4994 11.1739C14.915 11.7053 14.876 12.606 15.4026 13.1879L16.8854 11.8458ZM16.8459 12.6527C16.6122 12.8658 16.2499 12.8495 16.0363 12.6153L17.5142 11.2678C16.983 10.6852 16.0804 10.6442 15.4984 11.1748L16.8459 12.6527ZM16.036 12.615L23.1172 20.3866L24.5955 19.0396L17.5144 11.268L16.036 12.615ZM23.1169 20.3864C23.0166 20.2762 22.9673 20.1367 22.9673 20.0004H24.9673C24.9673 19.6583 24.8438 19.3123 24.5958 19.0399L23.1169 20.3864Z"
                            fill="white"
                            mask="url(#path-2-inside-1_2002_239)"
                            />
                        </svg>
                        </div>

                        <div class="menu-more-btn">
                        <p class="menu-more-btn-text">
                            Voit katsoa lisää ruokia linkistä
                        </p>
                        <a href="/ruokalistat/" class="btn green"> Valitse menu </a>
                        </div>
                    </div>
                      </div>

                      <div class="week-menu-tabscontent_tab">
                        <div class="menu-swiper-wrap">
                          <div class="swiper menuswiper menuswiper2">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                <a href="#" class="menu-item">
                                  <img
                                    src="images/food.png"
                                    alt="food"
                                    class="menu-item-bg"
                                  />
              
                                  <div class="label">
                                    <img src="images/toprated.svg" alt="" class="label-ico" />
                                    <span class="label-text"> Top rated </span>
                                  </div>
              
                                  <div class="menu-item-title">Burger</div>
                                </a>
                              </div>
                              <div class="swiper-slide">
                                <a href="#" class="menu-item">
                                  <img
                                    src="images/food.png"
                                    alt="food"
                                    class="menu-item-bg"
                                  />
              
                                  <div class="label">
                                    <img src="images/toprated.svg" alt="" class="label-ico" />
                                    <span class="label-text"> Top rated </span>
                                  </div>
              
                                  <div class="menu-item-title">Burger</div>
                                </a>
                              </div>
                              <div class="swiper-slide">
                                <a href="#" class="menu-item">
                                  <img
                                    src="images/food.png"
                                    alt="food"
                                    class="menu-item-bg"
                                  />
              
                                  <div class="label">
                                    <img src="images/toprated.svg" alt="" class="label-ico" />
                                    <span class="label-text"> Top rated </span>
                                  </div>
              
                                  <div class="menu-item-title">Burger</div>
                                </a>
                              </div>
                              <div class="swiper-slide">
                                <a href="#" class="menu-item">
                                  <img
                                    src="images/food.png"
                                    alt="food"
                                    class="menu-item-bg"
                                  />
              
                                  <div class="label">
                                    <img src="images/toprated.svg" alt="" class="label-ico" />
                                    <span class="label-text"> Top rated </span>
                                  </div>
              
                                  <div class="menu-item-title">Burger</div>
                                </a>
                              </div>
                              <div class="swiper-slide">
                                <a href="#" class="menu-item">
                                  <img
                                    src="images/food.png"
                                    alt="food"
                                    class="menu-item-bg"
                                  />
              
                                  <div class="label">
                                    <img src="images/toprated.svg" alt="" class="label-ico" />
                                    <span class="label-text"> Top rated </span>
                                  </div>
              
                                  <div class="menu-item-title">Burger</div>
                                </a>
                              </div>
                              <div class="swiper-slide">
                                <a href="#" class="menu-item">
                                  <img
                                    src="images/food.png"
                                    alt="food"
                                    class="menu-item-bg"
                                  />
              
                                  <div class="label">
                                    <img src="images/toprated.svg" alt="" class="label-ico" />
                                    <span class="label-text"> Top rated </span>
                                  </div>
              
                                  <div class="menu-item-title">Burger</div>
                                </a>
                              </div>
                            </div>
                          </div>
              
                          <div class="arrow-left  arrow-left2">
                            <svg
                              width="40"
                              height="40"
                              viewBox="0 0 40 40"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <rect
                                x="40"
                                width="40"
                                height="40"
                                rx="20"
                                transform="rotate(90 40 0)"
                                fill="#213735"
                              />
                              <mask id="path-2-inside-1_2002_241" fill="white">
                                <path
                                  d="M16.0326 19.9996C16.0326 19.8968 16.0697 19.7935 16.144 19.7124L23.2247 11.9416C23.3834 11.7675 23.6531 11.7547 23.8277 11.9135C24.0023 12.0722 24.0151 12.342 23.8559 12.5165L17.0364 19.9996L23.8559 27.4832C24.0146 27.6586 24.0018 27.9279 23.8277 28.0862C23.6536 28.245 23.3834 28.2326 23.2247 28.0585L16.1435 20.2869C16.0697 20.2058 16.0326 20.1025 16.0326 19.9996Z"
                                />
                              </mask>
                              <path
                                d="M16.0326 19.9996C16.0326 19.8968 16.0697 19.7935 16.144 19.7124L23.2247 11.9416C23.3834 11.7675 23.6531 11.7547 23.8277 11.9135C24.0023 12.0722 24.0151 12.342 23.8559 12.5165L17.0364 19.9996L23.8559 27.4832C24.0146 27.6586 24.0018 27.9279 23.8277 28.0862C23.6536 28.245 23.3834 28.2326 23.2247 28.0585L16.1435 20.2869C16.0697 20.2058 16.0326 20.1025 16.0326 19.9996Z"
                                fill="white"
                              />
                              <path
                                d="M16.144 19.7124L16.8814 20.3878L16.8831 20.3859L16.144 19.7124ZM23.2247 11.9416L22.4857 11.2679L22.4855 11.2681L23.2247 11.9416ZM23.8559 12.5165L23.117 11.8427L23.1167 11.8429L23.8559 12.5165ZM17.0364 19.9996L16.2972 19.3261L15.6834 19.9996L16.2972 20.6732L17.0364 19.9996ZM23.8559 27.4832L24.5973 26.8121L24.595 26.8096L23.8559 27.4832ZM23.8277 28.0862L23.1549 27.3464L23.1539 27.3473L23.8277 28.0862ZM23.2247 28.0585L22.4855 28.732L22.4857 28.7322L23.2247 28.0585ZM16.1435 20.2869L15.4041 20.9601L15.4043 20.9604L16.1435 20.2869ZM17.0326 19.9996C17.0326 20.1363 16.983 20.2769 16.8814 20.3878L15.4065 19.037C15.1564 19.3101 15.0326 19.6573 15.0326 19.9996L17.0326 19.9996ZM16.8831 20.3859L23.9638 12.6152L22.4855 11.2681L15.4048 19.0389L16.8831 20.3859ZM23.9636 12.6154C23.7508 12.8488 23.3888 12.866 23.1548 12.6532L24.5006 11.1737C23.9175 10.6434 23.016 10.6862 22.4857 11.2679L23.9636 12.6154ZM23.1548 12.6532C22.9208 12.4404 22.9034 12.0769 23.117 11.8427L24.5947 13.1903C25.1267 12.607 25.0837 11.7041 24.5006 11.1737L23.1548 12.6532ZM23.1167 11.8429L16.2972 19.3261L17.7755 20.6732L24.595 13.1901L23.1167 11.8429ZM16.2972 20.6732L23.1167 28.1567L24.595 26.8096L17.7755 19.3261L16.2972 20.6732ZM23.1145 28.1542C22.9053 27.9232 22.9188 27.5611 23.1549 27.3464L24.5005 28.8261C25.0849 28.2947 25.1239 27.394 24.5973 26.8121L23.1145 28.1542ZM23.1539 27.3473C23.3876 27.1342 23.75 27.1505 23.9636 27.3847L22.4857 28.7322C23.0168 29.3148 23.9195 29.3558 24.5015 28.8252L23.1539 27.3473ZM23.9638 27.385L16.8827 19.6134L15.4043 20.9604L22.4855 28.732L23.9638 27.385ZM16.8829 19.6136C16.9833 19.7238 17.0326 19.8633 17.0326 19.9996L15.0326 19.9996C15.0326 20.3417 15.1561 20.6877 15.4041 20.9601L16.8829 19.6136Z"
                                fill="white"
                                mask="url(#path-2-inside-1_2002_241)"
                              />
                            </svg>
                          </div>
                          <div class="arrow-right  arrow-right2">
                            <svg
                              width="40"
                              height="40"
                              viewBox="0 0 40 40"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <rect
                                y="40"
                                width="40"
                                height="40"
                                rx="20"
                                transform="rotate(-90 0 40)"
                                fill="#213735"
                              />
                              <mask id="path-2-inside-1_2002_239" fill="white">
                                <path
                                  d="M23.9673 20.0004C23.9673 20.1032 23.9302 20.2065 23.8559 20.2876L16.7752 28.0584C16.6165 28.2325 16.3467 28.2453 16.1722 28.0865C15.9976 27.9278 15.9848 27.658 16.144 27.4835L22.9635 20.0004L16.144 12.5168C15.9852 12.3414 15.9981 12.0721 16.1722 11.9138C16.3463 11.755 16.6165 11.7674 16.7752 11.9415L23.8563 19.7131C23.9302 19.7942 23.9673 19.8975 23.9673 20.0004Z"
                                />
                              </mask>
                              <path
                                d="M23.9673 20.0004C23.9673 20.1032 23.9302 20.2065 23.8559 20.2876L16.7752 28.0584C16.6165 28.2325 16.3467 28.2453 16.1722 28.0865C15.9976 27.9278 15.9848 27.658 16.144 27.4835L22.9635 20.0004L16.144 12.5168C15.9852 12.3414 15.9981 12.0721 16.1722 11.9138C16.3463 11.755 16.6165 11.7674 16.7752 11.9415L23.8563 19.7131C23.9302 19.7942 23.9673 19.8975 23.9673 20.0004Z"
                                fill="white"
                              />
                              <path
                                d="M23.8559 20.2876L23.1184 19.6122L23.1168 19.6141L23.8559 20.2876ZM16.7752 28.0584L17.5142 28.7321L17.5144 28.7319L16.7752 28.0584ZM16.144 27.4835L16.8829 28.1573L16.8831 28.1571L16.144 27.4835ZM22.9635 20.0004L23.7026 20.6739L24.3165 20.0004L23.7027 19.3268L22.9635 20.0004ZM16.144 12.5168L15.4026 13.1879L15.4049 13.1904L16.144 12.5168ZM16.1722 11.9138L16.8449 12.6536L16.8459 12.6527L16.1722 11.9138ZM16.7752 11.9415L17.5144 11.268L17.5142 11.2678L16.7752 11.9415ZM23.8563 19.7131L24.5958 19.0399L24.5955 19.0396L23.8563 19.7131ZM22.9673 20.0004C22.9673 19.8637 23.0169 19.7231 23.1184 19.6122L24.5934 20.963C24.8435 20.6899 24.9673 20.3427 24.9673 20.0004H22.9673ZM23.1168 19.6141L16.0361 27.3848L17.5144 28.7319L24.5951 20.9611L23.1168 19.6141ZM16.0363 27.3846C16.2491 27.1512 16.6111 27.134 16.845 27.3468L15.4993 28.8263C16.0823 29.3566 16.9839 29.3138 17.5142 28.7321L16.0363 27.3846ZM16.845 27.3468C17.0791 27.5596 17.0965 27.9231 16.8829 28.1573L15.4051 26.8097C14.8731 27.393 14.9162 28.2959 15.4993 28.8263L16.845 27.3468ZM16.8831 28.1571L23.7026 20.6739L22.2244 19.3268L15.4049 26.8099L16.8831 28.1571ZM23.7027 19.3268L16.8832 11.8433L15.4049 13.1904L22.2244 20.6739L23.7027 19.3268ZM16.8854 11.8458C17.0945 12.0768 17.0811 12.4389 16.8449 12.6536L15.4994 11.1739C14.915 11.7053 14.876 12.606 15.4026 13.1879L16.8854 11.8458ZM16.8459 12.6527C16.6122 12.8658 16.2499 12.8495 16.0363 12.6153L17.5142 11.2678C16.983 10.6852 16.0804 10.6442 15.4984 11.1748L16.8459 12.6527ZM16.036 12.615L23.1172 20.3866L24.5955 19.0396L17.5144 11.268L16.036 12.615ZM23.1169 20.3864C23.0166 20.2762 22.9673 20.1367 22.9673 20.0004H24.9673C24.9673 19.6583 24.8438 19.3123 24.5958 19.0399L23.1169 20.3864Z"
                                fill="white"
                                mask="url(#path-2-inside-1_2002_239)"
                              />
                            </svg>
                          </div>
              
                         
                        </div>
                      </div>
                    </div>
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


        </div>
      </div>
    </div>
   </section>


    
    <div class="main__dark">
    </div>
</main>
<?php get_footer() ?>