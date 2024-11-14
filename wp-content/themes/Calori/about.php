<?php
/* Template Name: Meistä */
get_header(null, array("announcement" => false, "show_cart" => true))
    ?>
<main id="main">
    <?php get_template_part("mini-cart") ?>
    <div class="loading" id="loading">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/loading-gif.gif" alt="loading">
    </div>
    <article id="about">
        <section class="about__banner section-banner">
            <div class="about-banner__wrapper section-banner__wrapper _container">
                <header class="about__title section-banner__title">
                    <h1>Meistä</h1>
                </header>
                <p class="about__subtext">Missiomme on tehdä terveellisestä syömisestä helppoa ja maukasta</p>
            </div>
            <div class="about__image section-banner__image">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/menu banner.png" alt="banner image" />
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
</main>
<?php get_footer() ?>