<?php
/* Template Name: Miksi Calori? */
get_header(null, array("announcement" => true, "show_cart" => true))
?>
<main id="main">

    <?php get_template_part("mini-cart") ?>
    <div class="loading" id="loading">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/loading-gif.gif" alt="loading">
    </div>

    <div class="breadcrumbs">
        <ul>
            <li>
                <a href="/">Kotisivu</a>
            </li>
            <li>
            Miksi Calori?
            </li>
        </ul>
    </div>
    <article id="why-calori">
    <section class="section">
        <div class="container">
            <div class="section-wrapper">
                <div class="menu-page">
                    <h1 class="h1">
                    Miksi Calori?
                    </h1>
                    
                </div>
            </div>

            <div class="how-it-works" style="margin-top: 40px;">
                <div class="how-it-works_item">
                    <img
                    src="<?php echo get_template_directory_uri() ?>/assets/images/why1.png"
                    alt="how1"
                    class="how-it-works_item_img" />

                    <div class="how-it-works_item_text">
                    <div class="how-it-works_item_text_title">Miltä kuulostaa jos sinulla olisi oma kokki?</div>
                    <div class="how-it-works_item_text_text">
                    ✔ Huipputiimissämme on ammattilaiset kokit laajan kokemuksen kanssa <br>
                    ✔ Helsingin yliopiston ravitsemusopettaja ravistemusasiantuntijana
                    </div>
                    </div>
                </div>
                <div class="how-it-works_item">
                    <img
                    src="<?php echo get_template_directory_uri() ?>/assets/images/why2.png"
                    alt="how1"
                    class="how-it-works_item_img" />

                    <div class="how-it-works_item_text">
                    <div class="how-it-works_item_text_title">Säästä aikaa ja vaivaa</div>
                    <div class="how-it-works_item_text_text">
                    ✔ Säästät yli 7 tuntia aikaa viikossa, kun sinun ei tarvitse huolehtia ruokailusta <br>
                    ✔ Me suunnittelemme, kokkaamme ja toimitamme ruoat kotiovelle
                    </div>
                    </div>
                </div>
                <div class="how-it-works_item">
                    <img
                    src="<?php echo get_template_directory_uri() ?>/assets/images/why3.png"
                    alt="how1"
                    class="how-it-works_item_img" />

                    <div class="how-it-works_item_text">
                    <div class="how-it-works_item_text_title">Tiedät mitä syöt</div>
                    <div class="how-it-works_item_text_text">
                    ✔ Kalorit koostuvat (20%pr/30%rs/50%hl) <br>
                    ✔ 15% kovia rasvoja ja 85% pehmeitä <br>
                    ✔ Energiantarve ja -saanti kohtaavat <br>
                    ✔ Paljon piristävää vaihtelua ruokailussa <br>
                    ✔ Yli 60 reseptiä reseptikirjassa
                    </div>
                    </div>
                </div>
                <div class="how-it-works_item">
                    <img
                    src="<?php echo get_template_directory_uri() ?>/assets/images/why4.png"
                    alt="how1"
                    class="how-it-works_item_img" />

                    <div class="how-it-works_item_text">
                    <div class="how-it-works_item_text_title">Ylläpidä säännöllistä ruokailua</div>
                    <div class="how-it-works_item_text_text">
                    ✔ 2-5 ravitsevaa ateriaa päiväksi <br>
                    ✔ Optimaalinen ravintoainejakauma <br>
                    ✔ Hallitse painoa, syö terveellisesti, kasvata lihasmassaa
                    </div>
                    </div>
                </div>
                </div>
        </div>
    </section>

       
       
    </article>
    <div class="main__dark">
    </div>
</main>

<!--<section class="bigbanner timer mb0">
        <div class="timer-wrap">
            <div class="banner-title">
                Lähin toimitus
            </div>
            <div class="banner-text">
                Huomaa-lähin toimitus on <span class="nextdate"><?php echo get_field("order_end_day", "option") ?></span>. <br>
                Tilausten vastaanottamisen päättymiseen asti tänä päivänä:
            </div>
            <custom-timer class=" custom-timer"
                data-day="<?php echo get_field("order_end_day", "option") ?>"
                data-time="<?php echo get_field("order_end_time", "option") ?>">

                <div class="custom-timer__body">
                    <div class="custom-timer__time">
                        <span class="custom-timer__number" id="timer-days"></span>
                        <span class="custom-timer__name">Päivää</span>
                    </div>
                    <div class="custom-timer__time">
                        <span class="custom-timer__number" id="timer-hours"></span>
                        <span class="custom-timer__name">Tuntia</span>
                    </div>
                    <div class="custom-timer__time">
                        <span class="custom-timer__number" id="timer-minutes"></span>
                        <span class="custom-timer__name">Minuuttia</span>
                    </div>
                    <div class="custom-timer__time">
                        <span class="custom-timer__number" id="timer-seconds"></span>
                        <span class="custom-timer__name">Sekunttia</span>
                    </div>
                </div>
            </custom-timer>

            <a href="<?php echo get_home_url(); ?>#order" class="btn green">Tee tilaus</a>
        </div>
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/banner11.png" alt="banner" class="bigbanner-bg abs">
    </section>
-->
 <section class="bigbanner timer mb0">
      <div class="timer-wrap newbanner">
        <div class="banner-title newbanner-title">
          Uusi vuosi, <span>uusi sinä</span>
        </div>
        <div class="banner-text newbanner-text">
          Seuraava toimitus on <span>Perjantai 3.1.2024</span>. <br><br>
          Tee tilaus ennen uutta vuotta, ja saat 50€ alennuksen tilauksestasi koodilla:
        </div>

        <button class="promo">
          CALORI25
        </button>
        
        <div class="banner-after-text">
          Koodi voimassa 18.12-31.12.2024, minimitilaus 100€.
        </div>
      </div>
      <img src="<?php echo get_template_directory_uri() ?>/assets/images/banner11.png" alt="banner" class="bigbanner-bg abs">
     </section>

<section class="section grey ">
    <div class="container">
      <div class="section-wrapper">

      <div class="h2-wrapper">
        <h2 class="h2">
        Miksi Calori?
        </h2>
      </div>
        <div class="whywe swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="whywe_item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/ico01.svg" class="whywe_item_ico">

                <span class="whywe_item_text">
                Maukasta ja terveellistä ruokaa
                </span>
                </img>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="whywe_item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/ico02.svg" class="whywe_item_ico">

                <span class="whywe_item_text">
                Säästät 8h aikaa viikossa
                </span>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="whywe_item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/ico03.svg" class="whywe_item_ico">

                <span class="whywe_item_text">
                Tasapainoa ja helpoutta elämääsi
                </span>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="whywe_item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/ico04.svg" class="whywe_item_ico">

                <span class="whywe_item_text">
                Saavutat kaikki tavoitteesi
                </span>
              </div>
            </div>

          </div>
        </div>

        <a href="/meista/miksi-calori/" class="btn green" style="margin: 24px auto 0;">
        Lue lisää
        </a>
      </div>
    </div>
  </section>

  
    

<?php get_footer() ?>
