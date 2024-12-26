<?php
/* Template Name: Ota yhteyttä */
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
        Yhteystiedot
      </li>
    </ul>
  </div>

  <article class="contact">
    <section class="section mb0">
      <div class="container">
        <div class="section-wrapper">
          <div class="menu-page">
            <h1 class="h1">
              <?php echo esc_html(get_field('contact-us-title')) ?>
            </h1>
          </div>
        </div>
      </div>
    </section>

    <section class="contact-info">
      <div class="contact-info__text"></div>
    </section>


    <div class="contact-form">
      <div class="contact-form__container _container">
        <header class="contact-form__heading">
          <h3><?php echo esc_html(get_field('contact-us-form-title')) ?></h3>
        </header>
        <?php echo do_shortcode('[contact-form-7 id="0b99b45" title="Contact"]'); ?>
        <!--                 <div class="contact-form__block">
                    <input type="text" placeholder="Nimi" />
                </div>
                <div class="contact-form__block">
                    <input type="email" placeholder="S-posti" />
                </div>
                <div class="contact-form__block">
                    <textarea placeholder="Viesti"></textarea>
                </div>
                <div class="contact-form__block">
                    <button type="button" class="contact-form__button btn btn-solid btn-medium"><span
                            class="btn-text">Lähetä</span></button>
                </div> -->
      </div>
    </div>

    <section id="about-info" style="margin-bottom:80px;">
      <div class="about-info__container container">
        <div class="about-info__body">
          <div class="about-info__text">
            <ul>
              <li>
                <?php echo esc_html(get_field('contact-us-company-field-name')) . " " . esc_html(get_field('contact-us-company-name')) ?>
              </li>
              <li>
                <?php echo esc_html(get_field('contact-us-address-field-name')) . " " . esc_html(get_field('contact-us-address-name')) ?>
              </li>
              <li><?php echo esc_html(get_field('contact-us-support-field-name')) ?> <a
                  href="tel:<?php echo esc_html(get_field('contact-us-support-phone')) ?>"><?php echo esc_html(get_field('contact-us-support-phone')) ?>
              </li></a>
              <li><?php echo esc_html(get_field('contact-us-email-field-name')) ?> <a
                  href="mailto:<?php echo esc_html(get_field('contact-us-email-name')) ?>"><?php echo esc_html(get_field('contact-us-email-name')) ?>
              </li></a>
              <li><?php echo esc_html(get_field('contact-us-logistics-field-name')) ?> <a
                  href="tel:<?php echo esc_html(get_field('contact-us-logistics-phone')) ?>"><?php echo esc_html(get_field('contact-us-logistics-phone')) ?>
              </li></a>
              <li><?php echo esc_html(get_field('contact-us-logistics-field-name-two')) ?> <a
                  href="mailto:<?php echo esc_html(get_field('contact-us-logistics-email')) ?>"><?php echo esc_html(get_field('contact-us-logistics-email')) ?>
              </li></a>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </article>
  <div class="main__dark">
  </div>

  <!--<section class="bigbanner timer mb0">
        <div class="timer-wrap">
            <div class="banner-title">
            Ehdi tehdä tilaus
            </div>
            <div class="banner-text">
                Huomaa-lähin toimitus on <span class="nextdate"><?php echo get_field("order_end_day", "option") ?></span>. <br>
                Tilausten vastaanottamisen päättymiseen asti tänä päivänä:
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
    </section>-->

  <?php if (get_field("event-banner-section-visibility", "option")): ?>
    <section class="bigbanner timer mb0">
      <div class="timer-wrap newbanner">
        <div class="banner-title newbanner-title">
          <?php echo wp_kses_post(get_field("event-banner-title", "option")) ?>
        </div>
        <div class="banner-text newbanner-text">
          <?php echo wp_kses_post(get_field("event-banner-main-text", "option")) ?>
        </div>

        <?php if (get_field("event-banner-coupon-visibility", "option")): ?>
          <button class="promo">
            <?php echo wp_kses_post(get_field("event-banner-coupon-text", "option")) ?>
          </button>
        <?php endif ?>

        <div class="banner-after-text">
          <?php echo wp_kses_post(get_field("event-banner-subtext", "option")) ?>
        </div>
      </div>
      <img src="<?php echo esc_html(get_field("event-banner-background-image", "option")) ?>" alt="banner"
        class="bigbanner-bg abs">
    </section>
  <?php endif ?>


  <?php if (get_field("why-calori-visibility", "option")): ?>
    <section class="section grey">
      <div class="container">
        <div class="section-wrapper">
          <div class="h2-wrapper">
            <h2 class="h2">
              <?php echo esc_html(get_field("why-calori-title", "option")) ?>
            </h2>
          </div>
          <div class="whywe swiper">
            <div class="swiper-wrapper">
              <?php if (have_rows("why-calori-items", "option")):
                while (have_rows("why-calori-items", "option")):
                  the_row() ?>
                  <div class="swiper-slide">
                    <div class="whywe_item">
                      <img src="<?php echo esc_html(get_sub_field("why-calori-item-icon")) ?>" class="whywe_item_ico">
                      <span class="whywe_item_text">
                        <?php echo esc_html(get_sub_field("why-calori-item-text")) ?>
                      </span>
                    </div>
                  </div>
                <?php endwhile; endif ?>
            </div>
          </div>
          <?php if (get_field("why-calori-button-visibility", "option")): ?>
            <a href="/meista/miksi-calori/" class="btn green" style="margin: 24px auto 0;">
              <?php echo esc_html(get_field("why-calori-button-text", "option")) ?>
            </a>
          <?php endif ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <section class="section">
    <div class="container">
      <div class="section-wrapper">
        <div class="h2-wrapper">
          <h2 class="h2">
            Teemme yhteistyötä
          </h2>
        </div>

        <!-- <div class="partners">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/partner1.png" alt="" class="partners-item">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/partner2.png" alt="" class="partners-item">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/partner3.png" alt="" class="partners-item">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/partner4.png" alt="" class="partners-item">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/partner5.png" alt="" class="partners-item">
                </div>-->
        <div class="partners-swiper swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/partner1.png" alt=""
                class="partners-item">
            </div>
            <div class="swiper-slide">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/partner2.png" alt=""
                class="partners-item">
            </div>
            <div class="swiper-slide">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/partner3.png" alt=""
                class="partners-item">
            </div>
            <div class="swiper-slide">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/partner4.png" alt=""
                class="partners-item">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer() ?>