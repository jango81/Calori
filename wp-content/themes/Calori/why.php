<?php
/* Template Name: Miksi Calori? */
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
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/menu/meal1.jpg"
                                alt="product image" />
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
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/delete-2-svgrepo-com.svg"
                                            alt="delete icon" />
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
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/menu/meal1.jpg"
                                alt="product image" />
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
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/delete-2-svgrepo-com.svg"
                                            alt="delete icon" />
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
    <article id="why-calori">
        <div class="why-calori__banner section-banner">
            <div class="why-calori-banner__wrapper section-banner__wrapper _container">
                <header class="why-calori__title section-banner__title">
                    <h1>Miksi Calori?</h1>
                </header>
            </div>
            <div class="why-calori__banner-image section-banner__image">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/menu banner.png"
                    alt="banner image" />
            </div>
        </div>
        <div class="why-calori__container _container">
            <section class="why-calori__block">
                <div class="why-calori__image">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/vastaanota.png"
                        alt="why calori image">
                </div>
                <div class="why-calori__content">
                    <header class="why-calori__heading">
                        <h3><strong>Ylläpidä säännöllistä ruokailua</strong></h3>
                    </header>
                    <div class="why-calori__text">
                        <ul>
                            <li>2-5 ravitsevaa ateriaa päiväksi</li>
                            <li>Optimaalinen ravintoainejakauma</li>
                            <li>Pudota painoa, syö oikein tai nosta painoa</li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="why-calori__block">
                <div class="why-calori__image">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/vastaanota.png"
                        alt="why calori image">
                </div>
                <div class="why-calori__content">
                    <header class="why-calori__heading">
                        <h3><strong>Ylläpidä säännöllistä ruokailua</strong></h3>
                    </header>
                    <div class="why-calori__text">
                        <ul>
                            <li>2-5 ravitsevaa ateriaa päiväksi</li>
                            <li>Optimaalinen ravintoainejakauma</li>
                            <li>Pudota painoa, syö oikein tai nosta painoa</li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="why-calori__block">
                <div class="why-calori__image">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/vastaanota.png"
                        alt="why calori image">
                </div>
                <div class="why-calori__content">
                    <header class="why-calori__heading">
                        <h3><strong>Ylläpidä säännöllistä ruokailua</strong></h3>
                    </header>
                    <div class="why-calori__text">
                        <ul>
                            <li>2-5 ravitsevaa ateriaa päiväksi</li>
                            <li>Optimaalinen ravintoainejakauma</li>
                            <li>Pudota painoa, syö oikein tai nosta painoa</li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="why-calori__block">
                <div class="why-calori__image">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/vastaanota.png"
                        alt="why calori image">
                </div>
                <div class="why-calori__content">
                    <header class="why-calori__heading">
                        <h3><strong>Ylläpidä säännöllistä ruokailua</strong></h3>
                    </header>
                    <div class="why-calori__text">
                        <ul>
                            <li>2-5 ravitsevaa ateriaa päiväksi</li>
                            <li>Optimaalinen ravintoainejakauma</li>
                            <li>Pudota painoa, syö oikein tai nosta painoa</li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="why-calori__block">
                <div class="why-calori__image">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/vastaanota.png"
                        alt="why calori image">
                </div>
                <div class="why-calori__content">
                    <header class="why-calori__heading">
                        <h3><strong>Ylläpidä säännöllistä ruokailua</strong></h3>
                    </header>
                    <div class="why-calori__text">
                        <ul>
                            <li>2-5 ravitsevaa ateriaa päiväksi</li>
                            <li>Optimaalinen ravintoainejakauma</li>
                            <li>Pudota painoa, syö oikein tai nosta painoa</li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </article>
    <div class="main__dark">
    </div>
</main>
<section class="order-now__banner section-banner">
    <div class="order-now__banner section-banner">
        <div class="order-now__wrapper section-banner__wrapper _container">
            <header class="order-now__title section-banner__title">
                <h3>Tilaa alkaen 5,7€ / ateria</h3>
            </header>
            <a href="#" class="order-now-button btn btn-transparent btn-small">Tilaa nyt</a>
        </div>
        <div class="order-now__banner-image section-banner__image">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/menu banner.png" alt="banner image" />
        </div>
    </div>
</section>
<?php get_footer() ?>