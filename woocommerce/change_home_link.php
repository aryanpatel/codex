<?php
add_filter( 'woocommerce_breadcrumb_home_url', 'custom_breadrumb_home_url' );
function custom_breadrumb_home_url() {
    return 'http://exmaple.com';
}