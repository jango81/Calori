<?php
add_action("wp_ajax_get_meal_menu", "get_meal_menu");
add_action("wp_ajax_nopriv_get_meal_menu", "get_meal_menu");
function get_meal_menu()
{
    $args = array(
        'post_type' => 'ruokalistat',
        'posts_per_page' => -1, 
    );
    
    $query = new WP_Query($args);

    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();
            $fields = get_fields();
        }
    }

    wp_send_json_success($fields);
}
