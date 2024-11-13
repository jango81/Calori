import swipersSettings from "./swiperSettings.js";

document.addEventListener("DOMContentLoaded", () => {
    const customMenuSelectors = {
        dayCard: ".day-card",
        mealPopup: ".popup-meal",
        timeOfDay: ".day-card-meal",
        productProperities: ".day-card-properties",
        productImage: ".day-card-image",
        productName: ".day-card-meal-name",
        mealCard: ".day-slide__content",
        menuSticky: ".menu__sticky",
        menuBtn: ".menu__button",
        menuButton: ".menu__button input[type='radio']",
        menuBody: ".menu__body",
        menuWrapper: ".menu__wrapper",
        menuLoading: ".menu__loading",
        popupMealInfo: "popup-meal__info",
        popupMealName: ".popup-meal__name",
        popupMealImage: ".popup-meal__image",
        popupMealProperties: ".popup-meal__properties",
        popupMealTimeOfDay: ".popup-meal__meal",
        popupMealBlock: ".popup-meal__block",
    };
    class CustomMenu extends HTMLElement {
        constructor() {
            super();
            this.cardData = {};
            this.dayMenuSwipers = [];
            this.weekOfDaysFI = {
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

            this.mealPopup.style.visibility = "hidden";
        }
        init() {
            this.mealPopup = this.querySelector(customMenuSelectors.mealPopup);
            this.menuSticky = this.querySelector(customMenuSelectors.menuSticky);
            this.menuWrapper = this.querySelector(customMenuSelectors.menuWrapper);
            this.menuBtn = this.querySelectorAll(customMenuSelectors.menuBtn);
            this.menuButtons = this.querySelectorAll(customMenuSelectors.menuButton);
            this.menuBody = this.querySelector(customMenuSelectors.menuBody);
            this.menuLoading = this.querySelector(customMenuSelectors.menuLoading);
            this.header = document.querySelector(".header");

            this.menuButtons.forEach((el) => el.addEventListener("change", this.menuButtonHandle.bind(this)));

            this.checkedButton = Array.from(this.menuButtons).find((el) => el.checked);

            this.printData(this.checkedButton);
        }
        initAfterFetch() {
            this.dayCards = this.querySelectorAll(customMenuSelectors.dayCard);
            this.mealCard = this.querySelectorAll(customMenuSelectors.mealCard);

            this.attachEventsAfterFetch();
            this.mealPopup.addEventListener("click", this.closePopup.bind(this));
            console.log("Day cards", this.dayCards);
        }
        attachEventsAfterFetch() {
            this.removeEvents();
            this.mealCard.forEach((el) => el.addEventListener("click", this.showPopup.bind(this)));
        }
        removeEvents() {
            this.mealCard.forEach((el) => el.removeEventListener("click", this.showPopup.bind(this)));
        }
        menuButtonHandle(e) {
            console.log("Button clicked", e.currentTarget);

            this.printData(e.currentTarget);
        }
        findAllValuesByKey(obj, key, findOne = false) {
            let results = [];

            function searchRecursive(current) {
                if (Array.isArray(current)) {
                    current.forEach((item) => searchRecursive(item));
                } else if (typeof current === "object" && current !== null) {
                    for (const k in current) {
                        if (current.hasOwnProperty(k)) {
                            if (k === key) {
                                results.push(current[k]);
                                if (findOne) return;
                            }
                            searchRecursive(current[k]);
                        }
                    }
                }
            }

            searchRecursive(obj);
            return findOne ? results[0] : results;
        }
        async fetchMealMenu() {
            try {
                this.menuLoading.classList.add("_active");
                console.log(this.menuLoading);
                
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

                if(data.success) this.menuLoading.classList.remove("_active");

                return data;
            } catch (error) {
                console.error("Error:", error);
            }
        }
        async printData(checkedButton) {
            console.clear();
            if (!checkedButton) {
                console.log("No checked button");
                return;
            }
            
            this.cardId = 0;

            this.clearMenuWrapper();
            this.resetSwipers();

            const data = await this.fetchMealMenu();
            const week = checkedButton.value;
            const dates = week.split("-").map((el) => new Date(el));

            const fields = this.getFieldsByDate(dates, data);
            console.log("Fields", fields);

            this.printDayBlocks(fields);

            this.initAfterFetch();
        }
        getFieldsByDate(dates, data) {
            if (!dates && !data) {
                return;
            }
            const [startDate, endDate] = dates;

            const filteredData = data.data.filter((el) => {
                const dataStartDate = Date.parse(el.start_date);
                const dataEndDate = Date.parse(el.end_date);

                if (dataStartDate === Date.parse(startDate) && dataEndDate === Date.parse(endDate)) {
                    return el;
                }
            });

            if (!filteredData) {
                console.error("No data found");
                return;
            }

            return filteredData[0];
        }
        printDayBlocks(fields) {
            const { this_week_whole_menu } = fields;
            console.log(this.checkMenuEmpty(this_week_whole_menu));

            if (!this.checkMenuEmpty(this_week_whole_menu)) {
                this.menuWrapper.innerHTML += "<h1 class='no-menu-notify'>Ei ruokalistaa tälle viikolle</h1>";
                return;
            }

            for (const [key, value] of Object.entries(this_week_whole_menu[0])) {
                if (value["meals"] === false || !value) continue;

                const meals = Array.isArray(value) ? value.find((el) => el.meals).meals : value["meals"];

                if (!meals) continue;

                const day = this.weekOfDaysFI[key];
                const html = `<div class="menu__day day-menu">
                                <h2 class="day-menu__heading">${day}</h2>
                                <div class="swiper day-menu__swiper day-swiper">
                                    <div class="swiper-wrapper">
                                    </div>
                                </div>
                            </div>`;
                this.menuWrapper.innerHTML += html;

                const swiperWrapper = this.menuBody.querySelector(".menu__day:last-child .swiper-wrapper");

                this.printMeals(meals, swiperWrapper);
            }

            this.initSwipers();
        }
        printMeals(dayMeals, swiperWrapper) {
            if (!dayMeals) {
                console.log("No meals found");
                return;
            }
            console.log("Day meals", dayMeals);

            for (const mealFields of dayMeals) {
                this.cardData[this.cardId] = mealFields;

                let propertiesHtml = mealFields.meal_props.map((el) => `<li>${el}</li>`).join("");

                const html = `<div class="swiper-slide day-slide">
                            <div class="day-slide__content day-card" data-card-id="${this.cardId}">
                                <div class="day-slide__image day-card-image">
                                    <img src="${mealFields.meal_image}" alt="meal image" />
                                </div>
                                <div class="day-slide__info day-card-info">
                                    <ul class="day-slide__properties day-card-propeties">
                                        ${propertiesHtml}
                                    </ul>
                                    <h3 class="day-slide__meal day-card-meal">${mealFields.meal_of_day}</h3>
                                    <h2 class="day-slide__name day-card-meal-name">
                                        <strong>${mealFields.meal_name}</strong>
                                    </h2>
                                </div>
                            </div>
                        </div>`;

                swiperWrapper.innerHTML += html;

                this.cardId++;
            }
        }
        clearMenuWrapper() {
            const meals = this.menuWrapper.children;
            console.log(customMenuSelectors.menuLoading.slice(1));
            for (const el of meals) {
                if(el.classList.contains(customMenuSelectors.menuLoading.slice(1))) continue;

                el.remove();
            }
        }
        checkMenuEmpty(weekMenu) {
            const meals = this.findAllValuesByKey(weekMenu, "meals");

            return Boolean(meals.some((el) => el !== false));
        }
        initSwipers() {
            const swipers = this.menuWrapper.querySelectorAll(".swiper");
            if (!swipers) {
                console.error("No swipers found");
                return;
            }

            swipers.forEach((el) => {
                const swiper = new Swiper(el, {
                    slidesPerView: "auto",
                    paggination: {
                        el: ".swiper-pagination",
                    },
                    breakpoints: {
                        730: {
                            slidesPerView: 2,
                        },
                        1100: {
                            slidesPerView: 3,
                        },
                        1580: {
                            slidesPerView: 4,
                        },
                    },

                    on: {
                        init: (swiper) => {
                            swipersSettings.methods.centerSlides(swiper);
                        },
                    },
                });

                this.dayMenuSwipers.push(swiper);
            });
        }
        resetSwipers() {
            if (this.dayMenuSwipers.length === 0) return;

            for (const swiper of this.dayMenuSwipers) {
                swiper.destroy();
            }

            this.dayMenuSwipers = [];
        }
        getCardData(cardId) {
            return this.cardData[cardId];
        }
        printPopupInfo(cardId) {
            const cardData = this.getCardData(cardId);
            console.log("Card data", cardData);
            if (!cardData) {
                console.error("No card data found");
                return;
            }

            const { meal_name, meal_image, meal_props, meal_of_day, meal_ingredients } = cardData;
            const mealPropsHtml = meal_props.map((el) => `<li>${el}</li>`).join("");

            this.mealPopup.innerHTML = `<div class="popup-meal__wrapper">
                                            <div class="popup-meal__content day-card">
                                                <div class="popup-meal__image day-card-image">
                                                    <img src="${meal_image}" alt="meal image" />
                                                </div>
                                                <div class="popup-meal__info day-card-info">
                                                    <ul class="popup-meal__properties day-card-propeties">
                                                        ${mealPropsHtml}
                                                    </ul>
                                                    <h3 class="popup-meal__meal day-card-meal">${meal_of_day}</h3>
                                                    <h2 class="popup-meal__name day-card-meal-name">${meal_name}</h2>
                                                    <div class="popup-meal__block popup-block">
                                                        ${meal_ingredients}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>`;
        }
        showPopup(e) {
            const card = e.currentTarget;

            this.cardId = card.dataset.cardId;
            this.printPopupInfo(this.cardId);

            this.mealPopup.classList.add("_active");
            this.mealPopup.style.visibility = "visible";
        }
        closePopup() {
            const popupCard = this.mealPopup.querySelector(customMenuSelectors.dayCard);
            this.mealPopup.classList.remove("_active");
            popupCard.addEventListener(
                "transitionend",
                () => {
                    this.mealPopup.style.visibility = "hidden";
                },
                { once: true }
            );
        }
    }
    customElements.define("custom-menu", CustomMenu);
});
