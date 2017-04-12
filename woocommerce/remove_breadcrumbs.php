<?php
add_action( 'init', 'remove_wc_breadcrumbs' );
function remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}

//If you want to remove breadcrumbs on WooCommerce pages when using a Woo theme, use:
add_action( 'init', 'jk_remove_woo_wc_breadcrumbs' );
function jk_remove_woo_wc_breadcrumbs() {
    if ( is_woocommerce() || is_cart() || is_checkout() ) {
        remove_action( 'woo_main_before', 'woo_display_breadcrumbs', 10 );
    }
}