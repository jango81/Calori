<?php
/* Template Name: Ota yhteyttä */
get_header();
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
    <article class="contact">
        <section class="contact__banner section-banner">
            <div class="contact-banner__wrapper section-banner__wrapper _container">
                <header class="contact__title section-banner__title">
                    <h1>Yhteystiedot</h1>
                </header>
            </div>
            <div class="contact__image section-banner__image">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/menu banner.png" alt="banner image" />
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