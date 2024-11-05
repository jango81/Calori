<custom-cart id="cart" class="header__cart cart">
    <div class="cart__body">
        <header class="cart__header">
            <h2 class="cart__title">Ostoskori</h2>
            <span class="cart__close"></span>
        </header>
        <div class="cart__products">
            <div class="cart__container _container">
                <?php if (WC()->cart->is_empty()): ?>
                    <p class="cart__empty">Ostoskorisi on tyhjä</p>
                <?php else:
                    foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item):
                        $cart_product = $cart_item['data'];
                        $product_name = $cart_product->get_name();
                        $product_price = wc_price($cart_product->get_price());
                        $product_quantity = $cart_item['quantity'];
                        $product_total = wc_price($cart_item['line_total']);
                        ?>
                        <div class="cart__product cart-product" data-product-key="<?php echo $cart_item_key?>">
                            <div class="cart-product__image">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/menu/meal1.jpg"
                                    alt="product image" />
                            </div>
                            <div class="cart-product__details">
                                <h3 class="cart-product__name"><strong><?php echo esc_html($product_name) ?></strong></h3>
                                <?php if (isset($cart_item["variation"]) && !empty($cart_item["variation"])): ?>
                                    <ul class="cart-product__options">
                                        <?php foreach ($cart_item["variation"] as $attr_name => $attr_value):
                                            $clean_attr_name = str_replace("attribute_", "", $attr_name);
                                            $attr_label = wc_attribute_label($clean_attr_name);
                                            $term = get_term_by('slug', $attr_value, $clean_attr_name);
                                            $attr_value_label = $term ? $term->name : $attr_value;
                                            ?>
                                            <li>
                                                <span><?php echo esc_html($attr_label) . ":"?></span>
                                                <span><?php echo esc_html($attr_value_label) ?></span>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                                <h4 class="cart-product__price"><b><?php echo $product_price ?></b></h4>
                                <div class="cart-product__actions">
                                    <button class="cart-product__delete">
                                        <div class="icon">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/delete-2-svgrepo-com.svg"
                                                alt="delete icon" />
                                        </div>
                                    </button>
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
                                        <span class="cart-amount__heading">Määrä: <span class="amount"><?php echo esc_html($product_quantity) ?></span><span class="arrow"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; endif ?>
                <!-- <div class="cart__product cart-product">
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
                </div> -->
            </div>
        </div>
        <div class="decor-line">
            <span></span>
        </div>
        <div class="cart__bottom">
            <?php 
            $subtotal = WC()->cart->get_cart_subtotal();
            $delivery_fee = WC()->cart->get_cart_shipping_total();
            $total = WC()->cart->get_cart_total();
            ?>
            <div class="cart__summary cart-summary">
                <div class="cart__container _container">
                    <div class="cart__subtotal cart-subtotal cart-summary__block">
                        <div class="cart-subtotal__text">
                            <p>Välisumma</p>
                        </div>
                        <div class="cart-subtotal__price">
                            <p><?php echo $subtotal ?></p>
                        </div>
                    </div>
                    <div class="cart__delivery cart-delivery cart-summary__block">
                        <div class="cart-delivery__text">
                            <p>Toimitus</p>
                        </div>
                        <div class="cart-delivery__price">
                            <p><?php echo $delivery_fee ?></p>
                        </div>
                    </div>
                    <div class="cart__total cart-total cart-summary__block">
                        <div class="cart-total__text">
                            <p><b>Yhteensä</b></p>
                        </div>
                        <div class="cart-total__price">
                            <p><b><?php echo $subtotal ?></b></p>
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