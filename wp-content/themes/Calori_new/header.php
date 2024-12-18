
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

            <!-- <a href="#" class="cart-text"> Cart(<span class="cartnum">0</span>) </a> -->
            <a href="#" class="cart-text">
           <div class="cart-text-round">
           <?php echo sprintf(_n('%d', '%d', WC()->cart->cart_contents_count, 'store'), WC()->cart->cart_contents_count); ?>   
           </div> 
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.4181 3.25C8.6981 2.66 9.3011 2.25 10.0001 2.25H14.0001C14.6981 2.25 15.3011 2.66 15.5821 3.25C16.2651 3.256 16.7981 3.287 17.2741 3.473C17.8423 3.69527 18.3365 4.07301 18.7001 4.563C19.0671 5.056 19.2391 5.69 19.4761 6.561L19.5131 6.697L20.1031 8.864C20.4965 9.06248 20.8413 9.34518 21.1131 9.692C21.7351 10.489 21.8451 11.438 21.7351 12.526C21.6271 13.582 21.2951 14.912 20.8791 16.577L20.8521 16.682C20.5891 17.735 20.3751 18.59 20.1221 19.257C19.8561 19.953 19.5201 20.523 18.9651 20.956C18.4111 21.389 17.7761 21.576 17.0371 21.666C16.3281 21.75 15.4471 21.75 14.3621 21.75H9.6381C8.5531 21.75 7.6711 21.75 6.9631 21.665C6.2231 21.577 5.5891 21.389 5.0341 20.955C4.4801 20.523 4.1441 19.953 3.8781 19.257C3.6241 18.59 3.4111 17.735 3.1481 16.682L3.1211 16.577C2.7051 14.912 2.3721 13.582 2.2651 12.527C2.1551 11.437 2.2651 10.489 2.8861 9.692C3.1691 9.33 3.5081 9.062 3.8961 8.864L4.4861 6.697L4.5241 6.561C4.7611 5.69 4.9331 5.056 5.3001 4.562C5.66383 4.07238 6.15799 3.695 6.7261 3.473C7.2021 3.287 7.7341 3.255 8.4181 3.25ZM8.4191 4.753C7.7571 4.76 7.4921 4.785 7.2721 4.871C6.96606 4.99068 6.69991 5.19411 6.5041 5.458C6.3281 5.695 6.2241 6.026 5.9341 7.093L5.5801 8.389C6.6181 8.25 7.9581 8.25 9.6221 8.25H14.3771C16.0421 8.25 17.3821 8.25 18.4191 8.389L18.0661 7.092C17.7751 6.025 17.6721 5.694 17.4961 5.457C17.3003 5.19311 17.0341 4.98968 16.7281 4.87C16.5081 4.784 16.2421 4.759 15.5801 4.752C15.438 5.05066 15.2141 5.30293 14.9345 5.47956C14.6548 5.6562 14.3309 5.74996 14.0001 5.75H10.0001C9.66934 5.74996 9.34537 5.6562 9.06573 5.47956C8.78609 5.30293 8.56223 5.05066 8.4201 4.752M10.0001 3.75C9.93379 3.75 9.87021 3.77634 9.82332 3.82322C9.77644 3.87011 9.7501 3.9337 9.7501 4C9.7501 4.0663 9.77644 4.12989 9.82332 4.17678C9.87021 4.22366 9.93379 4.25 10.0001 4.25H14.0001C14.0664 4.25 14.13 4.22366 14.1769 4.17678C14.2238 4.12989 14.2501 4.0663 14.2501 4C14.2501 3.9337 14.2238 3.87011 14.1769 3.82322C14.13 3.77634 14.0664 3.75 14.0001 3.75H10.0001ZM5.7001 9.886C4.7901 10.018 4.3491 10.258 4.0701 10.616C3.7901 10.973 3.6651 11.458 3.7581 12.374C3.8531 13.31 4.1581 14.534 4.5921 16.274C4.8701 17.382 5.0621 18.15 5.2821 18.724C5.4921 19.278 5.6991 19.571 5.9591 19.774C6.2181 19.976 6.5521 20.105 7.1421 20.176C7.7521 20.249 8.5421 20.25 9.6861 20.25H14.3161C15.4591 20.25 16.2511 20.249 16.8601 20.176C17.4501 20.106 17.7841 19.976 18.0431 19.774C18.3031 19.571 18.5091 19.278 18.7211 18.724C18.9391 18.15 19.1321 17.382 19.4091 16.274C19.8441 14.534 20.1491 13.31 20.2431 12.374C20.3371 11.458 20.2111 10.972 19.9321 10.615C19.6531 10.258 19.2121 10.018 18.3011 9.886C17.3711 9.752 16.1091 9.75 14.3161 9.75H9.6861C7.8931 9.75 6.6311 9.752 5.7011 9.886" fill="#111111"/>
</svg>
 </a>

            <a href="<?php echo get_home_url(  );?>#order" class="btn green">Tilaa nyt</a>
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
                    </div>
                </div>
                <div class="header__drawer"></div>


    </header>