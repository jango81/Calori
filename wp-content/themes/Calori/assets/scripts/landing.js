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
        orderVariantButtons: ".order-block__button input[id='order-variants']",
        orderButtons: ".order__buttons",
        orderVariantBlock: ".order__variant",
        orderBlock: ".order-block",
        orderPaymentBlock: ".order-payment",
        orderSettings: ".order__settings",
        orderRadio: ".order-radio",
        orderControls: ".order__controls",
        orderControlsActive: ".order__controls._active",
        priceElement: ".custom-radio__price",
        calculatorButton: ".order-calculator__button",
        calculator: ".calculator",
    };
    const customOrderAttributes = {
        dataDay: "data-day",
        dataTime: "data-time",
        dataDeliveryTime: "data-delivery-day",
        dataProductId: "data-product-id",
        dataValue: "data-value",
        dataCurrentVariant: "data-current-variant",
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
            this.productButtons = this.querySelectorAll(customOrderSelectors.productButton);
            this.radioButton = this.querySelectorAll(customOrderSelectors.orderRadio);
            this.orderControls = this.querySelectorAll(customOrderSelectors.orderControls);
            this.variantButtons = this.querySelectorAll(customOrderSelectors.orderVariantButtons);
            this.paymentBlock = this.querySelectorAll(customOrderSelectors.orderPaymentBlock);
            this.orderVariantBlocks = this.querySelectorAll(`${customOrderSelectors.orderSettings} > ${customOrderSelectors.orderBlock}`);
            this.infoContent = this.querySelector(customOrderSelectors.orderInfoContent);
            this.orderButtons = this.querySelector(customOrderSelectors.orderButtons);
            this.calculatorButton = this.querySelector(customOrderSelectors.calculatorButton);
            this.calculator = this.querySelector(customOrderSelectors.calculator);
            this.deliveryDateEl = this.querySelector(customOrderSelectors.orderDeliveryDate);
            this.errorMessage = this.querySelector(".error__message h1");

            this.endDay = this.deliveryDateEl.getAttribute(customOrderAttributes.dataDay);
            this.endTime = this.deliveryDateEl.getAttribute(customOrderAttributes.dataTime);
            this.deliveryDay = this.deliveryDateEl.getAttribute(customOrderAttributes.dataDeliveryTime);

            this.calculatorButton.addEventListener("click", () => this.calculator.classList.toggle("_active"));
            this.productButtons.forEach((el) => el.addEventListener("click", this.productButtonHandler.bind(this)));
            this.variantButtons.forEach((el) => el.addEventListener("change", this.variantButtonHandler.bind(this)));

            this.updateDates();
            this.interval = setInterval(this.intervalHandler.bind(this), 1000);

            this.defaultProductButton = this.productButtons[0];

            if (this.defaultProductButton) {
                const buttonId = parseInt(this.defaultProductButton.getAttribute(customOrderAttributes.dataProductId));
                this.defaultProductButton.checked = true;
                this.setActiveControl(buttonId);
            }

            this.orderVariantBlocks.forEach((el) => {
                const variantButtons = el.querySelectorAll(customOrderSelectors.orderVariantButtons);
                if (variantButtons.length > 0) {
                    variantButtons[0].checked = true;
                    this.getPaymentBlock(variantButtons[0]);
                }
            });
        }
        resetClasses(element, className) {
            if (typeof element === "object") {
                element.forEach((el) => el.classList.remove(className));
            } else {
                element.classList.remove(className);
            }
        }
        checkVariantBlocks(button) {
            this.setAttributes(button);
            const activeVariantBlocks = this.querySelectorAll(`${customOrderSelectors.orderControlsActive} ${customOrderSelectors.orderVariantBlock}`);
            const attributes = [];

            for (const el of activeVariantBlocks) {
                const currentAttribute = el.getAttribute(customOrderAttributes.dataCurrentVariant);

                if (!currentAttribute) {
                    continue;
                }

                attributes.push(currentAttribute);
            }

            if (attributes.length <= 0) return false;

            return attributes.map((el) => Number(el));
        }
        setAttributes(button) {
            const buttonAttribute = button.getAttribute(customOrderAttributes.dataValue);
            const variantBlock = button.closest(customOrderSelectors.orderVariantBlock);
            variantBlock.setAttribute(customOrderAttributes.dataCurrentVariant, buttonAttribute);
        }
        variantButtonHandler(event) {
            this.resetClasses(this.orderVariantBlocks, "_active");
            const currentButton = event.currentTarget;
            this.getPaymentBlock(currentButton);
        }
        getPaymentBlock(button) {
            const attributes = this.checkVariantBlocks(button);
            if (!attributes) return;

            this.resetClasses(this.paymentBlock, "_active");
            let status = false;

            for (const el of this.paymentBlock) {
                const elementAttributes = el
                    .getAttribute(customOrderAttributes.dataAttributes)
                    .split(";")
                    .filter((attr) => attr !== "")
                    .map((el) => Number(el.trim()));

                if (attributes.length === elementAttributes.length) {
                    for (const attr of attributes) {
                        if (!elementAttributes.includes(attr)) {
                            status = false;
                            break;
                        }
                        status = true;
                    }
                }

                if (status) {
                    el.classList.add("_active");
                    return;
                }
            }
        }
        productButtonHandler(event) {
            const button = event.currentTarget;
            const buttonProductId = parseInt(button.getAttribute(customOrderAttributes.dataProductId));
            this.setActiveControl(buttonProductId);
        }
        setActiveControl(buttonId) {
            this.resetClasses(this.orderControls, "_active");

            for (const el of this.orderControls) {
                const productId = parseInt(el.getAttribute(customOrderAttributes.dataProductId));
                if (productId === buttonId) {
                    el.classList.add("_active");
                    break;
                }
            }
        }
        setDeliveryDate() {
            const deliveryDay = this.daysOfWeek[this.deliveryDate.getDay()];
            this.deliveryDateEl.textContent = `${deliveryDay.slice(0, 2)} ${this.deliveryDate.getDate()}.${this.deliveryDate.getMonth() + 1}`;
        }

        updateDates() {
            this.deliveryDate = this.time.getEndDate(this.deliveryDay);
            this.dateToUpdate = this.time.getEndDate(this.endDay, this.endTime);
            this.parsedUpdateDate = Date.parse(this.dateToUpdate);

            this.deliveryDate = this.time.updateDeliveryDate(this.dateToUpdate, this.deliveryDay);
            this.setDeliveryDate();
        }

        intervalHandler() {
            const currentDate = Date.now();
            const difference = this.parsedUpdateDate - currentDate;

            if (difference <= 0) {
                this.updateDates();
            }
        }

        setButtonsMargin() {
            const orderDurationMargin = parseInt(window.getComputedStyle(this.orderDuration).marginTop);
            const orderBlockHeight = this.orderDuration.offsetHeight + orderDurationMargin;
            const orderButtonsHeight = this.orderButtons.offsetHeight;

            console.log(orderDurationMargin);

            console.log("block height: " + orderBlockHeight);
            console.log("buttons height: " + orderButtonsHeight);

            const margin = orderBlockHeight - orderButtonsHeight;

            this.orderButtons.style.marginTop = margin + "px";
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
