<?php
/* Template Name: Meistä */
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
        Meistä
      </li>
    </ul>
  </div>


  <article id="about">
    <section class="section mb0">
      <div class="container">
        <div class="section-wrapper">
          <div class="menu-page">
            <h1 class="h1">
              <?php echo esc_html(get_field('about-us-title')) ?>
            </h1>
            <p class="menu-page-text">
              <?php echo esc_html(get_field('about-us-subtitle')) ?>
            </p>
          </div>
        </div>
      </div>
    </section>
    <?php if (get_field("about-us-quote-section-visibility")): ?>
      <section id="about-quote">
        <div class="container">
          <custom-quote class="about-quote">
            <div class="about-quote__container _container">
              <div class="about-quote__body">
                <div class="about-quote__quotes">
                  <?php if (have_rows('about-us-quotes')):
                    while (have_rows('about-us-quotes')):
                      the_row(); ?>
                      <div class="about-quote__text">
                        <?php echo wp_kses_post(get_sub_field('about-us-quote-text')) ?>
                      </div>
                    <?php endwhile; endif; ?>
                </div>
                <div class="about-quote__icons">
                  <?php if (have_rows('about-us-quotes')):
                    while (have_rows('about-us-quotes')):
                      the_row(); ?>
                      <div class="about-quote__icon">
                        <div class="about-quote__image">
                          <img src="<?php echo esc_url(get_field("about-us-quote-image")) ?>" alt="quote icon" />
                        </div>
                        <span></span>
                      </div>
                    <?php endwhile; endif; ?>
                </div>
              </div>
            </div>
          </custom-quote>
        </div>
      </section>
    <?php endif ?>
    <?php if (have_rows('about-us-section-items')):
      while (have_rows('about-us-section-items')):
        the_row(); ?>
        <section id="about-info">
          <div class="about-info__container container">
            <div class="about-info__body">
              <div class="about-info__image">
                <img src='<?php echo esc_url(get_sub_field('item-image')) ?>' alt='about-image' />
              </div>
              <div class="about-info__content">
                <header class="about-info__heading">
                  <h3><strong><?php echo esc_html(get_sub_field('item-title')) ?></strong></h3>
                </header>
                <div class="about-info__text">
                  <?php echo wp_kses_post(get_sub_field('item-text')) ?>
                </div>
              </div>
            </div>
        </section>
      <?php endwhile; endif; ?>
  </article>
  <div class="main__dark">
  </div>

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