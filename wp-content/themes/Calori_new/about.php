<?php
/* Template Name: Meistä */
get_header(null, array("announcement" => false, "show_cart" => true))
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
                    Meistä
                    </h1>
                    <p class="menu-page-text">
                    Missiomme on tehdä terveellisestä syömisestä helppoa ja maukasta
                    </p>
                </div>
            </div>
        </div>
    </section>
        <section id="about-quote">
            <custom-quote class="about-quote">
                <div class="about-quote__container _container">
                    <div class="about-quote__body">
                        <div class="about-quote__quotes">
                            <div class="about-quote__text">
                                <p>
                                    "Calorin ruokavalio vastaa täydellisesti kehosi tarpeita. Tarjoamme kaikki
                                    tarvittavat ravintoaineet, jotka pitävät sinut energisenä päivittäin. Calori
                                    yhdistää terveellisen ja herkullisen ruoan ainutlaatuisella
                                    tavalla." Mari Lahti, Helsingin yliopiston ravitsemusvalmentaja, ETM"
                                </p>
                            </div>
                            <div class="about-quote__text">
                                <p>"Minulle on ollut sydämen asia olla mukana kehittämässä ruokakulttuuria, jossa
                                    terveellinen ruoka tulee sujuvasti pöytään, tiedän syöväni hyvin ja hyvällä
                                    omallatunnolla." Pia Alanko.</p>
                            </div>
                        </div>
                        <div class="about-quote__icons">
                            <div class="about-quote__icon">
                                <div class="about-quote__image">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/quote-icon.png"
                                        alt="quote icon" />
                                </div>
                                <span></span>
                            </div>
                            <div class="about-quote__icon">
                                <div class="about-quote__image">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/quote-icon.png"
                                        alt="quote icon" />
                                </div>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </custom-quote>
        </section>
        <section id="about-info">
            <div class="about-info__container _container">
                <div class="about-info__body">
                    <div class="about-info__image">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/vastaanota.png"
                            alt="about image" />
                    </div>
                    <div class="about-info__content">
                        <header class="about-info__heading">
                            <h3><strong>Näkemyksemme</strong></h3>
                        </header>
                        <div class="about-info__text">
                            <p>
                                Me Calorilla näemme maailman, jossa terveellisten ruokavalintojen tekeminen on
                                jännittävää ja vaivatonta. Pyrimme olemaan edelläkävijöitä, jotka tarjoavat
                                tasapainoisia aterioita yhdistäen kotiruokien periaatteet ja
                                ravintolatason laatustandardit, mikä kannustaa kaikkia terveellisempään elämään.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about-info">
            <div class="about-info__container _container">
                <div class="about-info__body">
                    <div class="about-info__image">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/vastaanota.png"
                            alt="about image" />
                    </div>
                    <div class="about-info__content">
                        <header class="about-info__heading">
                            <h3><strong>Näkemyksemme</strong></h3>
                        </header>
                        <div class="about-info__text">
                            <p>
                                Me Calorilla näemme maailman, jossa terveellisten ruokavalintojen tekeminen on
                                jännittävää ja vaivatonta. Pyrimme olemaan edelläkävijöitä, jotka tarjoavat
                                tasapainoisia aterioita yhdistäen kotiruokien periaatteet ja
                                ravintolatason laatustandardit, mikä kannustaa kaikkia terveellisempään elämään.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about-info">
            <div class="about-info__container _container">
                <div class="about-info__body">
                    <div class="about-info__image">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/vastaanota.png"
                            alt="about image" />
                    </div>
                    <div class="about-info__content">
                        <header class="about-info__heading">
                            <h3><strong>Näkemyksemme</strong></h3>
                        </header>
                        <div class="about-info__text">
                            <p>
                                Me Calorilla näemme maailman, jossa terveellisten ruokavalintojen tekeminen on
                                jännittävää ja vaivatonta. Pyrimme olemaan edelläkävijöitä, jotka tarjoavat
                                tasapainoisia aterioita yhdistäen kotiruokien periaatteet ja
                                ravintolatason laatustandardit, mikä kannustaa kaikkia terveellisempään elämään.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="about__button">
            <a class="btn btn-solid btn-medium" href="#"><span class="btn-text">Tilaa nyt</span></a>
        </div>
    </article>
    <div class="main__dark">
    </div>

    <section class="bigbanner timer mb0">
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
    <section class="section grey ">
    <div class="container">
      <div class="section-wrapper">
        <div class="whywe swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="whywe_item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/ico01.svg" class="whywe_item_ico">
  
                <span class="whywe_item_text">
                  Вкусная и полезная еда
                </span>
</div>
            </div>
            <div class="swiper-slide">
              <div class="whywe_item">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/ico02.svg" class="whywe_item_ico">

                <span class="whywe_item_text">
                Сделай паузу от готовки
                </span>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="whywe_item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/ico03.svg" class="whywe_item_ico">

                <span class="whywe_item_text">
                  Баланс и легкость в жизнь
                </span>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="whywe_item">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/ico04.svg" class="whywe_item_ico">

                <span class="whywe_item_text">
                Достигнешь все свои цели
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
</main>
<?php get_footer() ?>