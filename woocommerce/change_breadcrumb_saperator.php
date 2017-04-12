<?php
add_filter( 'woocommerce_breadcrumb_defaults', 'change_breadcrumb_delimiter' );
function change_breadcrumb_delimiter( $defaults ) {
	// Change the breadcrumb delimeter from '/' to '>'
	$defaults['delimiter'] = ' &gt; ';
	return $defaults;
}