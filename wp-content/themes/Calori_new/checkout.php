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

<script src="
https://cdn.jsdelivr.net/npm/nice-select2@2.2.0/dist/js/nice-select2.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/nice-select2@2.2.0/dist/css/nice-select2.min.css
" rel="stylesheet">

<script>
    NiceSelect.bind(document.getElementById("delivery_time"), {searchable: false});
    // $('#delivery_time').val(1).trigger('change.select2');
    $('#delivery_time option:eq(0)').prop('selected',true);

   
    
    document.addEventListener('DOMContentLoaded', function(){
        setTimeout(() => {
        $('.nice-select').find('.option').eq(0).addClass('selected');
        let text = $('.nice-select').find('.option').eq(0).text();

        $('.nice-select').find('.current').text(text);
    }, 500);
    })

</script>