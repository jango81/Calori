<?php
/* Template Name: Ota yhteyttä */
get_header(null, array("announcement" => false, "show_cart" => true))
    ?>
<main id="main">
    <?php get_template_part("mini-cart") ?>
    <div class="loading" id="loading">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/loading-gif.gif" alt="loading">
    </div>
    <article class="contact">
        <section class="contact__banner section-banner">
            <div class="contact-banner__wrapper section-banner__wrapper _container">
                <header class="contact__title section-banner__title">
                    <h1>Yhteystiedot</h1>
                </header>
            </div>
            <div class="contact__image section-banner__image">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/menu banner.png" alt="banner image" />
            </div>
        </section>
        <section class="contact-info">
            <div class="contact-info__text"></div>
        </section>
        <form class="contact-form">
            <div class="contact-form__container _container">
                <header class="contact-form__heading">
                    <h3>Jätä yhteydenotto pyyntö ja palaamme mahdollisimman pian!</h3>
                </header>
                <div class="contact-form__block">
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
                </div>
            </div>
        </form>
    </article>
    <div class="main__dark">
    </div>
</main>
<?php get_footer() ?>