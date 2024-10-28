<?php
/* Template Name: FAQs */
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
    <article id="faq">
        <section class="faq__banner section-banner">
            <div class="faq-banner__wrapper section-banner__wrapper _container">
                <header class="faq__title section-banner__title">
                    <h1>Yleiset kysymykset</h1>
                </header>
            </div>
            <div class="faq__image section-banner__image">
                <img src="images/menu banner.png" alt="banner image" />
            </div>
        </section>
        <div class="faq__container _container">
            <section class="faq__block faq-block">
                <header class="faq-block__title">
                    <h2>Ruoka</h2>
                </header>
                <custom-spoiler class="custom-spoiler faq-spoiler" data-content-padding="10">
                    <div class="custom-spoiler__heading faq-spoiler__heading us-none">
                        <h3>Mitä erikoisruokavalioita otatte huomioon?</h3>
                        <span></span>
                    </div>
                    <div class="custom-spoiler__content faq-spoiler__content">
                        <div class="custom-spoiler__text faq-spoiler__text">
                            <p>
                                Kun teet tilauksen ennen tiistaita 14:30 - tilauksesi toimitetaan ensimmäistä kertaa
                                saman viikon perjantaina kun tilaukset sulkeutuivat. Sen jälkeen saat toimituksia
                                kahdesti viikossa (ti ja pe) kunnes tilauksesi
                                päättyy. Tiistain jälkeen tehdyt tilaukset siirtyvät automaattisesti seuraavalle
                                viikolle.
                            </p>
                        </div>
                    </div>
                </custom-spoiler>
                <custom-spoiler class="custom-spoiler faq-spoiler" data-content-padding="10">
                    <div class="custom-spoiler__heading faq-spoiler__heading us-none">
                        <h3>Onko ruoka terveellistä?</h3>
                        <span></span>
                    </div>
                    <div class="custom-spoiler__content faq-spoiler__content">
                        <p>
                            Ehdottomasti, ruokamme on suunniteltu olemaan paitsi herkullista, myös terveellistä.
                            Tavoitteenamme on tukea hyvinvointiasi tarjoamalla tasapainoisesti jakautuneita
                            ravintoaineita jokaisessa ateriassa. ‍ Tässä on muutama
                            keskeinen seikka ruokavaliostamme: ‍ Päivittäiset kalorimme jakautuvat 20% proteiineihin,
                            30% rasvoihin ja 50% hiilihydraatteihin, mikä tukee optimaalista ravintoainetasapainoa. ‍
                            Lisäämme koko päivän ruokavalioon vain
                            2-3 grammaa suolaa, edistäen sydämesi terveyttä. ‍ Sekasyöjän päivittäinen ruokavalio
                            sisältää noin 300-400 grammaa kasviksia ja 100 grammaa hedelmiä joka toinen päivä ‍
                            Rasvoista 15% on kovia rasvoja ja 85% pehmeitä
                            rasvoja, mikä on linjassa terveellisen ruokavalion suositusten kanssa. ‍ Lisäksi tiheät ja
                            säännölliset ruokailuvälit parantavat aineenvaihduntaasi, sokeritasapainoasi ja yleistä
                            hyvinvointiasi.
                        </p>
                    </div>
                </custom-spoiler>
                <custom-spoiler class="custom-spoiler faq-spoiler" data-content-padding="10">
                    <div class="custom-spoiler__heading faq-spoiler__heading us-none">
                        <h3>Miten varmistatte, että kalorit ja makrot ovat laskettu oikein?</h3>
                        <span></span>
                    </div>
                    <div class="custom-spoiler__content faq-spoiler__content">
                        <div class="custom-spoiler__text faq-spoiler__text">
                            <p>
                                Kun teet tilauksen ennen tiistaita 14:30 - tilauksesi toimitetaan ensimmäistä kertaa
                                saman viikon perjantaina kun tilaukset sulkeutuivat. Sen jälkeen saat toimituksia
                                kahdesti viikossa (ti ja pe) kunnes tilauksesi
                                päättyy. Tiistain jälkeen tehdyt tilaukset siirtyvät automaattisesti seuraavalle
                                viikolle.
                            </p>
                        </div>
                    </div>
                </custom-spoiler>
                <custom-spoiler class="custom-spoiler faq-spoiler" data-content-padding="10">
                    <div class="custom-spoiler__heading faq-spoiler__heading us-none">
                        <h3>Miten maustatte ruoat?</h3>
                        <span></span>
                    </div>
                    <div class="custom-spoiler__content faq-spoiler__content">
                        <p>
                            Ehdottomasti, ruokamme on suunniteltu olemaan paitsi herkullista, myös terveellistä.
                            Tavoitteenamme on tukea hyvinvointiasi tarjoamalla tasapainoisesti jakautuneita
                            ravintoaineita jokaisessa ateriassa. ‍ Tässä on muutama
                            keskeinen seikka ruokavaliostamme: ‍ Päivittäiset kalorimme jakautuvat 20% proteiineihin,
                            30% rasvoihin ja 50% hiilihydraatteihin, mikä tukee optimaalista ravintoainetasapainoa. ‍
                            Lisäämme koko päivän ruokavalioon vain
                            2-3 grammaa suolaa, edistäen sydämesi terveyttä. ‍ Sekasyöjän päivittäinen ruokavalio
                            sisältää noin 300-400 grammaa kasviksia ja 100 grammaa hedelmiä joka toinen päivä ‍
                            Rasvoista 15% on kovia rasvoja ja 85% pehmeitä
                            rasvoja, mikä on linjassa terveellisen ruokavalion suositusten kanssa. ‍ Lisäksi tiheät ja
                            säännölliset ruokailuvälit parantavat aineenvaihduntaasi, sokeritasapainoasi ja yleistä
                            hyvinvointiasi.
                        </p>
                    </div>
                </custom-spoiler>
                <custom-spoiler class="custom-spoiler faq-spoiler" data-content-padding="10">
                    <div class="custom-spoiler__heading faq-spoiler__heading us-none">
                        <h3>Mitä erikoisruokavalioita otatte huomioon?</h3>
                        <span></span>
                    </div>
                    <div class="custom-spoiler__content faq-spoiler__content">
                        <div class="custom-spoiler__text faq-spoiler__text">
                            <p>
                                Kun teet tilauksen ennen tiistaita 14:30 - tilauksesi toimitetaan ensimmäistä kertaa
                                saman viikon perjantaina kun tilaukset sulkeutuivat. Sen jälkeen saat toimituksia
                                kahdesti viikossa (ti ja pe) kunnes tilauksesi
                                päättyy. Tiistain jälkeen tehdyt tilaukset siirtyvät automaattisesti seuraavalle
                                viikolle.
                            </p>
                        </div>
                    </div>
                </custom-spoiler>
                <custom-spoiler class="custom-spoiler faq-spoiler" data-content-padding="10">
                    <div class="custom-spoiler__heading faq-spoiler__heading us-none">
                        <h3>Miten lämmitän ruoat?</h3>
                        <span></span>
                    </div>
                    <div class="custom-spoiler__content faq-spoiler__content">
                        <p>
                            Ehdottomasti, ruokamme on suunniteltu olemaan paitsi herkullista, myös terveellistä.
                            Tavoitteenamme on tukea hyvinvointiasi tarjoamalla tasapainoisesti jakautuneita
                            ravintoaineita jokaisessa ateriassa. ‍ Tässä on muutama
                            keskeinen seikka ruokavaliostamme: ‍ Päivittäiset kalorimme jakautuvat 20% proteiineihin,
                            30% rasvoihin ja 50% hiilihydraatteihin, mikä tukee optimaalista ravintoainetasapainoa. ‍
                            Lisäämme koko päivän ruokavalioon vain
                            2-3 grammaa suolaa, edistäen sydämesi terveyttä. ‍ Sekasyöjän päivittäinen ruokavalio
                            sisältää noin 300-400 grammaa kasviksia ja 100 grammaa hedelmiä joka toinen päivä ‍
                            Rasvoista 15% on kovia rasvoja ja 85% pehmeitä
                            rasvoja, mikä on linjassa terveellisen ruokavalion suositusten kanssa. ‍ Lisäksi tiheät ja
                            säännölliset ruokailuvälit parantavat aineenvaihduntaasi, sokeritasapainoasi ja yleistä
                            hyvinvointiasi.
                        </p>
                    </div>
                </custom-spoiler>
            </section>
            <section class="faq__block faq-block">
                <header class="faq-block__title">
                    <h2>Toimitus</h2>
                </header>
                <custom-spoiler class="custom-spoiler faq-spoiler" data-content-padding="10">
                    <div class="custom-spoiler__heading faq-spoiler__heading us-none">
                        <h3>Mitä erikoisruokavalioita otatte huomioon?</h3>
                        <span></span>
                    </div>
                    <div class="custom-spoiler__content faq-spoiler__content">
                        <div class="custom-spoiler__text faq-spoiler__text">
                            <p>
                                Kun teet tilauksen ennen tiistaita 14:30 - tilauksesi toimitetaan ensimmäistä kertaa
                                saman viikon perjantaina kun tilaukset sulkeutuivat. Sen jälkeen saat toimituksia
                                kahdesti viikossa (ti ja pe) kunnes tilauksesi
                                päättyy. Tiistain jälkeen tehdyt tilaukset siirtyvät automaattisesti seuraavalle
                                viikolle.
                            </p>
                        </div>
                    </div>
                </custom-spoiler>
                <custom-spoiler class="custom-spoiler faq-spoiler" data-content-padding="10">
                    <div class="custom-spoiler__heading faq-spoiler__heading us-none">
                        <h3>Onko ruoka terveellistä?</h3>
                        <span></span>
                    </div>
                    <div class="custom-spoiler__content faq-spoiler__content">
                        <p>
                            Ehdottomasti, ruokamme on suunniteltu olemaan paitsi herkullista, myös terveellistä.
                            Tavoitteenamme on tukea hyvinvointiasi tarjoamalla tasapainoisesti jakautuneita
                            ravintoaineita jokaisessa ateriassa. ‍ Tässä on muutama
                            keskeinen seikka ruokavaliostamme: ‍ Päivittäiset kalorimme jakautuvat 20% proteiineihin,
                            30% rasvoihin ja 50% hiilihydraatteihin, mikä tukee optimaalista ravintoainetasapainoa. ‍
                            Lisäämme koko päivän ruokavalioon vain
                            2-3 grammaa suolaa, edistäen sydämesi terveyttä. ‍ Sekasyöjän päivittäinen ruokavalio
                            sisältää noin 300-400 grammaa kasviksia ja 100 grammaa hedelmiä joka toinen päivä ‍
                            Rasvoista 15% on kovia rasvoja ja 85% pehmeitä
                            rasvoja, mikä on linjassa terveellisen ruokavalion suositusten kanssa. ‍ Lisäksi tiheät ja
                            säännölliset ruokailuvälit parantavat aineenvaihduntaasi, sokeritasapainoasi ja yleistä
                            hyvinvointiasi.
                        </p>
                    </div>
                </custom-spoiler>
                <custom-spoiler class="custom-spoiler faq-spoiler" data-content-padding="10">
                    <div class="custom-spoiler__heading faq-spoiler__heading us-none">
                        <h3>Miten varmistatte, että kalorit ja makrot ovat laskettu oikein?</h3>
                        <span></span>
                    </div>
                    <div class="custom-spoiler__content faq-spoiler__content">
                        <div class="custom-spoiler__text faq-spoiler__text">
                            <p>
                                Kun teet tilauksen ennen tiistaita 14:30 - tilauksesi toimitetaan ensimmäistä kertaa
                                saman viikon perjantaina kun tilaukset sulkeutuivat. Sen jälkeen saat toimituksia
                                kahdesti viikossa (ti ja pe) kunnes tilauksesi
                                päättyy. Tiistain jälkeen tehdyt tilaukset siirtyvät automaattisesti seuraavalle
                                viikolle.
                            </p>
                        </div>
                    </div>
                </custom-spoiler>
                <custom-spoiler class="custom-spoiler faq-spoiler" data-content-padding="10">
                    <div class="custom-spoiler__heading faq-spoiler__heading us-none">
                        <h3>Miten maustatte ruoat?</h3>
                        <span></span>
                    </div>
                    <div class="custom-spoiler__content faq-spoiler__content">
                        <p>
                            Ehdottomasti, ruokamme on suunniteltu olemaan paitsi herkullista, myös terveellistä.
                            Tavoitteenamme on tukea hyvinvointiasi tarjoamalla tasapainoisesti jakautuneita
                            ravintoaineita jokaisessa ateriassa. ‍ Tässä on muutama
                            keskeinen seikka ruokavaliostamme: ‍ Päivittäiset kalorimme jakautuvat 20% proteiineihin,
                            30% rasvoihin ja 50% hiilihydraatteihin, mikä tukee optimaalista ravintoainetasapainoa. ‍
                            Lisäämme koko päivän ruokavalioon vain
                            2-3 grammaa suolaa, edistäen sydämesi terveyttä. ‍ Sekasyöjän päivittäinen ruokavalio
                            sisältää noin 300-400 grammaa kasviksia ja 100 grammaa hedelmiä joka toinen päivä ‍
                            Rasvoista 15% on kovia rasvoja ja 85% pehmeitä
                            rasvoja, mikä on linjassa terveellisen ruokavalion suositusten kanssa. ‍ Lisäksi tiheät ja
                            säännölliset ruokailuvälit parantavat aineenvaihduntaasi, sokeritasapainoasi ja yleistä
                            hyvinvointiasi.
                        </p>
                    </div>
                </custom-spoiler>
                <custom-spoiler class="custom-spoiler faq-spoiler" data-content-padding="10">
                    <div class="custom-spoiler__heading faq-spoiler__heading us-none">
                        <h3>Mitä erikoisruokavalioita otatte huomioon?</h3>
                        <span></span>
                    </div>
                    <div class="custom-spoiler__content faq-spoiler__content">
                        <div class="custom-spoiler__text faq-spoiler__text">
                            <p>
                                Kun teet tilauksen ennen tiistaita 14:30 - tilauksesi toimitetaan ensimmäistä kertaa
                                saman viikon perjantaina kun tilaukset sulkeutuivat. Sen jälkeen saat toimituksia
                                kahdesti viikossa (ti ja pe) kunnes tilauksesi
                                päättyy. Tiistain jälkeen tehdyt tilaukset siirtyvät automaattisesti seuraavalle
                                viikolle.
                            </p>
                        </div>
                    </div>
                </custom-spoiler>
                <custom-spoiler class="custom-spoiler faq-spoiler" data-content-padding="10">
                    <div class="custom-spoiler__heading faq-spoiler__heading us-none">
                        <h3>Miten lämmitän ruoat?</h3>
                        <span></span>
                    </div>
                    <div class="custom-spoiler__content faq-spoiler__content">
                        <p>
                            Ehdottomasti, ruokamme on suunniteltu olemaan paitsi herkullista, myös terveellistä.
                            Tavoitteenamme on tukea hyvinvointiasi tarjoamalla tasapainoisesti jakautuneita
                            ravintoaineita jokaisessa ateriassa. ‍ Tässä on muutama
                            keskeinen seikka ruokavaliostamme: ‍ Päivittäiset kalorimme jakautuvat 20% proteiineihin,
                            30% rasvoihin ja 50% hiilihydraatteihin, mikä tukee optimaalista ravintoainetasapainoa. ‍
                            Lisäämme koko päivän ruokavalioon vain
                            2-3 grammaa suolaa, edistäen sydämesi terveyttä. ‍ Sekasyöjän päivittäinen ruokavalio
                            sisältää noin 300-400 grammaa kasviksia ja 100 grammaa hedelmiä joka toinen päivä ‍
                            Rasvoista 15% on kovia rasvoja ja 85% pehmeitä
                            rasvoja, mikä on linjassa terveellisen ruokavalion suositusten kanssa. ‍ Lisäksi tiheät ja
                            säännölliset ruokailuvälit parantavat aineenvaihduntaasi, sokeritasapainoasi ja yleistä
                            hyvinvointiasi.
                        </p>
                    </div>
                </custom-spoiler>
            </section>
        </div>
    </article>
    <div class="main__dark">
    </div>
</main>
<?php get_footer() ?>