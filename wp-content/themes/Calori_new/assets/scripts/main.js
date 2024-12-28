import { Time } from "./helper.js";
document.addEventListener("DOMContentLoaded", () => {
    const announcementSelectors = {
        announcementItem: ".announcement__item",
        announcementIcon: ".announcement__icon",
        announcementHeading: ".announcement__heading",
    };

    const announcementDataAttributes = {
        heading: "data-heading",
        iconUrl: "data-icon",
    };

    class AnnouncementBar extends HTMLElement {
        constructor() {
            super();
            this.windowWidth = window.innerWidth;
            this.itemsCount = 14;
        }
        init() {
            this.contentBlock = this.querySelector(".announcement__content");
            this.iconUrl = this.getAttribute(announcementDataAttributes.iconUrl);
            this.headingText = this.getAttribute(announcementDataAttributes.heading);
        }
        connectedCallback() {
            this.init();
            this.addItems();
            requestAnimationFrame(this.animate.bind(this));
        }
        addItems() {
            for (let i = 0; i < this.itemsCount; i++) {
                const itemBlock = document.createElement("div");
                itemBlock.classList.add("announcement__item");

                const iconElement = document.createElement("div");
                iconElement.classList.add("announcement__icon");
                iconElement.innerHTML = `<img src="${this.iconUrl}" alt="" />`;

                const headingElement = document.createElement("h3");
                headingElement.classList.add("announcement__heading");
                headingElement.textContent = this.headingText;

                itemBlock.appendChild(iconElement);
                itemBlock.appendChild(headingElement);

                this.contentBlock.prepend(itemBlock);
            }
        }
        checkViewPoint(element) {
            const rect = element.getBoundingClientRect();
            const elementRight = rect.right;

            if (elementRight <= 0) {
                this.contentBlock.appendChild(element);
                element.style.marginLeft = 0;
                return true;
            }

            return false;
        }
        animate() {
            const firstElement = this.querySelector(`${announcementSelectors.announcementItem}:first-child`);

            const elementMarginLeft = parseInt(window.getComputedStyle(firstElement).marginLeft);

            if (isNaN(elementMarginLeft)) {
                elementMarginLeft = 0;
            }

            firstElement.style.marginLeft = `${elementMarginLeft - 1}px`;

            this.checkViewPoint(firstElement);

            requestAnimationFrame(this.animate.bind(this));
        }
    }
    customElements.define("announcement-bar", AnnouncementBar);

    const cartSelectors = {
        product: ".cart__product",
        productName: ".cart-product__name",
        productOptions: ".cart-product__options",
        productPrice: ".cart-product__price",
        productAmount: ".cart-product__amount .amount",
        productAmountSelect: ".cart-amount__select",
        closeButton: ".cart__close",
        deleteProduct: ".cart-product__delete",
        productContainer: ".cart__container",
        cartSubtotal: ".cart-subtotal__price",
        cartDelivery: ".cart-delivery__price",
        cartTotal: ".cart-total__price",
    };
    const cartAttributes = {
        dataProductKey: "data-product-key",
    };
    class CustomCart extends HTMLElement {
        constructor() {
            super();
            this.cartAjaxStartEvent = new CustomEvent("cartAjaxStart");
            this.cartAjaxCompleteEvent = new CustomEvent("cartAjaxComplete");
        }

        connectedCallback() {
            this.init();
        }

        init() {
            this.loading = document.querySelector(".calori-loading");
            this.closeButton = this.querySelector(cartSelectors.closeButton);
            this.productContainer = this.querySelector(cartSelectors.productContainer);
            this.subtotal = this.querySelector(cartSelectors.cartSubtotal);
            this.delivery = this.querySelector(cartSelectors.cartDelivery);
            this.total = this.querySelector(cartSelectors.cartTotal);
            this.mainDark = document.querySelector(".main__dark");
            this.cart = document.querySelector("#cart");
            this.amountSelects = this.querySelectorAll(cartSelectors.productAmountSelect);
            this.deleteProductBtn = this.querySelectorAll(cartSelectors.deleteProduct);

            this.attachEvents();
        }
        attachEvents() {
            this.deleteProductBtn.forEach((el) => el.addEventListener("click", this.deleteProduct.bind(this)));
            this.amountSelects.forEach((el) => el.addEventListener("change", this.updateAmount.bind(this)));

            document.addEventListener("showCart", this.open.bind(this));

            this.closeButton.addEventListener("click", this.closeHandle.bind(this));

            this.mainDark.addEventListener("click", () => {
                this.mainDark.classList.remove("_active");
                this.classList.remove("_active");
            });
        }
        async updateAmount(event) {
            const target = event.currentTarget;
            const parent = target.closest(cartSelectors.product);
            const productCartKey = parent.getAttribute(cartAttributes.dataProductKey);
            const amount = target.value;

            const response = await this.fetchUpdateAmount(productCartKey, amount, parent);

            this.setSummary(response);
        }
        async fetchUpdateAmount(key, amount, parent) {
            try {
                this.dispatchEvent(this.cartAjaxStartEvent);
                //this.loading.style.display = "block";
                const response = await fetch(ajax_object.ajax_url, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded",
                    },
                    body: new URLSearchParams({ action: "update_product_amount", product_key: key, product_amount: amount }),
                });

                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }

                const data = await response.json();

                if (data.success) {
                    //this.loading.style.display = "none";
                    parent.querySelector(cartSelectors.productAmount).textContent = data.data.product_new_amount;
                    this.updateCartCount(data.data.cart_count);
                }

                return data.data;
            } catch (error) {
                console.error(error);
            } finally {
                this.dispatchEvent(this.cartAjaxCompleteEvent);
            }
        }
        setSummary(data) {
            this.subtotal.innerHTML = data.cart_subtotal;
            this.delivery.innerHTML = data.cart_delivery_fee;
            this.total.innerHTML = `<b>${data.cart_total}</b>`;
        }
        updateCart(event) {
            this.setSummary(event.detail);
        }
        async deleteProduct(event) {
            const target = event.currentTarget;
            const parent = target.closest(cartSelectors.product);
            const productCartKey = parent.getAttribute(cartAttributes.dataProductKey);

            const response = await this.fetchDeleteProduct(productCartKey, parent);

            if (response.cart_count <= 0) {
                this.productContainer.innerHTML = '<p class="cart__empty">Ostoskorisi on tyhjä</p>';
            }

            this.setSummary(response);
        }
        async fetchDeleteProduct(key, parent) {
            try {
                //this.loading.display = "block";
                this.dispatchEvent(this.cartAjaxStartEvent);
                const response = await fetch(ajax_object.ajax_url, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded",
                    },
                    body: new URLSearchParams({ action: "delete_product_cart", product_key: key }),
                });

                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }

                const data = await response.json();

                if (data.success) {
                    //this.loading.style.display = "none";
                    this.updateCartCount(data.data.cart_count);
                }

                parent.remove();

                return data.data;
            } catch (error) {
                console.error(error);
            } finally {
                this.dispatchEvent(this.cartAjaxCompleteEvent);
            }
        }
        open() {
            console.log("Open cart");

            this.classList.add("_active");
            this.mainDark.classList.add("_active");
            console.log("main dark", this.mainDark);
        }
        closeHandle() {
            this.classList.remove("_active");
            this.mainDark.classList.remove("_active");
        }
        updateCartCount(count) {
            const headerCartCount = document.querySelector(".header .cart-text-round");
            headerCartCount.textContent = count;
        }
    }
    customElements.define("custom-cart", CustomCart);

    const customSelect = {
        customSelecValue: ".custom-select__value",
        customSelectOptions: ".custom-select__options",
        customSelectOption: ".custom-select__option",
    };
    class CustomSelect extends HTMLElement {
        constructor() {
            super();
        }

        connectedCallback() {
            this.init();
            this.changeHeading();
        }

        init() {
            this.defaultSelect = this.querySelector("select");
            this.customSelectValue = this.querySelector(customSelect.customSelecValue);
            this.customSelectOptions = this.querySelector(customSelect.customSelectOptions);
            this.customSelectOption = this.querySelectorAll(customSelect.customSelectOption);
            this.heading = this.getAttribute("data-heading");

            this.customSelectValue.addEventListener("click", this.selectClickHandle.bind(this));
            this.customSelectOption.forEach((el) => el.addEventListener("click", this.setSelectData.bind(this)));

            this.setAttribute("data-value", this.customSelectOption[0].getAttribute("data-value"));
        }

        changeHeading() {
            this.customSelectValue.querySelector("h5").textContent = this.heading;
        }

        selectClickHandle() {
            this.customSelectValue.classList.toggle("_opened");
            this.customSelectOptions.classList.toggle("_opened");

            if (this.customSelectValue.classList.contains("_opened") && this.customSelectOptions.classList.contains("_opened")) {
                this.openSelectOptions();
            } else {
                this.closeSelectOptions();
            }
        }

        openSelectOptions() {
            const selectValueHeight = this.customSelectValue.offsetHeight;
            const selectValueOptions = this.customSelectOptions.scrollHeight;
            this.customSelectOptions.style.height = "0px";
            setTimeout(() => {
                this.customSelectOptions.style.height = `${selectValueOptions + selectValueHeight}px`;
                this.customSelectOptions.style.paddingTop = `${selectValueHeight}px`;
            }, 0);
        }
        closeSelectOptions() {
            if (this.customSelectValue.classList.contains("_opened") && this.customSelectOptions.classList.contains("_opened")) {
                this.customSelectValue.classList.remove("_opened");
                this.customSelectOptions.classList.remove("_opened");
            }
            this.customSelectOptions.style.height = 0;
            this.customSelectOptions.style.paddingTop = 0;
        }

        setSelectData(event) {
            const currentOption = event.currentTarget;
            const dataValue = currentOption.getAttribute("data-value");
            if (!dataValue) throw new Error("data-value attribute is undefined");

            this.setAttribute("data-value", dataValue);
            this.heading = currentOption.outerText;

            this.changeHeading();
            this.closeSelectOptions();
            this.dispatchEvent(new Event("change"));
        }
    }

    customElements.define("custom-select", CustomSelect);

    const timerSelectors = {
        days: "#timer-days",
        hours: "#timer-hours",
        minutes: "#timer-minutes",
        seconds: "#timer-seconds",
    };

    class CustomTimer extends HTMLElement {
        constructor() {
            super();
            this.daysInMs = 1000 * 60 * 60 * 24;
            this.hoursInMs = this.daysInMs / 24;
            this.minutesInMs = this.hoursInMs / 60;
            this.secondsInMs = this.minutesInMs / 60;
            this.time = new Time();
        }

        connectedCallback() {
            this.init();
            this.setEndDate();

            this.interval = setInterval(this.updateTime.bind(this), 1000);
        }
        init() {
            this.daysElement = this.querySelector(timerSelectors.days);
            this.hoursElement = this.querySelector(timerSelectors.hours);
            this.minutesElement = this.querySelector(timerSelectors.minutes);
            this.secondsElement = this.querySelector(timerSelectors.seconds);

            this.endDay = this.getAttribute("data-day").toLowerCase();
            this.endTime = this.getAttribute("data-time");
        }

        setEndDate() {
            this.endDate = this.time.getEndDate(this.endDay, this.endTime);
            this.parsedDate = Date.parse(this.endDate);
        }

        convertTime(timeInMs) {
            const days = parseInt(timeInMs / this.daysInMs, 10);
            timeInMs -= days * this.daysInMs;
            const hours = parseInt(timeInMs / this.hoursInMs, 10);
            timeInMs -= hours * this.hoursInMs;
            const minutes = parseInt(timeInMs / this.minutesInMs, 10);
            timeInMs -= minutes * this.minutesInMs;
            const seconds = parseInt(timeInMs / this.secondsInMs, 10);

            return {
                days: days,
                hours: hours,
                minutes: minutes,
                seconds: seconds,
            };
        }

        formatDigits(number) {
            if (number < 10 && number !== 0) number = "0" + number;
            return number;
        }

        render(time) {
            this.daysElement.textContent = time.days;
            this.hoursElement.textContent = time.hours;
            this.minutesElement.textContent = time.minutes;
            this.secondsElement.textContent = time.seconds;
        }

        updateTime() {
            const currentDate = Date.now();
            const timeDiff = this.parsedDate - currentDate;

            if (timeDiff <= 0) {
                this.setEndDate();
                return;
            }

            const remainingTime = this.convertTime(timeDiff);

            this.render(remainingTime);
        }
    }
    customElements.define("custom-timer", CustomTimer);

    const customSpoilerSelectors = {
        spoilerHeading: ".custom-spoiler__heading",
        spoilerContent: ".custom-spoiler__content",
        spoilerText: ".custom-spoiler__text",
    };

    class CustomSpoiler extends HTMLElement {
        constructor() {
            super();
        }

        connectedCallback() {
            this.init();
            this.content.style.height = 0;
        }
        init() {
            this.content = this.querySelector(customSpoilerSelectors.spoilerContent);
            this.spoilerText = this.querySelector(customSpoilerSelectors.spoilerText);

            this.contentPadding = this.getAttribute("data-content-padding");

            this.addEventListener("click", this.spoilerHandle.bind(this));
        }
        spoilerHandle() {
            this.classList.toggle("_opened");
            this.changeSpoilerHeight();
        }

        changeSpoilerHeight() {
            let contentHeight = this.content.scrollHeight;
            contentHeight += parseInt(this.contentPadding * 2);

            if (this.classList.contains("_opened")) {
                this.content.style.paddingTop = this.contentPadding + "px";
                this.content.style.paddingBottom = this.contentPadding + "px";
                this.content.style.height = contentHeight + "px";
            } else {
                this.content.style.paddingTop = 0;
                this.content.style.paddingBottom = 0;
                this.content.style.height = 0;
            }
        }
    }

    customElements.define("custom-spoiler", CustomSpoiler);

    const disableDoubleTouchZoom = () => {
        let lastTouchEnd = 0;

        document.addEventListener(
            "touchend",
            function (event) {
                const now = new Date().getTime();
                if (now - lastTouchEnd <= 300) {
                    event.preventDefault();
                }
                lastTouchEnd = now;
            },
            false
        );
    };

    disableDoubleTouchZoom();

    if (localStorage.getItem("cartUpdated") === "true") {
        localStorage.removeItem("cartUpdated");
        document.querySelector("#cart").open();
    }

    jQuery(document).ready(function ($) {
        function addNotify(message, type = "error") {
            const notifyContainer = $("#notify-container");
            let iconUrl = "";

            switch (type) {
                case "error":
                    iconUrl = notifyContainer.data("error-icon");
                    break;
                case "info":
                    iconUrl = notifyContainer.data("info-icon");
                    break;
            }

            const notifyHtml = `
              <div class="calori-message-notify ${type}" style="display: none;">
                <div class="message-wrapper">
                  <div class="message-content">
                    <div class="message-title-icons">
                      <div class="message-icon">
                        <img src="${iconUrl}" alt="${type} icon">
                      </div>
                    </div>
                    <div class="message-text">
                      <p>${message}</p>
                    </div>
                    <div class="message-close">
                      <span></span>
                    </div>
                  </div>
                </div>
              </div>
            `;

            const notify = $(notifyHtml);
            notifyContainer.append(notify);
            notify.fadeIn(200);

            notify.find(".message-close").on("click", function () {
                notify.fadeOut(200, function () {
                    $(this).remove();
                });
            });

            setTimeout(() => {
                notify.fadeOut(200, function () {
                    $(this).remove();
                });
            }, 5000);
        }

        let a = 1;

        $(".menuswiper").each(function () {
            var menuswiper = new Swiper(this, {
                slidesPerView: 4,
                spaceBetween: 24,
                loop: false,
                navigation: {
                    nextEl: ".arrow-right" + a,
                    prevEl: ".arrow-left" + a,
                },
                breakpoints: {
                    0: {
                        slidesPerView: "auto",
                        spaceBetween: 12,
                        centeredSlides: true,
                    },
                    1200: {
                        slidesPerView: 4,
                        spaceBetween: 24,
                        centeredSlides: false,
                    },
                },
            });
        });

        a++;

        let b = 1;
        $(".menu__button").on("click", function () {
            // if (! $(this).parent().children('input').attr('checked', 'checked')){
            var postId = $(this).data("post-id");

            if (!postId) return;

            $.ajax({
                url: ajax_object.ajax_url, // URL, к которому мы будем делать запрос
                type: "POST",
                data: {
                    action: "load_post_content", // Название действия
                    post_type: "ruokalistat",
                    post_id: postId, // ID поста
                },
                beforeSend: function () {
                    $(".week-menu-tabscontent").empty();
                    $(".week-menu-tabs_tab").removeClass("active");
                    $(".week-menu-tabs_tab").eq(0).addClass("active");
                    $(".week-menu-tabs").css("display", "none");
                    $(".menu__loading").addClass("_active");
                },
                success: function (response) {
                    $(".week-menu-tabs").css("display", "flex");
                    $(".menu__loading").removeClass("_active");

                    $(".week-menu-tabscontent").html(response); // Вставляем полученный контент в div

                    b = 1;

                    $(".menuswiper").each(function () {
                        var menuswiper = new Swiper(this, {
                            slidesPerView: 4,
                            spaceBetween: 24,
                            loop: false,
                            navigation: {
                                nextEl: ".arrow-right" + a,
                                prevEl: ".arrow-left" + a,
                            },
                            breakpoints: {
                                0: {
                                    slidesPerView: "auto",
                                    spaceBetween: 12,
                                    centeredSlides: true,
                                },
                                1200: {
                                    slidesPerView: 4,
                                    spaceBetween: 24,
                                    centeredSlides: false,
                                },
                            },
                        });

                        b++;
                    });
                },
                error: function (xhr, status, error) {
                    $(".menu__loading").removeClass("_active");
                    console.error("Ошибка при загрузке");
                },
            });
            // }
        });

        //Show ingredient spoiler on mobile
        $(".order-block.ingredients .spoiler-title").click(function () {
            const content = $(this).next(".spoiler-content");
            content.slideToggle(300);
            const spoiler = $(this).closest(".spoiler");

            spoiler.toggleClass("_active");
        });

        //Check ingredient checkbox when click on ingredient block
        $(".order-block.ingredients .check-box").click(function (event) {
            console.log(event.target);
            if (!$(event.target).is("input") && !$(event.target).is("label")) {
                const input = $(this).find("input[type='checkbox']");
                const isChecked = input.prop("checked");

                input.prop("checked", !isChecked);
            }
        });

        //Scroll to order section when click on order now button"
        $(".first-screen .btn.green").click(function () {
            $("#order")[0].scrollIntoView({ behavior: "smooth" });
        });

        //Scroll to order section when click on order now button"
        $(".header .btn.green").click(function () {
            $("#order")[0].scrollIntoView({ behavior: "smooth" });
        });

        //Enable loading when page is loading
        $(document).ready(function () {
            const loader = $(".calori-loading");
            loader.fadeOut(500, function () {
                loader.removeClass("_active");
                $("#wrapper").css("display", "block");
            });
        });

        //Shows loading when cart is updating
        $("#cart").on("cartAjaxStart", function () {
            $(".calori-loading").fadeIn(500);
        });

        //Hides loading when cart is updated
        $("#cart").on("cartAjaxComplete", function () {
            const loader = $(".calori-loading");
            loader.fadeOut(500, function () {
                loader.removeClass("_active");
            });
        });

        //HEADER

        //Show cart
        $(".header .cart-text").click(function () {
            $("#cart").addClass("_active");
            $(".main__dark").addClass("_active");
        });

        //CHECKOUT PAGE

        //Hide delivery fields when delivery method is pickup
        $("#delivery_type").on("change", function () {
            const deliveryMethod = $(this).val();
            const fieldsToHide = [$("#delivery_outdoor_field"), $("#ship-to-different-address"), $("#delivery_time_field")];

            if (deliveryMethod === "nouto") {
                fieldsToHide.forEach((field) => field.hide());
            } else {
                fieldsToHide.forEach((field) => field.show());
            }
        });


        //ORDER 

        //Show order fetch error
        $(".order").on("orderError", function (event) {
            addNotify(event.detail.message);
        });

        //MENU PAGE 

        //Fixing menu button text

        $(".menu-page .menu__button label").each(function (index, element) {
            const $element = $(element);
            
            const dataTitle = $element.data("title").split(",").map((item) => item.trim());
            const text = dataTitle[0];
            const date = dataTitle[1];

            if(text && date) {
                $element.addClass("_date");
                $element.html(`${text} <span>${date}</span>`);
            } else {
                $element.text($(this).data("title"));
            }
        });
    });
});
