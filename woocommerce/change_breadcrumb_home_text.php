<?php
add_filter( 'woocommerce_breadcrumb_defaults', 'change_breadcrumb_home_text' );
function change_breadcrumb_home_text( $defaults ) {
    // Change the breadcrumb home text from 'Home' to 'Root'
	$defaults['home'] = 'Root';
	return $defaults;
}
