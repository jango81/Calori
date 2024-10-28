<?php
/* Template Name: Ruokalista */
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
                            <img src="images/menu/meal1.jpg" alt="product image" />
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
                                        <img src="images/icons/delete-2-svgrepo-com.svg" alt="delete icon" />
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
                            <img src="images/menu/meal1.jpg" alt="product image" />
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
                                        <img src="images/icons/delete-2-svgrepo-com.svg" alt="delete icon" />
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
    <section id="menu">
        <div class="menu__banner section-banner">
            <div class="menu-banner__wrapper section-banner__wrapper _container">
                <header class="menu__title section-banner__title">
                    <h3>Tämän ja seuraavan viikon</h3>
                    <h1>RUOKALISTAT</h1>
                </header>
            </div>
            <div class="menu__image section-banner__image">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/menu banner.png" alt="banner image" />
            </div>
        </div>
        <custom-menu class="menu">
            <div class="menu__container _container">
                <div class="menu__body">
                    <div class="menu__sticky">
                        <time class="menu__date"><strong>16.05 - 23.05</strong></time>
                        <div class="menu__buttons">
                            <button class="menu__current menu__button">Tämä viikko</button>
                            <button class="menu__next menu__button">Seuraava viikko</button>
                        </div>
                    </div>
                    <div class="menu__day day-menu">
                        <h2 class="day-menu__heading">Maanantai</h2>
                        <div class="swiper day-menu__swiper day-swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide day-slide">
                                    <div class="day-slide__content day-card">
                                        <div class="day-slide__image day-card-image">
                                            <img src="images/menu/meal1.jpg" alt="meal image" />
                                        </div>
                                        <div class="day-slide__info day-card-info">
                                            <ul class="day-slide__properties day-card-propeties">
                                                <li>Laktoositon</li>
                                                <li>KYLMÄ</li>
                                            </ul>
                                            <h3 class="day-slide__meal day-card-meal">Aamupala</h3>
                                            <h2 class="day-slide__name day-card-meal-name"><strong>Spaghetti</strong>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide day-slide">
                                    <div class="day-slide__content day-card">
                                        <div class="day-slide__image day-card-image">
                                            <img src="images/menu/meal2.jpg" alt="meal image" />
                                        </div>
                                        <div class="day-slide__info day-card-info">
                                            <ul class="day-slide__properties day-card-propeties">
                                                <li>Laktoositon</li>
                                                <li>KYLMÄ</li>
                                            </ul>
                                            <h3 class="day-slide__meal day-card-meal">Aamupala</h3>
                                            <h2 class="day-slide__name day-card-meal-name"><strong>Spaghetti</strong>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide day-slide">
                                    <div class="day-slide__content day-card">
                                        <div class="day-slide__image day-card-image">
                                            <img src="images/menu/meal3.jpg" alt="meal image" />
                                        </div>
                                        <div class="day-slide__info day-card-info">
                                            <ul class="day-slide__properties day-card-propeties">
                                                <li>Laktoositon</li>
                                                <li>KYLMÄ</li>
                                            </ul>
                                            <h3 class="day-slide__meal day-card-meal">Aamupala</h3>
                                            <h2 class="day-slide__name day-card-meal-name"><strong>Spaghetti</strong>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide day-slide">
                                    <div class="day-slide__content day-card">
                                        <div class="day-slide__image day-card-image">
                                            <img src="images/menu/meal4.jpg" alt="meal image" />
                                        </div>
                                        <div class="day-slide__info day-card-info">
                                            <ul class="day-slide__properties day-card-propeties">
                                                <li>Laktoositon</li>
                                                <li>KYLMÄ</li>
                                            </ul>
                                            <h3 class="day-slide__meal day-card-meal">Aamupala</h3>
                                            <h2 class="day-slide__name day-card-meal-name"><strong>Spaghetti</strong>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                            <!-- <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div> -->
                        </div>
                    </div>
                    <div class="menu__day day-menu">
                        <h2 class="day-menu__heading">Tiistai</h2>
                        <div class="swiper day-menu__swiper day-swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide day-slide">
                                    <div class="day-slide__content day-card">
                                        <div class="day-slide__image day-card-image">
                                            <img src="images/menu/meal1.jpg" alt="meal image" />
                                        </div>
                                        <div class="day-slide__info day-card-info">
                                            <ul class="day-slide__properties day-card-propeties">
                                                <li>Laktoositon</li>
                                                <li>KYLMÄ</li>
                                            </ul>
                                            <h3 class="day-slide__meal day-card-meal">Aamupala</h3>
                                            <h2 class="day-slide__name day-card-meal-name"><strong>Spaghetti</strong>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide day-slide">
                                    <div class="day-slide__content day-card">
                                        <div class="day-slide__image day-card-image">
                                            <img src="images/menu/meal2.jpg" alt="meal image" />
                                        </div>
                                        <div class="day-slide__info day-card-info">
                                            <ul class="day-slide__properties day-card-propeties">
                                                <li>Laktoositon</li>
                                                <li>KYLMÄ</li>
                                            </ul>
                                            <h3 class="day-slide__meal day-card-meal">Aamupala</h3>
                                            <h2 class="day-slide__name day-card-meal-name"><strong>Spaghetti</strong>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide day-slide">
                                    <div class="day-slide__content day-card">
                                        <div class="day-slide__image day-card-image">
                                            <img src="images/menu/meal3.jpg" alt="meal image" />
                                        </div>
                                        <div class="day-slide__info day-card-info">
                                            <ul class="day-slide__properties day-card-propeties">
                                                <li>Laktoositon</li>
                                                <li>KYLMÄ</li>
                                            </ul>
                                            <h3 class="day-slide__meal day-card-meal">Aamupala</h3>
                                            <h2 class="day-slide__name day-card-meal-name"><strong>Spaghetti</strong>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide day-slide">
                                    <div class="day-slide__content day-card">
                                        <div class="day-slide__image day-card-image">
                                            <img src="images/menu/meal4.jpg" alt="meal image" />
                                        </div>
                                        <div class="day-slide__info day-card-info">
                                            <ul class="day-slide__properties day-card-propeties">
                                                <li>Laktoositon</li>
                                                <li>KYLMÄ</li>
                                            </ul>
                                            <h3 class="day-slide__meal day-card-meal">Aamupala</h3>
                                            <h2 class="day-slide__name day-card-meal-name"><strong>Spaghetti</strong>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                            <!-- <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div> -->
                        </div>
                    </div>
                    <div class="menu__day day-menu">
                        <h2 class="day-menu__heading">Keskiviikko</h2>
                        <div class="swiper day-menu__swiper day-swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide day-slide">
                                    <div class="day-slide__content day-card">
                                        <div class="day-slide__image day-card-image">
                                            <img src="images/menu/meal1.jpg" alt="meal image" />
                                        </div>
                                        <div class="day-slide__info day-card-info">
                                            <ul class="day-slide__properties day-card-propeties">
                                                <li>Laktoositon</li>
                                                <li>KYLMÄ</li>
                                            </ul>
                                            <h3 class="day-slide__meal day-card-meal">Aamupala</h3>
                                            <h2 class="day-slide__name day-card-meal-name"><strong>Spaghetti</strong>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide day-slide">
                                    <div class="day-slide__content day-card">
                                        <div class="day-slide__image day-card-image">
                                            <img src="images/menu/meal2.jpg" alt="meal image" />
                                        </div>
                                        <div class="day-slide__info day-card-info">
                                            <ul class="day-slide__properties day-card-propeties">
                                                <li>Laktoositon</li>
                                                <li>KYLMÄ</li>
                                            </ul>
                                            <h3 class="day-slide__meal day-card-meal">Aamupala</h3>
                                            <h2 class="day-slide__name day-card-meal-name"><strong>Spaghetti</strong>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide day-slide">
                                    <div class="day-slide__content day-card">
                                        <div class="day-slide__image day-card-image">
                                            <img src="images/menu/meal3.jpg" alt="meal image" />
                                        </div>
                                        <div class="day-slide__info day-card-info">
                                            <ul class="day-slide__properties day-card-propeties">
                                                <li>Laktoositon</li>
                                                <li>KYLMÄ</li>
                                            </ul>
                                            <h3 class="day-slide__meal day-card-meal">Aamupala</h3>
                                            <h2 class="day-slide__name day-card-meal-name"><strong>Spaghetti</strong>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide day-slide">
                                    <div class="day-slide__content day-card">
                                        <div class="day-slide__image day-card-image">
                                            <img src="images/menu/meal4.jpg" alt="meal image" />
                                        </div>
                                        <div class="day-slide__info day-card-info">
                                            <ul class="day-slide__properties day-card-propeties">
                                                <li>Laktoositon</li>
                                                <li>KYLMÄ</li>
                                            </ul>
                                            <h3 class="day-slide__meal day-card-meal">Aamupala</h3>
                                            <h2 class="day-slide__name day-card-meal-name"><strong>Spaghetti</strong>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                            <!-- <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-popup__meal popup-meal">
                <div class="popup-meal__wrapper">
                    <div class="popup-meal__content day-card">
                        <div class="popup-meal__image day-card-image">
                            <img src="images/menu/menu image.jpg" alt="meal image" />
                        </div>
                        <div class="popup-meal__info day-card-info">
                            <ul class="popup-meal__properties day-card-propeties">
                                <li>Laktoositon</li>
                                <li>KYLMÄ</li>
                                <li>MIKRO</li>
                            </ul>
                            <h3 class="popup-meal__meal day-card-meal">Aamupala</h3>
                            <h2 class="popup-meal__name day-card-meal-name"><strong>Spaghetti</strong></h2>
                            <div class="popup-meal__block popup-block">
                                <h4 class="popup-block__title">Ainesosat:</h4>
                                <p class="popup-meal__ingredients">Tofua, kookoskastiketta, porkkanaa, edamamea,
                                    höyrytettyä jasmiiniriisiä</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </custom-menu>
    </section>
    <div class="main__dark">
    </div>
</main>
<?php get_footer() ?>