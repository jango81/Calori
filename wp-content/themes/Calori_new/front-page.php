<?php get_header(null, array("announcement" => true, "show_cart" => true)) ?>


<main id="main">
  <?php get_template_part("mini-cart") ?>
  <div class="loading" id="loading">
    <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/loading-gif.gif" alt="loading">
  </div>

  <section class="first-screen section desc"
    style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/fsnew1.jpg);">
    <div class="first-screen-wrapper">
      <div class="offer">
        <h1 class="h1">
        Aloita uusi vuosi 
          <span>terveellisillä ja maukkailla ruoilla</span>
        </h1>

        <div class="offer-text">
        Me suunnittelemme, kokkaamme ja toimitamme ruoat kotiovelle
        </div>

        <a href="#meals" class="btn green">Tee tilaus</a>
      </div>
    </div>
  </section>

  <section class="first-screen mob">
    <div class="first-screen-wrapper">
      <img src="<?php echo get_template_directory_uri() ?>/assets/images/fsnew2.jpg" class="first-screen-wrapper_bg"
        alt="fsbg" />

      <div class="container">
        <div class="offer">
          <h1 class="h1">
          Aloita uusi vuosi 
            <span>terveellisillä ja maukkailla ruoilla</span>
          </h1>

          <div class="offer-text">
          Me suunnittelemme, kokkaamme ja toimitamme ruoat kotiovelle
          </div>

          <a href="#meals" class="btn green">Tee tilaus</a>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-wrapper">
        <div class="h2-wrapper">
          <h2 class="h2">Miten se toimii?</h2>
        </div>

        <div class="how-it-works twocol">
          <div class="how-it-works_item">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/tilaa.png" alt="how1"
              class="how-it-works_item_img" />

            <div class="how-it-works_item_text">
              <div class="how-it-works_item_text_title">Tilaa</div>
              <div class="how-it-works_item_text_text">
              Valitse sopiva ruokatilaus
              </div>
            </div>
          </div>
          <div class="how-it-works_item">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/how3.png" alt="how2"
              class="how-it-works_item_img" />

            <div class="how-it-works_item_text">
              <div class="how-it-works_item_text_title">Kokkaamme</div>
              <div class="how-it-works_item_text_text">
              Kokkaamme sen mukaan ruokia
              </div>
            </div>
          </div>
          <div class="how-it-works_item">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/how2.png" alt="how3"
              class="how-it-works_item_img" />

            <div class="how-it-works_item_text">
              <div class="how-it-works_item_text_title">Toimitamme</div>
              <div class="how-it-works_item_text_text">
              Toimitamme kotiin kahdesti viikossa
              </div>
            </div>
          </div>
          <div class="how-it-works_item">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/tilaa2.png" alt="how4"
              class="how-it-works_item_img" />

            <div class="how-it-works_item_text">
              <div class="how-it-works_item_text_title">Nauti</div>
              <div class="how-it-works_item_text_text">
              Nauti ruoasta ja sen helppoudesta
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
          Kaikki ruuat tehdään käsin, suosien kotimaisia raaka-aineita
          </p>
        </div>

        <div class="menu-swiper-wrap">
          <div class="swiper menuswiper menuswiper_10">
            <div class="swiper-wrapper">
              <?php

              // проверяем есть ли в повторителе данные
              if (have_rows('foods', 'options')):
                $a = 0;
                // перебираем данные
                while (have_rows('foods', 'options')):
                  the_row();
                  ?>

                  <div class="swiper-slide">
                    <a data-fancybox="" data-src="#menuitem<?php echo $a; ?>" class="menu-item">
                      <img src="<?php the_sub_field('food_photo'); ?>" alt="food" class="menu-item-bg skip-lazy" />

                      <div class="label">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/toprated.svg" alt=""
                          class="label-ico" />
                        <span class="label-text"> Suosikki </span>
                      </div>

                      <div class="menu-item-title"><?php the_sub_field('food_name'); ?></div>
                      <div class="menu-item-which"><?php the_sub_field('meal_of_day'); ?></div>
                    </a>
                    <div id="menuitem<?php echo $a; ?>" class="menupopup" style="display:none;max-width:500px;">
                      <!-- <button data-fancybox-close="" class="f-button is-close-btn" title="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" tabindex="-1"><path d="M20 20L4 4m16 0L4 20"></path></svg></button> -->

                      <img src="<?php the_sub_field('food_photo2'); ?>" class="menu-item-bg1" alt="food">
                      <div class="menupopup-wrap">



                        <div class="menupopup-wrap_title"><?php the_sub_field('food_name'); ?></div>
                        <div class="menupopup-wrap_text">
                          <?php the_sub_field('краткое_описание'); ?>
                        </div>

                        <div class="menupopup-wrap_ingr">
                          <?php the_sub_field('meal_ingredients'); ?>
                        </div>

                        <!-- <div class="menupopup-wrap_kbgu">
                          <div class="item">
                            <div class="item-title">
                              КБЖУ на 1500:
                            </div>
                            <div class="item-val">
                              <?php the_sub_field('кбжу_на_1500'); ?>
                            </div>
                          </div>
                          <div class="item">
                            <div class="item-title">
                              КБЖУ на 2000:
                            </div>
                            <div class="item-val">
                              <?php the_sub_field('кбжу_на_2000'); ?>
                            </div>
                          </div>
                          <div class="item">
                            <div class="item-title">
                              КБЖУ на 2500:
                            </div>
                            <div class="item-val">
                              <?php the_sub_field('кбжу_на_2500'); ?>
                            </div>
                          </div>
                        </div> -->
                      </div>
                    </div>
                  </div>
                  <?php $a++; ?>
                  <?php

                  // отображаем вложенные поля
              

                endwhile;

              else:

                // вложенных полей не найдено
              
              endif;

              ?>
            </div>
          </div>

          <div class="arrow-left arrow-left_1">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="40" width="40" height="40" rx="20" transform="rotate(90 40 0)" fill="#213735" />
              <mask id="path-2-inside-1_2002_241" fill="white">
                <path
                  d="M16.0326 19.9996C16.0326 19.8968 16.0697 19.7935 16.144 19.7124L23.2247 11.9416C23.3834 11.7675 23.6531 11.7547 23.8277 11.9135C24.0023 12.0722 24.0151 12.342 23.8559 12.5165L17.0364 19.9996L23.8559 27.4832C24.0146 27.6586 24.0018 27.9279 23.8277 28.0862C23.6536 28.245 23.3834 28.2326 23.2247 28.0585L16.1435 20.2869C16.0697 20.2058 16.0326 20.1025 16.0326 19.9996Z" />
              </mask>
              <path
                d="M16.0326 19.9996C16.0326 19.8968 16.0697 19.7935 16.144 19.7124L23.2247 11.9416C23.3834 11.7675 23.6531 11.7547 23.8277 11.9135C24.0023 12.0722 24.0151 12.342 23.8559 12.5165L17.0364 19.9996L23.8559 27.4832C24.0146 27.6586 24.0018 27.9279 23.8277 28.0862C23.6536 28.245 23.3834 28.2326 23.2247 28.0585L16.1435 20.2869C16.0697 20.2058 16.0326 20.1025 16.0326 19.9996Z"
                fill="white" />
              <path
                d="M16.144 19.7124L16.8814 20.3878L16.8831 20.3859L16.144 19.7124ZM23.2247 11.9416L22.4857 11.2679L22.4855 11.2681L23.2247 11.9416ZM23.8559 12.5165L23.117 11.8427L23.1167 11.8429L23.8559 12.5165ZM17.0364 19.9996L16.2972 19.3261L15.6834 19.9996L16.2972 20.6732L17.0364 19.9996ZM23.8559 27.4832L24.5973 26.8121L24.595 26.8096L23.8559 27.4832ZM23.8277 28.0862L23.1549 27.3464L23.1539 27.3473L23.8277 28.0862ZM23.2247 28.0585L22.4855 28.732L22.4857 28.7322L23.2247 28.0585ZM16.1435 20.2869L15.4041 20.9601L15.4043 20.9604L16.1435 20.2869ZM17.0326 19.9996C17.0326 20.1363 16.983 20.2769 16.8814 20.3878L15.4065 19.037C15.1564 19.3101 15.0326 19.6573 15.0326 19.9996L17.0326 19.9996ZM16.8831 20.3859L23.9638 12.6152L22.4855 11.2681L15.4048 19.0389L16.8831 20.3859ZM23.9636 12.6154C23.7508 12.8488 23.3888 12.866 23.1548 12.6532L24.5006 11.1737C23.9175 10.6434 23.016 10.6862 22.4857 11.2679L23.9636 12.6154ZM23.1548 12.6532C22.9208 12.4404 22.9034 12.0769 23.117 11.8427L24.5947 13.1903C25.1267 12.607 25.0837 11.7041 24.5006 11.1737L23.1548 12.6532ZM23.1167 11.8429L16.2972 19.3261L17.7755 20.6732L24.595 13.1901L23.1167 11.8429ZM16.2972 20.6732L23.1167 28.1567L24.595 26.8096L17.7755 19.3261L16.2972 20.6732ZM23.1145 28.1542C22.9053 27.9232 22.9188 27.5611 23.1549 27.3464L24.5005 28.8261C25.0849 28.2947 25.1239 27.394 24.5973 26.8121L23.1145 28.1542ZM23.1539 27.3473C23.3876 27.1342 23.75 27.1505 23.9636 27.3847L22.4857 28.7322C23.0168 29.3148 23.9195 29.3558 24.5015 28.8252L23.1539 27.3473ZM23.9638 27.385L16.8827 19.6134L15.4043 20.9604L22.4855 28.732L23.9638 27.385ZM16.8829 19.6136C16.9833 19.7238 17.0326 19.8633 17.0326 19.9996L15.0326 19.9996C15.0326 20.3417 15.1561 20.6877 15.4041 20.9601L16.8829 19.6136Z"
                fill="white" mask="url(#path-2-inside-1_2002_241)" />
            </svg>
          </div>
          <div class="arrow-right arrow-right_1">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect y="40" width="40" height="40" rx="20" transform="rotate(-90 0 40)" fill="#213735" />
              <mask id="path-2-inside-1_2002_239" fill="white">
                <path
                  d="M23.9673 20.0004C23.9673 20.1032 23.9302 20.2065 23.8559 20.2876L16.7752 28.0584C16.6165 28.2325 16.3467 28.2453 16.1722 28.0865C15.9976 27.9278 15.9848 27.658 16.144 27.4835L22.9635 20.0004L16.144 12.5168C15.9852 12.3414 15.9981 12.0721 16.1722 11.9138C16.3463 11.755 16.6165 11.7674 16.7752 11.9415L23.8563 19.7131C23.9302 19.7942 23.9673 19.8975 23.9673 20.0004Z" />
              </mask>
              <path
                d="M23.9673 20.0004C23.9673 20.1032 23.9302 20.2065 23.8559 20.2876L16.7752 28.0584C16.6165 28.2325 16.3467 28.2453 16.1722 28.0865C15.9976 27.9278 15.9848 27.658 16.144 27.4835L22.9635 20.0004L16.144 12.5168C15.9852 12.3414 15.9981 12.0721 16.1722 11.9138C16.3463 11.755 16.6165 11.7674 16.7752 11.9415L23.8563 19.7131C23.9302 19.7942 23.9673 19.8975 23.9673 20.0004Z"
                fill="white" />
              <path
                d="M23.8559 20.2876L23.1184 19.6122L23.1168 19.6141L23.8559 20.2876ZM16.7752 28.0584L17.5142 28.7321L17.5144 28.7319L16.7752 28.0584ZM16.144 27.4835L16.8829 28.1573L16.8831 28.1571L16.144 27.4835ZM22.9635 20.0004L23.7026 20.6739L24.3165 20.0004L23.7027 19.3268L22.9635 20.0004ZM16.144 12.5168L15.4026 13.1879L15.4049 13.1904L16.144 12.5168ZM16.1722 11.9138L16.8449 12.6536L16.8459 12.6527L16.1722 11.9138ZM16.7752 11.9415L17.5144 11.268L17.5142 11.2678L16.7752 11.9415ZM23.8563 19.7131L24.5958 19.0399L24.5955 19.0396L23.8563 19.7131ZM22.9673 20.0004C22.9673 19.8637 23.0169 19.7231 23.1184 19.6122L24.5934 20.963C24.8435 20.6899 24.9673 20.3427 24.9673 20.0004H22.9673ZM23.1168 19.6141L16.0361 27.3848L17.5144 28.7319L24.5951 20.9611L23.1168 19.6141ZM16.0363 27.3846C16.2491 27.1512 16.6111 27.134 16.845 27.3468L15.4993 28.8263C16.0823 29.3566 16.9839 29.3138 17.5142 28.7321L16.0363 27.3846ZM16.845 27.3468C17.0791 27.5596 17.0965 27.9231 16.8829 28.1573L15.4051 26.8097C14.8731 27.393 14.9162 28.2959 15.4993 28.8263L16.845 27.3468ZM16.8831 28.1571L23.7026 20.6739L22.2244 19.3268L15.4049 26.8099L16.8831 28.1571ZM23.7027 19.3268L16.8832 11.8433L15.4049 13.1904L22.2244 20.6739L23.7027 19.3268ZM16.8854 11.8458C17.0945 12.0768 17.0811 12.4389 16.8449 12.6536L15.4994 11.1739C14.915 11.7053 14.876 12.606 15.4026 13.1879L16.8854 11.8458ZM16.8459 12.6527C16.6122 12.8658 16.2499 12.8495 16.0363 12.6153L17.5142 11.2678C16.983 10.6852 16.0804 10.6442 15.4984 11.1748L16.8459 12.6527ZM16.036 12.615L23.1172 20.3866L24.5955 19.0396L17.5144 11.268L16.036 12.615ZM23.1169 20.3864C23.0166 20.2762 22.9673 20.1367 22.9673 20.0004H24.9673C24.9673 19.6583 24.8438 19.3123 24.5958 19.0399L23.1169 20.3864Z"
                fill="white" mask="url(#path-2-inside-1_2002_239)" />
            </svg>
          </div>

          <div class="menu-more-btn">
            <p class="menu-more-btn-text">
            Yli 60 erilaista ateriaa
            </p>
            <a href="/ruokalistat/" class="btn green"> Katso koko ruokalista </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      let a = 1;
      var menuswiper = new Swiper('.menuswiper_10', {
        slidesPerView: 4,
        spaceBetween: 24,
        loop: true,
        navigation: {
          nextEl: ".arrow-right_1",
          prevEl: ".arrow-left_1",
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


  </script>





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


 <section class="bigbanner timer mb0">
      <div class="timer-wrap newbanner">
        <div class="banner-title newbanner-title">
          Uusi vuosi, <span>uusi sinä</span>
        </div>
        <div class="banner-text newbanner-text">
          Seuraava toimitus on <span>Perjantai 3.1.2024</span>. <br><br>
          Tee tilaus ennen uutta vuotta, ja saat 50€ alennuksen tilauksestasi koodilla:
        </div>

        <button class="promo">
          CALORI25
        </button>
        
        <div class="banner-after-text">
          Koodi voimassa 18.12-31.12.2024, minimitilaus 100€.
        </div>
      </div>
      <img src="<?php echo get_template_directory_uri() ?>/assets/images/banner11.png" alt="banner" class="bigbanner-bg abs">
     </section>


  <section id="order" class="section grey mb0">
    <custom-order class="order">
      <div class="order__container container">
        <div class="order__content">

          <h2 class="h2">Tilaa nyt</h2>

          <p class="section-text mb30">
          Huomaa, lähin toimituspäivä on <span class="nextdate"><?php echo get_field("order_end_day", "option") ?></span>.

Tilauksien vastaanottamiset lähimmälle toimitukselle sulkeutuvat:
           
          </p>

          <custom-timer class=" custom-timer" data-day="<?php echo get_field("order_end_day", "option") ?>"
            data-time="<?php echo get_field("order_end_time", "option") ?>">
            <h4 class="custom-timer__title" style="display: none;">Tilaukset sulkeutuvat tiistaisin klo 14.30</h4>
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
              <svg fill="#d3d3d3" width="800px" height="800px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
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
                    <label for="order-product"><?php echo esc_html($product->get_name()); ?></label>
                  </span>
                <?php endforeach; ?>
              </div>
              <?php foreach ($products as $product):
                $product_attributes = $product->get_attributes();
                $product_variations = $product->get_available_variations();

                ?>
                <div class="order__controls" data-product-id="<?php echo esc_attr($product->get_id()) ?>">
                  <div class="product-wrap">
                    <div class="order__settings">
                      <?php
                      $product_attributes = $product->get_attributes();
                      if (!empty($product_attributes)): ?>
                        <?php foreach ($product_attributes as $attribute):
                          $current_select_class = $attribute->get_name() !== "pa_tilauksen-kesto" ? "variant-select" : "show-price-tags";
                          if ($attribute->get_name() === "pa_maksu-tyyppi")
                            continue; ?>
                          <fieldset class="order-block order__variant" data-current-variant="">
                            <legend class="order-block__title">
                              <?php echo esc_html(wc_attribute_label($attribute->get_name())); ?>
                            </legend>
                            <custom-select class="custom-select order-block__select <?php echo $current_select_class ?>"
                              data-heading="" data-value="" data-variant-name="<?php echo $attribute->get_name() ?>">
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
                                  <div class="arrow">
                                    <svg width="17" height="9" viewBox="0 0 17 9" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <mask id="path-1-inside-1_2003_50" fill="white">
                                        <path
                                          d="M8.802 8.46731C8.69915 8.46731 8.59587 8.43018 8.51478 8.35592L0.744003 1.27522C0.569877 1.11646 0.557074 0.846732 0.715836 0.672179C0.874597 0.497626 1.14432 0.484823 1.31887 0.644011L8.802 7.46352L16.2856 0.644011C16.461 0.485249 16.7303 0.498053 16.8886 0.672179C17.0474 0.846305 17.035 1.11646 16.8609 1.27522L9.08923 8.35635C9.00814 8.43018 8.90486 8.46731 8.802 8.46731Z" />
                                      </mask>
                                      <path
                                        d="M8.802 8.46731C8.69915 8.46731 8.59587 8.43018 8.51478 8.35592L0.744003 1.27522C0.569877 1.11646 0.557074 0.846732 0.715836 0.672179C0.874597 0.497626 1.14432 0.484823 1.31887 0.644011L8.802 7.46352L16.2856 0.644011C16.461 0.485249 16.7303 0.498053 16.8886 0.672179C17.0474 0.846305 17.035 1.11646 16.8609 1.27522L9.08923 8.35635C9.00814 8.43018 8.90486 8.46731 8.802 8.46731Z"
                                        fill="white" />
                                      <path
                                        d="M8.51478 8.35592L9.19016 7.61844L9.18831 7.61676L8.51478 8.35592ZM0.744003 1.27522L0.0702479 2.01417L0.0704787 2.01438L0.744003 1.27522ZM1.31887 0.644011L0.645031 1.38289L0.6453 1.38313L1.31887 0.644011ZM8.802 7.46352L8.12843 8.20264L8.80198 8.81647L9.47556 8.20266L8.802 7.46352ZM16.2856 0.644011L15.6145 -0.0973993L15.612 -0.0951279L16.2856 0.644011ZM16.8886 0.672179L16.1487 1.34494L16.1496 1.34593L16.8886 0.672179ZM16.8609 1.27522L17.5344 2.0144L17.5346 2.01417L16.8609 1.27522ZM9.08923 8.35635L9.76248 9.09576L9.76273 9.09553L9.08923 8.35635ZM8.802 7.46731C8.93863 7.46731 9.07922 7.51685 9.19016 7.61844L7.83941 9.0934C8.11252 9.34351 8.45967 9.46731 8.802 9.46731V7.46731ZM9.18831 7.61676L1.41753 0.536053L0.0704787 2.01438L7.84126 9.09509L9.18831 7.61676ZM1.41776 0.536264C1.65114 0.749058 1.66836 1.11112 1.45561 1.34503L-0.0239418 -0.000672758C-0.554215 0.582344 -0.511389 1.48385 0.0702479 2.01417L1.41776 0.536264ZM1.45561 1.34503C1.24272 1.5791 0.879267 1.59651 0.645031 1.38289L1.99272 -0.094864C1.40938 -0.626861 0.506475 -0.583848 -0.0239418 -0.000672758L1.45561 1.34503ZM0.6453 1.38313L8.12843 8.20264L9.47558 6.7244L1.99245 -0.0951087L0.6453 1.38313ZM9.47556 8.20266L16.9591 1.38315L15.612 -0.0951279L8.12845 6.72438L9.47556 8.20266ZM16.9566 1.38542C16.7256 1.59454 16.3635 1.5811 16.1487 1.34494L17.6285 -0.000582993C17.097 -0.584998 16.1964 -0.624041 15.6145 -0.0973951L16.9566 1.38542ZM16.1496 1.34593C15.9366 1.11224 15.9528 0.749874 16.1871 0.536264L17.5346 2.01417C18.1171 1.48304 18.1581 0.580371 17.6276 -0.0015738L16.1496 1.34593ZM16.1874 0.536037L8.41572 7.61717L9.76273 9.09553L17.5344 2.0144L16.1874 0.536037ZM8.41597 7.61694C8.52618 7.51659 8.66566 7.46731 8.802 7.46731V9.46731C9.14405 9.46731 9.4901 9.34377 9.76248 9.09576L8.41597 7.61694Z"
                                        fill="#213735" mask="url(#path-1-inside-1_2003_50)" />
                                    </svg>

                                  </div>
                                </div>
                                <div class="custom-select__options">
                                  <?php

                                  $attribute_options = wc_get_product_terms($product->get_id(), $attribute->get_name(), ['orderby' => 'menu_order']);
                                  ;
                                  if (!empty($attribute_options)):
                                    foreach ($attribute_options as $option):
                                      ?>
                                      <div class="custom-select__option" data-value="<?php echo esc_attr($option->term_id); ?>">
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
                                <a  class="order-calculator__button">Avaa kalorilaskuri</a>

                              </div>
                            <?php } ?>
                          </fieldset>
                        <?php endforeach; ?>
                      <?php endif; ?>
                      <?php
                      if (have_rows("exclusion_of_ingredients", "option")): ?>
                      <?php $a=0;?>
                        <fieldset class="order-block">
                          <legend class="order-block__title">Poista raaka-aineita</legend>

                          <?php while (have_rows("exclusion_of_ingredients", "option")):
                            the_row();
                            $exclusion_ingredients = get_sub_field("ingredient_name");
                            error_log(print_r($exclusion_ingredients, true)); ?>
                            <div class="check-box">
                              <input type="checkbox" name="exclusion-ingredients" id="exclusion-ingredients<?=$a;?>"
                                data-ingredient="<?php echo esc_attr($exclusion_ingredients) ?>" />
                              <label for="exclusion-ingredients<?=$a;?>"><?php echo esc_html($exclusion_ingredients) ?></label>
                            </div>
                            <?php $a++;?>
                          <?php endwhile; ?>
                        </fieldset>
                      <?php endif ?>
                      <?php
                      $delivery_day = get_field("available_delivery_days", "option");
                      if (!empty($delivery_day)):
                        $values = array_map(function ($item) {
                          return explode(':', $item)[1];
                        }, $delivery_day);
                        ?>
                        <!-- <fieldset class="order-block">
                          <legend class="order-block__title">Выберите день первой доставки</legend>

                          <?php if (!empty($values)): ?>
                            <custom-select class="custom-select order-block__select delivery-time-select"
                              data-heading="" data-value="">
                              <select name="order-variants"></select>
                              <div class="custom-select__wrapper">
                                <div class="custom-select__value">
                                  <h5>
                                  </h5>
                                  <div class="arrow">
                                    <svg width="17" height="9" viewBox="0 0 17 9" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <mask id="path-1-inside-1_2003_50" fill="white">
                                        <path
                                          d="M8.802 8.46731C8.69915 8.46731 8.59587 8.43018 8.51478 8.35592L0.744003 1.27522C0.569877 1.11646 0.557074 0.846732 0.715836 0.672179C0.874597 0.497626 1.14432 0.484823 1.31887 0.644011L8.802 7.46352L16.2856 0.644011C16.461 0.485249 16.7303 0.498053 16.8886 0.672179C17.0474 0.846305 17.035 1.11646 16.8609 1.27522L9.08923 8.35635C9.00814 8.43018 8.90486 8.46731 8.802 8.46731Z" />
                                      </mask>
                                      <path
                                        d="M8.802 8.46731C8.69915 8.46731 8.59587 8.43018 8.51478 8.35592L0.744003 1.27522C0.569877 1.11646 0.557074 0.846732 0.715836 0.672179C0.874597 0.497626 1.14432 0.484823 1.31887 0.644011L8.802 7.46352L16.2856 0.644011C16.461 0.485249 16.7303 0.498053 16.8886 0.672179C17.0474 0.846305 17.035 1.11646 16.8609 1.27522L9.08923 8.35635C9.00814 8.43018 8.90486 8.46731 8.802 8.46731Z"
                                        fill="white" />
                                      <path
                                        d="M8.51478 8.35592L9.19016 7.61844L9.18831 7.61676L8.51478 8.35592ZM0.744003 1.27522L0.0702479 2.01417L0.0704787 2.01438L0.744003 1.27522ZM1.31887 0.644011L0.645031 1.38289L0.6453 1.38313L1.31887 0.644011ZM8.802 7.46352L8.12843 8.20264L8.80198 8.81647L9.47556 8.20266L8.802 7.46352ZM16.2856 0.644011L15.6145 -0.0973993L15.612 -0.0951279L16.2856 0.644011ZM16.8886 0.672179L16.1487 1.34494L16.1496 1.34593L16.8886 0.672179ZM16.8609 1.27522L17.5344 2.0144L17.5346 2.01417L16.8609 1.27522ZM9.08923 8.35635L9.76248 9.09576L9.76273 9.09553L9.08923 8.35635ZM8.802 7.46731C8.93863 7.46731 9.07922 7.51685 9.19016 7.61844L7.83941 9.0934C8.11252 9.34351 8.45967 9.46731 8.802 9.46731V7.46731ZM9.18831 7.61676L1.41753 0.536053L0.0704787 2.01438L7.84126 9.09509L9.18831 7.61676ZM1.41776 0.536264C1.65114 0.749058 1.66836 1.11112 1.45561 1.34503L-0.0239418 -0.000672758C-0.554215 0.582344 -0.511389 1.48385 0.0702479 2.01417L1.41776 0.536264ZM1.45561 1.34503C1.24272 1.5791 0.879267 1.59651 0.645031 1.38289L1.99272 -0.094864C1.40938 -0.626861 0.506475 -0.583848 -0.0239418 -0.000672758L1.45561 1.34503ZM0.6453 1.38313L8.12843 8.20264L9.47558 6.7244L1.99245 -0.0951087L0.6453 1.38313ZM9.47556 8.20266L16.9591 1.38315L15.612 -0.0951279L8.12845 6.72438L9.47556 8.20266ZM16.9566 1.38542C16.7256 1.59454 16.3635 1.5811 16.1487 1.34494L17.6285 -0.000582993C17.097 -0.584998 16.1964 -0.624041 15.6145 -0.0973951L16.9566 1.38542ZM16.1496 1.34593C15.9366 1.11224 15.9528 0.749874 16.1871 0.536264L17.5346 2.01417C18.1171 1.48304 18.1581 0.580371 17.6276 -0.0015738L16.1496 1.34593ZM16.1874 0.536037L8.41572 7.61717L9.76273 9.09553L17.5344 2.0144L16.1874 0.536037ZM8.41597 7.61694C8.52618 7.51659 8.66566 7.46731 8.802 7.46731V9.46731C9.14405 9.46731 9.4901 9.34377 9.76248 9.09576L8.41597 7.61694Z"
                                        fill="#213735" mask="url(#path-1-inside-1_2003_50)" />
                                    </svg>

                                  </div>
                                </div>
                                <div class="custom-select__options">
                                  <?php foreach ($values as $value): ?>
                                    <div class="custom-select__option" data-value="<?php echo esc_attr($value); ?>">
                                      <?php echo esc_html($value) ?>
                                    </div>
                                  <?php endforeach; ?>
                                </div>
                              </div>
                            </custom-select>
                          <?php endif; ?>

                        </fieldset> -->
                      <?php endif; ?>
                    </div>
                    <div class="order__details">
                      <?php
                      foreach ($product_variations as $variant):
                        $has_subscription_type = true;
                        $variation_id = $variant["variation_id"];
                        $customproce = isset($variant["price_for_day"]) ? $variant["price_for_day"] : null; 
                        $customproce1 = isset($variant["price_for_one"]) ? $variant["price_for_one"] : null;
                        // print_r($variant);
                        // echo $customproce;
                        // echo $customproce1;
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
                          <?php if ($customproce): ?>
                            <div class="price_result">
                              <div class="price_result_title">
                              Päivän hinta
                              </div>
                              <div class="price_result_count">
                                <?php echo $customproce; ?>

                              </div>
                            </div>
                          <?php endif; ?>
                          <?php if ($customproce1): ?>
                            <div class="price_result">
                              <div class="price_result_title">
                              Aterian hinta
                              </div>
                              <div class="price_result_count">
                                <?php echo $customproce1; ?>

                              </div>
                            </div>
                          <?php endif; ?>
                        </fieldset>
                      <?php endforeach; ?>
                      <div class="order__buttons">
                        <button class="btn btn-solid btn-medium order-cart__button" type="submit">
                          <span class="btn-text">Lisää ostoskoriin</span>
                        </button>
                      </div>

                      <div class="info-delivery-wrap">
                        <button class="btn gborder" data-fancybox data-src="#delivery-info">
                        <svg width="33" height="34" viewBox="0 0 33 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect y="0.5" width="33" height="33" rx="6.47059" fill="#2F4F4C"/>
                          <path d="M18.4412 23.794C17.906 23.794 17.4706 24.2295 17.4706 24.7646C17.4706 25.2998 17.906 25.7352 18.4412 25.7352C18.9763 25.7352 19.4118 25.2998 19.4118 24.7646C19.4118 24.2295 18.9763 23.794 18.4412 23.794ZM18.4412 25.0882C18.3579 25.0844 18.2792 25.0487 18.2216 24.9885C18.1639 24.9282 18.1318 24.848 18.1318 24.7646C18.1318 24.6812 18.1639 24.6011 18.2216 24.5408C18.2792 24.4805 18.3579 24.4448 18.4412 24.4411C18.5245 24.4448 18.6031 24.4805 18.6608 24.5408C18.7184 24.6011 18.7505 24.6812 18.7505 24.7646C18.7505 24.848 18.7184 24.9282 18.6608 24.9885C18.6031 25.0487 18.5245 25.0844 18.4412 25.0882ZM10.6765 23.794C10.1413 23.794 9.70587 24.2295 9.70587 24.7646C9.70587 25.2998 10.1413 25.7352 10.6765 25.7352C11.2116 25.7352 11.647 25.2998 11.647 24.7646C11.647 24.2295 11.2116 23.794 10.6765 23.794ZM10.6765 25.0882C10.5932 25.0844 10.5145 25.0487 10.4569 24.9885C10.3992 24.9282 10.3671 24.848 10.3671 24.7646C10.3671 24.6812 10.3992 24.6011 10.4569 24.5408C10.5145 24.4805 10.5932 24.4448 10.6765 24.4411C10.7598 24.4448 10.8384 24.4805 10.896 24.5408C10.9537 24.6011 10.9858 24.6812 10.9858 24.7646C10.9858 24.848 10.9537 24.9282 10.896 24.9885C10.8384 25.0487 10.7598 25.0844 10.6765 25.0882ZM11.3235 12.147C11.8586 12.147 12.2941 11.7115 12.2941 11.1764C12.2941 10.6413 11.8586 10.2058 11.3235 10.2058C10.7884 10.2058 10.3529 10.6413 10.3529 11.1764C10.3529 11.7115 10.7884 12.147 11.3235 12.147ZM11.3235 10.8529C11.3876 10.8528 11.4503 10.8718 11.5036 10.9073C11.5569 10.9429 11.5984 10.9934 11.623 11.0526C11.6475 11.1118 11.654 11.177 11.6415 11.2398C11.629 11.3027 11.5982 11.3604 11.5528 11.4057C11.5075 11.451 11.4498 11.4819 11.3869 11.4944C11.3241 11.5069 11.2589 11.5004 11.1998 11.4759C11.1406 11.4513 11.09 11.4098 11.0544 11.3564C11.0189 11.3031 10.9999 11.2405 11 11.1764C11 10.9978 11.1453 10.8529 11.3235 10.8529ZM24.2647 18.6176C23.7296 18.6176 23.2941 19.053 23.2941 19.5882C23.2941 20.1233 23.7296 20.5588 24.2647 20.5588C24.7998 20.5588 25.2353 20.1233 25.2353 19.5882C25.2353 19.053 24.7998 18.6176 24.2647 18.6176ZM24.2647 19.9117C24.1814 19.908 24.1027 19.8723 24.0451 19.812C23.9875 19.7517 23.9553 19.6715 23.9553 19.5882C23.9553 19.5048 23.9875 19.4246 24.0451 19.3643C24.1027 19.3041 24.1814 19.2684 24.2647 19.2646C24.348 19.2684 24.4267 19.3041 24.4843 19.3643C24.5419 19.4246 24.5741 19.5048 24.5741 19.5882C24.5741 19.6715 24.5419 19.7517 24.4843 19.812C24.4267 19.8723 24.348 19.908 24.2647 19.9117Z" fill="white"/>
                          <path d="M24.574 17.3473C24.5788 17.2314 24.5882 17.1156 24.5882 17.0001C24.5882 15.5255 24.1858 14.0919 23.43 12.8363C23.7634 12.2512 23.9395 11.5898 23.9412 10.9165V10.8531C23.9412 8.71226 22.1996 6.9707 20.0588 6.9707C18.623 6.9707 17.3693 7.75623 16.6977 8.91835C15.4324 8.89057 14.178 9.15669 13.0331 9.69579C12.8212 9.44997 12.5588 9.25271 12.2638 9.11743C11.9688 8.98216 11.6481 8.91205 11.3235 8.91188C10.0747 8.91188 9.05882 9.92809 9.05882 11.1766C9.05981 11.6663 9.21865 12.1427 9.51176 12.5351L9.6457 12.7137C8.8988 13.905 8.47746 15.2715 8.42373 16.6766H7.7647C7.40785 16.6766 7.11764 16.9668 7.11764 17.3236V23.7942C6.76079 23.7942 6.47058 24.0844 6.47058 24.4413V25.0883C6.47058 25.4452 6.76079 25.7354 7.11764 25.7354H8.63338C8.99767 26.4993 9.77543 27.0295 10.6765 27.0295C11.5775 27.0295 12.3553 26.4993 12.7196 25.7354H16.3981C16.7624 26.4993 17.5401 27.0295 18.4412 27.0295C19.3422 27.0295 20.12 26.4993 20.4843 25.7354H21.3529C21.7098 25.7354 22 25.4452 22 25.0883V24.1973C22 24.1184 21.9903 24.0395 21.9712 23.9618L21.7641 23.1336C22.2452 22.721 22.676 22.2533 23.0479 21.7401L24.2647 23.363L26.0765 20.9472C26.3696 20.5547 26.5285 20.0782 26.5294 19.5883C26.5294 18.445 25.6766 17.499 24.574 17.3473ZM20.0588 7.61776C21.8428 7.61776 23.2941 9.06911 23.2941 10.8531V10.9161C23.2941 11.6376 23.0486 12.3478 22.6027 12.9149L20.0588 16.1531L17.5149 12.9149C17.0679 12.3444 16.8246 11.6409 16.8235 10.9161V10.8531C16.8235 9.06911 18.2749 7.61776 20.0588 7.61776ZM11.3235 9.55894C12.2155 9.55894 12.9412 10.2846 12.9412 11.1766C12.9406 11.5264 12.8271 11.8667 12.6176 12.1468L11.3235 13.8726L10.0294 12.1468C9.81994 11.8667 9.70648 11.5264 9.70587 11.1766C9.70587 10.2846 10.4316 9.55894 11.3235 9.55894ZM7.7647 17.3236H10.3529V19.7883L11.9706 18.9795L13.5882 19.7883V17.3236H16.1765V23.7942H12.7196C12.3553 23.0304 11.5775 22.5001 10.6765 22.5001C9.77543 22.5001 8.99767 23.0304 8.63338 23.7942H7.7647V17.3236ZM11 17.3236H12.9412V18.7413L11.9706 18.2561L11 18.7413V17.3236ZM16.8235 19.2648H19.877C19.9491 19.2648 20.0192 19.2889 20.076 19.3333C20.1329 19.3777 20.1733 19.4398 20.1908 19.5097L20.2914 19.9119H18.7647C18.4078 19.9119 18.1176 20.2021 18.1176 20.5589V21.206C18.1176 21.5628 18.4078 21.8531 18.7647 21.8531H20.7767L21.262 23.7942H20.4843C20.12 23.0304 19.3422 22.5001 18.4412 22.5001C17.8077 22.5001 17.2351 22.7622 16.8235 23.1831V19.2648ZM20.615 21.206H18.7647V20.5589H20.4532L20.615 21.206ZM7.11764 25.0883V24.4413H8.43764C8.42243 24.5474 8.41176 24.6548 8.41176 24.7648C8.41176 24.8748 8.42243 24.9822 8.43764 25.0883H7.11764ZM10.6765 26.3825C9.78449 26.3825 9.05882 25.6568 9.05882 24.7648C9.05882 23.8728 9.78449 23.1472 10.6765 23.1472C11.5684 23.1472 12.2941 23.8728 12.2941 24.7648C12.2941 25.6568 11.5684 26.3825 10.6765 26.3825ZM12.9153 25.0883C12.9305 24.9822 12.9412 24.8748 12.9412 24.7648C12.9412 24.6548 12.9305 24.5474 12.9153 24.4413H16.2023C16.1871 24.5474 16.1765 24.6548 16.1765 24.7648C16.1765 24.8748 16.1871 24.9822 16.2023 25.0883H12.9153ZM18.4412 26.3825C17.5492 26.3825 16.8235 25.6568 16.8235 24.7648C16.8235 23.8728 17.5492 23.1472 18.4412 23.1472C19.3331 23.1472 20.0588 23.8728 20.0588 24.7648C20.0588 25.6568 19.3331 26.3825 18.4412 26.3825ZM20.68 25.0883C20.6952 24.9822 20.7059 24.8748 20.7059 24.7648C20.7059 24.6548 20.6952 24.5474 20.68 24.4413H21.3529V25.0883H20.68ZM21.5875 22.4273L20.8188 19.3528C20.7664 19.1428 20.6452 18.9563 20.4745 18.8231C20.3038 18.6899 20.0935 18.6176 19.877 18.6178H16.8235V17.3236C16.8235 16.9668 16.5333 16.6766 16.1765 16.6766H9.07046C9.11983 15.4774 9.46039 14.3083 10.0627 13.2701L11.3235 14.9512L13.1353 12.5354C13.4285 12.143 13.5873 11.6664 13.5882 11.1766C13.588 10.8544 13.5185 10.5361 13.3844 10.2432C14.3304 9.80443 15.3589 9.57216 16.4016 9.56185C16.2536 9.97629 16.1775 10.413 16.1765 10.8531V10.9161C16.1765 11.7822 16.4712 12.6344 17.006 13.3148L20.0588 17.2001L23.0256 13.4241C23.6271 14.52 23.942 15.75 23.9412 17.0001C23.9412 17.1169 23.9321 17.2344 23.9269 17.3518C22.8383 17.5158 22 18.4547 22 19.5883C22.001 20.0781 22.1598 20.5545 22.4529 20.9468L22.6396 21.196C22.3347 21.6434 21.9819 22.0563 21.5875 22.4273ZM25.5588 20.5586L24.2647 22.2843L22.9706 20.5586C22.7611 20.2784 22.6477 19.9382 22.6471 19.5883C22.6471 18.6964 23.3727 17.9707 24.2647 17.9707C25.1567 17.9707 25.8823 18.6964 25.8823 19.5883C25.8817 19.9382 25.7683 20.2784 25.5588 20.5586Z" fill="white"/>
                          <path d="M20.0588 13.4411C21.4859 13.4411 22.6471 12.28 22.6471 10.8529C22.6471 9.4258 21.4859 8.26465 20.0588 8.26465C18.6317 8.26465 17.4706 9.4258 17.4706 10.8529C17.4706 12.28 18.6317 13.4411 20.0588 13.4411ZM20.0588 8.91171C21.1294 8.91171 22 9.78232 22 10.8529C22 11.9234 21.1294 12.7941 20.0588 12.7941C18.9883 12.7941 18.1176 11.9234 18.1176 10.8529C18.1176 9.78232 18.9883 8.91171 20.0588 8.91171ZM14.2353 15.3823H14.8823V16.0294H14.2353V15.3823ZM15.5294 15.3823H16.1765V16.0294H15.5294V15.3823ZM16.8235 15.3823H17.4706V16.0294H16.8235V15.3823Z" fill="white"/>
                        </svg>
  
                        Tärkeää toimituksesta
                        </button>
                      </div>
                    </div>



                  </div>

                  <div class="menu-image">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/menu.png" alt="">
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
   
    <div id="delivery-info" style="display:none;max-width:500px;">
      <h3>
        TOIMITUSALUEET
      </h3>  
      <p>
        Tällä hetkellä toimitamme ruokia Helsingin, Vantaan, Espoon ja Kauniaisten alueella.
      </p>     
      
      <br>
      <br>

      <h3>
        TOIMITUKSET
      </h3>
      <p>
        Toimitukset tapahtuvat kylmäkuljetuksina joka tiistai ja perjantai klo 15.30-22.00. Voit valita toimitusaikaikkunan tilauksen yhteydessä kolmen tunnin tarkkuudella. Ensimmäisen toimituspäivän voit valita itse tilauksen yhteydessä.
      </p>
      <br>
      <br>
      <h3>
      TOIMITUSAJAT
      </h3>
      <p>
      Voit tarvittaessa muuttaa toimitusaikaikkunaa ottamalla meihin yhteyttä viimeistään toimitusta edeltävänä päivänä. Toimituspäivänä saat tekstiviestin, jossa on ilmoitus tarkasta toimitusajasta sekä seurantalinkki.
      </p>
    </div>

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
              <custom-select class="custom-select calculator-activity__select" data-value=""
                data-heading="Valitse aktiivisuus" data-default="">
                <select>
                  <option value="1.2">Vähän tai ei lainkaan liikuntaa</option>
                  <option value="1.375">Liikunta (1-3krt/vko)</option>
                  <option value="1.55">Liikunta (3-5krt/vko)</option>
                </select>
                <div class="custom-select__wrapper">
                  <div class="custom-select__value">
                    <h5></h5>
                    <div class="arrow">
                      <svg width="17" height="9" viewBox="0 0 17 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="path-1-inside-1_2003_50" fill="white">
                          <path
                            d="M8.802 8.46731C8.69915 8.46731 8.59587 8.43018 8.51478 8.35592L0.744003 1.27522C0.569877 1.11646 0.557074 0.846732 0.715836 0.672179C0.874597 0.497626 1.14432 0.484823 1.31887 0.644011L8.802 7.46352L16.2856 0.644011C16.461 0.485249 16.7303 0.498053 16.8886 0.672179C17.0474 0.846305 17.035 1.11646 16.8609 1.27522L9.08923 8.35635C9.00814 8.43018 8.90486 8.46731 8.802 8.46731Z" />
                        </mask>
                        <path
                          d="M8.802 8.46731C8.69915 8.46731 8.59587 8.43018 8.51478 8.35592L0.744003 1.27522C0.569877 1.11646 0.557074 0.846732 0.715836 0.672179C0.874597 0.497626 1.14432 0.484823 1.31887 0.644011L8.802 7.46352L16.2856 0.644011C16.461 0.485249 16.7303 0.498053 16.8886 0.672179C17.0474 0.846305 17.035 1.11646 16.8609 1.27522L9.08923 8.35635C9.00814 8.43018 8.90486 8.46731 8.802 8.46731Z"
                          fill="white" />
                        <path
                          d="M8.51478 8.35592L9.19016 7.61844L9.18831 7.61676L8.51478 8.35592ZM0.744003 1.27522L0.0702479 2.01417L0.0704787 2.01438L0.744003 1.27522ZM1.31887 0.644011L0.645031 1.38289L0.6453 1.38313L1.31887 0.644011ZM8.802 7.46352L8.12843 8.20264L8.80198 8.81647L9.47556 8.20266L8.802 7.46352ZM16.2856 0.644011L15.6145 -0.0973993L15.612 -0.0951279L16.2856 0.644011ZM16.8886 0.672179L16.1487 1.34494L16.1496 1.34593L16.8886 0.672179ZM16.8609 1.27522L17.5344 2.0144L17.5346 2.01417L16.8609 1.27522ZM9.08923 8.35635L9.76248 9.09576L9.76273 9.09553L9.08923 8.35635ZM8.802 7.46731C8.93863 7.46731 9.07922 7.51685 9.19016 7.61844L7.83941 9.0934C8.11252 9.34351 8.45967 9.46731 8.802 9.46731V7.46731ZM9.18831 7.61676L1.41753 0.536053L0.0704787 2.01438L7.84126 9.09509L9.18831 7.61676ZM1.41776 0.536264C1.65114 0.749058 1.66836 1.11112 1.45561 1.34503L-0.0239418 -0.000672758C-0.554215 0.582344 -0.511389 1.48385 0.0702479 2.01417L1.41776 0.536264ZM1.45561 1.34503C1.24272 1.5791 0.879267 1.59651 0.645031 1.38289L1.99272 -0.094864C1.40938 -0.626861 0.506475 -0.583848 -0.0239418 -0.000672758L1.45561 1.34503ZM0.6453 1.38313L8.12843 8.20264L9.47558 6.7244L1.99245 -0.0951087L0.6453 1.38313ZM9.47556 8.20266L16.9591 1.38315L15.612 -0.0951279L8.12845 6.72438L9.47556 8.20266ZM16.9566 1.38542C16.7256 1.59454 16.3635 1.5811 16.1487 1.34494L17.6285 -0.000582993C17.097 -0.584998 16.1964 -0.624041 15.6145 -0.0973951L16.9566 1.38542ZM16.1496 1.34593C15.9366 1.11224 15.9528 0.749874 16.1871 0.536264L17.5346 2.01417C18.1171 1.48304 18.1581 0.580371 17.6276 -0.0015738L16.1496 1.34593ZM16.1874 0.536037L8.41572 7.61717L9.76273 9.09553L17.5344 2.0144L16.1874 0.536037ZM8.41597 7.61694C8.52618 7.51659 8.66566 7.46731 8.802 7.46731V9.46731C9.14405 9.46731 9.4901 9.34377 9.76248 9.09576L8.41597 7.61694Z"
                          fill="#213735" mask="url(#path-1-inside-1_2003_50)" />
                      </svg>

                    </div>
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
    
                                                                                       
   
  </section>


  <script>
    document.addEventListener('DOMContentLoaded', function () {


      setTimeout(() => {
        $('.radio-sm').click(function () {
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
        $('.order__controls').each(function () {
          $(this).find('.order-block__select').each(function () {
            let fs = $(this).find('.custom-select__option').eq(0).text();
            console.log(fs);
            $(this).find('h5').text(fs);
          })
        })

        $('.order-calculator__button').click(function(){
          console.log('da')
          $('.calculator').addClass('_active')
        })
      }, 1000);

   
    })
  </script>






  <section class="bigbanner">
    <img src="<?php echo get_template_directory_uri() ?>/assets/images/bigbanner.png" alt="banner"
      class="bigbanner-bg abs">

    <div class="container">
      <div class="bigbanner-video">
        <div class="bigbanner-video-title">
          Katso video mikä Calori on?
        </div>
        <button data-fancybox data-src="https://youtube.com/shorts/ZVsbpOU7goA?feature=share" class="btn green">
        Katso video
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
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/ico05.svg" class="advantages_item_ico">



            <div class="advantages_item_text">
            Suunniteltua ja kokattua puolestasi
            </div>
          </div>
          <div class="advantages_item">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/ico06.svg" class="advantages_item_ico">



            <div class="advantages_item_text">
            Ravitsemusasiantuntijoita tiimissä
            </div>
          </div>
          <div class="advantages_item">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/ico07.svg" class="advantages_item_ico">


            <div class="advantages_item_text">
            Ruokalistat kehittyvät viikoittain
            </div>
          </div>
          <div class="advantages_item">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/ico08.svg" class="advantages_item_ico">


            <div class="advantages_item_text">
            Ammattikokkien valmistamaa ruokaa
            </div>
          </div>
          <div class="advantages_item">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/ico09.svg" class="advantages_item_ico">


            <div class="advantages_item_text">
            Yli 60 reseptiä reseptikirjassa
            </div>
          </div>
          <div class="advantages_item">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/ico09.svg" class="advantages_item_ico">


            <div class="advantages_item_text">
            Joustava kylmäkuljetus kotiovellesi
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
          Käytössä kiireisillä yrittäjillä, vaikuttajilla ja urheilijoilla
          </h2>
        </div>
        <div class="reviews-wrap">
          <div class="reviews swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="reviews-item">
                  <div class="reviews-item_rating">
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z"
                        fill="white" />
                    </svg>
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z"
                        fill="white" />
                    </svg>
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z"
                        fill="white" />
                    </svg>
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z"
                        fill="white" />
                    </svg>
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z"
                        fill="white" />
                    </svg>
                  </div>

                  <div class="reviews-item_text">
                    Maukas helpotus kiireiseen arkeen! Palvelu antoi minulle monta tuntia lisäaikaa muihin arjen
                    askareisiin, vei kiireen pois aamuista ja helpotti säännöllisen syömisen ylläpitoa. Iso suositus!
                  </div>

                  <div class="reviews-item_author">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/author1.png" alt="author"
                      class="reviews-item_author_image">
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
                      <path
                        d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z"
                        fill="white" />
                    </svg>
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z"
                        fill="white" />
                    </svg>
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z"
                        fill="white" />
                    </svg>
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z"
                        fill="white" />
                    </svg>
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z"
                        fill="white" />
                    </svg>
                  </div>

                  <div class="reviews-item_text">
                  Ruoka oli todella herkullista ja monipuolista. Ihanaa kun oli niin paljon erilaisia ateriaoita 😍 Säästin myös todella paljon aikaa kun ei tarvinnut itse kokata ja mikä parasta ateriat toimitettiin suoraan kotiovelle! Suosittelen lämmöllä! 
                  </div>

                  <div class="reviews-item_author">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/author2.png" alt="author"
                      class="reviews-item_author_image">
                    <div class="reviews-item_author_name">
                    Patricia Ström
                    </div>
                    <a href="#" class="reviews-item_author_link">
                    @patriciastrom
                    </a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="reviews-item">
                  <div class="reviews-item_rating">
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z"
                        fill="white" />
                    </svg>
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z"
                        fill="white" />
                    </svg>
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z"
                        fill="white" />
                    </svg>
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z"
                        fill="white" />
                    </svg>
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z"
                        fill="white" />
                    </svg>
                  </div>

                  <div class="reviews-item_text">
                  Lounasravintolassa maksat jopa 15€ ateriasta, mutta Calorilla saat aamiaisen, lounaan, päivällisen ja iltapalan alle 30€:lla kotiovelle toimitettuna. Ruoat ovat todella hyviä ja annoksien välillä on paljon vaihtelua, ja omaan ruokailuun on löytynyt monia uusia suosikkireseptejä!
                  </div>

                  <div class="reviews-item_author">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/author3.png" alt="author"
                      class="reviews-item_author_image">
                    <div class="reviews-item_author_name">
                    Jerry Hietaniemi
                    </div>
                    <a href="#" class="reviews-item_author_link">
                    @jerryhietaniemi
                    </a>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="reviews-item">
                  <div class="reviews-item_rating">
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z"
                        fill="white" />
                    </svg>
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z"
                        fill="white" />
                    </svg>
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z"
                        fill="white" />
                    </svg>
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z"
                        fill="white" />
                    </svg>
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z"
                        fill="white" />
                    </svg>
                  </div>

                  <div class="reviews-item_text">
                  Palvelu on helppoa ja ystävällistä, ruoka myös erittäin maukasta! Etenkin sopii jos haluaa pelailla painon kanssa.
                  </div>

                  <div class="reviews-item_author">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/author4.png" alt="author"
                      class="reviews-item_author_image">
                    <div class="reviews-item_author_name">
                    Emil Kurhela
                    </div>
                    <a href="#" class="reviews-item_author_link">
                    @eemilkurhela
                    </a>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="reviews-item">
                  <div class="reviews-item_rating">
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z"
                        fill="white" />
                    </svg>
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z"
                        fill="white" />
                    </svg>
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z"
                        fill="white" />
                    </svg>
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z"
                        fill="white" />
                    </svg>
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M5.1203 4.89328L0.866966 5.50995L0.791633 5.52528C0.677592 5.55556 0.573629 5.61555 0.490361 5.69915C0.407092 5.78274 0.347502 5.88694 0.317674 6.0011C0.287847 6.11526 0.288851 6.23529 0.320584 6.34893C0.352318 6.46257 0.413644 6.56576 0.498299 6.64795L3.57963 9.64728L2.85297 13.8839L2.8443 13.9573C2.83732 14.0752 2.86181 14.1929 2.91527 14.2983C2.96872 14.4037 3.04922 14.4929 3.14852 14.557C3.24782 14.621 3.36236 14.6575 3.4804 14.6627C3.59844 14.6679 3.71574 14.6416 3.8203 14.5866L7.6243 12.5866L11.4196 14.5866L11.4863 14.6173C11.5963 14.6606 11.7159 14.6739 11.8328 14.6558C11.9497 14.6377 12.0596 14.5888 12.1514 14.5141C12.2431 14.4395 12.3133 14.3418 12.3549 14.231C12.3964 14.1203 12.4077 14.0005 12.3876 13.8839L11.6603 9.64728L14.743 6.64728L14.795 6.59062C14.8692 6.49913 14.9179 6.38958 14.9361 6.27315C14.9543 6.15671 14.9412 6.03753 14.8984 5.92777C14.8555 5.818 14.7842 5.72157 14.692 5.64829C14.5997 5.57501 14.4896 5.52751 14.373 5.51062L10.1196 4.89328L8.2183 1.03995C8.16328 0.928305 8.07811 0.834292 7.97242 0.768551C7.86674 0.702811 7.74476 0.667969 7.6203 0.667969C7.49584 0.667969 7.37386 0.702811 7.26817 0.768551C7.16249 0.834292 7.07731 0.928305 7.0223 1.03995L5.1203 4.89328Z"
                        fill="white" />
                    </svg>
                  </div>

                  <div class="reviews-item_text">
                  Ruoka 5/5, toimitus 5/5, palvelu 5/5
                  </div>

                  <div class="reviews-item_author">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/author5.png" alt="author"
                      class="reviews-item_author_image">
                    <div class="reviews-item_author_name">
                    Artturi Kallio
                    </div>
                    <a href="#" class="reviews-item_author_link">
                    @artturikallio
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-button-prev">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="40" width="40" height="40" rx="20" transform="rotate(90 40 0)" fill="#213735"/>
              <mask id="path-2-inside-1_2002_241" fill="white">
              <path d="M16.0326 19.9996C16.0326 19.8968 16.0697 19.7935 16.144 19.7124L23.2247 11.9416C23.3834 11.7675 23.6531 11.7547 23.8277 11.9135C24.0023 12.0722 24.0151 12.342 23.8559 12.5165L17.0364 19.9996L23.8559 27.4832C24.0146 27.6586 24.0018 27.9279 23.8277 28.0862C23.6536 28.245 23.3834 28.2326 23.2247 28.0585L16.1435 20.2869C16.0697 20.2058 16.0326 20.1025 16.0326 19.9996Z"/>
              </mask>
              <path d="M16.0326 19.9996C16.0326 19.8968 16.0697 19.7935 16.144 19.7124L23.2247 11.9416C23.3834 11.7675 23.6531 11.7547 23.8277 11.9135C24.0023 12.0722 24.0151 12.342 23.8559 12.5165L17.0364 19.9996L23.8559 27.4832C24.0146 27.6586 24.0018 27.9279 23.8277 28.0862C23.6536 28.245 23.3834 28.2326 23.2247 28.0585L16.1435 20.2869C16.0697 20.2058 16.0326 20.1025 16.0326 19.9996Z" fill="white"/>
              <path d="M16.144 19.7124L16.8814 20.3878L16.8831 20.3859L16.144 19.7124ZM23.2247 11.9416L22.4857 11.2679L22.4855 11.2681L23.2247 11.9416ZM23.8559 12.5165L23.117 11.8427L23.1167 11.8429L23.8559 12.5165ZM17.0364 19.9996L16.2972 19.3261L15.6834 19.9996L16.2972 20.6732L17.0364 19.9996ZM23.8559 27.4832L24.5973 26.8121L24.595 26.8096L23.8559 27.4832ZM23.8277 28.0862L23.1549 27.3464L23.1539 27.3473L23.8277 28.0862ZM23.2247 28.0585L22.4855 28.732L22.4857 28.7322L23.2247 28.0585ZM16.1435 20.2869L15.4041 20.9601L15.4043 20.9604L16.1435 20.2869ZM17.0326 19.9996C17.0326 20.1363 16.983 20.2769 16.8814 20.3878L15.4065 19.037C15.1564 19.3101 15.0326 19.6573 15.0326 19.9996L17.0326 19.9996ZM16.8831 20.3859L23.9638 12.6152L22.4855 11.2681L15.4048 19.0389L16.8831 20.3859ZM23.9636 12.6154C23.7508 12.8488 23.3888 12.866 23.1548 12.6532L24.5006 11.1737C23.9175 10.6434 23.016 10.6862 22.4857 11.2679L23.9636 12.6154ZM23.1548 12.6532C22.9208 12.4404 22.9034 12.0769 23.117 11.8427L24.5947 13.1903C25.1267 12.607 25.0837 11.7041 24.5006 11.1737L23.1548 12.6532ZM23.1167 11.8429L16.2972 19.3261L17.7755 20.6732L24.595 13.1901L23.1167 11.8429ZM16.2972 20.6732L23.1167 28.1567L24.595 26.8096L17.7755 19.3261L16.2972 20.6732ZM23.1145 28.1542C22.9053 27.9232 22.9188 27.5611 23.1549 27.3464L24.5005 28.8261C25.0849 28.2947 25.1239 27.394 24.5973 26.8121L23.1145 28.1542ZM23.1539 27.3473C23.3876 27.1342 23.75 27.1505 23.9636 27.3847L22.4857 28.7322C23.0168 29.3148 23.9195 29.3558 24.5015 28.8252L23.1539 27.3473ZM23.9638 27.385L16.8827 19.6134L15.4043 20.9604L22.4855 28.732L23.9638 27.385ZM16.8829 19.6136C16.9833 19.7238 17.0326 19.8633 17.0326 19.9996L15.0326 19.9996C15.0326 20.3417 15.1561 20.6877 15.4041 20.9601L16.8829 19.6136Z" fill="white" mask="url(#path-2-inside-1_2002_241)"/>
              </svg>
              
          </div>
          <div class="swiper-button-next">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect y="40" width="40" height="40" rx="20" transform="rotate(-90 0 40)" fill="#213735"/>
              <mask id="path-2-inside-1_2002_239" fill="white">
              <path d="M23.9673 20.0004C23.9673 20.1032 23.9302 20.2065 23.8559 20.2876L16.7752 28.0584C16.6165 28.2325 16.3467 28.2453 16.1722 28.0865C15.9976 27.9278 15.9848 27.658 16.144 27.4835L22.9635 20.0004L16.144 12.5168C15.9852 12.3414 15.9981 12.0721 16.1722 11.9138C16.3463 11.755 16.6165 11.7674 16.7752 11.9415L23.8563 19.7131C23.9302 19.7942 23.9673 19.8975 23.9673 20.0004Z"/>
              </mask>
              <path d="M23.9673 20.0004C23.9673 20.1032 23.9302 20.2065 23.8559 20.2876L16.7752 28.0584C16.6165 28.2325 16.3467 28.2453 16.1722 28.0865C15.9976 27.9278 15.9848 27.658 16.144 27.4835L22.9635 20.0004L16.144 12.5168C15.9852 12.3414 15.9981 12.0721 16.1722 11.9138C16.3463 11.755 16.6165 11.7674 16.7752 11.9415L23.8563 19.7131C23.9302 19.7942 23.9673 19.8975 23.9673 20.0004Z" fill="white"/>
              <path d="M23.8559 20.2876L23.1184 19.6122L23.1168 19.6141L23.8559 20.2876ZM16.7752 28.0584L17.5142 28.7321L17.5144 28.7319L16.7752 28.0584ZM16.144 27.4835L16.8829 28.1573L16.8831 28.1571L16.144 27.4835ZM22.9635 20.0004L23.7026 20.6739L24.3165 20.0004L23.7027 19.3268L22.9635 20.0004ZM16.144 12.5168L15.4026 13.1879L15.4049 13.1904L16.144 12.5168ZM16.1722 11.9138L16.8449 12.6536L16.8459 12.6527L16.1722 11.9138ZM16.7752 11.9415L17.5144 11.268L17.5142 11.2678L16.7752 11.9415ZM23.8563 19.7131L24.5958 19.0399L24.5955 19.0396L23.8563 19.7131ZM22.9673 20.0004C22.9673 19.8637 23.0169 19.7231 23.1184 19.6122L24.5934 20.963C24.8435 20.6899 24.9673 20.3427 24.9673 20.0004H22.9673ZM23.1168 19.6141L16.0361 27.3848L17.5144 28.7319L24.5951 20.9611L23.1168 19.6141ZM16.0363 27.3846C16.2491 27.1512 16.6111 27.134 16.845 27.3468L15.4993 28.8263C16.0823 29.3566 16.9839 29.3138 17.5142 28.7321L16.0363 27.3846ZM16.845 27.3468C17.0791 27.5596 17.0965 27.9231 16.8829 28.1573L15.4051 26.8097C14.8731 27.393 14.9162 28.2959 15.4993 28.8263L16.845 27.3468ZM16.8831 28.1571L23.7026 20.6739L22.2244 19.3268L15.4049 26.8099L16.8831 28.1571ZM23.7027 19.3268L16.8832 11.8433L15.4049 13.1904L22.2244 20.6739L23.7027 19.3268ZM16.8854 11.8458C17.0945 12.0768 17.0811 12.4389 16.8449 12.6536L15.4994 11.1739C14.915 11.7053 14.876 12.606 15.4026 13.1879L16.8854 11.8458ZM16.8459 12.6527C16.6122 12.8658 16.2499 12.8495 16.0363 12.6153L17.5142 11.2678C16.983 10.6852 16.0804 10.6442 15.4984 11.1748L16.8459 12.6527ZM16.036 12.615L23.1172 20.3866L24.5955 19.0396L17.5144 11.268L16.036 12.615ZM23.1169 20.3864C23.0166 20.2762 22.9673 20.1367 22.9673 20.0004H24.9673C24.9673 19.6583 24.8438 19.3123 24.5958 19.0399L23.1169 20.3864Z" fill="white" mask="url(#path-2-inside-1_2002_239)"/>
              </svg>
              
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

      <div class="h2-wrapper">
        <h2 class="h2">
        Miksi Calori?
        </h2>
      </div>
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
                Säästät 8h aikaa viikossa
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

        <a href="/meista/miksi-calori/" class="btn green" style="margin: 24px auto 0;">
        Lue lisää
        </a>
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

        <!--<div class="partners">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/partner1.png" alt="" class="partners-item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/partner2.png" alt="" class="partners-item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/partner3.png" alt="" class="partners-item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/partner4.png" alt="" class="partners-item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/partner5.png" alt="" class="partners-item">
        </div>-->
        <div class="partners-swiper swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/partner1.png" alt="" class="partners-item">
            </div>
            <div class="swiper-slide">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/partner2.png" alt="" class="partners-item">
            </div>
            <div class="swiper-slide">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/partner3.png" alt="" class="partners-item">
            </div>
            <div class="swiper-slide">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/partner4.png" alt="" class="partners-item">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="main__dark"></div>
</main>
<?php get_footer() ?>