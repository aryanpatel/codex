<?php
//By default WordPress strips HTML from category descriptions. 
//You can get around this by adding a small snippet to your theme functions.php file:

//The first part prevents html from being stripped from term descriptions.
foreach ( array( 'pre_term_description' ) as $filter ) {
    remove_filter( $filter, 'wp_filter_kses' );
}
 //The second part prevents html being stripped out when using the term description function 
foreach ( array( 'term_description' ) as $filter ) {
    remove_filter( $filter, 'wp_kses_data' );
}