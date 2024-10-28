<?php 
/* Template Name: Meistä */
get_header() 
?>
<main id="main">
    <custom-cart id="cart" class="header__cart cart">
        <div class="cart__body">
            <header class="cart__header">
                <h2 class="cart__title">Ostoskori</h2>
                <span class="cart__close"></span>
            </header>
            <div class="cart__products">
                <div class="cart__container _container">
                    <div class="cart__product cart-product">
                        <div class="cart-product__image">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/menu/meal1.jpg" alt="product image" />
                        </div>
                        <div class="cart-product__details">
                            <h3 class="cart-product__name"><strong>Spaghetti</strong></h3>
                            <ul class="cart-product__options">
                                <li>Kalorimäärä: 1500 kcal</li>
                                <li>Tilauksen kesto: 1 päivä</li>
                            </ul>
                            <h4 class="cart-product__price"><b>55€</b></h4>
                            <div class="cart-product__actions">
                                <div class="cart-product__delete">
                                    <div class="icon">
                                        <img src="<?php echo get_template_directory_uri()?>/assets/images/icons/delete-2-svgrepo-com.svg" alt="delete icon" />
                                    </div>
                                </div>
                                <div class="cart-product__amount cart-amount">
                                    <select class="cart-amount__select">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    <span class="cart-amount__heading">Määrä: 1 <span></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="decor-line _container">
                        <span></span>
                    </div>
                    <div class="cart__product cart-product">
                        <div class="cart-product__image">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/menu/meal1.jpg" alt="product image" />
                        </div>
                        <div class="cart-product__details">
                            <h3 class="cart-product__name"><strong>Spaghetti</strong></h3>
                            <ul class="cart-product__options">
                                <li>Kalorimäärä: 1500 kcal</li>
                                <li>Tilauksen kesto: 1 päivä</li>
                            </ul>
                            <h4 class="cart-product__price"><b>55€</b></h4>
                            <div class="cart-product__actions">
                                <div class="cart-product__delete">
                                    <div class="icon">
                                        <img src="<?php echo get_template_directory_uri()?>/assets/images/icons/delete-2-svgrepo-com.svg" alt="delete icon" />
                                    </div>
                                </div>
                                <div class="cart-product__amount cart-amount">
                                    <select id="product-amount">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    <span class="cart-amount__heading">Määrä: 1 <span></span></span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="decor-line">
                <span></span>
            </div>
            <div class="cart__bottom">
                <div class="cart__summary cart-summary">
                    <div class="cart__container _container">
                        <div class="cart__subtotal cart-subtotal cart-summary__block">
                            <div class="cart-subtotal__text">
                                <p>Välisumma</p>
                            </div>
                            <div class="cart-subtotal__price">
                                <p>€50</p>
                            </div>
                        </div>
                        <div class="cart__delivery cart-delivery cart-summary__block">
                            <div class="cart-delivery__text">
                                <p>Toimitus</p>
                            </div>
                            <div class="cart-delivery__price">
                                <p>Ilmainen</p>
                            </div>
                        </div>
                        <div class="cart__total cart-total cart-summary__block">
                            <div class="cart-total__text">
                                <p><b>Yhteensä</b></p>
                            </div>
                            <div class="cart-total__price">
                                <p><b>€50</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart__button">
                    <a class="btn btn-solid btn-medium" href=""><span class="btn-text">Maksamaan</span></a>
                </div>
            </div>
        </div>
    </custom-cart>
    <article id="about">
        <section class="about__banner section-banner">
            <div class="about-banner__wrapper section-banner__wrapper _container">
                <header class="about__title section-banner__title">
                    <h1>Meistä</h1>
                </header>
                <p class="about__subtext">Missiomme on tehdä terveellisestä syömisestä helppoa ja maukasta</p>
            </div>
            <div class="about__image section-banner__image">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/menu banner.png" alt="banner image" />
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
                                    <img src="<?php echo get_template_directory_uri()?>/assets/images/quote-icon.png" alt="quote icon" />
                                </div>
                                <span></span>
                            </div>
                            <div class="about-quote__icon">
                                <div class="about-quote__image">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/images/quote-icon.png" alt="quote icon" />
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
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/vastaanota.png" alt="about image" />
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
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/vastaanota.png" alt="about image" />
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
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/vastaanota.png" alt="about image" />
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