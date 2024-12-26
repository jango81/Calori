<?php
/* Template Name: Miksi Calori? */
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
                Miksi Calori?
            </li>
        </ul>
    </div>
    <article id="why-calori">
        <section class="section">
            <div class="container">
                <div class="section-wrapper">
                    <div class="menu-page">
                        <h1 class="h1">
                            <?php echo esc_html(get_field('why-title')) ?>
                        </h1>
                    </div>
                </div>

                <div class="how-it-works" style="margin-top: 40px;">
                    <?php if (have_rows('why-cards')):
                        while (have_rows('why-cards')):
                            the_row(); ?>
                            <div class="how-it-works_item">
                                <img src='<?php echo esc_url(get_sub_field('card-image')) ?>' alt='why_image' />

                                <div class="how-it-works_item_text">
                                    <div class="how-it-works_item_text_title">
                                        <?php echo esc_html(get_sub_field('card-title')) ?>
                                    </div>
                                    <div class="how-it-works_item_text_text">
                                        <?php echo wp_kses_post(get_sub_field('card-text')) ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; endif; ?>
                </div>
            </div>
        </section>
    </article>
    <div class="main__dark">
    </div>
</main>

<!--<section class="bigbanner timer mb0">
        <div class="timer-wrap">
            <div class="banner-title">
                Lähin toimitus
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
    </section>
-->
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
<?php get_footer() ?>