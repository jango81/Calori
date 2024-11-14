
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo("charset") ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
        content="Calori tarjoaa kalorilaskettuja, monipuolisia ja terveellisiä ratkaisuja arjen helpottamiseksi ilmaisella kotiinkuletuksella. Löydä laadukkaat tuotteet ja palvelut, jotka tukevat painonhallintaa ja hyvinvointia ja säätä aikaasi mealprepillä!" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper">
        <?php if($args["announcement"] !== false): ?>
        <announcement-bar class="announcement"
            data-icon="<?php echo get_template_directory_uri() ?>/assets/images/icons/truck.svg"
            data-heading="Toimitukset vain PK seudulla">
            <div class="announcement__content" id="announcement__content"></div>
        </announcement-bar>
        <?php endif; ?>
        <header id="header" class="">
            <custom-header class="header">
                <div class="header__container _container">
                    <div class="header__content">
                        <div class="header__burger">
                            <span></span>
                        </div>
                        <?php do_action("print_nav_menu", "header_menu", array(
                            "wrapper_class" => "header__navigation",
                            "menu_class" => "header__menu",
                            "item_class" => "header__item menu__item",
                            "submenu_class" => "header__submenu submenu"
                        )); ?>
                        <div class="header__logo">
                            <a href="<?php echo home_url() ?>">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/calori_logo.png"
                                    alt="logo" srcset="" />
                            </a>
                        </div>
                        <div class="header__icons">
                        <?php if($args["show_cart"] !== false): ?>
                            <div class="header__icon header__cart-icon">
                                <svg width="800px" height="800px" viewBox="0 0 20 20" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <title>shopping_cart [#1135]</title>
                                    <desc>Created with Sketch.</desc>
                                    <defs></defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Dribbble-Light-Preview" transform="translate(-220.000000, -3119.000000)"
                                            fill="#000000">
                                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                                <path
                                                    d="M180.846448,2977 L167.153448,2977 C166.544448,2977 166.077448,2976.461 166.163448,2975.859 L167.306448,2967.859 C167.376448,2967.366 167.798448,2967 168.296448,2967 L168.999448,2967 L168.999448,2969 C168.999448,2969.552 169.447448,2970 169.999448,2970 C170.552448,2970 170.999448,2969.552 170.999448,2969 L170.999448,2967 L176.999448,2967 L176.999448,2969 C176.999448,2969.552 177.447448,2970 177.999448,2970 C178.552448,2970 178.999448,2969.552 178.999448,2969 L178.999448,2967 L179.703448,2967 C180.201448,2967 180.623448,2967.366 180.693448,2967.859 L181.836448,2975.859 C181.922448,2976.461 181.455448,2977 180.846448,2977 L180.846448,2977 Z M170.999448,2964 C170.999448,2962.346 172.345448,2961 173.999448,2961 C175.654448,2961 176.999448,2962 176.999448,2964 L176.999448,2965 L170.999448,2965 L170.999448,2964 Z M183.979448,2976.717 L182.550448,2966.717 C182.410448,2965.732 181.566448,2965 180.570448,2965 L178.999448,2965 L178.999448,2964 C178.999448,2961 176.756448,2959 173.999448,2959 C171.243448,2959 168.999448,2961.243 168.999448,2964 L168.999448,2965 L167.734448,2965 C166.739448,2965 165.589448,2965.732 165.448448,2966.717 L164.020448,2976.717 C163.848448,2977.922 164.783448,2979 166.000448,2979 L181.999448,2979 C183.216448,2979 184.151448,2977.922 183.979448,2976.717 L183.979448,2976.717 Z"
                                                    id="shopping_cart-[#1135]"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="navigation _container">
                    <div class="navigation__content">
                        <header class="navigation__header">
                            <div class="navigation__logo">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/calori_logo.png"
                                    alt="logo" srcset="" />
                            </div>
                            <div class="navigation__button">
                                <button></button>
                            </div>
                        </header>
                        <?php do_action("mobile_nav_menu", "header_menu"); ?>
                        <!-- <ul class="navigation__menu">
                            <li class="menu__item">
                                <div class="navigation__row">
                                    <a href="">Ruokalista</a>
                                    <div class="navigation__open">
                                        <button></button>
                                    </div>
                                </div>
                            </li>
                            <li class="menu__item">
                                <div class="navigation__row">
                                    <a href="">Tuotteet</a>
                                    <div class="navigation__open">
                                        <button></button>
                                    </div>
                                </div>
                            </li>
                            <li class="menu__item">
                                <div class="navigation__row">
                                    <a href="">Meistä</a>
                                    <div class="navigation__open">
                                        <button></button>
                                    </div>
                                </div>
                                <ul class="navigation__submenu submenu">
                                    <li><a href="">Miksi Calori?</a></li>
                                    <li><a href="">FAQs</a></li>
                                    <li><a href="">Ota yhteyttä</a></li>
                                </ul>
                            </li>
                            <li class="menu__item">
                                <div class="navigation__row">
                                    <a href="">Toimitus</a>
                                    <div class="navigation__open">
                                        <button></button>
                                    </div>
                                </div>
                            </li>
                            <li class="menu__item">
                                <div class="navigation__row">
                                    <a href="">Yrityksille</a>
                                    <div class="navigation__open">
                                        <button></button>
                                    </div>
                                </div>
                                <ul class="navigation__submenu submenu">
                                    <li><a href="">Miksi Calori?</a></li>
                                    <li><a href="">FAQs</a></li>
                                    <li><a href="">Ota yhteyttä</a></li>
                                </ul>
                            </li>
                            <li class="menu__item">
                                <div class="navigation__row">
                                    <a href="">Arvostelut</a>
                                    <div class="navigation__open">
                                        <button></button>
                                    </div>
                                </div>
                            </li>
                            <li class="menu__item">
                                <div class="navigation__row">
                                    <a href="">Bonukset</a>
                                    <div class="navigation__open">
                                        <button></button>
                                    </div>
                                </div>
                            </li>
                        </ul> -->
                        <ul class="navigation__options">
                            <li><a href="#">Kirjaudu sisään</a></li>
                            <li><a href="#">Luo käyttäjä</a></li>
                        </ul>
                    </div>
                </div>
                <div class="header__drawer"></div>
            </custom-header>
        </header>