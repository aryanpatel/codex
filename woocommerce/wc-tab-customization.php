<?php

function wpto_product_tab($tabs) {
    global $product;

// get options
    $wpto_options = get_option('wpto_options');
    if (!empty($wpto_options)) {

        if (isset($tabs['description'])) {
            if (!empty($wpto_options['description_order'])) {
                $tabs['description']['priority'] = $wpto_options['description_order'];
            }
            if (!empty($wpto_options['description_name'])) {
// $tabs['description']['title'] = $wpto_options['description_name'];
            }
        }
        if (isset($tabs['reviews'])) {

            if (!empty($wpto_options['review_order'])) {
                $tabs['reviews']['priority'] = $wpto_options['review_order'];
            }
            if (!empty($wpto_options['description_name'])) {
                $tabs['reviews']['title'] = $wpto_options['review_name'];
            }
        }
    }

    return $tabs;
}

function wpto_description_title($title) {

    $wpto_options = get_option('wpto_options');

    if (isset($wpto_options['description_name']) && !empty($wpto_options['description_name'])) {
        $title = $wpto_options['description_name'];
    }
    return $title;
}

/**
 * Adding Hooks
 *
 * Adding hooks for templates, shortcodes, styles and scripts.
 *
 * @package WpWEB Woocommerce tab order
 * @since 1.0.0
 */
function add_hooks() {
    add_filter('woocommerce_product_tabs', array($this, 'wpto_product_tab'), 10, 1);
    add_filter('woocommerce_product_description_heading', array($this, 'wpto_description_title'), 10, 1);
}
