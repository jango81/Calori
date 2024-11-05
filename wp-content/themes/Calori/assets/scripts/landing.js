import swipersSettings from "./swiperSettings.js";
import { Time } from "./helper.js";
document.addEventListener("DOMContentLoaded", () => {
    const reviewSwiperSetBreakpoints = (swiper) => {
        const slidesLength = swiper.slides.length;

        swiper.params.breakpoints = {
            620: {
                slidesPerView: slidesLength > 2 ? 2 : slidesLength,
                slidesPerGroup: slidesLength > 2 ? 2 : slidesLength,
            },
            990: {
                slidesPerView: slidesLength > 3 ? 3 : slidesLength,
                slidesPerGroup: slidesLength > 2 ? 2 : slidesLength,
            },
            1260: {
                slidesPerView: slidesLength > 4 ? 4 : slidesLength,
                slidesPerGroup: slidesLength > 2 ? 2 : slidesLength,
            },
        };

        swiper.update();
    };
    const infoSwiper = new Swiper(".info-swiper", {
        loop: true,
        slidesPerView: 2,
        spaceBetween: 20,
        speed: swipersSettings.speed,
        pagination: {
            el: ".info-swiper__pagination",
        },
    });
    const mealsSwiper = new Swiper(".meals-swiper", {
        loop: false,
        speed: swipersSettings.speed,
        breakpoints: {
            550: {
                slidesPerView: 2,
            },
            980: {
                slidesPerView: 3,
            },
            1080: {
                navigation: {
                    enabled: true,
                    prevEl: ".meals-swiper-prev",
                    nextEl: ".meals-swiper-next",
                },
                slidesPerView: 3,
            },
            1340: {
                slidesPerView: 4,
            },
        },
        pagination: {
            el: ".meals-swiper__pagination",
        },
        navigation: {
            enabled: false,
        },
        on: {
            init: (swiper) => {},
        },
    });
    const stepsSwiper = new Swiper(".steps-swiper", {
        direction: "vertical",
        spaceBetween: 50,
        speed: swipersSettings.speed,
        threshold: 0,
        touchReleaseOnEdges: true,
        autoplay: {
            delay: swipersSettings.delay,
        },
        on: {
            init: (swiper) => {
                const slideContents = document.querySelectorAll(".steps-slide__content");
                swiper.el.style.height = swipersSettings.methods.getMaxHeight(slideContents) + "px";
            },
        },
    });
    const whySwiper = new Swiper(".why-swiper", {
        spaceBetween: 20,
        slidesPerView: 1,
        speed: swipersSettings.speed,
        loop: true,
        autoplay: {
            delay: swipersSettings.delay,
            pauseOnMouseEnter: true,
        },
        breakpoints: {
            590: {
                slidesPerView: 2,
            },
            1280: {
                slidesPerView: 4,
            },
        },
        on: {
            init: (swiper) => {},
        },
    });
    const reviewsSwiper = new Swiper(".reviews-swiper", {
        spaceBetween: 20,
        speed: swipersSettings.speed,
        loop: true,
        autoplay: {
            delay: 5000,
            pauseOnMouseEnter: true,
        },
        breakpoints: {
            1080: {
                navigation: {
                    enabled: true,
                    prevEl: ".reviews-swiper-prev",
                    nextEl: ".reviews-swiper-next",
                },
            },
        },
        navigation: {
            enabled: false,
        },
        pagination: {
            el: ".swiper-pagination",
        },
        on: {
            init: (swiper) => {
                swipersSettings.methods.centerSlides(swiper);
                reviewSwiperSetBreakpoints(swiper);
            },
            resize: (swiper) => {
                swipersSettings.methods.centerSlides(swiper);
                reviewSwiperSetBreakpoints(swiper);
            },
        },
    });
    const bannerSwiper = new Swiper(".banner-swiper", {
        slidesPerView: 1,
        effect: "fade",
        speed: 600,
        autoplay: {
            delay: swipersSettings.delay,
        },
    });
    const cooperationSwiper = new Swiper(".cooperation-swiper", {
        slidesPerView: "auto",
        spaceBetween: 100,
        loop: true,
        autoplay: {
            enabled: true,
            delay: swipersSettings.delay,
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            520: {
                slidesPerView: 2,
            },
            630: {
                slidesPerView: 3,
            },
            1040: {
                slidesPerView: 4,
            },
        },
        speed: swipersSettings.speed,
    });

    const mealsSelectors = {
        mealsDays: ".meals__days",
        mealsDaysButtons: ".meals__days button",
        mealsPopup: ".meals-popup",
        mealsPopupImage: ".meals-popup__image",
        mealsSlideImage: ".meals-slide__image",
        mealsSwiperWrapper: ".meals-swiper__wrapper",
    };
    class CustomMeals extends HTMLElement {
        constructor() {
            super();

            this.daysObj = {
                monday: "Maanantai",
                tuesday: "Tiistai",
                wednesday: "Keskiviikko",
                thursday: "Torstai",
                friday: "Perjantai",
                saturday: "Lauantai",
                sunday: "Sunnuntai",
            };
        }
        connectedCallback() {
            this.init();
            this.addDays();

            this.defaultButton = this.dayButtons[0];
            this.defaultButton.classList.add("_active");

            this.currentDay = this.defaultButton.getAttribute("data-value");

            if (this.defaultButton) this.fetchData(this.currentDay);
        }
        init() {
            this.daysElement = this.querySelector(mealsSelectors.mealsDays);
            this.mealsPopup = this.querySelector(mealsSelectors.mealsPopup);
            this.mealsPopupImage = this.querySelector(mealsSelectors.mealsPopupImage);
            this.mealsSlideImages = this.querySelectorAll(mealsSelectors.mealsSlideImage);
            this.mealsSwiperWrapper = this.querySelector(mealsSelectors.mealsSwiperWrapper);
            this.loadingElement = document.querySelector(".loading-gif");
        }

        openPopup(e) {
            const currentImage = e.currentTarget.querySelector("img");
            const imagePath = currentImage.getAttribute("src");

            if (imagePath === "") throw new Error("Image path undefined");

            this.mealsPopup.classList.add("_active");
            this.mealsPopupImage.querySelector("img").setAttribute("src", imagePath);
            this.mealsPopup.addEventListener("click", this.closePopup.bind(this));
        }

        closePopup(e) {
            this.mealsPopup.classList.remove("_active");
        }

        buttonClickHandle(event) {
            const currentBtn = event.currentTarget;

            this.dayButtons.forEach((el) => el.classList.remove("_active"));

            currentBtn.classList.add("_active");

            this.fetchData(currentBtn.getAttribute("data-value"));
        }
        async fetchData(day) {
            this.loadingElement.style.display = "flex";
            this.mealsSwiperWrapper.innerHTML = "";
            try {
                const response = await fetch(ajax_object.ajax_url, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded",
                    },
                    body: new URLSearchParams({
                        action: "get_meal_menu",
                    }),
                });
                const data = await response.json();

                this.fetchedData = data;
                this.printData(day);
                this.loadingElement.style.display = "none";
            } catch (error) {
                console.error(error);
            }
        }
        printData(day) {
            const meals = this.getDataValues(this.fetchedData, day);

            for (const meal of meals) {
                this.mealsSwiperWrapper.innerHTML += `
                <div class="swiper-slide meals-slide">
                        <div class="meals-slide__content">
                            <div class="meals-slide__image">
                                <img src="${meal.meal_image}" alt="food image" />
                            </div>
                            <div class="meals-slide__info">
                                <header class="meals-slide__title">
                                    <h2>${meal.meal_name}</h2>
                                </header>
                                <div class="meals-slide__description">
                                    <p>${meal.meal_of_day}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            }

            this.mealsSlideImages = this.querySelectorAll(mealsSelectors.mealsSlideImage);
            if (this.mealsSlideImages && this.mealsSlideImages.length > 0 && this.mealsPopup) {
                this.mealsSlideImages.forEach((el) => el.addEventListener("click", this.openPopup.bind(this)));
            }
        }
        getDataValues(obj, keyToFind) {
            for (const key in obj) {
                if (key === keyToFind) {
                    return obj[key];
                }
                if (typeof obj[key] === "object" && obj[key] !== null) {
                    const result = this.getDataValues(obj[key], keyToFind);
                    if (result !== undefined) {
                        return result;
                    }
                }
            }
        }
        addDays() {
            this.daysElement.innerHTML = "";

            if (window.innerWidth > 640) {
                for (const [key, value] of Object.entries(this.daysObj)) {
                    this.daysElement.innerHTML += `<li><button data-value="${key}">${value}</button></li>`;
                    this.daysElement.querySelectorAll("button").forEach((el) => el.addEventListener("click", this.buttonClickHandle.bind(this)));
                }
            } else if (window.innerWidth < 640) {
                for (const [key, value] of Object.entries(this.daysObj)) {
                    const calcSliceIndex = 0 - value.length + 2;
                    const shortestDay = value.slice(0, calcSliceIndex);
                    this.daysElement.innerHTML += `<li><button data-value="${key}">${shortestDay}</button></li>`;
                    this.daysElement.querySelectorAll("button").forEach((el) => el.addEventListener("click", this.buttonClickHandle.bind(this)));
                }
            }

            this.dayButtons = this.querySelectorAll(mealsSelectors.mealsDaysButtons);
        }
    }
    customElements.define("custom-meals", CustomMeals);

    const customOrderSelectors = {
        productButton: ".order-products__product input",
        orderSpoiler: ".infos-order__spoiler",
        orderDeliveryDate: ".order-delivery__date",
        orderInfoHeading: ".infos-order__heading",
        orderInfoContent: ".infos-order__content",
        orderButtons: ".order__buttons",
        orderVariantBlock: ".order__variant",
        orderBlock: ".order-block",
        orderPaymentBlock: ".order-payment",
        orderSettings: ".order__settings",
        orderPaymentRadio: ".order-payment__radio",
        orderPaymentRadioInput: ".order-payment__radio input[type='radio']",
        orderRadio: ".order-radio",
        orderControls: ".order__controls",
        orderControlsActive: ".order__controls._active",
        orderSelectVariant: ".order-block__select",
        orderSelectOptions: ".order-block__select .custom-select__option",
        orderSelectDefault: ".order-block__select select",
        orderCartButton: ".order-cart__button",
        priceElement: ".custom-radio__price",
        calculatorButton: ".order-calculator__button",
        calculator: ".calculator",
        orderForm: "#add-to-cart-form",
    };
    const customOrderAttributes = {
        dataDay: "data-day",
        dataTime: "data-time",
        dataDeliveryTime: "data-delivery-day",
        dataProductId: "data-product-id",
        dataValue: "data-value",
        dataCurrentVariant: "data-current-variant",
        dataVariantId: "data-variant-id",
        dataAttributes: "data-attributes",
    };
    class CustomOrder extends HTMLElement {
        constructor() {
            super();
            this.daysOfWeek = ["Sunnuntai", "Maanantai", "Tiistai", "Keskiviikko", "Torstai", "Perjantai", "Lauantai"];
            this.time = new Time();
        }

        connectedCallback() {
            this.init();
        }

        init() {
            const selectors = customOrderSelectors;
            const attributes = customOrderAttributes;

            this.elements = {
                productButtons: this.querySelectorAll(selectors.productButton),
                radioButtons: this.querySelectorAll(selectors.orderRadio),
                orderControls: this.querySelectorAll(selectors.orderControls),
                paymentBlock: this.querySelectorAll(selectors.orderPaymentBlock),
                paymentRadios: this.querySelectorAll(selectors.orderPaymentRadioInput),
                orderVariantBlocks: this.querySelectorAll(`${selectors.orderSettings} > ${selectors.orderBlock}`),
                variantSelect: this.querySelectorAll(selectors.orderSelectVariant),
                variantOptions: this.querySelectorAll(selectors.orderSelectOptions),
                variantDefaultSelect: this.querySelectorAll(selectors.orderSelectDefault),
                orderForm: this.querySelector(selectors.orderForm),
                infoContent: this.querySelector(selectors.orderInfoContent),
                orderButtons: this.querySelector(selectors.orderButtons),
                calculatorButton: this.querySelector(selectors.calculatorButton),
                calculator: this.querySelector(selectors.calculator),
                deliveryDateEl: this.querySelector(selectors.orderDeliveryDate),
                orderPaymentRadio: this.querySelector(selectors.orderPaymentRadio),
                cartButton: this.querySelector(selectors.orderCartButton),
                errorMessage: this.querySelector(".error__message h1"),
            };

            this.endDay = this.elements.deliveryDateEl.getAttribute(attributes.dataDay);
            this.endTime = this.elements.deliveryDateEl.getAttribute(attributes.dataTime);
            this.deliveryDay = this.elements.deliveryDateEl.getAttribute(attributes.dataDeliveryTime);

            this.attachEventListeners();
            this.updateDates();
            this.startInterval();

            this.initializeDefaultButton();
            this.initilizePaymentBlocks();
            this.initilizePaymentRadio();
        }

        attachEventListeners() {
            const { productButtons, calculatorButton, variantSelect, orderForm } = this.elements;

            calculatorButton.addEventListener("click", () => this.elements.calculator.classList.toggle("_active"));
            productButtons.forEach((button) => button.addEventListener("click", this.productButtonHandler.bind(this)));
            variantSelect.forEach((select) => select.addEventListener("change", this.variantSelectHandler.bind(this)));
            orderForm.addEventListener("submit", (e) => this.cartButtonHandler(e));
        }

        initializeDefaultButton() {
            const { productButtons } = this.elements;
            this.defaultProductButton = productButtons[0];

            if (this.defaultProductButton) {
                const buttonId = parseInt(this.defaultProductButton.getAttribute(customOrderAttributes.dataProductId));
                this.defaultProductButton.checked = true;
                this.setActiveControl(buttonId);
            }
        }

        initilizePaymentBlocks() {
            const { orderControls } = this.elements;

            orderControls.forEach((control) => {
                const currentVariantBlocks = control.querySelectorAll(customOrderSelectors.orderVariantBlock);
                if (currentVariantBlocks.length > 0) {
                    currentVariantBlocks.forEach((block) => {
                        const currentSelect = block.querySelector(customOrderSelectors.orderSelectVariant);
                        const currentOptions = block.querySelectorAll(customOrderSelectors.orderSelectOptions);

                        currentSelect.setAttribute("data-heading", currentOptions[0].outerText);
                        currentSelect.setAttribute(customOrderAttributes.dataValue, currentOptions[0].getAttribute(customOrderAttributes.dataValue));
                        this.getPaymentBlock(currentSelect);
                    });
                }
            });
        }

        initilizePaymentRadio() {
            const { paymentBlock } = this.elements;
            paymentBlock.forEach((block) => {
                const radioButtons = block.querySelectorAll(customOrderSelectors.orderPaymentRadio);

                if (radioButtons.length > 0) {
                    radioButtons[0].checked = true;
                }
            });
        }
        resetClasses(elements, className) {
            elements.forEach((el) => el.classList.remove(className));
        }

        checkVariantBlocks(select) {
            this.setAttributes(select);
            const currentControl = select.closest(customOrderSelectors.orderControls);
            const currentVariantBlocks = currentControl.querySelectorAll(customOrderSelectors.orderVariantBlock);

            const attributes = Array.from(currentVariantBlocks)
                .map((el) => el.getAttribute(customOrderAttributes.dataCurrentVariant))
                .filter(Boolean);

            return attributes.length > 0 ? attributes.map(Number) : false;
        }

        setAttributes(select) {
            const selectAttribute = select.getAttribute(customOrderAttributes.dataValue);
            const variantBlock = select.closest(customOrderSelectors.orderVariantBlock);
            variantBlock.setAttribute(customOrderAttributes.dataCurrentVariant, selectAttribute);
        }

        variantSelectHandler(event) {
            this.resetClasses(this.elements.orderVariantBlocks, "_active");
            this.getPaymentBlock(event.currentTarget);
        }

        getPaymentBlock(select) {
            const attributes = this.checkVariantBlocks(select);
            const currentPaymentBlocks = select.closest(customOrderSelectors.orderControls).querySelectorAll(customOrderSelectors.orderPaymentBlock);
            if (!attributes) return;

            this.resetClasses(currentPaymentBlocks, "_active");

            for (const el of this.elements.paymentBlock) {
                const elementAttributes = el.getAttribute(customOrderAttributes.dataAttributes).split(";").filter(Boolean).map(Number);

                if (attributes.every((attr) => elementAttributes.includes(attr))) {
                    el.classList.add("_active");
                    return;
                }
            }
        }

        cartButtonHandler(event) {
            event.preventDefault();
            const { paymentBlock, orderControls } = this.elements;

            const activeControl = Array.from(orderControls).find((el) => el.classList.contains("_active"));
            const activePaymentBlock = Array.from(paymentBlock).find((el) => el.classList.contains("_active") && activeControl.contains(el));
            const paymentRadios = Array.from(activePaymentBlock.querySelectorAll("input[type='radio']"));

            const productId = parseInt(activeControl.getAttribute(customOrderAttributes.dataProductId)) ?? 0;
            const variantId = parseInt(activePaymentBlock.getAttribute(customOrderAttributes.dataVariantId)) ?? 0;
            const paymentType = paymentRadios.find((el) => el.checked).value;

            const formData = {
                action: "add_to_cart",
                product_id: productId,
                variant_id: variantId,
                payment_type: paymentType,
            };
            console.log(formData);

            const params = new URLSearchParams(formData).toString();
            const data = this.fetchData(params);
        }
        async fetchData(params) {
            try {
                const response = await fetch(ajax_object.ajax_url, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded",
                    },
                    body: params,
                });

                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }

                const data = await response.json();
                console.log(data);

                if (data.success) {
                    localStorage.setItem("cartUpdated", "true");
                    const cartEvent = new CustomEvent("cartUpdated", { detail: data });
                    document.dispatchEvent(cartEvent);
                }

                location.reload();

                return data;
            } catch (error) {
                console.error(error);
            }
        }
        productButtonHandler(event) {
            const buttonId = parseInt(event.currentTarget.getAttribute(customOrderAttributes.dataProductId));
            this.setActiveControl(buttonId);
        }

        setActiveControl(buttonId) {
            this.resetClasses(this.elements.orderControls, "_active");

            for (const el of this.elements.orderControls) {
                if (parseInt(el.getAttribute(customOrderAttributes.dataProductId)) === buttonId) {
                    el.classList.add("_active");
                    break;
                }
            }
        }

        setDeliveryDate() {
            const deliveryDay = this.daysOfWeek[this.deliveryDate.getDay()];
            this.elements.deliveryDateEl.textContent = `${deliveryDay.slice(0, 2)} ${this.deliveryDate.getDate()}.${this.deliveryDate.getMonth() + 1}`;
        }

        updateDates() {
            this.deliveryDate = this.time.getEndDate(this.deliveryDay);
            this.dateToUpdate = this.time.getEndDate(this.endDay, this.endTime);
            this.parsedUpdateDate = Date.parse(this.dateToUpdate);

            this.deliveryDate = this.time.updateDeliveryDate(this.dateToUpdate, this.deliveryDay);
            this.setDeliveryDate();
        }

        startInterval() {
            this.interval = setInterval(this.intervalHandler.bind(this), 1000);
        }

        intervalHandler() {
            if (Date.now() >= this.parsedUpdateDate) {
                this.updateDates();
            }
        }
    }

    customElements.define("custom-order", CustomOrder);

    const stepsSelectors = {
        stepsPoint: ".steps__point",
        slides: ".steps-slide",
        slideContent: ".steps-slide__content",
    };
    class CustomSteps extends HTMLElement {
        constructor() {
            super();
            this.activeSlide = stepsSwiper.realIndex;
            this.activePoints = new Set();
        }

        connectedCallback() {
            this.init();
            this.addProgress();
            stepsSwiper.on("realIndexChange", this.progressHandle.bind(this));
        }

        init() {
            this.slides = this.querySelectorAll(stepsSelectors.slides);
            this.slideContents = this.querySelectorAll(stepsSelectors.slideContent);
            this.stepsPoints = this.querySelectorAll(stepsSelectors.stepsPoint);
        }

        progressHandle() {
            let oldSlideIndex = this.activeSlide;
            this.activeSlide = stepsSwiper.realIndex;

            if (oldSlideIndex < this.activeSlide) {
                this.addProgress();
            } else {
                this.removeProgress();
            }
        }

        addProgress() {
            for (let i = 0; i <= this.activeSlide; i++) {
                this.stepsPoints[i].classList.add("_scrolled");
                if (this.activeSlide > 0 && i > 0) {
                    this.stepsPoints[i - 1].classList.add("_active");
                }
            }
        }

        removeProgress() {
            for (let i = this.activeSlide; i < this.stepsPoints.length; i++) {
                this.stepsPoints[i].classList.remove("_active");
                if (i !== this.activeSlide) {
                    this.stepsPoints[i].classList.remove("_scrolled");
                }
            }
        }
    }
    customElements.define("custom-steps", CustomSteps);

    const reviewsSelectors = {
        reviewsSlide: ".reviews-slide",
        reviewText: ".reviews-slide__text",
    };
    class CustomReviews extends HTMLElement {
        constructor() {
            super();
        }

        connectedCallback() {
            this.init();
        }
        init() {
            this.reviewsSlide = this.querySelectorAll(reviewsSelectors.reviewsSlide);
            this.reviewText = this.querySelectorAll(reviewsSelectors.reviewText);
            this.reviewsSlide.forEach((el) => el.addEventListener("click", this.reviewsClickHandle.bind(this)));

            this.reviewsSlide.forEach((el) => {
                const textElem = el.querySelector(reviewsSelectors.reviewText);
                const textLineHeight = window.getComputedStyle(textElem).lineHeight;
                const rows = textElem.scrollHeight / parseInt(textLineHeight);

                if (rows >= 5) {
                    el.classList.add("_collapsed");
                }
            });
        }
        reviewsClickHandle(event) {
            const target = event.currentTarget;

            if (!target.classList.contains("_collapsed")) return;

            this.closeAllReviews(target);
            target.classList.toggle("_opened");

            this.setTextHeight(target);
        }

        closeAllReviews(target) {
            this.reviewsSlide.forEach((el) => {
                const textElem = el.querySelector(reviewsSelectors.reviewText);
                if (el !== target) {
                    el.classList.remove("_opened");
                    textElem.style.height = this.getAttribute("data-text-initial-height");
                }
            });
        }

        setTextHeight(target) {
            const textElem = target.querySelector(reviewsSelectors.reviewText);
            if (target.classList.contains("_opened")) {
                this.initialTextHeight = window.getComputedStyle(textElem).height;
                textElem.setAttribute("data-initial-height", this.initialTextHeight);
                const textFullHeight = textElem.scrollHeight;

                textElem.style.height = textFullHeight + "px";
            } else {
                textElem.style.height = this.getAttribute("data-text-initial-height");
            }
        }
    }
    customElements.define("custom-reviews", CustomReviews);

    const calculatorSelectors = {
        age: ".calculator__age input[type='text']",
        gender: ".calculator__gender input[type='radio']",
        height: ".calculator__height input[type='text']",
        weight: ".calculator__weight input[type='text']",
        activity: ".calculator-activity__select select",
        resultMaintenance: ".results-calculator__maintenance span",
        resultLoss: ".results-calculator__loss span",
        resultGrow: ".results-calculator__grow span",
        closeButton: ".calculator__close span",
    };
    class CustomCalculator extends HTMLElement {
        constructor() {
            super();
        }

        connectedCallback() {
            this.init();
            this.onChangeHandler();
        }

        init() {
            this.ageInput = this.querySelector(calculatorSelectors.age);
            this.heightInput = this.querySelector(calculatorSelectors.height);
            this.weightInput = this.querySelector(calculatorSelectors.weight);
            this.activitySelect = this.querySelector(calculatorSelectors.activity);
            this.resultMaintenance = this.querySelector(calculatorSelectors.resultMaintenance);
            this.resultLoss = this.querySelector(calculatorSelectors.resultLoss);
            this.resultGrow = this.querySelector(calculatorSelectors.resultGrow);
            this.closeButton = this.querySelector(calculatorSelectors.closeButton);
            this.genderInput = this.querySelectorAll(calculatorSelectors.gender);

            this.genderInput[0].checked = true;

            this.controls = [this.ageInput, this.heightInput, this.weightInput, this.activitySelect, ...this.genderInput];

            this.controls.forEach((el) => {
                if (el.type === "text") {
                    el.addEventListener("input", this.onChangeHandler.bind(this));
                } else {
                    el.addEventListener("change", this.onChangeHandler.bind(this));
                }
            });

            this.closeButton.addEventListener("click", (e) => {
                this.classList.remove("_active");
            });
        }

        onChangeHandler() {
            this.values = {
                age: this.ageInput.value,
                gender: Array.from(this.genderInput).find((el) => el.checked).value,
                height: this.heightInput.value,
                weight: this.weightInput.value,
                activity: parseFloat(this.activitySelect.value),
            };

            this.setResults();
        }

        calcCalories() {
            let bmr;

            for (const key in this.values) {
                if (!this.values[key]) {
                    return {
                        maintenance: 0,
                        loss: 0,
                        grow: 0,
                    };
                }
            }

            if (this.values.gender === "male") {
                bmr = this.values.activity * (88.36 + 13.4 * this.values.weight + 4.8 * this.values.height - 5.7 * this.values.age);
            } else if (this.values.gender === "female") {
                bmr = this.values.activity * (447.6 + 9.2 * this.values.weight + 3.1 * this.values.height - 4.3 * this.values.age);
            }

            return {
                maintenance: bmr,
                loss: bmr - 500,
                grow: bmr + 300,
            };
        }

        setResults() {
            const results = this.calcCalories();

            this.resultMaintenance.textContent = results.maintenance.toFixed(0);
            this.resultGrow.textContent = results.grow.toFixed(0);
            this.resultLoss.textContent = results.loss.toFixed(0);
        }
    }
    customElements.define("custom-calculator", CustomCalculator);
});
