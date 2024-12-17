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
            <div class="container">
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
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/meista1.png"
                                            alt="quote icon" />
                                    </div>
                                    <span></span>
                                </div>
                                <div class="about-quote__icon">
                                    <div class="about-quote__image">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/meista2.png"
                                            alt="quote icon" />
                                    </div>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </custom-quote>
            </div>
        </section>
        <section id="about-info">
            <div class="about-info__container container">
                <div class="about-info__body">
                    <div class="about-info__image">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/meista3.png"
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
            <div class="about-info__container container">
                <div class="about-info__body">
                    <div class="about-info__image">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/meista4.png"
                            alt="about image" />
                    </div>
                    <div class="about-info__content">
                        <header class="about-info__heading">
                            <h3><strong>Tehtävämme</strong></h3>
                        </header>
                        <div class="about-info__text">
                            <p>
                                Calori on omistautunut tuottamaan tasapainoisia ja ravitsevia aterioita, jotka vastaavat
                                erilaisiin ruokavaliotarpeisiin mausta tai laadusta tinkimättä. Tehtävänämme on tehdä
                                terveellisestä syömisestä yksinkertaista ja nautinnollista tarjoamalla monipuolisia
                                ruokalistoja, joissa yhdistyvät suomalaisten ruokien tutut mukavuudet ja globaalit
                                ruokatyylit. Teemme terveellisestä syömisestä vaivatonta valmistamalla herkullisia
                                ruokia, joista asiakkaamme voivat nauttia ilman ruoanlaiton vaivaa ja varmistaen, että
                                jokainen ateria on ihastuttava ja ravitseva kokemus.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about-info">
            <div class="about-info__container container">
                <div class="about-info__body">
                    <div class="about-info__image">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/vastaanota.png"
                            alt="about image" />
                    </div>
                    <div class="about-info__content">
                        <header class="about-info__heading">
                            <h3><strong>Keittiö</strong></h3>
                        </header>
                        <div class="about-info__text">
                            <p>
                                Keittiö-operaatioidemme johtajalla on yli 10 vuoden kokemus keittiötyöstä ja hän on
                                työskennellyt pääkokkina erilaisissa suomalaisissa ravintoloissa. Calorin keittiössä hän
                                levittää "hitaan ja hyvän ruoan" periaatetta työssään, yhdistäen intohimonsa
                                laadukkaisiin ainesosiin ja monipuoliseen kokkaamiseen, luoden ainutlaatuisia ja
                                terveellisiä aterioita, jotka ilahduttavat asiakkaitamme päivittäin. Valitessasi
                                Calorin, voit olla varma, että syöt terveellisesti, turvallisesti ja ilman
                                kompromisseja.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </article>
    <div class="main__dark">
    </div>

    <section class="bigbanner timer">
        <div class="timer-wrap">
            <div class="banner-title">
                Ehdi tehdä tilaus
            </div>
            <div class="banner-text">
                Huomaa-lähin toimitus on <span
                    class="nextdate"><?php echo get_field("order_end_day", "option") ?></span>. <br>
                Tilausten vastaanottamisen päättymiseen asti tänä päivänä:
            </div>
            <custom-timer class=" custom-timer" data-day="<?php echo get_field("order_end_day", "option") ?>"
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
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/banner11.png" alt="banner"
            class="bigbanner-bg abs">
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
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/ico05.svg"
                            class="advantages_item_ico">



                        <div class="advantages_item_text">
                            Suunniteltua ja kokattua puolestasi
                        </div>
                    </div>
                    <div class="advantages_item">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/ico06.svg"
                            class="advantages_item_ico">



                        <div class="advantages_item_text">
                            Ravitsemusasiantuntijoita tiimissä
                        </div>
                    </div>
                    <div class="advantages_item">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/ico07.svg"
                            class="advantages_item_ico">


                        <div class="advantages_item_text">
                            Ruokalistat kehittyvät viikoittain
                        </div>
                    </div>
                    <div class="advantages_item">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/ico08.svg"
                            class="advantages_item_ico">


                        <div class="advantages_item_text">
                            Ammattikokkien valmistamaa ruokaa
                        </div>
                    </div>
                    <div class="advantages_item">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/ico09.svg"
                            class="advantages_item_ico">


                        <div class="advantages_item_text">
                            Yli 60 reseptiä reseptikirjassa
                        </div>
                    </div>
                    <div class="advantages_item">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/ico09.svg"
                            class="advantages_item_ico">


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
                        Teemme yhteistyötä
                    </h2>
                </div>

                <div class="partners">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/partner1.png" alt=""
                        class="partners-item">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/partner2.png" alt=""
                        class="partners-item">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/partner3.png" alt=""
                        class="partners-item">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/partner4.png" alt=""
                        class="partners-item">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/partner5.png" alt=""
                        class="partners-item">
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer() ?>