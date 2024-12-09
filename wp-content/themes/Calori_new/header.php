
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
       



    <header class="header">
      <div class="container">
        <div class="header-wrapper">

          <button class="ham">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M1.73333 13.4C1.53884 13.4 1.35231 13.4773 1.21479 13.6148C1.07726 13.7523 1 13.9388 1 14.1333C1 14.3278 1.07726 14.5144 1.21479 14.6519C1.35231 14.7894 1.53884 14.8667 1.73333 14.8667H19.3333C19.5278 14.8667 19.7144 14.7894 19.8519 14.6519C19.9894 14.5144 20.0667 14.3278 20.0667 14.1333C20.0667 13.9388 19.9894 13.7523 19.8519 13.6148C19.7144 13.4773 19.5278 13.4 19.3333 13.4H1.73333ZM1 20C1 19.8055 1.07726 19.619 1.21479 19.4815C1.35231 19.3439 1.53884 19.2667 1.73333 19.2667H19.3333C19.5278 19.2667 19.7144 19.3439 19.8519 19.4815C19.9894 19.619 20.0667 19.8055 20.0667 20C20.0667 20.1945 19.9894 20.381 19.8519 20.5185C19.7144 20.6561 19.5278 20.7333 19.3333 20.7333H1.73333C1.53884 20.7333 1.35231 20.6561 1.21479 20.5185C1.07726 20.381 1 20.1945 1 20ZM1 25.8667C1 25.6722 1.07726 25.4856 1.21479 25.348C1.35231 25.2106 1.53884 25.1333 1.73333 25.1333H19.3333C19.5278 25.1333 19.7144 25.2106 19.8519 25.348C19.9894 25.4856 20.0667 25.6722 20.0667 25.8667C20.0667 26.0611 19.9894 26.2477 19.8519 26.3853C19.7144 26.5227 19.5278 26.6 19.3333 26.6H1.73333C1.53884 26.6 1.35231 26.5227 1.21479 26.3853C1.07726 26.2477 1 26.0611 1 25.8667Z" fill="#2C2D31"/>
              </svg>              
          </button>

          <a href="/" class="logo">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.svg" alt="logo" class="logo_image" />
          </a>

          <div class="header-wrapper-right">
            <!-- <nav class="nav">
              <ul>
                <li>
                  <a href="#"> Ruokalista </a>
                </li>
                <li>
                  <a href="#"> Tuotteet </a>
                </li>
                <li>
                  <a href="#"> Meistä </a>
                </li>
                <li>
                  <a href="#"> Toimitus </a>
                </li>
                <li>
                  <a href="#"> Yrityksille </a>
                </li>
                <li>
                  <a href="#"> Arvostelut </a>
                </li>
              </ul>
            </nav> -->

            <?php do_action("print_nav_menu", "header_menu", array(
                            "wrapper_class" => "nav",
                            "menu_class" => "header__menu",
                            "item_class" => " menu__item",
                            "submenu_class" => "header__submenu submenu"
                        )); ?>

            <a href="#" class="cart-text"> Cart(<span class="cartnum">0</span>) </a>

            <a href="<?php echo get_home_url(  );?>#order" class="btn green"> Order now </a>
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


    </header>