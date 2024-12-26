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
                        Yhteystiedot
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
                    <h3>Jätä yhteydenotto pyyntö ja palaamme mahdollisimman pian!</h3>
                </header>
				<?php echo do_shortcode('[contact-form-7 id="0b99b45" title="Contact"]');?>
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
                <div class="about-info__body" >
                    
                    
                        <div class="about-info__text">
                            <p>
                            Yritys: Lagom Food Oy (3165571-2) <br>
                            Keittiön ja toimiston osoite: Sörnäisten rantatie 27 A, 00500 Helsinki. <br>
                            Asiakaspalvelun puhelinnumero: <a href="tel:+358402160180">+358402160180</a><br>
                            Sähköposti: <a href="mailto:info@calori.fi">info@calori.fi</a> <br>
                            Logistiikan puhelinnumero: <a href="tel:+358442477829">+358442477829</a><br>
                            Sähköposti: <a href="mailto:asiakaspalvelu@priima.fi">asiakaspalvelu@priima.fi</a> 
                            </p>
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
</main>
<?php get_footer() ?>