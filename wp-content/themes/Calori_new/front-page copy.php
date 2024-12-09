<?php get_header(null, array("announcement" => true, "show_cart" => true)) ?>


<main id="main">
  <?php get_template_part("mini-cart") ?>
  <div class="loading" id="loading">
    <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/loading-gif.gif" alt="loading">
  </div>

  <section class="first-screen section desc" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/fsbg.png);">
    <div class="first-screen-wrapper">
      <div class="offer">
        <h1 class="h1">
          Terveelliset ja maukkaat ateriat
          <span>kotiovellesi toimitettuna</span>
        </h1>

        <div class="offer-text">
          Palvelu, jossa ammattilaiset hoitavat sinulle valmiit ateriat
          tarpeillesi
        </div>

        <a href="#meals" class="btn green">Valitse menu</a>
      </div>
    </div>
  </section>

  <section class="first-screen mob">
    <div class="first-screen-wrapper">
      <img src="<?php echo get_template_directory_uri() ?>/assets/images/fsbg.png" class="first-screen-wrapper_bg" alt="fsbg" />

      <div class="container">
        <div class="offer">
          <h1 class="h1">
            Terveelliset ja maukkaat ateriat
            <span>kotiovellesi toimitettuna</span>
          </h1>

          <div class="offer-text">
            Palvelu, jossa ammattilaiset hoitavat sinulle valmiit ateriat
            tarpeillesi
          </div>

          <a href="#meals" class="btn green">Valitse menu</a>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-wrapper">
        <div class="h2-wrapper">
          <h2 class="h2">How it works</h2>
        </div>

        <div class="how-it-works">
          <div class="how-it-works_item">
            <img
              src="<?php echo get_template_directory_uri() ?>/assets/images/tilaa.png"
              alt="how1"
              class="how-it-works_item_img" />

            <div class="how-it-works_item_text">
              <div class="how-it-works_item_text_title">Tilaa</div>
              <div class="how-it-works_item_text_text">
                Valitse tavoitteellesi sopiva menu ja tilaa itsellesi tai
                paritilaus
              </div>
            </div>
          </div>
          <div class="how-it-works_item">
            <img
              src="<?php echo get_template_directory_uri() ?>/assets/images/tilaa.png"
              alt="how1"
              class="how-it-works_item_img" />

            <div class="how-it-works_item_text">
              <div class="how-it-works_item_text_title">Tilaa</div>
              <div class="how-it-works_item_text_text">
                Valitse tavoitteellesi sopiva menu ja tilaa itsellesi tai
                paritilaus
              </div>
            </div>
          </div>
          <div class="how-it-works_item">
            <img
              src="<?php echo get_template_directory_uri() ?>/assets/images/tilaa.png"
              alt="how1"
              class="how-it-works_item_img" />

            <div class="how-it-works_item_text">
              <div class="how-it-works_item_text_title">Tilaa</div>
              <div class="how-it-works_item_text_text">
                Valitse tavoitteellesi sopiva menu ja tilaa itsellesi tai
                paritilaus
              </div>
            </div>
          </div>
          <div class="how-it-works_item">
            <img
              src="<?php echo get_template_directory_uri() ?>/assets/images/tilaa.png"
              alt="how1"
              class="how-it-works_item_img" />

            <div class="how-it-works_item_text">
              <div class="how-it-works_item_text_title">Tilaa</div>
              <div class="how-it-works_item_text_text">
                Valitse tavoitteellesi sopiva menu ja tilaa itsellesi tai
                paritilaus
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="section" id="meals">
    <div class="container">
      <div class="section-wrapper">
        <div class="h2-wrapper">
          <h2 class="h2">Tutustu ruokalistoihimme</h2>

          <p class="section-text">
            Jopa 56 erilaista ateriaa kahden viikon aikana
          </p>
        </div>

        <div class="menu-swiper-wrap">
          <div class="swiper menuswiper menuswiper1">
            <div class="swiper-wrapper">
              <?php

              // проверяем есть ли в повторителе данные
              if (have_rows('foods', 'options')):

                // перебираем данные
                while (have_rows('foods', 'options')) : the_row();
              ?>

                  <div class="swiper-slide">
                    <a href="#" class="menu-item">
                      <img
                        src="<?php the_sub_field('food_photo'); ?>"
                        alt="food"
                        class="menu-item-bg" />

                      <div class="label">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/toprated.svg" alt="" class="label-ico" />
                        <span class="label-text"> Top rated </span>
                      </div>

                      <div class="menu-item-title"><?php the_sub_field('food_name'); ?></div>
                    </a>
                  </div>

              <?php

                // отображаем вложенные поля


                endwhile;

              else :

              // вложенных полей не найдено

              endif;

              ?>
            </div>
          </div>

          <div class="arrow-left arrow-left1">
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
              <path
                d="M16.144 19.7124L16.8814 20.3878L16.8831 20.3859L16.144 19.7124ZM23.2247 11.9416L22.4857 11.2679L22.4855 11.2681L23.2247 11.9416ZM23.8559 12.5165L23.117 11.8427L23.1167 11.8429L23.8559 12.5165ZM17.0364 19.9996L16.2972 19.3261L15.6834 19.9996L16.2972 20.6732L17.0364 19.9996ZM23.8559 27.4832L24.5973 26.8121L24.595 26.8096L23.8559 27.4832ZM23.8277 28.0862L23.1549 27.3464L23.1539 27.3473L23.8277 28.0862ZM23.2247 28.0585L22.4855 28.732L22.4857 28.7322L23.2247 28.0585ZM16.1435 20.2869L15.4041 20.9601L15.4043 20.9604L16.1435 20.2869ZM17.0326 19.9996C17.0326 20.1363 16.983 20.2769 16.8814 20.3878L15.4065 19.037C15.1564 19.3101 15.0326 19.6573 15.0326 19.9996L17.0326 19.9996ZM16.8831 20.3859L23.9638 12.6152L22.4855 11.2681L15.4048 19.0389L16.8831 20.3859ZM23.9636 12.6154C23.7508 12.8488 23.3888 12.866 23.1548 12.6532L24.5006 11.1737C23.9175 10.6434 23.016 10.6862 22.4857 11.2679L23.9636 12.6154ZM23.1548 12.6532C22.9208 12.4404 22.9034 12.0769 23.117 11.8427L24.5947 13.1903C25.1267 12.607 25.0837 11.7041 24.5006 11.1737L23.1548 12.6532ZM23.1167 11.8429L16.2972 19.3261L17.7755 20.6732L24.595 13.1901L23.1167 11.8429ZM16.2972 20.6732L23.1167 28.1567L24.595 26.8096L17.7755 19.3261L16.2972 20.6732ZM23.1145 28.1542C22.9053 27.9232 22.9188 27.5611 23.1549 27.3464L24.5005 28.8261C25.0849 28.2947 25.1239 27.394 24.5973 26.8121L23.1145 28.1542ZM23.1539 27.3473C23.3876 27.1342 23.75 27.1505 23.9636 27.3847L22.4857 28.7322C23.0168 29.3148 23.9195 29.3558 24.5015 28.8252L23.1539 27.3473ZM23.9638 27.385L16.8827 19.6134L15.4043 20.9604L22.4855 28.732L23.9638 27.385ZM16.8829 19.6136C16.9833 19.7238 17.0326 19.8633 17.0326 19.9996L15.0326 19.9996C15.0326 20.3417 15.1561 20.6877 15.4041 20.9601L16.8829 19.6136Z"
                fill="white"
                mask="url(#path-2-inside-1_2002_241)" />
            </svg>
          </div>
          <div class="arrow-right arrow-right1">
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
              <path
                d="M23.8559 20.2876L23.1184 19.6122L23.1168 19.6141L23.8559 20.2876ZM16.7752 28.0584L17.5142 28.7321L17.5144 28.7319L16.7752 28.0584ZM16.144 27.4835L16.8829 28.1573L16.8831 28.1571L16.144 27.4835ZM22.9635 20.0004L23.7026 20.6739L24.3165 20.0004L23.7027 19.3268L22.9635 20.0004ZM16.144 12.5168L15.4026 13.1879L15.4049 13.1904L16.144 12.5168ZM16.1722 11.9138L16.8449 12.6536L16.8459 12.6527L16.1722 11.9138ZM16.7752 11.9415L17.5144 11.268L17.5142 11.2678L16.7752 11.9415ZM23.8563 19.7131L24.5958 19.0399L24.5955 19.0396L23.8563 19.7131ZM22.9673 20.0004C22.9673 19.8637 23.0169 19.7231 23.1184 19.6122L24.5934 20.963C24.8435 20.6899 24.9673 20.3427 24.9673 20.0004H22.9673ZM23.1168 19.6141L16.0361 27.3848L17.5144 28.7319L24.5951 20.9611L23.1168 19.6141ZM16.0363 27.3846C16.2491 27.1512 16.6111 27.134 16.845 27.3468L15.4993 28.8263C16.0823 29.3566 16.9839 29.3138 17.5142 28.7321L16.0363 27.3846ZM16.845 27.3468C17.0791 27.5596 17.0965 27.9231 16.8829 28.1573L15.4051 26.8097C14.8731 27.393 14.9162 28.2959 15.4993 28.8263L16.845 27.3468ZM16.8831 28.1571L23.7026 20.6739L22.2244 19.3268L15.4049 26.8099L16.8831 28.1571ZM23.7027 19.3268L16.8832 11.8433L15.4049 13.1904L22.2244 20.6739L23.7027 19.3268ZM16.8854 11.8458C17.0945 12.0768 17.0811 12.4389 16.8449 12.6536L15.4994 11.1739C14.915 11.7053 14.876 12.606 15.4026 13.1879L16.8854 11.8458ZM16.8459 12.6527C16.6122 12.8658 16.2499 12.8495 16.0363 12.6153L17.5142 11.2678C16.983 10.6852 16.0804 10.6442 15.4984 11.1748L16.8459 12.6527ZM16.036 12.615L23.1172 20.3866L24.5955 19.0396L17.5144 11.268L16.036 12.615ZM23.1169 20.3864C23.0166 20.2762 22.9673 20.1367 22.9673 20.0004H24.9673C24.9673 19.6583 24.8438 19.3123 24.5958 19.0399L23.1169 20.3864Z"
                fill="white"
                mask="url(#path-2-inside-1_2002_239)" />
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
    </div>
  </section>






  <!-- 
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
                        <?php endforeach;
                    endwhile; ?>
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
    </section> -->





  <section id="order" class="section grey mb0">
    <custom-order class="order">
      <div class="order__container container">
        <div class="order__content">

          <h2 class="h2">Tilaa nyt</h2>

          <p class="section-text mb30">
            Huomaa-lähin toimitus on <span class="nextdate"><?php echo get_field("order_end_day", "option") ?></span>. <br>
            Tilausten vastaanottamisen päättymiseen asti tänä päivänä:
          </p>

          <custom-timer class=" custom-timer"
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


          <div class="order__delivery order-delivery" style="display: none;">
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
                    <input type="radio" name="order-product" class="order-product" id="order-product"
                      data-product-id="<?php echo esc_attr($product->get_id()) ?>" />
                    <label
                      for="order-product"><?php echo esc_html($product->get_name()); ?></label>
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
                                  <h5>

                                    <?php

                                    $attribute_options = wc_get_product_terms($product->get_id(), $attribute->get_name(), ['orderby' => 'menu_order']);

                                    if (!empty($attribute_options)):

                                      echo esc_attr($attribute_options[0]->name);

                                    endif;
                                    ?>
                                  </h5>
                                  <span></span>
                                </div>
                                <div class="custom-select__options">
                                  <?php

                                  $attribute_options = wc_get_product_terms($product->get_id(), $attribute->get_name(), ['orderby' => 'menu_order']);;
                                  if (!empty($attribute_options)):
                                    foreach ($attribute_options as $option):
                                  ?>
                                      <div class="custom-select__option"
                                        data-value="<?php echo esc_attr($option->term_id); ?>">
                                        <?php echo esc_html($option->name) ?>
                                      </div>
                                  <?php endforeach;
                                  endif; ?>
                                </div>
                              </div>
                            </custom-select>
                            <div class="order-block__buttons _desktop">

                            </div>
                            <?php if ($attribute->get_name() == 'pa_kalorimaara') { ?>
                              <div class="order__calculator order-calculator">
                                <p>Etkö tiedä mikä on kaloritarpeesi?</p>
                                <a class="order-calculator__button">Avaa kalorilaskuri</a>
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
                            <?php } ?>
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
                          <div class="price_result">
                            <legend class="order-payment__title order-block-title">Kertamaksu</legend>
                            <div class="order-payment__radiobuttons">
                              <?php if (!$has_subscription_type): ?>
                                <div class="custom-radio order-payment__radio order-radio">
                                  <input type="radio" checked
                                    name="<?php echo "payment-radio_" . esc_attr($variation_obj->get_id()) ?>"
                                    value="<?php echo esc_attr($term->name) ?>" />
                                  <div class="custom-radio__wrapper">
                                    <!-- <span class="custom-radio__bullet"></span>
                                                                  <h3 class="custom-radio__heading"><?php echo esc_html($term->name) ?>
                                                                  </h3> -->
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
                                <?php endif;
                                      endforeach;
                                    endif;
                                  endforeach;
                                endif ?>
                              <?php endif ?>
                            </div>
                          </div>

                          <div class="price_result">
                            <div class="price_result_title">
                              Цена за день
                            </div>
                            <div class="price_result_count">
                              2000
                            </div>
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


        </div>
      </div>
    </custom-order>
  </section>


  <script>
    document.addEventListener('DOMContentLoaded', function() {


      setTimeout(() => {
        $('.radio-sm').click(function() {
          event.preventDefault();
          console.log($(this).find('.order-product').eq(0).prop('checked'))
          if ($(this).find('.order-product').eq(0).prop('checked', false)) {
            $('.order-product').prop('checked', false)
            $(this).find('.order-product').eq(0).prop('checked', true);
            //  $('.order-products__product').removeClass('active');
            //  $(this).addClass('active');
            let ind = $(this).index();
            console.log(ind)
            $('.order__controls').removeClass('_active');
            $('.order__controls').eq(ind).addClass('_active');

            //  $(this).children('.order-product').prop('checked', true);
          }
        })
        $('.order__controls').each(function() {
          $(this).find('.order-block__select').each(function() {
            let fs = $(this).find('.custom-select__option').eq(0).text();
            console.log(fs);
            $(this).find('h5').text(fs);
          })
        })
      }, 1000);
    })
  </script>






  <section class="bigbanner">
    <img src="<?php echo get_template_directory_uri() ?>/assets/images/bigbanner.png" alt="banner" class="bigbanner-bg abs">

    <div class="container">
      <div class="bigbanner-video">
        <div class="bigbanner-video-title">
          Katso video mikä Calori on?
        </div>
        <button data-fancybox data-src="http://calori.ae/wp-content/uploads/2024/12/IMG_6496.mp4" class="btn green">
          Смотреть видео
        </button>
      </div>
    </div>
  </section>


  <section class="section">
    <div class="container">
      <div class="section-wrapper">
        <div class="h2-wrapper">
          <h2 class="h2">
            Meidän edut
          </h2>
        </div>

        <div class="advantages">
          <div class="advantages_item">
            <div class="advantages_item_ico">

            </div>

            <div class="advantages_item_text">
              Спланированно, приготовлено и доставлено
            </div>
          </div>
          <div class="advantages_item">
            <div class="advantages_item_ico">

            </div>

            <div class="advantages_item_text">
              Спланированно, приготовлено и доставлено
            </div>
          </div>
          <div class="advantages_item">
            <div class="advantages_item_ico">

            </div>

            <div class="advantages_item_text">
              Спланированно, приготовлено и доставлено
            </div>
          </div>
          <div class="advantages_item">
            <div class="advantages_item_ico">

            </div>

            <div class="advantages_item_text">
              Спланированно, приготовлено и доставлено
            </div>
          </div>
          <div class="advantages_item">
            <div class="advantages_item_ico">

            </div>

            <div class="advantages_item_text">
              Спланированно, приготовлено и доставлено
            </div>
          </div>
          <div class="advantages_item">
            <div class="advantages_item_ico">

            </div>

            <div class="advantages_item_text">
              Спланированно, приготовлено и доставлено
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
            Kaytossa kiireisilla yrittajilla, vaikuttajilla ja urheilijoila
          </h2>
        </div>

        <div class="reviews swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="reviews-item">
                <div class="reviews-item_rating">
                  <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z" fill="white" />
                  </svg>
                  <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z" fill="white" />
                  </svg>
                  <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z" fill="white" />
                  </svg>
                  <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z" fill="white" />
                  </svg>
                  <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z" fill="white" />
                  </svg>
                </div>

                <div class="reviews-item_text">
                  Maukas helpotus kiireiseen arkeen! Palvelu antoi minulle monta tuntia lisäaikaa muihin arjen askareisiin, vei kiireen pois aamuista ja helpotti säännöllisen syömisen ylläpitoa. Iso suositus!
                </div>

                <div class="reviews-item_author">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/author.png" alt="author" class="reviews-item_author_image">
                  <div class="reviews-item_author_name">
                    Nina Moritz
                  </div>
                  <a href="#" class="reviews-item_author_link">
                    @ninamoritzz
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="reviews-item">
                <div class="reviews-item_rating">
                  <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z" fill="white" />
                  </svg>
                  <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z" fill="white" />
                  </svg>
                  <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z" fill="white" />
                  </svg>
                  <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z" fill="white" />
                  </svg>
                  <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z" fill="white" />
                  </svg>
                </div>

                <div class="reviews-item_text">
                  Maukas helpotus kiireiseen arkeen! Palvelu antoi minulle monta tuntia lisäaikaa muihin arjen askareisiin, vei kiireen pois aamuista ja helpotti säännöllisen syömisen ylläpitoa. Iso suositus!
                </div>

                <div class="reviews-item_author">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/author.png" alt="author" class="reviews-item_author_image">
                  <div class="reviews-item_author_name">
                    Nina Moritz
                  </div>
                  <a href="#" class="reviews-item_author_link">
                    @ninamoritzz
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="reviews-item">
                <div class="reviews-item_rating">
                  <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z" fill="white" />
                  </svg>
                  <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z" fill="white" />
                  </svg>
                  <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z" fill="white" />
                  </svg>
                  <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z" fill="white" />
                  </svg>
                  <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z" fill="white" />
                  </svg>
                </div>

                <div class="reviews-item_text">
                  Maukas helpotus kiireiseen arkeen! Palvelu antoi minulle monta tuntia lisäaikaa muihin arjen askareisiin, vei kiireen pois aamuista ja helpotti säännöllisen syömisen ylläpitoa. Iso suositus!
                </div>

                <div class="reviews-item_author">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/author.png" alt="author" class="reviews-item_author_image">
                  <div class="reviews-item_author_name">
                    Nina Moritz
                  </div>
                  <a href="#" class="reviews-item_author_link">
                    @ninamoritzz
                  </a>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="reviews-item">
                <div class="reviews-item_rating">
                  <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z" fill="white" />
                  </svg>
                  <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z" fill="white" />
                  </svg>
                  <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z" fill="white" />
                  </svg>
                  <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z" fill="white" />
                  </svg>
                  <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z" fill="white" />
                  </svg>
                </div>

                <div class="reviews-item_text">
                  Maukas helpotus kiireiseen arkeen! Palvelu antoi minulle monta tuntia lisäaikaa muihin arjen askareisiin, vei kiireen pois aamuista ja helpotti säännöllisen syömisen ylläpitoa. Iso suositus!
                </div>

                <div class="reviews-item_author">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/author.png" alt="author" class="reviews-item_author_image">
                  <div class="reviews-item_author_name">
                    Nina Moritz
                  </div>
                  <a href="#" class="reviews-item_author_link">
                    @ninamoritzz
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- <div class="reviews-links">
          <div class="reviews-links_text">
            Voit lukea lisää arvosteluja alla olevista linkeistä.
          </div>
          <div class="reviews-links-items">
            <a href="#" class="item">
              <img src="images/bigbanner.png" alt="" class="item_img">
            </a>
            <a href="#" class="item">
              <img src="images/bigbanner.png" alt="" class="item_img">
            </a>
            <a href="#" class="item">
              <img src="images/bigbanner.png" alt="" class="item_img">
            </a>
          </div>
        </div> -->
      </div>
    </div>
  </section>

  <section class="section grey ">
    <div class="container">
      <div class="section-wrapper">
        <div class="whywe swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="whywe_item">
                <div class="whywe_item_ico">

                </div>
                <span class="whywe_item_text">
                  Вкусная и полезная еда
                </span>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="whywe_item">
                <div class="whywe_item_ico">

                </div>
                <span class="whywe_item_text">
                  Вкусная и полезная еда
                </span>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="whywe_item">
                <div class="whywe_item_ico">

                </div>
                <span class="whywe_item_text">
                  Вкусная и полезная еда
                </span>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="whywe_item">
                <div class="whywe_item_ico">

                </div>
                <span class="whywe_item_text">
                  Вкусная и полезная еда
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
  <div class="main__dark"></div>
</main>
<?php get_footer() ?>