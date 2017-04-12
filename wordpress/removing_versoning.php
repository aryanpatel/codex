<?php
//Remove versoning from Javascript/CSS
add_filter( 'style_loader_src', 'remove_cssjs_ver', 11, 1 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 11, 1 );
function remove_cssjs_ver( $src ) {
 if( strpos( $src, '?ver=' ) ) {
 	$src = remove_query_arg( 'ver', $src );
 }
 return $src;
}