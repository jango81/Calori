<?php
/* Template Name: Checkout */
get_header(null, array("announcement" => false, "show_cart" => false));
?>
<main id="main">
    <div class="checkout__container">
        <?php the_content(); ?>
    </div>
</main>
<?php
get_footer();
?>