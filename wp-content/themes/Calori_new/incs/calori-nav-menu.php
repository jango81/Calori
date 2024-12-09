<?php

function clean_menu($theme_location, $classes)
{
    if (($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location])) {
        $menu = get_term($locations[$theme_location], 'nav_menu');
        $menu_items = wp_get_nav_menu_items($menu->term_id);

        $menu_list = '<nav class="' . $classes["wrapper_class"] . '">' . "\n";
        $menu_list .= '<ul class="' . $classes["menu_class"] . '">' . "\n";

        $count = 0;
        $submenu = false;

        foreach ($menu_items as $menu_item) {

            $link = $menu_item->url;
            $title = $menu_item->title;

            if (!$menu_item->menu_item_parent) {
                $parent_id = $menu_item->ID;

                $menu_list .= '<li class="' . $classes["item_class"] . '">' . "\n";
                $menu_list .= '<a href="' . $link . '">' . $title . '</a>' . "\n";
            }

            if ($parent_id == $menu_item->menu_item_parent) {

                if (!$submenu) {
                    $submenu = true;
                    $menu_list .= '<ul class="' . $classes["submenu_class"] . '">' . "\n";
                }

                $menu_list .= '<li>' . "\n";
                $menu_list .= '<a href="' . $link . '">' . $title . '</a>' . "\n";
                $menu_list .= '</li>' . "\n";


                if (isset($menu_items[$count + 1]) && $menu_items[$count + 1]->menu_item_parent != $parent_id && $submenu) {
                    $menu_list .= '</ul>' . "\n";
                    $submenu = false;
                }

            }

            if (isset($menu_items[$count + 1]) && $menu_items[$count + 1]->menu_item_parent != $parent_id) {
                $menu_list .= '</li>' . "\n";
                $submenu = false;
            }

            $count++;
        }

        $menu_list .= '</ul>' . "\n";
        $menu_list .= '</nav>' . "\n";

    } else {
        $menu_list = '<!-- no menu defined in location "' . $theme_location . '" -->';
    }
    echo $menu_list;
}

add_action('print_nav_menu', "clean_menu", 10, 2);

function mobile_menu($theme_location)
{
    if (($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location])) {
        $menu = get_term($locations[$theme_location], 'nav_menu');
        $menu_items = wp_get_nav_menu_items($menu->term_id);

        $menu_list = '<ul class="navigation__menu">' . "\n";

        $count = 0;
        $submenu = false;

        foreach ($menu_items as $menu_item) {

            $link = $menu_item->url;
            $title = $menu_item->title;

            if (!$menu_item->menu_item_parent) {
                $parent_id = $menu_item->ID;

                $menu_list .= '<li class="menu__item">' . "\n";
                $menu_list .= '<div class="navigation__row">';
                $menu_list .= '<a href="' . $link . '">' . $title . '</a>' . "\n";
                $menu_list .= '<div class="navigation__open"><button></button></div></div>';
            }

            if ($parent_id == $menu_item->menu_item_parent) {

                if (!$submenu) {
                    $submenu = true;
                    $menu_list .= '<ul class="navigation__submenu submenu">' . "\n";
                }

                $menu_list .= '<li>' . "\n";
                $menu_list .= '<a href="' . $link . '">' . $title . '</a>' . "\n";
                $menu_list .= '</li>' . "\n";


                if (isset($menu_items[$count + 1]) && $menu_items[$count + 1]->menu_item_parent != $parent_id && $submenu) {
                    $menu_list .= '</ul>' . "\n";
                    $submenu = false;
                }

            }

            if (isset($menu_items[$count + 1]) && $menu_items[$count + 1]->menu_item_parent != $parent_id) {
                $menu_list .= '</li>' . "\n";
                $submenu = false;
            }

            $count++;
        }

        $menu_list .= '</ul>' . "\n";
        $menu_list .= '</nav>' . "\n";

    } else {
        $menu_list = '<!-- no menu defined in location "' . $theme_location . '" -->';
    }
    echo $menu_list;
}

add_action('mobile_nav_menu', 'mobile_menu', 10, 1);